<?php
// quote.php - Interactive Project Quote & Proposal Estimator (Brands Shift)
require_once __DIR__ . '/config.php';

$pageTitle = 'Request a Quote | Custom Web Design, Branding & Development | ' . SITE_NAME;
$pageDescription = 'Get an instant project estimate and custom proposal for your website design, branding, mobile app, or digital marketing project.';

include_once __DIR__ . '/includes/header.php';
?>

<main id="quotePage" class="position-relative z-1" style="background-color: #0A0A0B; color: #FFFFFF; min-height: 100vh;">
  
  <!-- Hero Section -->
  <section class="position-relative pt-5 pb-4 overflow-hidden" style="padding-top: calc(var(--header-height, 80px) + 50px) !important; background: radial-gradient(circle at 50% 0%, rgba(114, 44, 137, 0.25) 0%, rgba(10, 10, 11, 0.95) 70%);">
    <div class="container text-center pt-3 pb-3 position-relative z-2">
      <div class="d-inline-flex align-items-center gap-2 mb-3 px-3 py-1 rounded-pill" style="background: rgba(211, 32, 124, 0.12); border: 1px solid rgba(211, 32, 124, 0.3);">
        <span style="width: 7px; height: 7px; background-color: #D3207C; border-radius: 50%; display: inline-block;"></span>
        <span style="font-family: 'uncut-sans', sans-serif; font-size: 0.8rem; font-weight: 700; letter-spacing: 0.1em; text-transform: uppercase; color: #D3207C;">INSTANT ESTIMATE &amp; PROPOSAL</span>
      </div>
      <h1 class="text-white fw-bold mb-3" style="font-size: clamp(2rem, 5vw, 3.5rem); letter-spacing: -0.02em; line-height: 1.15;">Let's Build Something Exceptional Together</h1>
      <p class="text-white-50 mx-auto" style="max-width: 650px; font-size: clamp(0.95rem, 2vw, 1.1rem); line-height: 1.6;">Tell us about your goals, timeline, and vision. We'll deliver a tailored scope breakdown, transparent pricing, and actionable roadmap.</p>
    </div>
  </section>

  <!-- Interactive Quote Request Form & Benefits Grid -->
  <section class="py-5">
    <div class="container">
      <div class="row g-5">
        
        <!-- Left Column: Multi-Step Interactive Quote Form -->
        <div class="col-12 col-lg-8">
          <div class="quote-form-card p-4 p-md-5 rounded-4 position-relative" style="background: #141418; border: 1px solid rgba(255, 255, 255, 0.08); box-shadow: 0 20px 60px rgba(0, 0, 0, 0.5);">
            
            <form id="quoteEstimatorForm" action="process-contact.php" method="POST" novalidate>
              
              <!-- 1. Select Services -->
              <div class="mb-5">
                <label class="d-block text-white fw-bold fs-5 mb-3">1. What services do you need? <span class="text-pink" style="color: #D3207C;">*</span></label>
                <div class="row g-3">
                  <div class="col-6 col-md-4">
                    <label class="service-select-label w-100 h-100 p-3 rounded-3 d-flex flex-column justify-content-between cursor-pointer">
                      <input type="checkbox" name="services[]" value="Web Design & Development" class="d-none service-checkbox" checked>
                      <div class="service-icon mb-2" style="font-size: 1.5rem; color: #D3207C;"><i class="fa-solid fa-code"></i></div>
                      <div>
                        <strong class="d-block text-white" style="font-size: 0.95rem;">Web Design &amp; Dev</strong>
                        <small class="text-white-50" style="font-size: 0.75rem;">Custom site, CMS, WordPress</small>
                      </div>
                    </label>
                  </div>
                  <div class="col-6 col-md-4">
                    <label class="service-select-label w-100 h-100 p-3 rounded-3 d-flex flex-column justify-content-between cursor-pointer">
                      <input type="checkbox" name="services[]" value="Brand Identity & Strategy" class="d-none service-checkbox">
                      <div class="service-icon mb-2" style="font-size: 1.5rem; color: #D3207C;"><i class="fa-solid fa-pen-nib"></i></div>
                      <div>
                        <strong class="d-block text-white" style="font-size: 0.95rem;">Branding &amp; Identity</strong>
                        <small class="text-white-50" style="font-size: 0.75rem;">Logo, guidelines, typography</small>
                      </div>
                    </label>
                  </div>
                  <div class="col-6 col-md-4">
                    <label class="service-select-label w-100 h-100 p-3 rounded-3 d-flex flex-column justify-content-between cursor-pointer">
                      <input type="checkbox" name="services[]" value="Mobile & Web App Development" class="d-none service-checkbox">
                      <div class="service-icon mb-2" style="font-size: 1.5rem; color: #D3207C;"><i class="fa-solid fa-mobile-screen-button"></i></div>
                      <div>
                        <strong class="d-block text-white" style="font-size: 0.95rem;">App Development</strong>
                        <small class="text-white-50" style="font-size: 0.75rem;">iOS, Android, Web Apps</small>
                      </div>
                    </label>
                  </div>
                  <div class="col-6 col-md-4">
                    <label class="service-select-label w-100 h-100 p-3 rounded-3 d-flex flex-column justify-content-between cursor-pointer">
                      <input type="checkbox" name="services[]" value="Digital Marketing & SEO" class="d-none service-checkbox">
                      <div class="service-icon mb-2" style="font-size: 1.5rem; color: #D3207C;"><i class="fa-solid fa-chart-line"></i></div>
                      <div>
                        <strong class="d-block text-white" style="font-size: 0.95rem;">SEO &amp; Marketing</strong>
                        <small class="text-white-50" style="font-size: 0.75rem;">Google Ads, SEO, Social</small>
                      </div>
                    </label>
                  </div>
                  <div class="col-6 col-md-4">
                    <label class="service-select-label w-100 h-100 p-3 rounded-3 d-flex flex-column justify-content-between cursor-pointer">
                      <input type="checkbox" name="services[]" value="POS & Online Ordering System" class="d-none service-checkbox">
                      <div class="service-icon mb-2" style="font-size: 1.5rem; color: #D3207C;"><i class="fa-solid fa-cash-register"></i></div>
                      <div>
                        <strong class="d-block text-white" style="font-size: 0.95rem;">POS &amp; RMS Systems</strong>
                        <small class="text-white-50" style="font-size: 0.75rem;">Online ordering &amp; payment</small>
                      </div>
                    </label>
                  </div>
                  <div class="col-6 col-md-4">
                    <label class="service-select-label w-100 h-100 p-3 rounded-3 d-flex flex-column justify-content-between cursor-pointer">
                      <input type="checkbox" name="services[]" value="Graphic & Print Design" class="d-none service-checkbox">
                      <div class="service-icon mb-2" style="font-size: 1.5rem; color: #D3207C;"><i class="fa-solid fa-palette"></i></div>
                      <div>
                        <strong class="d-block text-white" style="font-size: 0.95rem;">Graphic Design</strong>
                        <small class="text-white-50" style="font-size: 0.75rem;">Social ads, brochures, decks</small>
                      </div>
                    </label>
                  </div>
                </div>
              </div>

              <!-- 2. Budget & Timeline -->
              <div class="mb-5">
                <div class="row g-4">
                  <div class="col-12 col-md-6">
                    <label class="d-block text-white fw-bold fs-6 mb-2">Estimated Budget Range</label>
                    <select name="budget" class="form-select bg-dark text-white border-secondary border-opacity-50 py-3 rounded-3" style="font-size: 0.925rem;">
                      <option value="Under $2,500">Under $2,500</option>
                      <option value="$2,500 - $5,000" selected>$2,500 - $5,000</option>
                      <option value="$5,000 - $10,000">$5,000 - $10,000</option>
                      <option value="$10,000+">$10,000+ (Enterprise)</option>
                    </select>
                  </div>
                  <div class="col-12 col-md-6">
                    <label class="d-block text-white fw-bold fs-6 mb-2">Target Launch Timeline</label>
                    <select name="timeline" class="form-select bg-dark text-white border-secondary border-opacity-50 py-3 rounded-3" style="font-size: 0.925rem;">
                      <option value="Urgent (Within 2 Weeks)">Urgent (Within 2 Weeks)</option>
                      <option value="1 Month" selected>1 Month</option>
                      <option value="2 - 3 Months">2 - 3 Months</option>
                      <option value="Flexible / Ongoing">Flexible / Ongoing</option>
                    </select>
                  </div>
                </div>
              </div>

              <!-- 3. Project Details -->
              <div class="mb-5">
                <label for="projectDetails" class="d-block text-white fw-bold fs-6 mb-2">Project Overview / Goals</label>
                <textarea id="projectDetails" name="message" rows="4" class="form-control bg-dark text-white border-secondary border-opacity-50 p-3 rounded-3" placeholder="Describe what you want to achieve, reference websites you like, or specific features you need..." style="font-size: 0.925rem; resize: vertical;" required></textarea>
              </div>

              <!-- 4. Contact Information -->
              <div class="mb-4">
                <label class="d-block text-white fw-bold fs-5 mb-3">Your Contact Details</label>
                <div class="row g-3">
                  <div class="col-12 col-md-6">
                    <input type="text" name="full_name" class="form-control bg-dark text-white border-secondary border-opacity-50 py-3 px-3 rounded-3" placeholder="Full Name *" required>
                  </div>
                  <div class="col-12 col-md-6">
                    <input type="email" name="email" class="form-control bg-dark text-white border-secondary border-opacity-50 py-3 px-3 rounded-3" placeholder="Work Email *" required>
                  </div>
                  <div class="col-12 col-md-6">
                    <input type="tel" name="phone" class="form-control bg-dark text-white border-secondary border-opacity-50 py-3 px-3 rounded-3" placeholder="Phone Number (Optional)">
                  </div>
                  <div class="col-12 col-md-6">
                    <input type="text" name="company" class="form-control bg-dark text-white border-secondary border-opacity-50 py-3 px-3 rounded-3" placeholder="Company Name or Current Website">
                  </div>
                </div>
              </div>

              <input type="hidden" name="service" id="combinedServiceField" value="Web Design & Development">

              <!-- Submission Notification Box -->
              <div id="quoteFormStatus" class="alert d-none mb-3" role="alert"></div>

              <!-- Submit Button -->
              <button type="submit" id="submitQuoteBtn" class="btn w-100 py-3 fw-bold rounded-3 fs-5 text-white d-flex align-items-center justify-content-center gap-2" style="background: linear-gradient(135deg, #722C89 0%, #D3207C 100%); box-shadow: 0 8px 30px rgba(211, 32, 124, 0.4); border: 1px solid rgba(255, 255, 255, 0.2);">
                <span>Request Custom Quote &amp; Proposal</span>
                <i class="fa-solid fa-arrow-right"></i>
              </button>

              <p class="text-center text-white-50 small mt-3 mb-0">🔒 Strictly confidential. 100% Free Consultation. No obligation.</p>

            </form>

          </div>
        </div>

        <!-- Right Column: Why Brands Shift & Social Proof -->
        <div class="col-12 col-lg-4">
          <div class="d-flex flex-column gap-4">
            
            <!-- Guarantee Card -->
            <div class="p-4 rounded-4" style="background: #141418; border: 1px solid rgba(255, 255, 255, 0.08);">
              <h4 class="text-white fw-bold fs-6 mb-3 d-flex align-items-center gap-2">
                <span class="text-pink" style="color: #D3207C;">★</span> What Happens Next?
              </h4>
              <ul class="list-unstyled d-flex flex-column gap-3 text-white-50 small mb-0" style="line-height: 1.55;">
                <li class="d-flex gap-2">
                  <span class="badge rounded-circle p-1 d-flex align-items-center justify-content-center flex-shrink-0" style="background: rgba(211, 32, 124, 0.2); color: #D3207C; width: 22px; height: 22px;">1</span>
                  <span><strong>15-Minute Discovery:</strong> We review your requirements and research your competitive niche.</span>
                </li>
                <li class="d-flex gap-2">
                  <span class="badge rounded-circle p-1 d-flex align-items-center justify-content-center flex-shrink-0" style="background: rgba(211, 32, 124, 0.2); color: #D3207C; width: 22px; height: 22px;">2</span>
                  <span><strong>Custom Proposal:</strong> You receive an itemized proposal with clear milestones and fixed pricing.</span>
                </li>
                <li class="d-flex gap-2">
                  <span class="badge rounded-circle p-1 d-flex align-items-center justify-content-center flex-shrink-0" style="background: rgba(211, 32, 124, 0.2); color: #D3207C; width: 22px; height: 22px;">3</span>
                  <span><strong>Kickoff:</strong> Dedicated project lead and immediate execution.</span>
                </li>
              </ul>
            </div>

            <!-- Client Review Card (Jade Turner / J.E. Creations) -->
            <div class="p-4 rounded-4" style="background: linear-gradient(145deg, #18151D 0%, #121215 100%); border: 1px solid rgba(114, 44, 137, 0.35);">
              <div class="d-flex gap-1 mb-2" style="color: #FFC107; font-size: 0.85rem;">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>
              <p class="text-white small fst-italic mb-3" style="line-height: 1.55;">
                "BrandsShift helped me every step of the way — from my brand aesthetic to the complete POS &amp; online ordering system. They brought my vision to life!"
              </p>
              <div class="d-flex align-items-center gap-2">
                <strong class="text-white small">Jade Turner</strong>
                <span class="text-white-50 small">— Founder, J.E. Creations</span>
              </div>
            </div>

            <!-- Contact Direct Card -->
            <div class="p-4 rounded-4" style="background: #141418; border: 1px solid rgba(255, 255, 255, 0.08);">
              <h5 class="text-white fw-bold fs-6 mb-2">Need Immediate Assistance?</h5>
              <p class="text-white-50 small mb-3">Speak directly with our strategy team:</p>
              <a href="tel:<?php echo preg_replace('/[^0-9]/', '', CONTACT_PHONE); ?>" class="d-flex align-items-center gap-2 text-white text-decoration-none fw-bold small mb-2 hover-pink">
                <i class="fa-solid fa-phone" style="color: #D3207C;"></i> <?php echo CONTACT_PHONE; ?>
              </a>
              <a href="mailto:<?php echo CONTACT_EMAIL; ?>" class="d-flex align-items-center gap-2 text-white text-decoration-none fw-bold small hover-pink">
                <i class="fa-solid fa-envelope" style="color: #D3207C;"></i> <?php echo CONTACT_EMAIL; ?>
              </a>
            </div>

          </div>
        </div>

      </div>
    </div>
  </section>

</main>

<!-- 5-Second Consultation Offer Popup Modal -->
<div class="modal fade" id="quoteTimedPopup" tabindex="-1" aria-labelledby="quoteTimedPopupLabel" aria-hidden="true" data-bs-backdrop="static">
  <div class="modal-dialog modal-dialog-centered" style="max-width: 480px;">
    <div class="modal-content text-white rounded-4 overflow-hidden border-0" style="background: #18181C; box-shadow: 0 25px 70px rgba(0, 0, 0, 0.7); border: 1px solid rgba(211, 32, 124, 0.35) !important;">
      
      <div class="p-4 position-relative">
        <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3" data-bs-dismiss="modal" aria-label="Close"></button>
        
        <div class="text-center pt-2">
          <div class="d-inline-flex p-3 rounded-circle mb-3" style="background: rgba(211, 32, 124, 0.15); color: #D3207C; font-size: 1.75rem;">
            <i class="fa-solid fa-bolt"></i>
          </div>
          <h4 class="fw-bold text-white mb-2" id="quoteTimedPopupLabel">Need a Fast Estimate?</h4>
          <p class="text-white-50 small mb-4">Leave your phone number or email and our senior strategist will send you a tailored ballpark estimate in under 15 minutes.</p>
        </div>

        <form id="quickEstimatePopupForm" action="process-contact.php" method="POST">
          <div class="mb-3">
            <input type="text" name="full_name" class="form-control bg-dark text-white border-secondary border-opacity-50 py-2 px-3 rounded-3" placeholder="Your Name" required>
          </div>
          <div class="mb-3">
            <input type="email" name="email" class="form-control bg-dark text-white border-secondary border-opacity-50 py-2 px-3 rounded-3" placeholder="Your Email Address" required>
          </div>
          <div class="mb-3">
            <input type="tel" name="phone" class="form-control bg-dark text-white border-secondary border-opacity-50 py-2 px-3 rounded-3" placeholder="Phone Number (for instant SMS/call)">
          </div>
          <input type="hidden" name="service" value="Quick 15-Min Ballpark Quote Request">
          <input type="hidden" name="message" value="Requested quick ballpark estimate via 5-second popup.">

          <div id="popupFormStatus" class="alert d-none mb-3" role="alert"></div>

          <button type="submit" class="btn w-100 py-2 fw-bold text-white rounded-3 mb-2" style="background: linear-gradient(135deg, #722C89 0%, #D3207C 100%); box-shadow: 0 4px 15px rgba(211, 32, 124, 0.4);">
            Get Instant Callback
          </button>
          
          <button type="button" class="btn btn-link text-white-50 text-decoration-none w-100 text-center small py-1" data-bs-dismiss="modal">
            I'll finish the full form instead &rarr;
          </button>
        </form>

      </div>
    </div>
  </div>
</div>

<style>
/* Service Selection Checkboxes */
.service-select-label {
  background: #1C1C22;
  border: 1px solid rgba(255, 255, 255, 0.08);
  transition: all 0.25s ease;
  user-select: none;
}

.service-select-label:hover {
  border-color: rgba(211, 32, 124, 0.5);
  background: #22222A;
}

.service-checkbox:checked + .service-icon,
.service-select-label.is-selected {
  border-color: #D3207C !important;
  background: rgba(211, 32, 124, 0.1) !important;
  box-shadow: 0 0 15px rgba(211, 32, 124, 0.25) !important;
}

.service-select-label.is-selected strong {
  color: #D3207C !important;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
  
  // 1. Service Checkboxes Dynamic Toggle
  const checkboxes = document.querySelectorAll('.service-checkbox');
  const combinedServiceInput = document.getElementById('combinedServiceField');

  const updateSelectedServices = () => {
    const selected = [];
    checkboxes.forEach(cb => {
      const label = cb.closest('.service-select-label');
      if (cb.checked) {
        selected.push(cb.value);
        if (label) label.classList.add('is-selected');
      } else {
        if (label) label.classList.remove('is-selected');
      }
    });
    if (combinedServiceInput) {
      combinedServiceInput.value = selected.length > 0 ? selected.join(', ') : 'General Enquiry';
    }
  };

  checkboxes.forEach(cb => {
    cb.addEventListener('change', updateSelectedServices);
    // Initial state
    if (cb.checked) {
      const label = cb.closest('.service-select-label');
      if (label) label.classList.add('is-selected');
    }
  });

  // 2. Quote Estimator AJAX Form Handler
  const quoteForm = document.getElementById('quoteEstimatorForm');
  const quoteStatus = document.getElementById('quoteFormStatus');

  if (quoteForm) {
    quoteForm.addEventListener('submit', function(e) {
      e.preventDefault();
      const submitBtn = document.getElementById('submitQuoteBtn');
      const originalText = submitBtn ? submitBtn.innerHTML : 'Submit';

      if (submitBtn) {
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm"></span> Processing...';
      }

      const formData = new FormData(quoteForm);

      fetch('process-contact.php', {
        method: 'POST',
        body: formData
      })
      .then(res => res.json())
      .then(data => {
        if (quoteStatus) {
          quoteStatus.classList.remove('d-none', 'alert-danger', 'alert-success');
          if (data.status === 'success') {
            quoteStatus.classList.add('alert-success');
            quoteStatus.innerHTML = `<strong>Success!</strong> ${data.message}`;
            quoteForm.reset();
            updateSelectedServices();
          } else {
            quoteStatus.classList.add('alert-danger');
            quoteStatus.innerHTML = `<strong>Error:</strong> ${data.message || 'Something went wrong.'}`;
          }
        }
      })
      .catch(() => {
        if (quoteStatus) {
          quoteStatus.classList.remove('d-none', 'alert-success');
          quoteStatus.classList.add('alert-danger');
          quoteStatus.textContent = 'Connection error. Please check your network and try again.';
        }
      })
      .finally(() => {
        if (submitBtn) {
          submitBtn.disabled = false;
          submitBtn.innerHTML = originalText;
        }
      });
    });
  }

  // 3. 5-Second Timed Consultation Popup Modal
  setTimeout(function() {
    // Only show if user hasn't submitted yet and modal exists
    const popupElem = document.getElementById('quoteTimedPopup');
    if (popupElem && typeof bootstrap !== 'undefined' && bootstrap.Modal) {
      const popupModal = new bootstrap.Modal(popupElem);
      popupModal.show();
    }
  }, 5000);

  // 4. Quick Estimate Popup Form AJAX
  const popupForm = document.getElementById('quickEstimatePopupForm');
  const popupStatus = document.getElementById('popupFormStatus');

  if (popupForm) {
    popupForm.addEventListener('submit', function(e) {
      e.preventDefault();
      const formData = new FormData(popupForm);

      fetch('process-contact.php', {
        method: 'POST',
        body: formData
      })
      .then(res => res.json())
      .then(data => {
        if (popupStatus) {
          popupStatus.classList.remove('d-none', 'alert-danger', 'alert-success');
          if (data.status === 'success') {
            popupStatus.classList.add('alert-success');
            popupStatus.textContent = 'Thank you! We will call/email you within 15 minutes.';
            setTimeout(() => {
              const modalInstance = bootstrap.Modal.getInstance(document.getElementById('quoteTimedPopup'));
              if (modalInstance) modalInstance.hide();
            }, 2000);
          } else {
            popupStatus.classList.add('alert-danger');
            popupStatus.textContent = data.message || 'Error sending request.';
          }
        }
      })
      .catch(() => {
        if (popupStatus) {
          popupStatus.classList.remove('d-none');
          popupStatus.classList.add('alert-danger');
          popupStatus.textContent = 'Network error. Please try again.';
        }
      });
    });
  }

});
</script>

<?php
include_once __DIR__ . '/includes/footer.php';
?>
