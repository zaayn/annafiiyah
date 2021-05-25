<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Master;

class MasterController extends Controller
{
    public function index()
    {
        $data['no'] = 1;
        $data['masters'] = Master::all();
        return view('admin.master.index',$data);
    }
}
