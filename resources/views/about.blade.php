@extends('layouts.main')

@section('content')
    <h1 class="text-4xl text-italic mb-5">
        {{ $title }}
    </h1>

    {{-- Content List --}}
    <div class="container mx-auto p-2">
        <div class="max-w-md py-4 px-8 bg-gray-800 shadow-lg rounded-lg my-20">
            <div class="flex justify-center md:justify-start -mt-16">
                <img class="w-20 h-20 object-cover rounded-full border-2 border-indigo-500" src="images/profile.jpg">
                {{-- src="https://images.unsplash.com/photo-1499714608240-22fc6ad53fb2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80"> --}}
            </div>
            <div>
                <h2 class="text-3xl font-semibold">Junior Programmer</h2>
                <p class="mt-2">
                    Experienced in Web Development based on Code igniter Framework, in leraning about Laravel. Highly
                    willing to learn new things every day
                </p>
            </div>
            <div class="flex justify-end mt-4">
                <a class="text-xl font-medium text-indigo-500">Bagus OKtaviadi</a>
            </div>
        </div>
    </div>


@endsection
