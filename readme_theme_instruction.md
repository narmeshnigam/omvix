# Livintiq Theme & UI Guidelines

_Description: UI theme, color palette, typography, and component styling for Livintiq Website_

---

## 🎨 Color Palette

| Purpose             | HEX Code   | Notes                                      |
|---------------------|------------|--------------------------------------------|
| Primary Background  | `#002A22`  | Dark theme base canvas                     |
| Accent Green        | `#67F1B4`  | Used for highlights, icons, and headings   |
| Subdued Text        | `#B2EEDC`  | Body text and muted elements               |
| Button Background   | `#A4F4CB`  | Used in all CTA buttons                    |
| Button Text Color   | `#002A22`  | Ensures high contrast in buttons           |
| Overlay Box BG      | `rgba(255,255,255,0.04)` | Card and container backgrounds     |
| Shadow Tint         | `rgba(103, 241, 180, 0.2)` | Card hover shadows               |

---

## 🔤 Typography

| Element       | Font  | Weight | Size (px) | Use Case                         |
|---------------|-------|--------|-----------|----------------------------------|
| H1            | Inter | 700    | 64        | Hero titles                      |
| H2            | Inter | 600    | 36        | Section titles                   |
| H3            | Inter | 600    | 22        | Card titles, headlines           |
| Body Text     | Inter | 400–500| 16        | Paragraphs, descriptions         |
| Button Text   | Inter | 600    | 16–18     | CTAs                             |
| Small Text    | Inter | 400    | 14        | Footer, labels                   |

- Title Case for headings
- Sentence case for body text
- Line height: 1.4–1.6
- No text shadows

---

## 🔘 Buttons

```css
background: #A4F4CB;
color: #002A22;
padding: 16px 32px;
border-radius: 12px;
font-weight: 600;
transition: all 0.3s ease;
```

- Hover: Brightness ↑ + slight scale up
- Disabled: Greyed with cursor `not-allowed`

---

## 🃏 Cards

```css
background: rgba(255,255,255,0.04);
padding: 24px;
border-radius: 16px;
transition: transform 0.3s ease, box-shadow 0.3s ease;
```

- Hover: Translate up & apply shadow

---

## 🖼 Image Styling

- Border-radius: 16px
- Shadow: `0 8px 24px rgba(0,0,0,0.3)`
- Max-width: 100%
- Margin-bottom: 32px
- Use dark-tone or twilight-lit images with luxury decor

---

## 📩 Form Inputs

```css
padding: 12px;
border-radius: 8px;
border: 1px solid #67F1B4;
background-color: transparent;
color: #67F1B4;
```

- Label spacing: `display: block`, `margin-bottom: 8px`
- All inputs (text, select, textarea) match the color scheme

---

## 📋 Tables

```css
border-collapse: collapse;
border: 1px solid #67F1B4;
padding: 12px;
color: #B2EEDC;
```

Header row:
```css
background: rgba(255,255,255,0.04);
color: #67F1B4;
font-weight: 600;
```

---

## 📱 Dropdown Styling

```css
appearance: none;
border: 1px solid #67F1B4;
color: #67F1B4;
padding: 12px;
border-radius: 8px;
```

Avoid default OS styling. Use inline SVG or pseudo-elements for caret.

---

## 🔄 Loading Spinner

```css
border: 6px solid rgba(255,255,255,0.2);
border-top: 6px solid #67F1B4;
border-radius: 50%;
animation: spin 1s linear infinite;

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
```

Used for submissions, transitions, or background loading states.

---

## 📐 Layout & Spacing

| Element            | Spec                   |
|--------------------|------------------------|
| Max Width          | 1280px (centered)      |
| Page Padding       | 48px desktop, 24px mobile |
| Section Spacing    | 96px vertical spacing  |
| Card Margin Bottom | 24px                   |

---

## ❌ Don’ts

- No light backgrounds
- No default browser dropdowns or inputs
- No boxy or sharp corners
- No excessive shadows or animations
- Do not mix fonts or style frameworks
