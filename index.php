<?php
// index.php - Main Entry Point for Brands Shift Website (1:1 Blue Frontier Architecture)
require_once __DIR__ . '/config.php';

// 1. Global Mega Menu Navigation Header
include_once __DIR__ . '/includes/header.php';
?>

<main id="mainContent">
  
  <!-- 2. Hero Section with Background Video & Showreel Modal -->
  <?php include_once __DIR__ . '/includes/hero.php'; ?>

  <!-- 3. Agency Statement & Partner Certifications Marquee -->
  <?php include_once __DIR__ . '/includes/statement-marquee.php'; ?>

  <!-- 4. Specialist Digital Solutions Interactive Section -->
  <?php include_once __DIR__ . '/includes/solutions-section.php'; ?>

  <!-- 5. Our Work / Featured Case Studies Grid -->
  <?php include_once __DIR__ . '/includes/case-studies-section.php'; ?>


  <!-- 7. 1:1 50/50 Split Video & Testimonial Slider Section -->
  <?php include_once __DIR__ . '/includes/testimonial-split.php'; ?>

  <!-- 8. Latest News & Updates (3-Column Article Cards) -->
  <?php include_once __DIR__ . '/includes/insights-section.php'; ?>

  <!-- 9. Full-Width Consultation Banner CTA (Hidden as requested) -->
  <?php // include_once __DIR__ . '/includes/cta-section.php'; ?>

</main>

<?php
// 10. Global Footer Component & Contact Modal
include_once __DIR__ . '/includes/footer.php';
?>



