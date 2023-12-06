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
           
           
            $post->title = $request->title;
            $post->user_id = $request->user_id;
            $post->details = $request->details;
            $post->image =  imageHandling($request->file("image"));
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
        $post->delete();
        return redirect('getuserpost');
 
    }
    public function edit($id){
        $url=('/post/update').'/'.$id;
        $post= Post::find($id);
        return view("Posts/edit-post", compact("post","url"));
    }

    public function update(Request $request,$id){
        $post= Post::find($id);
     
        if ($request->hasFile("image")) {
            $image = $request->file('image');
            $imageName = UpdateImage($image,$post->image);
            $post->title = $request->title;
            $post->details = $request->details;
            $post->image = $imageName;

            $post->update();
            return redirect('getuserpost');
        }
            else{
                 $post->title = $request->title;
                $post->details = $request->details;
                $post->update();
                return redirect('getuserpost');

            }
     
    
  
   
  
      }


}
