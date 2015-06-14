<?php get_header(); ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <?php get_sidebar(); ?>

                <?php dynamic_sidebar('main-sidebar'); ?>
            </div>

            <div class="col-md-9">

                <div class="row">

                    <?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
                        <?php get_template_part('partials/post', 'home'); ?>
                    <?php endwhile; endif; ?>

                </div> <!-- -->

            </div> <!-- col-md-9 -->

        </div>

    </div>
    <!-- /.container -->

<?php get_footer(); ?>
