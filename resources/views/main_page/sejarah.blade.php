@extends('layouts.master')
@section('content')

<div id="fh5co-footer">
    <div class="container">
        <div class="row">
            <h1>Sejarah Singkat Annafiiyah</h1>
            <div class="box">
                <div class="col-md-7">
                    {!! $master[0]->isi !!}
                </div>
                <div class="col-md-5">
                    <img style="width: 100%" src="{{asset('/main_asset/images/annafiiyah_3.jpg')}}"/>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('css')
<style>
    .box {
        color: black;
        text-align: justify;
    }
</style>
@endsection