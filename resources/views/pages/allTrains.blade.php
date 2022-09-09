@extends('home')

@section('title', 'trains-selections')

@section('trains-selections')

    <h1>
        Tutti i treni
    </h1>
    
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
            Non ci sono treni
        </h3>
    @endforelse

@endsection