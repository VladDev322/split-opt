@extends('auth.layouts.master')

@section('title', 'Продукт ' . $product->name)

@section('content')
<div class="col-md-12">
  <h1>{{ $product->name }}</h1>
  <table class="table">
    <tbody>
      <tr>
        <th>
          Поле
        </th>
        <th>
          Значение
        </th>
      </tr>
      <tr>
        <td>ID</td>
        <td>{{ $product->id}}</td>
      </tr>
      <tr>
        <td>Код</td>
        <td>{{ $product->code }}</td>
      </tr>
      <tr>
        <td>Название</td>
        <td>{{ $product->name }}</td>
      </tr>
      <tr>
        <td>Описание</td>
        <td>{{ $product->description }}</td>
      </tr>
      <tr>
        <td>Картинка</td>
        <td><img src="{{ Storage::url($product->image) }}" height="240px"></td>
      </tr>
      <tr>
        <td>Категория</td>
        <td>{{ $product->category->name }}</td>
      </tr>
      <tr>
        <td>Лейблы</td>
        <td>
          @if($product->isWiFi())
          <span class="badge badge-success">Поддерка WiFI</span>
          @endif

          @if($product->isSilent())
          <span class="badge badge-warning">Тихий</span>
          @endif

          @if($product->isInvertor())
          <span class="badge badge-danger">Инвертор</span>
          @endif
        </td>
      </tr>
    </tbody>
  </table>
</div>
@endsection