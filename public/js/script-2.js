ymaps.ready(init);
function init() {
    var myMap = new ymaps.Map("map", {
            center: [43.207480, 76.668506],
            zoom: 15
        })
        myMap.geoObjects
        .add(new ymaps.Placemark([43.207480, 76.668506], {
            balloonContent: '8777-888-77-77', // baskanda
              iconCaption: 'GoFreestyle - Academy of freestyle football', // markerde
              hintContent: 'Main' // myshka aparganda podskazka

        }, {
            preset: 'islands#redHomeIcon', //
            iconColor: 'red' // clor of marker
        }))
        .add(new ymaps.Placemark([43.206340, 76.668798], {
            balloonContent: '8727-232-26-77',
              iconCaption: 'Stadium',
              hintContent: 'Second'

        }, {
            preset: 'islands#blueDotIcon',
            iconColor: 'blue'
        }))
        .add(new ymaps.Placemark([43.208872, 76.670000], {
            balloonContent: '8727-272-90-00',
            iconCaption: 'University',
            hintContent: 'Third'
        }, {
            preset: 'islands#greenDotIcon',
            iconColor: 'green',
        }));
////////////////////////////////////////////////////////////////////
        var myGeoObject = new ymaps.GeoObject({
            geometry: {
                type: "LineString",
                coordinates: [
                    [43.208872, 76.670000],
                    [43.207480, 76.668506],
                    [43.206409, 76.668812],
                ]
            },
            properties:{
                hintContent: "Distance between points",
                balloonContent: "201m"
            }
        }, {
            draggable: true,
            strokeColor: "#34626c",
            strokeWidth: 4,
            strokeStyle: 'shortdash'
        });

        myMap.geoObjects
        .add(myGeoObject)
}

AOS.init({
    // Global settings:
    disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
    startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
    initClassName: 'aos-init', // class applied after initialization
    animatedClassName: 'aos-animate', // class applied on animation
    useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
    disableMutationObserver: false, // disables automatic mutations' detections (advanced)
    debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
    throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)


    // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
    offset: 120, // offset (in px) from the original trigger point
    delay: 0, // values from 0 to 3000, with step 50ms
    duration: 1000, // values from 0 to 3000, with step 50ms
    easing: 'ease', // default easing for AOS animations
    once: false, // whether animation should happen only once - while scrolling down
    mirror: false, // whether elements should animate out while scrolling past them
    anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

});