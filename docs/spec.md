# TriNav™ Specification Document

## Overview
TriNav™ is a three-stage navigation model driven by a hybrid icon that visually communicates its state. The system is composed of:

- A sidebar with 3 widths (0, mini, full).
- A central control icon whose arrows and hamburger colour change based on state.
- Optional onboarding hint that appears once on Phase 1.

---

## Sidebar States

| State | Icon | Width | Description |
|-------|------|--------|-------------|
| 0 | ☰ >> (hover only) | 0px | Fully hidden |
| 1 | ☰ >› | 72px | Mini sidebar mode |
| 2 | ☰ >> | 240px | Full navigation drawer |

---

## Icon Behaviour

- **Arrows are invisible on State 0 unless hovered.**
- **Arrow 1 (left) turns white in State 1 & 2.**
- **Arrow 2 (right) is gray in State 1 and white in State 2.**
- Hamburger becomes dark gray (`#272727`) in State 1 & 2.

---

## Colours

- Hamburger (inactive): `#FFFFFF`
- Hamburger (active): `#272727`
- Arrow 1: `#FFFFFF`
- Arrow 2 (State 1): `#808080`
- Arrow 2 (State 2): `#FFFFFF`
- Sidebar BG: `#111111`
- Page BG: `#0F0F0F`

---

## State Machine

