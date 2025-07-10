# Omvix Website Theme & UI Style Guide

_Last Updated: 10 July 2025_  
**Palette: Orange · Red · Yellow**

---

## 🎨 Color Palette

| Purpose               | HEX Code     | Notes                                           |
|-----------------------|--------------|-------------------------------------------------|
| Primary Background    | `#FFF8F0`    | Soft cream tone, light and inviting             |
| Primary Accent        | `#FF6F40`    | Orange – for headings, CTAs, and icon accents  |
| Secondary Accent      | `#E25822`    | Deep Red – for hovers, alerts, outlines        |
| Muted Text Color      | `#5A4033`    | For regular body copy and labels               |
| Bright Highlight      | `#FFD447`    | Yellow – buttons, alerts, badges               |
| Button Background     | `#FFB347`    | Warm orange for main CTA buttons               |
| Button Text Color     | `#3B1F0F`    | Contrasting dark brown for button readability  |
| Card/Overlay Background | `#FFF1E5`  | For card backgrounds and subtle blocks         |
| Card Shadow Tint      | `rgba(255,111,64,0.2)` | Used on hover elevation                      |

---

## ✏️ Typography

| Element       | Font   | Weight | Size (px) | Use Case                        |
|---------------|--------|--------|-----------|----------------------------------|
| H1            | Inter  | 700    | 64        | Hero titles, page headers        |
| H2            | Inter  | 600    | 36        | Section headers                  |
| H3            | Inter  | 600    | 22        | Cards, small blocks              |
| Body Text     | Inter  | 400–500| 16        | General descriptive text         |
| Button Text   | Inter  | 600    | 16–18     | CTAs                             |
| Small Text    | Inter  | 400    | 14        | Labels, footer items             |

- Line height: approx 1.5  
- Headings: Title Case  
- Body Text & Buttons: Sentence case  
- No text shadows allowed

---

## 🎉 Button Styles

```css
background: #FFB347;
color: #3B1F0F;
padding: 16px 32px;
border-radius: 12px;
font-weight: 600;
transition: all 0.3s ease;
```

- **Hover**: Brightness boost + scale-up  
- **Disabled**: Grayed with `cursor: not-allowed`

---

## 🏠 Cards

```css
background: #FFF1E5;
padding: 24px;
border-radius: 16px;
transition: transform 0.3s ease, box-shadow 0.3s ease;
```

- **Hover**:
  ```css
  transform: translateY(-5px);
  box-shadow: 0 4px 20px rgba(255,111,64,0.2);
  ```

---

## 🖼️ Images

- Border-radius: 16px  
- Box Shadow: `0 8px 24px rgba(0,0,0,0.2)`  
- Use warm lighting  
- Margin-bottom: 32px  
- Max-width: 100%

---

## 🔻 Custom Dropdowns

```css
appearance: none;
border: 1px solid #FF6F40;
color: #FF6F40;
padding: 12px;
border-radius: 8px;
```

---

## 📊 Tables

- Border: `1px solid #FF6F40`  
- Header Row: `#FFF1E5` background, `#E25822` text  
- Padding: 12px

---

## 🔄 Loading Spinner

```css
border: 6px solid rgba(255,255,255,0.2);
border-top: 6px solid #FF6F40;
border-radius: 50%;
animation: spin 1s linear infinite;
```

---

## 🔢 Navigation Bar

- **Background**: `#FFF8F0`  
- **Font**: Inter 600  
- **Text Color**: `#E25822`  
- **CTA Button**: as per global style  
- **Mobile**: hamburger drawer, same palette

---

## ✉️ Form Inputs

- Border: 1px solid `#FF6F40`  
- Radius: 8px  
- Font Color: `#5A4033`  
- Background: transparent  
- Labels: block, margin-bottom: 8px

---

## ✨ Animation Rules

- `transition: all 0.3s ease`  
- Hover = brightness + light scale  
- Avoid flashy/fast animations

---

## 📏 Spacing & Containers

| Element        | Spec                |
|----------------|---------------------|
| Max Width      | 1280px centered     |
| Page Padding   | 48px (desktop), 24px (mobile) |
| Section Gap    | 96px vertical       |
| Card Margin    | 24px bottom         |

---

## ❌ Don’ts

- No black/dark backgrounds  
- No neon greens or previous green tones  
- Avoid sharp corners and clutter  
- Don’t mix fonts or use heavy shadows

---

## 📁 Assets Reference

- Full implementation live in `Omvix UI Sample Webpage.html`  
- UI behavior preview available via working prototype
