@extends('layouts.admin')

@section('title')
    Tambah Category
@endsection
@section('navbar')
@endsection

@section('content')
    <h1>
        Tambah Category
    </h1>

    <div class="mt-5 w-50">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="/category" method="post">
            @csrf
            <div>
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-controls" placeholder="masukkan name category">

                <div class="mt-2">
                    <button class="btn btn-success" type="submit">Tambah</button>
                </div>
            </div>
        </form>
    </div>
@endsection
