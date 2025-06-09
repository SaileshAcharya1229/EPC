// document.getElementById("sidebarToggle").addEventListener("click", function () {
//   const sidebar = document.getElementById("sidebar");
//   const mainContent = document.getElementById("main-content");

//   sidebar.classList.toggle("collapsed");
//   mainContent.classList.toggle("collapsed");
// });
document.getElementById("sidebarToggle").addEventListener("click", function () {
  const sidebar = document.getElementById("sidebar");
  const mainContent = document.getElementById("main-content");

  sidebar.classList.toggle("collapsed");
  mainContent.classList.toggle("collapsed");

  // Save state
  const isCollapsed = sidebar.classList.contains("collapsed");
  localStorage.setItem("sidebarState", isCollapsed ? "collapsed" : "expanded");
});

const toggle = () => {
  const sidebar = document.getElementById("sidebar");
  if (!sidebar) return;

  const savedState = localStorage.getItem("sidebarState");

  if (window.innerWidth < 768) {
    sidebar.classList.add("collapsed");
  } else {
    if (savedState === "collapsed") {
      sidebar.classList.add("collapsed");
    } else {
      sidebar.classList.remove("collapsed");
    }
  }
};

window.addEventListener("resize", toggle);
window.addEventListener("DOMContentLoaded", toggle);
