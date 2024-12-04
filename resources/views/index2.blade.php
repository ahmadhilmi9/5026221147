@extends('template')

@section('tulisan1','Page Counter')

@section('linkdata')
<a href="/pegawai" class="btn btn-success">Data Pegawai</a>
<a href="/snack" class="btn btn-info">Data Snack</a>
<a href="/uts" class="btn btn-info">UTS</a>
@endsection

@section('konten')

<div class="alert alert-success">
    <strong>Selamat !</strong> Anda Pengunjung ke
     @foreach($pagecounter as $c)
         {{$c->jumlah}}
     @endforeach
  </div>
@endsection
