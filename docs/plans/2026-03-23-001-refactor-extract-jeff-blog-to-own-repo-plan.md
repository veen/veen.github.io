---
title: "Phase 1: Extract /jeff into standalone Jekyll repo"
type: refactor
status: active
date: 2026-03-23
---

# Phase 1: Extract /jeff Into Standalone Jekyll Repo

## Overview

Extract the `/jeff` subdirectory from `veen.github.io` into its own repository that builds independently with the **same Jekyll version** (3.9.x via `github-pages` gem v228). No SSG change, no deployment change. The new repo is the authoring environment; when you want to publish, copy the built `_site` output into `veen.github.io/jeff/` and push.

Future phases (SSG migration, Cloudflare Workers deployment) are out of scope for this plan.

## Problem Statement / Motivation

1. **Monorepo baggage** — The 623 MB `veen.github.io` repo exists primarily to serve the 15 MB `/jeff` blog. The rest is frozen legacy content.
2. **Tangled config** — `/jeff` depends on the root `_config.yml` for permalinks, `layouts_dir`, sass config, and the drafts collection. The `_plugins/post_permalink.rb` at the root targets `/jeff` posts. This coupling makes it hard to reason about what belongs to the blog vs. the parent site.
3. **Foundation for future work** — A standalone repo is the prerequisite for eventually switching SSGs or changing the deployment pipeline.

## Proposed Solution

Create a new repo (e.g., `jeff-blog`) that:
- Contains all `/jeff` content, layouts, CSS, images, and static pages
- Has its own `_config.yml` and `Gemfile` (same `github-pages` gem v228)
- Builds with `bundle exec jekyll build` and produces output under `_site/jeff/` with identical URLs
- Deploy workflow: build locally (or in CI) → copy `_site/jeff/` into `veen.github.io/jeff/` → commit and push the GitHub Pages repo

## Technical Considerations

### What the root `_config.yml` currently provides to `/jeff`

```yaml
title:        Jeffrey Veen
url:          https://veen.com
feed:         /rss-source.xml
description:  "The personal web site of Jeffrey Veen."
permalink:    jeff/archives/:title.html
layouts_dir:  jeff/_layouts
sass:
    style: compressed
collections:
  drafts:
    output: true
    permalink: /jeff/drafts/:title.html
defaults:
  - scope:
      path: ""
      type: "drafts"
    values:
      layout: "post"
```

The new repo's `_config.yml` must replicate this behavior but adjusted for a standalone structure where the source files live at the repo root (not inside a `jeff/` subdirectory).

### Key config changes for the new repo

| Setting | Current (in monorepo) | New (standalone) |
|---|---|---|
| `permalink` | `jeff/archives/:title.html` | `jeff/archives/:title.html` (same — output path must include `jeff/`) |
| `layouts_dir` | `jeff/_layouts` | `_layouts` (default, since layouts are now at repo root) |
| `source` | repo root (implicit) | repo root |
| `baseurl` | not set | `/jeff` or omit — permalinks already include `jeff/` |
| `sass.style` | `compressed` | `compressed` |

### Permalink preservation

All 70 posts use the global permalink `jeff/archives/:title.html`. The `_plugins/post_permalink.rb` (intended to give 2025+ posts clean `/jeff/:slug/` URLs) **does not run on GitHub Pages** (safe mode). In production, all posts — including 2025+ — serve at `/jeff/archives/:title.html`. The new repo must reproduce this exactly.

The simplest approach: keep `permalink: jeff/archives/:title.html` in the new `_config.yml`. Jekyll will output files to `_site/jeff/archives/:title.html`. When copied into `veen.github.io/jeff/`, the paths align.

**Decision on the plugin**: Either carry `post_permalink.rb` into the new repo (where it *can* run since you control the build) or drop it. If dropped, 2025+ posts continue at `/jeff/archives/:title.html` like production today. Recommend **dropping it** for simplicity — you can reintroduce clean URLs in a future phase.

### Content inventory to migrate

| Source (in `veen.github.io`) | Destination (in new repo) |
|---|---|
| `jeff/_posts/` (70 files) | `_posts/` |
| `jeff/_layouts/` (`base.html`, `post.html`) | `_layouts/` |
| `jeff/_data/design-tokens.tokens.json` | `_data/design-tokens.tokens.json` |
| `jeff/css/` (5 CSS files) | `css/` |
| `jeff/images/` (~80 files) | `images/` |
| `jeff/index.html` | `index.html` |
| `jeff/about/index.html` | `about/index.html` |
| `jeff/rss-source.xml` | `rss-source.xml` |
| `jeff/CR/`, `london/`, `Baja/`, `rides/`, `code/` | `CR/`, `london/`, `Baja/`, `rides/`, `code/` |
| `jeff/google15dd0ec882f201c3.html` | `google15dd0ec882f201c3.html` |
| `jeff/y_key_6fad72cefd1e734c.html` | `y_key_6fad72cefd1e734c.html` |
| `jeff/boyer_jeff.gif` | `boyer_jeff.gif` |
| `jeff/README.md` | `README.md` |
| `jeff/SPEC.md` | `SPEC.md` |
| `jeff/_offline-posts/` (355 archived posts) | `_offline-posts/` |
| `jeff/_import/` | `_import/` (or omit — one-time import tooling) |
| `_drafts/` (at repo root) | `_drafts/` |

### What does NOT migrate

- Root `index.html` (splash page) — stays in `veen.github.io`
- Root `CNAME`, `404.html` — stays
- Legacy dirs: `amy/`, `greg/`, `samthedog/`, `archives/`, `artsci/`, `start/`, `smallbatch/`, `metcalfe-generator/`
- Root favicons and `site.webmanifest` — stays (templates reference these at `/favicon.ico` etc., served by GitHub Pages)
- Root `.devcontainer/` — create a new one for the new repo

### New repo `_config.yml`

```yaml
title:        Jeffrey Veen
url:          https://veen.com
feed:         /rss-source.xml
description:  "The personal web site of Jeffrey Veen."
permalink:    jeff/archives/:title.html
sass:
    style: compressed

collections:
  drafts:
    output: true
    permalink: /jeff/drafts/:title.html

defaults:
  - scope:
      path: ""
      type: "drafts"
    values:
      layout: "post"
```

### New repo `Gemfile`

```ruby
source "https://rubygems.org"
gem "github-pages", "~> 228"
gem "webrick"
```

### Deploy workflow (manual for now)

```bash
# In the new jeff-blog repo:
bundle exec jekyll build

# Copy built output into the GitHub Pages repo:
rsync -av --delete _site/jeff/ ../veen.github.io/jeff/

# In veen.github.io:
cd ../veen.github.io
git add jeff/
git commit -m "Update jeff blog"
git push
```

This can be automated with a script or GitHub Action later, but manual is fine for Phase 1.

### Template adjustments

The layouts reference assets with `relative_url` filter, e.g.:
```liquid
{{ '/jeff/css/style.css' | relative_url }}
```

Since `baseurl` is not set in the current config and the permalink already includes `jeff/`, these should work as-is. Verify after first build.

### Local dev

The devcontainer approach carries over. Create a `.devcontainer/` in the new repo with the same Ruby 3.1 + `github-pages` setup. Alternatively, use the Docker/Colima approach from `AGENTS.md`, pointing the volume mount at the new repo.

Preview URL changes slightly: `http://localhost:4000/jeff/` (same as today since the output path includes `jeff/`).

## Acceptance Criteria

- [ ] New repo builds with `bundle exec jekyll build` — zero errors
- [ ] `_site/jeff/archives/:title.html` exists for all 70 posts
- [ ] `_site/jeff/index.html` renders the featured post list
- [ ] `_site/jeff/about/index.html` renders the about page
- [ ] `_site/jeff/rss-source.xml` is valid Atom XML
- [ ] Static dirs (`CR/`, `london/`, `Baja/`, `rides/`, `code/`) are in `_site/jeff/`
- [ ] `rsync` of `_site/jeff/` into `veen.github.io/jeff/` produces a working site
- [ ] `jekyll serve` preview works at `localhost:4000/jeff/`
- [ ] Dark mode toggle, Littlefoot footnotes, code copy buttons all work
- [ ] No changes to `veen.github.io/Gemfile` or `Gemfile.lock`

## Implementation Steps

1. Create new repo and initialize with `Gemfile` and `_config.yml` (above)
2. Copy all content from `veen.github.io/jeff/` into repo root (see migration table)
3. Copy `_drafts/` from `veen.github.io` root
4. Move `_layouts/` from `jeff/_layouts/` to root `_layouts/` (adjust directory structure)
5. Run `bundle install`
6. Run `bundle exec jekyll build` and fix any errors
7. Verify output URLs match production by diffing file listings
8. Test with `bundle exec jekyll serve` and manually check key pages
9. Do a trial `rsync` into `veen.github.io/jeff/` and verify the site works
10. Set up `.devcontainer/` for local dev (copy and adapt from original)

## Dependencies & Risks

**Dependencies:**
- Ruby environment compatible with `github-pages` gem v228 (Ruby 3.1 via devcontainer, or Docker)
- The original `veen.github.io` repo remains the deployment vehicle — no changes to its GitHub Pages config

**Risks:**
- **Config mismatch** (medium impact, medium probability) — The standalone `_config.yml` may behave slightly differently than the monorepo config. Mitigate by building both and diffing the `_site/jeff/` output.
- **Asset path breakage** (medium impact, low probability) — Templates use `relative_url` and absolute paths to `/favicon.ico`, `/images/favicons/`. Since the GitHub Pages repo continues to serve root-level assets, these should still work. Verify after first deploy.
- **Stale output in GitHub Pages repo** — If you forget to rebuild and copy, the blog goes stale. Acceptable for Phase 1; automate in a future phase.

## Future Phases (out of scope)

- **Phase 2**: Replace Jekyll with a modern SSG (Eleventy recommended — see SSG comparison in git history of this plan)
- **Phase 3**: Deploy via Cloudflare Workers Static Assets instead of copying into the GitHub Pages repo
- **Phase 4**: Clean up `veen.github.io` — remove `/jeff` source files, simplify `_config.yml`
