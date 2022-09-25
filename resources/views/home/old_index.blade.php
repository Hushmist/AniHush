@extends('layouts.main_page_layout')

@section('title', 'Gamers Hub')


@section('header')
    @include('includes.header')
@endsection

@section('content')
    @empty($articles)
      <div class="alert alert-success" role="alert">
          <h4>Статьи не найдены</h4>
      </div>
    @endempty
    @foreach ($articles as $article)
        @if (is_null($article['access_id']) || $article['user_id'] == Auth::id())
            <div class="blog_post">
                <a class="blog" href="{{ route('articles.show', $article['id']) }}">
                    <img class="blog_post_img" src="{{$article['img']}}">
                    <div class="blog_post_text">
                        <div class="blog_post_text_caption">
                            <h2>
                                {{$article->title}}
                            </h2>
                        </div>
                        
                        <div class="blog_post_text_description">
                            <p class="fs-3 lh-sm">
                                {!!$article['text']!!}
                            <p>
                        </div>
                        <div class="blog_post_text_categorie">
                            <p class="fs-6">
                                Категория:
                                <a class="blog_post_text_categorie_link" href="{{ route('categories.show', $article->category['id']) }}">
                                    {{$article->category['title']}}
                                </a>
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        @endif
    @endforeach
@endsection
{{-- 
@section('second_col')
    @include('includes.second_col')
@endsection --}}