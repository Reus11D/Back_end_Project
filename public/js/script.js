function load() {
    $('#f1').animate({ opacity: '1' }, "400");
    $('#f2').animate({ opacity: '1' }, "400");
    $('#about').animate({ opacity: '1' }, "400");
    // //   var a = document.getElementById('id_menu');
    //   document.querySelector(".menu").style.display = "none";
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// function open_submit(){
//   document.querySelector(".contact").style.display = "flex";
// }
// function close_submit(){
//   document.querySelector(".contact").style.display = "none";
// /////////////////////////////////////////////////////////////////////////////////////////////////////
function over_1() {
    document.querySelector("#i1").style.opacity = '0.7';
    document.querySelector(".rating_round_1").style.border = 'none';
    document.querySelector("#i1").style.width = '150px';
    document.querySelector("#i1").style.height = '150px';
    $('#i1').animate({ opacity: '1' }, "slow");
}
function out_1() {
    document.querySelector("#i1").style.width = '110px';
    document.querySelector("#i1").style.height = '110px';
    document.querySelector("#i1").style.opacity = '1';
    document.querySelector(".rating_round_1").style.border = '2px solid red';
}

function over_2() {
    document.querySelector("#i2").style.opacity = '0.7';
    document.querySelector(".rating_round_2").style.border = 'none';
    document.querySelector("#i2").style.width = '150px';
    document.querySelector("#i2").style.height = '150px';
    document.querySelector("#round_2").style.width = '150px';
   // document.querySelector("#round_2").style.height = '';
    $('#i2').animate({ opacity: '1' }, "slow");
}
function out_2() {
    document.querySelector("#i2").style.width = '110px';
    document.querySelector("#i2").style.height = '110px';
    document.querySelector("#i2").style.opacity = '1';
    document.querySelector("#round_2").style.width = '113px';
    document.querySelector(".rating_round_2").style.border = '2px solid red';
}

function over_3() {
    document.querySelector("#i3").style.opacity = '0.7';
    document.querySelector(".rating_round_3").style.border = 'none';
    document.querySelector("#i3").style.width = '150px';
    document.querySelector("#i3").style.height = '150px';
    $('#i3').animate({ opacity: '1' }, "slow");
}
function out_3() {
    document.querySelector("#i3").style.width = '110px';
    document.querySelector("#i3").style.height = '110px';
    document.querySelector("#i3").style.opacity = '1';
    document.querySelector(".rating_round_3").style.border = '2px solid red';
}

function over_4() {
    document.querySelector("#i4").style.opacity = '0.7';
    document.querySelector(".rating_round_4").style.border = 'none';
    document.querySelector("#i4").style.width = '150px';
    document.querySelector("#i4").style.height = '150px';
    document.querySelector("#round_4").style.width = '150px';
    $('#i4').animate({ opacity: '1' }, "slow");
}
function out_4() {
    document.querySelector("#i4").style.width = '110px';
    document.querySelector("#i4").style.height = '110px';
    document.querySelector("#i4").style.opacity = '1';
    document.querySelector("#round_4").style.width = '113px';
    document.querySelector(".rating_round_4").style.border = '2px solid red';
}

function over_5() {
    document.querySelector("#i5").style.opacity = '0.7';
    document.querySelector(".rating_round_5").style.border = 'none';
    document.querySelector("#i5").style.width = '150px';
    document.querySelector("#i5").style.height = '150px';
    document.querySelector("#round_5").style.width = '150px';
    $('#i5').animate({ opacity: '1' }, "slow");
}
function out_5() {
    document.querySelector("#i5").style.width = '110px';
    document.querySelector("#i5").style.height = '110px';
    document.querySelector("#i5").style.opacity = '1';
    document.querySelector("#round_5").style.width = '113px';
    document.querySelector(".rating_round_5").style.border = '2px solid red';
}

function over_6() {
    document.querySelector("#i6").style.opacity = '0.7';
    document.querySelector(".rating_round_6").style.border = 'none';
    document.querySelector("#i6").style.width = '150px';
    document.querySelector("#i6").style.height = '150px';
    document.querySelector("#round_6").style.width = '150px';
    $('#i6').animate({ opacity: '1' }, "slow");
}
function out_6() {
    document.querySelector("#i6").style.width = '110px';
    document.querySelector("#i6").style.height = '110px';
    document.querySelector("#i6").style.opacity = '1';
    document.querySelector("#round_6").style.width = '113px';
    document.querySelector(".rating_round_6").style.border = '2px solid red';
}

const anchors = document.querySelectorAll('a[href*="#"]')

for (let anchor of anchors) {
    anchor.addEventListener("click", function (event) {
        event.preventDefault();
        const blockID = anchor.getAttribute('href')
        document.querySelector('' + blockID).scrollIntoView({
            behavior: "smooth",
            block: "start"
        })
    })
}
function insta_over() {
    document.querySelector("#insta").style.width = '30px';
    document.querySelector("#insta").style.height = '30px';
}
function insta_out() {
    document.querySelector("#insta").style.width = '25px';
    document.querySelector("#insta").style.height = '25px';
}
function vk_over() {
    document.querySelector("#vk").style.width = '30px';
    document.querySelector("#vk").style.height = '30px';
}
function vk_out() {
    document.querySelector("#vk").style.width = '25px';
    document.querySelector("#vk").style.height = '25px';
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