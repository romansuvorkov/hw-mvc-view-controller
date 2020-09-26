<!DOCTYPE html>
<html lang="ru">
    <head>
        <title>@yield('title')</title>
    </head>
    <body>
    <p>Доступные товары</p>
        @forelse($products as $product)
            <p><a href=" {{ route('products.show', $product) }}">{{$product->productType->name}} с начинкой {{$product->filling}}</a></p>
        @empty
        @endforelse
    </br></br>
    <p><a href="{{ route('products.index') }}">Войти как администратор</a></p>
    </body>
</html>
