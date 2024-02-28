@extends('layouts.app')

@section('body')
 <h1 class="mb-0">Tambah Buku</h1>
 <hr />
 <form action="{{ route('buku.store') }}" method="POST">
    @csrf
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="judul" class="form-control" placeholder="Judul">
        </div>
        <div class="col">
            <input type="text" name="penulis" class="form-control" placeholder="Penulis">
        </div>
        <div class="col">
            <input type="text" name="penerbit" class="form-control" placeholder="Penerbit">
        </div>   
        <div class="col">
            <input type="text" name="tahunterbit" class="form-control" placeholder="TahunTerbit">
        </div>
    </div>
    <div class="row">
        <div class="d-grid">
            <button class="btn btn-primary">Submit</button>
        </div>
    </div>
 </form>
 @endsection