<?php include ('head.php'); ?>
<?php include ('navbar.php'); ?>
<?php include ('search-bar.php'); ?>
<main>
    <section class="section-left">
        <img src="img/hotel/hotel-room-intro.jpg" alt="Chambres de l'hôtel Parimis">
        <div>
            <h1>Les chambres du Parimis
                <br>conjuguent élégance et raffinement</h1>
            <p>Les 50 chambres et suites conjuguent
                <strong>luxe élégant et sobre</strong>, avec technologie ultra performante.
                <strong>Spacieuses et raffinées</strong>, les chambres du
                <strong>Parimsi Hôtel</strong> possèdent un espace salon, une chambre ainsi qu'un grand dressing. Le style
                <strong>Art Déco</strong> fait ressortir habilement les matériaux précieux comme l'acajou, le marbre ou encore le
                cuir.
            </p>
            <p>Chaque chambre est équipée d'une tablette digitale interactive, disponible en 11 langues, et donnant accès à
                différents services : domotique de la chambre, room-service, informations touristiques, conciergerie.</p>
            <p>La salle de bains,
                <strong>tout en marbre</strong>, est équipée de doubles vasques, d'une douche à effet pluie, d'une vaste baignoire,
                de produits d'accueil Oscar de la Renta, et d'
                <strong>une télévision encastrée.</strong>
            </p>
        </div>
    </section>
    <section class="room-offer">
        <h1>Nos gammes</h1>
        <div id="room-swiper" class="room-swiper">
            <div class="swiper-room-container">
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <figure>
                            <img src="img/hotel/room/big/room-1.jpg" alt="Intérieur chambre Luxury in Advance">
                            <figcaption class="book-room">
                                <div class="book-name">
                                    <h3>Suite</h3>
                                    <p>D'une superficie de 55 à 68m², les chambres Suite sont disponibles jusqu'à 6 personnes. Luxueuses, spacieuses et dôtées d'une terrasse surplombant la ville, elles disposent de 2 grands lits king-size, de 2 lits jumeaux, d'un espace séjour, d'un grand dressing et de deux salles de bain avec douche et baignoire à l'italienne.</p>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <img src="img/hotel/room/big/room-2.jpg" alt="Terrasse chambre Rooftop Garden">
                            <figcaption class="book-room">
                                <div class="book-name">
                                    <h3>Deluxe</h3>
                                    <p>D'une superficie de 47 à 55m², les chambres Deluxe offrent un espace ouvert et spacieux pour 4 personnes. Mariant chic parisien et art de vivre à la française, elles sont dôtées d'un grand lit king-size, de 2 lits jumeaux (ou lit king-size), d'un coin dressing, d'un espace bureau et d'une salle de bain avec douche et baignoire à l'italienne.</p>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <img src="img/hotel/room/big/room-3.jpg" alt="Intérieur chambre Suite Royale">
                            <figcaption class="book-room">
                                <div class="book-name">
                                    <h3>Confort</h3>
                                    <p>D'une superficie de 39 à 47m², les chambres Confort prônent l'art de vivre à la française. Conçus pour 2 personnes, elles arborent un décor épuré et contemporain, et disposent d'un grand lit king-size avec couettes et oreillers en duvet d'oie, d'un coin dressing, d'un espace bureau et d'une salle de bain avec douche à l'italienne.</p>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <img src="img/hotel/room/big/room-3.jpg" alt="Intérieur chambre Suite Royale">
                            <figcaption class="book-room">
                                <div class="book-name">
                                    <h3>Classique</h3>
                                    <p>D'une superficie de 32 à 39m², les chambres Classique ont été conçus pour 2 personnes dans un style résolument parisien. Dôtées d'un grand lit king-size, d'une salle de bain avec douche à l'italienne, elles offrent un espace optimal délicieusement meublé et décoré et garantissent le luxe en toute simplicité.</p>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <section class="all-room">
        <h1>Découvrez toutes nos chambres</h1>
        <ul class="filters">
            <li class="selected" data-roomtype="all">
                Afficher tout
            </li>
            <li class="" data-roomtype="suite">
                Suite
            </li>
            <li class="" data-roomtype="deluxe">
                Deluxe
            </li>
            <li class="" data-roomtype="confort">
                Confort
            </li>
            <li class="" data-roomtype="classique">
                Classique
            </li>
        </ul>
        <div class="all-room-container">
            <div class="room-list col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12" data-roomtype="suite">
                <figure>
                    <img src="img/hotel/room/room-1.jpg" alt="">
                    <figcaption class="book-room">
                        <div class="book-name">
                            <h4>CHAMBRE : SUITE</h4>
                            <h3>Luxury In Advance</h3>
                            <p>TAILLE : 35 - 40 m²</p>
                            <p>à partir de 925 € par nuit</p>
                        </div>
                        <div class="booking">
                            <a class="underline--magical" href="#">RÉSERVER</a>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="room-list col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12" data-roomtype="suite">
                <figure>
                    <img src="img/hotel/room/room-2.jpg" alt="">
                    <figcaption class="book-room">
                        <div class="book-name">
                            <h4>CHAMBRE : SUITE</h4>
                            <h3>Suite Royale</h3>
                            <p>TAILLE : 30 - 35 m²</p>
                            <p>à partir de 765 € par nuit</p>
                        </div>
                        <div class="booking">
                            <a class="underline--magical" href="#">RÉSERVER</a>
                        </div>
                    </figcaption>
                </figure>
                </figure>
            </div>
            <div class="room-list col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12" data-roomtype="deluxe">
                <figure>
                    <img src="img/hotel/room/room-4.jpg" alt="">
                    <figcaption class="book-room">
                        <div class="book-name">
                            <h4>CHAMBRE : DELUXE</h4>
                            <h3>Rooftop Garden</h3>
                            <p>TAILLE : 30 - 35 m²</p>
                            <p>à partir de 765 € par nuit</p>
                        </div>
                        <div class="booking">
                            <a class="underline--magical" href="#">RÉSERVER</a>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="room-list col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12" data-roomtype="confort">
                <figure>
                    <img src="img/hotel/room/room-6.jpg" alt="">
                    <figcaption class="book-room">
                        <div class="book-name">
                            <h4>CHAMBRE : CONFORT</h4>
                            <h3>Escape Suite</h3>
                            <p>TAILLE : 30 - 35 m²</p>
                            <p>à partir de 765 € par nuit</p>
                        </div>
                        <div class="booking">
                            <a class="underline--magical" href="#">RÉSERVER</a>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="room-list col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12" data-roomtype="confort">
                <figure>
                    <img src="img/hotel/room/room-9.jpg" alt="">
                    <figcaption class="book-room">
                        <div class="book-name">
                            <h4>CHAMBRE : CONFORT</h4>
                            <h3>Nuit et jour</h3>
                            <p>TAILLE : 25 - 30 m²</p>
                            <p>à partir de 575 € par nuit</p>
                        </div>
                        <div class="booking">
                            <a class="underline--magical" href="#">RÉSERVER</a>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="room-list col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12" data-roomtype="confort">
                <figure>
                    <img src="img/hotel/room/room-10.jpg" alt="">
                    <figcaption class="book-room">
                        <div class="book-name">
                            <h4>CHAMBRE : CONFORT</h4>
                            <h3>Plaisir partagé</h3>
                            <p>TAILLE : 25 - 30 m²</p>
                            <p>à partir de 765 € par nuit</p>
                        </div>
                        <div class="booking">
                            <a class="underline--magical" href="#">RÉSERVER</a>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="room-list col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12" data-roomtype="classique">
                <figure>
                    <img src="img/hotel/room/room-11.jpg" alt="">
                    <figcaption class="book-room">
                        <div class="book-name">
                            <h4>CHAMBRE : CLASSIQUE</h4>
                            <h3>Simplicité à deux</h3>
                            <p>TAILLE : 25 - 30 m²</p>
                            <p>à partir de 465 € par nuit</p>
                        </div>
                        <div class="booking">
                            <a class="underline--magical" href="#">RÉSERVER</a>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="room-list col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12" data-roomtype="classique">
                <figure>
                    <img src="img/hotel/room/room-12.jpg" alt="">
                    <figcaption class="book-room">
                        <div class="book-name">
                            <h4>CHAMBRE : CLASSIQUE</h4>
                            <h3>Simplicité à quatre</h3>
                            <p>TAILLE : 25 - 30 m²</p>
                            <p>à partir de 465 € par nuit</p>
                        </div>
                        <div class="booking">
                            <a class="underline--magical" href="#">RÉSERVER</a>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="room-list col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12" data-roomtype="suite">
                <figure>
                    <img src="img/hotel/room/room-1.jpg" alt="">
                    <figcaption class="book-room">
                        <div class="book-name">
                            <h4>CHAMBRE : SUITE</h4>
                            <h3>Luxury In Advance</h3>
                            <p>TAILLE : 30 - 35 m²</p>
                            <p>à partir de 765 € par nuit</p>
                        </div>
                        <div class="booking">
                            <a class="underline--magical" href="#">RÉSERVER</a>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="room-list col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12" data-roomtype="suite">
                <figure>
                    <img src="img/hotel/room/room-2.jpg" alt="">
                    <figcaption class="book-room">
                        <div class="book-name">
                            <h4>CHAMBRE : SUITE</h4>
                            <h3>Suite Royale</h3>
                            <p>TAILLE : 40 - 50 m²</p>
                            <p>à partir de 950 € par nuit</p>
                        </div>
                        <div class="booking">
                            <a class="underline--magical" href="#">RÉSERVER</a>
                        </div>
                    </figcaption>
                </figure>
                </figure>
            </div>
            <div class="room-list col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12" data-roomtype="deluxe">
                <figure>
                    <img src="img/hotel/room/room-4.jpg" alt="">
                    <figcaption class="book-room">
                        <div class="book-name">
                            <h4>CHAMBRE : DELUXE</h4>
                            <h3>Rooftop Garden</h3>
                            <p>TAILLE : 35 - 40 m²</p>
                            <p>à partir de 765 € par nuit</p>
                        </div>
                        <div class="booking">
                            <a class="underline--magical" href="#">RÉSERVER</a>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="room-list col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12" data-roomtype="confort">
                <figure>
                    <img src="img/hotel/room/room-6.jpg" alt="">
                    <figcaption class="book-room">
                        <div class="book-name">
                            <h4>CHAMBRE : CONFORT</h4>
                            <h3>Escape Suite</h3>
                            <p>TAILLE : 35 - 40 m²</p>
                            <p>à partir de 765 € par nuit</p>
                        </div>
                        <div class="booking">
                            <a class="underline--magical" href="#">RÉSERVER</a>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="room-list col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12" data-roomtype="confort">
                <figure>
                    <img src="img/hotel/room/room-9.jpg" alt="">
                    <figcaption class="book-room">
                        <div class="book-name">
                            <h4>CHAMBRE : CONFORT</h4>
                            <h3>Nuit et jour</h3>
                            <p>TAILLE : 35 - 40 m²</p>
                            <p>à partir de 765 € par nuit</p>
                        </div>
                        <div class="booking">
                            <a class="underline--magical" href="#">RÉSERVER</a>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="room-list col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12" data-roomtype="confort">
                <figure>
                    <img src="img/hotel/room/room-10.jpg" alt="">
                    <figcaption class="book-room">
                        <div class="book-name">
                            <h4>CHAMBRE : CONFORT</h4>
                            <h3>Plaisir partagé</h3>
                            <p>TAILLE : 35 - 40 m²</p>
                            <p>à partir de 765 € par nuit</p>
                        </div>
                        <div class="booking">
                            <a class="underline--magical" href="#">RÉSERVER</a>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="room-list col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12" data-roomtype="classique">
                <figure>
                    <img src="img/hotel/room/room-11.jpg" alt="">
                    <figcaption class="book-room">
                        <div class="book-name">
                            <h4>CHAMBRE : CLASSIQUE</h4>
                            <h3>Simplicité à deux</h3>
                            <p>TAILLE : 25 - 30 m²</p>
                            <p>à partir de 465 € par nuit</p>
                        </div>
                        <div class="booking">
                            <a class="underline--magical" href="#">RÉSERVER</a>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="room-list col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12" data-roomtype="classique">
                <figure>
                    <img src="img/hotel/room/room-12.jpg" alt="">
                    <figcaption class="book-room">
                        <div class="book-name">
                            <h4>CHAMBRE : CLASSIQUE</h4>
                            <h3>Simplicité à quatre</h3>
                            <p>TAILLE : 25 - 30 m²</p>
                            <p>à partir de 465 € par nuit</p>
                        </div>
                        <div class="booking">
                            <a class="underline--magical" href="#">RÉSERVER</a>
                        </div>
                    </figcaption>
                </figure>
            </div>
        </div>
    </section>
</main>

<?php include ('footer.php'); ?>