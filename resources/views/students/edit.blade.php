@extends('layout/main')

@section('title','Ubah Daftar Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form ubah data Mahasiswa</h1>
        <form method="POST" action="/students/{{$student->id}}">
                @method('patch')
                @csrf
                <div class="form-group">
                  <label for="nama">Nama</label>
                <input type="text" class="form-control" value="{{$student->nama}}" id="nama" placeholder="masukkan nama" name="nama">
                </div>
                <div class="form-group">
                  <label for="nim">NIM</label>
                <input type="text" class="form-control" value="{{$student->nim}}" id="nim" placeholder="masukkan NIM" name="nim">
                </div>
                <button type="submit" class="btn btn-dark">Ubah Data</button>
            </form>        
        </div>
    </div>
</div>
    
@endsection