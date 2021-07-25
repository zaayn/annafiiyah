<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Master;
use App\Testimoni;
class MainPageController extends Controller
{
    public function index()
    {
        $data['testimonials'] = Testimoni::all();
        return view('main_page/welcome',$data);
    }
    public function contact()
    {
        return view('main_page/contact');
    }
    public function sejarah()
    {
        $data['master'] = Master::where('judul','Sejarah')->get();
        return view('main_page/sejarah',$data);
    }
    public function asas_dan_tujuan()
    {
        $data['master'] = Master::where('judul','Asas dan Tujuan')->get();
        return view('main_page/asas_dan_tujuan',$data);
    }
    public function sarpras()
    {
        $data['master'] = Master::where('judul','Sarana Prasarana')->get();
        return view('main_page/sarpras',$data);
    }
    public function bentuk_pendidikan()
    {
        $data['master'] = Master::where('judul','Bentuk Pendidikan')->get();
        return view('main_page/bentuk_pendidikan',$data);
    }
}
