<?php include ('head.php'); ?>
<?php include ('navbar.php'); ?>
<?php include ('search-bar.php'); ?>
<main>
    <section class="section-left">
        <img src="img/hotel/hotel-stairs.jpg" alt="Escalier l'hôtel Parimis">
        <div>
            <h1>Parimis, un savoir-faire
                <br>unique et d'exception</h1>
            <p>Situé au cœur de Paris, le
                <strong>Parimis Hôtel</strong> se distingue par sa décoration intérieure et
                <stron>sa cuisine renommé</stron> signé par un grand chef. Notre hôtel est
                <strong>la quinctessence du luxe et de l'élégance</strong>. Vous apprécierez de flâner à deux pas des Champs-Élysées,de
                prolonger votre promenade à pied jusqu’à l’
                <strong>Arc de Triomphe</strong>. A deux pas de la Seine, vous effectuez quelques enjambées pour découvrir la
                <strong>Tour Eiffel</strong>, le long des quais de Paris</p>
            <p>Nous tenons fortement à notre clientèle et c'est pourquoi le
                <strong>Parimis Hôtel</strong> met tout en oeuvre pour subvenir à vos besoins, que ce soit via ses chambres, son
                restaurant ou du spa et de ses soins. Toute l'équipe du
                <strong>Parimis Hôtel</strong> vous aidera à rendre votre séjour inoubliable.</p>
        </div>
    </section>
    <section class="section-right">
        <div class="carrousel-simple">
            <img class="no-bckg" src="img/hotel/histo/no-bckg.png" alt="Fond transparent">
            <img class="slide-1" src="img/hotel/histo/parimis-sky.jpg" alt="L'hôtel Parimis vu du ciel">
            <img class="slide-2" src="img/hotel/histo/hotel-heritage.jpg" alt="Archive de l'hôtel Parimis, 1952">
            <img class="slide-3" src="img/hotel/histo/hotel-dance.jpg" alt="Galla de dance à l'hôtel Parimis, 1952">
        </div>
        <div class="pos-relative">
            <h1>Parimis, une histoire ancrée
                <br>entre luxe et tradition</h1>
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
    <section class="parimis-event">
        <h1>Des évènements majestueux
            <br>à l'ambiance contemporaine</h1>
        <div class="all-video-container">
            <div class="col-sm-12 col-lg-6 col-xl-3">
                <div class="video-container">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/_mtIU2l6Nqk" frameborder="0" allow="autoplay; encrypted-media"
                        allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6 col-xl-3">
                <div class="video-container">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/_mtIU2l6Nqk" frameborder="0" allow="autoplay; encrypted-media"
                        allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6 col-xl-3">
                <div class="video-container">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/_mtIU2l6Nqk" frameborder="0" allow="autoplay; encrypted-media"
                        allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6 col-xl-3">
                <div class="video-container">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/_mtIU2l6Nqk" frameborder="0" allow="autoplay; encrypted-media"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
    <section class="parimis-press">
        <h1>La presse parle du Parimis</h1>
    </section>
    <section class="parimis-contact">
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
    </section>
    <section class="form-container">
        <form action="">
            <label for="fname">Prénom</label>
            <input type="text" id="form-fname" name="firstname" placeholder="Votre prénom...">

            <label for="lname">Nom</label>
            <input type="text" id="form-lname" name="lastname" placeholder="Votre nom...">

            <label for="object">Object</label>
            <select id="form-object" name="object">
                <option value="info">Demande d'information</option>
                <option value="futur-booking">Réservation à venir</option>
                <option value="now-booking">Réservation en cours</option>
                <option value="old-booking">Réservation passée</option>
                <option value="recruitment">Recrutement</option>
                <option value="other">Autre</option>
            </select>

            <label for="subject">Message</label>
            <textarea id="form-subject" name="subject" placeholder="Votre message..."></textarea>
            <label for="form-file">Fichier joint (zip, pdf) :</label>
            <input id="form-file" type="file" name="form-file">

            <button class="button-visual" type="submit" value="ENVOYER" data-hover="J'ENVOIE" data-active="J'ENVOIE">
                <span>ENVOYER</span>
            </button>
        </form>
    </section>
</main>
<?php include ('footer.php'); ?>