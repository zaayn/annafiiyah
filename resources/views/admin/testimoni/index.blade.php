@extends('layouts.default')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="ibox">
            <div class="ibox-content">
                <a href="{{ route('create.testimoni') }}">
                    <button type="button" class="btn btn-primary btn-raised"> Create</button>
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
                    @include('admin.shared.components.alert')
                    <table class="table table-striped table-bordered table-hover dataTable" id="index-table">
                        <thead>
                            <tr>
                                <th width="2%">No</th>
                                <th width="23%">Nama</th>
                                <th width="20%">Profesi</th>
                                <th width="50%">Ungkapan</th>
                                <th width="5%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($testimonis as $testimoni)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $testimoni->nama }}</td>
                                    <td>{{ $testimoni->profesi }}</td>
                                    <td>{{ $testimoni->ungkapan }}</td>
                                    <td>
                                        <a 
                                            onclick="return confirm('Apakah anda yakin akan menghapus data ini ?')" 
                                            href="{{route('destroy.testimoni',$testimoni->testimoni_id)}}" 
                                            class="btn btn-danger btn-sm"
                                        >
                                            <span class="fa fa-trash"></span>
                                        </a>
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