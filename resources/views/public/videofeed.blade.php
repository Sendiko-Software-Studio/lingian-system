@extends('layouts.app')
@section('content')
<div>
    <img src="{{ url_for('video_feed') }}" width="100%">
</div>
@endsection
