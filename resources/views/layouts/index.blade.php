<!DOCTYPE html>
<html lang="ru">
    <head>
        <title>@yield('title')</title>
    </head>
    <body>
    <p>Index 234234</p>
    <p><a href="{{route('products.create')}}">Назад</a></p>
        @section('sidebar')
            <p>Информация из родителя</p>
        @show
        @forelse($products as $product)
            <p>{{$product->type_id->id}}{{$product->filling}}</p>
        @empty
        @endforelse
        @yield('content')
    </body>
</html>
