# Modernization Plan for Jeffrey Veen's Blog

## Current State Analysis

**Strengths:**
- Already has CSS Grid layout
- Dark mode support via `prefers-color-scheme`
- CSS custom properties (variables)
- Responsive with `minmax(25px, auto)` grid columns
- Clean, minimal design
- Modern typography from Adobe Typekit

**Areas for Improvement:**

## 1. HTML Modernization
- Replace Google Analytics (UA-129508-1) with GA4 or remove entirely
- ~~Add semantic HTML5 elements (`<header>`, `<footer>`, `<main>`)~~
- ~~Add `<meta>` tags for SEO, social sharing (Open Graph, Twitter Cards)~~
- Add favicon references
- Consider accessibility improvements (ARIA labels, skip links)

## 2. CSS Enhancements
- ~~Remove unused legacy CSS files (960.css, screen.css, reset.css)~~
- ~~Add smooth scrolling behavior~~
- ~~Improve focus states for accessibility~~
- ~~Add CSS transitions for link hovers and color scheme changes~~
- ~~Consider fluid typography using `clamp()`~~
- ~~Better mobile spacing (currently 25px minimum feels tight)~~
- ~~Fix typo in code padding: `padding: 1-px` (line 122)~~

## 3. Typography & Spacing
- ~~Implement more modern scale (maybe 1.2 or 1.25 ratio)~~
- ~~Improve vertical rhythm with consistent spacing variables~~
- ~~Add proper list styling (currently unstyled)~~
- ~~Consider responsive font sizing~~

## 4. Color Scheme
- ~~Expand dark mode colors (currently very minimal)~~
- ~~Add more nuanced grays/color palette~~
- ~~Consider accent color for links instead of just black~~
- ~~Better code block contrast in both modes~~

## 5. Layout Improvements
- ~~More generous max-width for modern screens (740px is narrow)~~
- Better archive page spacing and hierarchy
- Add proper header with possible navigation
- Uncomment/style travelogues section

## 6. Performance
- Consider loading Adobe Typekit asynchronously
- ~~Add `rel="preconnect"` for external resources~~
- Minify CSS in production

## 7. Content Presentation
- ~~Style images (currently no image rules)~~
- ~~Add figure/figcaption styling~~
- Improve blockquote design
- Add proper code block syntax highlighting setup
- Reading progress indicator for long posts?


## Sidebar Plan

**Sidebar Plan**

- **Architecture Overview**
  - `jeff/_layouts/base.html` currently wraps all pages in `<main class="site-main">` with a single column grid defined in `jeff/css/style.css:163-205`. To host a sidebar we’ll introduce a semantic wrapper inside `main` (e.g., `.layout--with-sidebar` containing `<section class="content">` + `<aside class="sidebar">`). This keeps `base` the single source so both `index.html` and `post.html` can opt into the sidebar layout by wrapping their content blocks accordingly.
  - ~~No inline styles: all size/color/typography decisions must use or extend the CSS custom-property tokens in `jeff/css/style.css`. If we need new semantic tokens (e.g., sidebar card background) we add them near the existing `:root` definition.~~

- **Content Mapping**
  - ~~**Bio block**: uses existing avatar (`jeff/images/...`), name, and short blurb with “MORE…” linking to `/jeff/about/`. Social icons already exist in `/jeff/images` (need to confirm; otherwise export assets referenced in Figma). Structure: avatar image, heading, list of external links (`ul` with inline icons + accessible labels), paragraph text.~~
  - ~~**Recent posts list**: pull top three posts (`site.posts` filtered by `featured` or maybe latest) and display title, date, short excerpt. Each item becomes a link wrapping title/excerpt with a meta line for the date.~~
  - ~~**Subscribe module**: repurpose existing Buttondown form from `post.html` but simplified per design (label text referencing RSS, single inline email input + submit button). Use current endpoint to avoid duplication and ensure consistent accessibility.~~

- **CSS / Design System Tasks**
  1. ~~**Layout grid updates**
     - Extend `.site-main` to allow two-column layout when a modifier class (e.g., `.layout--with-sidebar`) is present. Use CSS Grid: main content column sized by `--layout-content-max`; sidebar column fixed width matching Figma (~306px). Ensure responsive breakpoint (~960px?) collapses to single column with sidebar stacking after content.
     - Define spacing tokens for gutters if needed (e.g., `--space-sidebar-gap`).~~
  2. ~~**Sidebar card styling**
     - Introduce `.sidebar` base styles: background `var(--surface-subtle)`, border `var(--border-default)`, radius `var(--radius-md)`, padding tokens. Use internal spacing utilities for sections (`.sidebar__section + .sidebar__section { margin-top: var(--space-stack-lg); }`).
     - Typography: rely on existing font tokens (`--font-family-meta`, etc.) to match Source Sans/Serif usage; add class-specific sizes if new scale needed (e.g., `.sidebar__heading`).
     - Buttons/inputs: align with existing Buttondown form styles (maybe promote to reusable `.form-input`, `.button`). Ensure focus/hover states use token colors.~~
  3. ~~**Responsive considerations**
     - On small screens, allow sidebar to span full width, with sections stacked.
     - Manage overflow for lists; ensure the bio paragraph wraps elegantly using current line-height tokens.~~

- **Template Changes**
  - ~~`jeff/index.html`: wrap current `.post-list` in the main content slot of the sidebar layout, and add `{% include sidebar.html %}` or inline markup referencing the shared sidebar partial.~~
  - ~~`jeff/_layouts/post.html`: same wrapper so individual posts display alongside the sidebar.~~
  - ~~Create `jeff/_includes/sidebar.html` to hold the markup, driven by site data (bio text hardcoded or front matter, social links from config). This keeps duplication minimal and lets future pages opt in via `{% include %}`.~~

- **Data & Accessibility**
  - ~~Social links rendered as `<ul>` with visually hidden text labels; icons use `<svg>` or `<img>` referencing stored assets.~~
  - ~~Recent posts list should use `<ol>` or `<section aria-labelledby>`; include `aria-label="Recent posts"`.~~
  - ~~Subscription form needs `label` tied to input, `aria-describedby` for helper text, and button text “Subscribe”.~~
  - ~~Ensure `aside` gets `aria-label="Site info"` (or similar) for screen readers.~~

- **Rollout Steps**
  1. ~~Implement layout wrapper + include `sidebar.html` in both index and post layouts.~~
  2. ~~Build the sidebar partial with structured sections (Bio, Recent Posts, Subscribe) referencing tokens and reusable data.~~
  3. ~~Extend `jeff/css/style.css` with layout modifiers, sidebar component styles, responsive rules, and (if necessary) new design tokens.~~
  4. Verify pages via `bundle exec jekyll serve` to confirm responsive behavior, dark/light themes, and lint for accessibility (manual inspection).

**Screenshot QA Reminder**
- After implementation, capture the reference sidebar screenshot from Figma and the rendered version from Chrome DevTools, then store both images at the repository root for owner review.
