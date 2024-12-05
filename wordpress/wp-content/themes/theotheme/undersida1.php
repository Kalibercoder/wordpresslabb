<?php
/*
Template Name: undersida1
en textspalt med sidomeny till höger med länk till övriga
undersidor
*/

get_header(); ?>

<main class="container">
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
            <article class="blog-post">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div class="blog-post-thumbnail">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('medium', array('class' => 'centered-img')); ?>
                    <?php endif; ?>
                </div>
                <?php the_excerpt(); ?>
            </article>
        <?php
        endwhile;
        wp_reset_postdata();
    endif;
    ?>
</main>

<?php get_footer(); ?>