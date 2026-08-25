# System Architecture

## Architecture Overview
The **Brands Shift** platform is built on a clean, modular **PHP 8+ / HTML5 / Modular CSS3 / Vanilla JS** stack designed for max speed, zero unnecessary dependencies, and lightweight server execution.

```
+-----------------------------------------------------------------------+
|                            BRANDS SHIFT                               |
+-----------------------------------------------------------------------+
| index.php (Entry Point)                                              |
|   |-- config.php (Site Constants & Color Configuration)               |
|   |-- includes/header.php (Global Head & Responsive Header Nav)       |
|   |-- includes/hero.php (Hero Section with Dual Vertical Slider)      |
|   |-- includes/services.php (Services Breakdown Grid)                |
|   |-- includes/modal.php (Book a Call Popup Form)                     |
|   `-- includes/footer.php (Footer Navigation & Global Scripts)       |
+-----------------------------------------------------------------------+
| Assets & Styling                                                      |
|   |-- css/variables.css (Theme Tokens: #722C89, #D3207C, Typography)  |
|   |-- css/reset.css (Box-sizing & Normalize Defaults)                |
|   |-- css/header.css (Header & Drawer Navigation Styles)              |
|   |-- css/components.css (Hero Slider, Service Cards, Modal, Buttons) |
|   `-- js/main.js (Vertical Infinite Marquee, Mobile Menu, Modal JS)   |
+-----------------------------------------------------------------------+
```

---

## Technical Stack

| Layer | Technology | Rationale |
| :--- | :--- | :--- |
| **Server Engine** | PHP 8.x | Lightweight, instant page load, template modularity |
| **Styling** | Modern CSS3 (Variables, Grid, Flex, Keyframe Marquee) | Zero framework bloat, 60fps hardware-accelerated animations |
| **Typography** | Sofia Sans / Sofia Pro (Google Fonts API + fallbacks) | Matches exact requested typography specs |
| **Scripts** | Pure Vanilla JavaScript (ES6 Modules) | Fast execution, native IntersectionObserver, lightweight |
| **Images** | WebP Format (High Compression) | Sub-second LCP (Largest Contentful Paint) performance |

---

## Directory Structure
```
Brands Shift/
│
├── config.php                 # PHP Global configuration & site data
├── index.php                  # Main landing page
├── process-contact.php        # PHP contact form API handler
│
├── includes/
│   ├── header.php             # Navigation header component
│   ├── hero.php               # Dual-column vertical slider hero section
│   ├── services-grid.php      # Detailed service overview section
│   ├── modal.php              # Contact/Book a call popup modal
│   └── footer.php             # Global footer component
│
├── css/
│   ├── variables.css          # CSS custom properties & design tokens
│   ├── reset.css              # Global CSS reset & typography rules
│   ├── header.css             # Navigation & responsive menu CSS
│   ├── components.css         # Hero slider, service cards, modal CSS
│   └── responsive.css         # Media queries for tablet & mobile views
│
├── js/
│   ├── modules/
│   │   ├── verticalSlider.js  # Seamless infinite vertical/horizontal slider logic
│   │   ├── modalController.js # Popup modal open/close & validation handler
│   │   └── mobileNav.js       # Mobile hamburger navigation controller
│   └── main.js                # Primary JS bootstrap script
│
├── assets/
│   └── images/                # Local webp service image assets
│
└── docs/                      # Technical documentation (.md)
    ├── PRD.md
    ├── Architecture.md
    ├── Rules.md
    ├── Phases.md
    └── Design.md
```

---

## Performance & Optimization Rules
1. **Critical CSS Delivery**: Preload core CSS files and load fonts asynchronously to prevent layout shifts (CLS < 0.01).
2. **Hardware Accelerated Animations**: All ticker and slider animations utilize `transform: translate3d()` and `will-change: transform` to run on GPU threads.
3. **Lazy Loading**: Non-hero images use native `loading="lazy"` while top hero WebP cards use `loading="eager"` and `fetchpriority="high"`.
