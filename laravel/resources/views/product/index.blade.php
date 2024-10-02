@extends('base')
@section('title', 'Products')

@section('content')

<div class="container">
    <h1>Product List</h1>
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
            <td>{{$product->image}}</td>
            <td>{{$product->price}}MAD</td>
            <td>
                <a href="" class="btn btn-primary">add</a>
                <a href="" class="btn btn-danger">delete</a>

            </td>
          </tr>

        @empty
            <tr>
                <td colspan="7" align="center"><h6>No products.</h6></td>
            </tr>
          @endforelse
        </tbody>
      </table>

</div>
