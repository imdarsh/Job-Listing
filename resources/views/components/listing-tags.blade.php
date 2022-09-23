@props(['tagsCsv'])

@php
    $tags = explode(',', $tagsCsv);
@endphp

@foreach($tags as $tag)
    <a href="/?tag={{$tag}}" class="inline-block bg-black rounded-full px-2 py-1 text-xs font-semibold text-white mr-2 mb-2">{{ $tag }}</a>
@endforeach