<?php get_header(); ?>

    <br>
        <div class="container">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <div class="row">
                        <div class="col-xs-12 col-lg-12 <?php post_class(); ?>" id="post-<?php the_ID(); ?>">
                            <h1 class="text-center post-header"><a href="<?php the_permalink(); ?>" title="Permanent Link to <?php the_title_attribute(); ?>" class="text-dark"><?php the_title(); ?></a></h1>
                            <?php the_content(); ?>
                            <?php edit_post_link('<span class="fas fa-pencil-alt"></span> Edit', '<p>', '</p>', null, 'btn btn-sm btn-light btn-edit-post-link'); ?>
                            <?php wp_link_pages(); ?>
                            <hr>
                            <div class="float-right"><span class="fas fa-user"></span> <?php the_author(); ?> <span class="fas fa-calendar-alt" style="padding-left:10px;"></span> <?php the_time('m/d/Y') ?> <br><br></div>
                        </div>
                    </div>
                <?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
                <!-- TODO: Replace With Bootstrap Pagination Code -->
                <?php 
                    if (function_exists("bootstrap_pagination")) { 
                        bootstrap_pagination();
                    } 
                ?>
            <?php else : ?>
            <?php endif; ?>
        </div>
    <br><br>

<?php get_footer(); ?>