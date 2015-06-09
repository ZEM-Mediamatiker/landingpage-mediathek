// Diese Funktion erlaubt es die Sprache umzuschalten, je nach dem in welchem Zustand
// (checked bzw. not checked) sich die Checkbox befindet und hängt den entsprechenden 
// Parameter der URL-Zeile hinzu und lädt die Seite damit neu. 
function toggle(cb) {
			if(cb.checked){
				window.location.search = "lang=fr";
			} else {
				window.location.search = "lang=de";
			}			
		}
			
		if(window.location.search == "?lang=fr"){
			document.getElementsByClassName("switch-input")[0].checked = true;
		}else{
			document.getElementsByClassName("switch-input")[0].checked = false;
		}

// Initialisiert das wow.js Plugin, welches Elemente beim "reinscrollen" in das Fenster
// mithilfe von Animate.css animiert. 
new WOW().init();