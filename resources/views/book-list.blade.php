@extends('layouts.admin')
@section('title')
    Book List
@endsection
@section('navbar')
@endsection

@section('content')
    <form action="" method="get">
        <div class="row">
            <div class="col-12 col-sm-6">
                <select name="category" id="category" class="form-control">
                    <option value="">Select Category</option>
                    @foreach ($categories as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach

                </select>
                <button type="submit" class="btn btn-info">Cari</button>

            </div>

        </div>
    </form>
    <div class="my-5">
        <div class="row">
            @foreach ($books as $item)
                <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                    <div class="card h-100" style="width: 18rem;">
                        <img src="{{ asset('storage/cover/' . $item->cover) }}" class="card-img-top" draggable="false">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->kode_book }}</h5>
                            <p class="card-text">{{ $item->title }}</p>
                            <p
                                class="card-text text-end fw-bold 
                                {{ $item->status == 'in stock' ? 'text-success' : 'text-danger' }}">
                                {{ $item->status }}</p>
                        </div>
                    </div>

                </div>
            @endforeach




        </div>

    </div>
@endsection
