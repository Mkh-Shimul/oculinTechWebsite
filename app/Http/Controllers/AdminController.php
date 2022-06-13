<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Session;

class AdminController extends Controller
{
    public function dashboard()
    {
        $data = array();

        if(Session::has('LoginId')) {
            $data = Admin::where('id', '=', Session::get('LoginId'))->first();
        }

        return view('admin.index', compact('data'));
    }
}
