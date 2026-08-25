# Development & Project Rules

## Core Guidelines

### 1. Code Quality & Standards
- **PHP**: Strictly use clean PHP 8+ syntax with properly escaped HTML output (`htmlspecialchars`).
- **HTML**: Semantic HTML5 tags (`<header>`, `<main>`, `<section>`, `<article>`, `<figure>`, `<footer>`).
- **CSS**: Pure Vanilla CSS with standard CSS Variables. Avoid external utility libraries like Tailwind unless explicitly requested.
- **JS**: Vanilla ES6 JavaScript without jQuery or heavy dependencies. Use `DOMContentLoaded` event listeners and modular functions.

### 2. Design Integrity & Palette
- **Fonts**: Use `sofia-pro, sans-serif` (or `'Sofia Sans'`, `'Inter'`, `sans-serif` loaded via Google Fonts).
- **Colors**:
  - Primary Gradient: `linear-gradient(135deg, #722C89 0%, #D3207C 100%)`
  - Deep Purple: `#722C89`
  - Vibrant Pink: `#D3207C`
  - Dark Accent: `#0A0A0B` (Black) & `#1E1E24` (Light Black)
  - Light Accent: `#FFFFFF` (White) & `#F8F9FA` (Light Grey)

### 3. Responsiveness & Adaptivity
- **Breakpoints**:
  - Desktop Large: `>= 1200px` (Dual vertical infinite scrolling columns, 810px height container)
  - Desktop Standard: `992px - 1199px`
  - Tablet & Mobile: `< 992px` (Dual horizontal marquee rows moving in opposite directions)
  - Mobile Small: `< 576px` (Stacked layout with optimized touch targets)

### 4. File Organization & Naming Conventions
- Component filenames must be lowercase and hyphen-separated (`service-card.php`, `header.css`).
- Class names must follow clear semantic naming (`.hero-heading`, `.vert-area-slider`, `.vert-slider__elem`).

### 5. Rules Compliance
- Always verify all modified code builds and runs cleanly.
- Keep documentation up to date inside `/docs/`.
