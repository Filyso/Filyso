document.addEventListener("DOMContentLoaded", initialiser);

var modal;

function initialiser(evt) {

    modal = document.getElementById("myModal");

    var btn = document.getElementById("myBtn");
    btn.addEventListener("click", faireApparaitre);

    var span = document.getElementsByClassName("close");
    span[0].addEventListener("click", faireDisparaitre);

}


function faireApparaitre (evt) {
    modal.style.display = "block";
}

/*function faireApparaitre(evt) {
    console.log("test");

    if (modal.classList.contains("is-paused")) {
        modal.classList.remove("is-paused");
    }
}*/

function faireDisparaitre (evt) {
    modal.style.display = "none";
}


window.onclick = function () {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

window.onload = function () {
    modal.style.display = "block";
}

