@extends('layouts.admin')

@section('title')
    Konfirmasi Deleted
@endsection
@section('navbar')
@endsection


@section('content')
    <h1>Apakah anda ingin <b class="text-danger">Block</b> User
        <b class="text-primary">{{ $user->username }}</b> ?
    </h1>
    <div class="mt-5">
        <a href="/user-destroy/{{ $user->slug }}" class="btn btn-danger me-2">Block</a>
        <a href="/user" class="btn btn-secondary ">Batal</a>

    </div>
@endsection
