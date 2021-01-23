const { AOS } = require("../aos/aos");
const lozad = require("../lozad/lozad");

const observer = lozad(".lozad");

observer.observe();

AOS.init({ duration: 1200 });
