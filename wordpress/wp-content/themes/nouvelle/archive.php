<?php
/*
Template Name: Blog Archive
*/

get_header(); ?>

<?php get_template_part( 'template-part', 'breadcrumb' ); ?>

<section role="main">
	<article>	
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="article-inside">
			<h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
			<p class="meta"><?php echo get_the_date(); ?> | <?php echo get_the_category_list(' / '); ?></p>
			<?php the_excerpt(); ?>
		</div>
	<?php endwhile; endif; ?>
	</article>
	<!--
	<div class="pagi center">
		<?php pagination(); ?>
	</div>	
	-->
	<aside>
		<?php get_sidebar();?>
	</aside>
</section>

<?php get_footer(); ?>