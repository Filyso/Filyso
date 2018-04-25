(function () {
    "use strict";

    document.addEventListener("DOMContentLoaded", initialiser);

    function initialiser(evt) {
        var timecode1 = document.getElementById("minStart_1");

        timecode1.addEventListener("change", verifier);
    }

    function verifier(evt) {
        var timecode2 = document.getElementById("minEnd_2");

        this.setCustomValidity("");
        window.alert(this.value);
        if (this.value >= timecode2.value) {
            this.setCustomValidity("Le temps du début doit être inférieur au temps de fin.");
        }
    }

}());
