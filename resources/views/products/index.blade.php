<!DOCTYPE html>
<html lang="ru">
    <head>
        <title>@yield('title')</title>
    </head>
    <body>
    <p>Список товаров</p>
    <p><a href="{{route('products.create')}}">Добавить</a></p>
        @section('sidebar')
            <p>Информация из родителя</p>
        @show
        @forelse($products as $product)
            <p><a href=" {{ route('products.show', $product) }}">{{$product->productType->name}} с начинкой {{$product->filling}}</a></p>
        @empty
        @endforelse
        @yield('content')
    </body>
</html>
