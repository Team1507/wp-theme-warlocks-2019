<?php get_header(); ?>

<br>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-12">
                    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
        <br><br>

<?php get_footer(); ?>