<?php
/**
 * Template Name: About Page
 */
get_header();
?>

<section class="hero">
  <div class="container hero-inner">

    <div class="hero-content">
      <h1 class="hero-heading">
        <span class="navy">The R&amp;R</span>
        <span class="pink">Experience</span>
      </h1>
      <p class="hero-sub">More than a kids store&mdash;discover a shopping destination where every stage of childhood comes to life.</p>
      <div class="hero-buttons">
        <a href="<?php echo esc_url( home_url( '/#categories' ) ); ?>" class="btn btn-primary">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M6 8h12l-1 12H7L6 8z" stroke="#fff" stroke-width="1.8" stroke-linejoin="round"/><path d="M9 8V6a3 3 0 0 1 6 0v2" stroke="#fff" stroke-width="1.8" stroke-linecap="round"/></svg>
          Explore Products
        </a>
        <a href="#visit" class="btn btn-secondary">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M12 21s7-6.2 7-11.5A7 7 0 0 0 5 9.5C5 14.8 12 21 12 21z" stroke="#FF4D94" stroke-width="1.8" stroke-linejoin="round"/><circle cx="12" cy="9.5" r="2.3" stroke="#FF4D94" stroke-width="1.8"/></svg>
          Visit Showroom
        </a>
      </div>
    </div>

    <div class="hero-image reveal">
      <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Rolls_and_Rattles_Hero_Image.webp' ); ?>" alt="Family exploring the Rolls &amp; Rattles Kids Mart showroom">
    </div>

  </div>

  <div class="container">
    <div class="stats-bar reveal">

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

<!-- ================= 1. EVERY CHILDHOOD JOURNEY STARTS HERE ================= -->
<section class="section journey tint-bg" id="journey">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow">The Growing-Up Path</span>
      <h2 class="section-title">Every Childhood <span class="pink">Journey Starts Here</span></h2>
      <p class="section-sub">From the first lullaby to the first bicycle ride, R&amp;R grows with your child at every single stage.</p>
    </div>

    <div class="journey-path">

      <div class="journey-stage reveal">
        <span class="journey-node icon-pink"><svg class="icon" width="18" height="18"><use href="#icon-baby"></use></svg></span>
        <div class="journey-card">
          <span class="journey-step">Stage 01</span>
          <h3>Newborn</h3>
          <p>Cradles, feeding essentials, and gentle first-touch care for your little one's earliest days.</p>
        </div>
      </div>

      <div class="journey-stage reveal">
        <span class="journey-node icon-blue"><svg class="icon" width="18" height="18"><use href="#icon-bottle"></use></svg></span>
        <div class="journey-card">
          <span class="journey-step">Stage 02</span>
          <h3>Baby Care</h3>
          <p>Bath time, hygiene, and daily-care products that make new parenting a little easier.</p>
        </div>
      </div>

      <div class="journey-stage reveal">
        <span class="journey-node icon-purple"><svg class="icon" width="18" height="18"><use href="#icon-stroller"></use></svg></span>
        <div class="journey-card">
          <span class="journey-step">Stage 03</span>
          <h3>Walkers &amp; Strollers</h3>
          <p>From wobbly first steps to smooth outdoor strolls, we've got the ride covered.</p>
        </div>
      </div>

      <div class="journey-stage reveal">
        <span class="journey-node icon-gold"><svg class="icon" width="18" height="18"><use href="#icon-toy"></use></svg></span>
        <div class="journey-card">
          <span class="journey-step">Stage 04</span>
          <h3>Toys &amp; Learning</h3>
          <p>Educational toys and playful discovery tools that grow curious little minds.</p>
        </div>
      </div>

      <div class="journey-stage reveal">
        <span class="journey-node icon-green"><svg class="icon" width="18" height="18"><use href="#icon-bike"></use></svg></span>
        <div class="journey-card">
          <span class="journey-step">Stage 05</span>
          <h3>First Bicycle</h3>
          <p>The moment every child remembers&mdash;picked from our biggest bicycle collection.</p>
        </div>
      </div>

      <div class="journey-stage reveal">
        <span class="journey-node icon-pink"><svg class="icon" width="18" height="18"><use href="#icon-trophy"></use></svg></span>
        <div class="journey-card">
          <span class="journey-step">Stage 06</span>
          <h3>Sports &amp; Outdoor Fun</h3>
          <p>Cricket bats, footballs, skates, and swim gear for endless outdoor adventures.</p>
        </div>
      </div>

      <div class="journey-stage reveal">
        <span class="journey-node icon-blue"><svg class="icon" width="18" height="18"><use href="#icon-shirt"></use></svg></span>
        <div class="journey-card">
          <span class="journey-step">Stage 07</span>
          <h3>Clothing</h3>
          <p>Everyday wear, party outfits, and themed dresses for every occasion.</p>
        </div>
      </div>

      <div class="journey-stage reveal">
        <span class="journey-node icon-purple"><svg class="icon" width="18" height="18"><use href="#icon-shoe"></use></svg></span>
        <div class="journey-card">
          <span class="journey-step">Stage 08</span>
          <h3>Footwear</h3>
          <p>Comfortable, stylish steps for every stage&mdash;from first shoes to big-kid sneakers.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ================= 2. DISCOVER OUR FOUR WORLDS ================= -->
<section class="section worlds" id="worlds">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow">Four Worlds, One Roof</span>
      <h2 class="section-title">Discover Our <span class="pink">Four Worlds</span></h2>
      <p class="section-sub">Each floor is a world of its own&mdash;step in and explore at your own pace.</p>
    </div>

    <div class="worlds-grid">

      <div class="world-card reveal">
        <img class="world-photo" src="https://rollsandrattles.in/wp-content/uploads/2026/07/Bicycle-Store.webp" alt="Cycle World at Rolls &amp; Rattles Kids Mart" loading="lazy">
        <div class="world-scrim"></div>
        <div class="world-top">
          <span class="world-badge icon-blue"><svg class="icon" width="24" height="24"><use href="#icon-bike"></use></svg></span>
          <span class="world-index">World 01</span>
        </div>
        <div class="world-glass">
          <h3>Cycle World</h3>
          <p class="world-tagline">Where every ride begins&mdash;geared, non-geared, and electric.</p>
          <ul class="world-list">
            <li>Geared Cycles</li>
            <li>Non-Geared Cycles</li>
            <li>Electric Cycles</li>
            <li>Premium Brands</li>
          </ul>
          <span class="world-cta">Explore World <svg class="icon" width="13" height="13"><use href="#icon-arrow"></use></svg></span>
        </div>
      </div>

      <div class="world-card reveal">
        <img class="world-photo" src="https://rollsandrattles.in/wp-content/uploads/2026/07/Baby-Essentials-store.webp" alt="Baby World at Rolls &amp; Rattles Kids Mart" loading="lazy">
        <div class="world-scrim"></div>
        <div class="world-top">
          <span class="world-badge icon-pink"><svg class="icon" width="24" height="24"><use href="#icon-baby"></use></svg></span>
          <span class="world-index">World 02</span>
        </div>
        <div class="world-glass">
          <h3>Baby World</h3>
          <p class="world-tagline">A gentle universe for your newborn, thoughtfully curated.</p>
          <ul class="world-list">
            <li>Newborn Essentials</li>
            <li>Feeding</li>
            <li>Walkers</li>
            <li>Strollers</li>
            <li>Prams</li>
            <li>Cradles</li>
          </ul>
          <span class="world-cta">Explore World <svg class="icon" width="13" height="13"><use href="#icon-arrow"></use></svg></span>
        </div>
      </div>

      <div class="world-card reveal">
        <img class="world-photo" src="https://rollsandrattles.in/wp-content/uploads/2026/07/Playful-toys-store-1.webp" alt="Play World at Rolls &amp; Rattles Kids Mart" loading="lazy">
        <div class="world-scrim"></div>
        <div class="world-top">
          <span class="world-badge icon-purple"><svg class="icon" width="24" height="24"><use href="#icon-toy"></use></svg></span>
          <span class="world-index">World 03</span>
        </div>
        <div class="world-glass">
          <h3>Play World</h3>
          <p class="world-tagline">Where imagination plays all day, every day.</p>
          <ul class="world-list">
            <li>Educational Toys</li>
            <li>Soft Toys</li>
            <li>Games</li>
            <li>Birthday Supplies</li>
            <li>Stationery</li>
          </ul>
          <span class="world-cta">Explore World <svg class="icon" width="13" height="13"><use href="#icon-arrow"></use></svg></span>
        </div>
      </div>

      <div class="world-card reveal">
        <img class="world-photo" src="https://rollsandrattles.in/wp-content/uploads/2026/07/Kids-clothing-Store.webp" alt="Fashion World at Rolls &amp; Rattles Kids Mart" loading="lazy">
        <div class="world-scrim"></div>
        <div class="world-top">
          <span class="world-badge icon-gold"><svg class="icon" width="24" height="24"><use href="#icon-shirt"></use></svg></span>
          <span class="world-index">World 04</span>
        </div>
        <div class="world-glass">
          <h3>Fashion World</h3>
          <p class="world-tagline">Dress up every moment, from playdates to parties.</p>
          <ul class="world-list">
            <li>Clothing (0&ndash;6 Yrs)</li>
            <li>Footwear</li>
            <li>Party Wear</li>
            <li>Everyday Wear</li>
          </ul>
          <span class="world-cta">Explore World <svg class="icon" width="13" height="13"><use href="#icon-arrow"></use></svg></span>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ================= 3. SHOPPING MADE SIMPLE ================= -->
<section class="section simple tint-blue" id="simple">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow">How A Visit Feels</span>
      <h2 class="section-title">Shopping Made <span class="pink">Simple</span></h2>
      <p class="section-sub">No confusion, no crowded aisles&mdash;just a smooth path from walking in to walking out happy.</p>
    </div>

    <div class="simple-path">

      <div class="simple-step reveal">
        <span class="simple-num">01</span>
        <div class="simple-body">
          <span class="simple-icon icon-blue"><svg class="icon" width="22" height="22"><use href="#icon-store"></use></svg></span>
          <div><h3>Visit Store</h3><p>Walk into 4 massive floors built just for your child.</p></div>
        </div>
      </div>

      <div class="simple-step reveal">
        <span class="simple-num">02</span>
        <div class="simple-body">
          <span class="simple-icon icon-pink"><svg class="icon" width="22" height="22"><use href="#icon-book"></use></svg></span>
          <div><h3>Explore Categories</h3><p>Wander through cycles, baby care, toys, sports, and fashion zones.</p></div>
        </div>
      </div>

      <div class="simple-step reveal">
        <span class="simple-num">03</span>
        <div class="simple-body">
          <span class="simple-icon icon-purple"><svg class="icon" width="22" height="22"><use href="#icon-family"></use></svg></span>
          <div><h3>Get Expert Guidance</h3><p>Our team helps you find exactly what fits your child's age and needs.</p></div>
        </div>
      </div>

      <div class="simple-step reveal">
        <span class="simple-num">04</span>
        <div class="simple-body">
          <span class="simple-icon icon-gold"><svg class="icon" width="22" height="22"><use href="#icon-bag"></use></svg></span>
          <div><h3>Choose Products</h3><p>Compare trusted brands and pick what feels right for your family.</p></div>
        </div>
      </div>

      <div class="simple-step reveal">
        <span class="simple-num">05</span>
        <div class="simple-body">
          <span class="simple-icon icon-green"><svg class="icon" width="22" height="22"><use href="#icon-tag"></use></svg></span>
          <div><h3>Enjoy Discount Pricing</h3><p>Walk out with better prices on every single product, every time.</p></div>
        </div>
      </div>

      <div class="simple-step reveal">
        <span class="simple-num">06</span>
        <div class="simple-body">
          <span class="simple-icon icon-pink"><svg class="icon" width="22" height="22"><use href="#icon-camera"></use></svg></span>
          <div><h3>Take Home Happy Memories</h3><p>Because shopping for your kids should feel like a celebration.</p></div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ================= 4. THE SCALE OF ROLLS & RATTLES ================= -->
<section class="section scale" id="scale">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow">Built To Impress</span>
      <h2 class="section-title">The Scale of <span class="pink">Rolls &amp; Rattles</span></h2>
      <p class="section-sub">One of the biggest kids shopping destinations in Vijayawada&mdash;by the numbers.</p>
    </div>

    <div class="scale-grid">

      <div class="scale-card reveal">
        <span class="scale-icon icon-blue"><svg class="icon" width="22" height="22"><use href="#icon-store"></use></svg></span>
        <span class="scale-value">4</span>
        <span class="scale-label">Massive Shopping Floors</span>
      </div>

      <div class="scale-card reveal">
        <span class="scale-icon icon-pink"><svg class="icon" width="22" height="22"><use href="#icon-bag"></use></svg></span>
        <span class="scale-value">10,000+</span>
        <span class="scale-label">Products Under One Roof</span>
      </div>

      <div class="scale-card reveal">
        <span class="scale-icon icon-purple"><svg class="icon" width="22" height="22"><use href="#icon-bike"></use></svg></span>
        <span class="scale-value">Largest</span>
        <span class="scale-label">Bicycle Collection in the Region</span>
      </div>

      <div class="scale-card reveal">
        <span class="scale-icon icon-gold"><svg class="icon" width="22" height="22"><use href="#icon-baby"></use></svg></span>
        <span class="scale-value">Complete</span>
        <span class="scale-label">Newborn Essentials Range</span>
      </div>

      <div class="scale-card reveal">
        <span class="scale-icon icon-green"><svg class="icon" width="22" height="22"><use href="#icon-car"></use></svg></span>
        <span class="scale-value">Wide</span>
        <span class="scale-label">Ride-On Cars &amp; Bikes Fleet</span>
      </div>

      <div class="scale-card reveal">
        <span class="scale-icon icon-blue"><svg class="icon" width="22" height="22"><use href="#icon-toy"></use></svg></span>
        <span class="scale-value">Endless</span>
        <span class="scale-label">Toys &amp; Educational Games</span>
      </div>

      <div class="scale-card reveal">
        <span class="scale-icon icon-pink"><svg class="icon" width="22" height="22"><use href="#icon-trophy"></use></svg></span>
        <span class="scale-value">Full</span>
        <span class="scale-label">Sports &amp; Outdoor Collection</span>
      </div>

      <div class="scale-card reveal">
        <span class="scale-icon icon-purple"><svg class="icon" width="22" height="22"><use href="#icon-shirt"></use></svg></span>
        <span class="scale-value">Head-to-Toe</span>
        <span class="scale-label">Clothing &amp; Footwear</span>
      </div>

      <div class="scale-card reveal">
        <span class="scale-icon icon-gold"><svg class="icon" width="22" height="22"><use href="#icon-tag"></use></svg></span>
        <span class="scale-value">Always-On</span>
        <span class="scale-label">Discount Pricing</span>
      </div>

      <div class="scale-card reveal">
        <span class="scale-icon icon-green"><svg class="icon" width="22" height="22"><use href="#icon-star"></use></svg></span>
        <span class="scale-value">500+</span>
        <span class="scale-label">Trusted Brands</span>
      </div>

    </div>
  </div>
</section>

<!-- ================= 5. EXPLORE EVERY CORNER ================= -->
<section class="section corners tint-bg" id="corners">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow">Wander Around</span>
      <h2 class="section-title">Explore <span class="pink">Every Corner</span></h2>
      <p class="section-sub">Hover a zone to see what's waiting for you inside.</p>
    </div>

    <div class="corners-grid">

      <div class="corner-tile reveal" tabindex="0">
        <img class="corner-photo" src="https://rollsandrattles.in/wp-content/uploads/2026/07/Cycles-store-in-vijayawada.webp" alt="Bicycle Zone" loading="lazy">
        <div class="corner-info"><h4>Bicycle Zone</h4><p>Rows of geared, electric, and kids' cycles ready to test-ride.</p></div>
      </div>

      <div class="corner-tile reveal" tabindex="0">
        <img class="corner-photo" src="https://rollsandrattles.in/wp-content/uploads/2026/07/Baby-Essentials-store.webp" alt="Baby Essentials" loading="lazy">
        <div class="corner-info"><h4>Baby Essentials</h4><p>Everything for the first 1000 days, in one gentle corner.</p></div>
      </div>

      <div class="corner-tile reveal" tabindex="0">
        <img class="corner-photo" src="https://rollsandrattles.in/wp-content/uploads/2026/07/Car-bike-scooty-store.webp" alt="Ride-On Arena" loading="lazy">
        <div class="corner-info"><h4>Ride-On Arena</h4><p>Battery cars and bikes your kids will beg to try.</p></div>
      </div>

      <div class="corner-tile reveal" tabindex="0">
        <img class="corner-photo" src="https://rollsandrattles.in/wp-content/uploads/2026/07/Toys-in-Rolls-and-Rattles.webp" alt="Toy Kingdom" loading="lazy">
        <div class="corner-info"><h4>Toy Kingdom</h4><p>Aisles of wonder, from soft toys to brain games.</p></div>
      </div>

      <div class="corner-tile reveal" tabindex="0">
        <img class="corner-photo" src="https://rollsandrattles.in/wp-content/uploads/2026/07/Sports-Store.webp" alt="Sports Corner" loading="lazy">
        <div class="corner-info"><h4>Sports Corner</h4><p>Gear up for cricket, football, skating, and more.</p></div>
      </div>

      <div class="corner-tile reveal" tabindex="0">
        <img class="corner-photo" src="https://rollsandrattles.in/wp-content/uploads/2026/07/Stationary-Store.webp" alt="Stationery Hub" loading="lazy">
        <div class="corner-info"><h4>Stationery Hub</h4><p>School supplies and craft essentials for curious minds.</p></div>
      </div>

      <div class="corner-tile reveal" tabindex="0">
        <img class="corner-photo" src="https://rollsandrattles.in/wp-content/uploads/2026/07/Kids-clothing-Store.webp" alt="Kids Fashion" loading="lazy">
        <div class="corner-info"><h4>Kids Fashion</h4><p>Everyday and party wear for every little trendsetter.</p></div>
      </div>

      <div class="corner-tile reveal" tabindex="0">
        <img class="corner-photo" src="https://rollsandrattles.in/wp-content/uploads/2026/07/Kids-Footwear-Store.webp" alt="Footwear Collection" loading="lazy">
        <div class="corner-info"><h4>Footwear Collection</h4><p>Comfortable steps for every age, indoors and out.</p></div>
      </div>

    </div>
  </div>
</section>

<!-- ================= 6. TRUSTED BY FAMILIES ================= -->
<section class="section reviews" id="reviews">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow">Trusted By Families</span>
      <h2 class="section-title">What Families <span class="pink">Say About Us</span></h2>
      <div class="rating-badge">
        <span class="rating-stars">★★★★★</span>
        <span>Google Rating</span>
      </div>
    </div>

    <div class="review-scroll">
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
            <span class="review-tag">Verified Google Review</span>
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
            <span class="review-tag">Verified Google Review</span>
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

<!-- ================= 7. A DAY AT ROLLS & RATTLES ================= -->
<section class="section day-story tint-blue" id="day-story">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow">One Visit, Countless Smiles</span>
      <h2 class="section-title">A Day at <span class="pink">Rolls &amp; Rattles</span></h2>
      <p class="section-sub">Here's what a typical family visit looks like, floor by floor.</p>
    </div>

    <div class="day-rail">

      <div class="day-stop reveal">
        <span class="day-badge"><svg class="icon" width="22" height="22"><use href="#icon-clock"></use></svg></span>
        <div class="day-card">
          <img class="day-photo" src="https://rollsandrattles.in/wp-content/uploads/2026/07/Rolls-And-Rattles-shop-in-Vijayawada-Poranki.webp" alt="Morning arrival at Rolls &amp; Rattles" loading="lazy">
          <div>
            <span class="day-eyebrow">10:30 AM</span>
            <h3>Morning Arrival</h3>
            <p>Doors open to a bright, welcoming showroom.</p>
          </div>
        </div>
      </div>

      <div class="day-stop reveal">
        <span class="day-badge">G</span>
        <div class="day-card">
          <img class="day-photo" src="https://rollsandrattles.in/wp-content/uploads/2026/07/Cycles-shop-in-poranki-vijayawada.webp" alt="Ground floor bicycle selection" loading="lazy">
          <div>
            <span class="day-eyebrow">Ground Floor</span>
            <h3>Choose a Bicycle</h3>
            <p>Test-ride from our biggest cycle collection in town.</p>
          </div>
        </div>
      </div>

      <div class="day-stop reveal">
        <span class="day-badge">1</span>
        <div class="day-card">
          <img class="day-photo" src="https://rollsandrattles.in/wp-content/uploads/2026/07/Car-Toys-in-Rolls-and-Rattles.webp" alt="Ride-on cars and bikes" loading="lazy">
          <div>
            <span class="day-eyebrow">First Floor</span>
            <h3>Ride-On Adventures</h3>
            <p>Battery cars, bikes, and mobility rides for the little ones.</p>
          </div>
        </div>
      </div>

      <div class="day-stop reveal">
        <span class="day-badge">2</span>
        <div class="day-card">
          <img class="day-photo" src="https://rollsandrattles.in/wp-content/uploads/2026/07/Toys-in-Rolls-and-Rattles.webp" alt="Baby and toy world" loading="lazy">
          <div>
            <span class="day-eyebrow">Second Floor</span>
            <h3>Baby &amp; Toy World</h3>
            <p>Newborn essentials meet a world of toys and games.</p>
          </div>
        </div>
      </div>

      <div class="day-stop reveal">
        <span class="day-badge">3</span>
        <div class="day-card">
          <img class="day-photo" src="https://rollsandrattles.in/wp-content/uploads/2026/07/Kids-clothing-Store.webp" alt="Fashion and footwear floor" loading="lazy">
          <div>
            <span class="day-eyebrow">Third Floor</span>
            <h3>Fashion &amp; Footwear</h3>
            <p>Complete the look with outfits and shoes for every occasion.</p>
          </div>
        </div>
      </div>

      <div class="day-stop reveal">
        <span class="day-badge"><svg class="icon" width="22" height="22"><use href="#icon-bag"></use></svg></span>
        <div class="day-card">
          <img class="day-photo" src="https://rollsandrattles.in/wp-content/uploads/2026/07/Kids-gift-store.webp" alt="Checkout counter" loading="lazy">
          <div>
            <span class="day-eyebrow">Checkout</span>
            <h3>Happy Checkout</h3>
            <p>Discount pricing on everything you pick, every single time.</p>
          </div>
        </div>
      </div>

      <div class="day-stop day-finale reveal">
        <span class="day-badge"><svg class="icon" width="22" height="22"><use href="#icon-star"></use></svg></span>
        <div class="day-card">
          <img class="day-photo" src="https://rollsandrattles.in/wp-content/uploads/2026/07/Rolls-And-Rattles-shop-in-Vijayawada-Poranki.webp" alt="Family leaving happy" loading="lazy">
          <div>
            <span class="day-eyebrow">The Finale</span>
            <h3>Smiles All Around</h3>
            <p>Because a day at R&amp;R always ends in happy memories.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ================= 8. VISIT US TODAY ================= -->
<section class="section visit" id="visit">
  <div class="container">
    <div class="visit-panel">
      <div class="visit-inner">

        <div class="visit-info reveal">
          <span class="eyebrow">Visit Us Today</span>
          <h2 class="section-title left">Come Experience It <span class="pink">Yourself</span></h2>

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
    </div>
  </div>
</section>

<?php get_footer(); ?>
