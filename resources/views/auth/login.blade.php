@extends('layouts.auth')

@section('title', 'Games Hub')

@section('content')
   <section class="w-100 p-4 d-flex justify-content-center pb-4 mt-5">
         <form action="{{route('login_process')}}" method="post" style="width: 22rem;">
            @csrf
            <p class="text-danger"> @if(session()->get('error')) {{session()->get('error')}}  @endif </p>
           <!-- Email input -->
           <div class="form-outline mb-4">
             <input type="text" name="name" id="name" class="form-control">
             <label class="form-label" for="form2Example1" style="margin-left: 0px;">Логин</label>

            @error('name')
                <p class="text-danger">{{$message}}</p>
            @enderror
           <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 88.8px;"></div><div class="form-notch-trailing"></div></div></div>

           <!-- Password input -->
           <div class="form-outline mb-4">
             <input type="password" name="password" id="password" class="form-control">
             <label class="form-label" for="form2Example2" style="margin-left: 0px;">Пароль</label>

            @error('password')
                <p class="text-danger">{{$message}}</p>
            @enderror
           <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 64.8px;"></div><div class="form-notch-trailing"></div></div></div>

           <!-- Submit button -->
           <button class="btn btn-primary mb-4">Войти</button>

           <!-- Register buttons -->
           <div class="text-center">
             <p>Нет аккаунта? <a href="{{route('register')}}">Регистрация</a></p>
           </div>
         </form>
       </section>
@endsection