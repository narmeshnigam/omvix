# 📌 Livintiq Website Structural Document – Footer

## ✅ 1. Component Title
**Website Footer**

---

## ✅ 2. Component Purpose
To serve as the closing section of each webpage, offering essential navigation, legal links, trust signals, and direct contact options. It reinforces the brand identity and provides utility in terms of exploration, compliance, and conversion.

---

## ✅ 3. Audience Context
- **All users**, across all pages and devices.
- Especially useful for:
  - Visitors who scroll to the end to find contact info.
  - Users searching for terms/policies.
  - Those ready to take the next step or explore more.

---

## ✅ 4. Key Functions
- Quick access to core navigation links.
- Display brand logo and consistent styling.
- Show essential legal links (Privacy, Terms).
- Offer social/contact CTA such as WhatsApp or Email.
- Reflect trust, polish, and completeness.

---

## ✅ 5. Detailed Component Outline (with Precise UI Instructions)

### 🎯 Footer Layout (Full-width Block)

**UI Instructions:**
- Full-width horizontal container
- Background color: **#002A22**
- Padding: **48px top/bottom**, **24px side padding mobile, 48px desktop**
- Font: **Inter**, color: **#B2EEDC**
- Divide into **3 columns** on desktop (stacked on mobile)

---

### 🔹 Column 1: Brand & Description

| Element | Spec |
|--------|------|
| Logo   | Livintiq logo (height: 36px, top margin: 4px) |
| Text   | “Livintiq delivers luxury smart home automation across Delhi NCR. From consultation to installation, we simplify intelligent living.” |

---

### 🔹 Column 2: Quick Links

**Heading:** Navigation  
**Links List (vertically stacked):**

- Home → `/`
- Solutions → `/solutions`
- Projects → `/projects`
- Learn → `/learn`
- Contact Us → `/contact`
- For Homeowners → `/for-homeowners`
- For Professionals → `/for-professionals`
- Book a Demo → `/book-demo`

**Link Styling:**
- Font size: 16px
- Color: #67F1B4
- Hover effect: underline + slight brightness

---

### 🔹 Column 3: Contact & Policies

**Heading:** Get in Touch

- 📞 +91 98765 43210  
- ✉️ contact@livintiq.com  
- 📍 Sector 62, Noida, Uttar Pradesh – 201301  
- 🕒 Mon–Sat, 10AM to 7PM  

**Divider line**

**Policy Links:**
- Privacy Policy → `/privacy-policy`
- Terms of Use → `/privacy-policy#terms`

**Style:** Inline links separated by dot (•) or vertical divider

---

## ✅ 6. Bottom Strip (Copyright)

**UI Instructions:**
- Background: Same as footer
- Border-top: 1px solid rgba(255, 255, 255, 0.1)
- Font size: 14px
- Text color: #B2EEDC
- Text alignment: center

**Text:**  
© 2025 Livintiq. All rights reserved. • Powered by SecureIndia Automations

---

## ✅ 7. Visual Guidelines & Assets

| Element      | Style Spec |
|--------------|------------|
| Font         | Inter (400–500 weight) |
| Background   | #002A22 |
| Link color   | #67F1B4 |
| Icon color   | Neon-green if used, else default muted |
| Section padding | 48px block spacing |

---

## ✅ 8. Interaction & UX Notes

- Links: Underline + brightness increase on hover
- Layout: Stacked vertically on mobile
- Icons: Use minimal neon-line icons if contact is icon-based
- Policy links: Ensure clickability and contrast compliance

---

## ✅ 9. SEO & Accessibility Considerations

- All links should be crawlable
- Include `aria-label` for social/contact links if icons used
- Footer should include `<footer>` semantic tag with `role="contentinfo"`

---

## ✅ 10. Technical Notes (Immediate Execution)

- Footer must appear on all pages.
- Responsive stacking logic: 3-column desktop → 2-column tablet → stacked mobile
- Footer links should preload/cached if internal
- Sticky WhatsApp chat icon should sit **above** the footer when scrolling ends
