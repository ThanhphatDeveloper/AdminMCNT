<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CustomAuthController extends Controller
{
    public function login() {
        return view('login');
    }

    public function login_action(Request $request) {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        $user = User::where('username','=',$request->username)->first();
        if($user) {
            if ($request->password == $user->password && $request->role == 0) {
                $request->session()->put('loginId',$user->id);
                return redirect('home');
            } else {
                return back()->with('Lỗi');
            }
        } else {
            return back()->with('Lỗi');
        }
    }

    public function logout(){
        if(session()->has('loginId')){
            session()->pull('loginId');
            return redirect('login');
        }
    }

    public function home() {
        return view('home');
    }

    public function repass() {
        return view('re-password');
    }

    public function changepassword(Request $request)
    {
        //dd($request);
        $user = User::find(session()->get('loginId'));
        if($user->password == $request->old_password) {
            if($request->new_password == $request->confirm_password) {
                $user->password = $request->new_password;
                $user->update();
                return redirect('home');
            } else {
                return back();
            }
        } else {
            return back();
        }
    }
}
