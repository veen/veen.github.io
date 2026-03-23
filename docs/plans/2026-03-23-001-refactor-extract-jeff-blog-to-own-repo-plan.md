---
title: "Phase 1: Extract /jeff into standalone Jekyll repo"
type: refactor
status: completed
date: 2026-03-23
---

# Phase 1: Extract /jeff Into Standalone Jekyll Repo

## Overview

Extract the `/jeff` subdirectory from `veen.github.io` into its own repository that builds independently with the **same Jekyll version** (3.9.x via `github-pages` gem v228). No SSG change, no deployment change. The new repo is the authoring environment; when you want to publish, copy the built `_site` output into `veen.github.io/jeff/` and push.

Future phases (SSG migration, Cloudflare Workers deployment) are out of scope for this plan.

## Problem Statement / Motivation

1. **Monorepo baggage** — The 623 MB `veen.github.io` repo exists primarily to serve the 15 MB `/jeff` blog. The rest is frozen legacy content (`amy/`, `greg/`, `samthedog/`, `archives/`, `artsci/`, `start/`, `smallbatch/`, `metcalfe-generator/`).
2. **Tangled config** — `/jeff` depends on the root `_config.yml` for permalinks, `layouts_dir`, sass config, and the drafts collection. The `_plugins/post_permalink.rb` at the root targets `/jeff` posts. This coupling makes it hard to reason about what belongs to the blog vs. the parent site.
3. **Foundation for future work** — A standalone repo is the prerequisite for eventually switching SSGs or changing the deployment pipeline.

## Proposed Solution

Create a new repo (e.g., `jeff-blog`) that:
- Contains all `/jeff` content, layouts, CSS, images, and static pages
- Has its own `_config.yml` and `Gemfile` (same `github-pages` gem v228)
- Builds via Colima + `bretfisher/jekyll-serve` container and produces output under `_site/jeff/` with identical URLs
- Deploy workflow: build locally (or in CI) → copy `_site/jeff/` into `veen.github.io/jeff/` → commit and push the GitHub Pages repo

## Key Decisions

| Decision | Choice | Rationale |
|---|---|---|
| Drop `post_permalink.rb`? | **Yes — drop it** | Never ran on GitHub Pages (safe mode). All 2025+ posts serve at `/jeff/archives/:title.html` in production. Carrying it would cause divergence between local builds and production. Reintroduce clean URLs in a future phase. |
| Set `baseurl`? | **No — omit it** | Permalink pattern already embeds `jeff/` in the path. Templates hardcode `jeff/` in paths like `{{ '/jeff/css/style.css' \| relative_url }}`. Setting `baseurl: /jeff` would double-prefix to `/jeff/jeff/css/style.css`. |
| Use `rsync --delete`? | **Yes** | The new repo is the single source of truth for `jeff/` content. Stale files (renamed posts, removed images) must not persist on the live site. Direct edits to `veen.github.io/jeff/` will be overwritten. |
| Carry `_import/`? | **No — omit** | One-time CSV import tooling (`csv.rb` + `_posts.zip`). No value in the new repo. If needed later, it is in the monorepo git history. |
| Carry `_offline-posts/`? | **Yes** | 355 archived posts. The `_` prefix means Jekyll ignores them during build, so they add no site output. Useful to keep as an archive alongside active posts. |
| Clean up monorepo after migration? | **Deferred to Phase 4** | Remove jeff-specific config and source files from `veen.github.io` after the new workflow is proven stable. |

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

| Setting | Current (in monorepo) | New (standalone) | Why |
|---|---|---|---|
| `permalink` | `jeff/archives/:title.html` | `jeff/archives/:title.html` (same) | Output path must include `jeff/` to match production URLs |
| `layouts_dir` | `jeff/_layouts` | *(removed — default `_layouts`)* | Layouts move from `jeff/_layouts/` to `_layouts/` at repo root |
| `baseurl` | *(not set)* | *(not set)* | Setting it would double-prefix template paths that already embed `jeff/` |
| `sass.style` | `compressed` | `compressed` | Preserve even though no `.scss` files exist — avoids behavioral difference with the `github-pages` gem's built-in Sass converter |
| `url` | `https://veen.com` | `https://veen.com` | Required for `absolute_url` filter and OG meta tags |

### Permalink preservation

All 70 posts use the global permalink `jeff/archives/:title.html`. The `_plugins/post_permalink.rb` (intended to give 2025+ posts clean `/jeff/:slug/` URLs) **does not run on GitHub Pages** (safe mode). In production, all posts — including 2025+ — serve at `/jeff/archives/:title.html`. The new repo must reproduce this exactly.

The simplest approach: keep `permalink: jeff/archives/:title.html` in the new `_config.yml`. Jekyll will output files to `_site/jeff/archives/:title.html`. When rsynced into `veen.github.io/jeff/`, the paths align.

### URL filter behavior

Templates use two Liquid filters that depend on `site.url` and `site.baseurl`:

| Filter | Behavior with current config | Example output |
|---|---|---|
| `relative_url` | Prepends `site.baseurl` (empty) | `{{ '/jeff/css/style.css' \| relative_url }}` → `/jeff/css/style.css` |
| `absolute_url` | Prepends `site.url` + `site.baseurl` | `{{ post.url \| absolute_url }}` → `https://veen.com/jeff/archives/title.html` |

Both work correctly without `baseurl` because `jeff/` is baked into the permalink and all template paths. The `og:image` meta tag in `base.html` uses direct concatenation (`{{ site.url }}{{ page.og_image }}`), which is also correct.

### Content inventory to migrate

**Important:** Static pages and assets (CSS, images, HTML pages, static dirs) must live inside a `jeff/` subdirectory in the new repo so that Jekyll outputs them to `_site/jeff/`. Only `_posts`, `_layouts`, `_data`, `_drafts`, and `_offline-posts` go at the repo root (Jekyll routes posts via the permalink pattern, and underscored dirs are special).

| Source (in `veen.github.io`) | Destination (in new repo) | Notes |
|---|---|---|
| `jeff/_posts/` (70 files) | `_posts/` | Permalink pattern routes output to `_site/jeff/archives/` |
| `jeff/_layouts/` (`base.html`, `post.html`) | `_layouts/` | Must happen atomically with `layouts_dir` config change |
| `jeff/_data/design-tokens.tokens.json` | `_data/design-tokens.tokens.json` | Jekyll parses to `site.data['design-tokens.tokens']` — harmless, used by SPEC only |
| `jeff/css/` (5 CSS files) | `jeff/css/` | Must be inside `jeff/` so output goes to `_site/jeff/css/` |
| `jeff/images/` (~66 files) | `jeff/images/` | Must be inside `jeff/` so output goes to `_site/jeff/images/` |
| `jeff/index.html` | `jeff/index.html` | Must be inside `jeff/` so output goes to `_site/jeff/index.html` |
| `jeff/about/index.html` | `jeff/about/index.html` | Must be inside `jeff/` so output goes to `_site/jeff/about/` |
| `jeff/rss-source.xml` | `jeff/rss-source.xml` | Must be inside `jeff/` so output goes to `_site/jeff/rss-source.xml` |
| `jeff/CR/`, `london/`, `Baja/`, `rides/`, `code/` | `jeff/CR/`, `jeff/london/`, `jeff/Baja/`, `jeff/rides/`, `jeff/code/` | Static travelogue pages — inside `jeff/` |
| `jeff/google15dd0ec882f201c3.html` | `jeff/google15dd0ec882f201c3.html` | Google Search Console verification — inside `jeff/` |
| `jeff/y_key_6fad72cefd1e734c.html` | `jeff/y_key_6fad72cefd1e734c.html` | Yahoo verification — inside `jeff/` |
| `jeff/boyer_jeff.gif` | `jeff/boyer_jeff.gif` | Inside `jeff/` |
| `jeff/README.md` | `README.md` | Repo root (not served) |
| `jeff/SPEC.md` | `SPEC.md` | Repo root (not served) |
| `jeff/_offline-posts/` (355 archived posts) | `_offline-posts/` | Not built by Jekyll (`_` prefix, no collection config) |
| `_drafts/` (**at repo root, not inside jeff/**) | `_drafts/` | Easy to miss — lives outside `/jeff` subtree |

### What does NOT migrate

- Root `index.html` (splash page) — stays in `veen.github.io`
- Root `CNAME`, `404.html` — stays
- Legacy dirs: `amy/`, `greg/`, `samthedog/`, `archives/`, `artsci/`, `start/`, `smallbatch/`, `metcalfe-generator/`
- Root favicons (`/favicon.ico`, `/images/favicons/*`, `/apple-touch-icon.png`) and `site.webmanifest` — stays (templates reference these at root-absolute paths, served by GitHub Pages)
- Root `.devcontainer/` — create a new one for the new repo
- `_plugins/post_permalink.rb` — dropped (see Key Decisions)
- `jeff/_import/` — omitted (one-time import tooling)
- `.listing` files in `Baja/` and `CR/` — FTP artifacts, exclude from migration

### External dependencies in templates

These CDN references in `base.html` carry over unchanged:

| Resource | URL | Purpose |
|---|---|---|
| Adobe Typekit | `https://use.typekit.net/hke3ona.css` | Source Sans 3, Source Serif 4, Source Code Pro |
| Google Analytics 4 | `https://www.googletagmanager.com/gtag/js?id=G-XQERBRFEC9` | Analytics |
| Littlefoot CSS | `https://unpkg.com/littlefoot/dist/littlefoot.css` | Footnote popovers |
| Littlefoot JS | `https://unpkg.com/littlefoot/dist/littlefoot.js` | Footnote popovers |

### CSS architecture

The CSS is fully self-contained within `css/` — no Sass preprocessing, no build step. `style.css` loads four token layers via browser-time `@import url()`:

```
style.css → primitives.css (raw tokens: OKLCH colors, typography, spacing, motion)
          → page.css       (page grid tokens)
          → nav.css        (navigation tokens)
          → article.css    (article typography and spacing tokens)
```

This means 5 HTTP requests for CSS per page load. All files must be present in `css/`. Performance optimization (bundling) is a future concern.

### Post image path patterns

Posts use three different patterns for images:

| Pattern | Example | Works after migration? |
|---|---|---|
| Root-relative | `![alt](/jeff/images/terminal_window.png)` | Yes — output path preserved |
| Absolute HTTPS | `<img src="https://veen.com/jeff/images/...">` | Yes — resolves to live site |
| Absolute HTTP (legacy) | `<img src="http://veen.com/jeff/images/...">` | Yes — redirects to HTTPS |

The absolute URLs are fragile (bypass the build, break in local dev) but not worth normalizing in Phase 1. Track as a follow-up cleanup.

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

### New repo `.gitignore`

```
_site/
.jekyll-cache/
.jekyll-metadata
.bundle/
vendor/
```

### Deploy workflow

```bash
#!/usr/bin/env bash
set -euo pipefail

BLOG_REPO="$(pwd)"
PAGES_REPO="../veen.github.io"

# 1. Build via Colima + bretfisher/jekyll-serve
echo "Building..."
colima nerdctl -- run --rm \
  -v "$BLOG_REPO":/site \
  docker.io/bretfisher/jekyll-serve \
  bundle exec jekyll build

# 2. Dry-run rsync to preview changes
echo "Dry-run rsync:"
rsync -avn --delete _site/jeff/ "$PAGES_REPO/jeff/"
echo ""
read -p "Proceed with deploy? (y/N) " confirm
[[ "$confirm" =~ ^[Yy]$ ]] || exit 0

# 3. Rsync for real
rsync -av --delete _site/jeff/ "$PAGES_REPO/jeff/"

# 4. Review diff before committing
cd "$PAGES_REPO"
echo ""
echo "Changes to commit:"
git diff --stat jeff/
echo ""
read -p "Commit and push? (y/N) " confirm
[[ "$confirm" =~ ^[Yy]$ ]] || exit 0

# 5. Commit and push
git add jeff/
git commit -m "Update jeff blog"
git push

# 6. Purge Cloudflare cache
echo "Purging Cloudflare cache..."
CF_PAGES_TOKEN=$(op read --account devonia.1password.com "op://Private/Cloudflare Pages token/credential") && \
curl -s -X POST 'https://api.cloudflare.com/client/v4/zones/8e3ac6ae34d17537a266361e9401a995/purge_cache' \
  -H "Authorization: Bearer ${CF_PAGES_TOKEN}" \
  -H 'Content-Type: application/json' \
  --data '{"purge_everything":true}' && echo " done." || echo " WARNING: cache purge failed — cache will expire on its own."

cd "$BLOG_REPO"
```

This can be automated with a GitHub Action later, but the manual script with confirmation prompts is safer for Phase 1.

### Local dev

All build and serve commands use **Colima + nerdctl** with the `bretfisher/jekyll-serve` image. No local Ruby installation is needed — the container includes Ruby, Bundler, and the `github-pages` gem. The image mounts the repo root as `/site` and handles `bundle install` automatically on first run.

**Start the preview server:**
```bash
colima nerdctl -- rm -f jekyll >/dev/null 2>&1 || true
colima nerdctl -- run -d --name jekyll -p 4000:4000 \
  -v "$(pwd)":/site \
  docker.io/bretfisher/jekyll-serve
```

Then visit: `http://localhost:4000/jeff/`

**Watch logs:**
```bash
colima nerdctl -- logs -f jekyll
```

**Build once (no server):**
```bash
colima nerdctl -- run --rm \
  -v "$(pwd)":/site \
  docker.io/bretfisher/jekyll-serve \
  bundle exec jekyll build
```

**Stop preview:**
```bash
colima nerdctl -- rm -f jekyll
```

**Local dev notes:**
- Preview URL: `http://localhost:4000/jeff/` — `localhost:4000/` returns a 404, this is expected since the output path includes `jeff/`
- Favicons and `site.webmanifest` will show as broken in local dev (they live in the monorepo at root level). This is cosmetic only — they work in production.
- Absolute-URL images in older posts (`https://veen.com/jeff/images/...`) will load from the live site during local dev, not from the local build.
- The `bretfisher/jekyll-serve` image auto-runs `bundle install` on startup — no manual dependency installation needed

## Acceptance Criteria

### Build

- [ ] New repo builds via Colima (`colima nerdctl -- run --rm -v "$(pwd)":/site docker.io/bretfisher/jekyll-serve bundle exec jekyll build`) — zero errors, zero warnings
- [ ] `_site/jeff/archives/` contains an HTML file for each of the 70 posts
- [ ] `_site/jeff/index.html` renders the featured post list
- [ ] `_site/jeff/about/index.html` renders the about page
- [ ] `_site/jeff/rss-source.xml` is valid Atom XML with correct `<id>` and `<link>` URLs
- [ ] Static dirs (`CR/`, `london/`, `Baja/`, `rides/`, `code/`) are in `_site/jeff/`
- [ ] Search engine verification files are in `_site/jeff/`
- [ ] `_offline-posts/` content does NOT appear in `_site/` output

### Output parity

- [ ] File listing of `_site/jeff/` matches monorepo's `_site/jeff/` output (diff the sorted `find` output)
- [ ] RSS `<id>` tags are byte-identical to monorepo output (prevents feed reader duplicates)
- [ ] `og:image` meta tags produce correct `https://veen.com/jeff/images/...` URLs

### Deploy

- [ ] `rsync --delete` of `_site/jeff/` into `veen.github.io/jeff/` produces a working site
- [ ] No changes to `veen.github.io/Gemfile`, `Gemfile.lock`, `_config.yml`, or `CNAME`
- [ ] Cloudflare cache purge completes (or fails gracefully with a warning)

### Local dev

- [ ] Colima preview server works at `localhost:4000/jeff/`
- [ ] Dark mode toggle, Littlefoot footnotes, code copy buttons all work

## Implementation Steps

### Step 1: Create the new repo

1. Create `jeff-blog` directory (sibling to `veen.github.io`)
2. `git init`
3. Write `_config.yml` (see above — write fresh, do not copy-edit the monorepo's)
4. Write `Gemfile` (see above)
5. Write `.gitignore` (see above)

### Step 2: Copy content

**From inside `veen.github.io` into `jeff-blog/`:**

Static pages and assets must go into a `jeff/` subdirectory in the new repo so Jekyll outputs them to `_site/jeff/`. Only Jekyll-special directories (`_posts`, `_layouts`, `_data`, `_drafts`, `_offline-posts`) go at repo root.

```bash
# Jekyll-special dirs → repo root
cp -R jeff/_posts/ ../jeff-blog/_posts/
cp -R jeff/_layouts/ ../jeff-blog/_layouts/
cp -R jeff/_data/ ../jeff-blog/_data/
cp -R jeff/_offline-posts/ ../jeff-blog/_offline-posts/

# CRITICAL: Drafts live at monorepo root, not inside jeff/
cp -R _drafts/ ../jeff-blog/_drafts/

# Static pages and assets → jeff/ subdirectory (preserves output paths)
mkdir -p ../jeff-blog/jeff
cp -R jeff/css/ ../jeff-blog/jeff/css/
cp -R jeff/images/ ../jeff-blog/jeff/images/
cp jeff/index.html ../jeff-blog/jeff/
cp -R jeff/about/ ../jeff-blog/jeff/about/
cp jeff/rss-source.xml ../jeff-blog/jeff/
cp -R jeff/CR/ ../jeff-blog/jeff/CR/
cp -R jeff/london/ ../jeff-blog/jeff/london/
cp -R jeff/Baja/ ../jeff-blog/jeff/Baja/
cp -R jeff/rides/ ../jeff-blog/jeff/rides/
cp -R jeff/code/ ../jeff-blog/jeff/code/
cp jeff/google15dd0ec882f201c3.html ../jeff-blog/jeff/
cp jeff/y_key_6fad72cefd1e734c.html ../jeff-blog/jeff/
cp jeff/boyer_jeff.gif ../jeff-blog/jeff/

# Non-served files → repo root
cp jeff/README.md ../jeff-blog/
cp jeff/SPEC.md ../jeff-blog/
```

**Exclude from copy:**
- `jeff/_import/` (one-time import tooling)
- `.listing` files in `Baja/` and `CR/` (FTP artifacts)

### Step 3: Remove .listing files

```bash
find ../jeff-blog -name ".listing" -delete
```

### Step 4: Build with Colima

```bash
cd ../jeff-blog
colima nerdctl -- run --rm \
  -v "$(pwd)":/site \
  docker.io/bretfisher/jekyll-serve \
  bundle exec jekyll build
```

The container handles `bundle install` automatically. Fix any build errors. Common issues:
- Missing layout → verify `_layouts/base.html` and `_layouts/post.html` exist
- Missing collection → verify `_drafts/` directory and `collections.drafts` in `_config.yml`

### Step 5: Verify output parity

**Generate file listings from both builds:**
```bash
# In veen.github.io (monorepo) — build via Colima:
cd ../veen.github.io
colima nerdctl -- run --rm \
  -v "$(pwd)":/site \
  docker.io/bretfisher/jekyll-serve \
  bundle exec jekyll build
find _site/jeff -type f | sort > /tmp/monorepo-files.txt

# In jeff-blog (standalone):
cd ../jeff-blog
find _site/jeff -type f | sort > /tmp/standalone-files.txt

# Diff:
diff /tmp/monorepo-files.txt /tmp/standalone-files.txt
```

**Expected differences:**
- Monorepo may include `_site/jeff/drafts/` if built with `--drafts` flag
- Monorepo's 2025+ posts will be at `/jeff/archives/:title.html` (plugin doesn't run in safe mode); standalone posts will also be at `/jeff/archives/:title.html` (no plugin). These should match.

**Verify RSS feed stability:**
```bash
diff <(grep '<id>' ../veen.github.io/_site/jeff/rss-source.xml) \
     <(grep '<id>' _site/jeff/rss-source.xml)
```

Any difference in `<id>` tags means feed readers will show duplicate entries for every post.

### Step 6: Test local preview

```bash
colima nerdctl -- rm -f jekyll >/dev/null 2>&1 || true
colima nerdctl -- run -d --name jekyll -p 4000:4000 \
  -v "$(pwd)":/site \
  docker.io/bretfisher/jekyll-serve
# Open http://localhost:4000/jeff/
# Watch logs: colima nerdctl -- logs -f jekyll
```

Manually verify:
- [ ] Homepage shows featured posts with correct links
- [ ] Click through to a post — layout, typography, images render correctly
- [ ] About page renders
- [ ] Dark mode toggle works (persists across page loads)
- [ ] Footnotes expand via Littlefoot
- [ ] Code blocks have copy-to-clipboard button
- [ ] RSS feed link in `<head>` resolves

### Step 7: Trial deploy

```bash
# Dry-run first:
rsync -avn --delete _site/jeff/ ../veen.github.io/jeff/

# Review the file list — anything unexpected?

# Real rsync:
rsync -av --delete _site/jeff/ ../veen.github.io/jeff/

# In veen.github.io, verify:
cd ../veen.github.io
git diff --stat jeff/
# Should show changes only in jeff/ — nothing outside it
```

Do NOT push yet. Browse the local monorepo build to verify the rsynced content works within the full site context.

### Step 8: Verify Colima serve works end-to-end

Start the preview server and do a full walkthrough:
```bash
colima nerdctl -- rm -f jekyll >/dev/null 2>&1 || true
colima nerdctl -- run -d --name jekyll -p 4000:4000 \
  -v "$(pwd)":/site \
  docker.io/bretfisher/jekyll-serve
colima nerdctl -- logs -f jekyll
# Wait for "Server running..." then open http://localhost:4000/jeff/
```

After verifying, stop the container:
```bash
colima nerdctl -- rm -f jekyll
```

### Step 9: Create AGENTS.md

Adapt `AGENTS.md` for the standalone repo context:
- Remove the "only work inside `/jeff`" scoping rule (irrelevant in standalone repo)
- Update paths (e.g., `_layouts/` instead of `jeff/_layouts/`)
- Keep the GitHub Pages compatibility warning (never modify `Gemfile` unless compatible with `github-pages` v228)
- Update the Colima/nerdctl commands to use the new repo path (`-v /Users/jeff/projects/jeff-blog:/site`)
- Document preview server, build, logs, and stop commands (see Local Dev section)
- Keep the Cloudflare cache purge instructions

### Step 10: Write deploy script

Save the deploy script (see Deploy Workflow section) as `bin/deploy.sh` and make it executable. Test end-to-end but do NOT push to GitHub Pages until all acceptance criteria pass.

### Step 11: Initial commit and push

```bash
git add -A
git commit -m "Extract jeff blog from veen.github.io monorepo"
```

Push to a new GitHub repo (e.g., `jeff-blog`). Optionally add a GitHub Actions workflow to run `bundle exec jekyll build` on every push as a CI check.

## Dependencies & Risks

**Dependencies:**
- Colima running with nerdctl (used for all build/serve commands via `docker.io/bretfisher/jekyll-serve` image — no local Ruby needed)
- The original `veen.github.io` repo remains the deployment vehicle — no changes to its GitHub Pages config
- 1Password CLI (`op`) authenticated to `devonia.1password.com` for Cloudflare cache purge

**Risks:**

| Risk | Impact | Probability | Mitigation |
|---|---|---|---|
| Config mismatch — standalone `_config.yml` behaves differently | Medium | Medium | Build both repos and diff `_site/jeff/` output file-by-file (Step 5) |
| RSS feed `<id>` changes — duplicate entries in feed readers | High | Low | Diff `<id>` tags specifically before first deploy (Step 5) |
| Asset path breakage in templates | Medium | Low | Templates use `relative_url` and `absolute_url` filters — both work without `baseurl` since `jeff/` is in the permalink. Verify after first build. |
| Favicon 404s in local dev | Low | High | Expected — favicons live in the monorepo. Cosmetic only. Document in README. |
| Stale output in GitHub Pages repo | Low | Medium | Deploy script has confirmation prompts. Automate in a future phase. |
| Direct edits to `veen.github.io/jeff/` get overwritten | Medium | Low | `rsync --delete` is authoritative. Document that the new repo is the single source of truth. |
| `_offline-posts/` accidentally added as a collection | High | Low | Do NOT add `_offline-posts` as a collection in `_config.yml`. The `_` prefix keeps them excluded. Verify 355 files do not appear in `_site/`. |
| Cloudflare cache purge fails | Low | Low | Deploy script warns but does not roll back — cache expires naturally via TTL. |

## Future Phases (out of scope)

- **Phase 2**: Replace Jekyll with a modern SSG (Eleventy recommended — see SSG comparison in git history of this plan)
- **Phase 3**: Deploy via Cloudflare Workers Static Assets instead of copying into the GitHub Pages repo
- **Phase 4**: Clean up `veen.github.io` — remove `/jeff` source files, simplify `_config.yml`, remove `_plugins/post_permalink.rb`

### Follow-up tasks (not blocking Phase 1)

- Normalize hardcoded absolute image URLs in older posts to root-relative paths
- Add GitHub Actions CI to `jeff-blog` for build verification on push
- Consider bundling the 5 CSS files into one to reduce HTTP requests
- Update the monorepo's `AGENTS.md` to note that `/jeff` content is now authored in `jeff-blog`
