<?php get_header(); ?>

<section class="section">
  <div class="container">
    <?php
    while ( have_posts() ) :
      the_post();
      ?>
      <div class="section-head reveal">
        <h1 class="section-title"><?php the_title(); ?></h1>
      </div>

      <div style="max-width:820px;margin:0 auto;font-size:15px;line-height:1.7;color:var(--gray);">
        <?php the_content(); ?>
      </div>
    <?php endwhile; ?>
  </div>
</section>

<?php get_footer(); ?>
