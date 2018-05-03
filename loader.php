    <div id="loader">
        <img src="img/asset/loader.gif" alt="Loader">
    </div>
    <script>
        var loaderEl = document.getElementById('loader');
        loaderEl.classList.add('visible');

        document.addEventListener("DOMContentLoaded", function(event) {
        loaderEl.classList.add('slide-up-element');
        setTimeout(function(){ loaderEl.classList.replace('slide-up-element', 'hidden'); }, 550);
        });
    </script>