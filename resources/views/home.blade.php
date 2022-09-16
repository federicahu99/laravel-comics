<?php
$comics = config('comics');
?>

@extends('layouts.main')

@section('content')

    @foreach($comics as $comic)
        <ul>
            <li>
                <img src="{{ $comic['thumb'] }}" alt=" {{ $comic['series']}} ">
                <h4>{{ $comic['series']}}</h4>
            </li>
        </ul>
    @endforeach

@endsection