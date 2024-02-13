@extends('layouts.main-layout')
@section('head')
    <title>Laravel Trains Database</title>
@endsection
@section('content')
    <h1>Treni: {{ $trains->count() }}</h1>
    <ul>
        @foreach ($trains as $train)
            <li><strong>Treno:</strong> {{ $train ->codice_treno }}
                <strong>Azienda</strong>: {{ $train ->azienda }}
                <strong>Parte da:</strong> {{ $train ->stazione_di_partenza }}
                <strong>Arriva:</strong> {{ $train ->stazione_di_arrivo }}
                <strong>Orario di partenza:</strong> {{ $train ->orario_di_partenza }}
                <strong>Orario di arrivo:</strong> {{ $train ->orario_di_arrivo }}
            </li>
        @endforeach
    </ul>
@endsection
