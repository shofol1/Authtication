<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class ChangePass extends Controller
{
    public function changePassword(){
        return view('admin.partial.changePass');
    }
    public function updatePass(Request $request){
        $validateData=$request->validate([
            'oldPass'=>'required',
            'password'=>'required|confirmed|min:6',
            'password_confirmation' => 'required|min:3'
        ]);
        $hashPassword=Auth::user()->password;
        if(Hash::check($request->oldPass,$hashPassword)){
            $user=User::find(Auth::id());
            $user->password=Hash::make($request->password);
            $user->save();
            Auth::logout();
            return Redirect()->route('login')->with('success',"Password update successfully.");

        }else{
            return Redirect()->back()->with('error',"Current password is invalid.");
        }
    }
}
