<?php get_header(); ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <?php get_sidebar(); ?>
            </div>

            <div class="col-md-9">

                <div class="row">

                    <?php if ( have_posts() ) : while( have_posts() ) : the_post();  ?>
                        <h1><?php the_title(); ?></h1>
                        <?php the_content(); ?>
                    <?php endwhile; endif; ?>

                </div> <!-- -->

            </div> <!-- col-md-9 -->

        </div>

    </div>
    <!-- /.container -->

<?php get_footer(); ?>
