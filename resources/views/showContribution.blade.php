@extends('layouts.main')

@section('content')
    <h2 class="text-2xl text-italic mb-5">
        {{ $contribution->title }}
    </h2>

    <article class="container mx-auto">
        {!! $contribution->body !!}
    </article>


@endsection
