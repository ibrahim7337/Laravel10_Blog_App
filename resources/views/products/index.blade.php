{{-- @extends('products.layout')

@section('content')
<div class="row">
    <div class="col align-self-start">
        <a class="btn btn-primary" href="{{route('products.create')}}">Create</a>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success" role="alert">
    {{$message}}
</div>
@endif
<br>

<div class="table-responsive">
    <table class="table table-scriped table-hover table-borderless table-primary align-middle">
      <thead>
        <tr>
          <th>ID</th>
          <th>Image</th>
          <th>Name</th>
          <th>Details</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody class="table-group-divider">
        @foreach ($products as $item)
        <tr class="table-primary">
            <td>{{$item->id}}</td>
            <td><img src="/images/{{$item->image}}"></td>
            <td>{{$item->name}}</td>
            <td>{{$item->details}}</td>
            <form action="{{route('products.destroy' , $item->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <a class="btn btn-primary" href="{{route('products.edit' , $item->id)}}">Edit</a>
            <a class="btn btn-info" href="{{route('products.show' , $item->id)}}">Show</a>
        </tr>
        @endforeach

      </tbody>
    </table>
    {!!$products->links()!!}
    </div>
@endsection --}}

@extends('products.layout')

@section('content')
<br>

@if ($message = Session::get('success'))
<div class="alert alert-success" role="alert">
    {{$message}}
  </div>
@endif
<br>
<div class="table-responsive">
<table class="table table-scriped table-hover table-borderless table-primary align-middle">
  <thead>
    <tr>
      <th>ID</th>
      <th>Image</th>
      <th>Name</th>
      <th>Details</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    @foreach ($products as $item)
    <tr class="table-primary">
        <td>{{$item->id}}</td>
        <td><img src="/images/{{$item->image}}"  width='300px'></td>
        <td>{{$item->name}}</td>
        <td>{{$item->details}}</td>
        <td>
            @auth
            <form action="{{route('products.destroy' , $item->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <a class="btn btn-primary" href="{{route('products.edit' , $item->id)}}">Edit</a>
            @endauth

            <a class="btn btn-info" href="{{route('products.show' , $item->id)}}">show</a>
        </td>
      </tr>
    @endforeach

  </tbody>
</table>
{!!$products->links()!!}
</div>

<table class="table">
    <thead class="table-dark">
      ...
    </thead>
    <tbody>
      ...
    </tbody>
  </table>
@endsection

