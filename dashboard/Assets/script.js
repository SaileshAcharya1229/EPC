document.getElementById("sidebarToggle").addEventListener("click", function () {
  const sidebar = document.getElementById("sidebar");
  const mainContent = document.getElementById("main-content");

  sidebar.classList.toggle("collapsed");
  mainContent.classList.toggle("collapsed");
});
const toggle = () => {
  if (window.innerWidth < 768) {
    document.getElementById("sidebar").classList.add("collapsed");
  } else {
    document.getElementById("sidebar").classList.remove("collapsed");
  }
};
window.addEventListener("resize", toggle);
