require("bootstrap");
const Aos = require("aos");
const lozad = require("../lozad/lozad");
const observer = lozad(".lozad");

// Init the Lazy Loading observer
observer.observe();

// Init the AOS script
Aos.init();


