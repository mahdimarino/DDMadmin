
@extends('home')
@section('content')
    




<x-card>

<div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title"> {{$listing->title}}</h5>
      <p class="card-text">{{$listing->description}}</p>
      
    </div>
</div>
</x-card>

@endsection