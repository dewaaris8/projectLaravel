@extends('layout/main')

@section('title','Daftar Mahasiswa')

@section('container')
    <h1>Data Mahasiswa</h1>

    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">NIM</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($mahasiswa as $mhs)  
          <tr>
          <th scope="row">{{$loop->iteration}}</th>
          <td>{{$mhs->nama}}</td>
          <td>{{$mhs->nim}}</td>
            <td>
                <button type="submit" class="btn btn-light">Edit</button>
                {{-- <form action="{{$siswa->id}}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf --}}
                    <button type="submit" class="btn btn-dark">Delete</button>
                {{-- </form> --}}
            </td>
          </tr>
          @endforeach
        </tbody>
    </table>
@endsection