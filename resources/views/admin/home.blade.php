@extends('layouts.app')
@section('content')
    <div class="container-fluid d-flex flex-row p-5">
        <div class="card flex-grow-1">
            <div class="card-header">Total Tamu</div>
            <div class="card-body">
                <h2>{{ $totalGuest }}</h2>
            </div>
        </div>
        <div class="m-3"></div>
        <div class="card flex-grow-1">
            <div class="card-header">Total Kamar</div>
            <div class="card-body">
                <h2>{{ $totalRoom }}</h2>
            </div>
        </div>
    </div>
@endsection
