<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use  App\Post;
class sitecontroller extends Controller
{
    public function blog()
   {
   	  $posts=Post::orderBy('created_at','desc')
   	               ->whereStatus('PUBLISHED')
   	               ->paginate(6);
   	  return View('blog',['posts'=>$posts]);
   }

   public function index()
   {
   	  return View('contact');
   }
    public function store(Request $request)
   {
   	   $request->validate([
          'object' => 'required|string|max:100',
          'email' => 'required|E-Mail',
           'body' => 'required|string',
       ]);
       $object_string= filter_var($request->object, FILTER_SANITIZE_STRING);
        $body_string= filter_var($request->body, FILTER_SANITIZE_STRING);
       $msg=new Contact();
       $msg->object=$object_string;
       $msg->email=$request->email;
       $msg->Message=$body_string;
       $msg->save();
       return redirect('/contact')->with("success","message bien envoyer");
   	 
   }

   public function show($slug)
   {
     if($post=Post::whereSlug($slug)->first()){
          return view('show',["post"=>$post]);
     }else{
      return back();
     }
    

   }
}
