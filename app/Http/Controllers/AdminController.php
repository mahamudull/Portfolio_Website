<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{
    public function post_page(){


        return view('admin.post_page');
    }
    public function add_post(Request $request){


        $user=Auth()->user();

        $userid = $user->id;
        $name= $user->name;
        $usertype = $user->usertype;




       $post=new post;
       $post->title=$request->title;
       $post->description=$request->description;
       $post->post_staus='active';
       $post->user_id=$userid;
       $post->name= $name;
       $post->usertype=$usertype;
        $image=$request->image;
     if($image){

        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('postimage',$imagename);
         $post->image=$imagename;

     }
    
       $post->save();
       return redirect()->back()->with('message','post added successfully');

    }
    public function show_post(){

 return view('admin.show_post');


    }
}
