@extends('layouts.main')

@section('title')
    Login
@endsection
@section('navbar')
@endsection

@section('login')
@section('form')
    <div>

        <form action="" method="post">
            @if (Session::has('status'))
                <div class="alert alert-danger">
                    {{ Session::get('message') }}
                </div>
            @endif
            @csrf
            <label class="mb-3" for="Username">Username</label>
            <input type="text" name="username" class="form-control" placeholder="Masukkan username" required>
            <label class="mb-3" for="password">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Masukkan Password" required>

            <div>
                <button type="submit" class="btn btn-info form-control mt-2"> Login</button>
            </div>



        </form>
        <div class="text-center">
            <button class="btn btn-info  mt-2" type="submit"> <a href="/register">Sing Up</a></button>
        </div>


    </div>
@endsection
@endsection
