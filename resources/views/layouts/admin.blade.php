<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman @yield('title')</title>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<style>

</style>

<body>

    @yield('navbar')
    <div class="main d-flex flex-column justify-content-between">
        <nav class="main-nav navbar navbar-expand-lg bg-in">
            <div class="container">
                <a class="navbar-brand" href="/dashboard">Laravel</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

        </nav>



        <div class="body-content h-100">
            <div class="row g-0 h-100 ">
                <div class="sidebar col-lg-2 collapse d-lg-block" id="navbarNavDropdown">
                    @if (Auth::user())


                        @if (Auth::user()->role_id == 1)
                            <a href="/dashboard">Dashboard</a>

                            <a href="/books">Books</a>


                            <a href="/categories">Categories</a>


                            <a href="/user">Users</a>




                            <a href="/logout">Logout</a>
                        @else
                            <a href="/profil">Profil</a>
                            <a href="/Logpinjam">Detail Peminjaman</a>


                            <a href="/book-rent">Pinjam Buku</a>

                            <a href="/book-return">Kembali Buku</a>

                            <a href="/logout">Logout</a>
                        @endif
                    @else
                        <a href="/login">Login</a>

                        <a class="nav-link" href="/home">Back To Home</a>

                    @endif



                </div>
                <div class="content p-5 col-lg-10">
                    @yield('content')
                </div>

            </div>
        </div>

    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
