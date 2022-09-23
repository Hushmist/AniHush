@extends('layouts.main_page_layout')

@section('title', 'Gamers Hub')


@section('header')
    @include('includes.header')
@endsection

@section('content')
 
    @forelse ($category->posts as $article)
       <div class="row mb-2">
           <div class="col-md">
             <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative bg-light">
               <div class="col p-4 d-flex flex-column position-static">
                 <strong class="d-inline-block mb-2 text-primary">{{$article->category['title']}}</strong>
                 <h3 class="mb-0">{{$article->title}}</h3>
                 <a href="{{ route('articles.show', $article['id']) }}" class="stretched-link">Continue reading</a>
               </div>
               <div class="col-auto d-none d-lg-block">
                 <img class="blog_post_img" src="{{$article['img']}}">
               </div>
             </div>
           </div>
         </div>
    @empty
        <h2 style="text-align: center;">Статьи не найдены</h2>
    @endforelse
@endsection
{{-- 
@section('second_col')
    @include('includes.second_col')
@endsection --}}