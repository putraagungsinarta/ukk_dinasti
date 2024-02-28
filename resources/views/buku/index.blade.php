@extends('layouts.app')

@section('body')
<div class="d-flex align-items-center justify-content-between">
    <h1 class="mb-0">List Buku</h1>
    <a  href="{{ route('buku.create') }}" class="btn btn-primary">Tambah Buku</a>
</div>
<hr />
@if(Session::has('success'))
<div class="alert alert-success" role="alert">
    {{ Session::get('success') }}
</div>
@endif
<table class="table table-hover">
    <thead class="table-primary">
        <tr>
            <th>#</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>TahunTerbit</th>
        </tr>
    </thead>
    <tbody>
        @if($buku->count() > 0)
        @foreach($buku as $rs)
        <tr>
            <td class="align-middle">{{ $loop->iteration }}</td>
            <td class="align-middle">{{ $rs->judul }}</td>
            <td class="align-middle">{{ $rs->penulis }}</td>
            <td class="align-middle">{{ $rs->penerbit }}</td>
            <td class="align-middle">{{ $rs->tahunterbit }}</td>
            <td class="align-middle">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="{{ route('buku.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                    <a href="{{ route('buku.edit', $rs->id) }}" type="button" class="btn btn-warning">Edit</a>
                    <form action="{{ route('buku.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger m-0">Delete</button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
        @else
        <tr>
            <td class="text-center" colspan="5">Product not found</td>
        </tr>
        @endif
    </tbody>
</table>
@endsection