@extends('master')

@section('title', 'Community')

@section('style')
    <style>
    </style>
@endsection

@section('body')
{{-- Header --}}
<nav class="justify-evenly fixed bg-gradient-to-b from-cLightGrey from-70% to-transparent w-full">
    <div class="max-w-screen-xl px-4 py-3 mx-auto">
        <div class="flex items-center">
            <ul class="flex flex-row font-normal space-x-2 text-2xl">
                <li>
                    <a href="/home" class="text-cDarkGrey dark:text-white hover:text-cRed">Home</a>
                </li>
                <li class="text-cDarkGrey">
                    |
                </li>
                <li>
                    <a href="/community" class="text-cRed font-bold dark:text-white hover:text-cRed" aria-current="page">Community</a>
                </li>
            </ul>
            <a href="/profile" class="fixed bg-cRed rounded-b-3xl flex justify-center items-center aspect-square h-[50px] shadow-lg right-2 -top-0.5 z-10 group duration-300 ease-out hover:bg-opacity-50">
                <div class="bg-white rounded-full p-4" style="background-image: url('/assets/male.png')"></div>
            </a>
        </div>
        <div class="font-light text-sm text-cDarkGrey whitespace-break-spaces">See what others has done!</div>
    </div>
</nav>
{{-- Body --}}
<div class="w-full h-fit px-2 pb-2">
    <div class="max-w-screen-xl px-4 py-3 h-20">
    </div>
    @foreach ($posts as $post)
        <div class="bg-white shadow-lg rounded-3xl mb-2">
            <div class="p-3 flex flex-col text-sm gap-1">
                <div class="flex justify-between">
                    <div class="flex gap-3">
                        <div class="w-[40px] aspect-square rounded-full overflow-hidden">
                            <div class="w-full h-full bg-cover" style="background-image: url('/assets/profile1.png')"></div>
                        </div>
                        <div>
                            {{-- {{ var_dump($post) }} --}}
                            <p class="font-bold">{{ $post->username }}</p>
                            <p class="italic text-cDarkGrey">{{ date_create($post->updated_at)->format('l, d M Y') }}</p>
                        </div>
                    </div>
                    <div class="w-fit">
                        @if($post->type == 1)
                            <p class="bg-cBlue text-white px-2 rounded-full font-bold">WORKOUT</p>
                        @else
                            <p class="bg-cGreen text-white px-2 rounded-full font-bold">DIET</p>
                        @endif
                    </div>
                </div>
                <div>
                    <p>has completed "{{ $post->name }}"</p>
                </div>
            </div>
            <div class="aspect-[4/3] bg-cover bg-center rounded-3xl" style="background-image: url('/assets/post1.png')"></div>
        </div>    
    @endforeach
    {{-- <div class="bg-white shadow-lg rounded-3xl mb-2">
        <div class="p-3 flex flex-col text-sm gap-1">
            <div class="flex justify-between">
                <div class="flex gap-3">
                    <div class="w-[40px] aspect-square rounded-full overflow-hidden">
                        <div class="w-full h-full bg-cover" style="background-image: url('/assets/profile2.png')"></div>
                    </div>
                    <div>
                        <p class="font-bold">Nadya Clarine Purba</p>
                        <p class="italic text-cDarkGrey">22 March 2023</p>
                    </div>
                </div>
                <div class="w-fit">
                    <p class="bg-cGreen text-white px-2 rounded-full font-bold">DIET</p>
                </div>
            </div>
            <div>
                <p>has completed "7 Days Vegetable Diet"</p>
            </div>
        </div>
        <div class="aspect-[4/3] bg-cover bg-center rounded-3xl" style="background-image: url('/assets/post2.png')"></div>
    </div>
    <div class="bg-white shadow-lg rounded-3xl mb-2">
        <div class="p-3 flex flex-col text-sm gap-1">
            <div class="flex justify-between">
                <div class="flex gap-3">
                    <div class="w-[40px] aspect-square rounded-full overflow-hidden">
                        <div class="w-full h-full bg-cover" style="background-image: url('/assets/profile2.png')"></div>
                    </div>
                    <div>
                        <p class="font-bold">Winita Teukeku Priyanto</p>
                        <p class="italic text-cDarkGrey">22 February 2023</p>
                    </div>
                </div>
                <div class="w-fit">
                    <p class="bg-cGreen text-white px-2 rounded-full font-bold">DIET</p>
                </div>
            </div>
            <div>
                <p>has completed "30 Days Diet for Healthy Eyes"</p>
            </div>
        </div>
        <div class="aspect-[4/3] bg-cover bg-center rounded-3xl" style="background-image: url('/assets/eyediet.jpeg')"></div>
    </div>
    <div class="bg-white shadow-lg rounded-3xl mb-2">
        <div class="p-3 flex flex-col text-sm gap-1">
            <div class="flex justify-between">
                <div class="flex gap-3">
                    <div class="w-[40px] aspect-square rounded-full overflow-hidden">
                        <div class="w-full h-full bg-cover" style="background-image: url('/assets/profile1.png')"></div>
                    </div>
                    <div>
                        <p class="font-bold">Jefferson Johan</p>
                        <p class="italic text-cDarkGrey">22 January 2023</p>
                    </div>
                </div>
                <div class="w-fit">
                    <p class="bg-cBlue text-white px-2 rounded-full font-bold">MEDITATION</p>
                </div>
            </div>
            <div>
                <p>has completed "1 Day of Meditation"</p>
            </div>
        </div>
        <div class="aspect-[4/3] bg-cover bg-center rounded-3xl" style="background-image: url('/assets/meditasiCategory.png')"></div>
    </div>
    <div class="bg-white shadow-lg rounded-3xl mb-2">
        <div class="p-3 flex flex-col text-sm gap-1">
            <div class="flex justify-between">
                <div class="flex gap-3">
                    <div class="w-[40px] aspect-square rounded-full overflow-hidden">
                        <div class="w-full h-full bg-cover" style="background-image: url('/assets/profile2.png')"></div>
                    </div>
                    <div>
                        <p class="font-bold">Chrystalia Glenys</p>
                        <p class="italic text-cDarkGrey">20 January 2023</p>
                    </div>
                </div>
                <div class="w-fit">
                    <p class="bg-cBlue text-white px-2 rounded-full font-bold">MEDITATION</p>
                </div>
            </div>
            <div>
                <p>has completed "1 Day of Meditation"</p>
            </div>
        </div>
        <div class="aspect-[4/3] bg-cover bg-center rounded-3xl" style="background-image: url('/assets/meditasiCategory.png')"></div>
    </div> --}}
    <div class="m-5 p-2 bg-transparent"></div>
</div>
@include('component.navbar', ['active' => 'home'])
@endsection
