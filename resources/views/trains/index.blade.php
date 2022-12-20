@extends('layouts.app')

@section('title', 'All trains')

@section('content')
    <div class="container">
        <h2>Lista dei treni</h2>
        <ul>
            @foreach ($trains as $train)
            <li class="card col-5">
            <p>Codice treno: {{$train->code_train}}</p>
            <p>Compagnia: {{$train->company}}</p> 
            <p>Stazione di partenza: {{$train->departure_station}}, Data e orario: {{$train->departure_time}}</p> 
            <p>Stazione di arrivo: {{$train->arrival_station}}, Data e orario: {{$train->arrival_time}}</p> 
            <p>Numero carrozze: {{$train->n_carriages}}</p>
            
            </li>
    
            @endforeach
        </ul>
    </div>
@endsection