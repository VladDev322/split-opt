@extends('layouts.master')

@section('title', 'Товар')

@section('content')
<div class="row text-center">
  <div class="col-lg-8 col-lg-offset-2">
    <h1>{{ $product->name }}</h1>
    <p class="price">Цена: <b>{{ $product->price }}</b></p>
    <img src="{{ Storage::url($product->image) }}" class="img-responsive img-rounded" alt="Изображение товара">
    <p class="text-md text-lg">{{ $product->description }}</p>
    @if($product->isAvailable())
    <form action="{{ route('basket-add', $product) }}" method="POST">
      <button type="submit" class="btn btn-primary" role="button">В корзину</button>
      @csrf
    </form>
    @else
        Не доступен
    @endif
  </div>
</div>
@endsection