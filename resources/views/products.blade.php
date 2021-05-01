@extends('layout')

@section('content')
<form method="GET" action="{{route('cart.get')}}">
                    {{ csrf_field() }}
                    <p><input type="submit" value="Корзина"></p>
                </form>

    <table class="news">
        <tr>
            <th style="width: 17% ">Название</th>
            <th style="width: 17%">Бренд</th>
            <th style="width: 17%">Цена</th>
            <th style="width: 17%">Купить</th>
        </tr>
   @foreach($product as $prod)
        <tr>
            <td style="height: 20px; overflow: hidden">{{$prod->name}}</td>
            <td style="height: 20px; overflow: hidden">{{$prod->brand->name}}</td>
            <td style="height: 20px; overflow: hidden">{{$prod->price}}</td>
            <td class="buy">
                <form method="post" action="{{route('cart.add')}}">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{$prod->id}}">
                    <input type="text" name="count" placeholder="Количество">
                    <p><input type="submit" value="Купить"></p>
                </form>
            </td>
        </tr>
    @endforeach
    </table>
    <div>
        
    </div>
@endsection


