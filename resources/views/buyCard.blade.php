@extends('layout')

@section('content')

                    <form method="post" action="{{route('order')}}">
                    {{ csrf_field() }}
                    
                    <input type="textarea" name="num" placeholder="Номер карты(16 цифр)">
                    <input type="textarea" name="name" placeholder="Владелец карты">
                    <input type="textarea" name="data" placeholder="срок действия карты">
                    <input type="textarea" name="code" placeholder="CVV">
                    
                    <button type="submit" formmethod="post" formaction="{{route('order')}}">Submit</button>
                </form>

@endsection
