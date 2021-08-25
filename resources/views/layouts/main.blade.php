<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ $title }}</title>
        <meta name="description" content="Portofilio">
        <meta name="keywords" content="Bagus Oktaviadi">
        <meta name="author" content="Bagus Oktaviadi">
    
     
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    
        <script src="https://unpkg.com/feather-icons"></script>
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,700&display=swap" rel="stylesheet">
    
      
    </head>

<body class="bg-gray-900 text-gray-300 font-sans quicksand">

    
    {{-- Main --}}
    <main class="flex flex-wrap p-2 md:p-8">
        
        {{-- intro --}}
        @include('partials.intro')

        {{-- content --}}
        <div class="w-full md:w-9/12 lg:w-9/12 order-2 md:order-2">
            <div class="sm:pr-4 leading-loose tracking-tight pt-4">
                @yield('content')
            </div>
        </div>

        {{-- Contact --}}
        @include('partials.contact')

        {{-- Footer --}}
        <div class="w-full md:w-9/12 lg:w-9/12 order-3 md:order-4">
            <div class="max-w-md leading-loose tracking-tight">
                <p class="font-bold my-4 md:my-12">Made use Laravel 8.0.0<i class="inline ml-3" data-feather="activity"></i></p>
                <p>Ui is Inspired by <a href="https://github.com/tailwindtoolbox">tailwindtoolbox</a> & diomed</p>
                <p class="mb-8">also<a href="https://minimalissimo.shop/product/minimalist-writer-ii" target="_blank">minimalist-writer-ii</a> created by <a href="https://manuelmoreale.com/">Manuel Moreale</a>.</p>
            </div>
        </div>

    </main>

    {{-- theme switcher pinned on top right --}}
    @include('partials.mood')
    

    
    <script src="{{ asset('js/main.js') }}"></script>


</body>


</html>
