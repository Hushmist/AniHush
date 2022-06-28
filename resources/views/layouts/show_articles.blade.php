<?php 

function show_articles($table) {

	include("db.php");
	$categories = array( 
		'id' => array(), 
		'title' => array(),
	);
	$table_ = mysqli_query($connection, "SELECT * FROM `categories`");
	while ($cat = mysqli_fetch_assoc($table_)) {
		$categories['id'][] = $cat['id'];
		$categories['title'][] = $cat['title'];
	}
	while ($article = mysqli_fetch_assoc($table)) { 
	?>	
		<div class="blog_post">
			<a class="blog" href="../pages/article.php?id=<?php echo($article['id']) ?>">
				<img class="blog_post_img" src="../assets/<?php echo $article['image'] ?>">
				<div class="blog_post_text">
					<div class="blog_post_text_caption">
						<h2>
							<?php echo $article['title'] ?>
						</h2>
					</div>
					
					<div class="blog_post_text_description">
						<p class="fs-3 lh-sm">
							<?php echo mb_substr($article['text'], 0, 160, 'utf-8') . '...' ?>
						<p>
					</div>
					<div class="blog_post_text_categorie">
						<p class="fs-6">
							Категория:
							<a class="blog_post_text_categorie_link" href="/articles.php?categorie_id=<?php echo($article['categorie_id']) ?>">
								<?php
									for ($i=0; $i < count($article); $i++) { 
										if($article['categorie_id'] == $categories['id'][$i]) {

											echo $categories['title'][$i];
											break;
										}
									} 
								?>
							</a>
						</p>
					</div>
				</div>
			</a>
		</div>
<?php 
	} 	
}
?>