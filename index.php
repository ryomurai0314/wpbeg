<?php get_header(); ?>
<!-- header.phpを読み込むテンプレートタグ（インクルードタグ） -->
		<div class="c-wrap">
			<div class="c-grid">
				<div class="p-contents">
				<?php
if( have_posts() ) :
	while( have_posts() ) :
		the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h2 class="post__ttl"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<ul class="post__meta">
				<li class="post__meta__item">
					<date class="post__meta__date"><?php echo get_the_date(); ?></date>
				</li>
				<li class="post__meta__item"><i class="fa fa-folder" aria-hidden="true"><?php the_category( ', ' ); ?></i></li>
				<li class="post__meta__item"><i class="fa fa-tag" aria-hidden="true"><?php the_tags( '' ); ?></i></li>
			</ul>
			<?php the_post_thumbnail(); ?>
			<?php the_content( '続きを読む' ); ?>
		</div>
	<?php endwhile;
	else :
	?><p>表示する記事がありません</p><?php
endif;
?>
				</div>
				<ul class="p-pagenation">
					<li class="prevpostslink"><a rel="next" href="#">Prev</a></li>
					<li class="nextpostslink"><a rel="next" href="#">Next</a></li>
				</ul>
				<?php get_sidebar(); ?>
				<!-- siderbar.phpを読み込むテンプレートタグ（インクルードタグ） -->
			</div>
		</div>
<?php get_footer(); ?>
<!-- footer.phpを読み込むテンプレートタグ（インクルードタグ） -->
