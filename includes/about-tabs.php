<?php
// includes/about-tabs.php - Full-Width Video Banner Component
require_once __DIR__ . '/../config.php';
?>

<!-- 1. Full-Width Video Banner (Autoplay, Muted, Loop, Edge-to-Edge) -->
<section class="position-relative z-1 p-0 m-0 w-100 overflow-hidden" style="background-color: #0A0A0B;">
  <div class="container-fluid px-0 m-0 w-100">
    <div class="w-100 position-relative" style="max-height: 650px; overflow: hidden;">
      <video autoplay muted loop playsinline class="w-100 h-100 object-cover" style="width: 100%; max-height: 650px; object-fit: cover; display: block;">
        <source src="assets/videos/20186336-hd_1920_1080_60fps.mp4" type="video/mp4">
      </video>
    </div>
  </div>
</section>

