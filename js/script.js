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
		
new WOW().init();