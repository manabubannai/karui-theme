<?php get_header(); ?>

<div id="main">

	<div id="content">

			<!-- パンくずリスト -->
			<div class="breadcrumbs" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
				<a href="<?php bloginfo('url'); ?>"  itemprop="url">
					<span itemprop="title">ホーム / </span>
				</a>
				<span>
					<?php the_title(); ?>
				</span>
			</div>

			<!-- タイトル表示 -->
			<h1 class="entry-title">
				<a href="<?php the_permalink(); ?>" title="<?php printf(the_title_attribute('echo=0') ); ?>"><?php the_title(); ?></a>
			</h1>

			<!-- 著者情報 -->
			<p class="entry-meta">
				<span class="alignleft"><?php the_time('Y年m月d日'); ?></span>
				<span>　投稿者：
					<span itemprop="author" itemscope itemtype="http://schema.org/Person">
					<span itemprop="name">
						<a href="https://plus.google.com/+%E5%9D%82%E5%86%85%E5%AD%A6manabu/posts?rel=author">Manabu Bannai</a>
					</span>
				</span>
			</p><!-- .entry-meta -->

			<!-- サムネイルの表示 -->
			<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>

			<!-- 本文の表示 -->
			<?php the_content(); ?>

	</div><!-- end content -->

	<?php get_sidebar(); ?>

</div><!-- end main -->


<?php get_footer(); ?>