<?php include ('head.php'); ?>
<?php include ('navbar.php'); ?>
<?php include ('search-bar.php'); ?>
<main>
    <div class="content-container room-detail-container">
        <h1>Réservez la chambre de vos rêves</h1>
        <section class="room-wrapper">
            <div class="room-detail">
                <div id="room-luxury-carousel">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <img class="swiper-slide" src="img/hotel/room/0-luxury/01-luxury.jpg" room-name="luxury" alt="Intérieur chambre Luxury in Advance">
                        <img class="swiper-slide" src="img/hotel/room/0-luxury/02-luxury.jpg" room-name="luxury" alt="Chambre Luxury">
                        <img class="swiper-slide" src="img/hotel/room/0-luxury/03-luxury.jpg" room-name="luxury" alt="Chambre Luxury">
                        <img class="swiper-slide" src="img/hotel/room/0-luxury/04-luxury.jpg" room-name="luxury" alt="Chambre Luxury">
                        <img class="swiper-slide" src="img/hotel/room/0-luxury/05-luxury.jpg" room-name="luxury" alt="Chambre Luxury">
                        <img class="swiper-slide" src="img/hotel/room/0-luxury/06-luxury.jpg" room-name="luxury" alt="Chambre Luxury">
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
                <div class="room-content">
                    <h4>CHAMBRE : LUXE</h4>
                    <h3>Luxury in Advance</h3>
                    <p>TAILLE : 35 - 40 m²</p>
                    <p>à partir de 765 € par nuit</p>
                    <p>Conçues pour des voyageurs modernes en quête de confort absolu, ces chambres font partie des plus spacieuses
                        de Paris et sont équipées d’une technologie de pointe.</p>
                    <br>
                    <p>Pouvant accueillir jusqu’à deux personnes, les chambres supérieures sont composées d'un lit King Size
                        ou d'un lit Queen Size et d'une salle de bain en marbre.</p>
                    <div class="room-rating">
                        <div class="star-ratings-sprite">
                            <span style="width:92%" class="star-ratings-sprite-rating"></span>
                        </div>
                        <a href="">(28 avis)</a>
                    </div>
                    <div class="booking">
                        <a class="underline--magical" href="#">RÉSERVER</a>
                    </div>
                </div>
            </div>
            <div class="room-more-info">
                <ul class="room-list-toggle">
                    <li class="room-list-cat active" room-cat="detail">Détail</li>
                    <li class="room-list-cat" room-cat="map">Plan</li>
                    <li class="room-list-cat" room-cat="review">Avis</li>
                </ul>
                <div class="room-info-detail active" room-cat="detail">
                    <p>Les influences parisiennes s’allient à une technologie de pointe et à un style contemporain dans les
                        chambres supérieures au design parfait, dans des tons gris et crème. Pouvant accueillir jusqu’à deux
                        personnes, les chambres supérieures sont composées d'un lit King Size ou d'un lit Queen Size et d'une
                        salle de bain en marbre. Parmi les fonctionnalités numériques et interactives de pointe proposées
                        par l'établissement, vous bénéficierez notamment de l’accès à Internet sans fil, des appels VOIP
                        longue distance et d’un séchoir à ongles.</p>
                    <p>SUPERFICIE 35 - 40 m² / 322 - 376 sq ft</p>
                    <p>LITS lit king ou queen</p>
                    <p>CAPACITÉ 2 Personnes</p>
                    <p>L'EMPLACEMENT Du 1er au 5ème étage</p>
                    <p>Vue Cour intérieure</p>
                </div>
                <div class="room-info-detail" room-cat="map">
                    <img src="img/hotel/room/0-luxury/map/room-luxury-map.jpg" alt="Plan de la chambre Luxury">
                </div>
                <div class="room-info-detail" room-cat="review">
                    <div class="review-wrapper">
                        <div class="star-ratings-sprite">
                            <span style="width:92%" class="star-ratings-sprite-rating"></span>
                        </div>
                        <p class="author">John SMITH</p>
                        <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant
                            impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500...</p>
                        <p>
                            <span>il y a 1 semaine</span>
                        </p>
                    </div>
                    <div class="review-wrapper">
                        <div class="star-ratings-sprite">
                            <span style="width:92%" class="star-ratings-sprite-rating"></span>
                        </div>
                        <p class="author">John SMITH</p>
                        <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant
                            impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500...</p>
                        <p>
                            <span>il y a 1 semaine</span>
                        </p>
                    </div>
                    <div class="review-wrapper">
                        <div class="star-ratings-sprite">
                            <span style="width:92%" class="star-ratings-sprite-rating"></span>
                        </div>
                        <p class="author">John SMITH</p>
                        <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant
                            impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500...</p>
                        <p>
                            <span>il y a 1 semaine</span>
                        </p>
                    </div>
                    <div class="review-wrapper">
                        <div class="star-ratings-sprite">
                            <span style="width:92%" class="star-ratings-sprite-rating"></span>
                        </div>
                        <p class="author">John SMITH</p>
                        <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant
                            impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500...</p>
                        <p>
                            <span>il y a 1 semaine</span>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>

</main>
<?php include ('footer.php'); ?>