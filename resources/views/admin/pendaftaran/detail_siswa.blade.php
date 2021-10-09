@extends('layouts.default')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="ibox">
            <div class="ibox-content">
                <a href="{{ route('page.smk') }}">
                    <button type="button" class="btn btn-primary btn-raised">
                        <i class="fa fa-chevron-left"></i> Back
                    </button>
                </a>
                @if ($siswa->status == "Mendaftar")
                    <a style="float: right" href="{{ route('siswa.confirm',$siswa->siswa_id) }}">
                        <button type="button" class="btn btn-primary btn-raised">Confirm Pembayaran</button>
                    </a>
                @endif
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="ibox">
            <div class="ibox-content">
                @include('admin.shared.components.alert')
                <h3>Identitas Siswa</h3><br>
                <table style="width: 100%">
                    <tr style="height: 3.5rem">
                        <td style="width: 30%">Nama Siswa</td>
                        <td style="width: 70%">: {{$siswa->nama}}</td>
                    </tr>
                    <tr style="height: 3.5rem">
                        <td style="width: 30%">Nama Panggilan</td>
                        <td style="width: 70%">: {{$siswa->panggilan}}</td>
                    </tr>
                    <tr style="height: 3.5rem">
                        <td style="width: 30%">Tempat, Tanggal lahir</td>
                        <td style="width: 70%">: {{$siswa->tempat_lahir}}, : {{$siswa->tgl_lahir}}</td>
                    </tr>
                    <tr style="height: 3.5rem">
                        <td style="width: 30%">Jenis Kelamin</td>
                        <td style="width: 70%">: {{$siswa->jenis_kelamin}}</td>
                    </tr>
                    <tr style="height: 3.5rem">
                        <td style="width: 30%">Anak ke</td>
                        <td style="width: 70%">: {{$siswa->anak_ke}}</td>
                    </tr>
                    <tr style="height: 3.5rem">
                        <td style="width: 30%">Status dalam keluarga</td>
                        <td style="width: 70%">: {{$siswa->status_dlm_keluarga}}</td>
                    </tr>
                    <tr style="height: 3.5rem">
                        <td style="width: 30%">Alamat</td>
                        <td style="width: 70%">: {{$siswa->alamat}}</td>
                    </tr>
                    <tr style="height: 3.5rem">
                        <td style="width: 30%">Asal Sekolah</td>
                        <td style="width: 70%">: {{$siswa->asal_sekolah}}</td>
                    </tr>
                    <tr style="height: 3.5rem">
                        <td style="width: 30%">Alamat Sekolah</td>
                        <td style="width: 70%">: {{$siswa->alamat_sekolah}}</td>
                    </tr>
                </table><br><br>
                <h3>Identitas Ayah</h3><br>
                <table style="width: 100%">
                    <tr style="height: 3.5rem">
                        <td style="width: 30%">Nama</td>
                        <td style="width: 70%">: {{$siswa->nama_ayah}}</td>
                    </tr>
                    <tr style="height: 3.5rem">
                        <td style="width: 30%">Alamat</td>
                        <td style="width: 70%">: {{$siswa->alamat_ayah}}</td>
                    </tr>
                    <tr style="height: 3.5rem">
                        <td style="width: 30%">Pekerjaan</td>
                        <td style="width: 70%">: {{$siswa->pekerjaan_ayah}}</td>
                    </tr>
                    <tr style="height: 3.5rem">
                        <td style="width: 30%">Pendidikan Terakhir</td>
                        <td style="width: 70%">: {{$siswa->pend_terakhir_ayah}}</td>
                    </tr>
                    <tr style="height: 3.5rem">
                        <td style="width: 30%">Pendapatan</td>
                        <td style="width: 70%">: {{$siswa->pendapatan_ayah}}</td>
                    </tr>
                    <tr style="height: 3.5rem">
                        <td style="width: 30%">No. Telpon</td>
                        <td style="width: 70%">: {{$siswa->no_tlp_ayah}}</td>
                    </tr>
                </table><br><br>
                <h3>Identitas Ibu</h3><br>
                <table style="width: 100%">
                    <tr style="height: 3.5rem">
                        <td style="width: 30%">Nama</td>
                        <td style="width: 70%">: {{$siswa->nama_ibu}}</td>
                    </tr>
                    <tr style="height: 3.5rem">
                        <td style="width: 30%">Alamat</td>
                        <td style="width: 70%">: {{$siswa->alamat_ibu}}</td>
                    </tr>
                    <tr style="height: 3.5rem">
                        <td style="width: 30%">Pekerjaan</td>
                        <td style="width: 70%">: {{$siswa->pekerjaan_ibu}}</td>
                    </tr>
                    <tr style="height: 3.5rem">
                        <td style="width: 30%">Pendidikan Terakhir</td>
                        <td style="width: 70%">: {{$siswa->pend_terakhir_ibu}}</td>
                    </tr>
                    <tr style="height: 3.5rem">
                        <td style="width: 30%">Pendapatan</td>
                        <td style="width: 70%">: {{$siswa->pendapatan_ibu}}</td>
                    </tr>
                    <tr style="height: 3.5rem">
                        <td style="width: 30%">No. Telpon</td>
                        <td style="width: 70%">: {{$siswa->no_tlp_ibu}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div> 
@endsection