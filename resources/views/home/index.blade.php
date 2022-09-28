@extends('layouts.main_page_layout')

@section('title', 'Hushmist')


@section('header')
    @include('includes.header')
@endsection

@section('content')

    @foreach ($articles as $article)
        {{-- @if (is_null($article['access_id']) || $article['user_id'] == Auth::id()) --}}  {{-- not fully working --}} 
            @include('includes.blog-card')
        {{-- @endif --}}
    @endforeach

    @empty($articles)
        <div class="row mb-2">
            <div class="col-md">
                <h1 class="text-center">Статьи не найдены</h1>
            </div>
        </div>
    @endempty
    
@endsection