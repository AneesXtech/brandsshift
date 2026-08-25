<?php
// includes/statement-marquee.php - Agency Statement & Client Logos Image Marquee Component
require_once __DIR__ . '/../config.php';
?>

<section class="bg-dark text-white py-5 border-radius-bottom-xl" style="background-color: #000000; color: #ffffff; padding-top: 80px; padding-bottom: 75px;">
  <div class="container py-3">
    <div class="row align-items-center justify-content-between">
      
      <!-- Statement & Header Text Column -->
      <div class="col-12 col-lg-11 mb-4 pb-2">
        <!-- Subtitle / Tagline Badge with EXACTLY 1 SINGLE PINK DOT -->
        <div class="d-inline-flex align-items-center gap-2 mb-3">
          <span style="width: 8px; height: 8px; background-color: #D3207C; border-radius: 50%; display: inline-block; flex-shrink: 0;"></span>
          <span style="font-family: 'uncut-sans', sans-serif; font-size: 0.825rem; font-weight: 700; letter-spacing: 0.12em; text-transform: uppercase; color: #D3207C;">TRUSTED PARTNERSHIPS</span>
        </div>

        <!-- Section Paragraph -->
        <p class="mb-4">
          <span class="h2 text-white font-weight-bold lh-base" style="font-family: 'uncut-sans', arial, sans-serif; font-size: clamp(1.8rem, 3vw, 2.6rem); color: #ffffff;">These brands trusted us with their vision &mdash; and saw real results because of it. If you're ready to grow yours, let's talk. One consultation is all it takes to see what's possible for your business.</span>
        </p>

        <!-- CTA Button (Placed Right After Paragraph Text) -->
        <div class="pt-2">
          <div class="nectar-cta border_radius_100px alignment_tablet_default alignment_phone_default display_tablet_inherit display_phone_inherit backdrop_filter_blur_13" data-color="accent-color" data-using-bg="true" data-style="arrow-circle-animation" data-display="inline" data-alignment="left" data-text-color="custom">
            <span style="color: #FFFFFF;" class="nectar-button-type">
              <span class="link_wrap" style="padding-top: 5px; padding-right: 5px; padding-bottom: 5px; padding-left: 24px;">
                <a class="link_text open-modal-btn" role="button" href="#">
                  <span class="text" style="font-size: 0.9rem; font-weight: 700;">Book a Free Consultation</span>
                  <div class="arrow-circle-animation-arrow-wrap" style="width: 36px; height: 36px;">
                    <svg class="arrow-circle-animation-arrow" viewBox="0 0 24 24" fill="currentColor"><path d="M16.0037 9.41421L7.39712 18.0208L5.98291 16.6066L14.5895 8H7.00373V6H18.0037V17H16.0037V9.41421Z"></path></svg>
                    <svg class="arrow-circle-animation-arrow hover" viewBox="0 0 24 24" fill="currentColor"><path d="M16.0037 9.41421L7.39712 18.0208L5.98291 16.6066L14.5895 8H7.00373V6H18.0037V17H16.0037V9.41421Z"></path></svg>
                  </div>
                </a>
              </span>
            </span>
          </div>
        </div>
      </div>
      
      <!-- Client Logos Continuous Image Marquee (Larger Cards: min-width 210px, height 95px) -->
      <div class="col-12 pt-4">
        <div id="imagemarquee_555" class="bf-editor-element bf-editor-element--image-marquee element--image-marquee">
          <div class="element--image-marquee-inner d-flex">
            <div class="element--image-marquee-track px-0 mx-0">
              <div class="element--image-marquee-track-inner px-0 mx-0">
                <div class="element--image-marquee-wrapper element--image-marquee-wrapper555 direction-normal hover-pause marquee-wrapper" data-marquee-id="555" data-marquee-element="element--image-marquee-wrapper" data-marquee-speed="30">
                  
                  <!-- Marquee Track Loop 1 (Larger White Cards, Radius 10px) -->
                  <div class="marquee-item scrolling d-flex align-items-center gap-4">
                    <div class="client-logo-card bg-white px-4 py-3 d-flex align-items-center justify-content-center shadow-sm" style="border-radius: 10px !important; min-width: 210px; height: 95px; background-color: #FFFFFF !important;">
                      <img src="assets/images/CLIENT-LOGOS/fedgrow.png" alt="Fedgrow Client Logo" loading="lazy" style="max-height: 65px; max-width: 175px; width: auto; object-fit: contain;">
                    </div>
                    <div class="client-logo-card bg-white px-4 py-3 d-flex align-items-center justify-content-center shadow-sm" style="border-radius: 10px !important; min-width: 210px; height: 95px; background-color: #FFFFFF !important;">
                      <img src="assets/images/CLIENT-LOGOS/ICU Media.png" alt="ICU Media Client Logo" loading="lazy" style="max-height: 65px; max-width: 175px; width: auto; object-fit: contain;">
                    </div>
                    <div class="client-logo-card bg-white px-4 py-3 d-flex align-items-center justify-content-center shadow-sm" style="border-radius: 10px !important; min-width: 210px; height: 95px; background-color: #FFFFFF !important;">
                      <img src="assets/images/CLIENT-LOGOS/TopDesignClosets.png" alt="Top Design Closets Client Logo" loading="lazy" style="max-height: 65px; max-width: 175px; width: auto; object-fit: contain;">
                    </div>
                    <div class="client-logo-card bg-white px-4 py-3 d-flex align-items-center justify-content-center shadow-sm" style="border-radius: 10px !important; min-width: 210px; height: 95px; background-color: #FFFFFF !important;">
                      <img src="assets/images/CLIENT-LOGOS/NF Construction.png" alt="NF Construction Client Logo" loading="lazy" style="max-height: 65px; max-width: 175px; width: auto; object-fit: contain;">
                    </div>
                    <div class="client-logo-card bg-white px-4 py-3 d-flex align-items-center justify-content-center shadow-sm" style="border-radius: 10px !important; min-width: 210px; height: 95px; background-color: #FFFFFF !important;">
                      <img src="assets/images/CLIENT-LOGOS/Zionnicca.png" alt="Zionnicca Client Logo" loading="lazy" style="max-height: 65px; max-width: 175px; width: auto; object-fit: contain;">
                    </div>
                    <div class="client-logo-card bg-white px-4 py-3 d-flex align-items-center justify-content-center shadow-sm" style="border-radius: 10px !important; min-width: 210px; height: 95px; background-color: #FFFFFF !important;">
                      <img src="assets/images/CLIENT-LOGOS/JEquline.png" alt="JEquline Client Logo" loading="lazy" style="max-height: 65px; max-width: 175px; width: auto; object-fit: contain;">
                    </div>
                    <div class="client-logo-card bg-white px-4 py-3 d-flex align-items-center justify-content-center shadow-sm" style="border-radius: 10px !important; min-width: 210px; height: 95px; background-color: #FFFFFF !important;">
                      <img src="assets/images/CLIENT-LOGOS/ICU-POWER.png" alt="ICU Power Client Logo" loading="lazy" style="max-height: 65px; max-width: 175px; width: auto; object-fit: contain;">
                    </div>
                    <div class="client-logo-card bg-white px-4 py-3 d-flex align-items-center justify-content-center shadow-sm" style="border-radius: 10px !important; min-width: 210px; height: 95px; background-color: #FFFFFF !important;">
                      <img src="assets/images/CLIENT-LOGOS/KJSLV.png" alt="KJSLV Client Logo" loading="lazy" style="max-height: 65px; max-width: 175px; width: auto; object-fit: contain;">
                    </div>
                    <div class="client-logo-card bg-white px-4 py-3 d-flex align-items-center justify-content-center shadow-sm" style="border-radius: 10px !important; min-width: 210px; height: 95px; background-color: #FFFFFF !important;">
                      <img src="assets/images/CLIENT-LOGOS/ICU-LAW-WHITE.png" alt="ICU Law Client Logo" loading="lazy" style="max-height: 65px; max-width: 175px; width: auto; object-fit: contain;">
                    </div>
                  </div>

                  <!-- Marquee Track Loop 2 (Seamless Infinite Loop) -->
                  <div class="marquee-item scrolling d-flex align-items-center gap-4" aria-hidden="true">
                    <div class="client-logo-card bg-white px-4 py-3 d-flex align-items-center justify-content-center shadow-sm" style="border-radius: 10px !important; min-width: 210px; height: 95px; background-color: #FFFFFF !important;">
                      <img src="assets/images/CLIENT-LOGOS/fedgrow.png" alt="Fedgrow Client Logo" loading="lazy" style="max-height: 65px; max-width: 175px; width: auto; object-fit: contain;">
                    </div>
                    <div class="client-logo-card bg-white px-4 py-3 d-flex align-items-center justify-content-center shadow-sm" style="border-radius: 10px !important; min-width: 210px; height: 95px; background-color: #FFFFFF !important;">
                      <img src="assets/images/CLIENT-LOGOS/ICU Media.png" alt="ICU Media Client Logo" loading="lazy" style="max-height: 65px; max-width: 175px; width: auto; object-fit: contain;">
                    </div>
                    <div class="client-logo-card bg-white px-4 py-3 d-flex align-items-center justify-content-center shadow-sm" style="border-radius: 10px !important; min-width: 210px; height: 95px; background-color: #FFFFFF !important;">
                      <img src="assets/images/CLIENT-LOGOS/TopDesignClosets.png" alt="Top Design Closets Client Logo" loading="lazy" style="max-height: 65px; max-width: 175px; width: auto; object-fit: contain;">
                    </div>
                    <div class="client-logo-card bg-white px-4 py-3 d-flex align-items-center justify-content-center shadow-sm" style="border-radius: 10px !important; min-width: 210px; height: 95px; background-color: #FFFFFF !important;">
                      <img src="assets/images/CLIENT-LOGOS/NF Construction.png" alt="NF Construction Client Logo" loading="lazy" style="max-height: 65px; max-width: 175px; width: auto; object-fit: contain;">
                    </div>
                    <div class="client-logo-card bg-white px-4 py-3 d-flex align-items-center justify-content-center shadow-sm" style="border-radius: 10px !important; min-width: 210px; height: 95px; background-color: #FFFFFF !important;">
                      <img src="assets/images/CLIENT-LOGOS/Zionnicca.png" alt="Zionnicca Client Logo" loading="lazy" style="max-height: 65px; max-width: 175px; width: auto; object-fit: contain;">
                    </div>
                    <div class="client-logo-card bg-white px-4 py-3 d-flex align-items-center justify-content-center shadow-sm" style="border-radius: 10px !important; min-width: 210px; height: 95px; background-color: #FFFFFF !important;">
                      <img src="assets/images/CLIENT-LOGOS/JEquline.png" alt="JEquline Client Logo" loading="lazy" style="max-height: 65px; max-width: 175px; width: auto; object-fit: contain;">
                    </div>
                    <div class="client-logo-card bg-white px-4 py-3 d-flex align-items-center justify-content-center shadow-sm" style="border-radius: 10px !important; min-width: 210px; height: 95px; background-color: #FFFFFF !important;">
                      <img src="assets/images/CLIENT-LOGOS/ICU-POWER.png" alt="ICU Power Client Logo" loading="lazy" style="max-height: 65px; max-width: 175px; width: auto; object-fit: contain;">
                    </div>
                    <div class="client-logo-card bg-white px-4 py-3 d-flex align-items-center justify-content-center shadow-sm" style="border-radius: 10px !important; min-width: 210px; height: 95px; background-color: #FFFFFF !important;">
                      <img src="assets/images/CLIENT-LOGOS/KJSLV.png" alt="KJSLV Client Logo" loading="lazy" style="max-height: 65px; max-width: 175px; width: auto; object-fit: contain;">
                    </div>
                    <div class="client-logo-card bg-white px-4 py-3 d-flex align-items-center justify-content-center shadow-sm" style="border-radius: 10px !important; min-width: 210px; height: 95px; background-color: #FFFFFF !important;">
                      <img src="assets/images/CLIENT-LOGOS/ICU-LAW-WHITE.png" alt="ICU Law Client Logo" loading="lazy" style="max-height: 65px; max-width: 175px; width: auto; object-fit: contain;">
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
