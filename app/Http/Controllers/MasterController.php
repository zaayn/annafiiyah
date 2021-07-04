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
    public function master_item($master_id)
    {
        $data['master'] = Master::findOrFail($master_id);
        return view('admin.master.master_item',$data);
    }
    public function edit_master($master_id)
    {
        $data['master'] = Master::findOrFail($master_id);
        return view('admin.master.edit_master_item',$data);
    }
    public function update_master(Request $request, $master_id)
    {
        $master = Master::findOrFail($master_id);
        $master->isi    = $request->isi;
        $master->save();
        return redirect()->route('master.item', $master->master_id);
    }
}
