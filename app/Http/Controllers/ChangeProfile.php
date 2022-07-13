<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ChangeProfile extends Controller
{
    public function changeProfile(){
        if(Auth::user()){
            $user =User::find(Auth::user()->id);
            if($user){
                return view('admin.partial.changeProfile',compact('user'));
            }
        }
    }
    public function updateProfile(Request $request){
        $user=User::find(Auth::user()->id);
        if($user){
            $user->name=$request['name'];
            $user->email=$request['email'];
            $user->save();
            $notification=array(
                'message'=>'Profile updated successfully',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
        }else{
            return Redirect()->back();

        }
    }
}
