@props(['listing'])

<a href="/listings/{{ $listing->id }}" class="block m-2 p-6 max-w-l bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
<div class="flex">
    <img src="{{ asset('assets/tudip-logo.png') }}" class="w-48 mr-6 md-block" alt="" srcset="">    
    <div>
        <h6 class="mb-1 text-xl tracking-tight text-gray-900 dark:text-white">{{ $listing->title }}</h6>
        <h6 class="mb-2 text-l font-bold tracking-tight text-gray-900 dark:text-white">{{ $listing->company }}</h6>
        <div class="mb-2">
            <x-listing-tags :tagsCsv="$listing->tags" />
        </div>
    <div class="flex inline-block">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
    </svg>
    <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">{{ $listing->location }}</span>
    </div>
    <!-- <p class="font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p> -->

    </div>
</div>
</a>
