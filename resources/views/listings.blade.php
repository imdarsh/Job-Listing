@extends('layout')

@section('content')
<header
        class="w-full h-96 bg-[url('assets/banner.png')] bg-cover bg-center flex justify-center items-center">
        <div class="flex flex-col justify-center items-center">
            <h1 class=" text-center text-5xl text-white font-bold drop-shadow-lg">WELCOME TO
            <span class="text-amber-500">Workaholic</span>
            </h1>
            <p class="mt-5 text-center text-lg text-white opacity-70">Sign up and find out what you are good at</p>
            <a class="mt-8 px-12 py-3 bg-red-600 hover:bg-red-500 text-xl text-white font-semibold drop-shadow-lg rounded-full"
                href="#">Get Started</a>
        </div>
    </header>
@unless(count($listings) === 0)
<div class="m-8 grid grid-cols-2">
@foreach($listings as $listing)
<a href="/listings/{{ $listing->id }}" class="block m-2 p-6 max-w-l bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
<div class="flex">
    <img src="{{ asset('assets/tudip-logo.png') }}" class="w-48 mr-6 md-block" alt="" srcset="">    
    <div>
        <h6 class="mb-1 text-xl tracking-tight text-gray-900 dark:text-white">{{ $listing->title }}</h6>
        <h6 class="mb-2 text-l font-bold tracking-tight text-gray-900 dark:text-white">{{ $listing->company }}</h6>
        <div>
        <span class="inline-block bg-black rounded-full px-2 py-1 text-xs font-semibold text-white mr-2 mb-2">Backend</span>
        <span class="inline-block bg-black rounded-full px-2 py-1 text-xs font-semibold text-white mr-2 mb-2">API</span>
        <span class="inline-block bg-black rounded-full px-2 py-1 text-xs font-semibold text-white mr-2 mb-2">Laravel</span>
    </div>
        <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">{{ $listing->location }}</span>
    <!-- <p class="font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p> -->

    </div>
</div>
</a>
@endforeach
</div>
@else
<p>No Listing found</p>
@endunless

@endsection