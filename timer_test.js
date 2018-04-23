


document.addEventListener("DOMContentLoaded",initialiser);
var encours;
var milli;
var timerMilli;
var timerSec;

function initialiser(evt){
    var timer = document.getElementById("timer");
    milli = 1950;
    
    
    encours = setInterval(decrement,10);
    
    
    
}


function decrement(evt){
    var timer = document.getElementById("timer");

    milli = milli - 1;

    timerSec = Math.round(milli/100);
    
    timerMilli = milli - timerSec*100 + 50;
    
        
    timer.textContent = ""+timerSec+"."+timerMilli;
    //timer.textContent = milli;
    
    if(timerSec<1 && timerMilli<1){
        clearInterval(encours);
    }
    
}