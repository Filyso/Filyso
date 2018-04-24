document.addEventListener("DOMContentLoaded", initialiser);

var modal;

function initialiser(evt) {
    modal = document.getElementById("myModal");
    
    
    var btn = document.getElementById("myBtn");
    myBtn.addEventListener("click", faireApparaitre);
    
    var span = document.getElementsByClassName("close");
    span.addEventListener("click", faireDisparaitre);

}

function faireApparaitre (evt) {
    modal.style.display = "block";
}


function faireDisparaitre (evt) {
    modal.style.display = "none";
}

/*
window.onclick = function () {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}*/