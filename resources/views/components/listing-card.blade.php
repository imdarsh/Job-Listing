@props(['listing'])
<a href="/listings/{{ $listing->id }}" class="m-2 p-6 max-w-l bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
    <div class="flex inline">
    <div>
        <img src="{{ asset('assets/tudip-logo.png') }}" class="w-48 mr-6 md-block" alt="" srcset="" />    
    </div>
    <div>
    
        <h6 class="mb-1 text-xl tracking-tight text-gray-900 dark:text-white">{{ $listing->title }}</h6>
        <h6 class="mb-1 text-l font-bold tracking-tight text-gray-900 dark:text-white">{{ $listing->company }}</h6>   
        <div class="flex inline-block">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
            </svg>
            <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">{{ $listing->location }}</span>
        </div>
    </div>
</div>
</a>