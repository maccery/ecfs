<?php get_header(); ?>
<!-- end header -->
            <!-- content -->
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article>
                    <div class="row">
                        <h2><?php the_title(); ?></h2>
                        <small><h5>Written by Tom Macmichael - <?php the_time('F jS, Y') ?></h5></small>
                        <p><?php the_content(__('(more...)')); ?></p>
                    </div>
                </article>
                <hr> <?php endwhile; else: ?>
                <?php _e('Sorry, no posts matched your criteria.'); ?>
            <?php endif; ?>
            <!-- end content -->
    </div>
    <div class="col-lg-3 row">
            <!-- sidebar -->
            <?php get_sidebar(); ?>
            <!-- end sidebar -->

<!-- footer -->
<?php get_footer(); ?>
<!-- end footer -->