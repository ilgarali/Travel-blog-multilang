<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }
     public function index()
    {
        $comments = Comment::latest()->paginate(6);
        return view('back.comment',compact('comments'));
    }

    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);
        $comment->delete();
        return redirect()->back()->with('success','You have deleted comment successfully');
    }

    public function approve(Request $request,$id)
    {
       
        $comment = Comment::findOrFail($id);
        $comment->active = $request->active;
        $comment->save();
        return redirect()->back()->with('success','You have changed comment status successfully');
    }
}
