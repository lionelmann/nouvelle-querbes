<?php get_header(); ?>
<?php get_template_part( 'template-part', 'breadcrumb' ); ?>

<section role="main">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article>	
			<h4><?php the_title(); ?></h4>
			<div class="article-inside">
				<?php the_content();?>
			</div>
		</article>
	<?php endwhile; endif; ?>
	<aside>
		<?php get_sidebar();?>
	</aside>
</section>

<?php get_footer(); ?>