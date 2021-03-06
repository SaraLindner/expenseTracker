@extends('layout.base')

@section('content')

<div class="container mx-auto h-screen flex items-center">
    <div class="text-green-400">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-20 h-20">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
        </svg>
    </div>
    <div class="flex flex-wrap justify-center items-center ml-12 h-20 mr-24 max-w-xs sm:max-w-sm">
        <div class="text-gray-200 text-2xl">Die Kategorie</div>
        <div class="text-gray-200 text-2xl">{{$category->name}} </div>
        <div class="text-gray-200 text-2xl">wurde angelegt</div>
    </div>
    <a href="newExpense"
        class="flex-shrink-0 bg-red-300 hover:bg-red-600 border-red-200 hover:border-red-600 hover:text-gray-300 text-sm border text-black py-2 px-4 rounded-full">
        <div class="flex text-gray-800 hover:text-gray-100 text-center items-center">
            <div class="flex flex-row items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    class="w-6 h-6 mr-1">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                </svg>
            </div>
            <div class="text-base">Kategorie</div>
        </div>
    </a>
</div>

@endsection