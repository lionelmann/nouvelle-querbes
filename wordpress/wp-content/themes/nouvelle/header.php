<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="Site web officiel de l'école alternative Nouvelle-Querbes. Vous y retrouverez toute l'information à propos de la vie à l'école et des inscriptions ainsi que les communications officielles." />
    <title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo('name') ?></title>
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/favicon.ico" />
    <?php wp_head(); ?>
</head>

<body <?php body_class('animated fadeIn'); ?>>
<?php include_once("analyticstracking.php") ?>

<section role="banner">
    <header>
        <div class="logo">
            <a href="<?php bloginfo('url');?>"><img src="<?php bloginfo('template_url' ); ?>/dist/images/logo-new.png"></a>
        </div>

        <nav class="mobile">
            <?php wp_nav_menu(array('container' => false, 'container_class' => '', 'menu_id' => '', 'menu' => '', 'menu_class' => 'menu', 'theme_location' => 'header-menu'));  ?>
        </nav>

        <nav class="nav">
			<?php wp_nav_menu(array('container' => false, 'container_class' => '', 'menu_id' => '', 'menu' => '', 'menu_class' => 'menu', 'theme_location' => 'header-menu'));	?>
		</nav>
    </header>
</section>    