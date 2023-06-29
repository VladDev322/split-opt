<div class="col-sm-6 col-md-4">
  <div class="thumbnail">
    <div class="labels">
      @if($product->isWiFi())
      <span class="badge badge-success">Поддерка WiFI</span>
      @endif

      @if($product->isSilent())
      <span class="badge badge-warning">Тихий</span>
      @endif

      @if($product->isInvertor())
      <span class="badge badge-danger">Инвертор</span>
      @endif
    </div>
    <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }} image">
    <div class="caption">
      <h3>{{ $product->name }}</h3>
      <p class="price">{{ $product->price }} руб.</p>
      <p>
      <form action="{{ route('basket-add', $product) }}" method="POST">
        @if($product->isAvailable())
        <button type="submit" class="btn btn-primary" role="button">В корзину</button>
        @else
        Не доступен
        @endif
        <a href="{{ route('product', [isset($category) ? $category->code : $product->category->code, $product->code]) }}"
          class="btn btn-default" role="button">Подробнее</a>
        @csrf
      </form>
      </p>
    </div>
  </div>
</div>