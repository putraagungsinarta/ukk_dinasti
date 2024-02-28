@extends('layouts.app')

@section('body')
<h1 class="mb-0">Detail Buku</h1>
<hr />
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Judul</label>
        <input type="text" name="judul" class="form-control" placeholder="Judul" value="{{ $buku->judul }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Penulis</label>
        <input type="text" name="penulis" class="form-control" placeholder="Penulis" value="{{ $buku->penulis }}" readonly>
    </div>
    <div class="row">
    <div class="col mb-3">
        <label class="form-label">Penerbit</label>
        <input type="text" name="penerbit" class="form-control" placeholder="Penerbit" value="{{ $buku->penerbit }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">TahunTerbit</label>
        <input type="text" name="tahunterbit" class="form-control" placeholder="TahunTerbit" value="{{ $buku->tahunterbit }}" readonly>
    </div>
    <div class="row">
    <div class="col mb-3">
        <label class="form-label">Created At</label>
        <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $buku->created_at }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Updated At</label>
        <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $buku->updated_at }}" readonly>
    </div>
</div>
@endsection