"use strict";



document.addEventListener("DOMContentLoaded", initialiser);



function initialiser(evt) {

    var box = document.getElementById("myModal");

    var button = document.getElementById("modalBoxButton");
    button.addEventListener("onclick", faireApparaitre)

    var span = document.getElementsByClassName("close")[0];
    span.addEventListener("onclick", faireDisparaitre)

}

function faireApparaitre (evt) {
    modal.style.display = "block";
}

function faireDisparaitre (evt) {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}