const toggleBtn = document.getElementById("toggleSidebar");
const sidebar = document.getElementById("sidebar");
const mainContent = document.getElementById("main-content");

toggleBtn.addEventListener("click", function () {
  sidebar.classList.toggle("collapsed");
  mainContent.classList.toggle("full-width");
});
