@extends('layouts.app')
@section('content')
    <div class="container d-flex flex-column p-5">
        <h2 class="h2">Tambah Tamu</h2>
        <div class="card flex-grow-1 p-3 w-100 align-self-center">
            <form action="{{ route('admin.guest.store') }}" class="form">
                <div class="form-group py-2">
                    <label for="room_number">
                        Nomer Kamar:
                    </label>
                    <select name="room_number" id="room_number" class="form-select">
                        <option value="" selected>-- Pilih Kamar --</option>
                        @forelse ($rooms as $room)
                            <option value="{{ $room->id }}">{{ $room->number }}</option>
                        @empty
                            <option value="">Tidak ada kamar.</option>
                        @endforelse
                    </select>
                </div>
                <div class="form-group py-2">
                    <label for="guest_name1">
                        Nama Tamu 1:
                    </label>
                    <input type="text" name="guest_name1" id="guest_name1" class="form-control" required>
                    <label for="status1" class="pt-2">
                        Status Sarapan Tamu:
                    </label>
                    <select name="status1" id="status1" class="form-select" required>
                        <option value="">-- Pilih Opsi --</option>
                        <option value="SUDAH">Sudah</option>
                        <option value="BELUM">Belum</option>
                    </select>
                </div>
                <div class="form-group py-2">
                    <label for="guest_name2">
                        Nama Tamu 2:
                    </label>
                    <input type="text" name="guest_name2" id="guest_name2" class="form-control" required>
                    <label for="status2" class="pt-2">
                        Status Sarapan Tamu:
                    </label>
                    <select name="status2" id="status2" class="form-select" required>
                        <option value="">-- Pilih Opsi --</option>
                        <option value="SUDAH">Sudah</option>
                        <option value="BELUM">Belum</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary w-100 my-2">Simpan</button>
            </form>
        </div>
    </div>
@endsection
