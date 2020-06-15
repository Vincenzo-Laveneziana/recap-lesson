@extends('layouts.main')

@section('content')

    <h2>Blog</h2>
    <a href="{{route('home')}}">Home</a>
    <br>
    @foreach ($post as $item)
        <div>
            <h3>Titolo: {{$item['title']}}</h3>
            <p>Descrizione: {{$item['description']}} </p>
            <a href="{{$item['slug']}}">{{$item['title']}}</a>
        </div>
        <hr>
    @endforeach

@endsection