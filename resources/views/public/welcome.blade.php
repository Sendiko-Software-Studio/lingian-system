@extends('layouts.public')
@section('content')
    <div class="d-flex flex-column justify-content-center align-content-center align-item-center">

        <div class="p-3"></div>
        <div class="card w-100 m-auto p-3 mb-3">
            <img src="{{ asset('images/face-id.png') }}" alt="face-recognition" class="img-fluid">
            <h2>Selamat datang!</h2>
            <p>
                Ini adalah sistem terbaru dari Hotel Lingian, pengunjung diperlukan untuk mengambil foto selfie dengan wajah
                yang terlihat jelas. Foto ini akan digunakan untuk authentikasi wajah saat memasuki area Sarapan,
                foto pengunjung akan dihapus setiap 24 jam. Jika anda menginap lebih dari 2 malam, mohon untuk melakukan
                proses ini lagi.
            </p>
            <a href="{{ route('room.edit', $nomor_kamar) }}" class="text-decoration-none button-primary w-100 text-center">Oke, lanjut</a>
        </div>

    </div>
@endsection
