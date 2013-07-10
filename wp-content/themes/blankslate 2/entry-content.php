<!-- <div class="entry-content"> -->
<?php  
// if ( has_post_thumbnail() ) {
// the_post_thumbnail();
// } 
?>
<div class="blog-roll-column-right">
  <p>
    <?php the_content('more...'); ?>
  </p>
</div>

<?php  wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'blankslate' ) . '&after=</div>') ?>
<!-- </div> -->