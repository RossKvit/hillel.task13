@extends('main')

@section('content')
    <h1>{{ $fullName }}</h1>
    <p>Buildings</p>
    @foreach($buildings as $item)
        <b>Number: {{ $item->building_number }}</b> - Flats count: {{ $item->flats_count }}. Additional info: {{$item->additional_info }} <br>
    @endforeach
@endsection