<?php

/* 
Template Name: message
Description: contact page
*/

get_header(); ?>

<?php get_template_part('nav'); ?>

<main class="container-message">
    <div class="content-wrapper">
        
        <form class="contact-form" action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>" method="post">
            <p>
                <label for="cf-name">Name</label>
                <input type="text" id="cf-name" name="cf-name" required>
            </p>
            <p>
                <label for="cf-email">Email</label>
                <input type="email" id="cf-email" name="cf-email" required>
            </p>
            <p>
                <label for="cf-subject">Subject</label>
                <input type="text" id="cf-subject" name="cf-subject" required>
            </p>
            <p>
                <label for="cf-message">Message</label>
                <textarea id="cf-message" name="cf-message" rows="5" required></textarea>
            </p>
            <p>
                <input type="submit" name="cf-submitted" value="Send">
            </p>
        </form>
    </div>
</main>

<?php get_footer(); ?>
