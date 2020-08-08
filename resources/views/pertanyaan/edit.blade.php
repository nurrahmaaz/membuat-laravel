@extends('adminlte.master')

@section('content')

    <!-- /card-header -->
	<div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit Pertanyaan {{$post->id}}  </h3>
        </div>
    <!-- /.card-header -->

    <!-- form start -->
        <form role="form" action="/pertanyaan/{{$post->id}}" method="POST">
        @csrf
        @method('PUT')
            <div class="card-body">
	            <div class="form-group">
	                <label for="judul">Judul</label>
	                <input type="text" class="form-control" id="judul" name="judul" value=" {{ old('judul', $post->judul)}} " required>
	             <!--  @error('title')
	             	<div class="alert alert-danger"> {{$message}} </div>
	             @enderror-->
	            </div>
	            <div class="form-group">
	                <label for="isi">Isi</label>
	                <input type="text" class="form-control" id="isi" name="isi" value=" {{old('isi', $post->isi)}} " required>
	            <!--  @error('isi')
	             	<div class="alert alert-danger"> {{$message}} </div>
	             @enderror-->
	            </div>
	            
	            
            
                  
            </div>
    <!-- /.card-body -->

            <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection