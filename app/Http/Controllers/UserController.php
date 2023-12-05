<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class UserController extends Controller
{
    public function index()
    {


        $users = User::all();
        return view("Users/index", compact("users"));
      

    }
    public function insert(){
        $url=('/create');
        return view("Users/register",compact("url"));
      }
    
      public function store(Request $request){

  
        $user= new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = hash::make($request->password);
        $user->email_verified_at = now();
        $user->remember_token=Str::random(10);
        $user->save();
  
        return view('welcome');
  
      }

      public function delete($id){
        $user= User::find($id);
        if(!is_null($user)){
          $user->delete();
          return redirect('getuserdata');
      
        }
    }
    public function edit($id){
        $url=('/user/update').'/'.$id;
        $user= User::find($id);
        return view("Users/edit", compact("user","url"));
      
      }

      public function update(Request $request,$id){
        $user= User::find($id);
        if($request->name == null || $request->email == null || $request->password ==null){
  
          return redirect("getuserdata");
         
        }
     
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = hash::make($request->password);
        $user->save();
  
        return redirect('getuserdata');
  
      }

      

}


