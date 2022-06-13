<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Session;

class AuthenticationController extends Controller
{
    public function login()
    {
        return view('authentication.login');
    }

    public function adminLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8|max:30'
        ]);

        $admin = Admin::where('email', '=', $request->email)->first();

        if($admin){
            if($request->password == $admin->password) {
                $request->session()->put('LoginId', $admin->id);
                return redirect()->route('adminIndex');
            }else{
                return back()->with('fail', 'Password not Matches');
            }
        } else {
            return back()->with('fail', 'Email or Password is Incorrect. Please Try Again');
        }
    }

    public function logout()
    {
        if(Session::has('LoginId')) {
            Session::pull('LoginId');
            return redirect('login');
        }
    }
}
