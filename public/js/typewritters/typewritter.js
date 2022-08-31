var specialArray = ["QU'EST-CE QUI VOUS REND S.P.E.C.I.A.L ?"];
var vaultArray = ["QU'EST-CE QUE LA VAULT-TEC CORPORATION ?"];
var textPosition = 0;
var speed = 100;

typewritter = () => {
    document.querySelector("#special-titre-section").innerHTML =
        specialArray[0].substring(0, textPosition) +
        "<span class='span-typewritter'>\u25ae</span>";

    document.querySelector("#Vault-Tec-titre").innerHTML =
        vaultArray[0].substring(0, textPosition) +
        "<span class='span-typewritter'>\u25ae</span>";

    if (
        textPosition++ != specialArray[0].length ||
        textPosition++ != vaultArray[0].length
    ) {
        setTimeout(typewritter, speed);
    }
};

window.addEventListener("load", typewritter);
