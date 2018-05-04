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