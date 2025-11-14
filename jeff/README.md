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

## Configuration

- Site config: `_config.yml` (in repository root)
- Permalink structure: `jeff/archives/:title.html`
- RSS feed: `/rss-source.xml`

## Deployment

The site is automatically deployed to GitHub Pages when changes are pushed to the `main` branch.

## Modernization

See [SPEC.md](SPEC.md) for the ongoing modernization plan and progress.
