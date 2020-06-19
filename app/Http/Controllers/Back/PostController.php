<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        return $this->middleware('auth');
    }


    public function index()
    {
        $posts = Post::latest()->paginate(9);
        return view('back.post.post',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $categories = Category::latest()->get();
        return view('back.post.addpost',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        
        $post = new Post();
        $post->category_id = $request->category;
        $post->slug = Str::slug($request->titleen);
        $post
            ->setTranslation('title','en',$request->titleen)
            ->setTranslation('content','en',$request->contenten)
            ->setTranslation('title','az',$request->titleaz)
            ->setTranslation('content','az',$request->contentaz);
            
        if ($request->hasFile('img')) {
            $imgName = Str::slug($request->titleen).'.' . $request->img->getClientOriginalExtension();
            $request->img->move(public_path('images/'),$imgName);
            $post->img = 'images/'.$imgName;
        } 
        $post->save();   

        return redirect()->route('admin.post.index')->with('success','Post has been added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $categories = Category::latest()->get();
        return view('back.post.editpost',compact('categories','post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        if (Session::get('locale') == 'az') {
            $post  
                ->setTranslation('title','az',$request->title)
                ->setTranslation('content','az',$request->content);
            
        }
        else {
            $post   
                ->setTranslation('title','en',$request->title)
                ->setTranslation('content','en',$request->content);
         

        }

        if ($request->hasFile('img')) {
            $imgName = Str::slug($request->title).'.' . $request->img->getClientOriginalExtension();
            $request->img->move(public_path('images/'),$imgName);
            $post->img = 'images/'.$imgName;
        } 
        $post->save();   


         return redirect()->route('admin.post.index')->with('success','Post has been updated successfully'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        if (File::exists($post->img)) {
            File::delete(public_path($post->img));
        }
        $post->delete();
        return redirect()->route('admin.post.index')->with('success','Post has been deleted successfully'); 

    }
}
