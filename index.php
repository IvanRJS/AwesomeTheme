
<?php get_header(); ?>

<?php 
if(have_posts(  )):
    while (have_posts()):
        the_post();
?>
  
  <h3><?php the_title(); ?> </h3>
  <small>posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?> on <?php the_category(); ?></small>
  <p><?php the_content(); ?> </p>
  <hr>
  <?php
    endwhile;
endif;    

?>



<?php get_footer(); ?>