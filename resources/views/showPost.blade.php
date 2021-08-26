@extends('layouts.main')

@section('content')
    <h2 class="text-2xl text-italic mb-5">
        {{ $post->title }} <small class="text-sm">- {{ $post->category->name }}</small>
    </h2>

    <article class="container mx-auto">
        {!! $post->body !!}
    </article>


@endsection
