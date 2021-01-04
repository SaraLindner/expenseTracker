@extends('layout.base')

@section('content')
<div class="container mx-auto mx-auto max-w-xs sm:max-w-sm">
    <div class="grid grid-cols-2 gap-x-4 gap-y-4 pt-8 px-4 items-center">
        <div class="text-gray-200 font-medium text-base sm:text-xl">Kategorie</div>
        <div class="text-gray-200 font-medium text-base sm:text-xl text-center">Optionen</div>
        @foreach ($categories as $category)
        <div class="text-gray-200 text-sm">{{$category->name}}</div>
        <div class="flex flex-row justify-center">
        <a href="{{$category->id}}/update">
                <button class="bg-green-200 hover:bg-green-400 rounded-full p-2 mr-1">
                    <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                    </svg>
                </button>
            </a>
            <a href="{{$category->id}}/delete">
                <button class="bg-teal-400 hover:bg-teal-600 rounded-full p-2 ml-1">
                    <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                    </svg>
                </button>
            </a>
        </div>
        @endforeach

    </div>
</div>


@endsection