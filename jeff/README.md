# Jeffrey Veen's Blog

A personal blog built with Jekyll, featuring a modern, minimal design with dark mode support.

## Overview

This is a Jekyll-based static site hosted on GitHub Pages. The site features:

- **Modern CSS Grid layout** with responsive design
- **Dark mode** support using `prefers-color-scheme`
- **Custom typography** from Adobe Typekit (Source Sans Pro & Source Serif Pro)
- **Fluid responsive sizing** using CSS `clamp()`
- **Semantic HTML5** with Open Graph and Twitter Card meta tags

## Site Structure

```
jeff/
├── _layouts/          # HTML templates (base.html)
├── _posts/            # Published blog posts
├── _offline-posts/    # Archived posts (not published)
├── _includes/         # Reusable components
├── css/               # Stylesheets
│   └── style.css      # Main stylesheet
├── images/            # Image assets
└── _config.yml        # Jekyll configuration (in root)
```

## Local Development

### Using Apple Container (recommended on macOS)

```bash
container run -p 4000:4000 --name jekyll -v $(pwd):/site bretfisher/jekyll-serve
```

Then visit: http://localhost:4000/jeff

### Using Docker

```bash
docker run --rm --label=jekyll --volume=$(pwd):/srv/jekyll -it -p 127.0.0.1:4000:4000 jekyll/jekyll jekyll serve
```

### VS Code Dev Container

The `.devcontainer/` folder contains a ready-to-run environment (Ruby 3.1 + `github-pages`). Launching the project in VS Code’s Dev Container automatically installs dependencies and starts `jekyll serve` on port 4000.

Logs live in `.devcontainer/jekyll-serve.log` (ignored by git). No need to run bundler manually; just open the repo in the container and start writing.

## Design Tokens

Typography, spacing, and color are now driven entirely by CSS custom properties:

- **Primitives**: `css/primitives.css` defines the neutral OKLCH palette, spacing scale, typography scale, borders, and shadows.
- **Article semantics**: `css/article.css` maps primitives to article-specific tokens (`--article-headline-*`, `--article-blockquote-*`, etc.).
- **Main stylesheet**: `css/style.css` imports both files and applies the tokens to components.

See `_drafts/2025-10-08-typography.markdown` for a comprehensive reference post that exercises every article style (headings, block quotes, lists, code, figures, footnotes).

## Writing Posts

Posts go in `_posts/` with the naming convention: `YYYY-MM-DD-title.md`

Front matter example:
```yaml
---
layout: post
title: "Your Post Title"
abstract: "A brief description for SEO and social sharing"
---
```

### Draft Template

Start new posts from `_drafts/template.markdown`. It includes full front matter and sample content (headings, lists, blockquotes, figure markup, code block) so each post begins with the right structure. Duplicate the file, rename with the target date/title, and replace the placeholder text.

## Configuration

- Site config: `_config.yml` (in repository root)
- Permalink structure: `jeff/archives/:title.html`
- RSS feed: `/rss-source.xml`

## Deployment

The site is automatically deployed to GitHub Pages when changes are pushed to the `main` branch.

## Modernization

See [SPEC.md](SPEC.md) for the ongoing modernization plan and progress.
