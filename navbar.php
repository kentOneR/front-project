<nav class="side-navbar">
    <div class="logo">
        <a href="index.php">
            <img src="img/asset/logo/parimis-logo-NB.svg" alt="Logo Parimis noir">
        </a>
    </div>
    <ul id="navbar-list" class="">
        <li>
            <a class="nav-link underline--magical" href="hotel.php">L'HÔTEL</a>
        </li>
        <li>
            <a class="nav-link underline--magical" href="chambre.php">CHAMBRES</a>
        </li>
        <li>
            <a class="nav-link underline--magical" href="restaurant.php">RESTAURANT</a>
        </li>
        <li>
            <a class="nav-link underline--magical" href="spa.php">SPA</a>
        </li>
        <li>
            <a class="nav-link underline--magical" href="booking.php">RÉSERVATION</a>
        </li>
        <li>
            <a class="nav-link underline--magical" href="actu.php">ACTUALITÉ</a>
        </li>
    </ul>
    <div class="select-lang">
        <div>
            <a href="">FR
            </a>
        </div>
        <div>
            <a href="">EN
            </a>
        </div>
    </div>
    <div class="connexion-user--button">
        <i class="fa fa-user"></i>
    </div>
    <div id="navbar-burger">
        <div class="burger-bar bar1"></div>
        <div class="burger-bar bar2"></div>
        <div class="burger-bar bar3"></div>
    </div>
</nav>
<div class="overlay-connexion">
    <div class="connexion-container">
        <form class="modal-content" action="send-form.php">
            <div class="container">
                <label for="uname">
                    <b>Email</b>
                </label>
                <input type="email" placeholder="Email" name="uname" required>

                <label for="psw">
                    <b>Mot de passe</b>
                </label>
                <input type="password" placeholder="Mot de passe" name="psw" required>

                <button type="submit">Se connecter</button>
            </div>

            <div class="container">
                <button type="button" class="cancelbtn">Annuler</button>
                <span class="psw">
                    <a href="#">Mot de passe oublié?</a>
                </span>
                <span class="psw">
                    <a href="#">Créer un compte</a>
                </span>
            </div>
        </form>
    </div>
</div>
<div class="main-container">