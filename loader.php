    <div id="loader">
        <img src="img/asset/logo/parimis-logo-NB.svg" alt="Logo Parimis">
        <img class="loader-gif" src="img/asset/loader.gif" alt="Loader">
    </div>
    <script>
        var loaderEl = document.getElementById('loader');
        loaderEl.classList.add('visible');

        document.addEventListener("DOMContentLoaded", function(event) {
            setTimeout(() => {
                loaderEl.classList.add('slide-up-element');
                setTimeout(function(){ loaderEl.classList.add('hidden'); }, 500);
            }, 200);
        });
    </script>