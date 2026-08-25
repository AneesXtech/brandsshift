<?php
// includes/testimonial-split.php - 1:1 50/50 Split Video & Testimonial Section
require_once __DIR__ . '/../config.php';
?>

<!-- 50/50 Full-Width Edge-to-Edge Split Testimonial Section (Deep Rich Black Theme) -->
<section id="split-testimonials" class="w-100 p-0 m-0 position-relative overflow-hidden" style="background-color: #000000; border-top: 1px solid rgba(255,255,255,0.06); border-bottom: 1px solid rgba(255,255,255,0.06);">
  <div class="container-fluid p-0 m-0 w-100">
    <div class="row g-0 align-items-stretch">

      <!-- 1. Left Column: Full-Height In-Place Video Container (50% Width) -->
      <div class="col-12 col-lg-6 position-relative d-flex align-items-center justify-content-center p-0 split-video-col" id="splitVideoWrapper">
        
        <!-- Native In-Place HTML5 Video Player with Audio Support -->
        <video id="splitInPlaceVideo" preload="auto" loop playsinline poster="assets/images/bf-consultancy-1.jpg" src="assets/videos/bluefrontier-home-video-2026-992_661_with_sound.mp4" class="w-100 h-100 object-cover position-absolute top-0 start-0" style="width: 100%; height: 100%; object-fit: cover; z-index: 1;">
          <source src="assets/videos/bluefrontier-home-video-2026-992_661_with_sound.mp4" type="video/mp4">
          Your browser does not support video.
        </video>
        
        <!-- Dark Gradient Overlay (Hides on Play) -->
        <div id="splitVideoOverlay" class="position-absolute top-0 start-0 w-100 h-100 cursor-pointer" onclick="toggleInPlaceVideoPlay()"></div>

        <!-- Prominent Circular Centered Play Button (Pure CSS Solid Triangle) -->
        <button type="button" id="splitPlayBtn" class="split-play-btn position-absolute top-50 start-50 translate-middle border-0" aria-label="Play Customer Story Video" onclick="toggleInPlaceVideoPlay()">
          <span class="split-play-triangle"></span>
        </button>

        <!-- Static White Text Overlay at Bottom (Hides on Play) -->
        <div id="splitVideoTextOverlay" class="position-absolute bottom-0 start-0 w-100 p-4 p-md-5 text-start pointer-events-none">
          <h3 class="fw-bold text-white mb-1" style="font-family: 'uncut-sans', sans-serif; font-size: clamp(1.35rem, 2.2vw, 1.85rem); letter-spacing: -0.01em;">
            Maegan's Story
          </h3>
          <p class="text-white-50 mb-0" style="font-size: 0.925rem; font-family: 'uncut-sans', sans-serif;">
            How Brands Shift Scaled Their Platform &amp; Conversion Flow
          </p>
        </div>

        <!-- Floating Icon Controls (Guaranteed Crisp SVG Icons) -->
        <div id="splitVideoActiveControls" class="position-absolute top-0 end-0 p-3 d-flex gap-2">
          <!-- Pause / Play Toggle -->
          <button type="button" class="split-video-icon-btn" onclick="toggleInPlaceVideoPlay()" aria-label="Pause or Play Video" title="Pause / Play">
            <span id="playIconSvg" style="display: none;">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><polygon points="5 3 19 12 5 21 5 3"></polygon></svg>
            </span>
            <span id="pauseIconSvg" style="display: flex;">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><rect x="6" y="4" width="4" height="16"></rect><rect x="14" y="4" width="4" height="16"></rect></svg>
            </span>
          </button>
          
          <!-- Sound Toggle (Guaranteed Crisp SVG) -->
          <button type="button" class="split-video-icon-btn" onclick="toggleInPlaceAudio()" aria-label="Toggle Audio" title="Sound On / Off">
            <span id="soundOnSvg" style="display: flex;">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5" fill="currentColor"></polygon><path d="M19.07 4.93a10 10 0 0 1 0 14.14M15.54 8.46a5 5 0 0 1 0 7.07"></path></svg>
            </span>
            <span id="soundOffSvg" style="display: none;">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5" fill="currentColor"></polygon><line x1="23" y1="9" x2="17" y2="15"></line><line x1="17" y1="9" x2="23" y2="15"></line></svg>
            </span>
          </button>
        </div>

      </div>

      <!-- 2. Right Column: Testimonial Slider Card (50% Width - Dark Aesthetic) -->
      <div class="col-12 col-lg-6 d-flex flex-column justify-content-center align-items-center py-5 py-lg-6 px-3 px-sm-4 px-md-5 split-testimonial-col" style="background-color: #0A0A0B;">
        
        <!-- Main Heading at Top Center with Dot Badge -->
        <div class="text-center mb-4 px-2" style="max-width: 560px;">
          <span class="d-inline-flex align-items-center gap-2 mb-2 text-uppercase fw-bold" style="color: #D3207C; font-size: 0.8rem; letter-spacing: 0.12em;">
            <span style="width: 8px; height: 8px; background-color: #D3207C; border-radius: 50%; display: inline-block;"></span> CLIENT SUCCESS
          </span>
          <h2 class="fw-bold mb-0 split-heading text-white">
            They Achieved Measurable Growth with Brands Shift
          </h2>
        </div>

        <!-- Slider Card Container with Outer Arrow Clearance -->
        <div class="split-slider-wrapper position-relative w-100 d-flex align-items-center justify-content-center my-2">
          
          <!-- Perfect Circular Left Arrow Button (NO SCALE) -->
          <button type="button" class="split-nav-circle-btn prev-btn d-flex align-items-center justify-content-center" onclick="prevSplitTestimonial()" aria-label="Previous Testimonial">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
          </button>

          <!-- Fixed-Height Elevated Dark Testimonial Card with Inline Read More -->
          <div class="split-testimonial-card shadow-sm text-start" style="background-color: #121216; border: 1px solid rgba(255, 255, 255, 0.1);">
            
            <!-- Quote Container with Fixed Smooth Area & Inline Read More -->
            <div class="split-quote-box">
              <p class="text-white split-quote mb-0" id="splitTestimonialQuoteWrapper">
                <span id="splitTestimonialQuoteText" style="color: #EDEDF2 !important;"></span>
              </p>
            </div>

            <!-- Customer Details & Rating at Card Bottom -->
            <div class="d-flex align-items-center justify-content-between pt-3 border-top mt-auto" style="border-top-color: rgba(255,255,255,0.1) !important;">
              <div>
                <strong class="d-block text-white fw-bold" id="splitTestimonialAuthor" style="font-size: 1rem; color: #FFFFFF !important;">Maegan Vance</strong>
                <small class="text-white-50" id="splitTestimonialRole" style="font-size: 0.85rem;">Director of Marketing, Nexa Corp</small>
              </div>
              <div class="d-flex gap-1" style="color: #FFC107; font-size: 0.85rem;">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>
            </div>

          </div>

          <!-- Perfect Circular Right Arrow Button (NO SCALE) -->
          <button type="button" class="split-nav-circle-btn next-btn d-flex align-items-center justify-content-center" onclick="nextSplitTestimonial()" aria-label="Next Testimonial">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
          </button>

        </div>

        <!-- Brands Shift Styled Dots Indicator -->
        <div class="d-flex align-items-center justify-content-center gap-2 mt-3 mb-2" id="splitSliderDots">
          <span class="split-dot active" onclick="goToSplitTestimonial(0)"></span>
          <span class="split-dot" onclick="goToSplitTestimonial(1)"></span>
          <span class="split-dot" onclick="goToSplitTestimonial(2)"></span>
        </div>

        <!-- Standardized 1:1 Brands Shift Gradient Capsule Nectar Button with Rolling Dual Arrow -->
        <div class="mt-4 text-center">
          <div class="nectar-cta border_radius_100px alignment_tablet_default alignment_phone_default display_tablet_inherit display_phone_inherit backdrop_filter_blur_13" data-color="accent-color" data-using-bg="true" data-style="arrow-circle-animation" data-display="inline" data-alignment="left" data-text-color="custom">
            <span style="color: #FFFFFF;" class="nectar-button-type">
              <span class="link_wrap" style="padding-top: 5px; padding-right: 5px; padding-bottom: 5px; padding-left: 24px;">
                <a class="link_text open-modal-btn text-nowrap" role="button" href="contact.php">
                  <span class="text" style="font-size: 0.9rem; font-weight: 700; white-space: nowrap;">View More Testimonials</span>
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
  </div>
</section>

<style>
/* Split Video Column */
.split-video-col {
  min-height: 540px;
  background-color: #0A0A0B;
  overflow: hidden;
}

#splitInPlaceVideo {
  object-fit: cover;
  min-height: 100%;
  width: 100%;
  z-index: 1;
}

#splitVideoOverlay {
  z-index: 2;
  background: linear-gradient(to top, rgba(10, 10, 14, 0.95) 0%, rgba(10, 10, 14, 0.25) 50%, rgba(10, 10, 14, 0.4) 100%);
  transition: opacity 0.4s ease;
  cursor: pointer;
}

#splitVideoTextOverlay {
  z-index: 5;
  transition: opacity 0.4s ease, transform 0.4s ease;
}

/* Play Button */
.split-play-btn {
  z-index: 10 !important;
  width: 76px !important;
  height: 76px !important;
  border-radius: 50% !important;
  background: #FFFFFF !important;
  box-shadow: 0 14px 40px rgba(0, 0, 0, 0.45) !important;
  transition: box-shadow 0.3s ease, opacity 0.35s ease, transform 0.25s ease !important;
  cursor: pointer !important;
  display: flex !important;
  align-items: center !important;
  justify-content: center !important;
  border: none !important;
}

.split-play-triangle {
  width: 0 !important;
  height: 0 !important;
  border-top: 14px solid transparent !important;
  border-bottom: 14px solid transparent !important;
  border-left: 22px solid #111113 !important;
  margin-left: 6px !important;
  display: block !important;
}

.split-play-btn:hover {
  box-shadow: 0 16px 45px rgba(211, 32, 124, 0.5) !important;
  transform: translate(-50%, -50%) scale(1.06) !important;
}

/* Floating Icon Buttons (Controls on play) */
#splitVideoActiveControls {
  z-index: 6;
  opacity: 0;
  pointer-events: none;
  transition: opacity 0.3s ease;
}

.split-video-icon-btn {
  width: 42px;
  height: 42px;
  border-radius: 50%;
  background: rgba(18, 18, 22, 0.85);
  backdrop-filter: blur(8px);
  -webkit-backdrop-filter: blur(8px);
  border: 1.5px solid rgba(255, 255, 255, 0.25);
  color: #FFFFFF;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  box-shadow: 0 6px 16px rgba(0,0,0,0.35);
  transition: background 0.2s ease, border-color 0.2s ease;
}

.split-video-icon-btn:hover {
  background: #D3207C;
  border-color: #D3207C;
}

/* Video In-Play State: Hide overlays smoothly */
.split-video-col.is-playing #splitPlayBtn {
  opacity: 0 !important;
  pointer-events: none !important;
}

.split-video-col.is-playing #splitVideoOverlay {
  opacity: 0 !important;
}

.split-video-col.is-playing #splitVideoTextOverlay {
  opacity: 0 !important;
  transform: translateY(20px) !important;
  pointer-events: none !important;
}

.split-video-col.is-playing:hover #splitVideoActiveControls,
.split-video-col.is-playing #splitVideoActiveControls {
  opacity: 1 !important;
  pointer-events: auto !important;
}

/* Right Testimonial Column */
.split-testimonial-col {
  background-color: #F0F2F5;
}

.split-badge {
  color: #D3207C;
  font-size: 0.785rem;
  letter-spacing: 0.14em;
}

.split-heading {
  font-family: 'uncut-sans', sans-serif;
  font-size: clamp(1.65rem, 2.8vw, 2.35rem);
  color: #111113;
  line-height: 1.25;
  letter-spacing: -0.02em;
}

/* Slider Outer Wrapper */
.split-slider-wrapper {
  max-width: 620px;
  padding: 0 60px;
}

/* Fixed-Height Elevated Testimonial Card */
.split-testimonial-card {
  width: 100%;
  padding: 2.25rem 2.25rem 1.75rem 2.25rem;
  background-color: #FFFFFF;
  border-radius: 20px;
  border: 1px solid rgba(0, 0, 0, 0.07);
  box-shadow: 0 14px 40px rgba(0, 0, 0, 0.06);
  min-height: 280px;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  position: relative;
}

/* Quote Box & Typography */
.split-quote-box {
  flex: 1 1 auto;
  overflow: hidden;
  display: flex;
  flex-direction: column;
}

.split-quote {
  font-size: 1rem;
  line-height: 1.65;
  color: #222228 !important;
  font-family: 'uncut-sans', sans-serif;
  margin: 0;
  transition: opacity 0.25s ease, transform 0.25s ease;
}

/* Clean Inline Underlined Read More / Read Less Toggle */
.split-inline-read-more {
  color: #D3207C !important;
  font-size: 0.95rem !important;
  font-weight: 700 !important;
  text-decoration: underline !important;
  cursor: pointer;
  white-space: nowrap;
  margin-left: 4px;
  display: inline-block;
  transition: color 0.2s ease;
}

.split-inline-read-more:hover {
  color: #722C89 !important;
}

/* Circular Left/Right Arrow Buttons (STRICTLY NO SCALE ON HOVER) */
.split-nav-circle-btn {
  position: absolute !important;
  top: 50% !important;
  transform: translateY(-50%) !important;
  z-index: 10 !important;
  width: 46px !important;
  height: 46px !important;
  border-radius: 50% !important;
  background: #111113 !important;
  border: 1.5px solid rgba(255, 255, 255, 0.25) !important;
  color: #FFFFFF !important;
  cursor: pointer !important;
  box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15) !important;
  display: flex !important;
  align-items: center !important;
  justify-content: center !important;
  transition: background 0.22s ease, border-color 0.22s ease, box-shadow 0.22s ease, color 0.22s ease !important;
}

.split-nav-circle-btn.prev-btn {
  left: 0 !important;
}

.split-nav-circle-btn.next-btn {
  right: 0 !important;
}

.split-nav-circle-btn:hover {
  background: linear-gradient(135deg, #722C89 0%, #D3207C 100%) !important;
  border-color: rgba(255, 255, 255, 0.4) !important;
  color: #FFFFFF !important;
  box-shadow: 0 6px 22px rgba(211, 32, 124, 0.45) !important;
  transform: translateY(-50%) !important; /* NO SCALE */
}

.split-nav-circle-btn:active {
  transform: translateY(-50%) !important; /* NO SCALE */
}

/* Brands Shift Dots Indicator */
.split-dot {
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background-color: #D0D2D8;
  cursor: pointer;
  transition: all 0.25s ease;
}

.split-dot.active {
  width: 24px;
  border-radius: 10px;
  background: linear-gradient(135deg, #722C89 0%, #D3207C 100%);
  box-shadow: 0 2px 8px rgba(211, 32, 124, 0.35);
}

/* Smooth Slide Animation Classes */
.split-slide-animating-out {
  opacity: 0 !important;
  transform: translateY(6px) !important;
}

.split-slide-animating-in {
  opacity: 1 !important;
  transform: translateY(0) !important;
}

/* =========================================================
   Mobile & Tablet Responsiveness (100% Clean Touch Layout)
========================================================= */
@media (max-width: 991.98px) {
  .split-video-col {
    min-height: 380px !important;
  }
}

@media (max-width: 575.98px) {
  .split-video-col {
    min-height: 290px !important;
  }
  
  .split-play-btn {
    width: 60px !important;
    height: 60px !important;
  }
  
  .split-play-btn svg {
    width: 20px !important;
    height: 20px !important;
  }
  
  .split-testimonial-col {
    padding: 3rem 1.25rem !important;
  }

  .split-heading {
    font-size: 1.5rem !important;
  }

  .split-slider-wrapper {
    padding: 0 !important;
  }

  .split-testimonial-card {
    padding: 1.5rem 1.25rem !important;
    border-radius: 16px !important;
    min-height: 250px !important;
  }

  .split-quote {
    font-size: 0.95rem !important;
    line-height: 1.55 !important;
  }

  .split-nav-circle-btn {
    display: none !important;
  }
}
</style>

<!-- Interactive Script for Split Video & Testimonial Slider -->
<script>
(function() {
  const splitStories = [
    {
      quote: "Seeking to elevate our digital presence and improve lead capture, we partnered with Brands Shift for complete UX design and high-performance development. The launch was delivered flawlessly within 60 days, yielding a 140% boost in qualified customer enquiries across all primary channels.",
      author: "Maegan Vance",
      role: "Director of Marketing, Nexa Corp"
    },
    {
      quote: "Brands Shift has been incredible in helping us design and launch our flagship web application. The technical architecture is lightning-fast, and the communication throughout was proactive, transparent, and top quality from initial sprint to deployment.",
      author: "Anthony Carter",
      role: "Founder & CEO, Carter Logistics"
    },
    {
      quote: "From our first discovery session through final deployment, the team executed every feature with perfection. Our user retention jumped 65% and customer satisfaction ratings reached an all-time high within the very first operating quarter.",
      author: "Elizabeth Montgomery",
      role: "Chief Product Officer, MedTech Global"
    }
  ];

  let currentSplitIdx = 0;
  let isQuoteExpanded = false;
  const TRUNCATE_LIMIT = 155;

  // In-Place Video Player Controller
  window.toggleInPlaceVideoPlay = function() {
    const wrapper = document.getElementById('splitVideoWrapper');
    const video = document.getElementById('splitInPlaceVideo');
    const playIcon = document.getElementById('playIconSvg');
    const pauseIcon = document.getElementById('pauseIconSvg');
    if (!video || !wrapper) return;

    if (video.paused) {
      video.muted = false;
      video.play().then(() => {
        wrapper.classList.add('is-playing');
        if (playIcon) playIcon.style.display = 'none';
        if (pauseIcon) pauseIcon.style.display = 'flex';
      }).catch(() => {
        video.muted = true;
        video.play();
        wrapper.classList.add('is-playing');
        if (playIcon) playIcon.style.display = 'none';
        if (pauseIcon) pauseIcon.style.display = 'flex';
      });
    } else {
      video.pause();
      wrapper.classList.remove('is-playing');
      if (playIcon) playIcon.style.display = 'flex';
      if (pauseIcon) pauseIcon.style.display = 'none';
    }
  };

  window.toggleInPlaceAudio = function() {
    const video = document.getElementById('splitInPlaceVideo');
    const soundOn = document.getElementById('soundOnSvg');
    const soundOff = document.getElementById('soundOffSvg');
    if (!video) return;

    video.muted = !video.muted;
    if (soundOn && soundOff) {
      soundOn.style.display = video.muted ? 'none' : 'flex';
      soundOff.style.display = video.muted ? 'flex' : 'none';
    }
  };

  // Render quote with smart inline "Read more / Read less"
  function renderQuoteText(fullQuote, expanded) {
    const quoteContainer = document.getElementById('splitTestimonialQuoteText');
    if (!quoteContainer) return;

    if (fullQuote.length > TRUNCATE_LIMIT && !expanded) {
      const truncated = fullQuote.slice(0, TRUNCATE_LIMIT).replace(/[,.\s]+$/, '');
      quoteContainer.innerHTML = `"${truncated}... <a href="javascript:void(0)" class="split-inline-read-more" onclick="toggleSplitQuoteExpand()">Read more</a>"`;
    } else if (fullQuote.length > TRUNCATE_LIMIT && expanded) {
      quoteContainer.innerHTML = `"${fullQuote} <a href="javascript:void(0)" class="split-inline-read-more" onclick="toggleSplitQuoteExpand()">Read less</a>"`;
    } else {
      quoteContainer.innerHTML = `"${fullQuote}"`;
    }
  }

  window.toggleSplitQuoteExpand = function() {
    isQuoteExpanded = !isQuoteExpanded;
    const data = splitStories[currentSplitIdx];
    renderQuoteText(data.quote, isQuoteExpanded);
  };

  // Ultra-Smooth Slide Transition
  window.updateSplitTestimonialView = function() {
    const data = splitStories[currentSplitIdx];
    const quoteWrapper = document.getElementById('splitTestimonialQuoteWrapper');
    const authorElem = document.getElementById('splitTestimonialAuthor');
    const roleElem = document.getElementById('splitTestimonialRole');
    const dots = document.querySelectorAll('.split-dot');

    isQuoteExpanded = false;

    if (quoteWrapper) {
      quoteWrapper.classList.add('split-slide-animating-out');
      
      setTimeout(() => {
        renderQuoteText(data.quote, false);
        if (authorElem) authorElem.textContent = data.author;
        if (roleElem) roleElem.textContent = data.role;
        
        dots.forEach((dot, idx) => {
          if (idx === currentSplitIdx) {
            dot.classList.add('active');
          } else {
            dot.classList.remove('active');
          }
        });

        quoteWrapper.classList.remove('split-slide-animating-out');
        quoteWrapper.classList.add('split-slide-animating-in');
        
        setTimeout(() => {
          quoteWrapper.classList.remove('split-slide-animating-in');
        }, 200);
      }, 160);
    }
  };

  window.nextSplitTestimonial = function() {
    currentSplitIdx = (currentSplitIdx + 1) % splitStories.length;
    window.updateSplitTestimonialView();
  };

  window.prevSplitTestimonial = function() {
    currentSplitIdx = (currentSplitIdx - 1 + splitStories.length) % splitStories.length;
    window.updateSplitTestimonialView();
  };

  window.goToSplitTestimonial = function(idx) {
    currentSplitIdx = idx;
    window.updateSplitTestimonialView();
  };

  // Mobile Swipe Gesture Listener
  const sliderWrapper = document.querySelector('.split-slider-wrapper');
  if (sliderWrapper) {
    let startX = 0;
    sliderWrapper.addEventListener('touchstart', function(e) {
      startX = e.touches[0].clientX;
    }, { passive: true });
    
    sliderWrapper.addEventListener('touchend', function(e) {
      const endX = e.changedTouches[0].clientX;
      const diff = startX - endX;
      if (Math.abs(diff) > 40) {
        if (diff > 0) {
          window.nextSplitTestimonial();
        } else {
          window.prevSplitTestimonial();
        }
      }
    }, { passive: true });
  }

  // Initial render on load
  renderQuoteText(splitStories[0].quote, false);
})();
</script>
