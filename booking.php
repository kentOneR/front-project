<?php include ('head.php'); ?>
<?php include ('navbar.php'); ?>
<section class="booking-step">
    <div class="select-room active">
        <p>
            <span class="number">1</span>
            <span>Sélectionner la chambre et les dates</span>

        </p>
    </div>
    <div class="pay-room">
        <p>
            <span class="number">2</span>
            <span>Renseignement carte de crédit</span>

        </p>
    </div>
    <div class="book-confirm">
        <p>
            <span class="number">3</span>
            <span>Confirmation</span>
        </p>
    </div>
</section>
<main>
    <div class="content-container search-container">
        <h1>Réservez la chambre de vos rêves</h1>
        <aside class="search-block">
            <form class="form-container" action="search-room.php">
                <div class="form-row">
                    <label for="arrival-date">Date d'arrivée :</label>
                    <input id="first-date-picker" name="arrival-date" type="text">
                </div>
                <div class="form-row">
                    <label for="departure-date">Date de départ :</label>
                    <input id="second-date-picker" name="depature-date" type="text">
                </div>
                <div id="select-invite" class="form-row">
                    <span>Qui participe au séjour :</span>
                    <div class="invite-wrapper">
                        <div class="select-adult">
                            <span>Adulte (+12 ans)</span>
                            <select>
                                <option value="1" selected>1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                        <div class="select-child">
                            <span>Enfant</span>
                            <select>
                                <option value="1" selected>0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <label for="room-type">Type de chambre :</label>
                    <select name="room-type">
                        <option value="all">Toutes</option>
                        <option value="classic">Classique</option>
                        <option value="confort">Confort</option>
                        <option value="deluxe">Deluxe</option>
                        <option value="suite">Suite</option>
                    </select>
                </div>
                <button id="check-number-invite" class="button-visual form-row" data-hover="JE RÉSERVE" data-active="JE RÉSERVE">
                    <span>RÉSERVER</span>
                </button>
            </form>
        </aside>
        <section class="room-result">
            <div class="room-detail">
                <div class="room-visual">
                    <div class="main-visual">
                        <img src="img/hotel/room/0-luxury/01-luxury.jpg" alt="Intérieur chambre Luxury in Advance">
                    </div>
                    <div class="all-thumbnail">
                        <div class="room-thumbnail">
                            <img src="img/hotel/room/0-luxury/min/02-luxury-min.jpg" alt="Chambre Luxury">
                        </div>
                        <div class="room-thumbnail">
                            <img src="img/hotel/room/0-luxury/min/03-luxury-min.jpg" alt="Chambre Luxury">
                        </div>
                        <div class="room-thumbnail">
                            <img src="img/hotel/room/0-luxury/min/04-luxury-min.jpg" alt="Chambre Luxury">
                        </div>
                        <div class="room-thumbnail">
                            <img src="img/hotel/room/0-luxury/min/05-luxury-min.jpg" alt="Chambre Luxury">
                        </div>
                        <div class="room-thumbnail">
                            <img src="img/hotel/room/0-luxury/min/06-luxury-min.jpg" alt="Chambre Luxury">
                        </div>
                    </div>
                </div>
                <div class="room-content">
                    <h4>CHAMBRE : LUXE</h4>
                    <h3>Luxury in Advance</h3>
                    <p>TAILLE : 35 - 40 m²</p>
                    <p>à partir de 765 € par nuit</p>
                    <p>Conçues pour des voyageurs modernes en quête de confort absolu, ces chambres font partie des plus spacieuses
                        de Paris et sont équipées d’une technologie de pointe.</p>
                    <div class="star-ratings-sprite">
                        <span style="width:87%" class="star-ratings-sprite-rating"></span>
                    </div>
                    <div class="booking">
                        <a class="underline--magical" href="#">RÉSERVER</a>
                    </div>
                </div>
            </div>
            <div class="room-detail">
                <div class="room-visual">
                    <div class="main-visual">
                        <img src="img/hotel/room/1-royale/01-royale.jpg" alt="Chambre Suite Royale">
                    </div>
                    <div class="all-thumbnail">
                        <div class="room-thumbnail">
                            <img src="img/hotel/room/1-royale/min/02-royale-min.jpg" alt="Chambre Suite Royale">
                        </div>
                        <div class="room-thumbnail">
                            <img src="img/hotel/room/1-royale/min/03-royale-min.jpg" alt="Chambre Suite Royale">
                        </div>
                        <div class="room-thumbnail">
                            <img src="img/hotel/room/1-royale/min/04-royale-min.jpg" alt="Chambre Suite Royale">
                        </div>
                        <div class="room-thumbnail">
                            <img src="img/hotel/room/1-royale/min/05-royale-min.jpg" alt="Chambre Suite Royale">
                        </div>
                        <div class="room-thumbnail">
                            <img src="img/hotel/room/1-royale/min/06-royale-min.jpg" alt="Chambre Suite Royale">
                        </div>
                    </div>
                </div>
                <div class="room-content">
                    <h4>CHAMBRE : Suite</h4>
                    <h3>Suite Royale</h3>
                    <p>TAILLE : 35 - 40 m²</p>
                    <p>à partir de 765 € par nuit</p>
                    <p>Conçues pour des voyageurs modernes en quête de confort absolu, ces chambres font partie des plus spacieuses
                        de Paris et sont équipées d’une technologie de pointe.</p>
                    <div class="star-ratings-sprite">
                        <span style="width:87%" class="star-ratings-sprite-rating"></span>
                    </div>
                    <div class="booking">
                        <a class="underline--magical" href="#">RÉSERVER</a>
                    </div>
                </div>
            </div>
            <div class="room-detail">
                <div class="room-visual">
                    <div class="main-visual">
                        <img src="img/hotel/room/2-rooftop/01-rooftop.jpg" alt="Terrasse chambre Rooftop Garden">
                    </div>
                    <div class="all-thumbnail">
                        <div class="room-thumbnail">
                            <img src="img/hotel/room/2-rooftop/min/02-rooftop-min.jpg" alt="Chambre Rooftop">
                        </div>
                        <div class="room-thumbnail">
                            <img src="img/hotel/room/2-rooftop/min/03-rooftop-min.jpg" alt="Chambre Rooftop">
                        </div>
                        <div class="room-thumbnail">
                            <img src="img/hotel/room/2-rooftop/min/04-rooftop-min.jpg" alt="Chambre Rooftop">
                        </div>
                        <div class="room-thumbnail">
                            <img src="img/hotel/room/2-rooftop/min/05-rooftop-min.jpg" alt="Chambre Rooftop">
                        </div>
                        <div class="room-thumbnail">
                            <img src="img/hotel/room/2-rooftop/min/06-rooftop-min.jpg" alt="Chambre Rooftop">
                        </div>
                    </div>
                </div>
                <div class="room-content">
                    <h4>CHAMBRE : DELUXE</h4>
                    <h3>Rooftop Garden</h3>
                    <p>TAILLE : 35 - 40 m²</p>
                    <p>à partir de 765 € par nuit</p>
                    <p>Conçues pour des voyageurs modernes en quête de confort absolu, ces chambres font partie des plus spacieuses
                        de Paris et sont équipées d’une technologie de pointe.</p>
                    <div class="star-ratings-sprite">
                        <span style="width:87%" class="star-ratings-sprite-rating"></span>
                    </div>
                    <div class="booking">
                        <a class="underline--magical" href="#">RÉSERVER</a>
                    </div>
                </div>
            </div>
        </section>
    </div>

</main>
<div id="overlay-thumbnail">
    <i id="close-thumnail" class="fa fa-close"></i>
    <!-- Slider main container -->
    <div id="thumbnail-carousel">
        <!-- Additional required wrapper -->
        <div id="thumbnail-wrapper" class="swiper-wrapper">

        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</div>
<?php include ('footer.php'); ?>