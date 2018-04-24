document.addEventListener("DOMContentLoaded",initialiser);
var encours;
var milli;
var timerMilli;
var timerSec;
var niv;


function initialiser(evt){
    
    timerStart();
    
    
    
    
    
    
}


function timerStart(niv){
    var timer = document.getElementById("timer");
    milli = 950;
    encours = setInterval(decrement,10);
}


function decrement(evt){
    var timer = document.getElementById("timer");

    milli = milli - 1;

    timerSec = Math.round(milli/100);
    
    timerMilli = milli - timerSec*100 + 50;
    
    if(timerSec>0){
       timer.textContent = ""+timerSec;
    }else{
        timer.textContent = ""+timerSec+"."+timerMilli;
    }
    
    if(timerSec<1 && timerMilli<1){
        clearInterval(encours);
    }
    
}

//function getHttpRequest = funcition