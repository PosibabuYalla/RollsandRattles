<?php get_header(); ?>

<section class="section">
  <div class="container">
    <div class="section-head reveal">
      <h1 class="section-title">
        <?php
        if ( is_home() && ! is_front_page() ) {
          esc_html_e( 'Latest Posts', 'rolls-and-rattles' );
        } else {
          the_archive_title();
        }
        ?>
      </h1>
    </div>

    <?php if ( have_posts() ) : ?>
      <div class="why-grid">
        <?php while ( have_posts() ) : the_post(); ?>
          <article <?php post_class( 'why-card' ); ?>>
            <?php if ( has_post_thumbnail() ) : ?>
              <div style="margin:-20px -16px 14px;border-radius:20px 20px 0 0;overflow:hidden;">
                <?php the_post_thumbnail( 'medium_large', array( 'style' => 'width:100%;height:auto;display:block;' ) ); ?>
              </div>
            <?php endif; ?>
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 20 ) ); ?></p>
          </article>
        <?php endwhile; ?>
      </div>

      <div class="section-cta">
        <?php the_posts_pagination(); ?>
      </div>
    <?php else : ?>
      <p><?php esc_html_e( 'Nothing found.', 'rolls-and-rattles' ); ?></p>
    <?php endif; ?>
  </div>
</section>

<?php get_footer(); ?>
