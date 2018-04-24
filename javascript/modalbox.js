document.addEventListener("DOMContentLoaded", initialiser);

var modal;

function initialiser(evt) {

    modal = document.getElementById("myModal");

    modal.style.visibility = "hidden";

    var btn = document.getElementById("myBtn");
    btn.addEventListener("click", faireApparaitre);

    var span = document.getElementsByClassName("close");
    span[0].addEventListener("click", faireDisparaitre);

}

function faireApparaitre(evt) {
    modal.style.visibility = "visible";
    modal.classList.add("is-open");
}

function faireDisparaitre(evt) {
    modal.classList.remove("is-open");
    modal.addEventListener("transitionend", function () {
        modal.style.visibility = "hidden";
    });
}