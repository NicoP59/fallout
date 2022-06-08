function ToggleMenu() {
    const navbar = document.getElementById("bloc-links");
    const toggle = document.getElementById("button-burger");
    const img = document.getElementById("burger");

    toggle.addEventListener("click", (e) => {
        navbar.classList.toggle("show-list");
        if (navbar.classList.contains("show-list")) {
            img.src = "/img/icons/cross.png";
        } else {
            img.src = "/img/icons/burger.png";
        }
    });
}

ToggleMenu();
