<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo('name') ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class('animated fadeIn'); ?>>

<section role="banner">
    <header>
        <div class="logo">
            <a href="<?php bloginfo('url');?>"><img src="<?php bloginfo('template_url' ); ?>/dist/images/logo.png"></a>
        </div>
        <nav>
			<?php wp_nav_menu(array('container' => false, 'container_class' => '', 'menu_id' => '', 'menu' => '', 'menu_class' => 'menu', 'theme_location' => 'header-menu'));	?>
		</nav>
    </header>
</section>