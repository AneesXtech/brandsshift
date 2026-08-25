<?php
// includes/cta-section.php - Full-Width Consultation Banner CTA Component (Brands Shift Signature Gradient)
require_once __DIR__ . '/../config.php';
?>

<!-- Full-Width Edge-to-Edge Consultation CTA Banner (Brands Shift Gradient & Blur) -->
<section id="consultation-banner-cta" class="w-100 p-0 m-0 position-relative overflow-hidden" style="background: linear-gradient(135deg, #5c1e70 0%, #722C89 35%, #D3207C 100%); border-top: 1px solid rgba(255, 255, 255, 0.15); border-bottom: 1px solid rgba(0, 0, 0, 0.2);">
  
  <!-- Ambient Background Texture & Blur Layer -->
  <div class="position-absolute top-0 start-0 w-100 h-100" style="background-image: url('assets/images/testimonial-background.jpg'); background-size: cover; background-position: center; opacity: 0.15; filter: blur(8px); transform: scale(1.05);"></div>
  <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(90deg, rgba(114, 44, 137, 0.88) 0%, rgba(211, 32, 124, 0.82) 100%); backdrop-filter: blur(14px); -webkit-backdrop-filter: blur(14px);"></div>

  <!-- Content Container -->
  <div class="container position-relative z-2 py-4 py-md-5">
    <div class="d-flex flex-column flex-md-row align-items-center justify-content-between gap-4 text-center text-md-start">
      
      <!-- Headline on Left -->
      <div class="consultation-cta-text flex-grow-1">
        <h2 class="text-white fw-bold mb-0" style="font-family: 'uncut-sans', sans-serif; font-size: clamp(1.65rem, 3.2vw, 2.65rem); letter-spacing: -0.02em; line-height: 1.25;">
          Get a free <span style="font-style: italic; font-family: 'Playfair Display', Georgia, serif; font-weight: 500;">consultation</span> call with our team.
        </h2>
      </div>

      <!-- Action Button on Right: Standardized Brands Shift Nectar CTA Button -->
      <div class="consultation-cta-action flex-shrink-0">
        <div class="nectar-cta border_radius_100px alignment_tablet_default alignment_phone_default display_tablet_inherit display_phone_inherit backdrop_filter_blur_13" data-color="accent-color" data-using-bg="true" data-style="arrow-circle-animation" data-display="inline" data-alignment="left" data-text-color="custom">
          <span style="color: #FFFFFF;" class="nectar-button-type">
            <span class="link_wrap" style="padding-top: 5px; padding-right: 5px; padding-bottom: 5px; padding-left: 24px;">
              <a class="link_text open-modal-btn" role="button" href="contact.php">
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
  </div>
</section>

<style>
/* Consultation Banner CTA Styles */
.consultation-cta-action .btn:hover {
  background: #111113 !important;
  color: #FFFFFF !important;
  box-shadow: 0 12px 35px rgba(0, 0, 0, 0.45) !important;
}

@media (max-width: 767.98px) {
  #consultation-banner-cta {
    padding-top: 1.25rem !important;
    padding-bottom: 1.25rem !important;
  }
  .consultation-cta-text h2 {
    font-size: 1.55rem !important;
  }
  .consultation-cta-action {
    width: 100%;
  }
  .consultation-cta-action .btn {
    width: 100%;
    justify-content: center;
  }
}
</style>
