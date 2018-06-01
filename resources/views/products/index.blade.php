@extends('Pages.app')

@section('content')
  <h1>Product</h1>
  @foreach ($products as $product)

      <h2>
      <!-- <a href="{//{action('ProductController@//show', [$products->id)}}">{//{$product->name}}</a>
         Passing the link of the /products/id through action. since the show() method has
         parameter ($id) so passing it as array parameter  OR -->
        <a href="/products/{{$product->id}}">{{$product->name}}</a>
      </h2>

      <div>{{$product->price}}</div>

  @endforeach
  @endsection