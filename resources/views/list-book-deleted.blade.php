@extends('layouts.admin')
@section('title')
    list of deleted data
@endsection
@section('navbar')
@endsection

@section('content')
    <h1>
        Books Deleted List
    </h1>


    <div class="mt-5 d-flex justify-content-end">
        <a href="/books" class="btn btn-warning">Kembali</a>

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
                @foreach ($delete as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->title }}</td>
                        <td>
                            <button class="btn btn-info" type="submit"><a
                                    href="/book-restore/{{ $item->slug }}">Restore</a></button>

                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
