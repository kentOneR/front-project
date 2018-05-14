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
            mainVisualElS = document.getElementsByClassName('room-visual'),
            thumbCarousel = document.getElementById('thumbnail-wrapper');

        for(let i=0; mainVisualElS[i]; i++) {
            mainVisualElS[i].addEventListener('click', function(e){
                thumbOverlayEl.style.display = 'block';
                var imageList = rooms[i].image.big;
                for(let i=0; imageList[i]; i++){
                    console.log(imageList[i])
                    var img = imgCreate(imageList[i], 'alt')
                    thumbCarousel.appendChild(img);
                }
                mySwiper.init();
            });

        }

        thumbOverlayEl.addEventListener('click', function () {
            // thumbOverlayEl.style.display = 'none';
        })
    }

    // Création des images
    function imgCreate(src, alt) {
        var img = new Image();
        img.src = src;
        img.classList.add("swiper-slide");
        if ( alt != null ) img.alt = alt;
        return img;
    }

    // Configuration du Swiper
    var mySwiper = new Swiper('#thumbnail-carousel', {
        init: false,
        direction: 'horizontal',
        autoHeight: true,
        loop: true,
        speed: 1200,
        slidesPerView: 1,
        spaceBetween: 0,
        watchOverflow: true,
        autoplay: {
            delay: 6000
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        }
    });

})();