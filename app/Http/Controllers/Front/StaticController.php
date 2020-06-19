<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use App\Http\Requests\ContactRequest;
use App\Models\Comment;
use App\Models\Contact;
use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function about()
    {
        return view('front.about');
    }

    public function contact()
    {
        return view('front.contact');
    }
    public function contactus(ContactRequest $request)
    {
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();
        return redirect()->back()->with('success','We have received your message successfully');
    }

    public function comment(CommentRequest $request)
    {
        $comment = new Comment();
        $comment->name = $request->name;
        $comment->post_id = $request->post_id;
        $comment->email = $request->email;
        $comment->comment = $request->comment;
        $comment->save();
        return redirect()->back()->with('success','You have written comment successfully');
    }
}
