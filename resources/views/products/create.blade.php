@extends('Pages.app')

@section('content')
  <h1>Enter a product</h1>

  <hr>
  {!! Form::open(['url'=>'products']) !!}
      @include('products.form', ['submitButtonText' => 'Add Product'])
  {!! Form::close() !!}

  @include('error.list')
  @endsection