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
        <aside class="search-block col-xl-3">
            <form action="">
                <div class="form-row">
                    <label for="arrival-date">Date d'arrivée :</label>
                    <input id="first-date-picker" name="arrival-date" type="text">
                </div>
                <div class="form-row">
                    <label for="departure-date">Date de départ :</label>
                    <input id="second-date-picker" name="depature-date" type="text">
                </div>
                <div id="select-invite" class="form-row">
                    <span>Qui participe au séjour &#8595;</span>
                    <div>
                        <div>
                            <span>Adulte (+12 ans)</span>
                            <select>
                                <option value="1" selected>1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                        <div>
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
        <section class="room-result col-xl-9">
            <div class="room-detail">
                <img src="img/hotel/room/big/room-1.jpg" alt="Intérieur chambre Luxury in Advance">
            </div>
            <div class="room-detail">
                <img src="img/hotel/room/big/room-2.jpg" alt="Terrasse chambre Rooftop Garden">
            </div>
            <div class="room-detail">
                <img src="img/hotel/room/big/room-3.jpg" alt="Intérieur chambre Suite Royale">
            </div>
        </section>
    </div>

</main>
<?php include ('footer.php'); ?>