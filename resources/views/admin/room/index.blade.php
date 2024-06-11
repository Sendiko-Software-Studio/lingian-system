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
            <table class="table table-light table-bordered table-responsive">
                <thead>
                    <tr>
                        <th class="bg-dark col-1" style="color: white">No.</th>
                        <th class="bg-dark col-2" style="color: white">Nomer Kamar</th>
                        <th class="bg-dark col-5" style="color: white">Tamu</th>
                        <th class="bg-dark col-md-1 text-center" style="color: white">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rooms as $room)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $room->number }}</td>
                            <td class="d-flex flex-row">
                                @forelse ($room->guests as $guest)
                                    <p class="pe-1">{{ $guest->nama_tamu }}, </p>
                                @empty
                                    <p>Ruangan kosong.</p>
                                @endforelse
                            </td>
                            <td>
                                <a href="{{ route('admin.room.delete', $room->id) }}" class="btn btn-danger overview-wrap ms-1 w-100">
                                    <i class="fa fa-remove" aria-hidden="true"></i>
                                    Hapus
                                </a>
                                <div class="p-1"></div>
                                <a href="{{ route('admin.room.edit', $room->id) }}" class="btn btn-info overview-wrap mx-1 w-100">
                                    <i class="fa fa-edit" aria-hidden="true"></i>
                                    Edit
                                </a>
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
