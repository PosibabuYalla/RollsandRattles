<?php
/**
 * Template Name: Contact Page
 */
get_header();
?>

<section class="hero">
  <div class="container hero-inner">

    <div class="hero-content">
      <h1 class="hero-heading">
        <span class="navy">Let's Help You Find</span>
        <span class="pink">Everything Your Child Needs</span>
      </h1>
      <p class="hero-sub">We're always ready to welcome you. Visit our showroom, give us a call, or connect with us on WhatsApp for product inquiries.</p>
      <div class="hero-buttons">
        <a href="<?php echo esc_url( rr_maps_directions_url() ); ?>" target="_blank" rel="noopener" class="btn btn-primary">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M12 21s7-6.2 7-11.5A7 7 0 0 0 5 9.5C5 14.8 12 21 12 21z" stroke="#fff" stroke-width="1.8" stroke-linejoin="round"/><circle cx="12" cy="9.5" r="2.3" stroke="#fff" stroke-width="1.8"/></svg>
          Get Directions
        </a>
        <a href="<?php echo esc_url( rr_whatsapp_link() ); ?>" target="_blank" rel="noopener" class="btn btn-secondary">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M12 2C6.5 2 2 6.5 2 12c0 1.8.5 3.5 1.3 5L2 22l5.2-1.4c1.4.8 3.1 1.2 4.8 1.2 5.5 0 10-4.5 10-10S17.5 2 12 2zm5.9 14.2c-.2.7-1.4 1.3-2 1.4-.5.1-1.2.1-1.9-.1-.4-.1-1-.3-1.7-.7-3-1.3-5-4.3-5.1-4.5-.2-.2-1.2-1.6-1.2-3.1s.8-2.2 1.1-2.5c.3-.3.6-.4.8-.4h.6c.2 0 .5 0 .7.5.3.7.9 2.2 1 2.4.1.2.2.4 0 .6-.1.2-.2.4-.4.6-.2.2-.4.5-.6.6-.2.2-.4.4-.2.8.2.4 1 1.6 2.1 2.6 1.4 1.3 2.6 1.7 3 1.9.4.2.6.1.8-.1.2-.2.9-1 1.1-1.4.2-.4.4-.3.7-.2.3.1 1.8.9 2.1 1 .3.2.5.2.6.4.1.2.1.9-.1 1.6z" fill="#FF4D94" stroke="none"/></svg>
          WhatsApp Us
        </a>
      </div>
    </div>

    <div class="hero-image reveal">
      <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Rolls_and_Rattles_Contact_Hero_Image.webp' ); ?>" alt="Happy family arriving at Rolls &amp; Rattles Kids Mart showroom">
    </div>

  </div>
</section>

<!-- ================= 1. CONTACT INFORMATION ================= -->
<section class="section" id="contact-info">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow">Reach Us</span>
      <h2 class="section-title">Contact <span class="pink">Information</span></h2>
      <p class="section-sub">Everything you need to plan your visit or get in touch, in one place.</p>
    </div>

    <div class="info-panel reveal">
      <div class="info-grid">

        <div class="info-card feature">
          <span class="info-icon icon-pink"><svg class="icon" width="24" height="24"><use href="#icon-pin"></use></svg></span>
          <span class="info-eyebrow">Store Address</span>
          <h3>Rolls &amp; Rattles (R&amp;R) Kids Mart</h3>
          <p><?php echo esc_html( rr_address() ); ?></p>
        </div>

        <div class="info-card">
          <span class="info-icon icon-blue"><svg class="icon" width="22" height="22"><use href="#icon-phone"></use></svg></span>
          <span class="info-eyebrow">Phone</span>
          <h3>Call Anytime</h3>
          <p class="info-strong"><?php echo esc_html( rr_phone() ); ?></p>
        </div>

        <div class="info-card">
          <span class="info-icon icon-gold"><svg class="icon" width="22" height="22"><use href="#icon-clock"></use></svg></span>
          <span class="info-eyebrow">Business Hours</span>
          <h3>Monday &ndash; Sunday</h3>
          <div class="info-hours-row"><span class="info-strong"><?php echo esc_html( rr_hours() ); ?></span></div>
        </div>

        <div class="info-card">
          <span class="info-icon icon-purple"><svg class="icon" width="22" height="22"><use href="#icon-bag"></use></svg></span>
          <span class="info-eyebrow">Shopping Options</span>
          <h3>Shop Your Way</h3>
          <ul class="shop-option-list">
            <li><span class="opt-icon"><svg class="icon" width="15" height="15"><use href="#icon-store"></use></svg></span>In-Store Shopping</li>
            <li><span class="opt-icon"><svg class="icon" width="15" height="15"><use href="#icon-bag"></use></svg></span>In-Store Pickup</li>
            <li><span class="opt-icon"><svg class="icon" width="15" height="15"><use href="#icon-truck"></use></svg></span>Home Delivery</li>
          </ul>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- ================= 2. VISIT OUR SHOWROOM ================= -->
<section class="section tint-bg" id="showroom">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow">Find Us Easily</span>
      <h2 class="section-title">Visit Our <span class="pink">Showroom</span></h2>
      <p class="section-sub">Right opposite IDBI Bank in Poranki &mdash; easy to spot, easy to reach.</p>
    </div>

    <div class="showroom-grid">

      <div class="showroom-map-wrap reveal">
        <div class="showroom-map">
          <iframe
            src="<?php echo esc_url( rr_maps_embed_url() ); ?>"
            title="Rolls &amp; Rattles Kids Mart location on Google Maps"
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            allowfullscreen>
          </iframe>
        </div>
        <span class="showroom-float-tag"><svg class="icon" width="16" height="16"><use href="#icon-pin"></use></svg>Opposite IDBI Bank, Poranki</span>
      </div>

      <div class="showroom-side reveal">
        <ul class="showroom-list">
          <li class="showroom-item">
            <span class="check"><svg class="icon" width="16" height="16"><use href="#icon-parking"></use></svg></span>
            <div><strong>Easy Parking</strong>Ample space right outside the showroom.</div>
          </li>
          <li class="showroom-item">
            <span class="check"><svg class="icon" width="16" height="16"><use href="#icon-family"></use></svg></span>
            <div><strong>Family-Friendly Shopping</strong>A spacious, comfortable layout for the whole family.</div>
          </li>
          <li class="showroom-item">
            <span class="check"><svg class="icon" width="16" height="16"><use href="#icon-store"></use></svg></span>
            <div><strong>4 Massive Shopping Floors</strong>Cycles, baby care, toys, sports, and fashion &mdash; all here.</div>
          </li>
          <li class="showroom-item">
            <span class="check"><svg class="icon" width="16" height="16"><use href="#icon-route"></use></svg></span>
            <div><strong>Easily Accessible Location</strong>Well-connected roads make reaching us simple.</div>
          </li>
          <li class="showroom-item">
            <span class="check"><svg class="icon" width="16" height="16"><use href="#icon-pin"></use></svg></span>
            <div><strong>Opposite IDBI Bank, Poranki</strong>A landmark you can't miss on your way in.</div>
          </li>
        </ul>

        <a href="<?php echo esc_url( rr_maps_directions_url() ); ?>" target="_blank" rel="noopener" class="btn btn-primary">
          <svg class="icon" width="18" height="18"><use href="#icon-pin"></use></svg>Open in Google Maps
        </a>
      </div>

    </div>
  </div>
</section>

<!-- ================= 3. QUICK CONTACT OPTIONS ================= -->
<section class="section" id="quick-contact">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow">Choose What Works For You</span>
      <h2 class="section-title">Quick Contact <span class="pink">Options</span></h2>
      <p class="section-sub">Three easy ways to reach the R&amp;R team &mdash; pick whichever feels most convenient.</p>
    </div>

    <div class="quick-grid">

      <div class="quick-card q-call reveal">
        <span class="quick-card-ring"></span>
        <span class="quick-icon icon-blue"><svg class="icon" width="26" height="26"><use href="#icon-phone"></use></svg></span>
        <h3>Call Us</h3>
        <p>Speak directly with our team for quick answers and product availability.</p>
        <a href="tel:<?php echo esc_attr( rr_phone_tel() ); ?>" class="btn btn-primary"><svg class="icon" width="16" height="16"><use href="#icon-phone"></use></svg><?php echo esc_html( rr_phone() ); ?></a>
      </div>

      <div class="quick-card q-whatsapp reveal">
        <span class="quick-card-ring"></span>
        <span class="quick-icon icon-green"><svg class="icon" width="26" height="26"><use href="#icon-whatsapp"></use></svg></span>
        <h3>WhatsApp</h3>
        <p>Get instant product inquiries and assistance, right from your phone.</p>
        <a href="<?php echo esc_url( rr_whatsapp_link() ); ?>" target="_blank" rel="noopener" class="btn btn-primary"><svg class="icon" width="16" height="16"><use href="#icon-whatsapp"></use></svg>Chat on WhatsApp</a>
      </div>

      <div class="quick-card q-visit reveal">
        <span class="quick-card-ring"></span>
        <span class="quick-icon icon-pink"><svg class="icon" width="26" height="26"><use href="#icon-store"></use></svg></span>
        <h3>Visit Store</h3>
        <p>Experience thousands of products across four massive shopping floors.</p>
        <a href="<?php echo esc_url( rr_maps_directions_url() ); ?>" target="_blank" rel="noopener" class="btn btn-primary"><svg class="icon" width="16" height="16"><use href="#icon-pin"></use></svg>Get Directions</a>
      </div>

    </div>
  </div>
</section>

<!-- ================= 4. SEND US A MESSAGE ================= -->
<section class="section tint-blue" id="message">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow">Write To Us</span>
      <h2 class="section-title">Send Us a <span class="pink">Message</span></h2>
      <p class="section-sub">Have a question about a product or your order? Drop us a note below.</p>
    </div>

    <div class="message-grid">

      <div class="message-form-wrap reveal">
        <?php
        /**
         * Static demo form below (see assets/js/contact.js). For real submissions,
         * install a form plugin (Contact Form 7, WPForms, Fluent Forms) and drop
         * its shortcode/block here — the surrounding markup and styles stay put.
         */
        ?>
        <form id="contactForm" novalidate>
          <div class="form-row two">
            <div class="form-field">
              <label for="fullName">Full Name</label>
              <input type="text" id="fullName" name="fullName" placeholder="Your full name" required>
            </div>
            <div class="form-field">
              <label for="phoneNumber">Phone Number</label>
              <input type="tel" id="phoneNumber" name="phoneNumber" placeholder="+91 00000 00000" required>
            </div>
          </div>

          <div class="form-row two">
            <div class="form-field">
              <label for="emailAddress">Email Address</label>
              <input type="email" id="emailAddress" name="emailAddress" placeholder="you@example.com" required>
            </div>
            <div class="form-field">
              <label for="subject">Subject</label>
              <input type="text" id="subject" name="subject" placeholder="What's this about?" required>
            </div>
          </div>

          <div class="form-row">
            <div class="form-field">
              <label for="message">Message</label>
              <textarea id="message" name="message" placeholder="Tell us how we can help..." required></textarea>
            </div>
          </div>

          <button type="submit" class="btn btn-primary form-submit"><svg class="icon" width="17" height="17"><use href="#icon-send"></use></svg>Send Message</button>

          <p class="form-note"><svg class="icon" width="15" height="15"><use href="#icon-clock"></use></svg>Our team will get back to you as soon as possible.</p>
          <p class="form-success" id="formSuccess"><svg class="icon" width="16" height="16"><use href="#icon-check"></use></svg>Thank you! Your message has been noted &mdash; we'll be in touch shortly.</p>
        </form>
      </div>

      <div class="assurance-panel reveal">
        <h3>Prefer To Talk Now?</h3>
        <p>Skip the form and reach our team directly through any of these channels.</p>

        <div class="assurance-item">
          <span class="a-icon"><svg class="icon" width="18" height="18"><use href="#icon-clock"></use></svg></span>
          <div><strong>Fast Response</strong><span>We reply within the same business day</span></div>
        </div>
        <div class="assurance-item">
          <span class="a-icon"><svg class="icon" width="18" height="18"><use href="#icon-shield"></use></svg></span>
          <div><strong>Trusted by Families</strong><span>Genuine products, honest guidance</span></div>
        </div>
        <div class="assurance-item">
          <span class="a-icon"><svg class="icon" width="18" height="18"><use href="#icon-chat"></use></svg></span>
          <div><strong>Friendly Team</strong><span>Real people, ready to help</span></div>
        </div>

        <a href="<?php echo esc_url( rr_whatsapp_link() ); ?>" target="_blank" rel="noopener" class="btn btn-secondary" style="margin-top:6px;"><svg class="icon" width="16" height="16"><use href="#icon-whatsapp"></use></svg>Chat on WhatsApp</a>
      </div>

    </div>
  </div>
</section>

<!-- ================= 5. FREQUENTLY ASKED QUESTIONS ================= -->
<section class="section" id="faq">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow">Got Questions?</span>
      <h2 class="section-title">Frequently Asked <span class="pink">Questions</span></h2>
      <p class="section-sub">Quick answers to what parents ask us most.</p>
    </div>

    <div class="faq-list">
      <?php
      $rr_faqs_query = rr_get_faqs( 12 );
      if ( $rr_faqs_query ) :
        while ( $rr_faqs_query->have_posts() ) : $rr_faqs_query->the_post();
          ?>
          <div class="faq-item reveal">
            <button class="faq-question" type="button"><?php the_title(); ?><span class="faq-plus"><svg class="icon" width="14" height="14"><use href="#icon-arrow"></use></svg></span></button>
            <div class="faq-answer"><p><?php the_content(); ?></p></div>
          </div>
          <?php
        endwhile;
        wp_reset_postdata();
      else :
        foreach ( rr_default_faqs() as $rr_faq ) :
          ?>
          <div class="faq-item reveal">
            <button class="faq-question" type="button"><?php echo esc_html( $rr_faq['q'] ); ?><span class="faq-plus"><svg class="icon" width="14" height="14"><use href="#icon-arrow"></use></svg></span></button>
            <div class="faq-answer"><p><?php echo esc_html( $rr_faq['a'] ); ?></p></div>
          </div>
          <?php
        endforeach;
      endif;
      ?>
    </div>
  </div>
</section>

<!-- ================= 6. FOLLOW OUR JOURNEY ================= -->
<section class="section tint-bg" id="social">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow">Stay Connected</span>
      <h2 class="section-title">Follow Our <span class="pink">Journey</span></h2>
      <p class="section-sub">Join our community for new arrivals, offers, and behind-the-scenes moments.</p>
    </div>

    <div class="social-grid">

      <a href="<?php echo esc_url( rr_social_url( 'instagram' ) ? rr_social_url( 'instagram' ) : '#' ); ?>" class="social-card s-instagram reveal">
        <span class="social-icon"><svg class="icon" width="26" height="26"><use href="#icon-instagram"></use></svg></span>
        <h3>Instagram</h3>
        <p>Real moments from the showroom floor, straight to your feed.</p>
        <ul class="social-chips">
          <li>New Arrivals</li>
          <li>Latest Offers</li>
          <li>Store Events</li>
        </ul>
        <span class="social-cta">Follow Us <svg class="icon" width="13" height="13"><use href="#icon-arrow"></use></svg></span>
      </a>

      <a href="<?php echo esc_url( rr_social_url( 'facebook' ) ? rr_social_url( 'facebook' ) : '#' ); ?>" class="social-card s-facebook reveal">
        <span class="social-icon"><svg class="icon" width="26" height="26"><use href="#icon-facebook"></use></svg></span>
        <h3>Facebook</h3>
        <p>Community updates, parenting tips, and everything happening at R&amp;R.</p>
        <ul class="social-chips">
          <li>Store Events</li>
          <li>Parenting Inspiration</li>
          <li>Latest Offers</li>
        </ul>
        <span class="social-cta">Like Our Page <svg class="icon" width="13" height="13"><use href="#icon-arrow"></use></svg></span>
      </a>

      <a href="<?php echo esc_url( rr_social_url( 'youtube' ) ? rr_social_url( 'youtube' ) : '#' ); ?>" class="social-card s-youtube reveal">
        <span class="social-icon"><svg class="icon" width="26" height="26"><use href="#icon-youtube"></use></svg></span>
        <h3>YouTube</h3>
        <p>Product walkthroughs and store tours to help you shop smarter.</p>
        <ul class="social-chips">
          <li>Product Videos</li>
          <li>New Arrivals</li>
          <li>Store Events</li>
        </ul>
        <span class="social-cta">Subscribe <svg class="icon" width="13" height="13"><use href="#icon-arrow"></use></svg></span>
      </a>

    </div>
  </div>
</section>

<!-- ================= 7. VISIT US TODAY ================= -->
<section class="section" id="visit-today">
  <div class="container">
    <div class="cta-panel reveal">
      <span class="eyebrow">Visit Us Today</span>
      <h2 class="section-title">Your Child's Next <span class="pink">Favorite Store Awaits</span></h2>
      <p class="section-sub">Come see, touch, and try before you buy &mdash; four floors of childhood wonder are waiting.</p>

      <div class="cta-detail-row">
        <div class="cta-detail">
          <span class="visit-icon"><svg class="icon" width="18" height="18"><use href="#icon-pin"></use></svg></span>
          <p><span class="cta-label">Address</span>Dr. No. 6, PVRDL Edifice, Opposite IDBI Bank, Poranki</p>
        </div>
        <div class="cta-detail">
          <span class="visit-icon"><svg class="icon" width="18" height="18"><use href="#icon-phone"></use></svg></span>
          <p><span class="cta-label">Phone</span><?php echo esc_html( rr_phone() ); ?></p>
        </div>
        <div class="cta-detail">
          <span class="visit-icon"><svg class="icon" width="18" height="18"><use href="#icon-clock"></use></svg></span>
          <p><span class="cta-label">Store Hours</span><?php echo esc_html( rr_hours() ); ?></p>
        </div>
      </div>

      <div class="cta-buttons">
        <a href="<?php echo esc_url( rr_maps_directions_url() ); ?>" target="_blank" rel="noopener" class="btn btn-primary"><svg class="icon" width="18" height="18"><use href="#icon-pin"></use></svg>Get Directions</a>
        <a href="tel:<?php echo esc_attr( rr_phone_tel() ); ?>" class="btn btn-secondary"><svg class="icon" width="18" height="18"><use href="#icon-phone"></use></svg>Call Now</a>
        <a href="<?php echo esc_url( rr_whatsapp_link() ); ?>" target="_blank" rel="noopener" class="whatsapp-btn"><svg class="icon" width="18" height="18"><use href="#icon-whatsapp"></use></svg><span>WhatsApp</span></a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
