<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Master;
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
    public function sejarah()
    {
        $sejarah = Master::where('judul','Sejarah')->get();
        return view('main_page/sejarah')->with('sejarah',$sejarah);
    }
}
