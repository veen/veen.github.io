# AGENTS

## Role

This is a GitHub Pages deployment repo for [veen.com](https://veen.com). It contains:

- **`/jeff`** — Compiled output from the [jeff-blog](https://github.com/veen/jeff-blog) repo, deployed via `bin/deploy.sh` in that repo. **Do not edit directly** — changes will be overwritten on next deploy.
- **Legacy subdirectories** (`/amy`, `/greg`, `/samthedog`, `/archives`, `/artsci`, `/start`, `/smallbatch`, `/metcalfe-generator`) — Frozen static HTML. Do not modify unless specifically asked.
- **Root files** (`index.html`, `404.html`, `CNAME`, favicons, `site.webmanifest`) — Static files. `CNAME` maps this repo to veen.com; do not modify.

## Key Rules

- No Jekyll config, Gemfile, or build toolchain exists in this repo. GitHub Pages serves it as static files.
- To change jeff blog content, work in the `jeff-blog` repo.
- `/jeff` is the rsync target — the jeff-blog deploy script overwrites it completely with `--delete`.

## Deploys

Pushes to `main` are automatically published by GitHub Pages. The jeff blog deploy workflow is:

1. Build in jeff-blog via Docker
2. `rsync --delete _site/jeff/` into this repo's `/jeff`
3. Commit, push, and purge Cloudflare cache

## Cloudflare

DNS is managed by Cloudflare. Cache purge is handled automatically by `jeff-blog/bin/deploy.sh` using 1Password CLI for the API token.
