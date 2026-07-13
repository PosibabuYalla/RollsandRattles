<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<svg style="position:absolute; width:0; height:0; overflow:hidden;" aria-hidden="true">
  <defs>
    <symbol id="icon-bike" viewBox="0 0 24 24">
      <circle cx="5.5" cy="17.5" r="3.5" fill="none" stroke="currentColor" stroke-width="1.8"/>
      <circle cx="18.5" cy="17.5" r="3.5" fill="none" stroke="currentColor" stroke-width="1.8"/>
      <path d="M15 6a1 1 0 1 0 0-2 1 1 0 0 0 0 2zM12 17.5V14l-3-3 4-3 2 3h2" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
    </symbol>
    <symbol id="icon-baby" viewBox="0 0 24 24">
      <circle cx="7" cy="19" r="2" fill="none" stroke="currentColor" stroke-width="1.8"/>
      <circle cx="16" cy="19" r="2" fill="none" stroke="currentColor" stroke-width="1.8"/>
      <path d="M7 17h9l2-6a4 4 0 0 0-4-3H9a4 4 0 0 0-4 4M18 8l2-2" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
    </symbol>
    <symbol id="icon-car" viewBox="0 0 24 24">
      <path d="M3 13l1.5-4.5A2 2 0 0 1 6.4 7h11.2a2 2 0 0 1 1.9 1.5L21 13" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
      <rect x="2" y="13" width="20" height="5" rx="1.5" fill="none" stroke="currentColor" stroke-width="1.8"/>
      <circle cx="7" cy="18.3" r="1.7" fill="none" stroke="currentColor" stroke-width="1.8"/>
      <circle cx="17" cy="18.3" r="1.7" fill="none" stroke="currentColor" stroke-width="1.8"/>
    </symbol>
    <symbol id="icon-toy" viewBox="0 0 24 24">
      <rect x="3" y="10.5" width="7" height="7" rx="1.5" fill="none" stroke="currentColor" stroke-width="1.8"/>
      <rect x="14" y="10.5" width="7" height="7" rx="1.5" fill="none" stroke="currentColor" stroke-width="1.8"/>
      <rect x="8.5" y="3.5" width="7" height="7" rx="1.5" fill="none" stroke="currentColor" stroke-width="1.8"/>
    </symbol>
    <symbol id="icon-trophy" viewBox="0 0 24 24">
      <path d="M8 4h8v4a4 4 0 0 1-8 0V4z" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/>
      <path d="M8 5H5a2 2 0 0 0 0 4h1M16 5h3a2 2 0 0 1 0 4h-1" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
      <path d="M12 12v3M9 20h6M9.5 17h5l.5 3H9l.5-3z" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
    </symbol>
    <symbol id="icon-book" viewBox="0 0 24 24">
      <path d="M4 5.5A2.5 2.5 0 0 1 6.5 3H12v17H6.5A2.5 2.5 0 0 0 4 22V5.5z" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/>
      <path d="M20 5.5A2.5 2.5 0 0 0 17.5 3H12v17h5.5a2.5 2.5 0 0 1 2.5 2" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/>
    </symbol>
    <symbol id="icon-shirt" viewBox="0 0 24 24">
      <path d="M8 3l4 2 4-2 4 4-3 3v11H7V10L4 7l4-4z" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/>
    </symbol>
    <symbol id="icon-shoe" viewBox="0 0 24 24">
      <path d="M3 18v-3.5c0-.8.5-1.5 1.3-1.8L10 10.5 14 6c.6-.6 1.6-.6 2.2 0L18 7.8c.7.7 1.8.9 2.7.5l.6-.3c.8-.4 1.7.4 1.4 1.2l-.7 2c-.3.9-1.1 1.5-2 1.5H8l-2 3H3z" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M3 18h18" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/>
    </symbol>
    <symbol id="icon-store" viewBox="0 0 24 24">
      <rect x="4" y="3" width="16" height="18" rx="1.5" fill="none" stroke="currentColor" stroke-width="1.8"/>
      <path d="M8 8h2M14 8h2M8 12h2M14 12h2M8 16h2M14 16h2" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
    </symbol>
    <symbol id="icon-tag" viewBox="0 0 24 24">
      <path d="M11 3h5a2 2 0 0 1 2 2v5a2 2 0 0 1-.6 1.4l-8 8a2 2 0 0 1-2.8 0l-4-4a2 2 0 0 1 0-2.8l8-8A2 2 0 0 1 11 3z" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/>
      <circle cx="15" cy="8" r="1.3" fill="currentColor" stroke="none"/>
    </symbol>
    <symbol id="icon-truck" viewBox="0 0 24 24">
      <path d="M3 7h11v9H3z" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/>
      <path d="M14 10h4l3 3v3h-7z" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/>
      <circle cx="7" cy="18" r="1.6" fill="none" stroke="currentColor" stroke-width="1.6"/>
      <circle cx="17.5" cy="18" r="1.6" fill="none" stroke="currentColor" stroke-width="1.6"/>
    </symbol>
    <symbol id="icon-star" viewBox="0 0 24 24">
      <path d="M12 3l2.6 5.6 6 .8-4.4 4.2 1 6.1L12 16.8 6.8 19.7l1-6.1L3.4 9.4l6-.8L12 3z" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/>
    </symbol>
    <symbol id="icon-family" viewBox="0 0 24 24">
      <circle cx="8" cy="7" r="2.5" fill="none" stroke="currentColor" stroke-width="1.8"/>
      <circle cx="16" cy="7" r="2" fill="none" stroke="currentColor" stroke-width="1.8"/>
      <path d="M3 20v-2a4 4 0 0 1 4-4h2a4 4 0 0 1 4 4v2M14 20v-1.5a3.5 3.5 0 0 1 3.5-3.5h1a3.5 3.5 0 0 1 3.5 3.5V20" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
    </symbol>
    <symbol id="icon-bag" viewBox="0 0 24 24">
      <path d="M6 8h12l-1 12H7L6 8z" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/>
      <path d="M9 8V6a3 3 0 0 1 6 0v2" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
    </symbol>
    <symbol id="icon-pin" viewBox="0 0 24 24">
      <path d="M12 21s7-6.2 7-11.5A7 7 0 0 0 5 9.5C5 14.8 12 21 12 21z" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/>
      <circle cx="12" cy="9.5" r="2.3" fill="none" stroke="currentColor" stroke-width="1.8"/>
    </symbol>
    <symbol id="icon-clock" viewBox="0 0 24 24">
      <circle cx="12" cy="12" r="9" fill="none" stroke="currentColor" stroke-width="1.8"/>
      <path d="M12 7v5l3.5 2" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
    </symbol>
    <symbol id="icon-camera" viewBox="0 0 24 24">
      <path d="M4 8h3l1.5-2h7L17 8h3a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/>
      <circle cx="12" cy="14" r="3.5" fill="none" stroke="currentColor" stroke-width="1.8"/>
    </symbol>
    <symbol id="icon-user" viewBox="0 0 24 24">
      <circle cx="12" cy="8" r="4" fill="none" stroke="currentColor" stroke-width="1.8"/>
      <path d="M4 20c0-4 3.6-7 8-7s8 3 8 7" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
    </symbol>
    <symbol id="icon-phone" viewBox="0 0 24 24">
      <path d="M6.6 10.8c1.4 2.7 3.6 4.9 6.3 6.3l2.1-2.1c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.6 21 3 13.4 3 4c0-.6.4-1 1-1h3.6c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.4 0 .8-.3 1.1L6.6 10.8z" fill="currentColor" stroke="none"/>
    </symbol>
    <symbol id="icon-whatsapp" viewBox="0 0 24 24">
      <path d="M12 2C6.5 2 2 6.5 2 12c0 1.8.5 3.5 1.3 5L2 22l5.2-1.4c1.4.8 3.1 1.2 4.8 1.2 5.5 0 10-4.5 10-10S17.5 2 12 2zm5.9 14.2c-.2.7-1.4 1.3-2 1.4-.5.1-1.2.1-1.9-.1-.4-.1-1-.3-1.7-.7-3-1.3-5-4.3-5.1-4.5-.2-.2-1.2-1.6-1.2-3.1s.8-2.2 1.1-2.5c.3-.3.6-.4.8-.4h.6c.2 0 .5 0 .7.5.3.7.9 2.2 1 2.4.1.2.2.4 0 .6-.1.2-.2.4-.4.6-.2.2-.4.5-.6.6-.2.2-.4.4-.2.8.2.4 1 1.6 2.1 2.6 1.4 1.3 2.6 1.7 3 1.9.4.2.6.1.8-.1.2-.2.9-1 1.1-1.4.2-.4.4-.3.7-.2.3.1 1.8.9 2.1 1 .3.2.5.2.6.4.1.2.1.9-.1 1.6z" fill="currentColor" stroke="none"/>
    </symbol>
    <symbol id="icon-arrow" viewBox="0 0 24 24">
      <path d="M5 12h14M13 6l6 6-6 6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    </symbol>
    <symbol id="icon-bottle" viewBox="0 0 24 24">
      <path d="M9 3h6M10 3v3.5l-2 2V19a2 2 0 0 0 2 2h4a2 2 0 0 0 2-2V8.5l-2-2V3" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M8 13h8" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
    </symbol>
    <symbol id="icon-stroller" viewBox="0 0 24 24">
      <path d="M5 8h9l3 4.5" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M6 8V6a2 2 0 0 1 2-2" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
      <circle cx="7.5" cy="18.5" r="2" fill="none" stroke="currentColor" stroke-width="1.8"/>
      <circle cx="16.5" cy="18.5" r="2" fill="none" stroke="currentColor" stroke-width="1.8"/>
      <path d="M4 12.5h14.5M7.5 16.5V12.5M16.5 16.5v-2" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
    </symbol>
    <symbol id="icon-mail" viewBox="0 0 24 24">
      <rect x="3" y="5" width="18" height="14" rx="2" fill="none" stroke="currentColor" stroke-width="1.8"/>
      <path d="M4 6.5l8 6 8-6" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
    </symbol>
    <symbol id="icon-chat" viewBox="0 0 24 24">
      <path d="M4 5.5h16a1 1 0 0 1 1 1V15a1 1 0 0 1-1 1H9l-4.2 3.6a.5.5 0 0 1-.8-.4V16H4a1 1 0 0 1-1-1V6.5a1 1 0 0 1 1-1z" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/>
    </symbol>
    <symbol id="icon-parking" viewBox="0 0 24 24">
      <rect x="3" y="3" width="18" height="18" rx="5" fill="none" stroke="currentColor" stroke-width="1.8"/>
      <path d="M9.5 16.5v-9H13a3 3 0 0 1 0 6H9.5" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
    </symbol>
    <symbol id="icon-route" viewBox="0 0 24 24">
      <circle cx="5.5" cy="6" r="2.2" fill="none" stroke="currentColor" stroke-width="1.8"/>
      <circle cx="18.5" cy="18" r="2.2" fill="none" stroke="currentColor" stroke-width="1.8"/>
      <path d="M5.5 8.2V12a3 3 0 0 0 3 3h6a3 3 0 0 1 3 3v.2" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-dasharray="2.5 3"/>
    </symbol>
    <symbol id="icon-check" viewBox="0 0 24 24">
      <path d="M5 12.5l4.5 4.5L19 7" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
    </symbol>
    <symbol id="icon-send" viewBox="0 0 24 24">
      <path d="M21 3L10.5 13.5M21 3l-6.5 18-4-8-8-4L21 3z" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
    </symbol>
    <symbol id="icon-shield" viewBox="0 0 24 24">
      <path d="M12 3l7 3v5.5c0 4.6-3 8.4-7 9.5-4-1.1-7-4.9-7-9.5V6l7-3z" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/>
      <path d="M9 12l2 2 4-4.5" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
    </symbol>
    <symbol id="icon-instagram" viewBox="0 0 24 24">
      <rect x="3" y="3" width="18" height="18" rx="6" fill="none" stroke="currentColor" stroke-width="1.8"/>
      <circle cx="12" cy="12" r="4.2" fill="none" stroke="currentColor" stroke-width="1.8"/>
      <circle cx="17.2" cy="6.8" r="1.1" fill="currentColor" stroke="none"/>
    </symbol>
    <symbol id="icon-facebook" viewBox="0 0 24 24">
      <path d="M14 21v-7.5h2.5l.4-3H14V8.2c0-.9.3-1.5 1.6-1.5H17V4.1C16.7 4 15.8 4 14.8 4c-2.2 0-3.7 1.3-3.7 3.8v2.7H8.5v3H11V21h3z" fill="currentColor" stroke="none"/>
    </symbol>
    <symbol id="icon-youtube" viewBox="0 0 24 24">
      <rect x="2" y="5.5" width="20" height="13" rx="4" fill="none" stroke="currentColor" stroke-width="1.8"/>
      <path d="M10 9.5l6 2.5-6 2.5v-5z" fill="currentColor" stroke="none"/>
    </symbol>
  </defs>
</svg>

<header class="site-header" id="siteHeader">
  <div class="container header-inner">

    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
      <?php if ( has_custom_logo() ) : ?>
        <?php the_custom_logo(); ?>
      <?php else : ?>
        <span class="logo-mark">
          <span class="logo-r pink">R</span>
          <svg class="logo-bear" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="10" r="6" fill="#FFD6E7"/>
            <circle cx="28" cy="10" r="6" fill="#CFE6FF"/>
            <circle cx="20" cy="22" r="13" fill="#FFE3A3"/>
            <circle cx="14" cy="20" r="2" fill="#3A2E2E"/>
            <circle cx="26" cy="20" r="2" fill="#3A2E2E"/>
            <circle cx="20" cy="26" r="2.4" fill="#3A2E2E"/>
          </svg>
          <span class="logo-r blue">R</span>
        </span>
      <?php endif; ?>
      <span class="logo-text">
        <span class="brand-name"><span class="pink">Rolls</span> <span class="blue">&amp; Rattles</span></span>
        <span class="brand-sub">Kids Mart</span>
      </span>
    </a>

    <nav class="nav" id="mainNav">
      <ul class="nav-list">
        <li class="nav-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-link<?php echo is_front_page() ? ' active' : ''; ?>">Home</a></li>
        <li class="nav-item"><a href="<?php echo esc_url( rr_page_link( 'about' ) ); ?>" class="nav-link<?php echo is_page( 'about' ) ? ' active' : ''; ?>">About</a></li>

        <li class="nav-item dropdown" id="productsDropdown">
          <button class="nav-link dropdown-toggle" type="button" aria-haspopup="true" aria-expanded="false">
            Products
            <svg class="chevron" width="12" height="8" viewBox="0 0 12 8" fill="none"><path d="M1 1.5L6 6.5L11 1.5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </button>

          <div class="mega-menu">
            <ul class="mega-list">
              <li><a href="<?php echo esc_url( rr_category_link( 'bicycles' ) ); ?>"><span class="mega-thumb" style="background:linear-gradient(135deg,#DDF3F5,#B8C6E0);"><svg class="icon" width="18" height="18"><use href="#icon-bike"></use></svg></span>Bicycles</a></li>
              <li><a href="<?php echo esc_url( rr_category_link( 'newborn-essentials' ) ); ?>"><span class="mega-thumb" style="background:linear-gradient(135deg,#FFF1F5,#ECAACC);"><svg class="icon" width="18" height="18"><use href="#icon-baby"></use></svg></span>Newborn Essentials</a></li>
              <li><a href="<?php echo esc_url( rr_category_link( 'ride-on-cars-bikes' ) ); ?>"><span class="mega-thumb" style="background:linear-gradient(135deg,#DDF3F5,#09ADE9);"><svg class="icon" width="18" height="18"><use href="#icon-car"></use></svg></span>Ride-On Cars &amp; Bikes</a></li>
              <li><a href="<?php echo esc_url( rr_category_link( 'toys' ) ); ?>"><span class="mega-thumb" style="background:linear-gradient(135deg,#FFF1F5,#B8C6E0);"><svg class="icon" width="18" height="18"><use href="#icon-toy"></use></svg></span>Toys</a></li>
              <li><a href="<?php echo esc_url( rr_category_link( 'sports' ) ); ?>"><span class="mega-thumb" style="background:linear-gradient(135deg,#DDF3F5,#ECAACC);"><svg class="icon" width="18" height="18"><use href="#icon-trophy"></use></svg></span>Sports</a></li>
              <li><a href="<?php echo esc_url( rr_category_link( 'stationery' ) ); ?>"><span class="mega-thumb" style="background:linear-gradient(135deg,#FFF1F5,#09ADE9);"><svg class="icon" width="18" height="18"><use href="#icon-book"></use></svg></span>Stationery</a></li>
              <li><a href="<?php echo esc_url( rr_category_link( 'clothing' ) ); ?>"><span class="mega-thumb" style="background:linear-gradient(135deg,#DDF3F5,#ECAACC);"><svg class="icon" width="18" height="18"><use href="#icon-shirt"></use></svg></span>Clothing (0&ndash;6 Years)</a></li>
              <li><a href="<?php echo esc_url( rr_category_link( 'footwear' ) ); ?>"><span class="mega-thumb" style="background:linear-gradient(135deg,#FFF1F5,#B8C6E0);"><svg class="icon" width="18" height="18"><use href="#icon-shoe"></use></svg></span>Footwear (0&ndash;6 Years)</a></li>
            </ul>
          </div>
        </li>

        <li class="nav-item"><a href="<?php echo esc_url( rr_blog_link() ); ?>" class="nav-link">Blog</a></li>
        <li class="nav-item"><a href="<?php echo esc_url( rr_page_link( 'contact' ) ); ?>" class="nav-link<?php echo is_page( 'contact' ) ? ' active' : ''; ?>">Contact</a></li>
      </ul>
    </nav>

    <div class="header-actions">

      <div class="search-wrap" id="searchWrap">
        <form role="search" method="get" class="search-box-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
          <input type="search" class="search-box" id="searchInput" name="s" placeholder="Search products...">
        </form>
        <button class="icon-btn search-btn" id="searchBtn" aria-label="Search">
          <svg width="19" height="19" viewBox="0 0 24 24" fill="none"><circle cx="11" cy="11" r="7" stroke="#1B2A4E" stroke-width="1.8"/><path d="M21 21l-4.3-4.3" stroke="#1B2A4E" stroke-width="1.8" stroke-linecap="round"/></svg>
        </button>
      </div>

      <a href="tel:<?php echo esc_attr( rr_phone_tel() ); ?>" class="call-btn">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none"><path d="M6.6 10.8c1.4 2.7 3.6 4.9 6.3 6.3l2.1-2.1c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.6 21 3 13.4 3 4c0-.6.4-1 1-1h3.6c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.4 0 .8-.3 1.1L6.6 10.8z" fill="#09ADE9"/></svg>
        <span><?php echo esc_html( rr_phone() ); ?></span>
      </a>

      <a href="<?php echo esc_url( rr_whatsapp_link() ); ?>" target="_blank" rel="noopener" class="whatsapp-btn">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M12 2C6.5 2 2 6.5 2 12c0 1.8.5 3.5 1.3 5L2 22l5.2-1.4c1.4.8 3.1 1.2 4.8 1.2 5.5 0 10-4.5 10-10S17.5 2 12 2zm5.9 14.2c-.2.7-1.4 1.3-2 1.4-.5.1-1.2.1-1.9-.1-.4-.1-1-.3-1.7-.7-3-1.3-5-4.3-5.1-4.5-.2-.2-1.2-1.6-1.2-3.1s.8-2.2 1.1-2.5c.3-.3.6-.4.8-.4h.6c.2 0 .5 0 .7.5.3.7.9 2.2 1 2.4.1.2.2.4 0 .6-.1.2-.2.4-.4.6-.2.2-.4.5-.6.6-.2.2-.4.4-.2.8.2.4 1 1.6 2.1 2.6 1.4 1.3 2.6 1.7 3 1.9.4.2.6.1.8-.1.2-.2.9-1 1.1-1.4.2-.4.4-.3.7-.2.3.1 1.8.9 2.1 1 .3.2.5.2.6.4.1.2.1.9-.1 1.6z" fill="#fff"/></svg>
        <span>WhatsApp Us</span>
      </a>

      <button class="hamburger" id="hamburgerBtn" aria-label="Open menu">
        <span></span><span></span><span></span>
      </button>
    </div>

  </div>
</header>

<div class="mobile-overlay" id="mobileOverlay"></div>

<div class="mobile-menu" id="mobileMenu">
  <div class="mobile-menu-head">
    <span class="brand-name"><span class="pink">Rolls</span> <span class="blue">&amp; Rattles</span></span>
    <button class="mobile-close" id="mobileClose" aria-label="Close menu">
      <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M5 5l14 14M19 5L5 19" stroke="#1B2A4E" stroke-width="2" stroke-linecap="round"/></svg>
    </button>
  </div>

  <nav class="mobile-nav">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="mobile-link<?php echo is_front_page() ? ' active' : ''; ?>">Home</a>
    <a href="<?php echo esc_url( rr_page_link( 'about' ) ); ?>" class="mobile-link<?php echo is_page( 'about' ) ? ' active' : ''; ?>">About</a>

    <div class="mobile-accordion">
      <button class="mobile-accordion-toggle" type="button">
        Products
        <svg class="chevron" width="12" height="8" viewBox="0 0 12 8" fill="none"><path d="M1 1.5L6 6.5L11 1.5" stroke="#1B2A4E" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </button>
      <div class="mobile-accordion-panel">
        <a href="<?php echo esc_url( rr_category_link( 'bicycles' ) ); ?>" class="mobile-cat-link"><svg class="icon" width="18" height="18"><use href="#icon-bike"></use></svg>Bicycles</a>
        <a href="<?php echo esc_url( rr_category_link( 'newborn-essentials' ) ); ?>" class="mobile-cat-link"><svg class="icon" width="18" height="18"><use href="#icon-baby"></use></svg>Newborn Essentials</a>
        <a href="<?php echo esc_url( rr_category_link( 'ride-on-cars-bikes' ) ); ?>" class="mobile-cat-link"><svg class="icon" width="18" height="18"><use href="#icon-car"></use></svg>Ride-On Cars &amp; Bikes</a>
        <a href="<?php echo esc_url( rr_category_link( 'toys' ) ); ?>" class="mobile-cat-link"><svg class="icon" width="18" height="18"><use href="#icon-toy"></use></svg>Toys</a>
        <a href="<?php echo esc_url( rr_category_link( 'sports' ) ); ?>" class="mobile-cat-link"><svg class="icon" width="18" height="18"><use href="#icon-trophy"></use></svg>Sports</a>
        <a href="<?php echo esc_url( rr_category_link( 'stationery' ) ); ?>" class="mobile-cat-link"><svg class="icon" width="18" height="18"><use href="#icon-book"></use></svg>Stationery</a>
        <a href="<?php echo esc_url( rr_category_link( 'clothing' ) ); ?>" class="mobile-cat-link"><svg class="icon" width="18" height="18"><use href="#icon-shirt"></use></svg>Clothing (0&ndash;6 Years)</a>
        <a href="<?php echo esc_url( rr_category_link( 'footwear' ) ); ?>" class="mobile-cat-link"><svg class="icon" width="18" height="18"><use href="#icon-shoe"></use></svg>Footwear (0&ndash;6 Years)</a>
      </div>
    </div>

    <a href="<?php echo esc_url( rr_blog_link() ); ?>" class="mobile-link">Blog</a>
    <a href="<?php echo esc_url( rr_page_link( 'contact' ) ); ?>" class="mobile-link<?php echo is_page( 'contact' ) ? ' active' : ''; ?>">Contact</a>
  </nav>

  <div class="mobile-actions">
    <a href="tel:<?php echo esc_attr( rr_phone_tel() ); ?>" class="call-btn">
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none"><path d="M6.6 10.8c1.4 2.7 3.6 4.9 6.3 6.3l2.1-2.1c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.6 21 3 13.4 3 4c0-.6.4-1 1-1h3.6c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.4 0 .8-.3 1.1L6.6 10.8z" fill="#09ADE9"/></svg>
      <span><?php echo esc_html( rr_phone() ); ?></span>
    </a>
    <a href="<?php echo esc_url( rr_whatsapp_link() ); ?>" target="_blank" rel="noopener" class="whatsapp-btn">
      <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M12 2C6.5 2 2 6.5 2 12c0 1.8.5 3.5 1.3 5L2 22l5.2-1.4c1.4.8 3.1 1.2 4.8 1.2 5.5 0 10-4.5 10-10S17.5 2 12 2zm5.9 14.2c-.2.7-1.4 1.3-2 1.4-.5.1-1.2.1-1.9-.1-.4-.1-1-.3-1.7-.7-3-1.3-5-4.3-5.1-4.5-.2-.2-1.2-1.6-1.2-3.1s.8-2.2 1.1-2.5c.3-.3.6-.4.8-.4h.6c.2 0 .5 0 .7.5.3.7.9 2.2 1 2.4.1.2.2.4 0 .6-.1.2-.2.4-.4.6-.2.2-.4.5-.6.6-.2.2-.4.4-.2.8.2.4 1 1.6 2.1 2.6 1.4 1.3 2.6 1.7 3 1.9.4.2.6.1.8-.1.2-.2.9-1 1.1-1.4.2-.4.4-.3.7-.2.3.1 1.8.9 2.1 1 .3.2.5.2.6.4.1.2.1.9-.1 1.6z" fill="#fff"/></svg>
      <span>WhatsApp Us</span>
    </a>
  </div>
</div>
