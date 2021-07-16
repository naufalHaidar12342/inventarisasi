<?php

namespace App\Controllers;


class Login extends BaseController
{
    protected $request;

    public function index()
    {

        $data = [
            'title' => "Sistem Informasi Manajemen Aset"
        ];

        return view('logins/Login', $data);
    }

    public function submit()
    {

        $data = [
            'title' => "Sistem Informasi Manajemen Aset"
        ];

        return view('logins/Login', $data);
    }

    public function register()
    {
        // $tampung = $this->request->getVar('full-name');

        // dd($tampung);
        // $name = $_POST['full-name'];
        // $username = $_POST['username'];
        // $password = $_POST['password'];
        // $rePassword = $_POST['re-password'];

        // if ($password != $rePassword) {
        //     // register gagal karna rePassword tidak sama
        //     return redirect()->to('/Login/register?error=wrong-password');
        // }

        // daftar user ke database
        $pageTitle = ['title' => 'Daftar Akun'];
        return view('/auth/register', $pageTitle);
    }

    public function signUp()
    {
        $data = [
            'title' => "Daftarkan Akun"
        ];

        return view('logins/Register', $data);
    }
}
