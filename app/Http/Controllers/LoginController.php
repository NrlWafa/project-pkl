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

class LoginController extends Controller
{
    public function login()
    {
        return view('login.index');
    }

    public function login_save(Request $req)
    {
        $nik = $req->input('nik');
        $password = $req->input('password');

        $check = DB::table('users')->where('id_user', $nik)->where('password', MD5($password))->first();
        if ($check)
        {
            $data = LoginModel::getUser($nik);

            $session = $req->session();
            $session->put('auth', $data);

            $this->ensureLocalUserHasRememberToken($data);
            return $this->successResponse($data->token);

        } else {
            return redirect('/login')->with('alerts', [
                ['type' => 'danger', 'text' => '<strong>MAAF</strong> NIK atau Password yang anda masukan salah']
            ]);
        }
    }

    public function register()
    {
        $level = DB::table('level_karyawan')->get();

        return view('register.index', compact('level'));
    }

    public function register_save(Request $req)
    {
        $nik = $req->input('nik');

        $check = DB::table('users')->where('id_user', $nik)->first();
        if ($check)
        {
            return redirect('/register')->with('alerts', [
                ['type' => 'danger', 'text' => '<strong>MAAF</strong> anda sudah pernah mendaftar']
            ]);
        }

        LoginModel::register_save($req);

        return redirect('/login')->with('alerts', [
            ['type' => 'success', 'text' => 'Pendaftaran berhasil']
        ]);
    }

    private function generateRememberToken($nik)
    {
        return md5($nik . microtime());
    }

    private function ensureLocalUserHasRememberToken($localUser)
    {
        $token = $localUser->token;

        if (!$localUser->token)
        {
            $token = $this->generateRememberToken($localUser->id_user);
            DB::table('users')
            ->where('id_user', $localUser->id_user)
            ->update([
                'token' => $token
            ]);
            $localUser->token = $token;
        }

        return $token;
    }

    private function successResponse($rememberToken)
    {
        if (Session::has('auth-originalUrl')) {
            $url = Session::pull('auth-originalUrl');
        } else {
            $url = '/';
        }

        $response = redirect($url);
        if ($rememberToken)
        {
            $response->withCookie(cookie()->forever('presistent-token', $rememberToken));
        }

        return $response;
    }
}
