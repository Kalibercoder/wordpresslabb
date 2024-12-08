<?php
/*
Template Name: undersida1
Description: En textspalt med sidomeny till höger med länk till övriga undersidor
*/

get_header(); ?>

<?php get_template_part('nav'); ?>

<main class="container">
    <div class="content-wrapper">
        <div class="content">
            <?php
            while (have_posts()) :
                the_post();
                ?>
                <h1 class="page-title"><?php the_title(); ?></h1>
                <div class="image-container">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('large', array('class' => 'centered-img')); ?>
                    <?php endif; ?>
                </div>
                <div class="page-content">
                    <?php the_content(); ?>
                </div>
                <?php
            endwhile;
            ?>
        </div>
        <aside class="sidebar sidebar-right">
            <h2>Other Pages</h2>
            <ul class="page-list">
                <?php
                // List all pages except the current one
                wp_list_pages(array(
                    'title_li' => '',
                    'exclude' => get_the_ID()
                ));
                ?>
            </ul>
        </aside>
    </div>
</main>

<?php get_footer(); ?>