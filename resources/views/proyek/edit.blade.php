@extends('layouts/master')
@section('content')
<div class="p-5">
<div class="text-center">
    <h1 class="h4 text-gray-900 mb-4">DEdit Data</h1>
</div>
<form class="user" action="{{ url('/proyek/'.$proyek->id) }}" method="POST">
    @csrf
    @method('put')
    <div class="form-group">
        <input type="text" class="form-control form-control-user" placeholder="Nama proyek" name="nama" value="{{ $proyek->nama }}">
    </div>
    <div class="form-group">
        <input type="text" class="form-control form-control-user" placeholder="Deskripsi" name="deskripsi" value="{{ $proyek->deskripsi }}">
    </div>
    <div class="form-group">
        <input type="date" class="form-control form-control-user" placeholder="Tanngal Mulai" name="tanggalmulai" value="{{ $proyek->tanggalmulai }}">
    </div>
    <div class="form-group">
        <input type="date" class="form-control form-control-user" placeholder="Tanngal Deadline" name="tanggaldeadline" value="{{ $proyek->tanggaldeadline }}">
    </div>
    <button type="submit" class="btn btn-primary btn-user btn-block">Input</button>
</form>
</div>
@endsection