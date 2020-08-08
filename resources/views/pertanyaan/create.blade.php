@extends('adminlte.master')

@section('content')

    <!-- /card-header -->
	<div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Buat Pertanyaan</h3>
        </div>
    <!-- /.card-header -->

    <!-- form start -->
        <form role="form" action="/pertanyaan" method="POST">
        @csrf
            <div class="card-body">
	            <div class="form-group">
	                <label for="judul">Judul</label>
	                <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan Judul" required>
	             <!--  @error('title')
	             	<div class="alert alert-danger"> {{$message}} </div>
	             @enderror-->
	            </div>
	            <div class="form-group">
	                <label for="isi">Isi</label>
	                <input type="text" class="form-control" id="isi" name="isi" placeholder="Ketik disini" required>
	            <!--  @error('isi')
	             	<div class="alert alert-danger"> {{$message}} </div>
	             @enderror-->
	            </div>
	            <div class="form-group">
	                <label for="tanggal_dibuat">Tanggal Dibuat</label>
	                <input type="date" class="form-control" id="tanggal_dibuat" name="tanggal_dibuat">
	            </div>
	            <div class="form-group">
	                <label for="tanggal_diperbaharui">Tanggal Diperbaharui</label>
	                <input type="date" class="form-control" id="tanggal_diperbaharui" name="tanggal_diperbaharui">
	            </div>
	            
            
                  
            </div>
    <!-- /.card-body -->

            <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection