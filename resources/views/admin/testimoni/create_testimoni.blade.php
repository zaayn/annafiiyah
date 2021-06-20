@extends('layouts.default')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="ibox">
            <div class="ibox-content">
                <h3>Create Testimoni</h3>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="panel block">
            <div class="panel-body">
                  @if ($errors->any())
                    <div class="alert alert-danger">
                      <ul>
                        @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                      </div>
                  @endif
                  <br>

                <form action="{{route('store.testimoni')}}" method="post">
                    {{ csrf_field() }}
                    

                    <div class="form-group">
                        <div class="form-group col-md-12">
                	        <label class="font-weight-bold">Nama :</label>
                	        <input type="text" class="form-control" name="nama" required>
                        </div>
                        <div class="form-group col-md-12">
                	        <label class="font-weight-bold">Umur :</label>
                	        <input type="text" class="form-control" name="umur" required>
                        </div>
                        <div class="form-group col-md-12">
                	        <label class="font-weight-bold">Asal :</label>
                	        <input type="text" class="form-control" name="asal" required>
                        </div>
                        <div class="form-group col-md-12">
                	        <label class="font-weight-bold">Profesi :</label>
                	        <input type="text" class="form-control" name="profesi" required>
                        </div>
                        <div class="form-group col-md-12">
                	        <label class="font-weight-bold">Ungkapan :</label><br>
                	        <textarea name="ungkapan" id="" cols="142" rows="5"></textarea>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary ">Submit</button>
                    <a onclick="return confirm('Perubahan anda belum disimpan. Tetap tinggalkan halaman ini ?')" href="#" class="btn btn-secondary"> Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection