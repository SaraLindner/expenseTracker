@extends('layout.base')

@section('content')

<div class="container mx-auto h-screen flex items-center">
    <div class="flex flex-wrap justify-center items-center mx-auto max-w-xs sm:max-w-sm">
        <div class="flex flex-100 items-center pb-8">
            <hr class="border-gray-400 border-t-1 flex-auto">
            <h1 class="font-medium text-green-200 px-2 py-1 text-lg uppercase text-center">Kategorie löschen</h1>
            <hr class="border-gray-400 border-t-1 flex-auto">
        </div>
        <div class="flex-grow pt-12">
            
            <form method="POST" action="/category/{{$category->id}}/delete">
            @csrf 

                <div class="flex flex-col mx-2">
                    <div class="flex items-end justify-between border-b border-gray-200 py-2 mx-2 mb-2">
                        {{-- expense amount --}}
                        <label class="pl-3">
                        <input type="text" name="name" id="" placeholder="Name..." required value="{{$category->name}}"
                                class="appearance-none bg-transparent border-none text-gray-100 leading-tight focus:outline-none placeholder-gray-200 pointer-events-none">
                        </label>
                        {{-- delete button --}}
                        <button
                        class="flex-shrink-0 bg-red-200 hover:bg-red-400 border-red-200 hover:border-red-600 hover:text-gray-300 text-sm border text-gray-800 p-2 rounded-full">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                    </button>
                    </div>
            </form>
        </div>
    </div>
</div>


@endsection