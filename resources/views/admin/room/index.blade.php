@extends('layouts.app')
@section('content')
    <div class="container-fluid d-flex flex-column p-5">
        <?php $i = 1; ?>
        <div class="overview-wrap my-2 align-self-end">
            <a class="btn btn-primary text-decoration-none" href="{{ route('admin.room.create') }}">
                <i class="fa-solid fa-plus pe-1"></i>
                Tambah Ruangan
            </a>
        </div>
        @if (sizeOf($rooms) > 0)
            <table class="table table-light table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nomer Kamar</th>
                        <th scope="col">Tamu</th>
                        <th scope="cole">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rooms as $room)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $room->number }}</td>
                            <td>
                                @forelse ($room->guests as $guest)
                                    <p>{{ $guest->nama_tamu }}</p>
                                @empty
                                    <p>Ruangan kosong.</p>
                                @endforelse
                            </td>
                            <td class="overview-wrap">
                                <a href="#" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <h4>List Ruangan Kosong.</h4>
        @endif
    </div>
@endsection
