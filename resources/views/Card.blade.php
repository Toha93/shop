@extends('layout')

@section('content')

                <form method="post" action="{{route('order')}}">
                    {{ csrf_field() }}
                    
                    <input type="textarea" name="num" placeholder="Номер карты">
                    <input type="textarea" name="name" placeholder="Имя">
                    <input type="textarea" name="code" placeholder="CVV">
                    <input type="textarea" name="date" placeholder="дата">
                    
                    <p><input type="submit" value="Купить"></p>
                </form>

@endsection



