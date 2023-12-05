<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //
    public function index()
    {
        $posts = Post::with('user')->get();
        return view('Posts/post-index', compact("posts"));
    }

    public function insert(){
       // $url=('/create');
       $posts = Post::with('user')->get();
        return view("Posts/add-post",compact("posts"));
      }

      public function store(Request $request){
        
        $post= new Post;

        if($request->hasFile("image")){
           

            $destination_path='public/images';
            $image=$request->file('image');
            $image_name=$image->getClientOriginalName();
            $path=$request->file('image')->storeAs($destination_path,$image_name);
            $post->title = $request->title;
            $post->user_id = $request->user_id;
            $post->details = $request->details;
            $post->image = $image_name;
            $post->save();
            return view('welcome');
        }
        else{
  
        $post->title = $request->title;
        $post->user_id = $request->user_id;
        $post->details = $request->details;
        $post->save();
  
        return view('welcome');
  
      }
    }
      public function delete($id){
        $post= Post::find($id);
        if(!is_null($post)){
          $post->delete();
          return redirect('getuserpost');
      
        }
    }


}
