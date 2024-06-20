@extends('layouts.admin')
@section('title')
    Profil {{ Auth::user()->username }}
@endsection
@section('navbar')
@endsection

@section('content')
    <h1>
        Data Anda
    </h1>










    <div class="my-3 w-25">
        <form action="/profil-ubah" method="post">
            <div class="mb-3">
                <label for="" class="form-label"> Username</label>
                <input type="text" name="username" class="form-control" value="{{ Auth::user()->username }}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Email</label>
                <input type="text" name="email" class="form-control" value="{{ Auth::user()->email }}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Phone</label>
                <input type="text" name="phone" class="form-control" value="{{ Auth::user()->phone }}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Address</label>
                <textarea name="" id="" cols="30" rows="10" name="phone" style="resize:none;"
                    class="form-control">{{ Auth::user()->addres }}</textarea>
            </div>





            @csrf
        </form>

    </div>
@endsection
