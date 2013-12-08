<?php get_header(); ?>

 <?php if (has_post_thumbnail()) { ?>
        <div class="banner"><?php the_post_thumbnail('banner') ?></div>
        <?php } else { ?>
        <div class="banner"><img src="<?php bloginfo('template_url' ); ?>/images/large.jpg"></div>
    <?php } ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="container">
        <article>
            <?php the_title( '<h1>', '</h1>' ); ?>
            <?php the_content(); ?>
        </article>
        <?php get_sidebar(); ?>
    </div>

<?php endwhile; endif; ?>

<div id="pagination">
    <?php previous_post_link( '%link', '%title' );?>
    <?php next_post_link( '%link', '%title' );?>
</div>
<?php get_footer(); ?>