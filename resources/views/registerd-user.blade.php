@extends('layouts.admin')
@section('title')
    RegisteredUser List
@endsection
@section('navbar')
@endsection

@section('content')
    <h1>
        Daftar Pengguna Yang Belum Aktif .
    </h1>



    <div class="mt-5 d-flex justify-content-end">

        <a href="/user" class="btn bg-success">Kembali</a>

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
                    <th>No .</th>
                    <th>Username .</th>
                    <th>Phone . </th>
                    <th>
                        Action
                    </th>

                </tr>

            </thead>
            <tbody>


                @foreach ($registeredUser as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->username }}</td>
                        <td>
                            @if ($item->phone)
                                {{ $item->phone }}
                            @else
                                ____
                            @endif
                        </td>

                        <td>

                            <button type="submit" class="btn btn-warning">
                                <a href="/user-approve/{{ $item->slug }}">Aktifkan User</a></button>


                        </td>

                    </tr>
                @endforeach





            </tbody>
        </table>

    </div>
@endsection
