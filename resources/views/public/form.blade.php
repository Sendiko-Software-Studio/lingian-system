@extends('layouts.public')
@section('content')
    <form action="{{ route('room.update', $nomor_kamar) }}" method="POST" enctype="multipart/form-data" class="form-container">
        {{ csrf_field() }}
        <div class="card mt-4">
            <div class="card-body">
                <div class="form-group">
                    <label for="nama">Nama Tamu:</label>
                    <input type="text" id="nama" name="nama" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="gambar">Gambar:</label>
                    <input type="file" id="gambar" name="gambar" class="form-control-file" accept="image/*" required>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="nama2">Nama Tamu 2 (opsional):</label>
                    <input type="text" id="nama2" name="nama2" class="form-control">
                </div>
                <div class="form-group">
                    <label for="gambar2">Gambar (opsional):</label>
                    <input type="file" id="gambar2" name="gambar2" class="form-control-file" accept="image/*">
                </div>
            </div>
        </div>
        <button type="submit" class="button-primary mb-3">Submit</button>
    </form>
@endsection
