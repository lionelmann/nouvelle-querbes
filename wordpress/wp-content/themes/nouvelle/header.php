<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo('name') ?></title>
    <?php 
        $args   =array('post_type' => 'post','posts_per_page' => 1);query_posts($args);
        if (have_posts()) : while(have_posts()) : the_post();
        if (is_single()) { ?>
            <meta property="og:url" content="<?php the_permalink() ?>"/>
            <meta property="og:title" content="<?php single_post_title(''); ?>" />
            <meta property="og:description" content="<?php echo strip_tags(get_the_excerpt($post->ID)); ?>" />
            <meta property="og:type" content="article" />
            <meta property="og:image" content="<?php if (function_exists('catch_that_image')) {echo catch_that_image(); }?>" />
        <?php } else { ?>
            <meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
            <meta property="og:description" content="<?php bloginfo('description'); ?>" />
            <meta property="og:type" content="website" />
            <meta property="og:image" content="<?php bloginfo('template_url' ); ?>/images/logo.png">
    <?php } endwhile; endif; ?>
    <?php wp_reset_query(); ?>
    <script>document.cookie='resolution='+Math.max(screen.width,screen.height)+'; path=/';</script>
    
    <?php wp_head(); ?>
    
    <script type="text/javascript">
		var template_url = "<?php bloginfo('template_url');?>";
    </script>

</head>

<body <?php body_class();?> data-page="index">

<!-- Pushy Menu -->
<nav class="pushy pushy-right">
    <?php 
		$menu_arg=array(
			'container' => false,             // remove menu container
			'container_class' => '',          // class of container
			'menu_id' => '',
			'menu' => '',                     // menu name
			'menu_class' => 'mobile-menu',        // adding custom nav class
			'theme_location' => 'header-menu',    // where it's located in the theme
		);
		wp_nav_menu($menu_arg); 
	?> 
</nav>

<!-- Site Overlay for Pushy offcanvas to work -->
<div class="site-overlay"></div>


<!--Wrapper Starts for Pushy to work-->
<div class="wrapper">
    <header>
        <div class="topbar">
           <div class="container" >
                <div class="span-10 center">
					
					<div class="logo-wrap span-2">
						<div class="logo">
							<a href="<?php bloginfo( 'url' ) ?>"><img src="<?php bloginfo('template_url');?>/dist/images/logo.png" /></a>
						</div>
						<!--<div class="search">
							<a href="#">Search</a>
						</div> -->
					</div>
					<div class="span-10 overflow-visible">
					<?php 
						$menu_arg=array(
							'container' => false,             // remove menu container
							'container_class' => '',          // class of container
							'menu_id' => '',
							'menu' => '',                     // menu name
							'menu_class' => 'menu',        // adding custom nav class
							'theme_location' => 'header-menu',    // where it's located in the theme
							);
					
						wp_nav_menu($menu_arg); ?>
					</div>
                </div>
                <div class="menu-btn">Menu &#9776;</div>
            </div>
        </div>
    </header>
	<div id="search-box">
		<div class="span-10 center">
			<?php get_search_form() ?>
		</div>
	</div>