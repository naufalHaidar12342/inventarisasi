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

        return view('pages/Login', $data);
    }

    public function submit()
    {

        $data = [
            'title' => "Sistem Informasi Manajemen Aset"
        ];

        return view('pages/Login', $data);
    }

    public function register()
    {

        $data = [
            'title' => "Sistem Informasi Manajemen Aset"
        ];

        return view('pages/Register', $data);
    }
}
