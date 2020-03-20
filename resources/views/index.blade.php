@extends('layout/main')

@section('title','Sistem Akademik')

@section('container')
<div class="row">
  <div class="col-md-3" style="margin:10vh">
    <a style="font-size:30px" class="badge badge-dark" href="{{url('students')}}">View Data</a>
  </div>
</div>

@endsection