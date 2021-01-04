@extends('layout.base')

@section('header')
    @include('layout.header')
@endsection

@section('content')

<div class="flex flex-col items-center h-screen">
    <div class="flex flex-col items-center p-4 my-2 border border-red-800 border-2 rounded bg-red-800">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
        </svg>
        <p class="text-black uppercase">Ausgabe</p>
    </div>

    <div class="flex flex-col items-center p-4 my-2 border border-red-800 border-2 rounded bg-red-800">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
        </svg>
        <p class="text-black uppercase">Kategorie</p>
    </div>

    <div class="flex flex-col items-center p-4 my-2 border border-red-800 border-2 rounded bg-red-800">
        <p>Icon</p>
        <p class="text-black uppercase">Grafiken</p>
    </div>
</div>

@endsection