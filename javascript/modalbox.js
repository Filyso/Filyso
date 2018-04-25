(function () {
    "use strict";
    document.addEventListener("DOMContentLoaded", initialiser);

    var modal;

    function initialiser(evt) {

        modal = document.querySelector(".modal");

        modal.style.visibility = "hidden";
        var btn = document.getElementById("myBtn");
        btn.addEventListener("click", show);
    }

    function show(evt) {
        modal.style.visibility = "visible";
        modal.classList.toggle("is-open");
        
        var span = document.getElementsByClassName("close");
        span[0].addEventListener("click", hide);
    }

    function hide(evt) {
        modal.classList.toggle("is-open");
        modal.addEventListener("transitionend", cacher);
    }

    function cacher(evt) {
        modal.removeEventListener("transitionend",cacher);
        modal.style.visibility = "hidden";
    }
}());