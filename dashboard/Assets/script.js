// Sidebar toggle functionality
document.getElementById("toggleSidebar").addEventListener("click", function () {
  const sidebar = document.getElementById("sidebar");
  const main = document.getElementById("main-content");
  const dashboardBar = document.getElementById("dashboardBar");

  // Toggle the collapsed class on sidebar and full-width class on content
  sidebar.classList.toggle("collapsed");
  main.classList.toggle("full-width");
  dashboardBar.classList.toggle("full-width");
});

// Profile dropdown hover functionality
const profile = document.getElementById("profileDropdown");
const menu = document.getElementById("profileMenu");

profile.addEventListener("mouseenter", () => {
  menu.style.display = "block";
});

menu.addEventListener("mouseleave", () => {
  menu.style.display = "none";
});
