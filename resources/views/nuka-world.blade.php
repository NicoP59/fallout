<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/nuka/nuka.css') }}">
    <title>Welcome to Nuka World</title>
</head>
<main id="main">

    <body>

        <div class="home">
            <a href="/">
                <img src="img/nukaworld/home.png" alt="Home page return" class="return-home">
            </a>
        </div>

        <header>
            <img src="img/nukaworld/header.webp" alt="Nuka-World Page" class="Nuka-Header">
        </header>

        <article>
            <section class="nuka-page">
                <h1>Enjoy the ride !!</h1>
                <img src="img/nukaworld/nuka-page.png" alt="Nuka World Page" class="nuka-page-img">
            </section>

            <section class="welcome">
                <h1>Bienvenue à Nuka-World !</h1>
                <h2 class="gift-h2">Voici votre cadeau de bienvenue</h2>
                <div class="slot"></div>
                <div class="gifts-section">
                    <div>
                        <img src="img/nukaworld/nuka-world-box.png" alt="Welcome Box" class="welcome-box"
                            onclick="openLunch() && fiesta()">
                    </div>
                    <div id="nuka-box-items">
                        <figure>
                            <img src="img/nukaworld/boite-bienvenue/nuka-card.png" alt="" class="nuka-items">
                            <figcaption>
                                <a href="img/nukaworld/boite-bienvenue/nuka-card.png" download="nuka-card.png"">
                                    Carte Postale de Nuka-World
                                </a>
                            </figcaption>
                        </figure>
                        <figure>
                            <img src="img/nukaworld/boite-bienvenue/nuka-vip.png" alt="" class="nuka-items">
                            <figcaption>Carte VIP Nuka World</figcaption>
                        </figure>
                        <figure>
                            <img src="img/nukaworld/boite-bienvenue/nukacola.webp" alt="" class="nuka-items">
                            <figcaption>Un Nuka Cola rafraîchissant !</figcaption>
                        </figure>
                        <figure>
                            <img src="img/nukaworld/boite-bienvenue/ticket-nuka.png" alt="" class="nuka-items">
                            <figcaption>Tickets Nuka World x20</figcaption>
                        </figure>
                        <figure>
                            <img src="img/nukaworld/boite-bienvenue/map.jpg" alt="" class="nuka-items">
                            <figcaption>
                                <a href="pdf/Nuka-PDFs/nuka-map.pdf" download="nuka-map.pdf"">
                                    Carte de Nuka World
                                </a>
                            </figcaption>
                        </figure>
                        <figure>
                            <img src="img/nukaworld/boite-bienvenue/cappy.png" alt="" class="nuka-items">
                            <figcaption>
                                <a href="pdf/Nuka-PDFs/cappy.pdf" download="cappy.pdf"">
                                    Jeu des Cappys cachés
                                </a>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </section>

            <section class="activities">
                <h2 class="activity-h2">Nuka-World</h2>
                <div class="card-activity">
                    <div class="div-video">
                        <video controls class="video">
                            <source src="videos/Nuka-World.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="attractions">
                        <div>
                            <img src="img/nukaworld/nukagirl.webp" alt="Nuka Girl" class="nukagirl-img">
                        </div>
                        <div class="div-activity">
                            <p class="activity-p">Pleins d'attractions n'attendent que vous à Nuka World ! Sauvez notre
                                galaxie auprès de nos Nuka-Girl au Nuka Galaxy où une attaque d'extraterrestres sème la
                                terreur ! Rendez vous à salle d'arcade Nuka-Cade et gagnez des billets Nuka-Cade qui
                                peuvent
                                être échangés contre des prix ! Jouez au cowboy au Minecart de Mad Mulligan et bien plus
                                encore ...</p>
                        </div>
                    </div>
                    <div class="hidden-cappys">
                        <div class="div-activity">
                            <Un class="activity-p">
                                Rencontrez vos nouveaux amis Bottle et Cappy et n'hésitez pas à prendre une photo
                                souvenir avec eux ! Un petit jeu surprise est mis à la disposition de tous, dans votre
                                boîte de bienvenue. Un cappy dans une botte de foin : retrouvez dans tout le parc 10
                                images de Cappy et donnez ces images à Bottle, une récompense vous attend !</p>
                        </div>
                        <div>
                            <img src="img/nukaworld/cappy-bottle.png" alt="Cappy et Bottle"
                                class="friends-cappy-bottle">
                        </div>
                    </div>
                    <div class="Nuka-Cola">
                        <div>
                            <img src="img/nukaworld/nuka.jpeg" alt="Boissons Nuka Cola" class="nukas-img">
                        </div>
                        <div class="div-activity">
                            <p class="activity-p">Découvrez toutes nos variétés de Nuka Cola ! Ajoutez un peu de douceur
                                dans vos papilles avec le Nuka Cherry et le Nuka Grape, le Nuka Wild apportera une
                                touche
                                sauvage dans votre verre, ou bien encore le Nuka Cola Quantum vous fera voyager dans
                                l'espace !</p>
                        </div>
                    </div>
                </div>
                </div>
            </section>

            <section class="prices">
                <h2 class="price-h2">Nos prix</h2>
                <div class="cards">
                    <div class="card">
                        <img src="img/nukaworld/price-nuka.jpg" alt="" class="card__img">
                        <div class="card__data">
                            <h2 class="card__title">Quantum Premium</h2>
                            <p class="card__description">950 capsules / personne / jour pour un accès et prestations
                                illimités et gratuits sur l'ensemble du parc. Une combinaison Nuka-World offerte.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/nukaworld/nuka-pin.jpg" alt="" class="card__img">
                        <div class="card__data">
                            <h2 class="card__title">Friendly</h2>
                            <p class="card__description">435 capsules / personne / jour pour un accès illimité au parc.
                                Boissons gratuites et tee-shirt offert.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/nukaworld/price-cola.jpg" alt="" class="card__img">
                        <div class="card__data">
                            <h2 class="card__title">Cola</h2>
                            <p class="card__description">200 capsules / personne / jour pour un accès illimité au parc.
                                Casquette offerte dans la limite des stocks disponibles.</p>
                        </div>
                    </div>
                </div>
            </section>

            <div class="wrapper">
                <a class="cta" href="/message">
                    <span>NOUS REJOINDRE</span>
                    <span>
                        <svg width="66px" height="43px" viewBox="0 0 66 43" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <path class="one"
                                    d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z"
                                    fill="#FFFFFF"></path>
                                <path class="two"
                                    d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z"
                                    fill="#FFFFFF"></path>
                                <path class="three"
                                    d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z"
                                    fill="#FFFFFF"></path>
                            </g>
                        </svg>
                    </span>
                </a>
            </div>

        </article>

        <div id="top-btn-section">
            <img src="img/icons/quantum.webp" alt="" id="top-btn">
        </div>

    </body>

</main>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
<script src="/js/nukabox.js"></script>
