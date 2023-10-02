@props(['tagsCsv'])
@php
    $tags = explode(',', $tagsCsv);
@endphp


<ul class="list-group">
   @foreach ($tags as $tag)
   <span><a href="/?tag={{$tag}}">{{$tag}}</a></span>
   @endforeach 
   
  </ul>