{{-- Display the List of Marvel Characters! --}}

@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4 pt-16">
        <div class="marvel-characters">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Marvel Universe Characters</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach($marvelCharacters as $character)
                    <x-character-card :character="$character"></x-character-card>
                @endforeach
           </div>
        </div>
    </div>

@endsection
