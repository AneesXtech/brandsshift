# Implementation Phases

## Phase 1: Planning & Documentation Setup (Completed)
- [x] Analyze reference HTML snippet and screenshot from DesignInDC.
- [x] Establish design system tokens (colors `#722C89`, `#D3207C`, `#0A0A0B`, `#1E1E24`, `#F8F9FA`, fonts `sofia-pro, sans-serif`).
- [x] Create project documentation files (`PRD.md`, `Architecture.md`, `Rules.md`, `Phases.md`, `Design.md`) in `/docs/`.

## Phase 2: Core PHP Architecture & Style System Setup
- [ ] Create `config.php` for dynamic service arrays, site settings, and imagery URLs.
- [ ] Build CSS Foundation: `variables.css`, `reset.css`, `header.css`, `components.css`, `responsive.css`.
- [ ] Implement imported Sofia Sans / Sofia Pro Google Fonts typography styling.

## Phase 3: Header & Hero Section Implementation
- [ ] Build `includes/header.php` with navigation links, logo, and action buttons.
- [ ] Build `includes/hero.php` featuring:
  - High-impact headline with mixed font-weight styling (`.w-light` & gradient text).
  - Engaging intro paragraph.
  - "Book a Call" CTA button with pulsing green dot animation.
  - Dual vertical infinite marquee columns with 10 high-resolution WebP service cards.
- [ ] Add pause-on-hover & smooth CSS continuous transform logic.

## Phase 4: Service Cards Section & Modal Lead Form
- [ ] Build `includes/services-grid.php` detailing the 5 main requested services:
  1. Web Design
  2. App Development
  3. Graphic Design
  4. Branding
  5. Video / Photo
- [ ] Build `includes/modal.php` interactive lead popup modal with PHP processing script (`process-contact.php`).

## Phase 5: Responsive Polish & Speed Optimization
- [ ] Implement responsive media queries for horizontal marquee fallback on screens `< 992px`.
- [ ] Verify image lazy loading, high LCP priority, zero CLS, and fast page load speed.
- [ ] Test cross-browser compatibility and local PHP execution.
