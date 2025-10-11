---
layout: post
title: "Testing Typography"
date: 2025-10-11
author: Jeffrey Veen
featured: yes
abstract: Dusting this site off after 30 years.
---
There are lots of reasons to do a startup. Sometimes, there’s an idea you just can’t stop thinking about – a thing you absolutely want to exist in the world. Or sometimes you see a gap in how an industry is evolving, and with a small team of talented people you think you can fill that gap much faster than the big companies can.

Both of these things were true when we started [Typekit](https://blog.typekit.com/2009/05/27/introducing-typekit/) three years ago. Web browsers started implementing `@font-face` and a lot of people started wringing their hands over the issue of intellectual property and typefaces. A debate sprang up: Web designers were embracing new CSS features like never before, but font designers worried that their craft would go the way of Napster and BitTorrent. It was a recipe for disruption and opportunity, and we jumped in.

For us, so much was uncharted. The four of us who founded the company had worked together and built products before, but we’d never been down the venture capital path.

## Some Code to Test

For us, so much was uncharted. The four of us who founded the company had worked together and built products before, but we’d never been down the venture capital path.

```css
/* Layout */

.site {
    display: grid;
    grid-template-columns: var(--space-4) 1fr var(--space-4);
    row-gap: var(--space-stack-lg);
    column-gap: 0;
    padding-block: var(--space-stack-lg);
    padding-inline: var(--space-0);
}

@media (min-width: 768px) {
  .site {
    grid-template-columns: minmax(var(--space-page-inline-lg), 1fr) minmax(auto, var(--layout-content-max)) minmax(var(--space-page-inline-lg), 1fr);
    padding-inline: 0;
  }
}

.site > * {
    grid-column: 2;
    width: 100%;
}

.site-header {
    display: flex;
    justify-content: flex-end;
}
```

And that's what the code will look like.

## Testing how bulletted lists and quotes will look.

There's always a bit of text first. For us, so much was uncharted. The four of us who founded the company had worked together and built products before, but we’d never been down the venture capital path.

- A list of short items fist.
- For us, so much was uncharted.
- And a third.
- And perhaps even a fourth.

There's always a bit of text first. For us, so much was uncharted. The four of us who founded the company had worked together and built products before, but we’d never been down the venture capital path.

- Now, paragraphs as bullets. There's always a bit of text first. For us, so much was uncharted. The four of us who founded the company had worked together and built products before, but we’d never been down the venture capital path.

- There's always a bit of text first. For us, so much was uncharted. The four of us who founded the company had worked together and built products before, but we’d never been down the venture capital path.

- There's always a bit of text first. For us, so much was uncharted. The four of us who founded the company had worked together and built products before, but we’d never been down the venture capital path.

We might have numbered lists? There's always a bit of text first. For us, so much was uncharted. The four of us who founded the company had worked together and built products before, but we’d never been down the venture capital path.

1. Now, paragraphs as numbered lists. There's always a bit of text first. For us, so much was uncharted. The four of us who founded the company had worked together and built products before, but we’d never been down the venture capital path.

2. There's always a bit of text first. For us, so much was uncharted. The four of us who founded the company had worked together and built products before, but we’d never been down the venture capital path.

3. There's always a bit of text first. For us, so much was uncharted. The four of us who founded the company had worked together and built products before, but we’d never been down the venture capital path.

And finally let's quote something briefly. There's always a bit of text first. For us, so much was uncharted. The four of us who founded the company had worked together and built products before, but we’d never been down the venture capital path.

> _"A smart man said a smart thing."_

And them something more substantial. And finally let's quote something briefly. There's always a bit of text first. For us, so much was uncharted. The four of us who founded the company had worked together and built products before, but we’d never been down the venture capital path.

> Both of these things were true when we started Typekit three years ago. Web browsers started implementing @font-face and a lot of people started wringing their hands over the issue of intellectual property and typefaces. A debate sprang up: Web designers were embracing new CSS features like never before, but font designers worried that their craft would go the way of Napster and BitTorrent. It was a recipe for disruption and opportunity, and we jumped in.
>
> That includes a couple paragraphs. Both of these things were true when we started Typekit three years ago. Web browsers started implementing @font-face and a lot of people started wringing their hands over the issue of intellectual property and typefaces. A debate sprang up: Web designers were embracing new CSS features like never before, but font designers worried that their craft would go the way of Napster and BitTorrent. It was a recipe for disruption and opportunity, and we jumped in.

