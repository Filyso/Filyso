/*"use strict";

document.addEventListener("DOMContentLoaded", initialiser);


function initialiser(evt) {

    var questions  = document.getElementsByTagName(); <--???????-->
    
    var derniereQuestion = document.getElementById("");
        
    for (var currentQuestion of questions) {
        currentQuestion.addEventListener("onload", calculScore);
    }
    
    derniereQuestion.addEventListener("onload", calculDernierScore);
    
}
*/

function calculScore(time){
    
    var tempsCourant = this;
    var tempsInitial = 10;
    var scoreMax = 20;
    
    var pourcent = Math.round((tempsCourant/tempsInitial)*10)/10 ;
    var scoreReponse = pourcent * scoreMax;
    
}

function calculDernierScore(time){
    var tempsCourant = this;
    var tempsInitial = 10;
    var scoreMax = 40;
    
    var pourcent = Math.round((tempsCourant/tempsInitial)*10)/10 ;
    var scoreReponse = pourcent * scoreMax;
    
}

