const menuBtn = document.getElementById("dropdownDefaultButton");

menuBtn.addEventListener("click", showMenu);

function showMenu() {
    menuBtn.classList.remove("hidden");
}
