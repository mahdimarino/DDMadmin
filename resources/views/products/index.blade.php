@extends('Layout')
@section('content')
    
<div class="container-fluid">
    <div class="row d-flex justify-content-center">

@if(count($products)  == 0)
<h2>no listing found</h2>
@endif
<table class=" table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
@foreach($products as $product)


<x-listingcard :product="$product" />

@endforeach
</tbody>
</table>
</div></div>
@endsection





