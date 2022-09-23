@props(['listing'])
<!-- Details Card -->
<div class="p-4 m-4 bg-white rounded-lg border shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700">
    <div class="flex items-center justify-center"> 
        <img src="{{ asset('assets/tudip-logo.png') }}" class="w-48" />
    </div>
    <h2 class="text-xl font-semibold text-center mt-5 mb-5">{{ $listing->title }}</h2>
    <div class="mb-5">
    <h5 class="text-md font-semibold">Company Name: </h5>
    <p>{{ $listing->company }}</p>
    </div>
    <div class="mb-5">
    <h5 class="text-md font-semibold">Location: </h5>
    <p><div class="flex inline-block"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
    </svg>{{ $listing->location }}</div></p>        
    </div>
    <div class="mb-5">
    <h5 class="text-md font-semibold">Tags: </h5>
    <x-listing-tags :tagsCsv="$listing->tags" />
    </div>
    <div class="mb-5">
    <h5 class="text-md font-semibold">Job Description: </h5>
    <p class="">{{ $listing->description }}</p>
    </div>
    <div class="flex mb-5 items-center justify-center">
    <a href="#" class="inline bg-red-600 rounded text-white px-4 py-2 mr-2">Contact Company</a>
    <a href="https://mail.google.com/mail/u/0/#inbox?compose=new" class="inline bg-green-600 rounded text-white px-4 py-2 mr-2">Send Email</a>
    <a href="{{ $listing->website }}" class="inline bg-blue-500 rounded text-white px-4 py-2 mr-2">Visit Website</a>
    </div>    
</div>
