/* ----------------------------------------------------------------------
   TriNav™ — Three-Phase Intelligent Navigation System
   © 2025 Mark — All Rights Reserved.
   Developed with ChatGPT design assistance.
   Version: TriNav™ v1.0
---------------------------------------------------------------------- */



const sidebar = document.getElementById("sidebar");
const sidebarToggle = document.getElementById("sidebarToggle");
const content = document.getElementById("content");

let navState = 0; 
// 0 = hidden
// 1 = mini
// 2 = full

function applyNavState() {
  sidebar.classList.remove("sidebar-hidden", "sidebar-mini", "sidebar-full");
  content.classList.remove("with-hidden", "with-mini", "with-full");

  // update icon state attribute
  sidebarToggle.setAttribute("data-state", navState);

  if (navState === 0) {
    sidebar.classList.add("sidebar-hidden");
    content.classList.add("with-hidden");
  }
  if (navState === 1) {
    sidebar.classList.add("sidebar-mini");
    content.classList.add("with-mini");
  }
  if (navState === 2) {
    sidebar.classList.add("sidebar-full");
    content.classList.add("with-full");
  }
}

sidebarToggle.addEventListener("click", () => {
  navState = (navState + 1) % 3;
  applyNavState();
});

/* collapse when clicking outside */
document.addEventListener("click", (e) => {
  const clickedInsideMenu = sidebar.contains(e.target) || sidebarToggle.contains(e.target);
  if (!clickedInsideMenu && navState !== 0) {
    navState = 0;
    applyNavState();
  }
});

/* collapse on nav item click */
sidebar.addEventListener("click", () => {
  navState = 0;
  applyNavState();
});

/* init */
applyNavState();



/* hint */

const hint = document.getElementById("triNavHint");
let hintShown = localStorage.getItem("triNavHintShown");

/* Show hint AFTER phase 1 */
function showTriNavHint() {
  if (hintShown) return;

  hint.classList.add("show");

  // hide after 2 seconds
  setTimeout(() => {
    hint.classList.remove("show");
  }, 2000);

  // never show again
  localStorage.setItem("triNavHintShown", "1");
  hintShown = "1";
}

/* Hook into your navState handling */
const originalApplyNavState = applyNavState;
applyNavState = function () {
  originalApplyNavState();

  if (navState === 1 && !hintShown) {
    showTriNavHint();
  }
};



