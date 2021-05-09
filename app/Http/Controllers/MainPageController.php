<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainPageController extends Controller
{
    public function index()
    {
        return view('main_page/welcome');
    }
    public function contact()
    {
        return view('main_page/contact');
    }
}
