<?php
  
  /*
    Template Name: Blog Homepage
  */ 

?>

<?php get_header(); ?>

<?php query_posts("posts_per_page=5") ?>


<ul class="blog-roll clearfix">

<!-- <div id="content"> -->
<?php //get_template_part( 'nav', 'above' ); ?>
<?php while ( have_posts() ) : the_post() ?>
  <?php global $more; $more = 0; ?>
  <li class="blog-roll-entry clearfix">
      <div class="maxcontainer">
        <?php get_template_part( 'entry' ); ?>
      </div>
  </li>
  <?php //comments_template(); ?>
<?php endwhile; ?>
<?php //get_template_part( 'nav', 'below' ); ?>
<!-- </div> -->
</ul>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>