@extends('base')
@section('title', 'Create Product')


@section('content')
  <h1>@yield('title')</h1>
  @include('product.form')
