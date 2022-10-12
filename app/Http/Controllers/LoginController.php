<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use Validator;
use DB;

date_default_timezone_set('Asia/Makassar');

class LoginController extends Controller
{
    public function login()
    {
        return view('login.index');
    }

    public function login_save(Request $req)
    {
        dd($req->all(), MD5($req->input('password')));
    }

    public function register()
    {
        return view('register.index');
    }

    public function register_save(Request $req)
    {
        dd($req->all(), MD5($req->input('password')));
    }
}
