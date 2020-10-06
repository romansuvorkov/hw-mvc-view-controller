<!DOCTYPE html>
<html lang="ru">
    <head>
        <title>@yield('title')</title>
    </head>
    <body>
    <p><a href="{{route('products.create')}}">Добавить</a></p>
        @section('sidebar')
            <p>Список товаров</p>
        @show
        @forelse($products as $product)
            <p><a href=" {{ route('products.show', $product->id) }}">{{$product->productType->name}} с начинкой {{$product->filling}}</a></p>
        @empty
        @endforelse
        @yield('content')
    </body>
</html>
