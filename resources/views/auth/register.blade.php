@extends('layouts.auth')

@section('title', 'Регистрация')

@section('content')
   <section class="w-100 p-4 d-flex justify-content-center pb-4 mt-5">
         <form action="{{route('register_process')}}" method="post" style="width: 22rem;">
            @csrf
            <p class="text-danger"> @if(session()->get('error')) {{session()->get('error')}}  @endif </p>

           <!-- Name input -->
           <div class="form-outline mb-4">
             <input type="text" name="name" id="name" class="form-control">
             <label class="form-label" for="form2Example1" style="margin-left: 0px;">Логин</label>
             @error('name')
                 <p class="text-danger">{{$message}}</p>
             @enderror
           <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 88.8px;"></div><div class="form-notch-trailing"></div></div></div>

           <!-- Email input -->
           <div class="form-outline mb-4">
             <input type="email" name="email" id="email" class="form-control">
             <label class="form-label" for="form2Example2" style="margin-left: 0px;">Почта</label>

             @error('email')
                 <p class="text-danger">{{$message}}</p>
             @enderror
           <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 64.8px;"></div><div class="form-notch-trailing"></div></div></div>

           <!-- Password input -->
           <div class="form-outline mb-4">
             <input type="password" name="password" id="password" class="form-control">
             <label class="form-label" for="form2Example2" style="margin-left: 0px;">Пароль</label>
             @error('password')
                 <p class="text-danger">{{$message}}</p>
             @enderror
           <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 64.8px;"></div><div class="form-notch-trailing"></div></div></div>


           <!-- Password input -->
           <div class="form-outline mb-4">
             <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
             <label class="form-label" for="form2Example2" style="margin-left: 0px;">Подтвердите пароль</label>

             @error('password_confirmation')
                 <p class="text-danger">{{$message}}</p>
             @enderror
           <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 64.8px;"></div><div class="form-notch-trailing"></div></div></div>

           <!-- Submit button -->
           <button class="btn btn-primary mb-4">Отправить</button>

           <!-- Register buttons -->
           <div class="text-center">
             <p>Уже есть аккаунта? <a href="{{route('login')}}">Войти</a></p>
           </div>
         </form>
       </section>
@endsection