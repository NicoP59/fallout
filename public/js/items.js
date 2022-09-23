const lunchBoxRandom = document.getElementById("id-lunchbox");
// INPUT HIDDEN
const item1 = document.getElementById("item1");
const item2 = document.getElementById("item2");
const item3 = document.getElementById("item3");
// IMAGE ITEM
const itemImg1 = document.getElementById("item-img-1");
const itemImg2 = document.getElementById("item-img-2");
const itemImg3 = document.getElementById("item-img-3");
// TITLE ITEM
const itemTitle1 = document.getElementById("item-title-1");
const itemTitle2 = document.getElementById("item-title-2");
const itemTitle3 = document.getElementById("item-title-3");

const section = document.getElementById("items-generate");

lunchBoxRandom.addEventListener("click", getRandomItem);

let stock = 3;

const itemsArray = [
    // AMAZING
    [
        "img/items/Amazing-Magazines/amazing-future.jpg",
        "Amazing Future Tales - Come Fly with me",
    ],
    [
        "img/items/Amazing-Magazines/amazing-penal.jpg",
        "Amazing Future Tales - Penal Cluster",
    ],
    // AWESOME
    [
        "img/items/Awesome-Magazines/awesome-snally.jpg",
        "Awesome Tales - Shallygasters from space!!!",
    ],
    [
        "img/items/Awesome-Magazines/awesome-invasion.jpg",
        "Awesome Tales - Invasion of the Zetans",
    ],
    [
        "img/items/Awesome-Magazines/awesome-cosmic.jpg",
        "Awesome Tales - Cosmic Adventure",
    ],
    [
        "img/items/Awesome-Magazines/awesome-deep.jpg",
        "Awesome Tales - Deep Sea Terror",
    ],
    [
        "img/items/Awesome-Magazines/awesome-dog.jpg",
        "Awesome Tales - Have dog, will travel!",
    ],
    [
        "img/items/Awesome-Magazines/awesome-insects.jpg",
        "Awesome Tales - Giant Insects Invade",
    ],
    [
        "img/items/Awesome-Magazines/awesome-gorilla.jpg",
        "Awesome Tales - A Gorilla ate my patrol car!",
    ],
    [
        "img/items/Awesome-Magazines/awesome-stop-time.jpg",
        "Awesome Tales - The man who could stop time",
    ],
    [
        "img/items/Awesome-Magazines/awesome-rise.jpg",
        "Awesome Tales - Rise of the mutants",
    ],
    // DETECTIVES
    ["img/items/Detective-Magazines/detective-alien.jpg", "Alien Detective"],
    ["img/items/Detective-Magazines/detective.jpg", "The Synth Detective"],
    // GUNS
    ["img/items/Guns-Magazines/guns-plasma.jpg", "Guns & Bullet - Plasma"],
    [
        "img/items/Guns-Magazines/guns-kicking.jpg",
        "Guns & Bullet - Kicking Ass and Taking Names",
    ],
    [
        "img/items/Guns-Magazines/guns-little.jpg",
        "Guns & Bullet - Little Guns for Little Ladies",
    ],
    ["img/items/Guns-Magazines/guns-pesky.jpg", "Guns & Bullet - Pesky Gun"],
    [
        "img/items/Guns-Magazines/guns.jpg",
        "Guns & Bullet - The Future of Hunting ?",
    ],
    // HOT RODDER
    ["img/items/Rodder-Magazines/hot-rodder.jpg", "Hot Rodder - Hot Pink!"],
    [
        "img/items/Rodder-Magazines/hot-rodder-shark.jpg",
        "Hot Rodder - Shark Paint Schemes!",
    ],
    // HUBRIS
    [
        "img/items/Hubris-Magazines/hubris-grognak.jpg",
        "Hubris Comics - Grognak, lost in the snows of lust!",
    ],
    [
        "img/items/Hubris-Magazines/hubris-grognak-cometh.jpg",
        "Hubris Comics - Grognak, Cometh the Trickster",
    ],
    [
        "img/items/Hubris-Magazines/hubris-lone.jpg",
        "Hubris Comics, the Lone Wonderer",
    ],
    // LIVE & LOVE
    [
        "img/items/Live-Magazines/live-love.jpg",
        "Live & Love - An Experience to Remember",
    ],
    [
        "img/items/Live-Magazines/live-love-milk.jpg",
        "Live & Love - The Milk of Human Kindness!",
    ],
    [
        "img/items/Live-Magazines/live-love-romance.jpg",
        "Live & Love - Romance knows no ranks",
    ],
    [
        "img/items/Live-Magazines/live-love-secretary.jpg",
        "Live & Love - The Secretary Charmer",
    ],
    [
        "img/items/Live-Magazines/live-love-talk.jpg",
        "Live & Love - Talk yourself sober",
    ],
    // TESLA
    ["img/items/Tesla-Magazines/tesla.jpg", "Tesla - What is Plasma, anyway?"],
    [
        "img/items/Tesla-Magazines/tesla-future.jpg",
        "Tesla - Future of WarFare?",
    ],
    [
        "img/items/Tesla-Magazines/tesla-geckos.jpg",
        "Tesla - Geckos and Gamma Radiation",
    ],
    [
        "img/items/Tesla-Magazines/tesla-weapons.jpg",
        "Tesla - Giant Super Weapons",
    ],
    // UNSTOPPABLES
    [
        "img/items/Unstoppables-Magazines/unstoppables.jpg",
        "The Unstoppables - Pterror Dastyls!",
    ],
    [
        "img/items/Unstoppables-Magazines/unstoppables-commie.jpg",
        "The Unstoppables - Commie-Kazi vs Manta Man",
    ],
    [
        "img/items/Unstoppables-Magazines/unstoppables-visit.jpg",
        "The Unstoppables - Visit the UX-Ron Galaxy!",
    ],
    // OTHER MAGAZINE
    ["img/items/Magazines/deathclaw.jpg", "DeathClaw - Terror of the Wastes"],
    ["img/items/Magazines/invader.jpg", "The Invader"],
    ["img/items/Magazines/leon.jpg", "Leon, the Estranged!"],
    ["img/items/Magazines/nintenbooks.jpg", "Nintenbooks - Taken... again"],
    [
        "img/items/Magazines/nuka-break.jpg",
        "Nuka Break - Tales from the Wasteland",
    ],
    ["img/items/Magazines/red-beamer.jpg", "Read Beamer - Atom Bomb Special!"],
    ["img/items/Magazines/rob-co-fun.jpg", "RobCo Fun - Red Menace"],
    [
        "img/items/Magazines/satellite-soda.jpg",
        "Satellite Soda - Woman of Space",
    ],
    ["img/items/Magazines/scav.jpg", "SCAV #4"],
    [
        "img/items/Magazines/surgical.jpg",
        "Surgical Journal - Let's play doctor!",
    ],
    [
        "img/items/Magazines/tumblers.jpg",
        "Tumblers Today - Confessions of a Housebreaker",
    ],
    [
        "img/items/Magazines/valentine.jpg",
        "Detective Comics - Valentine getting a clue!",
    ],
    ["img/items/Magazines/welcome.jpg", "Affiche - Welcome Home"],
    // NUKA-COLA
    ["img/items/Nukacola/nukacola.webp", "Nuka Cola"],
    ["img/items/Nukacola/nukalove.webp", "Nuka Love"],
    ["img/items/Nukacola/nukaquantum.webp", "Nuka Quantum"],
    ["img/items/Nukacola/nukacherry.webp", "Nuka Cherry"],
    ["img/items/Nukacola/nukacoladark.webp", "Nuka Cola Dark"],
    ["img/items/Nukacola/nukacolaorange.webp", "Nuka Cola Orange"],
    ["img/items/Nukacola/nukacolaquartz.webp", "Nuka Cola Quartz"],
    ["img/items/Nukacola/nukacolavictory.webp", "Nuka Cola Victory"],
    ["img/items/Nukacola/nukacolawild.webp", "Nuka Cola Wild"],
    ["img/items/Nukacola/nukacooler.webp", "Nuka Cooler"],
    ["img/items/Nukacola/nukafrutti.webp", "Nuka Frutti"],
    ["img/items/Nukacola/nukagrape.webp", "Nuka Grape"],
    ["img/items/Nukacola/nukapunch.webp", "Nuka Punch"],
    ["img/items/Nukacola/nukaray.webp", "Nuka-Ray"],
    ["img/items/Nukacola/nukavoid.webp", "Nuka Void"],
    ["img/items/Nukacola/nukaxtreme.webp", "Nuka X-treme"],

    // ITEMS
    ["img/items/Items/canigou.png", "Canigou"],
    ["img/items/Items/med-x.webp", "Med-X"],
    ["img/items/Items/jet.webp", "Jet"],
    ["img/items/Items/stimpak.webp", "Stimpak"],
    ["img/items/Items/sugarbombs.webp", "Sugar Bombs"],
    ["img/items/Items/toyrocketship.webp", "Toy Rocket Ship"],
    ["img/items/Items/radaway.webp", " Rad Away"],
    ["img/items/Items/rad-x.png", " Rad-X"],
    ["img/items/Items/pipboy.png", " Pip Boy"],
    ["img/items/Items/hu-dada.png", " Hu-Dada"],
    ["img/items/Items/grenade.png", " Grenade"],
    ["img/items/Items/automatron.webp", "Automatron"],
    ["img/items/Items/captaincosmos.webp", "Captain Cosmos"],
    ["img/items/Items/holotape.webp", "Holotape"],
    ["img/items/Items/mininuke.webp", "Mininuke"],
    ["img/items/Items/buffout.png", "Buffout"],
    ["img/items/Items/mr-handy.png", "Mr Handy"],
    ["img/items/Items/repair-kit.png", "Repair Kit"],
    ["img/items/Items/wonder-glue.png", "Super Glue"],
    ["img/items/Items/dirty-water.png", "Eau Sale"],
];

function getRandomItem() {
    for (i = 0; i < stock; i++) {
        let aleatoire = Math.floor(Math.random() * itemsArray.length);

        let div = document.createElement("div");
        div.classList.add("item");
        section.appendChild(div);

        let img = document.createElement("img");
        img.src = itemsArray[aleatoire][0];
        img.id = "img-item-" + (i + 1);
        img.classList.add("img-items");
        div.appendChild(img);

        let p = document.createElement("p");
        p.innerHTML = itemsArray[aleatoire][1];
        p.classList.add("item-title");
        div.appendChild(p);

        let input = document.createElement("input");
        input.type = "hidden";
        input.value = `${itemsArray[aleatoire][0]}*${itemsArray[aleatoire][1]}`;
        input.name = "item-" + (i + 1);
        div.appendChild(input);
    }

    if (stock) {
        let inputsubmit = document.createElement("button");
        inputsubmit.type = "submit";
        inputsubmit.innerHTML = `Valider <i class="bi bi-check"></i>`;
        inputsubmit.className = "button-kit";
        section.appendChild(inputsubmit);
    } else {
        inputsubmit.display = "none";
    }

    stock = 0;
}
