<?php
/**
 * Displays archive pages if a speicifc template is not set.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

get_header(); ?>

<!-- Progress Section-->
<div class="grid-x grid-padding-x deep-blue-section padding-vertical-1">
    <div class="cell center" style="cursor:pointer;" onclick="window.location = '<?php site_url() ?>/reports'">
        <h1 class="center">Reports</h1>
    </div>
</div>
<div class="grid-x blue-notch-wrapper"><div class="cell center blue-notch"></div></div>

<!-- Main -->
<main role="main" id="post-main">

    <div class="grid-x grid-margin-x">

        <div class="blog cell large-8">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <?php get_template_part( 'parts/loop', 'report-archive' ); ?>

            <?php endwhile; ?>

                <?php zume_page_navi(); ?>

            <?php else : ?>

                <?php get_template_part( 'parts/content', 'missing' ); ?>

            <?php endif; ?>

        </div>

        <div class="sidebar cell large-4">

            <?php get_sidebar( 'reports-archive'); ?>

        </div>

    </div>

</main> <!-- end #main -->

<?php get_footer(); ?>
