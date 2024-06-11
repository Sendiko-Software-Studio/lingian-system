@extends('layouts.app')
@section('content')
    <div class="container-fluid d-flex flex-column p-5">
        <?php $i = 1; ?>
        <div class="overview-wrap my-2 align-self-end">
            <a class="btn btn-primary text-decoration-none" href="{{ route('admin.guest.create') }}">
                <i class="fa-solid fa-plus pe-1"></i>
                Tambah Tamu
            </a>
        </div>
        @if (sizeOf($guests) > 0)
            <table class="table table-light table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama Tamu</th>
                        <th scope="col">Nomer Kamar</th>
                        <th scope="col" class="text-center">Status</th>
                        <th scope="col" class="col-md-1 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($guests as $guest)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $guest->nama_tamu }}</td>
                            <td>{{ $guest->room->number }}</td>
                            <td class="{{ $guest->status == 'SUDAH' ? 'bg-success' : 'bg-danger' }} text-center">
                                @if ($guest->status == 'SUDAH')
                                    <p class="p-1 text-light" style="font-weight: bold">
                                        {{ $guest->status }}
                                    </p>
                                @elseif ($guest->status == 'BELUM')
                                    <p class="p-1 text-light" style="font-weight: bold">
                                        {{ $guest->status }}
                                    </p>
                                @endif
                            </td>
                            <td>
                                @if ($guest->status == 'SUDAH')
                                <a href="{{ route('admin.guest.update', $guest->id) }}"
                                    class="btn btn-primary disabled">Selesai<i class="fa-solid fa-check ps-1"></i></a>
                                @else
                                    <a href="{{ route('admin.guest.update', $guest->id) }}"
                                        class="btn btn-primary">Selesai<i class="fa-solid fa-check ps-1"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <h4>List Tamu Kosong.</h4>
        @endif
    </div>
@endsection
