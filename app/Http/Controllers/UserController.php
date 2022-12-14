<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use Validator;
use DB;
use App\DA\LoginModel;
date_default_timezone_set('Asia/Makassar');

class UserController extends Controller
{
    public function profile()
    {
        $profile = LoginModel::detail_profile(session('auth')->nik);
        return view('profile.profile', compact('profile'));
    }

    public function edit_profile()
    {
        $profile = LoginModel::edit_profile(session('auth')->nik);
        return view('profile.editprofile', ['profile' => $profile]);
    }

    public function update_profile(Request $req)
    {
        LoginModel::update_profile($req);
        return redirect('/profile');
    }

}
