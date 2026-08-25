<?php
// includes/insights-section.php - Latest News & Updates Section (Clean White Background)
require_once __DIR__ . '/../config.php';
?>

<!-- Latest News & Updates Section (Clean Pure White Background) -->
<section id="insights" class="py-5 py-lg-6 position-relative overflow-hidden" style="background-color: #FFFFFF; border-top: 1px solid rgba(0,0,0,0.06); border-bottom: 1px solid rgba(0,0,0,0.06);">
  <div class="container py-3">
    
    <!-- Section Header with Dot Badge -->
    <div class="text-center mb-5">
      <div class="d-inline-flex align-items-center gap-2 mb-3">
        <span style="width: 8px; height: 8px; background-color: #D3207C; border-radius: 50%; display: inline-block; flex-shrink: 0;"></span>
        <span style="font-family: 'uncut-sans', sans-serif; font-size: 0.825rem; font-weight: 700; letter-spacing: 0.12em; text-transform: uppercase; color: #D3207C;">OUR INSIGHTS</span>
      </div>
      <h2 class="fw-black text-dark mb-2" style="font-family: 'uncut-sans', sans-serif; font-size: clamp(2.2rem, 4vw, 3.2rem); letter-spacing: -0.03em; font-weight: 900; color: #111113;">
        Latest News &amp; Updates
      </h2>
      <p class="text-secondary mx-auto mb-0" style="max-width: 640px; font-size: 1.05rem; line-height: 1.6; font-family: 'uncut-sans', sans-serif; color: #555560 !important;">
        Stay informed with the latest news at Brands Shift, our portfolio, and insights into the creative world.
      </p>
    </div>

    <!-- 3-Column Articles Grid -->
    <div class="row g-4 justify-content-center">
      
      <!-- Card 1 -->
      <div class="col-12 col-md-6 col-lg-4">
        <article class="bs-news-card h-100 d-flex flex-column text-start">
          <div class="bs-news-image-wrapper position-relative overflow-hidden rounded-4 mb-3">
            <img src="assets/images/benefits-of-market-research.jpg" alt="How Trade Association Websites Can Support Member Engagement" class="w-100 h-100 object-cover" style="min-height: 230px; max-height: 230px; object-fit: cover; transition: transform 0.4s ease;">
            <!-- Frosted Glass Bottom Badge Overlay -->
            <div class="bs-news-badge-overlay position-absolute bottom-0 start-0 w-100 d-flex align-items-center justify-content-between px-3 py-2 text-white">
              <span class="small fw-medium">August 5, 2026</span>
              <span class="small fw-semibold">Web Design</span>
            </div>
          </div>
          <h3 class="bs-news-title fw-bold mb-2">
            <a href="blogs.php" class="text-dark text-decoration-none hover-pink">
              How Trade Association Websites Can Support Member Engagement
            </a>
          </h3>
          <p class="text-muted small mb-0 lh-base flex-grow-1" style="font-size: 0.925rem; line-height: 1.6; color: #666670 !important;">
            Membership retention and engagement remain the single biggest challenge association leaders report today...
          </p>
        </article>
      </div>

      <!-- Card 2 -->
      <div class="col-12 col-md-6 col-lg-4">
        <article class="bs-news-card h-100 d-flex flex-column text-start">
          <div class="bs-news-image-wrapper position-relative overflow-hidden rounded-4 mb-3">
            <img src="assets/images/consumer.jpg" alt="When Shopify Plus Development Makes Sense to Scale" class="w-100 h-100 object-cover" style="min-height: 230px; max-height: 230px; object-fit: cover; transition: transform 0.4s ease;">
            <!-- Frosted Glass Bottom Badge Overlay -->
            <div class="bs-news-badge-overlay position-absolute bottom-0 start-0 w-100 d-flex align-items-center justify-content-between px-3 py-2 text-white">
              <span class="small fw-medium">August 3, 2026</span>
              <span class="small fw-semibold">E-Commerce, Web Development</span>
            </div>
          </div>
          <h3 class="bs-news-title fw-bold mb-2">
            <a href="blogs.php" class="text-dark text-decoration-none hover-pink">
              When Shopify Plus Development Makes Sense to Scale
            </a>
          </h3>
          <p class="text-muted small mb-0 lh-base flex-grow-1" style="font-size: 0.925rem; line-height: 1.6; color: #666670 !important;">
            Many growing brands assume Shopify Plus is just a bigger, more expensive version...
          </p>
        </article>
      </div>

      <!-- Card 3 -->
      <div class="col-12 col-md-6 col-lg-4">
        <article class="bs-news-card h-100 d-flex flex-column text-start">
          <div class="bs-news-image-wrapper position-relative overflow-hidden rounded-4 mb-3">
            <img src="assets/images/creative-studio.jpg" alt="Shopify Development Services: What to Expect Before Starting" class="w-100 h-100 object-cover" style="min-height: 230px; max-height: 230px; object-fit: cover; transition: transform 0.4s ease;">
            <!-- Frosted Glass Bottom Badge Overlay -->
            <div class="bs-news-badge-overlay position-absolute bottom-0 start-0 w-100 d-flex align-items-center justify-content-between px-3 py-2 text-white">
              <span class="small fw-medium">July 31, 2026</span>
              <span class="small fw-semibold">E-Commerce, Web Development</span>
            </div>
          </div>
          <h3 class="bs-news-title fw-bold mb-2">
            <a href="blogs.php" class="text-dark text-decoration-none hover-pink">
              Shopify Development Services: What to Expect Before Starting
            </a>
          </h3>
          <p class="text-muted small mb-0 lh-base flex-grow-1" style="font-size: 0.925rem; line-height: 1.6; color: #666670 !important;">
            A business owner reaches out for a Shopify build expecting a straightforward theme...
          </p>
        </article>
      </div>

    </div>

  </div>
</section>

<style>
/* Latest News Cards Styling */
.bs-news-card {
  transition: transform 0.3s ease;
}

.bs-news-card:hover .bs-news-image-wrapper img {
  transform: scale(1.05);
}

.bs-news-image-wrapper {
  border-radius: 18px;
  background-color: #E8E8EE;
}

.bs-news-badge-overlay {
  background: rgba(20, 20, 24, 0.65);
  backdrop-filter: blur(12px);
  -webkit-backdrop-filter: blur(12px);
  border-bottom-left-radius: 18px;
  border-bottom-right-radius: 18px;
  font-family: 'uncut-sans', sans-serif;
  letter-spacing: 0.02em;
}

.bs-news-title {
  font-family: 'uncut-sans', sans-serif;
  font-size: 1.18rem;
  line-height: 1.35;
  letter-spacing: -0.01em;
}

.bs-news-title a {
  transition: color 0.2s ease;
}

.bs-news-title a:hover,
.hover-pink:hover {
  color: #D3207C !important;
}

@media (max-width: 575.98px) {
  .bs-news-image-wrapper img {
    min-height: 200px !important;
    max-height: 200px !important;
  }
}
</style>
