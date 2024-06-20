@extends('layouts.admin')
@section('title')
    Category
@endsection
@section('navbar')
@endsection

@section('content')
    <h1>
        Category List
    </h1>



    <div class="mt-5 d-flex justify-content-end">
        <a href="/category" class="btn btn-info me-3">Tambah Data</a>
        <a href="/category-deleted" class="btn bg-secondary-subtle">Restore Data</a>
    </div>


    <div class="mt-5">
        @if (Session('status'))
            <div class="alert alert-success">
                {{ Session('message') }}
            </div>
        @endif

    </div>

    <div class="my-5">

        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Name.</th>
                    <th>Action.</th>
                </tr>

            </thead>
            <tbody>
                @foreach ($category as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>
                            <button class="btn btn-warning" type="submit"><a
                                    href="/category-edit/{{ $item->slug }}">Edit</a></button>
                            <button class="btn btn-danger" type="submit"><a
                                    href="/category-delete/{{ $item->slug }}">Delete</a></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
