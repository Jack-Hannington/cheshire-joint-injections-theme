# Cheshire Joint Injections — theme

Classic WordPress theme (Bootstrap 5 grid kept for the PHP templates) with a token-driven
design system in `style.css` built from the Figma "Design System / Sampler Board":
white / warm-neutral canvas, olive accents, Manrope headings, Inter body.

## Files

| File | Purpose |
| --- | --- |
| `style.css` | The whole design system. Tokens in `:root` at the top — change colours, type or spacing there. Sections are numbered; see the contents block at the top. |
| `theme.json` | Editor palette, gradients, fonts (self-hosted Manrope + Inter), font-size and spacing presets, layout width. |
| `inc/blocks.php` | Block styles (the Styles panel in the block sidebar) and the pattern category. |
| `patterns/` | Block patterns, auto-registered. One file per Figma section. |
| `functions.php` | Setup, assets, Customizer (alert bar, footer tagline, social), offers CPT. |
| `header.php` / `footer.php` | Floating glass nav pill with mobile drawer (over a hero — any page that opens with a Full-width Cover, or the featured-image hero template, gets `body.has-hero` — it is dark frosted glass with white links; once scrolled it docks to the top edge full-width as white glass); warm-white footer — logo + tagline, three menu columns (15px/600 sentence-case titles), an accreditation line (Google 4.9, five stars, CSP and HCPC marks from `assets/img/accreditation/`), legal line. Change `--footer-bg` in section 11 of `style.css` to recolour it. |
| `assets/js/main.js` | Nav `.scrolled` toggle + card carousel with a proportional progress bar (vanilla). |
| `assets/js/functions.js` | Mobile drawer, sub-menus, AOS, gallery lightbox (older, jQuery-era). |
| `assets/img/` | Design assets only: placeholder photos exported from Figma, the conditions tiles, the accreditation marks and the contact icons. Site media (hero and b-roll video, team portraits) lives in the media library — `home_page.mp4` is the hero (1080p H.264, 5 MB, poster `hero-poster.jpg`); the 4K masters are in the client's `cji_media` folder. |
| `page.php` / `page-no-title.php` / `blank-page.php` | Page templates. Content sits in a 1280px container; Full-width blocks break out to the viewport edge. No "Latest articles" strip any more — the content ends at the footer. |
| `services.php` | Content beside a sticky 340px sidebar built from the *Sidebar offers* posts. An offer that is a heading plus link paragraphs renders as hairline rows with chevrons (typed `->` arrows are stripped); the `leaf-bg` card becomes an olive-tint panel. |
| `full-width-hero.php` | Featured image as a full-bleed hero (uses `.page-title`). |
| `home.php` / `archive.php` / `single.php` | Blog. |

## Setup after activating

1. **Appearance → Customize → Site Identity** — logo (shown on a white tile in the footer).
2. **Customize → Footer** — the tagline under the logo.
3. **Appearance → Menus** — assign *Footer: Treatments*, *Footer: Conditions* and *Footer: Resources*. If none are assigned, the old *Footer Menu (fallback)* is shown flowed into columns.

## Building pages in the editor

Nobody should need to type classes. Three things make the editor match the site:

**`theme.json`** — the colour picker shows only the brand palette (custom colours off), fonts and
size/spacing presets match the CSS, and `style.css` is loaded into the editor so blocks preview true.

**Block styles** (Styles panel in the block sidebar):

| Block | Styles |
| --- | --- |
| Group / Column | Card (white) · Panel (olive tint) · Panel (warm grey) · Panel (olive) · Panel (olive dark) · Panel (dark) · Narrow (Group only) |
| Columns | **Cards** — every column becomes a card · **Card carousel** — same, as a horizontal scroller with dots and arrows |
| Button | default (olive) · Outline · White · Text link |
| Paragraph | Eyebrow label · Lead · Caption · Link with arrow · Pill badge |
| Heading | Display (66px hero size) |
| List | Tick list · Rows (hairlines) |
| Image | Photo (rounded) · Icon badge |
| Media & Text | Profile card |
| Cover | Hero |
| Separator | Hairline |

A Group or Column set to **Full width** with a Panel style (or a palette background) becomes a
full-bleed band with section padding. Dark panels re-point the colour tokens, so headings, text,
links, hairlines and buttons inside them adapt automatically — no text colour to set.

**Patterns** (inserter → Patterns → *Cheshire Joint Injections*):
Hero · Section intro · Services bento grid · Conditions we treat (scrollable photo tiles linking to condition pages) · Treatment cards (3-up) · Reviews carousel ·
Reviews gallery (quote cards mixed with photo cards) · Team about · Team profile cards · CTA band · Contact section · FAQ accordion.
Each is plain core blocks, so text and images are edited inline and nothing drifts from `style.css`.

Handy extra classes for "Additional CSS class(es)": `section`, `section-header`, `max-680` (and
450/560/650/750), `bento` / `bento--tall` on Columns, `reviews-gallery` on a Card-carousel Columns (4-up, `testimonial-quote` paragraph, Column style "Photo (fills card)" for image cards), `conditions` on a Card-carousel Columns (3-up photo tiles: each Column is "Photo (fills card)" holding a Cover with the *Dark shade (bottom)* gradient and a "Link with arrow" paragraph; the link covers the whole tile), `panel-visual` on the last Image in a bento
card (give that Image the "Fade into panel" style for a taller photo that fades up into the panel colour), `contact-detail`, `contact-section`, `team-about`, `is-dark`.

## Colour tokens

| Name | Hex |
| --- | --- |
| Primary Olive | `#4F7F0C` |
| Olive Dark | `#264D03` |
| Olive Light | `#EBF2E5` |
| Olive Pale (links on dark) | `#A3C47A` |
| Warm Neutral | `#FAFBF9` |
| Warm Grey | `#F0EDE8` |
| Light Grey (borders) | `#E4EAE2` |
| Dark Text | `#1C290D` |
| Black (headings) | `#111111` |

## Type scale

Manrope 400 for headings: Display 66 · H1 40 · H2 28 · H3 20. Inter for body: Lead 18 · Body 16
· Small 14 · Caption 12/13 · Labels and buttons Inter 600.
