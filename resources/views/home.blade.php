<?php
$comics = config('comics');
?>

@extends('layouts.main')

@section('content')
<div id="comics-home">
    <div class="container">
        <h2>Current series</h2>
            @foreach($comics as $comic)
                <div class="cards">
                    <div class="comic-container">
                        <a href="">
                            <img src="{{ $comic['thumb'] }}" alt=" {{ $comic['series']}} ">
                        </a>
                        <h4>{{ $comic['series']}}</h4>
                    </div>
                </div>
        @endforeach
    </div>
</div>

@endsection