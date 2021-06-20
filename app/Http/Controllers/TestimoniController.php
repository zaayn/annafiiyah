<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Testimoni;
use Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;

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
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required',
            'umur' => 'required',
            'asal' => 'required',
            'profesi' => 'required',
            'ungkapan' => 'required',
        ]);

        $testimoni = new testimoni;
        $testimoni->testimoni_id    = $request->testimoni_id;
        $testimoni->nama            = $request->nama;
        $testimoni->umur            = $request->umur;
        $testimoni->asal            = $request->asal;
        $testimoni->profesi         = $request->profesi;
        $testimoni->ungkapan        = $request->ungkapan;
       
        if ($testimoni->save()){
            return redirect('/admin/testimoni')->with('success', 'item berhasil ditambahkan');
        }
        else{
            return redirect('/admin/testimoni')->with('error', 'item gagal ditambahkan');
        }
    }
    public function destroy($testimoni_id){
        $testimoni = Testimoni::findOrFail($testimoni_id)->delete();
        return redirect()->route('testimoni.index')->with('success', 'delete sukses');
    }
}
