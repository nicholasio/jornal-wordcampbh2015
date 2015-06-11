<?php get_header(); ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- 
            Esse Menu estará somente no tema Filho
            <div class="col-md-3">
                <p class="lead">Shop Name</p>
                <div class="list-group">
                    <a href="#" class="list-group-item">Category 1</a>
                    <a href="#" class="list-group-item">Category 2</a>
                    <a href="#" class="list-group-item">Category 3</a>
                </div>
            </div> -->

            <div class="col-md-12">

                <?php get_template_part('partials/carrousel', 'home'); ?>

                <div class="row">

                    <?php get_template_part('partials/loop', 'news-ms'); ?>

                </div> <!-- -->

            </div> <!-- col-md-9 -->

        </div>

    </div>
    <!-- /.container -->

<?php get_footer(); ?>
