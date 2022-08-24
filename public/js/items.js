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

const stock = 3;

const itemsArray = [
    ["img/items/automatron.webp", "Automatron"],
    ["img/items/captaincosmos.webp", "Captain Cosmos"],
    ["img/items/holotape.webp", "Holotape"],
    ["img/items/mininuke.webp", "Mininuke"],
    ["img/items/nukacola.webp", "Nuka Cola"],
    ["img/items/nukalove.webp", "Nuka Love"],
    ["img/items/nukaquantum.webp", "Nuka Quantum"],
    ["img/items/awesome1.jpg", "Awesome Tales - Shallygasters from space!!!"],
    ["img/items/awesome2.jpg", "Awesome Tales - Invasion of the Zetans"],
    ["img/items/awesome3.jpg", "Guns & Bullet - Plasma"],
    ["img/items/stimpak.webp", "Stimpak"],
    ["img/items/sugarbombs.webp", "Sugar Bombs"],
    ["img/items/toyrocketship.webp", "Toy Rocket Ship"],
    ["img/items/radaway.webp", " Rad Away"],
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
        div.appendChild(p);

        let input = document.createElement("input");
        input.type = "hidden";
        input.value = `${itemsArray[aleatoire][0]}*${itemsArray[aleatoire][1]}`;
        input.name = "item-" + (i + 1);
        div.appendChild(input);
    }

    let inputsubmit = document.createElement("input");
    inputsubmit.type = "submit";
    inputsubmit.value = `Obtenir`;
    section.appendChild(inputsubmit);
}

// console.log(getRandomItem());
