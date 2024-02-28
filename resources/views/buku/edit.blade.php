@extends('layouts.app')

@section('body')
<h1 class="mb-0">Edit Buku</h1>
<hr />
<form action="{{ route('buku.update', $buku->id) }}" method="POST">
    @csrf
    @method('PUT')
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Judul</label>
        <input type="text" name="judul" class="form-control" placeholder="Judul" value="{{ $buku->judul }}">
    </div>
    <div class="col mb-3">
        <label class="form-label">Penulis</label>
        <input type="text" name="penulis" class="form-control" placeholder="Penulis" value="{{ $buku->penulis }}" >
    </div>
    <div class="row">
    <div class="col mb-3">
        <label class="form-label">Penerbit</label>
        <input type="text" name="penerbit" class="form-control" placeholder="Penerbit" value="{{ $buku->penerbit }}" >
    </div>
    <div class="col mb-3">
        <label class="form-label">TahunTerbit</label>
        <input type="text" name="tahunterbit" class="form-control" placeholder="TahunTerbit" value="{{ $buku->tahunterbit }}">
    </div>
    <div class="row">
    <div class="d-grid">
    <button class="btn btn-warning">Update</button>
    </div>
</div>
</form>
@endsection