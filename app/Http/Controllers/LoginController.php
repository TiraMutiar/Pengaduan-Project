<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('land.utama');
    }
    public function dash_mas(){
        return view('masyarakat.dash');
    }

    public function masuk(){
        return view('masuk.login');
    }
    public function form(){
        return view('masyarakat.form');
    }
}
