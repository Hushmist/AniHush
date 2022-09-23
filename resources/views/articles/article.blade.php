@extends('layouts.article')

@section('title', 'Games Hub')

@section('content')

<!-- Wrapper -->
            <div id="wrapper">

                <!-- Main -->
                    <div id="main">

                        <!-- Post -->
                            <article class="post">
                                <header>
                                    <div class="title">
                                        <h2><a href="#">{{$article->title}}</a></h2>
                                        <p>{{$article->category['title']}} </p>
                                    </div>
                                    <div class="meta">
                                        <time class="published" datetime="{{$article['created_at']}}">{{date("Y-m-d", strtotime($article['created_at']))}}</time>
                                        <a href="#" class="author"><span class="name">{{$article->user['name']}}</span><img src="images/avatar.jpg" alt="" /></a>
                                    </div>
                                </header>
                                <span class="image featured"><img src="{{$article['img']}}" alt="" /></span>
                                {!! $article['text']!!}
                            </article>

                    </div>

            
            </div>
@endsection