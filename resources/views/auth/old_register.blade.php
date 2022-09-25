@extends('layouts.main_page_layout')

@section('title', 'Games Hub')

@section('header', '')
@section('content')
<div class="login">
    <form action="{{route('register_process')}}" method="post" >
        @csrf
        <p class="text-danger"> @if(session()->get('error')) {{session()->get('error')}}  @endif </p>
        <label>Логин</label>
        <input type="text" name="name" placeholder="Введите Ваш логин" >
            @error('name')
                <p class="text-danger">{{$message}}</p>
            @enderror
        <label>Почта</label>
        <input type="text" name="email" placeholder="Введите Вашу эл. почту" >
            @error('email')
                <p class="text-danger">{{$message}}</p>
            @enderror
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите Ваш пароль">
            @error('password')
                <p class="text-danger">{{$message}}</p>
            @enderror
        <label>Подтвердите пароль</label>
        <input type="password" name="password_confirmation" placeholder="Введите Ваш пароль заново">
            @error('password_confirmation')
                <p class="text-danger">{{$message}}</p>
            @enderror
        <button type="submit">Отправить</button>
        <a href="{{route('login')}}">Логин</a>
    </form>
</div>
@endsection