<?php
// includes/modal.php - Contact & Book a Call Modal Popup
?>
<div class="modal-overlay" id="contactModal" aria-hidden="true">
  <div class="modal-card" role="dialog" aria-labelledby="modalTitle">
    <button class="modal-close-btn" id="closeModalBtn" aria-label="Close modal">&times;</button>
    
    <div style="display: flex; align-items: center; gap: 0.5rem; margin-bottom: 0.5rem;">
      <span class="pulsing-dot"></span>
      <span style="font-size: 0.85rem; font-weight: 700; text-transform: uppercase; color: var(--color-pink); letter-spacing: 0.05em;">Schedule Discovery Call</span>
    </div>

    <h2 class="modal-title" id="modalTitle">Let's Elevate Your Brand</h2>
    <p class="modal-subtitle">Fill out the quick form below and our strategy team will be in touch within 24 hours.</p>

    <form class="modal-form" action="process-contact.php" method="POST" id="modalContactForm">
      <div class="form-group">
        <label for="fullName">Full Name</label>
        <input type="text" id="fullName" name="full_name" placeholder="John Doe" required>
      </div>

      <div class="form-group">
        <label for="emailAddress">Work Email</label>
        <input type="email" id="emailAddress" name="email" placeholder="john@company.com" required>
      </div>

      <div class="form-group">
        <label for="serviceNeeded">Service Needed</label>
        <select id="serviceNeeded" name="service" required>
          <option value="">Select a Service...</option>
          <option value="Web Design">Web Design</option>
          <option value="App Development">App Development</option>
          <option value="Graphic Design">Graphic Design</option>
          <option value="Branding">Branding</option>
          <option value="Video / Photo">Video / Photo</option>
          <option value="Full Strategy">Full Creative Strategy</option>
        </select>
      </div>

      <div class="form-group">
        <label for="projectMessage">Project Details</label>
        <textarea id="projectMessage" name="message" rows="3" placeholder="Tell us about your goals, timeline, and budget..."></textarea>
      </div>

      <button type="submit" class="btn-submit">
        Submit Request &amp; Book Call
      </button>
    </form>
  </div>
</div>
