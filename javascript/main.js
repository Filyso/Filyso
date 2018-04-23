

document.addEventListener("DOMContentLoaded",initialiser);

function initialiser(evt){
    var gameButton = document.getElementById("gameButton");
    
    gameButton.addEventListener("click",displayGame);
    
}


function displayGame(evt){
    var game = document.getElementById("game");
    var score = document.getElementById("score");
    
    this.style.display = "none";
    game.style.display = "block";
    score.style.display = "block";
}