<p><a href="{{ route('products.index') }}">Назад</a></p>
<div class="product">
    <p>Вид: {{$product->productType->name}}</p>
    <p>Начинка: {{$product->filling}}</p>
    <p>Цена: {{$product->price}}</p>
</div>
<form action="{{ route('products.destroy', $product) }}" method="POST" style="display: flex; flex-direction: column">
    @csrf
    @method('DELETE')
    <button type="submit">Удалить</button>
</form>
<p><a href="{{ route('products.edit', $product) }}">Изменить</a></p>
