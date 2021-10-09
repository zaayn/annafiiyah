@extends('layouts.master')
@section('content')

<div id="fh5co-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-md-push-1 animate-box"></div>
            <div class="col-md-8 animate-box">
                @include('admin.shared.components.alert')
                @if ($errors->any())
                    <div class="alert alert-danger">
                      <ul>
                        @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                      </div>
                  @endif
                <form action="{{route('submit.pendaftaran_smk')}}" method="post">
                    {{ csrf_field() }}
                    <h3>Identitas Santri</h3>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="text" name="nama" class="form-control" placeholder="Nama lengkap" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="text" name="panggilan" class="form-control" placeholder="Nama Panggilan" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-6">
                            <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" required>
                        </div>
                        <div class="col-md-6">
                            <input type="date" name="tgl_lahir" class="form-control" placeholder="Tanggal lahir" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="text" name="jenis_kelamin" class="form-control" placeholder="Jenis Kelamin" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="number" name="anak_ke" class="form-control" placeholder="Anak Ke" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="text" name="status_dlm_keluarga" class="form-control" placeholder="Status Dalam Keluarga" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="text" name="alamat" class="form-control" placeholder="Alamat Lengkap" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="text" name="asal_sekolah" class="form-control" placeholder="Asal Sekolah" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="text" name="alamat_sekolah" class="form-control" placeholder="Alamat Sekolah" required>
                        </div>
                    </div><br>

                    <h3>Identitas Ayah</h3>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="text" name="nama_ayah" class="form-control" placeholder="Nama Lengkap" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="text" name="alamat_ayah" class="form-control" placeholder="Alamat" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="text" name="pekerjaan_ayah" class="form-control" placeholder="pekerjaan" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="text" name="pend_terakhir_ayah" class="form-control" placeholder="Pendidikan Terakhir" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="text" name="pendapatan_ayah" class="form-control" placeholder="Pendapatan" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="text" name="no_tlp_ayah" class="form-control" placeholder="No. Tlpn" required>
                        </div>
                    </div><br>

                    <h3>Identitas Ibu</h3>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="text" name="nama_ibu" class="form-control" placeholder="Nama Lengkap" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="text" name="alamat_ibu" class="form-control" placeholder="Alamat" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="text" name="pekerjaan_ibu" class="form-control" placeholder="pekerjaan" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="text" name="pend_terakhir_ibu" class="form-control" placeholder="Pendidikan Terakhir" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="text" name="pendapatan_ibu" class="form-control" placeholder="Pendapatan" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="text" name="no_tlp_ibu" class="form-control" placeholder="No. Tlpn" required>
                        </div>
                    </div><br>

                    <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-primary">
                    </div>

                </form>		
            </div>
            <div class="col-md-2 col-md-push-1 animate-box"></div>
        </div>
        
    </div>
</div>
@endsection