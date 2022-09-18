<?php
$comics = config('comics');
?>

@extends('layouts.main')

@section('content')
<div id="comics-home">
    <div class="container">
        @section('title')
        <div class="title">
            <div class="container">
                <h2>Current series</h2>
            </div>
        </div>
        @endsection
        <div class="cards">
            @foreach($comics as $comic)
                    <div class="comic-container">
                        <a href=" {{ route('products.show' , ['id' => $loop->index ]) }} ">
                            <img src="{{ $comic['thumb'] }}" alt=" {{ $comic['series']}} ">
                        </a>
                        <h4>{{ $comic['series']}}</h4>
                    </div>
            @endforeach
        </div>
    </div>
</div>

@endsection