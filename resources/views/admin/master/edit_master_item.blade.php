@extends('layouts.default')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="ibox">
            <div class="ibox-content">
                <h2>{{$master->judul}}</h2><hr>
                <form action="{{route('update.master', $master->master_id)}}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <textarea 

                            class="ckeditor  form-control"
                            name="isi" 
                        >{{$master->isi}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary ">Update</button>
                </form>
            </div>
        </div>
    </div>  
</div> 
@endsection