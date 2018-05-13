(function () {

    /*------------------------------------*\     
    ROOM THUMBNAIL OVERLAY
    \*------------------------------------*/

    // Exécute un appel AJAX GET
    // Prend en paramètres l'URL cible et la fonction callback appelée en cas de succès
    function ajaxGet(url, callback) {
        var req = new XMLHttpRequest();
        req.open("GET", url);
        req.addEventListener("load", function () {
            if (req.status >= 200 && req.status < 400) {
                // Appelle la fonction callback en lui passant la réponse de la requête
                callback(req.responseText);
            } else {
                console.error(req.status + " " + req.statusText + " " + url);
            }
        });
        req.addEventListener("error", function () {
            console.error("Erreur réseau avec l'URL " + url);
        });
        req.send(null);
    }

    var rooms;
    ajaxGet("data/room.json", function (reponse) {
        // Transforme la réponse en tableau d'objets JavaScript
        rooms = JSON.parse(reponse);
    });

    if (window.location.href.indexOf('booking') > -1) {

        var thumbOverlayEl = document.getElementById('overlay-thumbnail'),
            mainVisualElS = document.getElementsByClassName('main-visual');

        for(let i=0; mainVisualElS[i]; i++) {
            mainVisualElS[i].addEventListener('click', function(e){
                thumbOverlayEl.style.display = 'block';
                var imageList = rooms[i].image.big;
                console.log(imageList);

                
            });

        }

        thumbOverlayEl.addEventListener('click', function () {
            thumbOverlayEl.style.display = 'none';
        })
    }

})();