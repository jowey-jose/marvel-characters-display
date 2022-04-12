{{-- Display the List of Marvel Characters! --}}

@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4 pt-16">
        <div class="marvel-characters">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Marvel Universe Characters</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                <div class="mt-8">
                    <a href="#">
                        <img src="{{asset('https://terrigen-cdn-dev.marvel.com/content/prod/1x/009drs_ons_crd_02.jpg')}}" alt="strange" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Dr Strange</a>
{{--                        <div class="flex items-center text-gray-400 text-sm mt-1">--}}
{{--                            <span>--}}
{{--                                <img class="fill-current text-orange-500 w-4" src="{{'https://img.icons8.com/emoji/48/000000/star-emoji.png'}}" alt="">--}}
{{--                            </span>--}}
{{--                            <span class="ml-1" >85%</span>--}}
{{--                            <span class="mx-2">|</span>--}}
{{--                            <span>Feb 20, 2020</span>--}}
{{--                        </div>--}}

                        <div class="text-gray-400 text-sm mt-2">
                            Dr Strange Description.
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="{{asset('https://terrigen-cdn-dev.marvel.com/content/prod/1x/012scw_ons_crd_02.jpg')}}" alt="strange" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Wanda Maximoff</a>
                        {{--                        <div class="flex items-center text-gray-400 text-sm mt-1">--}}
                        {{--                            <span>--}}
                        {{--                                <img class="fill-current text-orange-500 w-4" src="{{'https://img.icons8.com/emoji/48/000000/star-emoji.png'}}" alt="">--}}
                        {{--                            </span>--}}
                        {{--                            <span class="ml-1" >85%</span>--}}
                        {{--                            <span class="mx-2">|</span>--}}
                        {{--                            <span>Feb 20, 2020</span>--}}
                        {{--                        </div>--}}

                        <div class="text-gray-400 text-sm mt-2">
                            Wanda Maximoff Description.
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="{{asset('https://terrigen-cdn-dev.marvel.com/content/prod/1x/079wng_ons_crd_03.jpg')}}" alt="strange" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Wong</a>
                        {{--                        <div class="flex items-center text-gray-400 text-sm mt-1">--}}
                        {{--                            <span>--}}
                        {{--                                <img class="fill-current text-orange-500 w-4" src="{{'https://img.icons8.com/emoji/48/000000/star-emoji.png'}}" alt="">--}}
                        {{--                            </span>--}}
                        {{--                            <span class="ml-1" >85%</span>--}}
                        {{--                            <span class="mx-2">|</span>--}}
                        {{--                            <span>Feb 20, 2020</span>--}}
                        {{--                        </div>--}}

                        <div class="text-gray-400 text-sm mt-2">
                            Wong Description.
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="{{asset('https://terrigen-cdn-dev.marvel.com/content/prod/1x/005smp_ons_crd_02.jpg')}}" alt="strange" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Spider Man</a>
                        {{--                        <div class="flex items-center text-gray-400 text-sm mt-1">--}}
                        {{--                            <span>--}}
                        {{--                                <img class="fill-current text-orange-500 w-4" src="{{'https://img.icons8.com/emoji/48/000000/star-emoji.png'}}" alt="">--}}
                        {{--                            </span>--}}
                        {{--                            <span class="ml-1" >85%</span>--}}
                        {{--                            <span class="mx-2">|</span>--}}
                        {{--                            <span>Feb 20, 2020</span>--}}
                        {{--                        </div>--}}

                        <div class="text-gray-400 text-sm mt-2">
                            Spider Man Description.
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="{{asset('https://terrigen-cdn-dev.marvel.com/content/prod/1x/spidey03_ons_crd_01.jpg')}}" alt="strange" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">The Amazing Spider man</a>
                        {{--                        <div class="flex items-center text-gray-400 text-sm mt-1">--}}
                        {{--                            <span>--}}
                        {{--                                <img class="fill-current text-orange-500 w-4" src="{{'https://img.icons8.com/emoji/48/000000/star-emoji.png'}}" alt="">--}}
                        {{--                            </span>--}}
                        {{--                            <span class="ml-1" >85%</span>--}}
                        {{--                            <span class="mx-2">|</span>--}}
                        {{--                            <span>Feb 20, 2020</span>--}}
                        {{--                        </div>--}}

                        <div class="text-gray-400 text-sm mt-2">
                            The Amazing Spider man Description.
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="{{asset('https://terrigen-cdn-dev.marvel.com/content/prod/1x/054mac_com_crd_01.jpg')}}" alt="strange" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">America</a>
                        {{--                        <div class="flex items-center text-gray-400 text-sm mt-1">--}}
                        {{--                            <span>--}}
                        {{--                                <img class="fill-current text-orange-500 w-4" src="{{'https://img.icons8.com/emoji/48/000000/star-emoji.png'}}" alt="">--}}
                        {{--                            </span>--}}
                        {{--                            <span class="ml-1" >85%</span>--}}
                        {{--                            <span class="mx-2">|</span>--}}
                        {{--                            <span>Feb 20, 2020</span>--}}
                        {{--                        </div>--}}

                        <div class="text-gray-400 text-sm mt-2">
                            America Description.
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="{{asset('https://terrigen-cdn-dev.marvel.com/content/prod/1x/246tjf_com_crd_01.jpg')}}" alt="strange" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Jane Foster</a>
                        {{--                        <div class="flex items-center text-gray-400 text-sm mt-1">--}}
                        {{--                            <span>--}}
                        {{--                                <img class="fill-current text-orange-500 w-4" src="{{'https://img.icons8.com/emoji/48/000000/star-emoji.png'}}" alt="">--}}
                        {{--                            </span>--}}
                        {{--                            <span class="ml-1" >85%</span>--}}
                        {{--                            <span class="mx-2">|</span>--}}
                        {{--                            <span>Feb 20, 2020</span>--}}
                        {{--                        </div>--}}

                        <div class="text-gray-400 text-sm mt-2">
                            Jane Foster Description.
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="{{asset('https://terrigen-cdn-dev.marvel.com/content/prod/1x/343mkn_com_crd_01.jpg')}}" alt="strange" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Moon Knight</a>
                        {{--                        <div class="flex items-center text-gray-400 text-sm mt-1">--}}
                        {{--                            <span>--}}
                        {{--                                <img class="fill-current text-orange-500 w-4" src="{{'https://img.icons8.com/emoji/48/000000/star-emoji.png'}}" alt="">--}}
                        {{--                            </span>--}}
                        {{--                            <span class="ml-1" >85%</span>--}}
                        {{--                            <span class="mx-2">|</span>--}}
                        {{--                            <span>Feb 20, 2020</span>--}}
                        {{--                        </div>--}}

                        <div class="text-gray-400 text-sm mt-2">
                            Moon Knight Description.
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="{{asset('https://terrigen-cdn-dev.marvel.com/content/prod/1x/038mmk_com_crd_01.jpg')}}" alt="strange" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Ms Marvel</a>
                        {{--                        <div class="flex items-center text-gray-400 text-sm mt-1">--}}
                        {{--                            <span>--}}
                        {{--                                <img class="fill-current text-orange-500 w-4" src="{{'https://img.icons8.com/emoji/48/000000/star-emoji.png'}}" alt="">--}}
                        {{--                            </span>--}}
                        {{--                            <span class="ml-1" >85%</span>--}}
                        {{--                            <span class="mx-2">|</span>--}}
                        {{--                            <span>Feb 20, 2020</span>--}}
                        {{--                        </div>--}}

                        <div class="text-gray-400 text-sm mt-2">
                            Ms Marvel Description.
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="{{asset('https://terrigen-cdn-dev.marvel.com/content/prod/1x/3dman442.jpg')}}" alt="strange" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">3-D Man</a>
                        {{--                        <div class="flex items-center text-gray-400 text-sm mt-1">--}}
                        {{--                            <span>--}}
                        {{--                                <img class="fill-current text-orange-500 w-4" src="{{'https://img.icons8.com/emoji/48/000000/star-emoji.png'}}" alt="">--}}
                        {{--                            </span>--}}
                        {{--                            <span class="ml-1" >85%</span>--}}
                        {{--                            <span class="mx-2">|</span>--}}
                        {{--                            <span>Feb 20, 2020</span>--}}
                        {{--                        </div>--}}

                        <div class="text-gray-400 text-sm mt-2">
                            3-D Man Description.
                        </div>
                    </div>
                </div>
           </div>
        </div>
    </div>

@endsection
