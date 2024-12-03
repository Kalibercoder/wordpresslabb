<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

get_header();
?>

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
        echo "<!-- Debug: No posts found -->";
        ?>
        <p>No posts found.</p>
    <?php 
    endif;
    echo "<!-- Debug: After loop -->";
    ?>
</main>

<?php 
echo "<!-- Debug: Before footer -->";
get_footer();
echo "<!-- Debug: After footer -->";
?>