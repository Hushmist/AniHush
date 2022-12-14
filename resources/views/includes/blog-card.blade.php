<div class="row mb-2">
  <div class="col-md">
    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative bg-light">
      <div class="col p-4 d-flex flex-column position-static">
        <strong class="d-inline-block mb-2 text-primary">{{$article->category['title']}}</strong>
        <h3 class="mb-0">{{$article->title}}</h3>
        <a href="{{ route('articles.show', $article['id']) }}" class="stretched-link">Перейти к чтению</a> 
        <div><i class="fa-solid fa-comment align-text-bottom pt-4"></i> {{$article['comments']->count()}}</div>
      </div>
      <div class="col-auto d-none d-lg-block">
        <img class="blog_post_img" src="{{$article['img']}}">
      </div>
    </div>
  </div>
</div>