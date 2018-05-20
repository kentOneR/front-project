(function() {
  // First we check if you support touch, otherwise it's click:
  var touchEvent = "ontouchstart" in window ? "touchstart" : "click";
  /*------------------------------------*\     
    ROOM THUMBNAIL OVERLAY
    \*------------------------------------*/

  // Exécute un appel AJAX GET
  // Prend en paramètres l'URL cible et la fonction callback appelée en cas de succès
  ("use strict");
  function ajaxGet(url, callback) {
    var req = new XMLHttpRequest();
    req.open("GET", url);
    req.addEventListener("load", function() {
      if (req.status >= 200 && req.status < 400) {
        // Appelle la fonction callback en lui passant la réponse de la requête
        callback(req.responseText);
      } else {
        console.error(req.status + " " + req.statusText + " " + url);
      }
    });
    req.addEventListener("error", function() {
      console.error("Erreur réseau avec l'URL " + url);
    });
    req.send(null);
  }

  var rooms;
  ajaxGet("data/room.json", function(reponse) {
    // Transforme la réponse en tableau d'objets JavaScript
    rooms = JSON.parse(reponse);
  });

  // Création des images
  function imgCreate(src, alt) {
    var img = new Image();
    img.src = src;
    img.classList.add("swiper-slide");
    if (alt != null) {
      img.alt = alt;
    }
    return img;
  }

  // Configuration du Swiper
  var thumbSwiper;
  function initThumbSwiper() {
    thumbSwiper = new Swiper("#thumbnail-carousel", {
      init: false,
      direction: "horizontal",
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
        el: ".swiper-pagination",
        clickable: true
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
      }
    });
    thumbSwiper.init();
  }

  if (window.location.href.indexOf("booking") > -1) {
    var thumbOverlayEl = document.getElementById("overlay-thumbnail"),
      mainVisualEls = document.getElementsByClassName("room-visual"),
      thumbCarousel = document.getElementById("thumbnail-wrapper"),
      thumbCarouselPagination = document.getElementsByClassName(
        "swiper-pagination"
      ),
      closeThumbCarousel = document.getElementById("close-thumnail");

    for (var i = 0; mainVisualEls[i]; i++) {
      mainVisualEls[i].addEventListener(touchEvent, function(e) {
        roomName = e.target.getAttribute("room-name");
        roomTitle = rooms[roomName].title,
        imageList = rooms[roomName].image.big;
        for (var y = 0; imageList[y]; y++) {
          var img = imgCreate(imageList[y], roomTitle);
          thumbCarousel.appendChild(img);
        }
        initThumbSwiper();
        thumbOverlayEl.style.display = "block";
      });
    }

    thumbOverlayEl.addEventListener(touchEvent, function(e) {
      if (e.target === thumbOverlayEl || e.target === closeThumbCarousel) {
        thumbOverlayEl.style.display = "none";
        while (thumbCarousel.firstChild) {
          thumbCarousel.removeChild(thumbCarousel.firstChild);
        }
        while (thumbCarouselPagination[0].firstChild) {
          thumbCarouselPagination[0].removeChild(
            thumbCarouselPagination[0].firstChild
          );
        }
        if (thumbSwiper !== undefined) {
          thumbSwiper.destroy(false, true);
        }
      }
    });
  }
})();
