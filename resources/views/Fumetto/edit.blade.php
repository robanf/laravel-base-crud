@extends('layaout.app')
@section('title', 'Homepage')
@section('content')


<div class="container">
    <div class="row">
        <div class="col">
            <form action="{{route('fumetti.update', $variabile->id)}}" method="post">
            @csrf
            @method('PUT')
                <div class="mb-3">
                  <label for="title" class="form-label">titolo</label>
                  <input type="text" class="form-control" name="title" value="{{$variabile->title}}" id="title">
                </div>
                <div class="mb-3">
                  <label for="img" class="form-label">immagine</label>
                  <input type="text" class="form-control" name="thumb" value="{{$variabile->thumb}}" id="img">
                </div>
                <div class="mb-3">
                  <label for="price" class="form-label">price</label>
                  <input type="int" class="form-control" name="price" value="{{$variabile->price}}" id="price">
                </div>
                <div class="mb-3">
                  <label for="series" class="form-label">series</label>
                  <input type="text" class="form-control" name="series" value="{{$variabile->series}}" id="series">
                </div>
                <div class="mb-3">
                  <label for="type" class="form-label">type</label>
                  <input type="text" class="form-control" name="type" value="{{$variabile->type}}" id="type">
                </div>
                <div class="mb-3">
                  <label for="date" class="form-label">sale date</label>
                  <input type="text" class="form-control" name="sale_date" value="{{$variabile->sale_date}}" id="date">
                </div>
                <div class="mb-3">
                    <label for="descrizione" class="form-label">descrizione</label>
                    <textarea class="form-control"  name="description"  id="descrizione" style="height: 100px">{{$variabile->description}}</textarea>
                </div>
                
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection