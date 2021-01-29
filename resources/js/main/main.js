import "particles.js/particles";

const bootstrap = require("bootstrap");
const Aos = require("aos");
const lozad = require("lozad");
const particles = window.particlesJS;

const observer = lozad(".lozad");

$("#slider").owlCarousel({
    margin: 15,
    autoWidth: false,
    nav: true,
    loop: true,
    items: 4,
    navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ]
});

$(".config-button").on("click", function(ev) {
    if ($(this).attr("state") === "OFF") {
        $(".config-panel").css({
            right: 0
        });
        $(this).attr("state", "ON");
    } else {
        $(".config-panel").css({
            right: -150
        });
        $(this).attr("state", "OFF");
    }
});

var navbar = document.querySelector(".nav");
var sticky = navbar.offsetTop;

function onScrollDocument() {
    if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky");
    } else {
        navbar.classList.remove("sticky");
    }
}

// Events
window.onscroll = function() {
    onScrollDocument();
};

// Init the Lazy Loading observer
observer.observe();

// Init the AOS script
Aos.init();

// Init Particles JS
particles.load("particles-js", "particles.json", function() {
    console.log("Particles Js Initialized");
});
