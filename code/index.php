<!--
  ----------------------------------------------------------------------
  TriNav™ — Three-Phase Intelligent Navigation System
  © 2025 Mark — All Rights Reserved.
  Developed in collaboration with ChatGPT design assistance.

  This UI/UX pattern and icon behaviour sequence is an original design.
  Redistribution, reproduction, or commercial use requires permission.
  Version: TriNav™ v1.0
  ----------------------------------------------------------------------
-->

<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>IDP Desktop Navigation</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="assets/css/desktop-nav.css">
</head>
<body>

<!-- ▬▬▬ TOP NAVBAR ▬▬▬ -->
<header class="top-nav">
  <div class="nav-left">
    <!-- HYBRID SIDEBAR ICON -->
<button id="sidebarToggle" class="menu-hybrid-icon" aria-label="Toggle sidebar">
  <svg width="32" height="32" viewBox="0 0 32 32" class="hybrid-svg">

    <!-- HAMBURGER LINES -->
    <path class="hamburger" d="M8 10 H24" stroke-width="2.5" stroke-linecap="round" fill="none"/>
    <path class="hamburger" d="M8 16 H24" stroke-width="2.5" stroke-linecap="round" fill="none"/>
    <path class="hamburger" d="M8 22 H24" stroke-width="2.5" stroke-linecap="round" fill="none"/>

    <!-- DOUBLE ARROW (hidden until hover) -->
    <path class="arrow1"
          d="M10 10 L16 16 L10 22"
          stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"
          fill="none"/>

    <path class="arrow2"
          d="M14 10 L20 16 L14 22"
          stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"
          fill="none"/>

  </svg>
</button>
<div id="triNavHint" class="tri-hint">Tap again for full.</div>






    <img src="assets/img/apple-icon-60x60.png" alt="IDP Logo" class="logo">
    <span class="title">TriNAV</span>
  </div>

  <div class="nav-right">
    <i class="fa-regular fa-bell"></i>
    <img src="assets/img/default-user.jpg.png" alt="IDP Logo" class="avatar">
  </div>
</header>

<!-- ▬▬▬ SIDEBAR ▬▬▬ -->
<aside id="sidebar" class="sidebar sidebar-hidden">
  <nav>
    <a href="#"><i class="fa-solid fa-house"></i><span class="text">Home</span></a>
    <a href="#"><i class="fa-solid fa-bolt"></i><span class="text">Favorites</span></a>
    <a href="#"><i class="fa-solid fa-layer-group"></i><span class="text">Categories</span></a>
    <a href="#"><i class="fa-solid fa-user"></i><span class="text">My Videos</span></a>
    <a href="#"><i class="fa-solid fa-clock-rotate-left"></i><span class="text">History</span></a>
  </nav>
</aside>

<!-- ▬▬▬ MAIN CONTENT ▬▬▬ -->
<main id="content" class="content">
  <h1>Desktop Tri-State Sidebar</h1>
  <p>This clean desktop-only layout uses:</p>

  <ul>
    <li>A custom hybrid navigation icon</li>
    <li>3 sidebar states: hidden, mini, full</li>
    <li>Smooth left-slide and content shifting</li>
    <li>Subtle animation to hint menu expandability</li>
    <li>No mobile UI included (purely desktop experience)</li>
  </ul>

  <p>Click the hybrid icon above to see it in action.</p>
</main>

<script src="assets/js/desktop-nav.js"></script>
</body>
</html>
