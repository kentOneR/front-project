(function () {

    /*------------------------------------*\     
    SWIPER ROOMS
    \*------------------------------------*/
    var mySwiper = new Swiper('.swiper-container', {
        direction: 'horizontal',
        loop: true,
        speed: 400,
        autoplay: {
            delay: 20000,
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

    // NAVBAR BURGER

    var burgerEls = document.getElementsByClassName('burger-bar'),
        navBurgerEl = document.getElementById('navbar-burger'),
        navlistEl = document.getElementById('navbar-list');
    navBurgerEl.addEventListener('click', function () {
        for (i = 0; burgerEls[i]; i++) {
            burgerEls[i].classList.toggle("change");
        }
        navlistEl.classList.toggle("visible");
    });

    // SEARCH-BAR DROPDOWN

    var selectContainerInvEl = document.getElementById('select-invite'),
        selectInvEl = document.getElementById('who-invite'),
        InvDropdownEl = document.getElementById('dropdown-invite'),
        buttonInvEl = document.getElementById('check-invite'),
        buttonNbrInvEl = document.getElementById('check-number-invite');

    // window.addEventListener('click', function (e) {
    //     e.stopPropagation();
    //     if (e.target == selectContainerInvEl) {
    //         InvDropdownEl.classList.add("visible");
    //     } else {
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

    // FADE-IN EFFECT

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


})();
