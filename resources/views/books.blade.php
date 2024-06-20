@extends('layouts.admin')
@section('title')
    Book List
@endsection
@section('navbar')
@endsection

@section('content')
    <h1>
        Books List
    </h1>



    <div class="mt-5 d-flex justify-content-end">
        <a href="/book-add" class="btn btn-info me-3">Tambah Data Buku</a>
        <a href="/book-deleted" class="btn bg-secondary-subtle">Restore Data</a>

    </div>


    <div class="mt-5">
        @if (Session('status'))
            <div class="alert alert-success">
                {{ Session('status') }}
            </div>
        @endif

    </div>

    <div class="my-5">

        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Book Code.</th>
                    <th>Book Title . </th>
                    <th>Category Book . </th>
                    <th>Status.</th>
                    <th>Action.</th>

                </tr>

            </thead>
            <tbody>
                @foreach ($books as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->kode_book }}</td>
                        <td>{{ $item->title }}</td>
                        <td>
                            @foreach ($item->categories as $category)
                                <br>
                                - {{ $category->name }}
                            @endforeach
                        </td>
                        </td>
                        <td>{{ $item->status }}</td>

                        <td>
                            <button class="btn btn-warning" type="submit"><a
                                    href="/book-edit/{{ $item->slug }}">Edit</a></button>
                            <button class="btn btn-danger" type="submit"><a
                                    href="/book-delete/{{ $item->slug }}">Delete</a></button>
                        </td>

                    </tr>
                @endforeach

            </tbody>
        </table>

    </div>
@endsection
