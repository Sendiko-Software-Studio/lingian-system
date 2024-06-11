@extends('layouts.app')
@section('content')
    <div class="container d-flex flex-column p-5">
        <h2 class="h2">Tambah Kamar</h2>
        <div class="card flex-grow-1 p-3 w-100 align-self-center">
            <form action="{{ route('admin.room.store') }}" class="form">
                <div class="form-group py-2">
                    <label for="room_number">
                        Nomer Kamar:
                    </label>
                    <input type="number" name="room_number" id="room_number" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary w-100 my-2">Simpan</button>
            </form>
        </div>
    </div>
@endsection
