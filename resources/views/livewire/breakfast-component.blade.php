@extends('layouts.app')
@section('content')@endsection
<div class="box">
    <img src="/images/platelogo.jpg" class="plate-image" alt="TU MIAŁO BYĆ LOGO!">
    <div class="button">Dodaj nową potrawę</div>
    @foreach($meals as $meal)
        <div class="mealbox">
            <div class="meal">
                <div class="image">
                    <img src="/images/blacksquare.jpeg" width="100" alt="TU MIAŁO BYĆ LOGO!">
                </div>
                <div class="name"></div>
                <div class="rating"></div>
            </div>
            <div class="meal">
                <div class="image">
                    <img src="/images/blacksquare.jpeg" width="100" alt="TU MIAŁO BYĆ LOGO!">
                </div>
                <div class="name"></div>
                <div class="rating"></div>
            </div>
            <div class="meal">
                <div class="image">
                    <img src="/images/blacksquare.jpeg" width="100" alt="TU MIAŁO BYĆ LOGO!">
                </div>
                <div class="name"></div>
                <div class="rating"></div>
            </div>
        </div>
{{--        {{$meal->name}}--}}

    @endforeach
</div>


