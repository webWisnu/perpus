@extends('layouts.admin')
@section('title')
    Return The Book
@endsection
@section('navbar')
@endsection

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@section('content')
    <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-md-3">
        <h1 class="mb-5 text-primary">Return The Book</h1>



        <div class="mt-5">
            @if (Session('message'))
                <div class="alert {{ session('alert-class') }}">
                    {{ Session('message') }}
                </div>
            @endif

        </div>


        <form action="book-return" method="post">
            @csrf
            <div class="mb-3">
                <label for="user">Username</label>
                <select name="user_id" id="user" class="form-control">

                    <option value="{{ Auth::user()->id }}">{{ Auth::user()->username }}</option>

                </select>
            </div>
            <div class="mb-3">
                <label for="book">Book</label>
                <select name="book_id" id="book" class="form-control select-multipe">
                    @foreach ($book as $item)
                        <option value="{{ $item->id }}">{{ $item->title }}</option>
                    @endforeach

                </select>
            </div>
            <div>
                <button type="submit" class="btn btn-secondary">Return Book</button>
            </div>

        </form>

    </div>
@endsection
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.select-multipe').select2();
    });
</script>
