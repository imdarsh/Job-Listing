@extends('layout')

@section('content')
<div class="p-4 m-4 bg-white rounded-lg border shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700">
    <h2 class="text-xl font-semibold text-center mt-5 mb-5">{{ $listing->title }}</h2>
    <div class="mb-5">
    <h5 class="text-md font-semibold">Company Name: </h5>
    <p>{{ $listing->company }}</p>
    </div>
    <div class="mb-5">
    <h5 class="text-md font-semibold">Location: </h5>
    <p>{{ $listing->location }}</p>        
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
@endsection