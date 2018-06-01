@extends('Pages.app')

@section('content')
  <h1>Edit: {!! $products->name !!}</h1>

  {!! Form::model($products,['method' => 'PATCH', 'action' => ['ProductController@update', $products->id]]) !!}
      @include('products.form', ['submitButtonText' => 'Update Product'])
  {!! Form::close() !!}

  @include('error.list')
  @endsection