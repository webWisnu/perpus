@extends('layouts.admin')

@section('navbar')
@endsection
@section('title')
    Dashboard
@endsection

@section('content')
    <h3>
        Daftar Buku Yang <b class="text-info">{{ Auth::user()->username }}</b> Pinjam
    </h3>
    <table class="table mt-5">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama User </th>
                <th>Buku Yang Di pinjam</th>
                <th>Image</th>
                <th>Tanggal pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Tanggal Pengembalian Sebenarnya</th>
            </tr>

        </thead>




        <tbody>

            @foreach ($rentlog as $item)
                <tr
                    class="{{ $item->actual_return_date == null
                        ? ''
                        : ($item->return_date < $item->actual_return_date
                            ? 'table-danger'
                            : 'table-success') }}">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->user->username }}</td>
                    <td>{{ $item->book->title }}</td>
                    <td width="50px"> <img src="{{ asset('storage/cover/' . $item->book->cover) }}" class="card-img-top"
                            draggable="false">
                    </td>
                    <td>{{ $item->rent_date }}</td>
                    <td>{{ $item->return_date }}</td>
                    <td>{{ $item->actual_return_date }}</td>
                </tr>
            @endforeach



            </thead>

    </table>
@endsection
