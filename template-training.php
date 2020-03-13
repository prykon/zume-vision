<?php
/*
Template Name: Training
*/
?>

<?php get_header(); ?>

<div class="page-content">
    <!-- Challenge -->
    <div class="grid-x grid-padding-x padding-top-1">
        <div class="cell center" >
            <h1 style="text-align:center !important; font-weight: 100; font-size: 3.5rem; color: #323a68;" class="padding-bottom-1"><?php esc_html_e( 'Zúme Training', 'zume' ) ?></h1>
            <p style="max-width:600px;margin:0 auto;">Zúme Training uses an online platform to equip participants in basic disciple-making and simple church planting multiplication principles, processes, and practices. The course is online, free, and self-led for groups of 3 - 12.</p>

        </div>
        <div class="small-6 small-centered cell video-section" style="max-width:400px;">
            <iframe style="border: 1px solid lightgrey;"  src="https://player.vimeo.com/video/248149797" width="560" height="215"
                    frameborder="1"
                    webkitallowfullscreen mozallowfullscreen allowfullscreen>
            </iframe>
        </div>

        <div class="cell center">
            <a href="https://zume.training" class="button large secondary-button" >Get Started</a>
            <a href="https://zume.vision/articles/zume-training-course-outline/" class="button large secondary-button">See the Course Outline</a>
        </div>
    </div>
</div>
<hr>
<div class="page-content">
    <div class="grid-x grid-padding-x" >
        <div class="medium-2 small-1 cell"></div>
        <div class="small-10 medium-8 small-centered cell">
            <div class="cell">
                <h2 class="center">Zúme consists of 10 sessions, 2 hours each.</h2>
                <h4 class="center">They are self-organized, participant-facilitated, and free.</h4>
                <div class="grid-x grid-padding-x grid-padding-y padding-top-1">
                    <div class="medium-4 cell center">
                        <img src="<?php echo esc_url( get_stylesheet_directory_uri() ) ?>/assets/images/pages/training2.png"
                             alt="Zúme consists of 10 sessions, 2 hours each" height="150"/>
                    </div>
                    <div class="medium-8 cell ">

                        <ul>
                            <li><?php esc_html_e( 'Video and Audio to help your group understand basic principles of multiplying disciples.', 'zume' ) ?></li>
                            <li><?php esc_html_e( 'Group Discussions to help your group think through what’s being shared.', 'zume' ) ?></li>
                            <li><?php esc_html_e( 'Simple Exercises to help your group put what you’re learning into practice.', 'zume' ) ?></li>
                            <li><?php esc_html_e( 'Session Challenges to help your group keep learning and growing between sessions.', 'zume' ) ?></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="cell center">
                <a href="https://zume.training" target="_blank" class="button large secondary-button" >Explore the Training</a>
            </div>
        </div>
        <div class="medium-2 small-1 cell"></div>
    </div>
</div>
<hr>
<div class="page-content">
    <!-- Slider -->
    <div class="grid-x grid-padding-x">
        <div class="cell">
            <h2 class="center">What others are saying?</h2>
        </div>
        <div class="cell front-page-social" data-equalizer style="color:#21336A;">
            <div class="grid-x grid-margin-x grid-margin-y">
                <div class="large-4 medium-6 small-12 cell centered" data-equalizer-watch>
                    <img src="/wp-content/themes/zume-training/assets/images/home/1body.jpg"
                         class="center front-page-social-image">
                    <p class="text-center" style="color:#21336A">
                        "Zúme will help us accelerate our training into more countries and languages."
                </div>
                <div class="large-4 medium-6 small-12 cell centered" data-equalizer-watch>
                    <img src="/wp-content/themes/zume-training/assets/images/home/noplaceleft.png"
                         class="center front-page-social-image">
                    <p class="text-center" style="color:#21336A">
                        "Zúme is a helpful way to filter for faithful people that can spread quickly and conserve training bandwidth."
                    </p>
                </div>
                <div class="large-4 medium-6 small-12 cell centered" data-equalizer-watch>
                    <img src="/wp-content/themes/zume-training/assets/images/home/2414.jpg"
                         class="center front-page-social-image">
                    <p class="text-center" style="color:#21336A">
                        "Zúme is a wonderful on-ramp for our coalition."
                    </p>
                </div>
                <div class="large-4 medium-6 small-12 cell centered" data-equalizer-watch><img src="/wp-content/themes/zume-training/assets/images/home/biglife.png" class="center front-page-social-image" style="max-height: 60px"><p class="text-center" style="color:#21336A">"Zúme brilliantly encapsulates the principles in our introductory training."</p>
                </div>
                <div class="large-4 medium-6 small-12 cell centered">

                    <img src="/wp-content/themes/zume-training/assets/images/home/teamexpansion.png"
                         class="center front-page-social-image" style="max-height: 60px">

                    <p class="text-center" style="color:#21336A">
                        "The principles and life practices packed into the Zúme disciple-multiplication training course have enormous potential to impact not only the USA but also, as the course is translated into 34 other languages, the world as well."
                    </p>
                </div>
                <div class="large-4 medium-6 small-12 cell centered" data-equalizer-watch>
                    <div style="height: 75px" class="center">
                        <img src="/wp-content/themes/zume-training/assets/images/home/finishingthetask-logo.png"
                             class="center front-page-social-image" style="max-height: 60px; width:280px">
                    </div>
                    <p class="text-center" style="color:#21336A">
                        "Zúme is a valuable tool for many of our member organizations to use in engaging new people groups."
                    </p>
                </div>
            </div>
        </div>
        <div class="cell center">
            <a href="https://zume.training/training" class="button centered large secondary-button" >Explore the Training</a>
        </div>

    </div> <!-- End cell-->
</div>
<hr>


<?php get_footer(); ?>
