'use strict';

const d = document;
const header = document.querySelector(".header");

d.addEventListener("scroll", function () {
    if (window.scrollY !== 0) {
        header.style.position = "sticky";
    }
    else{        
        header.style.position = "absolute";
    }
});
