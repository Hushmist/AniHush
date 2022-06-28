<div> 
	<div class="most_views">
		<h2 class="blog_header">Топ просмотры</h2>
		<div class="most_views_contents">
			<table>
				@for ($i=0; $i < 4; $i++) 
					@isset($articles_top_views[$i])
						@if ($i%2 == 0)
							<tr>
						@endif
					@endisset
					<td class="most_views_content">
						<a class="blog" href="{{route('getArticleById', [$articles_top_views[$i]->categorie['id'] ,$articles_top_views[$i]['id']])}}">
							<img class="most_views_img" src="{{asset('img/article/' . $articles_top_views[$i]['image'])}}">
							<div class="most_views_text">
								<?php echo mb_substr($articles_top_views[$i]['title'], 0, 90, 'utf-8') ?>
							</div>
						</a>
					</td>
				@endfor
			</table>
		</div>
	</div>
	
	<div class="most_views">
		<h2 class="blog_header">Топ обсуждаемых</h2>
		<div class="most_views_contents">
			<table>
				@for ($i=0; $i < 4; $i++) 
					@isset($articles_top_comments[$i])
						@if ($i%2 == 0)
							<tr>
						@endif
					@endisset
					<td class="most_views_content">
						<a class="blog" href="{{route('getArticleById', [$articles_top_comments[$i]->categorie['id'] ,$articles_top_comments[$i]['id']])}}">
							<img class="most_views_img" src="{{asset('img/article/' . $articles_top_comments[$i]['image'])}}">
							<div class="most_views_text">
								<?php echo mb_substr($articles_top_comments[$i]['title'], 0, 90, 'utf-8') ?>
							</div>
						</a>
					</td>
				@endfor
			</table>
		</div>
	</div>
</div>