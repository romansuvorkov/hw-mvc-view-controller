<p><a href="{{ route('products.index') }}">Назад</a></p>
<p>Добавить товар</p>

<form action="{{ route('products.store') }}" method="POST" style="display: flex; flex-direction: column">
    @csrf
    <label for="type_id">
        Тип ID
        <input type="text" name="type_id" id="type_id">
        @error('type_id') <div style="color: #ff0000"> {{ $message }} </div> @enderror
    </label>
    <label for="filling">
        Начинка
        <input type="text" name="filling" id="filling">
        @error('filling') <div style="color: #ff0000"> {{ $message }} </div> @enderror
    </label>
    <label for="price">
        Цена
        <input type="text" name="price" id="price">
        @error('price') <div style="color: #ff0000"> {{ $message }} </div> @enderror
    </label>
    <button type="submit">Создать</button>
</form>
