document.addEventListener("DOMContentLoaded",initialiser);

function initialiser(evt) {
    document.getElementById("addTCBtn").addEventListener("click", addTC);
}

function addTC(evt) {
    var tcFieldset = document.querySelector("fieldset");
    var cloneTcFieldset = tcFieldset.cloneNode(true);
    var nbFieldsetInput = document.getElementById("nbTimecode");
    
    // Augmentation du nombre de timecode
    nbFieldsetInput.value = parseInt(nbFieldsetInput.value) + 1;
    
    // Modification des paramètres du clone
    var inputsClone = cloneTcFieldset.querySelectorAll("input");
    for(var currentInput of inputsClone) {
        currentInput.id = currentInput.id + "_" + nbFieldsetInput.value;
        currentInput.name = currentInput.name + "_" + nbFieldsetInput.value;
    }
    var labelsClone = cloneTcFieldset.querySelectorAll("label");
    for(var currentLabel of labelsClone) {
        currentLabel.setAttribute("for", currentLabel.getAttribute("for") + "_" + nbFieldsetInput.value);
    }
    
    // Insertion du nouveau formulaire de timecode dans le DOM
    document.getElementById("addSongForm").insertBefore(cloneTcFieldset,this.parentNode);
}