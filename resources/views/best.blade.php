@extends('layouts.app')
@section('content')

<div class="container flex">
    <div class="flex flex-wrap">
        @foreach ($movies as $movie)
            <div class="card flex basis-1/4 flex-col gap-2">
                <div class="m-8 bg-sky-600 rounded p-3">
                    <p>Title: {{ $movie->title }}</p>
                    <p>Original title: {{ $movie->original_title }}</p>
                    <p>Nationality: {{ $movie->nationality }}</p>
                    <p>Date: {{ $movie->date }}</p>
                    <p>Vote: {{ $movie->vote }}</p>
                </div>
            </div>
            
        @endforeach
    </div>
</div>

@endsection
