<div>
    <div class="mt-8">
        <a href="{{route('character.show', $character['id'])}}">
            <img src="{{$character['thumbnail']['path'].'/standard_fantastic'.'.'.$character['thumbnail']['extension']}}" alt="photo" class="hover:opacity-50 transition ease-in-out duration-150">
        </a>
        </a>

        <div class="mt-2">
            <a href="{{route('character.show', $character['id'])}}" class="text-lg mt-2 hover:text-gray-300">{{$character['name']}}</a>
            <div class="flex items-center text-gray-400 text-sm mt-1">
                                <span>
                                    <img class="fill-current text-orange-500 w-4" src="{{'https://img.icons8.com/doodle/48/000000/calendar--v2.png'}}" alt="">
                                 </span>
                <span class="mx-1">Modified on: ({{ \Carbon\Carbon::parse($character['modified']) -> format('M D, Y')}})</span>
            </div>
        </div>
    </div>
</div>
