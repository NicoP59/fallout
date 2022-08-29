const items = document.getElementById("items-div");
let open = 0;

const containerSlot = document.querySelector(".slot");
const emojis = ["☢️", "☣️", "💥", "💣", "☠️", "🔪", "💸", "💉", "✨"];

function openLunch() {
    if (open == 0) {
        items.style.display = "block";
        open++;
    } else {
        items.style.display = "none";
        open = 0;
    }
    return open;
}

function fiesta() {
    // Si isTweening est true alors tu animes rien du tout, tu sors de la fonction
    if (isTweening()) return;
    // 50 = nombre d'emojis que l'on veut
    for (let i = 0; i < 50; i++) {
        const confetti = document.createElement("div");
        // Emoji au hasard
        confetti.innerText = emojis[Math.floor(Math.random() * emojis.length)];
        // On l'ajoute à la div enfant de slot
        containerSlot.appendChild(confetti);
    }

    animateConfettis();
}

function animateConfettis() {
    const TLCONF = gsap.timeline();
    // timeline => on y met des animations
    TLCONF.to(".slot div", {
        y: "random(-100,100)",
        x: "random(-100,100)",
        // 1000 étant la perspective, axe de l'animation jusqu'à l'écran de 0 à 1000
        z: "random(0,1000)",
        // On fait tourner les emojis
        rotation: "random(-90,90)",
        // Ca dure 1 seconde
        duration: 1,
    })
        // Faire disparaître les emojis
        .to(".slot div", { autoAlpha: 0, duration: 0.3 }, "-=0.2")
        .add(() => {
            // Pour faire disparaître totalement les emojis du DOM
            containerSlot.innerHTML = "";
        });
}

function isTweening() {
    // Est-ce que cela s'anime ?
    // Ca renvoit true si c'est animé, ou false si ça ne l'est pas
    return gsap.isTweening(".slot div");
}
