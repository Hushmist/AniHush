@extends('layouts.main_page_layout')

@section('title', 'Games Hub')

@section('header')
    @include('includes.header')
@endsection
@section('content')
    <h1>{{$user->login}}</h1>
@endsection