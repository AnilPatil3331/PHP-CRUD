@extends('layout.app')
@section('main')
<br>
    <div class="container">
        <div class="text-right">
        <a href="products/create" class="btn btn-dark mt-2">New Product</a>
        </div>
        <h1>Products</h1>
        <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Sr No.</th>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($products as $product)
    <tr>
      <th scope="row">{{$loop->index+1}}</th>
      <td>
        <a href="/products/{{$product->id}}/show" class="text-dark">{{$product->name}}</a>
    </td>
      <td><img src="products/{{$product->image}}" class="rounded-circle" width="50" height="50"/></td>
      <td>
        <a href="products/{{$product->id}}/edit" class="btn btn-dark btn-small">Edit</a>
        
        <form method="POST" class="d-inline" action="products/{{$product->id}}/delete">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn btn-sm">Delete</button>
        </form>
    </td>
    </tr>
    @endforeach
</tbody>
</table>

        
    </div>
@endsection