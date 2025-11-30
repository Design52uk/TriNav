# TriNav™ Specification Document  
© 2025 Mark — All Rights Reserved.

---

## Overview
TriNav™ is a three-stage navigation model driven by a hybrid icon that visually communicates its state.  
The system consists of:

- A sidebar with 3 widths (hidden, mini, full)
- A tri-state control icon (hamburger + dual arrows)
- Visual cues that reflect the navigation state
- A one-time onboarding hint displayed on first use of Phase 1

TriNav™ is designed to be compact, self-teaching, and space-efficient.

---

## Sidebar States

| State | Icon Example | Width | Description |
|-------|--------------|--------|-------------|
| **0** | ☰ >> (hover only) | 0px | Fully hidden sidebar |
| **1** | ☰ >› | 72px | Mini sidebar (icons only) |
| **2** | ☰ >> | 240px | Full sidebar (icons + labels) |

---

## Icon Behaviour (TriNav Hybrid Control)

### State 0 — Closed
- Hamburger is **white**
- Arrows are **hidden**
- On hover: both arrows reveal briefly (white + gray)
- Visual cue suggests: “this expands”

### State 1 — Mini Sidebar
- Hamburger becomes **dark gray (#272727)**
- Left arrow becomes **white**
- Right arrow becomes **gray (#808080)**
- Mini sidebar opens (72px width)
- Display one-time hint:  
  **“Tap again for full.”**  
  (Only shown once per user)

### State 2 — Full Sidebar
- Hamburger remains **dark gray**
- Both arrows become **white**
- Sidebar opens fully (240px)

### Additional Rules
- Arrow spacing and alignment remain fixed  
- Arrows never animate or reset unless hovered (State 0)  
- Hamburger never returns to white unless the system resets to State 0  

---

## Colour Palette

| Element | Hex |
|--------|------|
| Hamburger (inactive) | `#FFFFFF` |
| Hamburger (active) | `#272727` |
| Arrow 1 | `#FFFFFF` |
| Arrow 2 (State 1) | `#808080` |
| Arrow 2 (State 2) | `#FFFFFF` |
| Sidebar Background | `#111111` |
| Sidebar Border | `#222222` |
| Page Background | `#0F0F0F` |

---

# 🔧 State Machine

TriNav™ follows a strict state machine.  
Each click advances to the next state, and specific actions reset the system.

```
          (click)
   ┌────────────────┐
   │                ▼
┌─────────┐    ┌─────────┐    ┌─────────┐
│ State 0 │ →→ │ State 1 │ →→ │ State 2 │
│ Closed  │    │ Mini    │    │ Full    │
└─────────┘    └─────────┘    └─────────┘
      ▲               ▲              │
      │               │              │ click OR
      │               └──────────────┘ outside-click
      │
      └──────────── back to State 0 ────────────────
```

---

## Trigger Table

| User Action | Current State | Next State | Notes |
|-------------|---------------|------------|-------|
| **Click icon** | 0 | 1 | Sidebar mini opens |
| **Click icon** | 1 | 2 | Sidebar full opens |
| **Click icon** | 2 | 0 | Sidebar closes fully |
| **Click outside** | 2 | 0 | Auto-close |
| **Hover icon** | 0 | 0 | Arrows reveal + nudge animation |
| **Hover icon** | 1/2 | 1/2 | No hover animation at all |
| **Leave icon (State 0)** | 0 | 0 | Arrows fade out |

---

## Optional Onboarding Hint Behaviour

The popup hint `"Tap again for full."` appears:

- Only on **first entry into State 1**
- Only once per device/session (localStorage)
- Never appears again after being closed or after the user reaches State 2

---

## Developer Notes

- State is stored as a numeric value (`0`, `1`, `2`)
- Sidebar element applies classes:  
  - `.sidebar-hidden`  
  - `.sidebar-mini`  
  - `.sidebar-full`
- Content area shifts based on state using:  
  - `.with-hidden`  
  - `.with-mini`  
  - `.with-full`
- Icon uses `data-state="0|1|2"`

---

# End of Specification Document  
TriNav™ Specification v1.0  
© 2025 Mark — All Rights Reserved.
