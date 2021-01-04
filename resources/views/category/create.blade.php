@extends('layout.base')

{{-- @section('header')
@include('layout.header')
@endsection --}}

@section('content')

<div class="container mx-auto h-screen flex items-center">
    <div class="flex flex-wrap justify-center items-center mx-auto max-w-xs sm:max-w-sm">
        <div class="flex flex-100 items-center pb-8">
            <hr class="border-gray-400 border-t-1 flex-auto">
            <h1 class="font-medium text-green-200 px-2 py-1 text-lg uppercase text-center">neue Kategorie</h1>
            <hr class="border-gray-400 border-t-1 flex-auto">
        </div>
        {{-- SVG Icons --}}
        <div class="flex flex-row items-center py-6">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                class="w-6 h-6 text-gray-100 text-center mr-1">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                class="w-8 h-8 text-gray-100 text-center">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
        </div>
        <div class="flex-grow pt-12">
            <form method="POST" action="addNewCategory">
            @csrf 

                <div class="flex flex-col mx-2">
                    <div class="flex items-end justify-between border-b border-gray-200 py-2 mx-2 mb-2">
                        {{-- expense ampunt --}}
                        <label class="pl-3">
                            <input type="text" name="name" id="" placeholder="Name..." required
                                class="appearance-none bg-transparent border-none text-gray-100 leading-tight focus:outline-none placeholder-gray-200 pointer-events-none">
                        </label>
                        {{-- submit button --}}
                        <button
                            class="flex-shrink-0 bg-green-200 hover:bg-green-600 border-green-200 hover:border-green-600 hover:text-gray-300 text-sm border text-black py-2 px-4 rounded-full">Hinzufügen
                        </button>
                    </div>
            </form>
        </div>
    </div>
</div>


@endsection