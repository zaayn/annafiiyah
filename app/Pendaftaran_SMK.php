<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran_SMK extends Model
{
    protected $table = 'pendaftaran_smk';
    protected $primaryKey = 'siswa_id';
    public $incrementing = true;
    protected $fillable = [
        'nama'
       ,'panggilan'
       ,'tempat_lahir'
       ,'tgl_lahir'
       ,'jenis_kelamin'
       ,'anak_ke'
       ,'status_dlm_keluarga'
       ,'alamat'
       ,'asal_sekolah'
       ,'alamat_sekolah'
       ,'nama_ayah'
       ,'alamat_ayah'
       ,'pekerjaan_ayah'
       ,'pend_terakhir_ayah'
       ,'pendapatan_ayah'
       ,'no_tlp_ayah'
       ,'nama_ibu'
       ,'alamat_ibu'
       ,'pekerjaan_ibu'
       ,'pend_terakhir_ibu'
       ,'pendapatan_ibu'
       ,'no_tlp_ibu'
    ];
}
