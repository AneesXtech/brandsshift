<?php
// includes/hero.php - Hero Section Component (Brands Shift Version)
require_once __DIR__ . '/../config.php';
?>

<section class="pt-none pr-none pb-none pl-none mt-none mr-none mb-none ml-none">
  <div class="container-fluid">
    <div class="row pt-none pr-none pb-none pl-none mt-none mr-none mb-none ml-none">
      <div class="col-standard-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 first last pt-none pr-none pb-none pl-none">

        <div id="herobanner1_501" class="bf-editor-element bf-editor-element--hero-banner element--hero-banner hero-banner-one bg-dark lazy">
          <div class="element--hero-banner-wrapper d-flex position-relative" style="padding-top: calc(var(--header-height, 80px) + 40px); padding-bottom: 60px;">

            <!-- Background Video Layer -->
            <div class="element--hero-banner-background position-absolute h-100 w-100">
              <div class="element--hero-banner-background-image image-wrapper video-contain h-100 w-100">
                <video autoplay="" muted="" loop="" playsinline="" class="w-100 h-100 object-cover">
                  <source media="(max-width: 990px)" src="assets/videos/home-hero-primary-mobile.mp4" type="video/mp4">
                  <source media="(min-width: 991px)" src="assets/videos/home-hero-primary-background-video.mp4" type="video/mp4">
                  <source src="assets/videos/home-hero-primary-background-video.mp4" type="video/mp4">
                </video>
              </div>
              <div class="element--hero-banner-background-overlay position-absolute h-100 w-100" style="background: radial-gradient(circle at 30% 50%, rgba(10,10,11,0.7) 0%, rgba(10,10,11,0.92) 85%);"></div>
            </div>
        
            <!-- Content & Showreel Grid (Aligned to Bottom) -->
            <div class="row element--hero-banner-content align-items-end w-100 position-relative z-2">
              
              <!-- Left Column: Google Badge, Main Headline & Sub-headline -->
              <div class="col-12 col-lg-8 col-xxl-7 element--hero-banner-content-column">
                <div class="element--hero-banner-content-wrapper text-start">
                  
                  <!-- Top Small Google Rating Badge (High Contrast Crisp Glassmorphism) -->
                  <div class="d-inline-flex align-items-center gap-2 mb-4 px-3 py-2 rounded-pill shadow-lg" style="background: rgba(14, 14, 18, 0.85); border: 1px solid rgba(255, 255, 255, 0.25); backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px);">
                    <img src="https://cdn.trustindex.io/assets/platform/Google/icon.svg" alt="Google Logo" width="20" height="20" style="width: 20px; height: 20px; flex-shrink: 0;">
                    <div class="swe-stars d-flex gap-1" style="color: #FFC107; font-size: 0.85rem;">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                    </div>
                    <span class="text-white font-weight-bold ms-1" style="font-size: 0.875rem; font-family: 'uncut-sans', sans-serif; letter-spacing: 0.02em;">4.9 Google Rating</span>
                  </div>

                  <!-- Main Headline -->
                  <h1 class="bf-hero-title mb-3" style="font-size: clamp(2.8rem, 5.5vw, 4.8rem); line-height: 1.08; font-weight: 900; letter-spacing: -0.03em; color: #FFFFFF;">
                    BRANDS <span style="background: linear-gradient(135deg, #722C89 0%, #D3207C 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">SHIFT</span>
                    <span class="d-block text-white" style="font-style: italic; font-weight: 400; font-size: clamp(2rem, 4vw, 3.4rem); margin-top: 6px;">Design. Develop. Grow.</span>
                  </h1>

                  <!-- Sub-headline (100% High Visibility Crisp Text) -->
                  <p class="mb-4" style="font-size: clamp(1.05rem, 1.8vw, 1.25rem); max-width: 680px; line-height: 1.6; font-family: 'uncut-sans', sans-serif; color: #FFFFFF !important; opacity: 1;">
                    We help businesses grow through expert <span style="color: #D3207C; font-weight: 700;">Web Design</span>, <span style="color: #D3207C; font-weight: 700;">App Development</span>, <span style="color: #D3207C; font-weight: 700;">Branding</span>, and <span style="color: #D3207C; font-weight: 700;">Digital Marketing</span> — built to convert visitors into customers.
                  </p>

                </div>
              </div>
              
              <!-- Right Column: Video Showreel Card (Aligned to Bottom) -->
              <div class="col-12 col-lg-4 offset-xxl-1 element--hero-banner-media video">
                <div class="element--hero-banner-media-wrapper video position-relative cursor-pointer" id="heroShowreelBtn" style="cursor: pointer;" onclick="openHeroFullscreenVideo()" data-video-src="assets/videos/bluefrontier-home-video-2026-992_661_with_sound.mp4">
                  <div class="element--hero-banner-media-video video-wrapper element--hero-banner-media-play position-relative rounded-4 overflow-hidden shadow-lg border border-secondary border-opacity-25" style="border-radius: 16px; min-height: 220px; background-color: #14131A;">
                    <video autoplay muted loop playsinline poster="assets/images/bf-consultancy-1.jpg" class="w-100 h-100 object-cover" style="border-radius: 16px; min-height: 220px; object-fit: cover;">
                      <source src="assets/videos/bluefrontier-home-video-2026-600x400_no sound.mp4" type="video/mp4">
                      <source src="assets/videos/bluefrontier-home-video-2026-992_661_with_sound.mp4" type="video/mp4">
                    </video>
                    
                    <button class="btn btn-light btn-lg btn-rounded btn-square position-absolute start-50 top-50 translate-middle shadow-lg open-video-modal-btn" type="button" aria-label="Play Showreel Video" style="z-index: 10; width: 64px; height: 64px; border-radius: 50%; display: flex; align-items: center; justify-content: center; background-color: #ffffff; border: none; box-shadow: 0 10px 30px rgba(0,0,0,0.5);" onclick="openHeroFullscreenVideo()">
                      <span style="width: 0; height: 0; border-top: 11px solid transparent; border-bottom: 11px solid transparent; border-left: 17px solid #111113; margin-left: 4px; display: block;"></span>
                    </button>

                    <div class="position-absolute bottom-0 start-0 w-100 p-3 text-white font-weight-bold text-center text-uppercase" style="background: linear-gradient(to top, rgba(0,0,0,0.85), transparent); font-size: 0.85rem; letter-spacing: 0.1em; z-index: 5; font-family: 'uncut-sans', arial, sans-serif;">
                      Creative Collaboration
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
