@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-6">
        <h1 class="mt-3">Keteranagn proyek</h1>
  <div class="card">
      <div class="card-body">
      <h5 class="card-title">{{$proyek->nama}}</h5>
        <h6 class="card-subtitle mb-2 text-muted">{{$proyek->deskripsi}}</h6>
        <p class="card-text">Tanggal mulai: {{$proyek->tanggalmulai}}</p>
        <p class="card-text">End Date: {{$proyek->tanggaldeadline}}</p>
        <p class="card-text">Status: {{$proyek->status}}</p>
        <a href="{{$project->id}}/edit" class="btn btn-primary">Edit</a>
        <form action="/proyek/{{$project->id}}" method="post" class="d-inline">
          @method('delete')
          @csrf
          <button type="submit" class="btn btn-danger">hapus</button>
        </form>
        <a href="/proyek" class="card-link">kem</a>
      </div>
    </div>
        </div>
    </div>
</div>
@endsection