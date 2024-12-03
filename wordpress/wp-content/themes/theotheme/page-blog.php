<?php
/*
Template Name: Blog Page
*/

get_header(); ?>

<main>
    <h1>Blog</h1>
    <?php
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 10
    );
    $blog_query = new WP_Query($args);
    
    if ($blog_query->have_posts()) :
        while ($blog_query->have_posts()) :
            $blog_query->the_post();
            ?>
            <article>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php the_excerpt(); ?>
            </article>
        <?php
        endwhile;
        wp_reset_postdata();
    endif;
    ?>
</main>

<?php get_footer(); ?>