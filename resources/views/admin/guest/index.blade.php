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
            <table class="table table-light table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama Tamu</th>
                        <th scope="col">Nomer Kamar</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($guests as $guest)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $guest->nama_tamu }}</td>
                            <td>{{ $guest->room->number }}</td>
                            <td>
                                @if ($guest->status == 'SUDAH')
                                    <p class="card p-1 text-center bg-success text-light" style="font-weight: bold">
                                        {{ $guest->status }}
                                    </p>
                                @elseif ($guest->status == 'BELUM')
                                    <p class="card p-1 text-center bg-danger text-light" style="font-weight: bold">
                                        {{ $guest->status }}
                                    </p>
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
