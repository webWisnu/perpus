@extends('layouts.admin')

@section('title')
    Konfirmasi Delete Book
@endsection
@section('navbar')
@endsection

@section('content')
    <h1>Apakah anda ingin Menghapus Data Book Ini 
        <b class="text-primary">{{ $books->title }}</b> ?</h1>
    <div class="mt-5">
        <a href="/book-destroy/{{ $books->slug }}" class="btn btn-danger me-2">Hapus</a>
        <a href="/books" class="btn btn-warning ">Batal</a>

    </div>
@endsection
