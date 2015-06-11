<div class="col-sm-4 col-lg-4 col-md-4">
    <div class="thumbnail">

        <?php if ( has_post_thumbnail() ) : ?>
            <?php the_post_thumbnail('post-default'); ?>
        <?php endif; ?>

        <div class="caption">
            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            <p><?php the_excerpt(); ?></p>
        </div>

        <div class="ratings">
            <p class="pull-right">15 comments</p>
            <p>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
            </p>
        </div>
    </div>
</div>