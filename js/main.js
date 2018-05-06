(function () {

    /*------------------------------------*\     
    NAVBAR BURGER
    \*------------------------------------*/

    var burgerEls = document.getElementsByClassName('burger-bar'),
        navBurgerEl = document.getElementById('navbar-burger'),
        navlistEl = document.getElementById('navbar-list');
    navBurgerEl.addEventListener('click', function () {
        for (i = 0; burgerEls[i]; i++) {
            burgerEls[i].classList.toggle("change");
        }
        navlistEl.classList.toggle("visible");
    });

    /*------------------------------------*\     
    NAVBAR ACTIVE LINK
    \*------------------------------------*/

    function setActiveLink() {
        var navLinkEls = document.querySelectorAll('.nav-link');
        for (i = 0; navLinkEls[i]; i++) {
            if (document.location.href.indexOf(navLinkEls[i].href) >= 0) {
                navLinkEls[i].classList.add('active');
            }
        }
    }
    setActiveLink();

    /*------------------------------------*\     
    SEARCH BAR
    \*------------------------------------*/

    var searchBarEl = document.querySelector('.search-bar');
    if (window.location.href.indexOf('index') > -1) {
        searchBarEl.classList.add('on-home');
    }


    /*------------------------------------*\     
    HOME SWIPER
    \*------------------------------------*/
    var mySwiper = new Swiper('.swiper-container', {
        direction: 'horizontal',
        loop: true,
        slidesPerView: 4,
        spaceBetween: 60,
        speed: 400,
        autoplay: {
            delay: 3500,
        },
        autoHeight: true,
        navigation: {
            nextEl: '.swiper-button-next'
        },
        breakpoints: {
            1920: {
                slidesPerView: 4,
                spaceBetween: 60
            },
            1440: {
                slidesPerView: 4,
                spaceBetween: 50
            },
            1240: {
                slidesPerView: 3,
                spaceBetween: 40
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 30
            },
            560: {
                slidesPerView: 1,
                spaceBetween: 30
            }
        }
    });

    /*------------------------------------*\     
    ROOM SWIPER
    \*------------------------------------*/
    var mySwiper = new Swiper('.swiper-room-container', {
        direction: 'horizontal',
        autoHeight: true,
        loop: true,
        speed: 1200,
        slidesPerView: 1,
        spaceBetween: 0,
        autoplay: {
            delay: 6000
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true
        }
    });

    /*------------------------------------*\     
    DATE PICKER
    \*------------------------------------*/
    var today = new Date(),
        tomorrow = new Date(new Date().setDate(new Date().getDate() + 1));
    const firstPicker = datepicker('#first-date-picker',
        {
            dateSelected: today,
            minDate: today,
            startDay: 1,
            formatter: function (el, date) {
                el.value = date.toLocaleDateString("fr-FR");
            },
            customMonths: ['Jan', 'Fev', 'Mar', 'Avr', 'Mai', 'Jui', 'Jui', 'Aou', 'Sep', 'Oct', 'Nov', 'Dec'],
            customDays: ['D', 'L', 'M', 'M', 'J', 'V', 'S']
        });

    const secondPicker = datepicker('#second-date-picker',
        {
            dateSelected: tomorrow,
            minDate: tomorrow,
            startDay: 1,
            formatter: function (el, date) {
                el.value = date.toLocaleDateString("fr-FR");
            },
            customMonths: ['Jan', 'Fev', 'Mar', 'Avr', 'Mai', 'Jui', 'Jui', 'Aou', 'Sep', 'Oct', 'Nov', 'Dec'],
            customDays: ['D', 'L', 'M', 'M', 'J', 'V', 'S']
        });


    /*------------------------------------*\     
    SEARCH-BAR DROPDOWN
    \*------------------------------------*/

    var selectContainerInvEl = document.getElementById('select-invite'),
        selectInvEl = document.getElementById('who-invite'),
        InvDropdownEl = document.getElementById('dropdown-invite'),
        buttonInvEl = document.getElementById('check-invite'),
        buttonNbrInvEl = document.getElementById('check-number-invite');

    // window.addEventListener('click', function (e) {
    //     e.preventDefault();
    //     if (e.target == selectInvEl) {
    //         InvDropdownEl.classList.toggle("visible");
    //     } else if (e.target == InvDropdownEl || e.target == buttonInvEl) {
    //         InvDropdownEl.classList.add("visible");
    //     }
    //     else {
    //         InvDropdownEl.classList.remove("visible");
    //     }
    // });

    selectInvEl.addEventListener('click', function () {
        InvDropdownEl.classList.toggle("visible");
    });

    buttonInvEl.addEventListener('click', function () {
        InvDropdownEl.classList.remove("visible");
    });

    buttonNbrInvEl.addEventListener('click', function () {
        InvDropdownEl.classList.remove("visible");
    });


    /*------------------------------------*\     
    FADE-IN EFFECT
    \*------------------------------------*/

    function animateHTML() {
        var elems,
            windowHeight;
        function init() {
            elems = document.getElementsByClassName('fade-el');
            windowHeight = window.innerHeight;
            checkPosition();
            addEventHandlers();
        }
        function addEventHandlers() {
            window.addEventListener('scroll', checkPosition);
            window.addEventListener('resize', init);
        }
        function checkPosition() {
            for (var i = 0; elems[i]; i++) {
                var posFromTop = elems[i].getBoundingClientRect().top;
                if (posFromTop - windowHeight <= 0) {
                    elems[i].className = elems[i].className.replace('fade-el', 'fade-in-element');
                }
            }
        }
        return {
            init: init
        }
    }
    animateHTML().init();


    /*------------------------------------*\     
    ROOM TOGGLE
    \*------------------------------------*/

    if (window.location.href.indexOf('chambre') > -1) {
        var filter = document.querySelectorAll('.filters > li');
        var roomList = document.querySelectorAll(".room-list");
        for (var i = 0; filter[i]; i++) {
            filter[i].addEventListener('click', function (e) {
                var roomType = e.target.getAttribute("data-roomtype");
                for (var i = 0; roomList[i]; i++) {
                    var roomListType = roomList[i].getAttribute("data-roomtype");
                    if (roomType != "all") {
                        if (roomListType == roomType) {
                            roomList[i].style.display = 'block';
                        } else {
                            roomList[i].style.display = 'none';
                        }
                    } else {
                        roomList[i].style.display = 'block';
                    }
                }

            })
        }
    }

    /*------------------------------------*\     
    SCROLL TOP
    \*------------------------------------*/
    var scrollTopEl = document.getElementById('scroll-top');

    function showScrollTop() {
        if (document.body.scrollTop > 1000 || document.documentElement.scrollTop > 1000) {
            scrollTopEl.style.display = "block";
            scrollTopEl.style.opacity = 0.5;
        } else {
            scrollTopEl.style.display = "none";
        }
    }
    window.onscroll = function () { showScrollTop() };

    function scrollTo (to, duration) {
        var element = document.scrollingElement || document.documentElement,
            start = element.scrollTop,
            change = to - start,
            startDate = +new Date(),
            // t = current time
            // b = start value
            // c = change in value
            // d = duration
            easeInOutQuad = function (t, b, c, d) {
                t /= d / 2;
                if (t < 1) return c / 2 * t * t + b;
                t--;
                return -c / 2 * (t * (t - 2) - 1) + b;
            },
            animateScroll = function () {
                const currentDate = +new Date();
                const currentTime = currentDate - startDate;
                element.scrollTop = parseInt(easeInOutQuad(currentTime, start, change, duration));
                if (currentTime < duration) {
                    requestAnimationFrame(animateScroll);
                }
                else {
                    element.scrollTop = to;
                }
            };
        animateScroll();
    };

    scrollTopEl.addEventListener('click', () => {
        scrollTo(0, 800);
    });

})();

/*------------------------------------*\     
Google Map API
\*------------------------------------*/

function initMap() {
    // Styles a map in night mode.
    var map = new google.maps.Map(document.getElementById('map'), {
        center: { lat: 48.865847, lng: 2.301569 },
        zoom: 16,
        styles: [
            {
                "featureType": "administrative",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#444444"
                    }
                ]
            },
            {
                "featureType": "landscape",
                "elementType": "all",
                "stylers": [
                    {
                        "color": "#9faeb3"
                    }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "all",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "road",
                "elementType": "all",
                "stylers": [
                    {
                        "saturation": -100
                    },
                    {
                        "lightness": 45
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "all",
                "stylers": [
                    {
                        "visibility": "simplified"
                    }
                ]
            },
            {
                "featureType": "road.arterial",
                "elementType": "labels.icon",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "transit",
                "elementType": "all",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "all",
                "stylers": [
                    {
                        "color": "#46bcec"
                    },
                    {
                        "visibility": "on"
                    }
                ]
            }
        ]
    });
    var marker = new google.maps.Marker({
        position: { lat: 48.865847, lng: 2.301569 },
        map: map,
        title: 'Parimis Hôtel'
    });
}

