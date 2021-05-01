@extends('layout')

@section('content')
    <table class="news">
        <tr>
            <th style="width: 17% ">Название</th>
            <th style="width: 17%">Бренд</th>
            <th style="width: 17%">Цена</th>
            <th style="width: 17%">Количество</th>
            <th style="width: 17%">Сумма</th>
            
        </tr>
        @php
            $sum = 0
        @endphp
   @foreach($cart as $car)
        <tr>
            <td style="height: 20px; overflow: hidden">{{$car->product->name}}</td>
            <td style="height: 20px; overflow: hidden">{{$car->product->brand->name}}</td>
            <td style="height: 20px; overflow: hidden">{{$car->product->price}}</td>
            <td style="height: 20px; overflow: hidden">{{$car->product_count}}</td>
            <td style="height: 20px; overflow: hidden">{{$car->product_count * $car->product->price}}</td>
            @php $sum += $car->product_count * $car->product->price @endphp
        </tr>
    @endforeach
    </table>
    <td class="buy"><br>
    Общая сумма {{$sum}} рублей
                <form method="get" action="{{route('buy.now')}}">
                    {{ csrf_field() }}
                    <p><input type="submit" value="КУПИТЬ СЕЙЧАС"></p>
                </form>
            </td>
            <td class="buy"><br>
                <form method="get" action="{{route('cart.delete')}}">
                    {{ csrf_field() }}
                    <p><input type="submit" value="ОЧИСТИТЬ КОРЗИНУ"></p>
                </form>
            </td>
    <div>
        
    </div>
@endsection


