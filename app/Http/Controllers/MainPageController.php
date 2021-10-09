<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Master;
use App\Testimoni;
use App\Pendaftaran_SMK;
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
    public function pendaftaran_smk()
    {
        return view('main_page/pendaftaranSMK');
    }
    public function submitPendafatran(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required',
            'panggilan' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required|date',
            'jenis_kelamin' => 'required',
            'anak_ke' => 'required',
            'status_dlm_keluarga' =>'required',
            'alamat' =>'required',
            'asal_sekolah' =>'required',
            'alamat_sekolah' =>'required',
            'nama_ayah' =>'required',
            'alamat_ayah' =>'required',
            'pekerjaan_ayah' =>'required',
            'pendapatan_ayah' =>'required',
            'no_tlp_ayah' =>'required',
            'nama_ibu' =>'required',
            'alamat_ibu' =>'required',
            'pekerjaan_ibu' =>'required',
            'pendapatan_ibu' =>'required',
            'no_tlp_ibu' =>'required',
        ]);

        $siswa = new pendaftaran_smk;
        $siswa->nama            = $request->nama;
        $siswa->panggilan       = $request->panggilan;
        $siswa->tempat_lahir    = $request->tempat_lahir;
        $siswa->tgl_lahir       = $request->tgl_lahir;
        $siswa->jenis_kelamin       = $request->jenis_kelamin;
        $siswa->anak_ke         = $request->anak_ke;
        $siswa->status_dlm_keluarga      = $request->status_dlm_keluarga;
        $siswa->alamat          = $request->alamat;
        $siswa->asal_sekolah    = $request->asal_sekolah;
        $siswa->alamat_sekolah          = $request->alamat_sekolah;
        $siswa->nama_ayah    = $request->nama_ayah;
        $siswa->alamat_ayah          = $request->alamat_ayah;
        $siswa->pekerjaan_ayah    = $request->pekerjaan_ayah;
        $siswa->pend_terakhir_ayah          = $request->pend_terakhir_ayah;
        $siswa->pendapatan_ayah    = $request->pendapatan_ayah;
        $siswa->no_tlp_ayah          = $request->no_tlp_ayah;

        $siswa->nama_ibu    = $request->nama_ibu;
        $siswa->alamat_ibu          = $request->alamat_ibu;
        $siswa->pekerjaan_ibu    = $request->pekerjaan_ibu;
        $siswa->pend_terakhir_ibu          = $request->pend_terakhir_ibu;
        $siswa->pendapatan_ibu    = $request->pendapatan_ibu;
        $siswa->no_tlp_ibu          = $request->no_tlp_ibu;
        $siswa->status          = "Mendaftar";

        if($siswa->save()){
            return redirect('/pendaftaran_SMK')->with('success', 'Data Berhasil ditambahkan. silahkan cek email anda');
        }else{
            dd("gagal");
        }
    }
}
