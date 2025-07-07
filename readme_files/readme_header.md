# 📌 Omvix Website Structural Document – Header Navigation

## ✅ 1. Component Title
**Website Header / Navigation Bar**

---

## ✅ 2. Component Purpose
To provide seamless and intuitive access to all major sections of the Omvix website, while reinforcing the brand identity through consistent styling and presence across all pages (desktop and mobile).

---

## ✅ 3. Audience Context
- **All Users** visiting the site across:
  - Homeowners exploring automation.
  - Architects/Designers assessing partnerships.
  - Visitors landing on blog, gallery, or consultation pages.
- Must ensure visibility of key CTAs and brand presence at all times.

---

## ✅ 4. Key Functions
- Serve as the fixed access point to major page links.
- Reinforce Omvix branding.
- Provide immediate CTAs (e.g. “Book Demo” and WhatsApp).
- Mobile-responsive with minimal visual clutter.

---

## ✅ 5. Detailed Component Outline (with Precise UI Instructions)

### 🎯 Structure Layout (Desktop View)

**UI Instructions:**
- Layout: **Fixed-top horizontal navigation bar**
- Background: **#002A22 (Primary Background)**
- Height: **80px**
- Padding: **24px top/bottom, 48px left/right**
- Font: **Inter, 500–600 weight, 18px size**
- Text Color: **#67F1B4**

**Component Sections (Left to Right):**

| Section       | Element Details                                         |
|---------------|----------------------------------------------------------|
| Left          | **Brand Logo** (Omvix logo, height: 48px)             |
| Center        | **Navigation Links**: Home, Solutions, Projects, Learn, For Homeowners, For Professionals, Contact |
| Right         | **Primary CTA Button**: “Book a Demo” → styled button <br> **WhatsApp Icon CTA** → always visible (popup or direct link) |

---

### 🎯 Mobile View (Screen width ≤ 768px)

**UI Instructions:**
- Collapsed **Hamburger Icon (top right)**
- Click triggers a **Slide-out Drawer Menu** from the right.
- Drawer menu background: **#002A22**
- Text: **#67F1B4**
- Font Size: 18px
- Padding inside drawer: 24px
- Include:
  - **Navigation Links**: Stacked vertically with spacing
  - **CTA Button**: “Book a Demo” (below links)
  - **WhatsApp Button** at the bottom

---

## ✅ 6. Navigation Links (Universal Across Site)

| Link Label         | Target URL                      |
|--------------------|----------------------------------|
| Home               | `/`                              |
| Solutions          | `/solutions`                    |
| Projects           | `/projects`                     |
| Learn              | `/learn`                        |
| For Homeowners     | `/for-homeowners`               |
| For Professionals  | `/for-professionals`            |
| Contact            | `/contact`                      |

---

## ✅ 7. CTA Buttons

### 🔹 Book a Demo (Primary CTA Button)
- Label: **“Book a Demo”**
- Target URL: `/book-demo`
- Style:
  - Background: **#A4F4CB**
  - Text: **#002A22**
  - Border-radius: 12px
  - Padding: 12px 24px
  - Hover: Brightness 110%, scale 1.02

### 🔹 WhatsApp CTA (Floating/Inline Button)
- Label: Icon-only (WhatsApp logo or "+")
- Target: `https://wa.me/919876543210?text=Hi, I'm interested in Omvix smart home automation.`
- Placement:
  - Inline in desktop nav bar (top-right beside demo button)
  - Floating sticky button (bottom-right) on scroll/mobile

---

## ✅ 8. Interaction & UX Notes
- Navbar should **shrink slightly** (height: 64px) on scroll for desktop.
- Hamburger drawer: animated slide-in/out with overlay fade background.
- Highlight active menu item with underline or brighter green (`#A4F4CB`).
- Accessibility: All links and buttons are keyboard/tab accessible.
- Transition: all `0.3s ease-in-out` for hover/focus effects.

---

## ✅ 9. Visual Guidelines & Assets

| Element         | Spec                                                                 |
|------------------|----------------------------------------------------------------------|
| Font             | Inter – 600 for links/buttons                                        |
| Text color       | #67F1B4                                                              |
| Hover Link       | Brightness increase / underline (bottom border #67F1B4)              |
| Background       | Solid #002A22                                                        |
| Icons (WhatsApp) | Line-style, neon-green (#67F1B4), 24px                               |
| Logo             | Provided by brand. Maintain height: 48px. Suggested padding: 8–12px  |

---

## ✅ 10. SEO & Accessibility Considerations
- Use `aria-label` for hamburger toggle: `"Toggle navigation menu"`
- `<nav>` element with `role="navigation"`
- Include structured breadcrumbs (optional) for deep-linked pages.

---

## ✅ 11. Technical Notes (Immediate Execution)
- Sticky behavior must not overlap hero content (use Z-index appropriately).
- Mobile drawer closes on outside click or pressing Escape.
- Button and link hover effects match global UI kit.
