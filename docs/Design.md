# Design Guidelines & System Specifications

## Visual Hierarchy & Aesthetics
The design of **Brands Shift** is inspired by top-tier agency websites like **DesignInDC**, utilizing a clean light-mode canvas with vibrant purple-to-pink gradient accents, sleek dark service cards, high contrast condensed headings, and fluid vertical auto-scrolling motion.

---

## 1. Color System

| Token | Hex / Value | Usage |
| :--- | :--- | :--- |
| `--color-purple` | `#722C89` | Primary Purple Accent |
| `--color-pink` | `#D3207C` | Primary Vibrant Pink Accent |
| `--color-gradient-primary` | `linear-gradient(135deg, #722C89 0%, #D3207C 100%)` | CTA Buttons, Gradient Text, Vignette Overlays |
| `--color-white` | `#FFFFFF` | Background, Card text, Light containers |
| `--color-light-grey` | `#F8F9FA` | Page background section fills |
| `--color-grey-border` | `#EAEAEA` | Subtle card & header borders |
| `--color-black` | `#0A0A0B` | Primary headings, dark accents |
| `--color-light-black` | `#1E1E24` | Paragraph text, dark pill button background |

---

## 2. Typography

- **Heading Font**: `sofia-pro, 'Sofia Sans', 'Inter', sans-serif`
- **Body Font**: `sofia-pro, 'Sofia Sans', 'Inter', sans-serif`
- **Heading Weight Mix**:
  - Main Heading: `800` (Extra Bold)
  - Sub-heading span (`.w-light`): `300` (Light Weight)
- **Fluid Font Sizes**:
  - H1 Hero Title: `clamp(2.5rem, 4.5vw, 4.25rem)`
  - Card Title: `1.5rem` (`700` Bold)
  - Paragraph: `1.185rem` (Line height: `1.65`)

---

## 3. Component Design Specifications

### Hero Section Layout
- **Left Column**: Typography, Value proposition, CTA Button.
- **Right Column**: Dual vertical infinite marquee (`810px` height) with 2 columns scrolling in opposing vertical directions (Top to Bottom / Bottom to Top).
- **Vignette Masking**: Top and bottom edge gradient masks (`mask-image: linear-gradient(...)`) to create a smooth fade-in / fade-out effect for cards entering the viewport.

### Service Cards (`.vert-slider__elem`)
- Border radius: `20px` (`var(--radius-lg)`).
- Card image: WebP high resolution with subtle brightness contrast filter.
- Overlay: Gradient vignette (`linear-gradient(180deg, transparent 40%, rgba(10, 10, 11, 0.85) 100%)`).
- Hover state: `scale(1.02)` transform elevation with glowing purple/pink shadow (`0 20px 40px rgba(114, 44, 137, 0.3)`).

### CTA Button ("Book a Call")
- Pill shape (`border-radius: 9999px`).
- Dark background (`#1E1E24`) transitioning into gradient on hover.
- Green status dot indicator with pulsing keyframe animation representing live availability.
