# AGENTS

## Scope
- Only work inside `/jeff`; every sibling directory is a legacy project that must remain untouched.
- The `/jeff` folder is a self-contained Jekyll site whose public root resolves to `/jeff` on GitHub Pages, so use `{% raw %}{{ '/jeff/css/style.css' | relative_url }}{% endraw %}`-style helpers when linking local assets.

## Architecture & Layouts
- Templates live in `_layouts/`: `base.html` wraps every page with the nav ("Jeff Veen", Blog, About) and the dark-mode toggle, plus the GA4 snippet, Littlefoot footnotes, and Prism styles/scripts; `post.html` extends `base` and appends the Buttondown subscribe form.
- Index (`index.html`) renders a `<section class="post-list">` of featured posts, truncating after ~50 words; other pages such as `about/index.html` are raw HTML inside `<article>` blocks using `layout: base`.
- Styles live in `css/style.css` and are driven by CSS custom properties for spacing, typography, and dark-mode surfaces; respect the token system and semantic variables instead of hard-coded values.

## Content Authoring
- Posts sit in `_posts/` with standard front matter: `layout: post`, `title`, `date`, optional `abstract`, `featured`, `og_image`, etc.; summaries on the home page only include posts with `featured: yes`.
- Write semantic HTML5 (`<article>`, `<section>`, `<figure>`, `<time>`) and rely on existing utility classes like `.post-footer`, `.continue-reading`, `.highlighter-rouge` for consistent typography, footnotes, and Prism code blocks.
- Inline code uses the theme-ready `<code>` styling; for code fences, prefer the standard Jekyll fenced syntax so Rouge/Prism can hook in automatically.

## Local Dev & Deploy
- A ready-to-go VS Code dev container lives in `.devcontainer/`; reopen the repo inside it to get Ruby 3.1, Bundler 2.4.19, and `github-pages` installed automatically (port 4000 is forwarded for `jekyll serve`).
- Serve locally with the container cmd from `README.md`, e.g. `container run ... bretfisher/jekyll-serve`, then visit `http://localhost:4000/jeff`.
- Production deploys automatically through GitHub Pages when `main` updates; keep templates, CSS, and Markdown valid so `jekyll build` stays clean.
