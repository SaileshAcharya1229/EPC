document.getElementById("toggleSidebar").addEventListener("click", function () {
  document.getElementById("sidebar").classList.toggle("collapsed");
});

const profile = document.getElementById("profileDropdown");
const menu = document.getElementById("profileMenu");

profile.addEventListener("mouseenter", () => (menu.style.display = "block"));
menu.addEventListener("mouseleave", () => (menu.style.display = "none"));
document.getElementById("toggleSidebar").addEventListener("click", function () {
  const sidebar = document.getElementById("sidebar");
  const main = document.getElementById("main-content");
  const dashboardBar = document.getElementById("dashboardBar");

  sidebar.classList.toggle("collapsed");
  main.classList.toggle("full-width");
  dashboardBar.classList.toggle("full-width");
  document
    .getElementById("toggleSidebar")
    .addEventListener("click", function () {
      document.getElementById("sidebar").classList.toggle("collapsed");
      document.getElementById("main-content").classList.toggle("full-width");
    });
});
