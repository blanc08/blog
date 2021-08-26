@extends('layouts.main')

@section('content')
    <h1 class="text-4xl text-italic mb-5">
        {{ $title }}
    </h1>

    {{-- <h2 class="text-2xl text-italic mb-5">
        Latest
    </h2> --}}



    {{-- Content List --}}
    <div class="container mx-auto md:flex flex-warp gap-8 rounded-md bg-gray-800 p-5 mb-5">
        @if ($posts->isEmpty())
            {{ 'Sorry, there`s no Post yet! :(' }}
        @endif
        @foreach ($posts as $c)

            <article class="mb-5 md:w-2/6 rounded-md p-3">
                <a class="p-0" href="/posts/{{ $c->slug }}">
                    <h6 class="text-lg text-italic mb-2">{{ $c->title }}</h6>
                    <img class="mb-3" src="/images/{{ $c->thumbnail }}" alt="{{ $c->title }}">
                    <p class="text-sm">{{ $c->excerpt }}</p>
                    <a class="text-sm" href="/posts/{{ $c->slug }}">Baca selengkapnya</a>
                </a>
            </article>



        @endforeach
    </div>


@endsection
