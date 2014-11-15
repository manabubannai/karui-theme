<?php get_header(); ?>

<div id="main">

	<div itemscope itemtype="http://schema.org/Article" id="content" itemscope="" itemtype="http://schema.org/Article">

			<!-- パンくずリスト -->
			<div class="breadcrumbs" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
				<a href="<?php bloginfo('url'); ?>"  itemprop="url">
					<span itemprop="title">ホーム / </span>
				</a>
				<span><?php $cat = get_the_category(); echo get_category_parents($cat[0], true, ' / ');?><?php the_title(); ?></span>
			</div>

			<!-- タイトル表示 -->
			<h1 class="entry-title">
				<a href="<?php the_permalink(); ?>" title="<?php printf(the_title_attribute('echo=0') ); ?>"><span itemprop="name"><?php the_title(); ?></span></a>
			</h1>

			<!-- メタデータの読み込み -->
			<?php get_template_part( 'meta' ); ?>


			<!-- サムネイルの表示 -->
			<span itemprop="image">
				<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
			</span>

			<!-- 本文の表示 -->
			<span itemprop="articleBody"><?php the_content(); ?></span>

	</div><!-- end content -->

	<?php get_sidebar(); ?>

</div><!-- end main -->


<?php get_footer(); ?>