document.addEventListener("DOMContentLoaded", initialiser);


function initialiser(evt) {
    
    var btn = document.getElementById("myBtn");
    myBtn.addEventListener("onclick", faireApparaitre);

    var modal = document.getElementById("myModal");

    
    var span = document.getElementsByClassName("close")[0];

}

function faireApparaitre (evt) {
    console.log(modal);
    modal.style.display = "block";
}


function faireDisparaitre (evt) {
    modal.style.display = "none";
}


window.onclick = function () {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}