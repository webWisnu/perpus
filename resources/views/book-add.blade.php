@extends('layouts.admin')

@section('title')
    Tambah Data Book
@endsection
@section('navbar')
@endsection

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <h1>
        Tambah Data Book
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
        <form action="/book-add" method="post" enctype="multipart/form-data">
            @csrf
           
            <div class="mt-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="title"
                    {{ old('title') }}>
            </div>
            <div class="mt-3">
                <label for="image" class="form-label">Image Buku</label>
                <input type="file" name="image" id="image" class="form-control" placeholder="upload file image">
            </div>

            <div class="mt-3">
                <label for="category" class="form-label">Pilih Category</label>
        
                     <select name="categories[]" id="category" class="form-control select-multipe" multiple ">
                    <option value=""></option>
                    @foreach ($category as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
                    
                
               
            </div>
            <div class="mt-3">
                <button class="btn btn-success" type="submit">Save Data</button>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.select-multipe').select2();
        });
    </script>

@endsection
