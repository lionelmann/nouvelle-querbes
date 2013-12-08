<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Grid Template</title>
<?php wp_head(); ?>
</head>
<body>
<header>    
	<div class="container">
        <div class="logo">
        Logo
        </div>
        <nav id="box">
        	<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => false, 'items_wrap' => '<ul>%3$s</ul>') ); ?>
        </nav>
    </div>
</header>
<div class="wrapper">