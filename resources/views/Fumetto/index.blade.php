@extends('layaout.app')
@section('title', 'Homepage')
@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
    </tr>
  </thead>
  <tbody>
      @foreach($fumetti as $fumetto)
    <tr>
      <th scope="row">{{$fumetto['id']}}</th>
      <td>{{$fumetto['title']}}</td>
      <td>{{$fumetto['price']}}</td>
      <td><a href="{{route('fumetti.show', $fumetto->id)}}" class="btn btn-primary">dettaglio</a></td>
      <td><a href="{{route('fumetti.edit', $fumetto->id)}}" class="btn btn-secondary">edit</a></td>
      <td><form action="{{ route ('fumetti.destroy', $fumetto->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete" class="btn btn-danger">
                        </form>  </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection