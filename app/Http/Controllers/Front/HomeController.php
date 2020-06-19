<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function __construct()
    {
        view()->share('categories',Category::latest()->get()); 
        view()->share('recentposts',Post::latest()->take(4)->get()); 
           
    }

    public function index()
    {
        $posts = Post::latest()->paginate(12);
        return view('front.index',compact('posts'));
    }

    public function locale($locale)
    {
        Session::put('locale', $locale);
        return redirect()->back();
    }

    public function single($categoryslug,$postslug)
    {
       
            $category = Category::where('slug', $categoryslug)->firstOrFail();
            $post = Post::where('category_id',$category->id)->where('slug', $postslug)->firstOrFail();
         
            $nextpost = Post::where('id', '>', $post->id)->orderBy('id')->first() ;
        
           $previouspost = Post::where('id', '<', $post->id)->orderBy('id','desc')->first();
          
       
        return view('front.single',compact('post','nextpost','previouspost'));
    }

    public function category(String $category)
    {
        $cposts = Category::where('slug', $category)->firstOrFail();
        $posts = Post::where('category_id',$cposts->id)->paginate(9);
        return view('front.category',compact('cposts','posts'));
    }

    public function search(Request $request)
    {
     
        if (Session::get('locale') == 'az') {
            $posts = Post::where('title->az',  'LIKE', '%' . $request->search . '%')->get();
  
        }
        else {
            $posts = Post::where('title->en',  'LIKE', '%' . $request->search  . '%')->get();
         

        }
      
        return view('front.index',compact('posts'));
    }
}
