@extends('layout')

@section('content')

                <form method="post" action="{{route('buy.payment')}}">
                    {{ csrf_field() }}
                    
                    <input type="textarea" name="name" placeholder="Имя">
                    <input type="textarea" name="adr" placeholder="Адрес">
                    <select size="3" name="shipping">
                        <option value="0">Бесплатная</option>
                        <option value="1">Экспресс 10 EUR</option>
                </select>
                    <p><input type="submit" value="Купить"></p>
                </form>

@endsection



