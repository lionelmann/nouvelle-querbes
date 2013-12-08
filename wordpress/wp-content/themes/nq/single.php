<?php get_header(); ?>

<section> 
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="container">
        <div class="columns-wide">
            <p class="meta"><i><?php echo get_the_date(); ?></i></p>
            <h1 style="text-transform: uppercase;"><?php the_title(); ?></h1>
            <p class="meta">Written by <?php echo the_author_posts_link(); ?>
            <br><?php echo get_the_category_list(' / '); ?></p>
        </div>
        <div class="columns-1">
            <?php the_content(); ?>
        </div>
    </div>

<?php endwhile; endif; ?>
</section>

<div id="pagination">
    <?php previous_post_link( '%link', '%title' );?>
    <?php next_post_link( '%link', '%title' );?>
</div>

<?php get_footer(); ?>