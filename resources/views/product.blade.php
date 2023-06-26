@extends('layouts.master')

@section('title', 'Товар')

@section('content')
<div class="row text-center">
  <div class="col-lg-8 col-lg-offset-2">
    <h1>{{ $productData->name }}</h1>
    <p class="price">Цена: <b>{{ $productData->price }}</b></p>
    <img src="{{ Storage::url($productData->image) }}" class="img-responsive img-rounded" alt="Изображение товара">
    <p class="text-md text-lg">{{ $productData->description }}</p>
    <form action="{{ route('basket-add', $productData) }}" method="POST">
      <button type="submit" class="btn btn-primary" role="button">В корзину</button>
      @csrf
    </form>
  </div>
</div>
@endsection