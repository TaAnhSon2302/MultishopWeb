<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AutController extends Controller
{
    public function login(){
        return view('clients.authentication.login');
    }
    public function register(){
        return view('clients.authentication.register');
    }

    public function registerStore(Request $request){
       $request->validate([
        'user_email'=>  'required|email|unique:users,user_email',
        'user_name'=>  'required',
        'user_password'      =>  'required|min:8|max:256|',
        'user_confirm'  => 'required|same:user_password|min:8|max:256|'
       ]);
       try {
        $user= new User;
        $user->user_email = $request->user_email;
        $user->user_name = $request->user_name;
        $user->user_password =bcrypt($request->user_password);;
        $user->save();
        return redirect()->route('client.login')->with('success','Register  succesfully');
       } catch(Excption $e){
        return redirect()->route('client.register');
       }
    }
}
