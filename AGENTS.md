# AGENTS

## Mission
- Preserve the historic site at the repository root; do not edit anything outside `jeff/` unless explicitly instructed.
- All active development (layouts, CSS, posts, assets) lives inside `jeff/` and relies on the shared `_config.yml`.
- CSS changes must respect the `jeff/css/style.css` design system: no inline styles, only use the existing custom-property tokens or introduce new ones in that file when necessary.

## Key Facts
- Static site built with Jekyll 4.3 (`Gemfile`), with `layouts_dir` pointing to `jeff/_layouts` (`base.html`, `post.html`).
- Global structure and styles originate in `jeff/_layouts/base.html` and `jeff/css/style.css`; home content at `jeff/index.html`, posts under `jeff/_posts/`.
- External sections (`amy`, `archives`, `greg`, etc.) are legacy snapshots—read only for reference.

## Top-Level Tree (development vs. archive)
```
.
├── jeff/                 [ACTIVE DEV AREA]
├── _config.yml           [SHARED CONFIG – READ ONLY]
├── _drafts/              [ARCHIVE]
├── _plugins/             [ARCHIVE]
├── _site/                [BUILD OUTPUT – DO NOT EDIT]
├── 404.html              [ARCHIVE]
├── amy/                  [ARCHIVE]
├── apple-touch-icon.png  [ARCHIVE]
├── archives/             [ARCHIVE]
├── artsci/               [ARCHIVE]
├── CNAME                 [ARCHIVE]
├── favicon.ico           [ARCHIVE]
├── favicon.ico_2002      [ARCHIVE]
├── Gemfile               [REFERENCE]
├── Gemfile.lock          [REFERENCE]
├── greg/                 [ARCHIVE]
├── images/               [ARCHIVE]
├── index.html            [ARCHIVE]
├── metcalfe-generator/   [ARCHIVE]
├── samthedog/            [ARCHIVE]
├── site.webmanifest      [ARCHIVE]
├── smallbatch/           [ARCHIVE]
└── start/                [ARCHIVE]
```

Use the structure above to keep new work constrained to `jeff/` unless the owner directs otherwise.
