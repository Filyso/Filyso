document.addEventListener("DOMContentLoaded",initialiser);
var encours;
var milli;
var timerMilli;
var timerSec;
var niv;
var score = 0;
var numQuest = 0;
var stopTimerBool = false;
var reps;
var stateChangeTamponMemory = new Array();
var verifMemory = false;
var timeOut = false;

var musique1 = new Musique("Basique","Orelsan","2bjk26RwjyU",58,72,"Les mecs les plus fous sont souvent","les mecs les plus tristes","les hommes les plus tristes","les types les plus activistes","les mecs les plus alcoolique");

var musique2 = new Musique("Nothing Else Matters","Metallica","tAGnKpE4NCI",120,134,"Never cared for what they do","Never cared for what they know","Never cared for what they show","Never cared for what they say","Never cared for games they play");

var musique3 = new Musique("The Diary of Jane","Breaking Benjamin","DWaB4PXCwFU",58,67,"I will try to find my place","In the diary of Jane","In the diarrhea of Jane","In the diary of John","In the paper of Jane");

var musique4 = new Musique("The Final Countdown","Europe","9jK-NcRmVcw",103,117,"Will things ever be the same again ?","It's the final countdown","That’s the final countdown","It’s the ultimate countdown","It's the final breakdown");

var musique5 = new Musique("Je l’aime à mourir","Francis Cabrel","wQW1rnRrPx4",78,100,"Je dois clouer des notes à mes sabots de bois, je l'aime à mourir","Je dois juste m'asseoir, je ne dois pas parler","Je veux juste m'asseoir, je ne dois pas péter","Je dois juste boire, je ne dois pas danser","Je ne dois juste pas voir, je ne dois pas penser");

var musique6 = new Musique("Les Lacs du Connemara","Michel Sardou","bpEmjxobvbY",172,182,"Colorent la terre, les lacs, les rivières","C'est le décor du Connemara","C'est le port du Contémaran","C’est pas l’or de mon papa","C'est l’essor du Condemala");

var musique7 = new Musique("Take On Me","a-ha","djV11Xbc914",35,58,"Take on me,","Take me on","Take on me","Take on you","Take you on");

var tabMusique = new Array(musique1,musique2,musique3,musique4,musique5,musique6,musique7);
melangeMusique();






// Load the IFrame Player API code asynchronously.
var tag = document.createElement('script');
tag.src = "https://www.youtube.com/player_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
// Replace the 'ytplayer' element with an <iframe> and
// YouTube player after the API code downloads.
var player;


function onYouTubePlayerAPIReady() {
    
    player = new YT.Player('ytplayer', {
        height: '360',
        width: '640',
        videoId: tabMusique[numQuest].url,
        // PARAMETRES DU LECTEUR
        playerVars: {
                'autoplay' : 1, /* lance la vidéo automatiquement */
                'controls' : 0, /* cache l'interférence controles */
                'disabledkb' : 1, /* empeche l'utilisation des controles */
                'iv_load_policy' : 3, /* supprime les annotations */
                'rel' : 0, /* Le lecteur n'affiche pas de vidéo similaire à la fin */
                'showinfo' : 0, /* n'affiche pas les infos de la vidéo */
                'start' : tabMusique[numQuest].timeCodeStart, /* seconde début */
                'end' : tabMusique[numQuest].timeCodeEnd /* seconde fin */
        },
        events: {
            'onStateChange' : swap
        }
        
    });
    
}
function swap(evt){
    stateChangeTamponMemory.push(evt.data);
    for(var z = 0;z<stateChangeTamponMemory.length;z++){
        if (stateChangeTamponMemory[z] == 3){
            verifMemory = true;
            
        }
    }
    /*if(evt.data == YT.PlayerState.PAUSE){
        this.playVideo();
    }*/
    if(evt.data == YT.PlayerState.ENDED && verifMemory){
        stateChangeTamponMemory = [];
        verifMemory = false;
        document.getElementById("ytplayer").style.display = "none"; 
        
        document.getElementsByClassName("contenu")[0].style.display = "block";
        timerStart();
        document.getElementById("numQuestion").textContent="Question n° "+(numQuest+1);
        document.getElementById("phraseACompleter").textContent=tabMusique[numQuest].quest;

        reps = document.querySelectorAll(".reponses input");
        
        reps[0].value=tabMusique[numQuest].reponse;
        reps[1].value=tabMusique[numQuest].false1;
        reps[2].value=tabMusique[numQuest].false2;
        reps[3].value=tabMusique[numQuest].false3;
        
        if(numQuest < 2){
            reps[2].style.display = "none";
            reps[3].style.display = "none";
        }else if(numQuest < 4){
            reps[2].style.display = "block";
            reps[2].style.margin="auto";
            reps[2].style.marginTop="120px";
            reps[3].style.display = "none";     
        }else if(numQuest < 7){
            reps[2].style.margin="10px";
            reps[3].style.display = "block"; 
        }
        for(var rep of reps){
            rep.addEventListener("click",verfierReps);
        }
    }
   
}
function verfierReps(evt){
    //window.addEventListener("click",stopProp,true);
    for(var rep of reps){
            rep.removeEventListener("click",verfierReps);
    }
    if(!timeOut){
        if(this.value==tabMusique[numQuest].reponse){
            this.style.backgroundColor="#3df22d";
            stopTimer();
            score = score + (1/7);
            document.getElementsByClassName("barScore")[0].style.height=Math.round(score*100)+"%";
        }else{
            stopTimer();
            this.style.backgroundColor="red";
        }
    }else{
        document.getElementsByClassName("divTimer")[0].style.borderColor="red";
    }
    
    if(numQuest < 7){
        setTimeout(function(){
                numQuest = numQuest + 1;
                document.getElementsByClassName("contenu")[0].style.display = "none";
                document.getElementById("ytplayer").style.display = "block";

                player.loadVideoById(
                    {
                        videoId:tabMusique[numQuest].url,
                        startSeconds:tabMusique[numQuest].timeCodeStart,
                        endSeconds:tabMusique[numQuest].timeCodeEnd,}
                );
                player.playVideo();
                reps[0].style.backgroundColor="#784199";
                reps[1].style.backgroundColor="#784199";
                reps[2].style.backgroundColor="#784199";
                reps[3].style.backgroundColor="#784199";
                //player.addEventListener("onStateChange",swap);
                //window.removeEventListener("click",stopProp);
        },2000);
    }else{
        document.getElementById("ytplayer").style.display = "none";
    }
    
}
function stopProp(evt){
    evt.stopPropagation();
}
function initialiser(evt){
    document.getElementsByClassName("barScore")[0].style.height=0+"%";
    
}


function timerStart(niv){
    milli = 1050;
    encours = setInterval(decrement,10);
    stopTimerBool = false;
    timeOut = false;
    document.getElementsByClassName("divTimer")[0].style.borderColor="#4cd1cb";
}
function stopTimer(){
    stopTimerBool = true;
}

function decrement(evt){
    var timer = document.getElementById("timer");
    if(!stopTimerBool){
        milli = milli - 1;
    }else{
        clearInterval(encours);
    }
    timerSec = Math.round(milli/100);
    
    timerMilli = milli - timerSec*100 + 50;
    
    if(timerSec>0){
       timer.textContent = ""+timerSec;
    }else{
        timer.textContent = ""+timerSec+"."+timerMilli;
    }
    
    if(timerSec<1 && timerMilli<1){
        clearInterval(encours);
        if(timer.textContent ="0.0"){
            timeOut = true;
            verfierReps();
        }
    }
    
    
}

function melangeMusique(){
    for(var position=tabMusique.length-1; position>=1; position--){
	
	//hasard reçoit un nombre entier aléatoire entre 0 et position
	var hasard=Math.floor(Math.random()*(position+1));
	
	//Echange
	var sauve=tabMusique[position];
	tabMusique[position]=tabMusique[hasard];
	tabMusique[hasard]=sauve;
    }
}

// Classe musique


function Musique(nom,nomAutheur,url,timeCodeStart,timeCodeEnd,quest,reponse,false1,false2,false3){
    this.nom = nom;
    this.nomAutheur = nomAutheur;
    this.url = url;
    this.timeCodeStart = timeCodeStart;
    this.timeCodeEnd = timeCodeEnd;
    this.quest = quest;
    this.reponse = reponse;
    this.false1 = false1;
    this.false2 = false2;
    this.false3 = false3;
}