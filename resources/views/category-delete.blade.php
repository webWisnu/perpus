@extends('layouts.admin')

@section('title')
    Konfirmasi Deleted
@endsection
@section('navbar')
@endsection
   
@section('content')
    <h1>Apakah anda ingin Menghapus Data <b class="text-primary">{{ $categories->name }}</b> ?</h1>
    <div class="mt-5">
        <a href="/category-destroy/{{ $categories->slug }}" class="btn btn-danger me-2">Hapus</a>
        <a href="/categories" class="btn btn-warning ">Batal</a>

    </div>
@endsection
