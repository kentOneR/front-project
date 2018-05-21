<?php include ('head.php'); ?>
<?php include ('navbar.php'); ?>
<?php include ('search-bar.php'); ?>
<main>

    <div class="parimis-contact">
        <h1>Nous contacter</h1>
        <div class="parimis-adress">
            <img src="img/asset/logo/parimis-logo-white.svg" alt="Logo Parimis Blanc">
            <p>1, avenue Montaigne
                <br>75008 Paris FRANCE
                <br>+33 (1) 49 55 30 00
                <br>
                <a href="mailto:contact@hotel-parimis.com">contact@hotel-parimis.com</a>
            </p>
        </div>
        <div id="map"></div>
    </div>
    <section class="form-container">
        <form action="">
            <label for="form-fname">Prénom</label>
            <input type="text" id="form-fname" name="firstname" placeholder="Votre prénom..." required>

            <label for="form-lname">Nom</label>
            <input type="text" id="form-lname" name="lastname" placeholder="Votre nom..." required>

            <label for="form-email">Email</label>
            <input type="email" id="form-email" name="form-email" placeholder="Votre email..." required>

            <label for="form-object">Object</label>
            <select id="form-object" name="object">
                <option value="info">Demande d'information</option>
                <option value="futur-booking">Réservation à venir</option>
                <option value="now-booking">Réservation en cours</option>
                <option value="old-booking">Réservation passée</option>
                <option value="recruitment">Recrutement</option>
                <option value="other">Autre</option>
            </select>

            <label for="form-subject">Message</label>
            <textarea id="form-subject" name="subject" placeholder="Votre message..." required></textarea>
            <label for="form-file">Fichier joint (zip, pdf) :</label>
            <input id="form-file" type="file" name="form-file">

            <button class="button-visual" type="submit" value="ENVOYER" data-hover="J'ENVOIE" data-active="J'ENVOIE">
                <span>ENVOYER</span>
            </button>
        </form>
    </section>
</main>
<?php include ('footer-map.php'); ?>