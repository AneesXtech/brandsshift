<?php
// includes/services-grid.php - Complete Blue Frontier Homepage Content Sections
require_once __DIR__ . '/../config.php';
?>

<!-- 1. Statement Banner & Partner Certifications Logo Marquee -->
<section class="bg-dark text-white py-5 border-radius-bottom-xl position-relative z-1" style="background-color: #0A0A0B;">
  <div class="container py-4">
    <div class="row justify-content-center mb-5">
      <div class="col-12 col-lg-10 text-center">
        <p class="h2 font-weight-normal text-white lh-base display-6" style="font-size: clamp(1.5rem, 2.8vw, 2.25rem); font-family: var(--font-heading);">
          We are the agency that uses data and insight as a foundation to create digital solutions that drive operational efficiency, technical innovation, and business growth.
        </p>
      </div>
    </div>

    <!-- Partner Certifications Infinite Marquee Slider -->
    <div class="partner-marquee-wrapper overflow-hidden py-3">
      <div class="partner-marquee-track d-flex align-items-center gap-5">
        <img src="assets/images/aws.png" alt="AWS Partner" class="marquee-logo">
        <img src="assets/images/google-partner.png" alt="Google Partner" class="marquee-logo">
        <img src="assets/images/meta-certified.png" alt="Meta Certified" class="marquee-logo">
        <img src="assets/images/microsoft-partner-2025.png" alt="Microsoft Partner" class="marquee-logo">
        <img src="assets/images/cyber-essentials.png" alt="Cyber Essentials" class="marquee-logo">
        <img src="assets/images/iso9001.png" alt="ISO 9001" class="marquee-logo">
        <img src="assets/images/iso27001.png" alt="ISO 27001" class="marquee-logo">
        <img src="assets/images/iso14001.png" alt="ISO 14001" class="marquee-logo">
        <img src="assets/images/iso13485.png" alt="ISO 13485" class="marquee-logo">
        <img src="assets/images/Crest.png" alt="Crest Approved" class="marquee-logo">
        <img src="assets/images/cim.png" alt="CIM" class="marquee-logo">
        <img src="assets/images/sophos.png" alt="Sophos" class="marquee-logo">

        <!-- Duplicate track items for infinite smooth marquee scroll -->
        <img src="assets/images/aws.png" alt="AWS Partner" class="marquee-logo">
        <img src="assets/images/google-partner.png" alt="Google Partner" class="marquee-logo">
        <img src="assets/images/meta-certified.png" alt="Meta Certified" class="marquee-logo">
        <img src="assets/images/microsoft-partner-2025.png" alt="Microsoft Partner" class="marquee-logo">
        <img src="assets/images/cyber-essentials.png" alt="Cyber Essentials" class="marquee-logo">
        <img src="assets/images/iso9001.png" alt="ISO 9001" class="marquee-logo">
      </div>
    </div>
  </div>
</section>

<!-- 2. Specialist Digital Solutions Section -->
<section class="py-6 bg-primary-canvas" id="solutions">
  <div class="container py-5">
    
    <div class="row mb-5 align-items-end">
      <div class="col-12 col-lg-4 mb-3 mb-lg-0">
        <span class="text-uppercase font-weight-bold text-purple tracking-widest font-size-xs">OUR SOLUTIONS</span>
      </div>
      <div class="col-12 col-lg-8">
        <h2 class="display-5 font-weight-extrabold text-black" style="font-size: clamp(2rem, 3.8vw, 3.2rem);">
          Specialist digital solutions that support your organisation’s unique goals
        </h2>
      </div>
    </div>

    <!-- 6 Solutions Interactive List -->
    <div class="solutions-interactive-list">
      
      <!-- 01 Research & Strategy -->
      <div class="solution-row py-4 border-bottom d-flex flex-column flex-lg-row align-items-start gap-4">
        <div class="solution-num text-muted font-monospace display-6">01</div>
        <div class="solution-thumb flex-shrink-0" style="width: 280px;">
          <img src="assets/images/benefits-of-market-research.jpg" alt="Research & Strategy" class="img-fluid border-radius-md shadow-md">
        </div>
        <div class="solution-info flex-grow-1">
          <h3 class="font-weight-bold mb-2"><a href="services.php#strategy" class="text-black text-decoration-none">Research &amp; Strategy</a></h3>
          <p class="text-muted mb-3">
            Business success is driven by informed decisions. We combine our breadth of expertise with industry leading market research tools to unlock valuable data and insights that form the groundwork for strategic direction.
          </p>
          <div class="d-flex flex-wrap gap-2">
            <a href="services.php#market-insights" class="btn btn-sm btn-light btn-rounded">Market Insights</a>
            <a href="services.php#brand-audit" class="btn btn-sm btn-light btn-rounded">Brand Audit &amp; Strategy</a>
          </div>
        </div>
      </div>

      <!-- 02 Websites & Software -->
      <div class="solution-row py-4 border-bottom d-flex flex-column flex-lg-row align-items-start gap-4">
        <div class="solution-num text-muted font-monospace display-6">02</div>
        <div class="solution-thumb flex-shrink-0" style="width: 280px;">
          <img src="assets/images/Website-Desing-Mockup.png" alt="Websites &amp; Software" class="img-fluid border-radius-md shadow-md">
        </div>
        <div class="solution-info flex-grow-1">
          <h3 class="font-weight-bold mb-2"><a href="services.php#websites" class="text-black text-decoration-none">Websites &amp; Software</a></h3>
          <p class="text-muted mb-3">
            We are one of the UK’s leading development agencies, proficient in over 15 coding languages and frameworks. Our teams create systems that drive success, whether you’re looking for a striking website or a powerful custom portal.
          </p>
          <div class="d-flex flex-wrap gap-2">
            <a href="#web-design" class="btn btn-sm btn-light btn-rounded">Web Design &amp; Development</a>
            <a href="#ecommerce" class="btn btn-sm btn-light btn-rounded">eCommerce</a>
            <a href="#software" class="btn btn-sm btn-light btn-rounded">Software Development</a>
            <a href="#app-development" class="btn btn-sm btn-light btn-rounded">App Development</a>
            <a href="#wordpress" class="btn btn-sm btn-light btn-rounded">WordPress</a>
          </div>
        </div>
      </div>

      <!-- 03 Digital Marketing -->
      <div class="solution-row py-4 border-bottom d-flex flex-column flex-lg-row align-items-start gap-4">
        <div class="solution-num text-muted font-monospace display-6">03</div>
        <div class="solution-thumb flex-shrink-0" style="width: 280px;">
          <img src="assets/images/Digital-Marketing.png" alt="Digital Marketing" class="img-fluid border-radius-md shadow-md">
        </div>
        <div class="solution-info flex-grow-1">
          <h3 class="font-weight-bold mb-2"><a href="services.php#marketing" class="text-black text-decoration-none">Digital Marketing</a></h3>
          <p class="text-muted mb-3">
            A strong digital presence is key to driving growth in every business. We harness data to build digital campaigns that are designed to succeed. From one-off audits to ongoing, flexible retainers, we create a service offering that works for your goals.
          </p>
          <div class="d-flex flex-wrap gap-2">
            <a href="services.php#strategy" class="btn btn-sm btn-light btn-rounded">Marketing Strategy</a>
            <a href="services.php#seo" class="btn btn-sm btn-light btn-rounded">SEO</a>
            <a href="services.php#paid-advertising" class="btn btn-sm btn-light btn-rounded">Paid Advertising</a>
            <a href="services.php#social-media" class="btn btn-sm btn-light btn-rounded">Social Media</a>
          </div>
        </div>
      </div>

      <!-- 04 IT & Cyber Security -->
      <div class="solution-row py-4 border-bottom d-flex flex-column flex-lg-row align-items-start gap-4">
        <div class="solution-num text-muted font-monospace display-6">04</div>
        <div class="solution-thumb flex-shrink-0" style="width: 280px;">
          <img src="assets/images/technical.jpg" alt="IT & Cyber Security" class="img-fluid border-radius-md shadow-md">
        </div>
        <div class="solution-info flex-grow-1">
          <h3 class="font-weight-bold mb-2"><a href="services.php#it-cyber" class="text-black text-decoration-none">IT &amp; Cyber Security</a></h3>
          <p class="text-muted mb-3">
            Drive technical efficiency, maximise operational performance, and optimise your organisation’s security. Our teams use specialist tools and expertise to deliver scalable, yet robust solutions across IT, infrastructure, and cyber security.
          </p>
          <div class="d-flex flex-wrap gap-2">
            <a href="services.php#managed-it" class="btn btn-sm btn-light btn-rounded">Managed IT Services</a>
            <a href="services.php#modern-workplaces" class="btn btn-sm btn-light btn-rounded">Modern Workplace Solutions</a>
            <a href="services.php#cyber-security" class="btn btn-sm btn-light btn-rounded">Cyber Security</a>
            <a href="services.php#cloud-services" class="btn btn-sm btn-light btn-rounded">Cloud Services</a>
          </div>
        </div>
      </div>

      <!-- 05 AI Solutions -->
      <div class="solution-row py-4 border-bottom d-flex flex-column flex-lg-row align-items-start gap-4">
        <div class="solution-num text-muted font-monospace display-6">05</div>
        <div class="solution-thumb flex-shrink-0" style="width: 280px;">
          <img src="assets/images/ai-solutions.jpg" alt="AI Solutions" class="img-fluid border-radius-md shadow-md">
        </div>
        <div class="solution-info flex-grow-1">
          <h3 class="font-weight-bold mb-2"><a href="services.php#ai-solutions" class="text-black text-decoration-none">AI Solutions</a></h3>
          <p class="text-muted mb-3">
            We are committed to driving AI innovation and offering AI solutions that have a meaningful operational impact on your business. We support your business throughout the AI lifecycle from consultation to practical implementation.
          </p>
          <div class="d-flex flex-wrap gap-2">
            <a href="services.php#ai-consultancy" class="btn btn-sm btn-light btn-rounded">AI Consultancy</a>
            <a href="services.php#ai-integration" class="btn btn-sm btn-light btn-rounded">AI Integration</a>
            <a href="services.php#workflow-automation" class="btn btn-sm btn-light btn-rounded">Workflow Automation</a>
          </div>
        </div>
      </div>

      <!-- 06 Creative Studio -->
      <div class="solution-row py-4 d-flex flex-column flex-lg-row align-items-start gap-4">
        <div class="solution-num text-muted font-monospace display-6">06</div>
        <div class="solution-thumb flex-shrink-0" style="width: 280px;">
          <img src="assets/images/Branding.png" alt="Creative Studio" class="img-fluid border-radius-md shadow-md">
        </div>
        <div class="solution-info flex-grow-1">
          <h3 class="font-weight-bold mb-2"><a href="services.php#creative" class="text-black text-decoration-none">Creative Studio</a></h3>
          <p class="text-muted mb-3">
            Unleash the creativity and personality of your brand through the power of photography, video and graphic design. We use data and key design principles to create unique and exciting brands and content made to stand out.
          </p>
          <div class="d-flex flex-wrap gap-2">
            <a href="#branding" class="btn btn-sm btn-light btn-rounded">Branding</a>
            <a href="#graphic-design" class="btn btn-sm btn-light btn-rounded">Graphic Design</a>
            <a href="#video-photo" class="btn btn-sm btn-light btn-rounded">Video &amp; Animation</a>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- 3. Our Work / Featured Case Studies Masonry Section -->
<section class="py-6 bg-dark text-white" id="work" style="background-color: #0A0A0B;">
  <div class="container py-5">
    
    <div class="row mb-5">
      <div class="col-12 col-lg-8">
        <span class="text-uppercase font-weight-bold text-primary tracking-widest font-size-xs">OUR WORK</span>
        <h2 class="display-5 font-weight-extrabold text-white mt-2">Delivering value to businesses in all sectors</h2>
      </div>
    </div>

    <!-- Case Studies Grid -->
    <div class="row g-4">
      
      <!-- Card 1: MAMA Noodles -->
      <div class="col-12 col-md-6 col-lg-6">
        <div class="case-card position-relative overflow-hidden border-radius-lg bg-dark-card border border-dark-border h-100 p-0 shadow-lg">
          <img src="assets/images/mama-noodles-case-study.jpg" alt="MAMA Noodles" class="w-100 object-cover" style="height: 280px;">
          <div class="p-4">
            <div class="d-flex gap-2 mb-3">
              <span class="badge bg-white text-dark font-monospace">Marketing</span>
              <span class="badge bg-white text-dark font-monospace">Market Research</span>
            </div>
            <h3 class="h4 text-white font-weight-bold">From Bangkok to Britain: powering UK market penetration for MAMA Noodles</h3>
            <a href="case-studies.php" class="text-primary font-weight-bold text-decoration-none mt-3 d-inline-block">Read Case Study &rarr;</a>
          </div>
        </div>
      </div>

      <!-- Card 2: Pimlico Plumbers -->
      <div class="col-12 col-md-6 col-lg-6">
        <div class="case-card position-relative overflow-hidden border-radius-lg bg-dark-card border border-dark-border h-100 p-0 shadow-lg">
          <img src="assets/images/pimlico-plumbers-case-study.jpg" alt="Pimlico Plumbers" class="w-100 object-cover" style="height: 280px;">
          <div class="p-4">
            <div class="d-flex gap-2 mb-3">
              <span class="badge bg-white text-dark font-monospace">IT Support</span>
              <span class="badge bg-white text-dark font-monospace">Infrastructure</span>
            </div>
            <h3 class="h4 text-white font-weight-bold">Scalable IT infrastructure &amp; managed cloud services for Pimlico Plumbers</h3>
            <a href="case-studies.php" class="text-primary font-weight-bold text-decoration-none mt-3 d-inline-block">Read Case Study &rarr;</a>
          </div>
        </div>
      </div>

      <!-- Card 3: SunVit D3 -->
      <div class="col-12 col-md-6 col-lg-6">
        <div class="case-card position-relative overflow-hidden border-radius-lg bg-dark-card border border-dark-border h-100 p-0 shadow-lg">
          <img src="assets/images/sunvit-d3-case-study.jpg" alt="SunVit D3" class="w-100 object-cover" style="height: 280px;">
          <div class="p-4">
            <div class="d-flex gap-2 mb-3">
              <span class="badge bg-white text-dark font-monospace">Web Design</span>
              <span class="badge bg-white text-dark font-monospace">eCommerce</span>
            </div>
            <h3 class="h4 text-white font-weight-bold">A comprehensive digital growth &amp; eCommerce transformation strategy for SunVit D3</h3>
            <a href="case-studies.php" class="text-primary font-weight-bold text-decoration-none mt-3 d-inline-block">Read Case Study &rarr;</a>
          </div>
        </div>
      </div>

      <!-- Card 4: ARIA AI Solutions -->
      <div class="col-12 col-md-6 col-lg-6">
        <div class="case-card position-relative overflow-hidden border-radius-lg bg-dark-card border border-dark-border h-100 p-0 shadow-lg">
          <img src="assets/images/aria-intelligent-solutions-case-study.jpg" alt="ARIA AI" class="w-100 object-cover" style="height: 280px;">
          <div class="p-4">
            <div class="d-flex gap-2 mb-3">
              <span class="badge bg-white text-dark font-monospace">AI Solutions</span>
              <span class="badge bg-white text-dark font-monospace">Automation</span>
            </div>
            <h3 class="h4 text-white font-weight-bold">Intelligent workflow automation and generative AI integration for ARIA</h3>
            <a href="case-studies.php" class="text-primary font-weight-bold text-decoration-none mt-3 d-inline-block">Read Case Study &rarr;</a>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- 4. Trusted Clients Logo Grid Section -->
<section class="py-5 bg-primary-canvas">
  <div class="container py-4 text-center">
    <span class="text-uppercase font-weight-bold text-muted tracking-widest font-size-xs d-block mb-2">OUR CLIENTS</span>
    <h2 class="h3 font-weight-extrabold text-black mb-5">Trusted by ambitious brands and organisations</h2>

    <div class="row align-items-center justify-content-center g-4">
      <div class="col-6 col-sm-4 col-md-2.4"><img src="assets/images/nhs.png" alt="NHS" class="img-fluid client-logo opacity-75"></div>
      <div class="col-6 col-sm-4 col-md-2.4"><img src="assets/images/bristol-city-council.png" alt="Bristol City Council" class="img-fluid client-logo opacity-75"></div>
      <div class="col-6 col-sm-4 col-md-2.4"><img src="assets/images/pimlico.png" alt="Pimlico" class="img-fluid client-logo opacity-75"></div>
      <div class="col-6 col-sm-4 col-md-2.4"><img src="assets/images/sussex-police.png" alt="Sussex Police" class="img-fluid client-logo opacity-75"></div>
      <div class="col-6 col-sm-4 col-md-2.4"><img src="assets/images/secure-trust-bank.png" alt="Secure Trust Bank" class="img-fluid client-logo opacity-75"></div>
    </div>
  </div>
</section>

