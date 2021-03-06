
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <h1 class="entry-title">
      <?php the_title(); ?>
    </h1>
  </header>
  <div class="entry-content">
    <?php the_content(); ?>
    <?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'impactmt' ), 'after' => '</div>' ) ); ?>
  </div>
  <!-- .entry-content -->
  
  <footer class="entry-meta"> <?php echo impactmt_entry_meta(); ?>
    <?php edit_post_link( __( 'Edit', 'impactmt' ), '<span class="edit-link">', '</span>' ); ?>
  </footer>
  <!-- .entry-meta --> 
  
</article>
<!-- #post -->