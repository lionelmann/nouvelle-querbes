<?php
/*
Template Name: Calendar/No Sidebar
*/
get_header(); ?>

<?php get_template_part( 'template-part', 'breadcrumb' ); ?>

<section role="main">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
			<h4><?php tribe_events_title(); ?></h4>
			<div class="article-inside">
				<?php the_content();?>
			</div>
	
	<?php endwhile; endif; ?>
</section>

<?php get_footer(); ?>