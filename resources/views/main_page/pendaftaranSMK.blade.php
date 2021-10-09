@extends('layouts.master')
@section('content')
<div class="padding-content">
    <div class="box">
        <div class="container" style="background-color: blue">
            <form action="#" method="post">
                <div class="form-group">
                    <div class="form-group col-md-12">
                        <label class="font-weight-bold">Nama Siswa</label>
                        <input type="text" class="form-control" name="nama" required>
                    </div>
                </div>
            </form>
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