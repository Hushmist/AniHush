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
                                        <a href="{{ route('home') }}"><i class="fa-solid fa-arrow-left"></i> На главную</a>
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

            <section style="background-color: #eee;">
              <div class="container my-5 py-5">
                @foreach ($comments as $comment)
                  <div class="row d-flex justify-content-center pt-2">
                    <div class="col-md-12 col-lg-10 col-xl-8">
                      <div class="card">
                        <div class="card-body">
                          <div class="d-flex flex-start align-items-center">
                            <img class="rounded-circle shadow-1-strong me-3"
                              src="{{ asset('img/users/profile.png') }}" alt="avatar" width="60"
                              height="60" />
                            <div>
                              <h6 class="fw-bold text-primary mb-1">{{$comment->user['name']}} </h6>
                              <p class="text-muted small mb-0">
                                {{date("Y-m-d", strtotime($article['created_at']))}}
                              </p>
                            </div>
                          </div>

                          <div class="mt-3 mb-4 pb-2">
                            {!! $comment['text'] !!}
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach

                @if (Auth::user())
                  <div class="row d-flex justify-content-center pt-3">
                    <div class="col-md-12 col-lg-10 col-xl-8">
                      <div class="card">
                        <div class="card-footer py-3 border-0" style="background-color: #f8f9fa;">

                          <form action="{{ route('store_comment') }}" method="POST" enctype="multipart/form-data" >
                            @csrf
                            @method('PUT')
                            <div class="d-flex flex-start w-100">
                              <img class="rounded-circle shadow-1-strong me-3"
                                src="{{ asset('img/users/profile.png') }}" alt="avatar" width="40"
                                height="40" />
                              <div class="form-outline w-100">
                                  <textarea name="text" class="editor" placeholder="Для прикрепление фото, в верхней панели выберите: Insert->Image"></textarea>
                                <label class="form-label" for="textAreaExample">Message</label>

                              </div>
                            </div>
                            <div class="float-end mt-2 pt-1">
                              <input type="text" name="user_id" value="{{Auth::user()->id}}" hidden>
                              <input type="text" name="article_id" value="{{$article['id']}}" hidden> 
                              <button class="btn btn-primary btn-sm">Post comment</button>
                            </div>
                          </form>

                        </div>
                      </div>
                    </div>
                  </div>
                @else
                  <a class="d-flex justify-content-center pt-3" href="{{ route('login') }}">Войдите чтобы оставить комментарий</a>
                @endif
              </div>
            </section>

@endsection