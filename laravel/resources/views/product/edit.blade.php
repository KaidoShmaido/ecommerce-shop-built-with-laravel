@extends('base')
@section('title','Update')

@section('content')

<div class="container my-2">
    <div class="d-flex justify-content-between align-items-center">
         <h1>Update Product</h1>
    </div>
<form  class="container" action="{{route('products.update',$product)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group my-3">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ old('name',$product->name) }}">
    </div>
    <div class="form-group my-3">
        <label for="description">Description</label>
        <textarea type="textarea" name="description" id="description"  value="{{ old('description',$product->description) }}" class="form-control"></textarea>
    </div>

    <div class="form-group my-3">
        <label for="quantity">Quantity</label>
        <input type="number" name="quantity" id="quantity" value="{{ old('quantity',$product->quantity) }}" class="form-control">
    </div>

    <div class="form-group my-3">
        <label for="image">Image</label>
        <input type="file" name="image" id="image" class="form-control" value="image">
        @if ($product)
           <img src="/storage/{{ $product->image }}"  width="70px" height="75px" alt="">
        @endif
    </div>

    <div class="form-group my-3">
        <label for="price">Price</label>
        <input type="number" name="price" id="price" value="{{ old('price',$product->price) }}" class="form-control">
    </div>
    <div class="form-group my-3">
        <input type="submit" class="btn btn-primary w-100" value="edit">
    </div>

</form>
