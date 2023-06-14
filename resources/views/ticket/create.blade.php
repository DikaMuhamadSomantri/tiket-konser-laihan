@extends('layouts.app')

@section('content')
    <div class="wrapper">
        <h1>Buat Tiket Pemesanan Baru</h1>



        <form class="form-example" action="/tickets" method="POST">
            <h1>Pemesanan Tiket Konser Online</h1>
            @csrf
            <!-- Input fields -->
            <div class="form-group">
                <label for="Nama nama_pemilik" class="mt-2">Nama Pemesan:</label>
                <input type="text" class="form-control username mt-2" id="nama_pemilik" placeholder="Masukan Nama Anda..."
                    name="nama_pemilik" required />
            </div>
            <div class="form-group">
                <label for="email" class="mt-2">Email:</label>
                <input type="email" class="form-control password mt-2" id="email" placeholder="Masukan Email..."
                    name="email" required />
            </div>
            <div class="form-group">
                <label for="email" class="mt-2">Pilih Tempat Duduk:</label>
                <select name="tempat_duduk" class="form-control password mt-2" id="tempat_duduk" required>
                    <option value="VIP">VIP</option>
                    <option value="BIASA">BIASA</option>
                    <option value="BELAKANG">BELAKANG</option>
                </select>
                <fieldset>
                    <label for="dokumens">Dokumen terlampir:</label><br>
                    <input type="checkbox" name="dokumens[]" value="KTP">KTP<br>
                    <input type="checkbox" name="dokumens[]" value="KK">KK<br>
                    <input type="checkbox" name="dokumens[]" value="SIM">SIM<br>
                </fieldset>
            </div>

            <button type="submit" class="btn btn-primary btn-customized mt-4" value="Buat tiket baru">
                Pesan
            </button>
        </form>
    </div>
@endsection
