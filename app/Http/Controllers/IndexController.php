<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    function index(){
        return view('homepage.index');
    }

    function tentang(){
        return view('homepage.tentang');
    }

    function layanan(){
        return view('homepage.layanan');
    }

    function kontak(){
        return view('homepage.kontak');
    }
}
