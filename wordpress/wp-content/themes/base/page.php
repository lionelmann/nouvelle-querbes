<?php get_header('inner'); ?>
<?php get_template_part( 'template-part', 'breadcrumb' ); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="container">
		<section class="span-10 center overflow-visible content">
				<div class="span-7">
					<?php the_title( '<h4 class="headline">', '</h4>' ); ?>
					<div class="white-bg">
					<?php the_content();?>
					</div>
				</div>
				<div class="span-5 overflow-visible sidebar">
					<?php get_sidebar();?>
				</div>
		</section>
    </div>

<?php endwhile; endif; ?>
<?php get_footer(); ?>