@extends('layouts.app')

@section('content')
    <!-- Route Parameter -->
    <div class="ticket-details">

        <h1>Ticket No: {{ $ticket->id }}</h1>

        <p>nama pemilik: {{ $ticket->nama_pemilik }}</p>
        <p>email: {{ $ticket->email }}</p>
        <p>tempat duduk: {{ $ticket->tempat_duduk }}</p>
        <p>Dokumen persyaratan:</p>
        <ul>
            @foreach ($ticket->dokumens as $dokumen)
                <li>{{ $dokumen }}</li>
            @endforeach
        </ul>
        <form action="/tickets/{{ $ticket->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button>Selesaikan tiket laporan</button>
        </form>

    </div>

    <br>
    <a href='/tickets'>Kembali ke daftar tiket</a>
@endsection
