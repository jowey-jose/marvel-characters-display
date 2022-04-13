{{-- Display the List of Marvel Characters! --}}

@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4 pt-16">
        <div class="marvel-characters">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Marvel Universe Characters</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach($marvelCharacters as $character)
                    <div class="mt-8">
                        <a href="#">
                            <img src="{{$character['thumbnail']['path'].'/standard_fantastic'.'.'.$character['thumbnail']['extension']}}" alt="photo" class="hover:opacity-50 transition ease-in-out duration-150">
                        </a>
                        </a>

                        <div class="mt-2">
                            <a href="#" class="text-lg mt-2 hover:text-gray-300">{{$character['name']}}</a>
                            <div class="flex items-center text-gray-400 text-sm mt-1">
                                <span>
                                    <img class="fill-current text-orange-500 w-4" src="{{'https://img.icons8.com/doodle/48/000000/calendar--v2.png'}}" alt="">
                                 </span>
                                <span class="mx-1">{{ \Carbon\Carbon::parse($character['modified']) -> format('M D, Y')}}</span>
                            </div>

{{--                            <div class="text-gray-400 text-sm mt-2">--}}
{{--                                {{$character['description']}}--}}
{{--                            </div>--}}
                        </div>
                    </div>
                @endforeach
           </div>
        </div>
    </div>

@endsection
