<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pendaftaran_SMK;

class PendaftaranController extends Controller
{
    public function smkputri()
    {
        $data['no'] = 1;
        $data['siswasmk'] = Pendaftaran_SMK::all();
        return view('admin/pendaftaran/smkputri',$data);
    }
    public function detail($siswa_id)
    {
        $siswa = Pendaftaran_SMK::findOrFail($siswa_id);
        return view('admin/pendaftaran/detail_siswa')->with('siswa',$siswa);
    }
    public function confirm($siswa_id)
    {
        $siswa = Pendaftaran_SMK::findOrFail($siswa_id);
        $siswa->status = "Aktif";
        $siswa->save();
        return view('admin/pendaftaran/detail_siswa')->with('siswa',$siswa)->with('success','Administrasi pembayaran telah dikonfirmasi');
    }
}
