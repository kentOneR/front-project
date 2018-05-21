<?php include ('head.php'); ?>
<?php include ('navbar.php'); ?>
<?php include ('search-bar.php'); ?>
<main>
    <div class="content-container">
        <h1>Réservez la chambre de vos rêves</h1>
        <section class="room-wrapper">
            <div class="room-detail">
                <div class="room-visual">
                    <div class="main-visual">
                        <img src="img/hotel/room/0-luxury/01-luxury.jpg" room-name="luxury" alt="Intérieur chambre Luxury in Advance">
                    </div>
                    <div class="all-thumbnail">
                        <div class="room-thumbnail">
                            <img src="img/hotel/room/0-luxury/min/02-luxury-min.jpg" room-name="luxury" alt="Chambre Luxury">
                        </div>
                        <div class="room-thumbnail">
                            <img src="img/hotel/room/0-luxury/min/03-luxury-min.jpg" room-name="luxury" alt="Chambre Luxury">
                        </div>
                        <div class="room-thumbnail">
                            <img src="img/hotel/room/0-luxury/min/04-luxury-min.jpg" room-name="luxury" alt="Chambre Luxury">
                        </div>
                        <div class="room-thumbnail">
                            <img src="img/hotel/room/0-luxury/min/05-luxury-min.jpg" room-name="luxury" alt="Chambre Luxury">
                        </div>
                        <div class="room-thumbnail">
                            <img src="img/hotel/room/0-luxury/min/06-luxury-min.jpg" room-name="luxury" alt="Chambre Luxury">
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