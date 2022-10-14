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
    
    <footer class="text-center text-white" style="background-color: #f1f1f1;">
      <!-- Grid container -->
      <div class="container pt-4">
        <!-- Section: Social media -->
        <section class="mb-4">
          <!-- Facebook -->
          <a
            class="btn btn-link btn-floating btn-lg text-dark m-1"
            href="#!"
            role="button"
            data-mdb-ripple-color="dark"
            ><i class="fab fa-facebook-f"></i
          ></a>


          <!-- Linkedin -->
          <a
            class="btn btn-link btn-floating btn-lg text-dark m-1"
            href="#!"
            role="button"
            data-mdb-ripple-color="dark"
            ><i class="fab fa-linkedin"></i
          ></a>
          <!-- Github -->
          <a
            class="btn btn-link btn-floating btn-lg text-dark m-1"
            href="https://github.com/Hushmist/AniHush"
            role="button"
            data-mdb-ripple-color="dark"
            ><i class="fab fa-github"></i
          ></a>
        </section>
        <!-- Section: Social media -->
      </div>
      <!-- Grid container -->

      <!-- Copyright -->
      <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        <a class="text-dark" href="https://mdbootstrap.com/">Hushmist</a>
      </div>
      <!-- Copyright -->
    </footer>
@endsection