@extends('layouts.admin')

@section('title')
    Edit Category
@endsection
@section('navbar')
@endsection

@section('content')
    <h1>
        Edit Category
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
        <form action="/category-edit/{{ $category->slug }}" method="post">
            @csrf
            @method('put')
            <div>
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-controls" value="{{ $category->name }}"
                    placeholder="masukkan name category">

                <div class="mt-2">
                    <button class="btn btn-success" type="submit">Update</button>
                </div>
            </div>
        </form>
    </div>
@endsection
