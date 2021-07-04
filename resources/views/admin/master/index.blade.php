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
                                <th width="18%">Page</th>
                                <th width="18%">Terakhir diubah</th>
                                <th width="42%">Isi</th>
                                <th width="10%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($masters as $master)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $master->judul }}</td>
                                    <td>{{ $master->updated_at }}</td>
                                    <td>
                                        {{ str_limit(strip_tags($master->isi), 45) }}
                                        @if (strlen(strip_tags($master->isi)) > 45)
                                            <a href="{{route('master.item',$master->master_id)}}">Read More</a>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{route('master.item',$master->master_id)}}" class="btn btn-info btn-sm">
                                            <span class="fa fa-eye"></span>
                                        </a>
                                        <a href="{{route('edit.master',$master->master_id)}}" class="btn btn-warning btn-sm">
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