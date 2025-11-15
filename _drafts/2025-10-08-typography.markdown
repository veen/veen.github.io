---
layout: post
title: "Testing Typography"
date: 2025-10-11
author: Jeffrey Veen
featured: yes
abstract: Dusting this site off after 30 years.
---

Typography has always been the quiet craft that makes every word legible, credible, and humane. A good sentence becomes irresistible when it’s set with patient rhythm, generous margins, and confident contrast. I wanted a single post that exercises every typographic style on this site—because there’s no better way to validate a new token system than to run it through a gauntlet of paragraphs, lists, and code snippets that talk about the very topic they inhabit.

The first lesson is that paragraphs carry the cadence of a voice. When line height breathes and measure stays gentle, the reader feels invited rather than scolded. Even a simple note about letterforms can feel luxurious:

> “Great typography is akin to hospitality,” Beatrice Warde reminded us. “It invites the reader in, lets them sit down, and never makes them search for the salt.”

That’s the bar for the rest of this reference. Let’s walk through the elements I care about most.

## Headings That Set the Pace

Each heading is more than big text—it’s a landmark. H1 keeps a generous margin beneath it so the body copy can gather itself. H2 signals a new argument with upright shoulders, and H3 lets me annotate inside a section without shouting.

### Supporting Rhythm

Headlines need running mates, so bylines provide a subtle whisper of metadata. Here we can celebrate the author, emphasize the date, and still keep the voice calm:

<time class="byline" datetime="2025-10-11">11 October 2025 · Jeff still tinkering with kerning</time>

## Lists That Teach and Delight

Bulleted lists deserve breathing room, otherwise they become a blur. Here’s a short one that captures why I love a well-tuned typescale:

- Shoulder room between items makes scanning effortless.
- Consistent list padding keeps the rag tidy.
- A balanced text color keeps lists from feeling like footnotes.
- Tight letter-spacing is tempting, but open counters are kinder.

Numbered lists should read like instructions, not demands:

1. Start with generous leading so multi-line items don’t collide with their numerals.
2. Keep numerals aligned; a ragged gutter is louder than any bold weight.
3. Close with a sentence that ties the list back into narrative flow.

## Blockquotes That Carry Respect

Sometimes you want to linger on a paragraph (or two) from a hero. The left rule and extra padding in this system keep quotations safe while still allowing them to feel like part of the story.

> We keep talking about font licensing, but the bigger story is presentation. When designers have ethical access to high-quality faces, the reading experience improves by default.
>
> Beautiful typography is the fastest shortcut to empathy: it tells your audience that you cared enough to make their time comfortable.

## Inline Emphasis and Links

Inline code like `var(--article-code-font-family)` should look intentional, not like a temporary highlight. Likewise, links such as [the first manual for the IBM Selectric](https://archive.org/details/ibmselectric1961) deserve to feel integrated with the surrounding prose rather than plastered on top of it.

When we speak through emphasis—_italics for nuance_, **bold for the rare shout**—it’s crucial that the typeface supports those voices without distortion.

## Code Blocks Inspired by the Tokens

To ground all of this theory, here’s a small snippet that mirrors the semantic tokens we just defined. It’s contrived, but it demonstrates how the palette is meant to be consumed.

```css
:root {
  --article-headline-font-family: var(--font-family-heading);
  --article-headline-font-weight: var(--font-weight-regular);
  --article-paragraph-margin-bottom: var(--space-xl);
  --article-blockquote-border-color: var(--color-border-muted);
  --article-code-inline-radius: var(--radius-sm);
}

article code {
  font-family: var(--article-code-font-family);
  padding: var(--article-code-inline-padding);
  border-radius: var(--article-code-inline-radius);
}
```

## Closing Thoughts

All of this may feel obsessive, but typography is the chassis of the entire site. When we get spacings, weights, and voices right in a single article, every new post inherits that confidence. There’s nothing more satisfying than releasing a sentence into the world and knowing the system beneath it is invisible, sturdy, and quietly beautiful.
