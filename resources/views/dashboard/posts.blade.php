<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{-- {{ __('All Post') }} --}}
            {{ $title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-5 bg-white border-b border-gray-200 lg:flex flex-wrap">

                    <!-- component -->
                    @foreach ($posts as $p)
                        <div class="lg:mb-5 lg:w-2/6 rounded-md bg-white p-8">
                            <div class="flex justify-between items-center mb-3">
                                <span class="font-light text-gray-600">{{ $p->created_at->diffForHumans() }}</span>
                                <span class="text-blue-600 hover:underline pointer-events-none">{{ $p->category->name }}</span>
                            </div>
                            <div class="mt-2">
                                <span
                                    class="text-2xl text-gray-700 font-bold hover:text-gray-600">{{ $p->title }}</span>
                                <p class="mt-2 text-gray-600">
                                    @if ($p->thumbnail)
                                        <div class="bg-indigo-300">
                                            <img class="object-cover h-48 w-full " src="images/{{ $p->thumbnail }}"
                                                alt="{{ $p->title }}">
                                        </div>
                                    @endif
                                    {{ $p->excerpt }}
                                </p>
                            </div>
                            <div class="flex flex-row-reverse items-center mt-4">
                                <a class="px-2 py-1 bg-blue-600 text-sm text-gray-100 font-bold rounded hover:bg-gray-500"
                                    href="#">Edit
                                </a>
                            </div>
                        </div>
                    @endforeach

                    
                    {{-- End Component --}}
                </div>

                <div class="container mx-auto p-4">
                    {{ $posts->links() }}
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
