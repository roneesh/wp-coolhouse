<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<!-- Should be where column left is -->
<div class="blog-roll-column-left">
  <h2 class="blog-roll-entry-title">
    <a href="<?php the_permalink(); ?>" class="blog-link" title="<?php printf( __('Read %s', 'blankslate'), the_title_attribute('echo=0') ); ?>" rel="bookmark">
      <?php the_title(); ?>
    </a>
  </h2>
  <hr>
  <p> <?php the_date(); ?>  </p>
</div>
<?php // get_template_part( 'entry', 'meta' ); ?>


<?php
if(is_archive() || is_search()){
get_template_part('entry','summary');
} 
else {
get_template_part('entry','content');
}
?>
<?php 
// if ( is_single() ) {
// get_template_part( 'entry-footer', 'single' ); 
// } else {
// get_template_part( 'entry-footer' ); 
// }
?>
</div> 