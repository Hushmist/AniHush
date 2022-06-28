@extends('layouts.main_page_layout')

@section('title', 'Games Hub')

@section('header', '')
@section('content')
    <h1 class="blog_header">Авторизация</h1>
    <div class="login">
        <form action="{{route('login_process')}}" method="post">
            @csrf
            <p class="text-danger"> @if(session()->get('error')) {{session()->get('error')}}  @endif </p>
            <label>Email</label>
            <input type="text" name="email" id="email" placeholder="Введите ваш логин">
            @error('email')
                <p class="text-danger">{{$message}}</p>
            @enderror
            <label>Пароль</label>
            <input type="password" name="password" id="password" placeholder="Введите ваш пароль">
            @error('login')
                <p class="text-danger">{{$message}}</p>
            @enderror
            <button type="submit">Отправить</button>
            <a href="{{route('register')}}">Регистрация</a>
        </form>
    </div>
@endsection