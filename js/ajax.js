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

    ajaxGet("data/room.json", function (reponse) {
        // Transforme la réponse en tableau d'objets JavaScript
        var rooms = JSON.parse(reponse);
        for(var i in rooms) {
            console.log(rooms[i]);
            console.log(rooms[i].title);
            console.log(rooms[i].image.big);
        }

    });

    if (window.location.href.indexOf('booking') > -1) {

        var thumbOverlayEl = document.getElementById('overlay-thumbnail'),
            mainVisualEl = document.getElementById('first-visual-room');

        mainVisualEl.addEventListener('click', function (e) {
            thumbOverlayEl.style.display = 'block';
        })

        thumbOverlayEl.addEventListener('click', function () {
            thumbOverlayEl.style.display = 'none';
        })
    }

})();