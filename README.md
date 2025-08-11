# iSwift Website

A luxury smart home automation brand site – offering multi-brand IoT integration for homes and offices.

---

## 🚀 Purpose of the Website

iSwift’s website is designed to:

- Convert high-intent visitors into consultation/demo leads
- Educate users and build trust via real projects, blogs, and FAQs
- Collaborate with architects and designers through dedicated partner programs
- Present iSwift as a premium, future-ready, and reliable automation brand

---

## 🧭 Sitemap Overview

| Page               | Description                                      | ReadMe Reference                |
|--------------------|--------------------------------------------------|----------------------------------|
| Home               | First impression, solutions, trust elements      | `README_HomePage.md`            |
| About Us           | Brand story, values, evolution                   | `README_AboutUs.md`             |
| Solutions          | Grid of all solutions with deep linking          | `README_Solutions.md`           |
| Services           | Lifecycle: consultation to AMC support           | `readme_services.md`            |
| For Homeowners     | Life-stage and home-type automation benefits     | `readme_for_homeowners.md`      |
| For Professionals  | Partnership flow for designers/architects        | `readme_for_professionals.md`   |
| Projects           | Real installations with gallery and case studies | `readme_projects.md`            |
| Learn              | Blogs, explainers, FAQs                          | `readme_learn.md`               |
| Book a Demo        | Lead capture form for consultations              | `readme_book_a_demo.md`         |
| Contact Us         | All communication options in one page            | `readme_contact_us.md`          |
| Privacy & Terms    | Legal policy and compliance page                 | `readme_privacy_and_terms.md`   |

---

## 🎨 UI Theme Summary

- **Background**: `#002A22`
- **Accent Color**: `#67F1B4`
- **Font**: Inter

- **Buttons**: `#A4F4CB` with hover effect (brightness ↑, scale ↑)
- **Components**: Card overlays, testimonial sliders, highlight sections

### Apache configuration

For pretty URLs to work under XAMPP, edit `C:/xampp/apache/conf/httpd.conf` and ensure the `<Directory "C:/xampp/htdocs">` block contains:

```
AllowOverride All
```

Without this change Apache will ignore the project's `.htaccess` file and requests like `/solutions` will result in 404 responses.

Refer to `README_Theme.md` for full style guide.

---

## 📁 Directory Structure (Suggested)

```
/iSwift-Website
├── index.html
├── about.html
├── solutions/
│   ├── lighting.html
│   ├── curtains.html
│   └── ...
├── services.html
├── homeowners.html
├── professionals.html
├── projects/
│   ├── villa-gurgaon.html
│   └── apartment-noida.html
├── learn/
│   ├── blog.html
│   └── faq.html
├── demo.html
├── contact.html
├── legal/
│   ├── privacy.html
│   └── terms.html
├── assets/
│   ├── css/
│   ├── js/
│   └── images/
└── readme_files/
    └── (All .md docs)
```

---

## 🛠 Developer Workflow

### 1. Clone Repo

```bash
git clone https://github.com/yourusername/iSwift-website.git
cd iSwift-website
```

### 2. Start Coding

Use Live Server or any local server to test HTML and CSS changes.

### 3. Commit & Push

```bash
git add .
git commit -m "Page updates or component changes"
git push origin main
```

### 4. Enable GitHub Pages (optional)

Use main branch root for deployment preview.

---

## 📦 Documentation & ReadMe Files

- Page-specific guidelines and UI prompts are in `/readme_files/`
- Includes all instructions for component styling, SEO, CTA placements, and visuals
