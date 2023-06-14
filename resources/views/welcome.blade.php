@extends('layouts.layout')
<!--CSS-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<!--CSS-->
<!---alert-->
<!-- Referensi https://laravel.com/docs/9.x/responses -->



@section('content')
    <div text-align="center">
        @if (session('konfirmasi'))
            <div class="alert alert-success">
                {{ session('konfirmasi') }}
            </div>
        @endif
        <h1>SELAMAT DATANG DI E-TIKET</h1>
        <h3>Apakah anda ingin melakukan pemesanan</h3>
    </div>
    <div>
        <a href="/tickets/create">
            <button class="btn btn-primary">Boking Tiket</button>
        </a>
    </div>
@endsection
