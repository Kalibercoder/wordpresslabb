<?php 

get_header();
?>


<?php get_template_part('nav'); ?>

<main>
    <?php
    echo "<!-- Debug: Before loop -->";
    if (have_posts()) :
        echo "<!-- Debug: Posts found -->";
        while (have_posts()) :
            the_post();
            ?>
            <article>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php the_content(); ?>
            </article>
            <?php
        endwhile;
    else :
        ?>
        <p>No posts found.</p>
    <?php 
    endif;
    ?>
</main>

<?php 
get_footer();
?>