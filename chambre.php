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
        <h1>Nos offres spéciales</h1>
        <div class="room-swiper">
            <div class="swiper-room-container">
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <figure>
                            <img src="img/hotel/room/big/room-1.jpg" alt="">
                            <figcaption class="book-room">
                                <div class="book-name">
                                    <h4>CHAMBRE : SUITE</h4>
                                    <h3>Luxury In Advance</h3>
                                    <p>Conçues pour des voyageurs modernes en quête de confort absolu, ces chambres font partie
                                        des plus spacieuses de Paris et sont équipées d’une technologie de pointe.</p>
                                </div>
                                <div class="booking">
                                    <a class="underline--magical" href="#">EN SAVOIR +</a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <img src="img/hotel/room/big/room-2.jpg" alt="">
                            <figcaption class="book-room">
                                <div class="book-name">
                                    <h4>CHAMBRE : DELUXE</h4>
                                    <h3>Rooftop Garden</h3>
                                    <p>Conçues pour des voyageurs modernes en quête de confort absolu, ces chambres font partie
                                        des plus spacieuses de Paris et sont équipées d’une technologie de pointe.</p>
                                </div>
                                <div class="booking">
                                    <a class="underline--magical" href="#">EN SAVOIR +</a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <img src="img/hotel/room/big/room-2.jpg" alt="">
                            <figcaption class="book-room">
                                <div class="book-name">
                                    <h4>CHAMBRE : SUITE</h4>
                                    <h3>Suite Royale</h3>
                                    <p>Conçues pour des voyageurs modernes en quête de confort absolu, ces chambres font partie
                                        des plus spacieuses de Paris et sont équipées d’une technologie de pointe.</p>
                                </div>
                                <div class="booking">
                                    <a class="underline--magical" href="#">EN SAVOIR +</a>
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
            <div class="room-list col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12" data-roomtype="suite">
                <figure>
                    <img src="img/hotel/room/room-1.jpg" alt="">
                    <figcaption class="book-room">
                        <div class="book-name">
                            <h4>CHAMBRE : SUITE</h4>
                            <h3>Luxury In Advance</h3>
                        </div>
                        <div class="booking">
                            <a class="underline--magical" href="#">EN SAVOIR +</a>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="room-list col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12" data-roomtype="suite">
                <figure>
                    <img src="img/hotel/room/room-2.jpg" alt="">
                    <figcaption class="book-room">
                        <div class="book-name">
                            <h4>CHAMBRE : SUITE</h4>
                            <h3>Suite Royale</h3>
                        </div>
                        <div class="booking">
                            <a class="underline--magical" href="#">EN SAVOIR +</a>
                        </div>
                    </figcaption>
                </figure>
                </figure>
            </div>
            <div class="room-list col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12" data-roomtype="deluxe">
                <figure>
                    <img src="img/hotel/room/room-4.jpg" alt="">
                    <figcaption class="book-room">
                        <div class="book-name">
                            <h4>CHAMBRE : DELUXE</h4>
                            <h3>Rooftop Garden</h3>
                        </div>
                        <div class="booking">
                            <a class="underline--magical" href="#">EN SAVOIR +</a>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="room-list col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12" data-roomtype="confort">
                <figure>
                    <img src="img/hotel/room/room-6.jpg" alt="">
                    <figcaption class="book-room">
                        <div class="book-name">
                            <h4>CHAMBRE : CONFORT</h4>
                            <h3>Escape Suite</h3>
                        </div>
                        <div class="booking">
                            <a class="underline--magical" href="#">EN SAVOIR +</a>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="room-list col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12" data-roomtype="confort">
                <figure>
                    <img src="img/hotel/room/room-9.jpg" alt="">
                    <figcaption class="book-room">
                        <div class="book-name">
                            <h4>CHAMBRE : CONFORT</h4>
                            <h3>Nuit et jour</h3>
                        </div>
                        <div class="booking">
                            <a class="underline--magical" href="#">EN SAVOIR +</a>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="room-list col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12" data-roomtype="confort">
                <figure>
                    <img src="img/hotel/room/room-10.jpg" alt="">
                    <figcaption class="book-room">
                        <div class="book-name">
                            <h4>CHAMBRE : CONFORT</h4>
                            <h3>Plaisir partagé</h3>
                        </div>
                        <div class="booking">
                            <a class="underline--magical" href="#">EN SAVOIR +</a>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="room-list col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12" data-roomtype="classique">
                <figure>
                    <img src="img/hotel/room/room-11.jpg" alt="">
                    <figcaption class="book-room">
                        <div class="book-name">
                            <h4>CHAMBRE : CLASSIQUE</h4>
                            <h3>Simplicité à deux</h3>
                        </div>
                        <div class="booking">
                            <a class="underline--magical" href="#">EN SAVOIR +</a>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="room-list col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12" data-roomtype="classique">
                <figure>
                    <img src="img/hotel/room/room-12.jpg" alt="">
                    <figcaption class="book-room">
                        <div class="book-name">
                            <h4>CHAMBRE : CLASSIQUE</h4>
                            <h3>Simplicité à quatre</h3>
                        </div>
                        <div class="booking">
                            <a class="underline--magical" href="#">EN SAVOIR +</a>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="room-list col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12" data-roomtype="suite">
                <figure>
                    <img src="img/hotel/room/room-1.jpg" alt="">
                    <figcaption class="book-room">
                        <div class="book-name">
                            <h4>CHAMBRE : SUITE</h4>
                            <h3>Luxury In Advance</h3>
                        </div>
                        <div class="booking">
                            <a class="underline--magical" href="#">EN SAVOIR +</a>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="room-list col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12" data-roomtype="suite">
                <figure>
                    <img src="img/hotel/room/room-2.jpg" alt="">
                    <figcaption class="book-room">
                        <div class="book-name">
                            <h4>CHAMBRE : SUITE</h4>
                            <h3>Suite Royale</h3>
                        </div>
                        <div class="booking">
                            <a class="underline--magical" href="#">EN SAVOIR +</a>
                        </div>
                    </figcaption>
                </figure>
                </figure>
            </div>
            <div class="room-list col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12" data-roomtype="deluxe">
                <figure>
                    <img src="img/hotel/room/room-4.jpg" alt="">
                    <figcaption class="book-room">
                        <div class="book-name">
                            <h4>CHAMBRE : DELUXE</h4>
                            <h3>Rooftop Garden</h3>
                        </div>
                        <div class="booking">
                            <a class="underline--magical" href="#">EN SAVOIR +</a>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="room-list col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12" data-roomtype="confort">
                <figure>
                    <img src="img/hotel/room/room-6.jpg" alt="">
                    <figcaption class="book-room">
                        <div class="book-name">
                            <h4>CHAMBRE : CONFORT</h4>
                            <h3>Escape Suite</h3>
                        </div>
                        <div class="booking">
                            <a class="underline--magical" href="#">EN SAVOIR +</a>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="room-list col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12" data-roomtype="confort">
                <figure>
                    <img src="img/hotel/room/room-9.jpg" alt="">
                    <figcaption class="book-room">
                        <div class="book-name">
                            <h4>CHAMBRE : CONFORT</h4>
                            <h3>Nuit et jour</h3>
                        </div>
                        <div class="booking">
                            <a class="underline--magical" href="#">EN SAVOIR +</a>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="room-list col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12" data-roomtype="confort">
                <figure>
                    <img src="img/hotel/room/room-10.jpg" alt="">
                    <figcaption class="book-room">
                        <div class="book-name">
                            <h4>CHAMBRE : CONFORT</h4>
                            <h3>Plaisir partagé</h3>
                        </div>
                        <div class="booking">
                            <a class="underline--magical" href="#">EN SAVOIR +</a>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="room-list col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12" data-roomtype="classique">
                <figure>
                    <img src="img/hotel/room/room-11.jpg" alt="">
                    <figcaption class="book-room">
                        <div class="book-name">
                            <h4>CHAMBRE : CLASSIQUE</h4>
                            <h3>Simplicité à deux</h3>
                        </div>
                        <div class="booking">
                            <a class="underline--magical" href="#">EN SAVOIR +</a>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="room-list col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12" data-roomtype="classique">
                <figure>
                    <img src="img/hotel/room/room-12.jpg" alt="">
                    <figcaption class="book-room">
                        <div class="book-name">
                            <h4>CHAMBRE : CLASSIQUE</h4>
                            <h3>Simplicité à quatre</h3>
                        </div>
                        <div class="booking">
                            <a class="underline--magical" href="#">EN SAVOIR +</a>
                        </div>
                    </figcaption>
                </figure>
            </div>
        </div>
    </section>
</main>

<?php include ('footer.php'); ?>