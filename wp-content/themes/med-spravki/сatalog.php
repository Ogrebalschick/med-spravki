<?php
/*
Template Name: catalog

*/
?>
<?php get_header() ?>

 <div class="container">
<ul>
    <?php echo do_shortcode('[product_categories]')?>
   <?php $pages = get_pages( $args ); ?>
</ul>
 
 </div>
<?php get_footer(); ?>