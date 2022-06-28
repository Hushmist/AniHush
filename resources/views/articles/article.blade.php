@extends('layouts.main_page_layout')

@section('title', 'Games Hub')

@section('header')
    @include('includes.header')
@endsection

@section('content')

<div class="article">
    <h1 class="article_caption">{{$article->title}}</h1>
    <div class="article_contents">
        <img class="article_img" src="{{$article['img']}}">
        <div class="article_additionally_data justify-content-center">
            <p>Категория: 
                <a class="blog_post_text_categorie_link" href="{{route('category.show', $article->category['id'])}}">
                    <?php echo $article->category['title'];?>
                </a> 
            </p>
            <p>Автор: {{$article->user['name']}}</p>
        </div>
        <p class="article_text">{!! $article['text']!!}</p>
    </div>
</div>
@endsection
{{-- 
@section('second_col')
    @include('includes.second_col')
@endsection --}}