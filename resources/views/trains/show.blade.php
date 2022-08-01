@extends('layouts.base')

@section('documentTitle')
    Train
@endsection

@section('content')
<div class="cards">
    <ul class="card">
        <li>Agenzia <br>{{ $train -> agency }}</li>
        <li>Partenza <br>{{ $train -> departure_station }} - {{ $train -> departure_time }}</li>
        <li>Arrivo<br>{{ $train -> arrival_station }} - {{ $train -> arrival_time }}</li>
        <li>{{ $train -> train_code }} - N Carrozze: {{ $train -> train_carriage }}</li>
        @php
            $response = '';
             if($train -> deleted) {
                $response = 'Cancellato';
            } elseif (!$train -> deleted && !$train -> in_time) {
                $response = 'In ritardo';
            } else {
                $response = 'In orario';
            }
        @endphp
        <li>{{ $response  }}</li>
    </ul>
</div>
@endsection
