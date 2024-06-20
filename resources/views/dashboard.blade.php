@extends('layouts.admin')

@section('navbar')
@endsection
@section('title')
    Dashboard
@endsection

@section('content')
    <h1>
        Welcome . {{ Auth::user()->username }}
    </h1>

    <div class="row mt-5">
        <div class="col-lg-4 ">
            <div class="card-data">
                <div class="row">
                    <div class="col-6"><i class="bi bi-book"></i></div>
                    <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                        <div class="card-isi">Books</div>
                        <div class="card-count">{{ $book_count }}</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 ">
            <div class="card-data categories">
                <div class="row">
                    <div class="col-6"><i class="bi bi-layout-text-sidebar-reverse"></i></div>
                    <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                        <div class="card-isi">Category</div>
                        <div class="card-count">{{ $category_count }}</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 ">
            <div class="card-data user">
                <div class="row">
                    <div class="col-6"><i class="bi bi-person-lines-fill"></i></div>
                    <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                        <div class="card-isi">User</div>
                        <div class="card-count">{{ $user_count }}</div>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
