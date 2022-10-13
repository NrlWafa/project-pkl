<?php

namespace App\DA;

use DB;

date_default_timezone_set("Asia/Makassar");

class LoginModel
{
    public static function register_save($req)
    {
        $token = md5($req->input('nik') . microtime());

        DB::table('data_karyawan')->insert([
            'name' => $req->input('name'),
            'nik' => $req->input('nik'),
            'level' => $req->input('level'),
            'created_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'id_user' => $req->input('nik'),
            'password' => md5($req->input('password')),
            'token' => $token,
            'login_at' => date('Y-m-d H:i:s')
        ]);
    }

    public static function getUser($nik)
    {
        return DB::table('data_karyawan as dk')
        ->leftJoin('users as u', 'dk.nik', '=', 'u.id_user')
        ->leftJoin('level_karyawan as lk', 'dk.level', '=', 'lk.id_level')
        ->where('dk.nik', $nik)
        ->select('dk.nik', 'dk.name', 'u.password', 'u.token', 'lk.level_name')
        ->first();
    }

    public static function getToken($token)
    {
        return DB::table('data_karyawan as dk')
        ->leftJoin('users as u', 'dk.nik', '=', 'u.id_user')
        ->leftJoin('level_karyawan as lk', 'dk.level', '=', 'lk.id_level')
        ->where('u.token', $token)
        ->select('dk.nik', 'dk.name', 'u.password', 'u.token', 'lk.level_name')
        ->first();
    }
}
?>
