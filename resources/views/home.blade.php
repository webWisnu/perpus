
@extends('layouts.home')

@section('title')
   Home
@endsection
@section('navbar')
@endsection

@section('konten1')

   
   <div class="container">
   	<div class="my-5">
        <div class="row">
            @foreach ($books as $item)
                <div class="col-lg-3 col-md-5 col-sm-6 mb-3">
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


   
@endsection
