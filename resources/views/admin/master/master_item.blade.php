@extends('layouts.default')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="ibox">
            <div class="ibox-content" style="height: 65px">
                <div style="float: left">
                    <a href="{{asset('/admin/master_main_page')}}">
                        <button 
                            type="button" 
                            style="background-color: white; font-size: 15px" 
                            class="btn fa fa-chevron-left">&nbsp; Back</button>
                    </a>
                </div>
                <div style="float: right">
                    <a href="{{ route('edit.master',$master->master_id) }}">
                        <button type="button" class="btn btn-primary btn-raised"> Edit</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="ibox">
            <div class="ibox-content">
                <h2>{{$master->judul}}</h2><hr>
                <div>
                    {!! $master->isi !!}
                </div>
            </div>
        </div>
    </div>  
</div> 
@endsection