@extends('base')
@section('title', 'Products')

@section('content')


<div class="container my-2">
   <div class="d-flex justify-content-between align-items-center">
        <h1>Product List</h1>
        <a class="btn btn-primary" href="{{route('products.create')}}"> add a product</a>
   </div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Quantity</th>
            <th scope="col">Image</th>
            <th scope="col">Price</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
        @forelse ($products as $product)


          <tr>
            <th scope="row">{{$product->id}}</th>
            <td>{{$product->name}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->quantity}}</td>
            <td><img src="storage/{{$product->image}}" width="60px" height="70px" alt=""></td>
            <td>{{$product->price}}MAD</td>
            <td>
                <div class="btn-group">
                    <a class="btn btn-primary" href="{{ route('products.edit',$product) }}">Edit</a>
                    <form method="post" action="{{route('products.destroy',$product)}}" >
                        @csrf
                        @method('DELETE')
                        <input class="btn btn-danger" type="submit" value="Delete">
                    </form>
                </div>
            </td>
          </tr>

         @empty
            <tr>
                <td colspan="7" align="center"><h6>No products.</h6></td>
              </tr>
    @endforelse
        </tbody>
      </table>
        {{$products->links()}}

        @if(session('success'))
            <div class="alert alert-success">{{session('success') }}</div>
       @endif

</div>
