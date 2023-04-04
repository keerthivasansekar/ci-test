<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;

class LoginController extends BaseController
{
    public function index()
    {
        $data['pageClass'] = 'login';
        $data['_view_file'] = 'auth/login';
        return view('layouts/auth', $data);
    }
}
