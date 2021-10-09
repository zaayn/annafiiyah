<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePendaftaranSmkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftaran_smk', function (Blueprint $table) {
            $table->increments('siswa_id')->UNIQUE();
            $table->string('nama');
            $table->string('panggilan')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('anak_ke')->nullable();
            $table->string('status_dlm_keluarga')->nullable();
            $table->string('alamat')->nullable();
            $table->string('asal_sekolah')->nullable();
            $table->string('alamat_sekolah')->nullable();
            $table->string('nama_ayah')->nullable();
            $table->string('alamat_ayah')->nullable();
            $table->string('pekerjaan_ayah')->nullable();
            $table->string('pend_terakhir_ayah')->nullable();
            $table->string('pendapatan_ayah')->nullable();
            $table->string('no_tlp_ayah')->nullable();
            $table->string('nama_ibu')->nullable();
            $table->string('alamat_ibu')->nullable();
            $table->string('pekerjaan_ibu')->nullable();
            $table->string('pend_terakhir_ibu')->nullable();
            $table->string('pendapatan_ibu')->nullable();
            $table->string('no_tlp_ibu')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
