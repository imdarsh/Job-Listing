@extends('layout')

@section('content')
@include('partials._hero')
@include('partials._search')
@unless(count($listings) === 0)
<div class="m-8 grid grid-cols-2">
@foreach($listings as $listing)

    <x-listing-card :listing="$listing" />

@endforeach
</div>
@else
<p>No Listing found</p>
@endunless

@endsection