<?php

if ( is_multisite() && function_exists('wpcpn_show_posts_section') ) {

    wpcpn_show_posts_section(
        'home_posts', //group slug
        'news',  //sections slug
        array(  //will load the file post-home.php
                'template_slug' => 'partials/post', 
                'template_name' => 'home' 
        )
    );

}
