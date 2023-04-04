<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;

class RegisterController extends BaseController
{
    public function index()
    {
        $data['pageClass'] = 'register';
        $data['_view_file'] = 'auth/register';
        return view('layouts/auth', $data);
    }
}
