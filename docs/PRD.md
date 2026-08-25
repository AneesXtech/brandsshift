# Product Requirements Document (PRD)

## Project Overview
**Brands Shift** is a high-performance, modern digital agency website inspired by [DesignInDC](https://designindc.com/). The project features a dynamic hero section with dual infinite vertical scrolling service cards, high contrast modern typography (`sofia-pro, sans-serif`), a custom gradient color scheme (`#722C89` and `#D3207C`), and a fast, responsive PHP architecture.

---

## Objectives
1. **Stunning Hero Experience**: Recreate the iconic DesignInDC vertical dual-column infinite auto-scrolling carousel showcasing core agency services.
2. **Speed & Performance**: Achieve ultra-fast load times with lightweight vanilla CSS and modular JS, avoiding heavy framework overhead.
3. **Responsive Design**: Flawless layout adaptivity across ultra-wide, desktop, tablet, and mobile screens (switching from vertical scroll to dual horizontal marquee on mobile).
4. **Lead Generation & UX**: Provide intuitive navigation and an interactive "Book a Call" popup modal for quick user conversion.
5. **Clean Modular PHP Backend**: Simple, maintainable PHP structure separating header, hero, footer, contact modal, and assets.

---

## Key Features & Requirements

### 1. Navigation Header
- **Logo**: Sleek "BRANDS SHIFT" typography with gradient accent.
- **Nav Links**: Services, App Development, Graphic Design, Branding, Video/Photo, Resources.
- **CTA Actions**: "Book a Call" primary pill button & "Client Login" link.
- **Mobile Menu**: Responsive hamburger drawer for mobile viewports.

### 2. Agency Hero Section
- **Headline**: "Elevating Brands Through Creative Strategy & Conversion-Focused Marketing"
  - Styled with mixed font weights (Bold vs `.w-light` lightweight) and gradient accent text.
- **Sub-headline**: "As your creative partner, we’re your all-in-one destination for creative services—here to grow your business, solve challenges, and elevate your brand with lasting impact."
- **CTA Button**: Animated "Book a Call" button with pulsing green status indicator dot.
- **Dual Vertical Infinite Slider**:
  - **Column 1**: Moves infinitely upwards featuring Web Design, Search Engine Optimization, App Development, Video & Photo, Mobile Apps.
  - **Column 2**: Moves infinitely downwards featuring Digital Marketing, Marketing Strategy, Graphic Design, Branding, AI Strategy.
  - **Hover Interaction**: Pauses scrolling when hovered.
  - **Mobile Fallback**: Switches to horizontal dual-row continuous infinite ticker for screen widths < 992px.

### 3. Core Agency Services Highlighted
| Service Name | Description | Featured Image Asset |
| :--- | :--- | :--- |
| **Web Design** | Conversion-focused & stunning web experiences | `webdesign2x_home.webp` |
| **App Development** | High-performance mobile & web applications | `appdev2x_home.webp` |
| **Graphic Design** | Visual identity & digital artwork | `graphicdesign2x_home.webp` |
| **Branding** | Strategic brand identity & guidelines | `branding2x_home.webp` |
| **Video / Photo** | Cinematic video production & photography | `videophoto2x_home.webp` |

### 4. Interactive Lead Modal ("Book a Call")
- Glassmorphism modal popup triggered by "Book a Call" buttons.
- Form fields: Full Name, Email, Service Needed (Dropdown), Message.
- PHP backend handler for instant contact submission processing.

---

## Design System Specifications
- **Primary Gradient**: `linear-gradient(135deg, #722C89 0%, #D3207C 100%)`
- **Primary Color 1**: Deep Purple `#722C89`
- **Primary Color 2**: Vibrant Pink `#D3207C`
- **Neutral Light**: White `#FFFFFF`, Light Grey `#F8F9FA`, Border Grey `#EAEAEA`
- **Neutral Dark**: Deep Black `#0A0A0B`, Light Black `#1E1E24`
- **Typography**: Sofia Pro / Sofia Sans (`'Sofia Sans'`, `'Inter'`, `sans-serif`)
