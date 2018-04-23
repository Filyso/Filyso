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

function temps(duree){
    
    var ... ;
    
    s = this;
    
    if(s<0){
         ... .innerHTML="fin<br />";
    }else{
        if(s<10){
            s="0"+s;
        }
    }
    
    
    
}

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

