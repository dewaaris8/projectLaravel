@extends('layout/main')

@section('title','Daftar Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1>Detail Mahasiswa</h1>
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">{{$student->nama}}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">{{$student->nim}}</h6>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="{{$student->id}}/edit" class="btn btn-light">Edit</a>
                <form action="{{$student->id}}" class="d-inline" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-dark">Delete</button>
                </form>
                  
                  <a href="/students" class="card-link">Back</a>
                </div>
            </div>        
        </div>
    </div> 
</div>
    
@endsection