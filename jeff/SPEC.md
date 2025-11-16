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

## Design Tokens JSON Specification (css-refactor)

### Scope
- Produce a single design token document that mirrors the CSS design system by using the W3C Community Group draft spec (see `documentation-design-tokens.xml`). Validators/transformers are explicitly out of scope; the only artifact is a JSON file the site can consume later.
- File path: `jeff/_data/design-tokens.tokens.json`. The `.tokens.json` suffix keeps the file self-describing and aligned with the spec’s preferred extensions.

### Step-by-step plan
1. **Create the token file skeleton**
   1.1 Ensure `jeff/_data/` exists; create the file if missing.  
   1.2 Add a root JSON object containing:
   - `$description`: `"Design tokens for jeff/ css-refactor."`
   - Optional `$extensions` block (empty object for now, reserved for future metadata).
   - A top-level `foundation`, `themes`, and `components` group—each is a JSON object without `$value`, consistent with the spec’s definition of groups.
   1.3 Run `jq . jeff/_data/design-tokens.tokens.json` (or equivalent) after edits to guarantee the file stays valid JSON.

2. **Populate `foundation` tokens (raw values copied from `jeff/css/primitives.css`)**
   - **2.1 Colors (`foundation.color`)**
     - Create subgroups `neutral`, `link`, and `shadow`.  
     - Each color token MUST follow `$type: "color"` and `$value` with `{ "colorSpace": "oklch", "components": [L, C, H] }`.  
     - Include every `--color-neutral-*` and link color declared in `primitives.css:4-23`.  
     - Add optional `hex` where one already exists (otherwise omit).  
     - Verification: confirm every token name avoids `$`, `{`, `}`, `.`, and that each `$value.components` array length matches the listed `colorSpace`.
   - **2.2 Typography (`foundation.typography`)**
     - `family` subgroup: convert `--font-family-sans|serif|mono` into `$type: "fontFamily"` tokens (strings or arrays following the spec).  
     - `weight` subgroup: convert `--font-weight-*` vars into `$type: "fontWeight"` tokens using their numeric values.  
     - `lineHeight` subgroup: represent each `--line-height-*` constant as `$type: "number"`.  
     - `letterSpacing` subgroup: since the spec lacks `em` units for dimensions, store values as `$type: "number"` tokens expressed in `em`. Note in `$description` that CSS will multiply by `1em`.  
     - `scale` subgroup: break each `clamp()` value into three tokens per size:
       - `.min`: `$type: "dimension"` storing the first argument (in `rem`).  
       - `.preferred`: `$type: "number"` storing the viewport multiplier (strip the `vw` suffix).  
       - `.max`: `$type: "dimension"` storing the third argument (in `rem`).  
       - Record a `$description` explaining how to reconstruct the clamp in CSS (e.g., `clamp({min}, {preferred}vw, {max})`).  
     - Verification: confirm all typography tokens reference acceptable types (`fontFamily`, `fontWeight`, `number`, `dimension` with unit `"rem"`).
   - **2.3 Space, radii, borders, layout (`foundation.dimension`)**
     - Create subgroups `space`, `radius`, `borderWidth`, `layout`.  
     - Convert every `--space-*`, `--radius-*`, `--border-width-*`, and `--layout-content-max` into `$type: "dimension"` tokens. Use `unit: "rem"` for the rem-based values. For `--layout-content-max` (`60ch`), store as `$type: "number"` named `layout.contentMax.ch` (value `60`) and document in `$description` that CSS should append `ch`.  
     - Verification: ensure zero values still include `unit`, per spec guidance.
   - **2.4 Motion & shadows (`foundation.motion`)**
     - `duration` subgroup: convert `--duration-short|medium` into `$type: "duration"` tokens; express `.2s` as `{ "value": 0.2, "unit": "s" }`.  
     - `easing` subgroup: add `$type: "cubicBezier"` token for `--easing-standard` using the `ease` coordinates `[0.25, 0.1, 0.25, 1]`.  
     - `shadow` subgroup: convert `--shadow-sm|md|lg` into `$type: "shadow"` tokens. Parse `rgba()` into srgb color components + alpha, and set each dimension value using px units (per `primitives.css:83-86`).  
     - Verification: ensure each shadow object includes `color`, `offsetX`, `offsetY`, `blur`, `spread`, and optional `inset: false`.

3. **Build `themes` alias tokens (semantic/color system in `jeff/css/style.css`)**
   - Create `themes.light` and `themes.dark` groups, each with `$description` referencing the `data-theme` target.  
   - For every semantic variable (e.g., `--surface-body`, `--text-primary`, `--link-primary`, `--border-default`, focus/quote/separator tokens), create tokens under `themes.{mode}` that alias the corresponding foundation value using curly brace syntax. Example: `"surface": { "body": { "$type": "color", "$value": "{foundation.color.neutral.050}" } }`.  
   - Record any semantic tokens that differ between light/dark (links, borders, focus) as separate tokens referencing the correct foundation color.  
   - Verification: confirm no semantic token points directly to literal values; all should be `{foundation...}` aliases so themes can adjust by swapping the reference.

4. **Define `components` tokens (values in `page.css`, `nav.css`, `article.css`, and semantic parts of `style.css`)**
   - Structure groups as `components.page`, `components.nav`, `components.article`, and `components.base` (for shared utilities like sr-only, focus styles).  
   - **Typography composites:** create `typography` tokens for article headline/body/byline/list/footnote as defined in `article.css`. Each `$value` object should pull `fontFamily`, `fontSize`, `fontWeight`, `letterSpacing`, and `lineHeight` via references to `foundation.typography`. For font sizes that rely on `font-scale`, use the `.min/.preferred/.max` tokens and describe in `$description` how the CSS `clamp()` is assembled.  
   - **Dimensions:** encode spacing tokens such as `--article-paragraph-margin-bottom`, `--nav-header-margin-bottom`, `--nav-gap`, `--page-padding-block`, etc., as `$type: "dimension"` tokens referencing `foundation.dimension.space.*` where possible. If a value isn’t present in `foundation`, create a new `foundation.dimension` token first so `components` only references existing values.  
   - **Border & focus styles:** convert blockquote border, HR width/color, and focus-ring specs into `border` or `strokeStyle` composite tokens referencing foundation colors/dimensions.  
   - **Motion/focus aliasing:** add tokens for link hover/focus interactions referencing `foundation.motion`.  
   - Verification: for each CSS custom property consumed by components, confirm there is either (a) a foundation token with the literal value or (b) a component token that aliases an existing foundation/theme token. Log unsupported constructs (e.g., `grid-template-columns` strings) in a TODO list within `$description` so future work can add new types or extensions.

5. **Cross-check + document**
   - Provide a short `$description` string on each group explaining its purpose, enabling quick validation against the spec’s requirement that descriptions are optional plain strings.  
   - Ensure no group object mistakenly includes both child tokens and `$value`.  
   - Validate references via manual inspection: search for `{` to confirm every alias uses an existing path, and ensure there are no `$value` objects missing `$type`.  
   - Record any unsupported CSS constructs (vw-based clamps, grid templates, custom strings) in an `issues` array at the root `$extensions.jeff.docs` so we can revisit once the spec adds the necessary types.
