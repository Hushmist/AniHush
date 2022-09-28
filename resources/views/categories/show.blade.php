@extends('layouts.main_page_layout')

@section('title', $category['title'])


@section('header')
    @include('includes.header')
@endsection

@section('content')
 
    @forelse ($category->posts as $article)
       @include('includes.blog-card')
    @empty
        <div class="row mb-2">
            <div class="col-md">
                <h1 class="text-center">Статьи не найдены</h1>
            </div>
        </div>
    @endforelse
@endsection
{{-- 
@section('second_col')
    @include('includes.second_col')
@endsection --}}