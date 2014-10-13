<?php get_header(); ?>
<!-- end header -->
            <!-- content -->
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article>
                    <div class="row">
                        <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                        <small><h5><?php the_time('F jS, Y') ?></h5></small>
                        <p><?php the_content(__('(more...)')); ?></p>
                    </div>
                </article>
                <hr> <?php endwhile; else: ?>
                <?php _e('Sorry, no posts matched your criteria.'); ?>
            <?php endif; ?>
            <!-- end content -->
    </div>
    <div class="col-md-3 row">
            <!-- sidebar -->
            <?php get_sidebar(); ?>
            <!-- end sidebar -->

<!-- footer -->
<?php get_footer(); ?>
<!-- end footer -->