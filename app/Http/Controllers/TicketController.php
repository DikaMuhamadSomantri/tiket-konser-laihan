<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class TicketController extends Controller
{
    // Show all ticket list
    public function index()
    {

        $tickets = Ticket::latest()->get();
        return view('ticket.index', [
            'tickets' => $tickets
        ]);
    }

    // Show ticket detail with id parameter
    public function show($id)
    {

        $ticket = Ticket::findOrFail($id);
        return view('ticket.show', ['ticket' => $ticket]);
    }

    public function destroy($id)
    {

        $ticket = Ticket::findOrFail($id);
        $ticket->delete();

        // Notifikasi penyelesaian
        $pesan = "Tiket nomor $id selesai diTangani.";
        return redirect('/tickets')->with('selesai', $pesan);
    }

    public function create()
    {

        return view('ticket.create');
    }

    // Save | store data to the db
    public function store()
    {

        $ticket = new Ticket();

        $ticket->email = request('email');
        $ticket->tempat_duduk = request('tempat_duduk');
        $ticket->nama_pemilik = request('nama_pemilik');
        $ticket->dokumens = request('dokumens');

        // Save to db
        $ticket->save();
        return redirect('/')->with('konfirmasi', 'Terima kasih, tiket akan segera kami tangani');
    }

}