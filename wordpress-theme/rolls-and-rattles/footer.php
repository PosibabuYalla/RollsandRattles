<?php if ( is_active_sidebar( 'rr-before-footer' ) ) : ?>
  <div class="rr-announcement-bar">
    <div class="container">
      <?php dynamic_sidebar( 'rr-before-footer' ); ?>
    </div>
  </div>
<?php endif; ?>

<footer class="site-footer">
  <div class="container footer-inner">
    <div class="footer-brand">
      <span class="brand-name"><span class="pink">Rolls</span> <span class="blue">&amp; Rattles</span></span>
      <span class="brand-sub">Kids Mart</span>
      <p>Everything your child needs, under one roof.</p>
    </div>
    <div class="footer-links">
      <?php
      if ( has_nav_menu( 'footer' ) ) {
        wp_nav_menu( array(
          'theme_location' => 'footer',
          'container'      => false,
          'items_wrap'      => '%3$s',
          'depth'          => 1,
        ) );
      } else {
        ?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
        <a href="<?php echo esc_url( rr_page_link( 'about' ) ); ?>">About</a>
        <a href="<?php echo esc_url( home_url( '/#categories' ) ); ?>">Products</a>
        <a href="<?php echo esc_url( rr_blog_link() ); ?>">Blog</a>
        <a href="<?php echo esc_url( rr_page_link( 'contact' ) ); ?>">Contact</a>
        <?php
      }
      ?>
    </div>
    <div class="footer-contact">
      <a href="tel:<?php echo esc_attr( rr_phone_tel() ); ?>"><svg class="icon" width="16" height="16"><use href="#icon-phone"></use></svg><?php echo esc_html( rr_phone() ); ?></a>
      <a href="<?php echo esc_url( rr_whatsapp_link() ); ?>" target="_blank" rel="noopener"><svg class="icon" width="16" height="16"><use href="#icon-whatsapp"></use></svg>WhatsApp Us</a>
    </div>
  </div>

  <?php if ( is_active_sidebar( 'rr-footer-widgets' ) ) : ?>
    <div class="container rr-footer-widgets">
      <?php dynamic_sidebar( 'rr-footer-widgets' ); ?>
    </div>
  <?php endif; ?>

  <p class="footer-bottom">&copy; <?php echo esc_html( date_i18n( 'Y' ) ); ?> Rolls &amp; Rattles Kids Mart. All rights reserved.</p>
</footer>

<?php wp_footer(); ?>
</body>
</html>
