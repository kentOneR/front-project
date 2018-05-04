<?php include ('head.php'); ?>
<?php include ('navbar.php'); ?>
<?php include ('search-bar.php'); ?>
<main>
    <section class="all-room">
        <h1>Découvrez nos chambres</h1>
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
            <div class="room-list col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12" data-roomtype="confort">
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
            <div class="room-list col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12" data-roomtype="confort">
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

<footer>
    <form action="">
        <label for="newsletter-subscribe">Pour recevoir nos offres spéciales inscrivez-vous à la newsletter</label>
        <input type="email" name="newsletter-subscribe" placeholder="Votre adresse mail">
        <button class="button-visual" type="submit" data-hover="JE M'INSCRIS" data-active="JE M'INSCRIS">
            <span>INSCRIVEZ-VOUS</span>
        </button>
    </form>
    <ul class="footer-nav">
        <li class="footer-link">
            <a href="#">Accès</a>
        </li>
        <li class="footer-link">
            <a href="#">Contact</a>
        </li>
        <li class="footer-link">
            <a href="#">Recrutement</a>
        </li>
        <li class="footer-link">
            <a href="#">Mentions Légales</a>
        </li>
        <li class="footer-link">
            <a href="#">Conditions Générales de Vente</a>
        </li>
        <li class="footer-link">
            <a href="#">Plan du site</a>
        </li>
        <li>&#169; Parimis hôtel 2018 </li>
    </ul>
</footer>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.2/js/swiper.min.js"></script>
<script src="https://unpkg.com/js-datepicker"></script>
<script src="js/main.js"></script>
</body>

</html>