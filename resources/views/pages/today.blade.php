@extends('home')

@section('title', 'Today\'s Trains')

@section('trains-selections')

    <h1>I treni in partenza oggi</h1>

    @forelse ($trains as $train)
        <ul>
            <li>
                {{ $train->agency }}
            </li>
            <li>
                {{ $train->departure_station }} - {{ $train->departure_time }}
            </li>
            <li>
                {{ $train->arrival_station }} - {{ $train->arrival_time }}
            </li>        
        </ul>
    @empty
        <h3>
            Non ci sono treni in partenza oggi.
        </h3>
    @endforelse

@endsection