var filtre_btn = document.querySelectorAll(".btn-filtre");
var all_link = document.querySelectorAll(".div-link");

filtre_btn.forEach((element) => {
    element.addEventListener("click", changementFiltre);
});

function changementFiltre() {
    filtre_btn.forEach((element) => {
        element.classList.remove("active");
    });

    this.classList.toggle("active");
    dataProjet = this.dataset.projet;

    if (dataProjet == "all") {
        for (i = 0; i < all_link.length; i++) {
            all_link[i].style.display = "";
        }
    } else {
        for (i = 0; i < all_link.length; i++) {
            if (all_link[i].dataset.projet != dataProjet) {
                all_link[i].style.display = "none";
            } else {
                all_link[i].style.display = "";
            }
        }
    }
}
