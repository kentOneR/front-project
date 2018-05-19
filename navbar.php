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
        <i id="close-user-login" class="fa fa-close"></i>
        <form class="modal-content" action="send-form.php">
            <div class="form-input">
                <label for="uname">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                </label>
                <input type="email" placeholder="Email" name="uname" required>
            </div>
            <div class="form-input">
                <label for="psw">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                </label>
                <input type="password" placeholder="Mot de passe" name="psw" required>
            </div>
            <div class="form-button">
                <button class="button-normal" type="submit" data-hover="SE CONNECTER" data-active="SE CONNECTER">
                    <span>SE CONNECTER</span>
                </button>
                <button class="button-normal" type="button" class="cancelbtn" data-hover="CREER UN COMPTE" data-active="CREER UN COMPTE">
                    <span>CREER UN COMPTE</span>
                </button>
            </div>
            <div class="form-link">
                <a href="#">Mot de passe oublié?</a>
            </div>
        </form>
    </div>
</div>
<div class="main-container">