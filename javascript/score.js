/*"use strict";

document.addEventListener("DOMContentLoaded", initialiser);


function initialiser(evt) {

    var questions  = document.getElementsByTagName();
    
    var derniereQuestion = document.getElementById("");
    
    var scoreGeneral = 0 ;
        
    for (var currentQuestion of questions) {
        currentQuestion.addEventListener("onclick", calculScore);
    }
    
    derniereQuestion.addEventListener("onclick", calculDernierScore);
    
}
*/



function calculScore(seconde, milliseconde, numeroQuestion) {

    var tempsCourant = seconde + (milliseconde/100);
    

    if (numeroQuestion == 7) {
        
        var tempsInitial = 10;
        var scoreMax = 40;

        var pourcent = Math.round((tempsCourant / tempsInitial) * 20) / 20;
        var scoreReponse = pourcent * scoreFinalMax;

    } else {

        var tempsInitaial = 20;
        var scoreMax = 20;

        var pourcent = Math.round((tempsCourant / tempsInitial) * 20) / 20;
        var scoreReponse = pourcent * scoreMax;
        
    }

    return scoreReponse;

}