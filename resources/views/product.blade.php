@extends('layouts.master')

@section('title', 'Товар')

@section('content')
<h1>{{ $productData -> name }}</h1>
<p>Цена: <b>{{ $productData -> price }}</b></p>
<img src="{{ Storage::url($productData->image) }}" height="300px">
<p class="description">{{ $productData -> description }}</p>
<form action="{{ route('basket-add', $productData) }}" method="POST">
  <button type="submit" class="btn btn-primary" role="button">В корзину</button>
  @csrf
</form>
@endsection