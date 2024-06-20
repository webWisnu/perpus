@extends('layouts.admin')
@section('title')
    User List
@endsection
@section('navbar')
@endsection

@section('content')
    <h1>
        User List
    </h1>



    <div class="mt-5 d-flex justify-content-end">
        <a href="/user-block" class="btn btn-info me-3">view block user </a>
        <a href="/user-registered" class="btn bg-success">new registered user</a>

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
                    <th>No .</th>
                    <th>Username .</th>
                    <th>Phone . </th>
                    <th>Email . </th>
                    <th>
                        Action
                    </th>

                </tr>

            </thead>
            <tbody>


                @foreach ($users as $item)
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
                        <td>{{ $item->email }}</td>

                        <td>

                            <button type="submit" class="btn btn-warning">
                                <a href="/user-block/{{ $item->slug }}"> block User</a></button>
                            <button class="btn btn-light">
                                <a href="/user-detail/{{ $item->slug }}">Detail </a></button>

                            </button>

                        </td>

                    </tr>
                @endforeach





            </tbody>
        </table>

    </div>
@endsection
