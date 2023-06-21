
var navlinks = document.getElementById("navlinks");
navlinks.style.maxHeight = "0px";
navlinks.style.padding = "0";
function menutoggle() {
    if (navlinks.style.maxHeight == "0px") {
        navlinks.style.maxHeight = "27vh";
    }
    else {
        navlinks.style.maxHeight = "0px";
    }
}
var footer = document.getElementById('footer');
var footers = document.getElementById('footers');
var heads = document.getElementById("header");
var srvs = document.getElementById('services');
var service = document.getElementById('service');
var opensrvc = document.getElementById('opensrvc');
var hist = document.getElementById('hist');
var all = document.getElementById('all');
var click = document.getElementById('click');
var home = document.getElementById('home');
var customerss = document.getElementById('customerss');
var navi = document.getElementById("navi");
var chk = document.getElementById("chk");




//service active
window.addEventListener('scroll', function () {

    var position = srvs.getBoundingClientRect();

    // checking whether fully visible
    if (position.top < 100 && position.bottom <= window.innerHeight) {
        home.classList.remove("active");
        footers.classList.remove("active");
        service.classList.add("active");
        navi.style.backgroundColor= "black";
    }

    else {
        footers.classList.remove("active");
        service.classList.remove("active");
        home.classList.add("active");
        navi.style.background= "";

    }
    if (position.top <= -230 && position.bottom <= 500) {
        service.classList.remove("active");
        home.classList.remove("active");
        footers.classList.add("active");

    }
});






