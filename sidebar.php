<p class="lead"><a href="<?php echo home_url(); ?>"><?php echo bloginfo('name'); ?></a></p>
<div class="list-group">
	<?php 
		$categories = get_categories();
		if ( $categories ) : foreach( $categories as $category ) : 
	?>
    	<a href="<?php echo get_category_link($category->term_id); ?>" class="list-group-item"><?php echo $category->cat_name; ?></a>
    <?php endforeach; endif; ?>
</div>