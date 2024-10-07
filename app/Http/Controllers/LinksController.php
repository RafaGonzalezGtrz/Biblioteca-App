<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class LinksController extends Controller
{
    //links de usuarios
    public function home() {
        return view('mainscreen');
    }

    public function profile() {
        return view('profile');
    }

    public function search() {
        return view('search');
    }
    
    public function downloads() {
        return view('download');
    }

    public function support() {
        return view('support');
    }
    
    //links de logueo
    public function login() {
        return view('login');
    }

    public function register() {
        return view('register');
    }

    //links de admin
    public function admin() {
        return view('adminscreen');
    }
    public function users() {
        return view('users');
    }

    public function upload() {
        return view('upload');
    }

    public function store() {
        return view('store');
    }
}