<?php
// includes/header.php - Global Mega Menu Navigation Header (1:1 Exact Blue Frontier Replica)
require_once __DIR__ . '/../config.php';
?>
<!DOCTYPE html>
<html lang="en-gb" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?php echo DEFAULT_META_DESC; ?>">
  <title><?php echo DEFAULT_META_TITLE; ?></title>

  <!-- Open Graph Metadata -->
  <meta property="og:title" content="<?php echo DEFAULT_META_TITLE; ?>">
  <meta property="og:description" content="<?php echo DEFAULT_META_DESC; ?>">
  <meta property="og:type" content="website">
  <meta property="og:image" content="<?php echo DEFAULT_META_IMAGE; ?>">
  <meta property="og:url" content="<?php echo SITE_URL; ?>">
  <link rel="canonical" href="<?php echo SITE_URL; ?>">

  <!-- Preload Fonts -->
  <link rel="preload" as="font" href="assets/fonts/uncut-sans--medium.woff2" type="font/woff2" crossorigin="">
  <link rel="preload" as="font" href="assets/fonts/awesome-serif--bold-extra-tall-italic.woff2" type="font/woff2" crossorigin="">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <!-- Core Blue Frontier & Custom Stylesheets -->
  <link href="css/variables.css" rel="stylesheet">
  <link href="css/reset.css" rel="stylesheet">
  <link href="assets/css/template.min.css" rel="stylesheet">
  <link href="css/components.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">



  <link rel="icon" type="image/webp" href="<?php echo LOGO_PATH; ?>">
</head>

<body class="site has-hero-banner has-image-marquee has-scroll-list has-cs-masonry-grid has-tabbed-content has-custom-editor has-logo-grid has-testimonial-carousel has-featured-content has-news-article-list">

<header class="menu-header position-fixed w-100 top-0 start-0">
  <nav class="menu-header--inner navbar navbar-dark navbar-expand-xl d-flex align-items-center justify-content-between flex-row position-relative mx-auto w-100">
    
    <!-- 1. Far Left Section: Logo -->
    <div class="menu-header--left brand-toggle-wrapper d-flex align-items-center justify-content-start">
      <a class="menu-header--brand navbar-brand m-0 p-0 d-flex align-items-center" href="index.php">
        <img src="<?php echo LOGO_PATH; ?>" alt="<?php echo SITE_NAME; ?>" style="max-height: 50px; width: auto; display: block;">
      </a>
    </div>

    <button class="menu-header--toggle navbar-toggler d-xl-none" type="button" data-bs-toggle="collapse" data-bs-target="#mainmenu" aria-controls="mainmenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="menu-header--toggle-icon navbar-toggler-icon"></span>
    </button>
    
    <!-- 2. Dead Center Section: Navigation Links with Hover Capsule Highlight -->
    <div class="menu-header--main-menu collapse navbar-collapse justify-content-center" id="mainmenu">
      
      <!-- Mobile Drawer Top Bar (Screens < 1200px) -->
      <div class="bf-mobile-drawer-header d-xl-none d-flex align-items-center justify-content-between pb-3 mb-2 w-100">
        <a href="index.php">
          <img src="<?php echo LOGO_PATH; ?>" alt="<?php echo SITE_NAME; ?>" style="max-height: 40px;">
        </a>
        <button class="btn btn-link text-white text-decoration-none p-2 bf-mobile-drawer-close" type="button" data-bs-toggle="collapse" data-bs-target="#mainmenu" aria-label="Close navigation">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
        </button>
      </div>

      <ul class="navbar-nav align-items-center justify-content-center m-0 p-0">
        
        <!-- 1. About Dropdown -->
        <li class="nav-item dropdown w-100 w-xl-auto">
          <a class="nav-link dropdown-toggle text-white font-weight-bold px-3 py-2 d-flex align-items-center justify-content-between" href="index.php#about" role="button">
            <span>About</span>
            <span class="bf-mobile-accordion-icon d-xl-none fs-4 fw-light">+</span>
          </a>
          <div class="dropdown-menu bf-megamenu-panel border-0 shadow-2xl p-4">
            <div class="row g-4 align-items-stretch">
              <!-- Left Content Area -->
              <div class="col-12 col-lg-7 d-flex flex-column justify-content-between">
                <div>
                  <h4 class="bf-megamenu-title fw-bold text-dark mb-1">All About Us</h4>
                  <p class="bf-megamenu-desc text-secondary small mb-3">Find out more about who we are, our values and culture, our history, and our incredible team.</p>
                  <hr class="my-3 opacity-10">
                  <div class="bf-megamenu-section-label text-uppercase fw-bold text-muted mb-2" style="font-size: 0.725rem; letter-spacing: 0.1em;">EXPLORE</div>
                  <div class="row g-2">
                    <div class="col-6"><a href="index.php#about" class="bf-megamenu-link">Digital Partner</a></div>
                    <div class="col-6"><a href="index.php#case-studies" class="bf-megamenu-link">Our Work</a></div>
                    <div class="col-6"><a href="index.php#about" class="bf-megamenu-link">Sectors</a></div>
                    <div class="col-6"><a href="index.php#insights" class="bf-megamenu-link">Latest News</a></div>
                    <div class="col-6"><a href="index.php#insights" class="bf-megamenu-link">Blog</a></div>
                    <div class="col-6"><a href="index.php#about" class="bf-megamenu-link">Meet the Team</a></div>
                  </div>
                </div>
              </div>
              <!-- Right Dark Featured Card -->
              <div class="col-12 col-lg-5">
                <div class="bf-megamenu-card p-3 rounded-4 text-white h-100 d-flex flex-column justify-content-between" style="background: #242528;">
                  <div>
                    <img src="assets/images/benefits-of-market-research.jpg" alt="Whitepaper" class="w-100 rounded-3 mb-3 object-cover" style="height: 140px;">
                    <h5 class="fw-bold fs-6 mb-2 text-white">Download our latest free whitepaper</h5>
                    <p class="small text-white-50 mb-3" style="font-size: 0.825rem; line-height: 1.45;">Explore the consumer behaviours and market shifts shaping the future of digital growth.</p>
                  </div>
                  <a href="index.php#insights" class="text-white fw-bold text-decoration-underline small">Download today &rarr;</a>
                </div>
              </div>
            </div>
          </div>
        </li>

        <!-- 2. Web Design & Dev Dropdown -->
        <li class="nav-item dropdown w-100 w-xl-auto">
          <a class="nav-link dropdown-toggle text-white font-weight-bold px-3 py-2 d-flex align-items-center justify-content-between" href="web-design.php" role="button">
            <span>Web Design &amp; Dev</span>
            <span class="bf-mobile-accordion-icon d-xl-none fs-4 fw-light">+</span>
          </a>
          <div class="dropdown-menu bf-megamenu-panel border-0 shadow-2xl p-4">
            <div class="row g-4 align-items-stretch">
              <div class="col-12 col-lg-7 d-flex flex-column justify-content-between">
                <div>
                  <h4 class="bf-megamenu-title fw-bold text-dark mb-1">Web Design &amp; Development</h4>
                  <p class="bf-megamenu-desc text-secondary small mb-3">Custom web solutions built to perform, convert visitors, and deliver measurable growth.</p>
                  <hr class="my-3 opacity-10">
                  <div class="row g-3">
                    <div class="col-6">
                      <div class="bf-megamenu-section-label text-uppercase fw-bold text-muted mb-2" style="font-size: 0.725rem; letter-spacing: 0.1em;">SERVICES</div>
                      <div class="d-flex flex-column gap-1">
                        <a href="web-design.php" class="bf-megamenu-link">Custom Web Design</a>
                        <a href="web-design.php" class="bf-megamenu-link">E-Commerce Websites</a>
                        <a href="web-design.php" class="bf-megamenu-link">Web Applications</a>
                        <a href="web-design.php" class="bf-megamenu-link">Maintenance &amp; Support</a>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="bf-megamenu-section-label text-uppercase fw-bold text-muted mb-2" style="font-size: 0.725rem; letter-spacing: 0.1em;">PLATFORMS</div>
                      <div class="d-flex flex-column gap-1">
                        <a href="web-design.php" class="bf-megamenu-link">WordPress</a>
                        <a href="web-design.php" class="bf-megamenu-link">Shopify</a>
                        <a href="web-design.php" class="bf-megamenu-link">Custom PHP / Laravel</a>
                        <a href="web-design.php" class="bf-megamenu-link">React / Next.js</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-lg-5">
                <div class="bf-megamenu-card p-3 rounded-4 text-white h-100 d-flex flex-column justify-content-between" style="background: #242528;">
                  <div>
                    <img src="assets/images/bf-web-showcase.jpg" alt="Web Showcase" class="w-100 rounded-3 mb-3 object-cover" style="height: 140px;">
                    <h5 class="fw-bold fs-6 mb-2 text-white">Conversion-Focused Web Architecture</h5>
                    <p class="small text-white-50 mb-3" style="font-size: 0.825rem; line-height: 1.45;">Discover how our bespoke web designs drive up to 3x higher lead conversions.</p>
                  </div>
                  <a href="web-design.php" class="text-white fw-bold text-decoration-underline small">Explore services &rarr;</a>
                </div>
              </div>
            </div>
          </div>
        </li>

        <!-- 3. Branding Dropdown -->
        <li class="nav-item dropdown w-100 w-xl-auto">
          <a class="nav-link dropdown-toggle text-white font-weight-bold px-3 py-2 d-flex align-items-center justify-content-between" href="branding.php" role="button">
            <span>Branding</span>
            <span class="bf-mobile-accordion-icon d-xl-none fs-4 fw-light">+</span>
          </a>
          <div class="dropdown-menu bf-megamenu-panel border-0 shadow-2xl p-4">
            <div class="row g-4 align-items-stretch">
              <div class="col-12 col-lg-7 d-flex flex-column justify-content-between">
                <div>
                  <h4 class="bf-megamenu-title fw-bold text-dark mb-1">Brand Identity &amp; Strategy</h4>
                  <p class="bf-megamenu-desc text-secondary small mb-3">Memorable brand identities, guidelines, and visual narratives designed to stand out.</p>
                  <hr class="my-3 opacity-10">
                  <div class="row g-3">
                    <div class="col-6">
                      <div class="bf-megamenu-section-label text-uppercase fw-bold text-muted mb-2" style="font-size: 0.725rem; letter-spacing: 0.1em;">IDENTITY</div>
                      <div class="d-flex flex-column gap-1">
                        <a href="branding.php" class="bf-megamenu-link">Brand Strategy</a>
                        <a href="branding.php" class="bf-megamenu-link">Logo Design</a>
                        <a href="branding.php" class="bf-megamenu-link">Brand Guidelines</a>
                        <a href="branding.php" class="bf-megamenu-link">Rebranding</a>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="bf-megamenu-section-label text-uppercase fw-bold text-muted mb-2" style="font-size: 0.725rem; letter-spacing: 0.1em;">ASSETS</div>
                      <div class="d-flex flex-column gap-1">
                        <a href="branding.php" class="bf-megamenu-link">Typography Systems</a>
                        <a href="branding.php" class="bf-megamenu-link">Color Palettes</a>
                        <a href="branding.php" class="bf-megamenu-link">Brand Messaging</a>
                        <a href="branding.php" class="bf-megamenu-link">Visual Toolkits</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-lg-5">
                <div class="bf-megamenu-card p-3 rounded-4 text-white h-100 d-flex flex-column justify-content-between" style="background: #242528;">
                  <div>
                    <img src="assets/images/Branding.png" alt="Branding Showcase" class="w-100 rounded-3 mb-3 object-cover" style="height: 140px;">
                    <h5 class="fw-bold fs-6 mb-2 text-white">Distinctive Visual Identities</h5>
                    <p class="small text-white-50 mb-3" style="font-size: 0.825rem; line-height: 1.45;">Create a memorable brand experience that captivates and converts your ideal clients.</p>
                  </div>
                  <a href="branding.php" class="text-white fw-bold text-decoration-underline small">View branding &rarr;</a>
                </div>
              </div>
            </div>
          </div>
        </li>

        <!-- 4. Graphic Design Dropdown -->
        <li class="nav-item dropdown w-100 w-xl-auto">
          <a class="nav-link dropdown-toggle text-white font-weight-bold px-3 py-2 d-flex align-items-center justify-content-between" href="graphic-design.php" role="button">
            <span>Graphic Design</span>
            <span class="bf-mobile-accordion-icon d-xl-none fs-4 fw-light">+</span>
          </a>
          <div class="dropdown-menu bf-megamenu-panel border-0 shadow-2xl p-4">
            <div class="row g-4 align-items-stretch">
              <div class="col-12 col-lg-7 d-flex flex-column justify-content-between">
                <div>
                  <h4 class="bf-megamenu-title fw-bold text-dark mb-1">Graphic &amp; Digital Design</h4>
                  <p class="bf-megamenu-desc text-secondary small mb-3">High-impact visual collateral, marketing assets, and modern UI/UX design.</p>
                  <hr class="my-3 opacity-10">
                  <div class="row g-3">
                    <div class="col-6">
                      <div class="bf-megamenu-section-label text-uppercase fw-bold text-muted mb-2" style="font-size: 0.725rem; letter-spacing: 0.1em;">DIGITAL</div>
                      <div class="d-flex flex-column gap-1">
                        <a href="graphic-design.php" class="bf-megamenu-link">UI/UX Design</a>
                        <a href="graphic-design.php" class="bf-megamenu-link">Social Media Creatives</a>
                        <a href="graphic-design.php" class="bf-megamenu-link">Ad Banners</a>
                        <a href="graphic-design.php" class="bf-megamenu-link">Pitch Decks</a>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="bf-megamenu-section-label text-uppercase fw-bold text-muted mb-2" style="font-size: 0.725rem; letter-spacing: 0.1em;">PRINT</div>
                      <div class="d-flex flex-column gap-1">
                        <a href="graphic-design.php" class="bf-megamenu-link">Brochures &amp; Flyers</a>
                        <a href="graphic-design.php" class="bf-megamenu-link">Packaging Design</a>
                        <a href="graphic-design.php" class="bf-megamenu-link">Stationery</a>
                        <a href="graphic-design.php" class="bf-megamenu-link">Signage &amp; Large Format</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-lg-5">
                <div class="bf-megamenu-card p-3 rounded-4 text-white h-100 d-flex flex-column justify-content-between" style="background: #242528;">
                  <div>
                    <img src="assets/images/Graphic-Desining.png" alt="Graphic Design" class="w-100 rounded-3 mb-3 object-cover" style="height: 140px;">
                    <h5 class="fw-bold fs-6 mb-2 text-white">Visual Storytelling That Sells</h5>
                    <p class="small text-white-50 mb-3" style="font-size: 0.825rem; line-height: 1.45;">Eye-catching graphics that communicate your value proposition instantly.</p>
                  </div>
                  <a href="graphic-design.php" class="text-white fw-bold text-decoration-underline small">See creative work &rarr;</a>
                </div>
              </div>
            </div>
          </div>
        </li>

        <!-- 5. Digital Marketing Dropdown -->
        <li class="nav-item dropdown w-100 w-xl-auto">
          <a class="nav-link dropdown-toggle text-white font-weight-bold px-3 py-2 d-flex align-items-center justify-content-between" href="digital-marketing.php" role="button">
            <span>Digital Marketing</span>
            <span class="bf-mobile-accordion-icon d-xl-none fs-4 fw-light">+</span>
          </a>
          <div class="dropdown-menu bf-megamenu-panel border-0 shadow-2xl p-4 align-right">
            <div class="row g-4 align-items-stretch">
              <div class="col-12 col-lg-7 d-flex flex-column justify-content-between">
                <div>
                  <h4 class="bf-megamenu-title fw-bold text-dark mb-1">Digital Marketing &amp; SEO</h4>
                  <p class="bf-megamenu-desc text-secondary small mb-3">Data-driven growth strategies that generate qualified leads and maximize ROI.</p>
                  <hr class="my-3 opacity-10">
                  <div class="row g-3">
                    <div class="col-6">
                      <div class="bf-megamenu-section-label text-uppercase fw-bold text-muted mb-2" style="font-size: 0.725rem; letter-spacing: 0.1em;">CHANNELS</div>
                      <div class="d-flex flex-column gap-1">
                        <a href="digital-marketing.php" class="bf-megamenu-link">Search Engine Optimisation (SEO)</a>
                        <a href="digital-marketing.php" class="bf-megamenu-link">Pay-Per-Click (PPC)</a>
                        <a href="digital-marketing.php" class="bf-megamenu-link">Social Media Marketing</a>
                        <a href="digital-marketing.php" class="bf-megamenu-link">Content Marketing</a>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="bf-megamenu-section-label text-uppercase fw-bold text-muted mb-2" style="font-size: 0.725rem; letter-spacing: 0.1em;">STRATEGY</div>
                      <div class="d-flex flex-column gap-1">
                        <a href="digital-marketing.php" class="bf-megamenu-link">Conversion Rate Optimisation</a>
                        <a href="digital-marketing.php" class="bf-megamenu-link">Email Marketing</a>
                        <a href="digital-marketing.php" class="bf-megamenu-link">Analytics &amp; Reporting</a>
                        <a href="digital-marketing.php" class="bf-megamenu-link">Lead Generation</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-lg-5">
                <div class="bf-megamenu-card p-3 rounded-4 text-white h-100 d-flex flex-column justify-content-between" style="background: #242528;">
                  <div>
                    <img src="assets/images/Digital-Marketing.png" alt="Digital Marketing" class="w-100 rounded-3 mb-3 object-cover" style="height: 140px;">
                    <h5 class="fw-bold fs-6 mb-2 text-white">Targeted Growth Campaigns</h5>
                    <p class="small text-white-50 mb-3" style="font-size: 0.825rem; line-height: 1.45;">Reach ready-to-buy customers with precision multi-channel digital campaigns.</p>
                  </div>
                  <a href="digital-marketing.php" class="text-white fw-bold text-decoration-underline small">Grow your traffic &rarr;</a>
                </div>
              </div>
            </div>
          </div>
        </li>

        <!-- 6. App Development Dropdown -->
        <li class="nav-item dropdown w-100 w-xl-auto">
          <a class="nav-link dropdown-toggle text-white font-weight-bold px-3 py-2 d-flex align-items-center justify-content-between" href="app-development.php" role="button">
            <span>App Development</span>
            <span class="bf-mobile-accordion-icon d-xl-none fs-4 fw-light">+</span>
          </a>
          <div class="dropdown-menu bf-megamenu-panel border-0 shadow-2xl p-4 align-right">
            <div class="row g-4 align-items-stretch">
              <div class="col-12 col-lg-7 d-flex flex-column justify-content-between">
                <div>
                  <h4 class="bf-megamenu-title fw-bold text-dark mb-1">Mobile &amp; Web Apps</h4>
                  <p class="bf-megamenu-desc text-secondary small mb-3">Custom iOS, Android, and cross-platform applications built for scalability.</p>
                  <hr class="my-3 opacity-10">
                  <div class="row g-3">
                    <div class="col-6">
                      <div class="bf-megamenu-section-label text-uppercase fw-bold text-muted mb-2" style="font-size: 0.725rem; letter-spacing: 0.1em;">PLATFORMS</div>
                      <div class="d-flex flex-column gap-1">
                        <a href="app-development.php" class="bf-megamenu-link">iOS App Development</a>
                        <a href="app-development.php" class="bf-megamenu-link">Android App Development</a>
                        <a href="app-development.php" class="bf-megamenu-link">React Native / Flutter</a>
                        <a href="app-development.php" class="bf-megamenu-link">Progressive Web Apps (PWA)</a>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="bf-megamenu-section-label text-uppercase fw-bold text-muted mb-2" style="font-size: 0.725rem; letter-spacing: 0.1em;">SERVICES</div>
                      <div class="d-flex flex-column gap-1">
                        <a href="app-development.php" class="bf-megamenu-link">App Architecture</a>
                        <a href="app-development.php" class="bf-megamenu-link">UI/UX App Design</a>
                        <a href="app-development.php" class="bf-megamenu-link">API &amp; Cloud Integration</a>
                        <a href="app-development.php" class="bf-megamenu-link">App Store Launch</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-lg-5">
                <div class="bf-megamenu-card p-3 rounded-4 text-white h-100 d-flex flex-column justify-content-between" style="background: #242528;">
                  <div>
                    <img src="assets/images/Mobile-App.png" alt="Mobile App" class="w-100 rounded-3 mb-3 object-cover" style="height: 140px;">
                    <h5 class="fw-bold fs-6 mb-2 text-white">Scalable Mobile Experiences</h5>
                    <p class="small text-white-50 mb-3" style="font-size: 0.825rem; line-height: 1.45;">From concept to App Store, build powerful apps your users will love.</p>
                  </div>
                  <a href="app-development.php" class="text-white fw-bold text-decoration-underline small">Explore apps &rarr;</a>
                </div>
              </div>
            </div>
          </div>
        </li>

      </ul>

      <!-- Mobile Drawer Pinned CTA Button (Screens < 1200px) -->
      <div class="bf-mobile-drawer-cta d-xl-none pt-4 pb-2 w-100">
        <a href="contact.php" class="btn w-100 py-3 fw-bold rounded-3 fs-6 d-flex align-items-center justify-content-center open-modal-btn" style="background: linear-gradient(135deg, #722C89 0%, #D3207C 100%) !important; color: #FFFFFF !important; font-weight: 800; border-radius: 12px; box-shadow: 0 6px 20px rgba(211, 32, 124, 0.45); border: 1px solid rgba(255,255,255,0.25);">
          Contact Us
        </a>
      </div>

    </div>

    <!-- 3. Far Right Section: Exact Brands Shift Nectar CTA Button -->
    <div class="menu-header--right d-none d-xl-flex align-items-center justify-content-end">
      <div class="nectar-cta border_radius_100px alignment_tablet_default alignment_phone_default display_tablet_inherit display_phone_inherit backdrop_filter_blur_13" data-color="accent-color" data-using-bg="true" data-style="arrow-circle-animation" data-display="inline" data-alignment="left" data-text-color="custom">
        <span style="color: #FFFFFF;" class="nectar-button-type">
          <span class="link_wrap" style="padding-top: 4px; padding-right: 4px; padding-bottom: 4px; padding-left: 20px;">
            <a class="link_text open-modal-btn text-nowrap" role="button" href="contact.php">
              <span class="text" style="font-size: 0.875rem; font-weight: 700; white-space: nowrap;">Contact Us</span>
              <div class="arrow-circle-animation-arrow-wrap" style="width: 32px; height: 32px;">
                <svg class="arrow-circle-animation-arrow" viewBox="0 0 24 24" fill="currentColor"><path d="M16.0037 9.41421L7.39712 18.0208L5.98291 16.6066L14.5895 8H7.00373V6H18.0037V17H16.0037V9.41421Z"></path></svg>
                <svg class="arrow-circle-animation-arrow hover" viewBox="0 0 24 24" fill="currentColor"><path d="M16.0037 9.41421L7.39712 18.0208L5.98291 16.6066L14.5895 8H7.00373V6H18.0037V17H16.0037V9.41421Z"></path></svg>
              </div>
            </a>
          </span>
        </span>
      </div>
    </div>

  </nav>
</header>

<div id="main">
  <main>
    <div class="com-content-article item-page">
      <div class="com-content-article__body">
