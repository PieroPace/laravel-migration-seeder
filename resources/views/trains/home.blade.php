@extends('layouts.base')

@section('documentTitle')
   Trains
@endsection

@section('content')
<div class="row cards">
@foreach ($trains as $train)
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
        <li><a href="{{ route('trains.show', $train) }}" class="btn btn-primary">View Train</a></li>
    </ul>
@endforeach
</div>
<div class="row">
    <div class="col">
          {{$trains->links()}}
        </div>
</div>
@endsection
