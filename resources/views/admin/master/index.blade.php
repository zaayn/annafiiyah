@extends('layouts.default')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="ibox">
            <div class="ibox-content">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTable" id="index-table">
                        <thead>
                            <tr>
                                <th width="2%">No</th>
                                <th width="15%">Page</th>
                                <th width="65%">Isi</th>
                                <th width="15%">Image</th>
                                <th width="3%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($masters as $master)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $master->judul }}</td>
                                    <td>{{ $master->isi }}</td>
                                    <td>{{ $master->image }}</td>
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