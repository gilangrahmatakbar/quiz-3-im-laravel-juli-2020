@extends('layouts/master')
@section('content')
<div class="p-5">
    <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">Menambahkan data proyek</h1>
    </div>
    <form class="user" action="{{ url('/proyek') }}" method="POST">
    @csrf
    <div class="form-group">
        <input type="text" class="form-control form-control-user" placeholder="Nama proyek" name="nama" value="{{ old('nama') }}">
    </div>
    <div class="form-group">
        <input type="text" class="form-control form-control-user" placeholder="Deskripsi" name="deskripsi" value="{{ old('deskripsi') }}">
    </div>
    <div class="form-group">
        <input type="date" class="form-control form-control-user" placeholder="Tanggal Mulai" name="tanggalmulai" value="{{ old('tanggalmulai') }}">
    </div>
    <div class="form-group">
        <input type="date" class="form-control form-control-user" placeholder="Tanggal Deadline" name="tanggaldeadline" value="{{ old('tanggaldeadline') }}">
    </div>
    <button type="submit" class="btn btn-primary btn-user btn-block">Input</button>
    </form>
</div>
@endsection