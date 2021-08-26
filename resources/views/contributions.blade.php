@extends('layouts.main')

@section('content')
    <h1 class="text-4xl text-italic mb-5">
        Contributions
    </h1>

    {{-- <h2 class="text-2xl text-italic mb-5">
        Latest
    </h2> --}}

    {{-- Content List --}}
    <div class="container mx-auto md:flex flex-warp gap-8 rounded-md bg-gray-800 p-5 mb-5">

        @if ($contributions->isEmpty())
            {{ 'Sorry, there`s no Contribution yet! :(' }}
        @endif

        @foreach ($contributions as $c)

            <article class="mb-5 md:w-2/6 rounded-md p-3">
                <a class="p-0" href="/contributions/{{ $c->slug }}">
                    <h6 class="text-sm lg:text-lg text-italic mb-2">{{ $c->title }}</h6>
                    <img class="mb-2 lg:mb-3" src="/images/{{ $c->image }}" alt="{{ $c->title }}">
                    <a class="float-right text-sm mb-3 ml-2" href="{{ $c->link }}" target="_blank">Kunjungi Web</a>
                    <p class="text-sm">{{ $c->excerpt }}</p>
                </a>
            </article>



        @endforeach
    </div>


@endsection
