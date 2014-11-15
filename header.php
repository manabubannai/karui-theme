<!DOCTYPE html>
<html lang="ja">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<meta charset="utf-8">
<title><?php the_title(); ?></title>

<!-- SEO対策 -->
<?php if ( $post->my_description ): ?>
<meta name="description" content="<?php echo esc_attr( $post->my_description ); ?>" />
<?php else: ?>
<meta name="description" content="<?php bloginfo('description'); ?>" />
<?php endif; ?>
<?php if ( $post->my_keywords ): ?>
<meta name="keywords" content="<?php echo esc_attr( $post->my_keywords ); ?>" />
<?php else: ?>
<meta name="keywords" content="デフォルトワード,デフォルトワード,デフォルトワード" />
<?php endif; ?>
<!-- /SEO対策 -->

<!-- レスポンシブ -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- /レスポンシブ -->

<!-- OGP設定 -->
<?php if (have_posts()): while(have_posts()):the_post(); endwhile; endif;?>
<meta property="fb:app_id" content="your_fb_app_id" />
<meta property="fb:admins" content="your_fb_admin_id" />
<?php if (is_single()) { ?>
<meta property="og:url" content="<?php the_permalink() ?>"/>
<meta property="og:title" content="<?php the_title(''); ?>" />
<meta property="og:description" content="<?php echo esc_attr( $post->my_description ); ?>" />
<meta property="og:type" content="article" />
<meta property="og:image" content="<?php if (function_exists('wp_get_attachment_thumb_url')) {echo wp_get_attachment_thumb_url(get_post_thumbnail_id($post->ID)); }?>" />
<?php } else { ?>
<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
<meta property="og:description" content="<?php bloginfo('description'); ?>" />
<meta property="og:type" content="website" />
<meta property="og:image" content="logo.jpg" /> <?php } ?>

<meta name="twitter:card" value="summary"/>
<meta name="twitter:site" value="@hogehoge" />
<meta name="twitter:creator" value="@hogehoge" />
<meta name="twitter:title" value="<?php the_title(''); ?>"/>
<meta name="twitter:description" value="<?php echo esc_attr( $post->my_description ); ?>"/>
<meta name="twitter:image" value="<?php if (function_exists('wp_get_attachment_thumb_url')) {echo wp_get_attachment_thumb_url(get_post_thumbnail_id($post->ID)); }?>" />
<!-- /OGP設定 -->

<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css" media="screen" type="text/css" />

</head>
<body>
	<div id="wrapper">
		<div id="header">
			<!-- 固定ページ、投稿ページの場合はサイトタイトルにh1を利用しない -->
			<?php if (is_page() || is_single()) { ?>
				<p class="site-title">
					<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg"></a>
				</p>
			<?php } else { ?>
				<h1 class="site-title">
					<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg"></a>
				</h1>
			<?php } ?>
		</div><!-- end header -->
		<nav class="margin-bottom-70">
			<ul>
				<li><a href="http://manabubb.xsrv.jp/karui/?page_id=4">固定ページ1</a></li>
				<li><a href="http://manabubb.xsrv.jp/karui/?page_id=4">固定ページ2</a></li>
				<li><a href="http://manabubb.xsrv.jp/karui/?page_id=4">固定ページ3</a></li>
				<li><a href="http://manabubb.xsrv.jp/karui/?page_id=4">固定ページ4</a></li>
				<li><a href="http://manabubb.xsrv.jp/karui/?page_id=4">固定ページ5</a></li>
				<li><a href="http://manabubb.xsrv.jp/karui/?page_id=4">固定ページ6</a></li>
			</ul>
		</nav>