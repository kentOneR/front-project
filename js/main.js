(function() {

    /*------------------------------------*\     
    SWIPER ROOMS
    \*------------------------------------*/ 
    var mySwiper = new Swiper ('.swiper-container', {
        direction: 'horizontal',
        loop: true,
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
                slidesPerView: 5,
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
        formatter: function(el, date) {
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
        formatter: function(el, date) {
            el.value = date.toLocaleDateString("fr-FR");
        },
        customMonths: ['Jan', 'Fev', 'Mar', 'Avr', 'Mai', 'Jui', 'Jui', 'Aou', 'Sep', 'Oct', 'Nov', 'Dec'],
        customDays: ['D', 'L', 'M', 'M', 'J', 'V', 'S']
    });
 
 })();
