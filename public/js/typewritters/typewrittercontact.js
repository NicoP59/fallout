var terminalArray = ["TERMINAL LOCKED"];
var contactArray = ["PLEASE CONTACT ADMINISTRATOR..."];
var textPosition = 0;
var speed = 100;

typewritter = () => {
    document.querySelector("#locked").innerHTML =
        terminalArray[0].substring(0, textPosition) +
        "<span class='span-typewritter'>\u25ae</span>";

    document.querySelector("#contact-sentence").innerHTML =
        contactArray[0].substring(0, textPosition) +
        "<span class='span-typewritter'>\u25ae</span>";

    if (
        textPosition++ != terminalArray[0].length ||
        textPosition++ != contactArray[0].length
    ) {
        setTimeout(typewritter, speed);
    }
};

window.addEventListener("load", typewritter);

// var email = ["name@example.com"];
// var object = ["Object du mail"];
// var message = ["Message à envoyer ici avec votre mail"];
// var textPosition = 0;
// var speed = 100;

// typewritter = () => {
//     document.getElementById("email").placeholder =
//         email[0].substring(0, textPosition);

//     document.getElementById("object").placeholder =
//         object[0].substring(0, textPosition);

//         document.getElementById("message").placeholder =
//         message[0].substring(0, textPosition);

//     if (
//         textPosition++ != email[0].length ||
//         textPosition++ != object[0].length ||
//         textPosition++ != message[0].length
//     ) {
//         setTimeout(typewritter, speed);
//     }
// };

// window.addEventListener("load", typewritter);
