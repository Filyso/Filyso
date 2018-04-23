/*"use strict";

document.addEventListener("DOMContentLoaded", initialiser);


function initialiser(evt) {

    var questions  = document.getElementsByTagName();
    
    var derniereQuestion = document.getElementById("");
    
    var scoreGeneral = 0 ;
        
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
    
    var pourcent = Math.round((tempsCourant/tempsInitial)*20)/20 ;
    var scoreReponse = pourcent * scoreMax;
    return scoreReponse;
    
}

function calculDernierScore(time){
    
    var tempsCourant = this;
    
    var tempsInitial = 10;
    var scoreFinalMax = 40;
    
    var pourcent = Math.round((tempsCourant/tempsInitial)*20)/20 ;
    var scoreDerniereReponse = pourcent * scoreFinalMax;
    return scoreDerniereReponse;
    
}

