@extends('layouts.main')

@section('title')
<div class="title">
        <div class="container">
                <h2>{{  $comic['series'] }}</h2>
            </div>
        </div>
@endsection

@section('content')

<div class="container">
    <figure>
        <img src="{{ $comic['thumb'] }}" alt="$comic['series']">
    </figure>
    <div>
        <h2>{{ $comic['series'] }}</h2>
        <p> {{ $comic['description'] }}</p>
        <h3> {{ $comic['price'] }} </h3>
        <h4> {{ $comic['sale_date'] }} </h4>
    </div>

</div>
@endsection