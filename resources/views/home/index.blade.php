@extends('layouts.main_page_layout')

@section('title', 'Hushmist')


@section('header')
    @include('includes.header')
@endsection

@section('content')

    @foreach ($articles as $article)
            @include('includes.blog-card')
    @endforeach

    @empty($articles)
        <div class="row mb-2">
            <div class="col-md">
                <h1 class="text-center">Статьи не найдены</h1>
            </div>
        </div>
    @endempty
    
    @include('includes.footer')
@endsection