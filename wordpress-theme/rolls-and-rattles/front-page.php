<?php get_header(); ?>

<section class="hero">
  <div class="container hero-inner">

    <div class="hero-content">
      <h1 class="hero-heading">
        <span class="navy"><?php echo esc_html( rr_hero_line( 'line1', 'Everything' ) ); ?></span>
        <span class="navy"><?php echo esc_html( rr_hero_line( 'line2', 'Your Child Needs,' ) ); ?></span>
        <span class="pink"><?php echo esc_html( rr_hero_line( 'line3', 'Under One Roof' ) ); ?></span>
      </h1>
      <p class="hero-sub"><?php echo nl2br( esc_html( rr_hero_line( 'sub', '4 Massive Floors. 10,000+ Products. Premium Brands. Discount on Every Product.' ) ) ); ?></p>
      <div class="hero-buttons">
        <a href="#categories" class="btn btn-primary">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M6 8h12l-1 12H7L6 8z" stroke="#fff" stroke-width="1.8" stroke-linejoin="round"/><path d="M9 8V6a3 3 0 0 1 6 0v2" stroke="#fff" stroke-width="1.8" stroke-linecap="round"/></svg>
          Explore Products
        </a>
        <a href="#visit" class="btn btn-secondary">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M12 21s7-6.2 7-11.5A7 7 0 0 0 5 9.5C5 14.8 12 21 12 21z" stroke="#FF4D94" stroke-width="1.8" stroke-linejoin="round"/><circle cx="12" cy="9.5" r="2.3" stroke="#FF4D94" stroke-width="1.8"/></svg>
          Visit Showroom
        </a>
      </div>
    </div>

    <div class="hero-image">
      <?php $rr_hero_image = get_theme_mod( 'rr_hero_image', '' ); ?>
      <img src="<?php echo esc_url( $rr_hero_image ? $rr_hero_image : get_template_directory_uri() . '/assets/images/Rolls_and_Rattles_Hero_Image.webp' ); ?>" alt="Happy family shopping at Rolls &amp; Rattles Kids Mart">
    </div>

  </div>

  <div class="container">
    <div class="stats-bar">

      <div class="stat">
        <span class="stat-icon icon-blue">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none"><rect x="4" y="3" width="16" height="18" rx="1.5" stroke="#2F6FED" stroke-width="1.8"/><path d="M8 8h2M14 8h2M8 12h2M14 12h2M8 16h2M14 16h2" stroke="#2F6FED" stroke-width="1.8" stroke-linecap="round"/></svg>
        </span>
        <span class="stat-text"><strong>4</strong><p>Massive Floors</p></span>
      </div>

      <span class="stat-divider"></span>

      <div class="stat">
        <span class="stat-icon icon-pink">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none"><path d="M6 8h12l-1 12H7L6 8z" stroke="#FF4D94" stroke-width="1.8" stroke-linejoin="round"/><path d="M9 8V6a3 3 0 0 1 6 0v2" stroke="#FF4D94" stroke-width="1.8" stroke-linecap="round"/></svg>
        </span>
        <span class="stat-text"><strong>10,000+</strong><p>Products</p></span>
      </div>

      <span class="stat-divider"></span>

      <div class="stat">
        <span class="stat-icon icon-purple">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none"><path d="M12 3l2.6 5.6 6 .8-4.4 4.2 1 6.1L12 16.8 6.8 19.7l1-6.1L3.4 9.4l6-.8L12 3z" stroke="#8B5CF6" stroke-width="1.8" stroke-linejoin="round"/></svg>
        </span>
        <span class="stat-text"><strong>500+</strong><p>Premium Brands</p></span>
      </div>

      <span class="stat-divider"></span>

      <div class="stat">
        <span class="stat-icon icon-gold">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none"><path d="M11 3h5a2 2 0 0 1 2 2v5a2 2 0 0 1-.6 1.4l-8 8a2 2 0 0 1-2.8 0l-4-4a2 2 0 0 1 0-2.8l8-8A2 2 0 0 1 11 3z" stroke="#E8A317" stroke-width="1.8" stroke-linejoin="round"/><circle cx="15" cy="8" r="1.3" fill="#E8A317"/></svg>
        </span>
        <span class="stat-text"><strong>Discount</strong><p>On Every Product</p></span>
      </div>

    </div>
  </div>
</section>

<!-- ================= SHOP BY CATEGORY ================= -->
<section class="section categories" id="categories">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow">Shop by Category</span>
      <h2 class="section-title">Explore Our <span class="pink">Product Categories</span></h2>
      <p class="section-sub">Everything your child needs&mdash;from newborn care to bicycles&mdash;all under one roof.</p>
    </div>

    <div class="category-grid">

      <a href="<?php echo esc_url( rr_category_link( 'bicycles' ) ); ?>" class="category-tile cat-blue cat-feature reveal">
        <svg class="category-tile-bgicon" width="120" height="120"><use href="#icon-bike"></use></svg>
        <img class="category-tile-photo" src="https://rollsandrattles.in/wp-content/uploads/2026/07/Bicycle-Store.webp" alt="Bicycles at Rolls &amp; Rattles Kids Mart" loading="lazy">
        <div class="category-tile-content">
          <span class="category-tile-icon"><svg class="icon" width="24" height="24"><use href="#icon-bike"></use></svg></span>
          <div class="category-tile-body">
            <h3>Bicycles</h3>
            <p>Largest collection of geared, non-geared, and electric bicycles from trusted brands.</p>
            <span class="category-tile-cta">Shop Bicycles <svg class="icon" width="14" height="14"><use href="#icon-arrow"></use></svg></span>
          </div>
        </div>
      </a>

      <a href="<?php echo esc_url( rr_category_link( 'newborn-essentials' ) ); ?>" class="category-tile cat-pink reveal">
        <svg class="category-tile-bgicon" width="90" height="90"><use href="#icon-baby"></use></svg>
        <img class="category-tile-photo" src="https://rollsandrattles.in/wp-content/uploads/2026/07/Baby-Essentials-store.webp" alt="Newborn Essentials at Rolls &amp; Rattles Kids Mart" loading="lazy">
        <div class="category-tile-content">
          <span class="category-tile-icon"><svg class="icon" width="22" height="22"><use href="#icon-baby"></use></svg></span>
          <div class="category-tile-body">
            <h3>Newborn Essentials</h3>
            <p>Feeding, walkers, prams, strollers, and daily baby care.</p>
            <span class="category-tile-cta">Shop Newborn <svg class="icon" width="14" height="14"><use href="#icon-arrow"></use></svg></span>
          </div>
        </div>
      </a>

      <a href="<?php echo esc_url( rr_category_link( 'ride-on-cars-bikes' ) ); ?>" class="category-tile cat-purple reveal">
        <svg class="category-tile-bgicon" width="90" height="90"><use href="#icon-car"></use></svg>
        <img class="category-tile-photo" src="https://rollsandrattles.in/wp-content/uploads/2026/07/Car-bike-scooty-store.webp" alt="Ride-On Cars &amp; Bikes at Rolls &amp; Rattles Kids Mart" loading="lazy">
        <div class="category-tile-content">
          <span class="category-tile-icon"><svg class="icon" width="22" height="22"><use href="#icon-car"></use></svg></span>
          <div class="category-tile-body">
            <h3>Ride-On Cars &amp; Bikes</h3>
            <p>Battery-operated cars, bikes, and fun mobility toys.</p>
            <span class="category-tile-cta">Shop Ride-Ons <svg class="icon" width="14" height="14"><use href="#icon-arrow"></use></svg></span>
          </div>
        </div>
      </a>

      <a href="<?php echo esc_url( rr_category_link( 'toys' ) ); ?>" class="category-tile cat-gold reveal">
        <svg class="category-tile-bgicon" width="90" height="90"><use href="#icon-toy"></use></svg>
        <img class="category-tile-photo" src="https://rollsandrattles.in/wp-content/uploads/2026/07/Playful-toys-store-1.webp" alt="Toys at Rolls &amp; Rattles Kids Mart" loading="lazy">
        <div class="category-tile-content">
          <span class="category-tile-icon"><svg class="icon" width="22" height="22"><use href="#icon-toy"></use></svg></span>
          <div class="category-tile-body">
            <h3>Toys</h3>
            <p>Educational toys, soft toys, puzzles, and board games.</p>
            <span class="category-tile-cta">Shop Toys <svg class="icon" width="14" height="14"><use href="#icon-arrow"></use></svg></span>
          </div>
        </div>
      </a>

      <a href="<?php echo esc_url( rr_category_link( 'sports' ) ); ?>" class="category-tile cat-green cat-wide reveal">
        <svg class="category-tile-bgicon" width="100" height="100"><use href="#icon-trophy"></use></svg>
        <img class="category-tile-photo" src="https://rollsandrattles.in/wp-content/uploads/2026/07/Sports-Store.webp" alt="Sports at Rolls &amp; Rattles Kids Mart" loading="lazy">
        <div class="category-tile-content">
          <span class="category-tile-icon"><svg class="icon" width="24" height="24"><use href="#icon-trophy"></use></svg></span>
          <div class="category-tile-body">
            <h3>Sports</h3>
            <p>Cricket, football, badminton, skating, swimming, and outdoor play equipment.</p>
            <span class="category-tile-cta">Shop Sports Gear <svg class="icon" width="14" height="14"><use href="#icon-arrow"></use></svg></span>
          </div>
        </div>
      </a>

      <a href="<?php echo esc_url( rr_category_link( 'stationery' ) ); ?>" class="category-tile cat-blue reveal">
        <svg class="category-tile-bgicon" width="90" height="90"><use href="#icon-book"></use></svg>
        <img class="category-tile-photo" src="https://rollsandrattles.in/wp-content/uploads/2026/07/Stationary-Store.webp" alt="Stationery at Rolls &amp; Rattles Kids Mart" loading="lazy">
        <div class="category-tile-content">
          <span class="category-tile-icon"><svg class="icon" width="22" height="22"><use href="#icon-book"></use></svg></span>
          <div class="category-tile-body">
            <h3>Stationery</h3>
            <p>School essentials, art supplies, and craft products.</p>
            <span class="category-tile-cta">Shop Stationery <svg class="icon" width="14" height="14"><use href="#icon-arrow"></use></svg></span>
          </div>
        </div>
      </a>

      <a href="<?php echo esc_url( rr_category_link( 'clothing' ) ); ?>" class="category-tile cat-pink reveal">
        <svg class="category-tile-bgicon" width="90" height="90"><use href="#icon-shirt"></use></svg>
        <img class="category-tile-photo" src="https://rollsandrattles.in/wp-content/uploads/2026/07/Kids-clothing-Store.webp" alt="Clothing at Rolls &amp; Rattles Kids Mart" loading="lazy">
        <div class="category-tile-content">
          <span class="category-tile-icon"><svg class="icon" width="22" height="22"><use href="#icon-shirt"></use></svg></span>
          <div class="category-tile-body">
            <h3>Clothing (0&ndash;6 Years)</h3>
            <p>Casual wear, party wear, and themed dresses.</p>
            <span class="category-tile-cta">Shop Clothing <svg class="icon" width="14" height="14"><use href="#icon-arrow"></use></svg></span>
          </div>
        </div>
      </a>

      <a href="<?php echo esc_url( rr_category_link( 'footwear' ) ); ?>" class="category-tile cat-purple reveal">
        <svg class="category-tile-bgicon" width="90" height="90"><use href="#icon-shoe"></use></svg>
        <img class="category-tile-photo" src="https://rollsandrattles.in/wp-content/uploads/2026/07/Kids-Footwear-Store.webp" alt="Footwear at Rolls &amp; Rattles Kids Mart" loading="lazy">
        <div class="category-tile-content">
          <span class="category-tile-icon"><svg class="icon" width="22" height="22"><use href="#icon-shoe"></use></svg></span>
          <div class="category-tile-body">
            <h3>Footwear (0&ndash;6 Years)</h3>
            <p>Comfortable and stylish footwear for babies and kids.</p>
            <span class="category-tile-cta">Shop Footwear <svg class="icon" width="14" height="14"><use href="#icon-arrow"></use></svg></span>
          </div>
        </div>
      </a>

    </div>
  </div>
</section>

<!-- ================= EXPLORE OUR 4 FLOORS ================= -->
<section class="section floors" id="floors">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow">Explore Our 4 Floors</span>
      <h2 class="section-title">Discover <span class="pink">Every Floor</span></h2>
      <p class="section-sub">Each floor is thoughtfully organized to help you find exactly what your child needs.</p>
    </div>

    <div class="floor-tabs reveal" id="floorTabs">
      <button class="floor-tab active" type="button" data-floor="ground"><span class="floor-tab-badge">G</span>Ground Floor</button>
      <button class="floor-tab" type="button" data-floor="first"><span class="floor-tab-badge">1</span>First Floor</button>
      <button class="floor-tab" type="button" data-floor="second"><span class="floor-tab-badge">2</span>Second Floor</button>
      <button class="floor-tab" type="button" data-floor="third"><span class="floor-tab-badge">3</span>Third Floor</button>
    </div>

    <div class="floor-panels reveal">

      <div class="floor-panel active" data-floor="ground">
        <div class="floor-panel-head">
          <span class="floor-panel-icon icon-blue"><svg class="icon" width="26" height="26"><use href="#icon-bike"></use></svg></span>
          <div>
            <span class="floor-panel-eyebrow">Ground Floor</span>
            <h3>Bicycle World</h3>
          </div>
        </div>
        <div class="floor-groups">
          <div class="floor-group">
            <h4>Categories</h4>
            <ul class="floor-list">
              <li>Non-Geared Cycles</li>
              <li>Geared Cycles</li>
              <li>Electric Cycles</li>
              <li>Kids Cycles</li>
              <li>Teen Cycles</li>
            </ul>
          </div>
          <div class="floor-group">
            <h4>Brands</h4>
            <div class="brand-chips">
              <span class="brand-chip">Hero</span>
              <span class="brand-chip">Kross</span>
              <span class="brand-chip">BSA</span>
              <span class="brand-chip">Allwyn</span>
              <span class="brand-chip">OyeKid</span>
              <span class="brand-chip">Owpee</span>
              <span class="brand-chip">R for Rabbit</span>
            </div>
          </div>
        </div>
      </div>

      <div class="floor-panel" data-floor="first">
        <div class="floor-panel-head">
          <span class="floor-panel-icon icon-pink"><svg class="icon" width="26" height="26"><use href="#icon-baby"></use></svg></span>
          <div>
            <span class="floor-panel-eyebrow">First Floor</span>
            <h3>Kids Mobility &amp; Sports</h3>
          </div>
        </div>
        <div class="floor-groups floor-groups--3">
          <div class="floor-group">
            <h4>Mobility</h4>
            <ul class="floor-list">
              <li>Walkers</li>
              <li>Prams</li>
              <li>Strollers</li>
              <li>Baby Chairs</li>
              <li>Tricycles</li>
              <li>Cradles</li>
            </ul>
          </div>
          <div class="floor-group">
            <h4>Ride-On Collection</h4>
            <ul class="floor-list">
              <li>Battery Cars</li>
              <li>Battery Bikes</li>
            </ul>
          </div>
          <div class="floor-group">
            <h4>Sports</h4>
            <ul class="floor-list">
              <li>Cricket</li>
              <li>Football</li>
              <li>Badminton</li>
              <li>Swimming</li>
              <li>Skating</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="floor-panel" data-floor="second">
        <div class="floor-panel-head">
          <span class="floor-panel-icon icon-purple"><svg class="icon" width="26" height="26"><use href="#icon-toy"></use></svg></span>
          <div>
            <span class="floor-panel-eyebrow">Second Floor</span>
            <h3>Baby &amp; Toy World</h3>
          </div>
        </div>
        <div class="floor-groups floor-groups--3">
          <div class="floor-group">
            <h4>Newborn Essentials</h4>
            <ul class="floor-list">
              <li>Baby Care</li>
              <li>Feeding</li>
              <li>Bath</li>
              <li>Hygiene</li>
            </ul>
          </div>
          <div class="floor-group">
            <h4>Toys</h4>
            <ul class="floor-list">
              <li>Soft Toys</li>
              <li>Educational Toys</li>
              <li>Board Games</li>
              <li>Learning Toys</li>
            </ul>
          </div>
          <div class="floor-group">
            <h4>Other</h4>
            <ul class="floor-list">
              <li>Birthday Decorations</li>
              <li>Stationery</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="floor-panel" data-floor="third">
        <div class="floor-panel-head">
          <span class="floor-panel-icon icon-gold"><svg class="icon" width="26" height="26"><use href="#icon-shirt"></use></svg></span>
          <div>
            <span class="floor-panel-eyebrow">Third Floor</span>
            <h3>Fashion Corner</h3>
          </div>
        </div>
        <div class="floor-groups floor-groups--3">
          <div class="floor-group">
            <h4>Clothing</h4>
            <ul class="floor-list">
              <li>Daily Wear</li>
              <li>Party Wear</li>
              <li>Theme Dresses</li>
            </ul>
          </div>
          <div class="floor-group">
            <h4>Footwear</h4>
            <ul class="floor-list">
              <li>Shoes</li>
              <li>Sandals</li>
              <li>Baby Footwear</li>
            </ul>
          </div>
          <div class="floor-group">
            <h4>Age Group</h4>
            <ul class="floor-list">
              <li>0&ndash;6 Years</li>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ================= WHY CHOOSE R&R ================= -->
<section class="section why" id="why">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow">Why Choose R&amp;R</span>
      <h2 class="section-title">Why Families Choose <span class="pink">Rolls &amp; Rattles</span></h2>
    </div>

    <div class="why-grid">
      <div class="why-card reveal">
        <span class="why-icon icon-blue"><svg class="icon" width="24" height="24"><use href="#icon-store"></use></svg></span>
        <h3>4 Massive Floors</h3>
        <p>One of the largest kids shopping destinations in Vijayawada.</p>
      </div>
      <div class="why-card reveal">
        <span class="why-icon icon-pink"><svg class="icon" width="24" height="24"><use href="#icon-bike"></use></svg></span>
        <h3>Huge Bicycle Collection</h3>
        <p>Geared, non-geared, and electric bicycles from trusted brands.</p>
      </div>
      <div class="why-card reveal">
        <span class="why-icon icon-purple"><svg class="icon" width="24" height="24"><use href="#icon-baby"></use></svg></span>
        <h3>Complete Newborn Solutions</h3>
        <p>Everything parents need from birth onwards.</p>
      </div>
      <div class="why-card reveal">
        <span class="why-icon icon-gold"><svg class="icon" width="24" height="24"><use href="#icon-bag"></use></svg></span>
        <h3>One Stop Kids Store</h3>
        <p>Toys, sports, clothing, footwear, and baby essentials under one roof.</p>
      </div>
      <div class="why-card reveal">
        <span class="why-icon icon-green"><svg class="icon" width="24" height="24"><use href="#icon-tag"></use></svg></span>
        <h3>Discount Pricing</h3>
        <p>Enjoy attractive discounts across all categories.</p>
      </div>
      <div class="why-card reveal">
        <span class="why-icon icon-blue"><svg class="icon" width="24" height="24"><use href="#icon-truck"></use></svg></span>
        <h3>Convenient Shopping</h3>
        <p>In-store shopping, pickup, and home delivery available.</p>
      </div>
      <div class="why-card reveal">
        <span class="why-icon icon-pink"><svg class="icon" width="24" height="24"><use href="#icon-star"></use></svg></span>
        <h3>Trusted Brands</h3>
        <p>Only quality products from well-known manufacturers.</p>
      </div>
      <div class="why-card reveal">
        <span class="why-icon icon-purple"><svg class="icon" width="24" height="24"><use href="#icon-family"></use></svg></span>
        <h3>Family Friendly Experience</h3>
        <p>Spacious showroom with dedicated sections for easy shopping.</p>
      </div>
    </div>
  </div>
</section>

<!-- ================= FEATURED BRANDS ================= -->
<section class="section brands" id="brands">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow">Featured Brands</span>
      <h2 class="section-title">Trusted Brands <span class="pink">We Offer</span></h2>
    </div>

    <p class="brand-group-title reveal">Bicycle Brands</p>
  </div>

  <div class="brand-marquee reveal">
    <div class="brand-track">
      <span class="brand-pill">Hero</span>
      <span class="brand-pill">Kross</span>
      <span class="brand-pill">BSA</span>
      <span class="brand-pill">Allwyn</span>
      <span class="brand-pill">OyeKid</span>
      <span class="brand-pill">Owpee</span>
      <span class="brand-pill">R for Rabbit</span>
      <span class="brand-pill" aria-hidden="true">Hero</span>
      <span class="brand-pill" aria-hidden="true">Kross</span>
      <span class="brand-pill" aria-hidden="true">BSA</span>
      <span class="brand-pill" aria-hidden="true">Allwyn</span>
      <span class="brand-pill" aria-hidden="true">OyeKid</span>
      <span class="brand-pill" aria-hidden="true">Owpee</span>
      <span class="brand-pill" aria-hidden="true">R for Rabbit</span>
    </div>
  </div>

  <div class="container">
    <p class="brand-note reveal">More brands across baby care, toys, clothing, and sports coming soon.</p>
  </div>
</section>

<!-- ================= GALLERY ================= -->
<section class="section gallery" id="gallery">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow">Gallery</span>
      <h2 class="section-title">A Glimpse <span class="pink">Inside Our Store</span></h2>
    </div>

    <div class="gallery-grid">
      <div class="gallery-tile reveal">
        <img src="https://rollsandrattles.in/wp-content/uploads/2026/07/Rolls-And-Rattles-shop-in-Vijayawada-Poranki.webp" alt="Rolls &amp; Rattles Kids Mart showroom exterior in Poranki, Vijayawada" loading="lazy">
        <span class="gallery-label">Showroom Exterior</span>
      </div>
      <div class="gallery-tile reveal">
        <img src="https://rollsandrattles.in/wp-content/uploads/2026/07/Cycles-store-in-vijayawada.webp" alt="Bicycle section at Rolls &amp; Rattles Kids Mart, Vijayawada" loading="lazy">
        <span class="gallery-label">Bicycle Section</span>
      </div>
      <div class="gallery-tile reveal">
        <img src="https://rollsandrattles.in/wp-content/uploads/2026/07/Cycles-shop-in-poranki-vijayawada.webp" alt="Cycle showroom at Rolls &amp; Rattles Kids Mart, Poranki" loading="lazy">
        <span class="gallery-label">Cycle Showroom</span>
      </div>
      <div class="gallery-tile reveal">
        <img src="https://rollsandrattles.in/wp-content/uploads/2026/07/Car-Toys-in-Rolls-and-Rattles.webp" alt="Ride-on cars and toy cars at Rolls &amp; Rattles Kids Mart" loading="lazy">
        <span class="gallery-label">Ride-On Cars</span>
      </div>
      <div class="gallery-tile reveal">
        <img src="https://rollsandrattles.in/wp-content/uploads/2026/07/Toys-in-Rolls-and-Rattles.webp" alt="Toy collection at Rolls &amp; Rattles Kids Mart" loading="lazy">
        <span class="gallery-label">Toy World</span>
      </div>
      <div class="gallery-tile reveal">
        <img src="https://rollsandrattles.in/wp-content/uploads/2026/07/Kids-gift-store.webp" alt="Kids gift store section at Rolls &amp; Rattles Kids Mart" loading="lazy">
        <span class="gallery-label">Kids Gift Store</span>
      </div>
      <div class="gallery-tile gallery-placeholder reveal" style="--g1:#DDF3F5;--g2:#B8C6E0;">
        <svg class="icon gallery-icon" width="30" height="30"><use href="#icon-camera"></use></svg>
        <span class="gallery-label gallery-label--static">Photo Coming Soon</span>
      </div>
      <div class="gallery-tile gallery-placeholder reveal" style="--g1:#FFF1F5;--g2:#ECAACC;">
        <svg class="icon gallery-icon" width="30" height="30"><use href="#icon-camera"></use></svg>
        <span class="gallery-label gallery-label--static">Photo Coming Soon</span>
      </div>
    </div>
  </div>
</section>

<!-- ================= CUSTOMER REVIEWS ================= -->
<section class="section reviews" id="reviews">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow">Customer Reviews</span>
      <h2 class="section-title">What Parents <span class="pink">Say About Us</span></h2>
      <div class="rating-badge">
        <span class="rating-stars">★★★★★</span>
        <span>Google Rating</span>
      </div>
    </div>

    <div class="review-grid">
      <?php
      $rr_avatar_colors = array( 'icon-blue', 'icon-pink', 'icon-purple' );
      $rr_reviews_query = rr_get_reviews( 6 );
      if ( $rr_reviews_query ) :
        $rr_i = 0;
        while ( $rr_reviews_query->have_posts() ) : $rr_reviews_query->the_post();
          $rr_stars = (int) get_post_meta( get_the_ID(), 'rr_stars', true );
          if ( ! $rr_stars ) { $rr_stars = 5; }
          ?>
          <div class="review-card reveal">
            <span class="review-stars"><?php echo esc_html( str_repeat( '★', $rr_stars ) ); ?></span>
            <p class="review-text"><?php the_content(); ?></p>
            <div class="review-author">
              <span class="review-avatar <?php echo esc_attr( $rr_avatar_colors[ $rr_i % 3 ] ); ?>"><svg class="icon" width="18" height="18"><use href="#icon-user"></use></svg></span>
              <div><strong><?php the_title(); ?></strong><span>Verified Customer</span></div>
            </div>
          </div>
          <?php
          $rr_i++;
        endwhile;
        wp_reset_postdata();
      else :
        foreach ( rr_default_reviews() as $rr_i => $rr_review ) :
          ?>
          <div class="review-card reveal">
            <span class="review-stars">★★★★★</span>
            <p class="review-text"><?php echo esc_html( $rr_review['text'] ); ?></p>
            <div class="review-author">
              <span class="review-avatar <?php echo esc_attr( $rr_avatar_colors[ $rr_i % 3 ] ); ?>"><svg class="icon" width="18" height="18"><use href="#icon-user"></use></svg></span>
              <div><strong>Store Visit</strong><span><?php echo esc_html( $rr_review['name'] ); ?></span></div>
            </div>
          </div>
          <?php
        endforeach;
      endif;
      ?>
    </div>

    <div class="section-cta reveal">
      <a href="#" class="btn btn-secondary">Read More Reviews</a>
    </div>
  </div>
</section>

<!-- ================= VISIT OUR SHOWROOM ================= -->
<section class="section visit" id="visit">
  <div class="container visit-inner">

    <div class="visit-info reveal">
      <span class="eyebrow">Visit Our Showroom</span>
      <h2 class="section-title left">Visit Rolls &amp; Rattles <span class="pink">Today</span></h2>

      <div class="visit-detail">
        <span class="visit-icon"><svg class="icon" width="19" height="19"><use href="#icon-pin"></use></svg></span>
        <div>
          <strong>Address</strong>
          <p><?php echo esc_html( rr_address() ); ?></p>
        </div>
      </div>

      <div class="visit-detail">
        <span class="visit-icon"><svg class="icon" width="19" height="19"><use href="#icon-clock"></use></svg></span>
        <div>
          <strong>Business Hours</strong>
          <p><?php echo esc_html( rr_hours() ); ?></p>
        </div>
      </div>

      <div class="visit-detail">
        <span class="visit-icon"><svg class="icon" width="19" height="19"><use href="#icon-phone"></use></svg></span>
        <div>
          <strong>Contact</strong>
          <p><?php echo esc_html( rr_phone() ); ?></p>
        </div>
      </div>

      <div class="visit-buttons">
        <a href="<?php echo esc_url( rr_maps_directions_url() ); ?>" target="_blank" rel="noopener" class="btn btn-primary"><svg class="icon" width="18" height="18"><use href="#icon-pin"></use></svg>Get Directions</a>
        <a href="tel:<?php echo esc_attr( rr_phone_tel() ); ?>" class="btn btn-secondary"><svg class="icon" width="18" height="18"><use href="#icon-phone"></use></svg>Call Now</a>
        <a href="<?php echo esc_url( rr_whatsapp_link() ); ?>" target="_blank" rel="noopener" class="whatsapp-btn"><svg class="icon" width="18" height="18"><use href="#icon-whatsapp"></use></svg><span>WhatsApp</span></a>
      </div>
    </div>

    <div class="visit-visual reveal">
      <div class="visit-map">
        <iframe
          src="<?php echo esc_url( rr_maps_embed_url() ); ?>"
          title="Rolls &amp; Rattles Kids Mart location on Google Maps"
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          allowfullscreen>
        </iframe>
      </div>
    </div>

  </div>
</section>

<?php get_footer(); ?>
