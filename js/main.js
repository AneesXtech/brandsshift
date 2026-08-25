/**
 * Main JavaScript Bootstrap & Interactivity - Brands Shift (Blue Frontier Compatible)
 */

document.addEventListener('DOMContentLoaded', () => {
  initHeaderScroll();
  initTabbedContent();
  initModalController();
  initVideoModalController();
  initScrollList();
  initBackToTop();
  initPortfolioCarousel();
  initMobileNavDrawer();
});

/**
 * Blue Frontier Header Scroll Behavior:
 * - At top (scrollY <= 40): 100% Transparent, No Background, No Blur, Full padding
 * - Scrolled (scrollY > 40): Dark Frosted Glass Blur Capsule, Compact padding (Chota)
 */
function initHeaderScroll() {
  const header = document.querySelector('.menu-header');
  if (!header) return;
  
  const inner = header.querySelector('.menu-header--inner');

  let lastScrollY = window.scrollY;
  let ticking = false;

  // Strip has-background from template.min.js immediately
  const killTemplateBackground = () => {
    if (inner && inner.classList.contains('has-background')) {
      inner.classList.remove('has-background');
    }
  };

  const update = () => {
    const currentScrollY = window.scrollY;
    
    // Always strip template.min.js has-background class
    killTemplateBackground();

    if (currentScrollY <= 40) {
      // Top of page: completely transparent, regular size
      header.classList.remove('is-scrolled');
      header.classList.remove('is-hidden');
    } else {
      // Scrolled: apply dark blur + compact capsule shape
      header.classList.add('is-scrolled');

      // Hide only on fast downward scroll deep in page, show immediately on any scroll up
      if (currentScrollY > lastScrollY && currentScrollY > 300) {
        header.classList.add('is-hidden');
      } else {
        header.classList.remove('is-hidden');
      }
    }

    lastScrollY = currentScrollY;
    ticking = false;
  };

  window.addEventListener('scroll', () => {
    if (!ticking) {
      requestAnimationFrame(update);
      ticking = true;
    }
  }, { passive: true });

  // MutationObserver to neutralize template.min.js interference
  if (inner) {
    const observer = new MutationObserver(() => {
      killTemplateBackground();
    });
    observer.observe(inner, { attributes: true, attributeFilter: ['class'] });
  }

  killTemplateBackground();
  update();
}

/**
 * Mobile Navigation Drawer & Accordion Controller
 */
function initMobileNavDrawer() {
  const mainMenu = document.getElementById('mainmenu');
  const header = document.querySelector('.menu-header');
  const toggleBtn = document.querySelector('.menu-header--toggle');
  const closeBtn = document.querySelector('.bf-mobile-drawer-close');

  if (mainMenu) {
    mainMenu.addEventListener('show.bs.collapse', () => {
      document.body.classList.add('mobile-drawer-open');
      if (header) header.classList.add('drawer-open');
    });

    mainMenu.addEventListener('hidden.bs.collapse', () => {
      document.body.classList.remove('mobile-drawer-open');
      if (header) header.classList.remove('drawer-open');
    });
  }

  if (closeBtn && mainMenu) {
    closeBtn.addEventListener('click', () => {
      const bsCollapse = bootstrap.Collapse.getInstance(mainMenu);
      if (bsCollapse) {
        bsCollapse.hide();
      }
    });
  }

  const dropdownItems = document.querySelectorAll('.menu-header--main-menu .nav-item.dropdown');
  
  dropdownItems.forEach(item => {
    const link = item.querySelector('.nav-link');
    if (!link) return;
    
    link.addEventListener('click', (e) => {
      if (window.innerWidth < 1200) {
        e.preventDefault();
        const isOpen = item.classList.contains('is-open');
        
        // Close siblings
        dropdownItems.forEach(otherItem => {
          if (otherItem !== item) {
            otherItem.classList.remove('is-open');
            const icon = otherItem.querySelector('.bf-mobile-accordion-icon');
            if (icon) icon.textContent = '+';
          }
        });
        
        // Toggle active
        if (isOpen) {
          item.classList.remove('is-open');
          const icon = item.querySelector('.bf-mobile-accordion-icon');
          if (icon) icon.textContent = '+';
        } else {
          item.classList.add('is-open');
          const icon = item.querySelector('.bf-mobile-accordion-icon');
          if (icon) icon.textContent = '—';
        }
      }
    });
  });
}


/**
 * Back to Top Floating Button Controller
 */
function initBackToTop() {
  const backToTopBtn = document.getElementById('backToTop');
  if (!backToTopBtn) return;

  const circle = backToTopBtn.querySelector('.progress-ring__circle');
  const valElem = backToTopBtn.querySelector('.progress-val');
  let circumference = 163.36;

  if (circle) {
    const radius = circle.r.baseVal.value || 26;
    circumference = 2 * Math.PI * radius;
    circle.style.strokeDasharray = `${circumference} ${circumference}`;
    circle.style.strokeDashoffset = `${circumference}`;
  }

  const updateProgress = () => {
    const scrollTop = window.scrollY || document.documentElement.scrollTop;
    const docHeight = document.documentElement.scrollHeight - window.innerHeight;
    const scrollPercent = docHeight > 0 ? Math.min(100, Math.max(0, (scrollTop / docHeight) * 100)) : 0;

    if (circle) {
      const offset = circumference - (scrollPercent / 100) * circumference;
      circle.style.strokeDashoffset = offset;
    }

    if (valElem) {
      valElem.textContent = Math.round(scrollPercent) + '%';
    }

    if (scrollTop > 200) {
      backToTopBtn.classList.add('show');
    } else {
      backToTopBtn.classList.remove('show');
    }
  };

  window.addEventListener('scroll', updateProgress, { passive: true });
  updateProgress();

  backToTopBtn.addEventListener('click', (e) => {
    e.preventDefault();
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });
}




/**
 * Tabbed Content Switcher Controller (About Us, Your Digital Partner, Sectors)
 */
function initTabbedContent() {
  const tabBtns = document.querySelectorAll('.element--tabbed-content-btn-group .btn-group--btn, .bs-tab-btn');

  tabBtns.forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      const targetTab = btn.getAttribute('data-tab');
      const container = btn.closest('.element--tabbed-content, .bs-tabs-wrapper') || document;

      // Reset button states
      container.querySelectorAll('.btn-group--btn, .bs-tab-btn').forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      // Reset & toggle tab items
      container.querySelectorAll('.element--tabbed-content-tab-item, .bs-tab-panel').forEach(panel => {
        if (panel.getAttribute('data-tab') === targetTab || panel.id === targetTab) {
          panel.classList.remove('d-none');
          panel.classList.add('active');
        } else {
          panel.classList.add('d-none');
          panel.classList.remove('active');
        }
      });
    });
  });
}

/**
 * Contact Modal Controller
 */
function initModalController() {
  const modalOverlay = document.getElementById('contactModal');
  const openModalBtns = document.querySelectorAll('.open-modal-btn');
  const closeModalBtn = document.getElementById('closeModalBtn');

  if (!modalOverlay) return;

  const openModal = () => {
    modalOverlay.classList.add('is-open');
    modalOverlay.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';
  };

  const closeModal = () => {
    modalOverlay.classList.remove('is-open');
    modalOverlay.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';
  };

  openModalBtns.forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      openModal();
    });
  });

  if (closeModalBtn) {
    closeModalBtn.addEventListener('click', (e) => {
      e.preventDefault();
      closeModal();
    });
  }

  modalOverlay.addEventListener('click', (e) => {
    if (e.target === modalOverlay) {
      closeModal();
    }
  });

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && modalOverlay.classList.contains('is-open')) {
      closeModal();
    }
  });
}

/**
 * Specialist Digital Solutions Scroll List Controller
 * Dynamic sticky image switching on scroll and hover
 */
function initScrollList() {
  const scrollItems = document.querySelectorAll('.element--scroll-list-item .scroll-list-item');
  const images = document.querySelectorAll('.element--scroll-list-image img');

  if (!scrollItems.length || !images.length) return;

  let activeIdx = '1';

  const setActiveImage = (index) => {
    if (activeIdx === index) return;
    activeIdx = index;
    images.forEach(img => {
      if (img.getAttribute('data-scroll-list-index') === index) {
        img.classList.remove('d-none');
        img.style.opacity = '1';
      } else {
        img.classList.add('d-none');
        img.style.opacity = '0';
      }
    });
  };

  // Hover switching
  scrollItems.forEach(item => {
    item.addEventListener('mouseenter', () => {
      const idx = item.getAttribute('data-scroll-list-index');
      setActiveImage(idx);
    });
  });

  // Scroll position detection for sticky image update
  const checkActiveScrollItem = () => {
    const triggerPoint = window.innerHeight * 0.45;
    scrollItems.forEach(item => {
      const rect = item.getBoundingClientRect();
      if (rect.top <= triggerPoint && rect.bottom >= 50) {
        const idx = item.getAttribute('data-scroll-list-index');
        setActiveImage(idx);
      }
    });
  };

  window.addEventListener('scroll', checkActiveScrollItem, { passive: true });
}

/**
 * Fullscreen Video Modal Controller
 */
document.addEventListener('DOMContentLoaded', () => {
  const videoModalElem = document.getElementById('videoModal');
  const modalPlayer = document.getElementById('modalVideoPlayer');

  if (!videoModalElem) return;

  const handleVideoModalOpen = (e) => {
    e.preventDefault();
    e.stopPropagation();
    const videoModal = bootstrap.Modal.getOrCreateInstance(videoModalElem);
    videoModal.show();
    if (modalPlayer) {
      modalPlayer.currentTime = 0;
      modalPlayer.play().catch(err => console.log('Autoplay prevented:', err));
    }
  };

  const videoTriggers = document.querySelectorAll('#heroShowreelBtn, .open-video-modal-btn, .element--hero-banner-media-play, .element--hero-banner-media-wrapper');
  videoTriggers.forEach(trigger => {
    trigger.addEventListener('click', handleVideoModalOpen);
  });

  videoModalElem.addEventListener('hidden.bs.modal', () => {
    if (modalPlayer) {
      modalPlayer.pause();
      modalPlayer.currentTime = 0;
    }
  });

  // Back to Top Smooth Scroll
  const backToTopBtn = document.getElementById('backToTopBtn');
  if (backToTopBtn) {
    backToTopBtn.addEventListener('click', (e) => {
      e.preventDefault();
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }
});

/**
 * 1:1 Sydney Web Experts Portfolio Card Carousel Controller (Infinite Slow Loop)
 */
function initPortfolioCarousel() {
  const track = document.getElementById('swePortfolioTrack');
  const prevBtns = document.querySelectorAll('.swe-portfolio-prev, #swePrevBtn');
  const nextBtns = document.querySelectorAll('.swe-portfolio-next, #sweNextBtn');
  const carouselWrapper = document.querySelector('.swe-portfolio-carousel-wrapper') || track;

  if (!track) return;

  const cards = track.querySelectorAll('.swe-portfolio-card-item');
  let currentIndex = 0;
  const totalCards = cards.length;
  let autoSlideTimer = null;

  const updateCarousel = () => {
    if (cards.length === 0) return;
    const card = cards[currentIndex] || cards[0];
    const offset = card.offsetLeft;
    track.style.transform = `translateX(-${offset}px)`;

    const counter = document.getElementById('sweMobileCounter');
    if (counter) {
      const currentFormatted = String(currentIndex + 1).padStart(2, '0');
      const totalFormatted = String(totalCards).padStart(2, '0');
      counter.textContent = `${currentFormatted} / ${totalFormatted}`;
    }
  };

  const nextSlide = () => {
    currentIndex = (currentIndex + 1) % totalCards;
    updateCarousel();
  };

  const prevSlide = () => {
    currentIndex = (currentIndex - 1 + totalCards) % totalCards;
    updateCarousel();
  };

  nextBtns.forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      nextSlide();
      resetAutoSlide();
    });
  });

  prevBtns.forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      prevSlide();
      resetAutoSlide();
    });
  });

  // Infinite Slow Loop Autoscroll (Shifts every 4.5 seconds)
  const startAutoSlide = () => {
    stopAutoSlide();
    autoSlideTimer = setInterval(nextSlide, 4500);
  };

  const stopAutoSlide = () => {
    if (autoSlideTimer) {
      clearInterval(autoSlideTimer);
      autoSlideTimer = null;
    }
  };

  const resetAutoSlide = () => {
    stopAutoSlide();
    startAutoSlide();
  };

  // Touch & Mouse Swipe / Drag Support
  let startX = 0;
  let currentX = 0;
  let isDragging = false;

  const handleDragStart = (e) => {
    isDragging = true;
    startX = e.type.includes('touch') ? e.touches[0].clientX : e.clientX;
    currentX = startX;
    stopAutoSlide();
    track.style.transition = 'none';
  };

  const handleDragMove = (e) => {
    if (!isDragging) return;
    currentX = e.type.includes('touch') ? e.touches[0].clientX : e.clientX;
    const diff = currentX - startX;
    const currentCard = cards[currentIndex] || cards[0];
    const baseOffset = currentCard.offsetLeft;
    track.style.transform = `translateX(-${baseOffset - diff}px)`;
  };

  const handleDragEnd = () => {
    if (!isDragging) return;
    isDragging = false;
    track.style.transition = 'transform 0.4s cubic-bezier(0.25, 1, 0.5, 1)';
    const diff = currentX - startX;
    if (diff < -40) {
      nextSlide();
    } else if (diff > 40) {
      prevSlide();
    } else {
      updateCarousel();
    }
    resetAutoSlide();
  };

  track.addEventListener('touchstart', handleDragStart, { passive: true });
  track.addEventListener('touchmove', handleDragMove, { passive: true });
  track.addEventListener('touchend', handleDragEnd);

  track.addEventListener('mousedown', handleDragStart);
  window.addEventListener('mousemove', handleDragMove);
  window.addEventListener('mouseup', handleDragEnd);

  // Auto-scroll loop
  startAutoSlide();
  window.addEventListener('resize', updateCarousel, { passive: true });
}

/**
 * Fullscreen Video Modal Controller (Smooth Cover Animation & Audio Play)
 */
function initVideoModalController() {
  const modal = document.getElementById('bsVideoLightboxModal');
  const closeBtn = document.getElementById('closeVideoModalBtn');
  const videoPlayer = document.getElementById('modalVideoPlayer');
  const triggerBtns = document.querySelectorAll('#heroShowreelBtn, .open-video-modal-btn');

  if (!modal || !videoPlayer) return;

  const openModal = (videoSrc) => {
    const src = videoSrc || 'assets/videos/bluefrontier-home-video-2026-992_661_with_sound.mp4';
    if (!videoPlayer.src.includes(src)) {
      videoPlayer.src = src;
      videoPlayer.load();
    }

    modal.classList.add('is-active');
    videoPlayer.currentTime = 0;
    
    setTimeout(() => {
      videoPlayer.play().catch(err => {
        console.warn('Video auto-play: ', err);
      });
    }, 100);

    document.body.style.overflow = 'hidden';
  };

  const closeModal = () => {
    modal.classList.remove('is-active');
    videoPlayer.pause();
    document.body.style.overflow = '';
  };

  window.openHeroFullscreenVideo = function(videoSrc) {
    openModal(videoSrc);
  };

  window.closeHeroFullscreenVideo = function() {
    closeModal();
  };

  triggerBtns.forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      e.stopPropagation();
      const src = btn.getAttribute('data-video-src') || 'assets/videos/bluefrontier-home-video-2026-992_661_with_sound.mp4';
      openModal(src);
    });
  });

  if (closeBtn) {
    closeBtn.addEventListener('click', closeModal);
  }

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && modal.classList.contains('is-active')) {
      closeModal();
    }
  });
}


