@extends('layout.base')

{{-- @section('header')
@include('layout.header')
@endsection --}}

@section('content')

<div class="container mx-auto h-screen flex items-center">
    <div class="flex flex-wrap justify-center items-center mx-auto max-w-xs sm:max-w-sm">
        <div class="flex flex-100 items-center pb-8">
            <hr class="border-gray-400 border-t-1 flex-auto">
            <h1 class="font-medium text-red-300 px-2 py-1 text-lg uppercase text-center">neue Ausgabe</h1>
            <hr class="border-gray-400 border-t-1 flex-auto">
        </div>
        {{-- SVG Icons --}}
        <div class="flex flex-row items-center py-1">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                class="w-6 h-6 text-gray-100 text-center mr-1">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                class="text-gray-100 text-center h-8 w-8">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
        </div>
        <div class="flex-grow pt-12">
            <form method="POST" action="addNewExpense">
                @csrf
                <div class="flex flex-col mx-2">

                    {{-- Date picker --}}
                    <div class="flex mb-12 text-opacity-50">
                        <div class="flex-grow text-center">
                            <label for="date" class="pb-6 pl-2"></label>
                            <input type="date" id="date" name="spend_at" required
                                class="appearance-none bg-transparent border-none text-gray-100 leading-tight focus:outline-none">
                        </div>
                        {{-- taxdeductable --}}
                        <div class="flex-grow text-center">
                            <input type="checkbox" name="tax_deductable" id=""
                                class="appearance-none h-3 w-3 border border-gray-200 rounded-full checked:bg-green-200 checked:border-transparent focus:outline-none">
                            <label for="xyz" class="pb-6 pl-1 text-gray-200">steuerbar</label>

                        </div>
                    </div>
                    {{-- category --}}
                    <div class="relative mb-4 border-b border-gray-100 text-gray-100 text-opacity-50">
                        <select name="category_id" id="" required
                            class="block appearance-none border-none bg-transparent w-full py-2 px-2 pr-8 leading-tight focus:outline-none  focus:border-gray-500">
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                        <div class="absolute flex inset-y-0 items-center px-3 right-0 rounded-r pointer-events-none">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    {{-- description for category --}}
                    <div class="border-b mb-16 border-gray-100 text-gray-200">
                        <label for="" class="pb-6 pl-1"></label>
                        <input type="text" name="category_description" id="" placeholder="Beschreibung..."
                            class="appearance-none border-none bg-transparent w-full py-2 px-2 pr-8 leading-tight placeholder-gray-200">
                    </div>

                </div>

                <div class="flex items-end justify-between border-b border-gray-200 py-2 mx-2 mb-2">
                    {{-- expense amount --}}
                    <label class="pl-3">
                        <input type="text" name="amount" placeholder="0,00 €" required
                            class="appearance-none bg-transparent border-none text-gray-100 leading-tight focus:outline-none placeholder-gray-200 pointer-events-none">
                    </label>
                    {{-- submit button --}}
                    <button
                        class="flex-shrink-0 bg-red-300 hover:bg-red-600 border-red-200 hover:border-red-600 hover:text-gray-300 text-sm border text-gray-800 py-2 px-4 rounded-full">Hinzufügen
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection
