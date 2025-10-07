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

## 8. Nice-to-Haves
- CSS animations for page loads
- Better print stylesheet
- RSS icon/link visibility
- Social sharing buttons
- Back-to-top link for long articles
