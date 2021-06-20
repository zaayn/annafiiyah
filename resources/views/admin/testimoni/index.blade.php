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
                    <table class="table table-striped table-bordered table-hover dataTable" id="index-table">
                        <thead>
                            <tr>
                                <th width="2%">No</th>
                                <th width="25%">Nama</th>
                                <th width="18%">Umur</th>
                                <th width="25%">Asal</th>
                                <th width="25%">Profesi</th>
                                <th width="5%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($testimonis as $testimoni)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $testimoni->nama }}</td>
                                    <td>{{ $testimoni->umur }}</td>
                                    <td>{{ $testimoni->asal }}</td>
                                    <td>{{ $testimoni->profesi }}</td>
                                    <td>
                                        <a href="#" class="btn btn-info btn-sm">
                                            <span class="fa fa-pencil"></span>
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