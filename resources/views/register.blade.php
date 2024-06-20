@extends('layouts.main')

@section('title')
    Register
@endsection
@section('navbar')
@endsection

@section('login')
@section('form')
    <div>

        <form action="" method="post">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (Session::has('status'))
                <div class="alert alert-success">
                    {{ Session::get('message') }}
                </div>
            @endif

            @csrf
            <label class="mb-3" for="Username">Username</label>
            <input type="text" name="username" class="form-control" placeholder="Masukkan username">
            <label class="mb-3" for="email">Email</label>
            <input type="text" name="email" class="form-control" placeholder="Masukkan email">
            <label class="mb-3" for="Username">Addres</label>
            <input type="text" name="addres" class="form-control" placeholder="Masukkan addres">
            <label class="mb-3" for="phone">Phone</label>
            <input type="number" name="phone" class="form-control" placeholder="Masukkan number">

            <label class="mb-3" for="password">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Masukkan Password">

            <div>
                <button type="submit" class="btn btn-info form-control mt-2">Register</button>
            </div>



        </form>
        <div class="text-center">
            <button class="btn btn-info  mt-2" type="submit"> <a href="/login">Login</a></button>
        </div>


    </div>
@endsection
@endsection
