@extends('layouts.default')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="ibox">
            <div class="ibox-content">
                <a href="{{ route('admin.santri.create') }}">
                    <button type="button" class="btn btn-primary btn-raised" disabled> Create</button>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="ibox">
            <div class="ibox-content">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTable" id="index-table">
                        <thead>
                            <tr>
                                <th width="5%">No</th>
                                <th width="20%">Nama Siswa</th>
                                <th width="15%">Tempat, Tanggal Lahir</th>
                                <th width="10%">Jenis Kelamin</th>
                                <th width="20%">No Telepon Ortu</th>
                                <th width="20%">Status pendaftaran</th>
                                <th width="10%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($siswasmk as $siswa )
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $siswa->nama }}</td>
                                    <td>{{ $siswa->tempat_lahir }}, 
                                        {{ \Carbon\Carbon::parse($siswa->tgl_lahir)->format("d M Y") }}
                                    </td>
                                    <td>{{ $siswa->jenis_kelamin }}</td>
                                    <td>{{ $siswa->no_tlp_ayah }}</td>
                                    <td>{{ $siswa->status }}</td>
                                    <td>
                                        <a href="{{ route('siswa.detail', $siswa->siswa_id) }}">
                                            <span class="btn btn-info dim btn-sm fa fa-eye"></span>
                                        </a>
                                        <a href="{{ route('siswa.confirm',$siswa->siswa_id) }}">
                                            <span class="btn btn-warning dim btn-sm fa fa-check"></span>
                                        </a>
                                        {{-- <a href="{{ route('siswa.edit', ['id' => $santri->santri_id]) }}">
                                            <span class="btn btn-warning dim btn-sm glyphicon glyphicon-pencil"></span>
                                        </a>
                                        <a href="{{ route('siswa.destroy', ['id' => $santri->santri_id]) }}" id="delete-btn">
                                            <span class="btn btn-danger dim btn-sm glyphicon glyphicon-remove-sign"></span>
                                        </a> --}}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection