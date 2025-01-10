const openSidebar = document.getElementById("openSidebar");
const closeSidebar = document.getElementById("closeSidebar");
const sidebar = document.getElementById("sidebar");

openSidebar.addEventListener("click", () => {
    sidebar.classList.remove("max-w-0", "opacity-0");
    sidebar.classList.add("max-w-xs", "opacity-100");
    openSidebar.classList.add("hidden");
});

closeSidebar.addEventListener("click", () => {
    sidebar.classList.remove("max-w-xs", "opacity-100");
    sidebar.classList.add("max-w-0", "opacity-0");
    openSidebar.classList.remove("hidden");
});
