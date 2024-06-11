@extends('layouts.app')
@section('content')
    <div class="container d-flex flex-column p-5">
        <h2 class="h2">Edit Kamar</h2>
        <div class="card flex-grow-1 p-3 w-100 align-self-center">
            <form action="{{ route('admin.room.update', $room->id) }}" class="form" method="POST">
                <div class="form-group py-2">
                    <label for="room_number">
                        Nomer Kamar:
                    </label>
                    <input type="number" name="room_number" id="room_number" class="form-control mb-3" value="{{ $room->number }}" disabled>
                    <?php $i = 0; ?>
                    @foreach ($guests as $guest)
                        <?php $i++; ?>
                        <label for="guest_name" class="w-100">Nama Tamu: </label>
                        <input type="text" class="form-control" name="guest-{{ $guest->id }}" value="{{ $guest->nama_tamu }}" disabled>
                        <a href="{{ route('admin.guest.delete', $guest->id) }}"
                            class="btn btn-danger d-flex flex-row align-items-center justify-content-center my-3"><i
                                class="fa fa-remove pe-1" aria-hidden="true"></i>Hapus</a>
                    @endforeach
                </div>
            </form>
        </div>
    </div>
@endsection
