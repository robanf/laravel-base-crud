@extends('layaout.app')
@section('title', 'Homepage')
@section('content')

<div class="card" style="width: 18rem;">
  <img src="{{$fumetti->thumb}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$fumetti->title}}</h5>
    <p class="card-text">{{$fumetti->description}}</p>
    <a href="#" class="btn btn-primary">${{$fumetti->price}}</a>
  </div>
</div>

@endsection