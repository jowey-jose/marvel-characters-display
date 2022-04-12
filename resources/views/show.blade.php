{{-- Show the view of a Single Character when Clicked! --}}

@extends('layouts.main')

@section('content')
    <div class="character-info border-b border-gray-800 ">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <div class="flex-none">
                <img src="{{asset('https://terrigen-cdn-dev.marvel.com/content/prod/1x/3dman442.jpg')}}" alt="strange" class="w-96 md:w-96">
            </div>
            <div class="ml-24">
                <h2 class="text-4xl font-semibold">3-D Man</h2>
                <div class="flex flex-wrap items-center text-gray-400 text-sm">
                    <span>
                        <img class="fill-current text-orange-500 w-4" src="{{'https://img.icons8.com/emoji/48/000000/star-emoji.png'}}" alt="">
                    </span>
                    <span class="ml-1" >85%</span>
                    <span class="mx-2">|</span>
                    <span>Feb 20, 2020</span>
                    <span class="mx-2">|</span>
                    <span>CHARLES CHANDLER & HAL CHANDLER</span>
                </div>

                <p class="text-gray-300 mt-8">
                    The 3-D Man was a 1950's hero who came about through the unique merger of two brothers,
                    Hal and Chuck Chandler. Chuck was a test pilot who was abducted by alien Skrulls during an important test flight.
                    Earth was seen as a strategic location in the ongoing conflict between the alien Kree and Skrull Empires,
                    so the Skrulls were seeking information on Earth's space program and had captured Chuck to interrogate him.
                    Chuck resisted and escaped, accidentally causing the explosion of the Skrull spacecraft in the process.
                    While his brother Hal watched, the radiation from the explosion seemingly disintegrated Chuck, who disappeared in a burst of light.
                    Hal later discovered, however, that the light burst had imprinted an image of Chuck on each lens of Hal's eyeglasses.
                    Through concentration, Hal could merge the images and cause Chuck to reappear as a three-dimensional man.
                    Chuck become the costumed adventurer known as the 3-D Man and single-handedly subverted the Skrulls' early attempts to undermine Earthly civilization.
                </p>

                <div class="mt-12">
                    <h4 class="text-white font-semibold">Height & Weight</h4>
                    <div class="flex mt-4">
                        <div>
                            <div>Height</div>
                            <div class="text-sm text-gray-400">6'2"</div>
                        </div>
                        <div class="ml-8">
                            <div>Weight</div>
                            <div class="text-sm text-gray-400">200 Ibs</div>
                        </div>
                    </div>
                </div>

                <div class="mt-12">
                    <button class="flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-600 transition ease-in-out duration-150">
                        <img class="w-6 fill-current" src="https://img.icons8.com/material-outlined/24/000000/play-button-circled--v1.png"/>
                        <span class="ml-2">Read More</span>
                    </button>
                </div>
            </div>
        </div>
    </div>{{-- End Character info --}}

    <div class="series-casted border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">

            <div class="class text-4xl font-semibold">Series Casted</div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                <div class="mt-8">
                    <a href="#">
                        <img src="{{asset('https://terrigen-cdn-dev.marvel.com/content/prod/1x/009drs_ons_crd_02.jpg')}}" alt="strange" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Dr Strange</a>
                        <div class="text-gray-400 text-sm mt-2">
                            Date : (2001 - 2005)
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="{{asset('https://terrigen-cdn-dev.marvel.com/content/prod/1x/012scw_ons_crd_02.jpg')}}" alt="strange" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Wanda Maximoff</a>
                        <div class="text-gray-400 text-sm mt-2">
                            Date : (2001 - 2005)
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="{{asset('https://terrigen-cdn-dev.marvel.com/content/prod/1x/079wng_ons_crd_03.jpg')}}" alt="strange" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Wong</a>

                        <div class="text-gray-400 text-sm mt-2">
                            Date : (2001 - 2005)
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="{{asset('https://terrigen-cdn-dev.marvel.com/content/prod/1x/005smp_ons_crd_02.jpg')}}" alt="strange" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Spider Man</a>

                        <div class="text-gray-400 text-sm mt-2">
                            Date : (2001 - 2005)
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="{{asset('https://terrigen-cdn-dev.marvel.com/content/prod/1x/spidey03_ons_crd_01.jpg')}}" alt="strange" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">The Amazing Spider man</a>


                        <div class="text-gray-400 text-sm mt-2">
                            Date : (2001 - 2005)
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
