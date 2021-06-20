<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Testimoni;

class TestimoniController extends Controller
{
    public function index()
    {
        $data['no'] = 1;
        $data['testimonis'] = Testimoni::all();
        return view('admin.testimoni.index',$data);
    }
    public function create()
    {
        return view('admin.testimoni.create_testimoni');
    }
}
