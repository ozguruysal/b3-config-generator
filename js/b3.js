// Tooltip functions

$(function() {
$("#b3 :input").tooltip({

	// place tooltip on the right edge
	position: "center right",

	// a little tweaking of the position
	offset: [-2, 20],

	// custom opacity setting
	opacity: 0.8

	});
});

// Hide/Show form fields
$(document).ready(function(){
	$("#game_log").change(function(){
		if ($(this).val() == "local" ) {
			$("#hide1").slideDown("fast"); //Slide Down Effect (Game Log Local Path)
		} else {
			$("#hide1").slideUp("fast");	//Slide Up Effect (Game Log Local Path)
		}
		if ($(this).val() == "ftp" ) {
			$("#hide2").slideDown("fast"); //Slide Down Effect (Game Log FTP Info)
		} else {
			$("#hide2").slideUp("fast");	//Slide Up Effect (Game Log FTP Info)
		}
	});

	$("#autodoc").change(function(){
		if ($(this).val() == "locala" ) {
			$("#hide3").slideDown("fast"); //Slide Down Effect (Autodoc Local Path)
		} else {
			$("#hide3").slideUp("fast");	//Slide Up Effect (Autodoc Local Path)
		}
		if ($(this).val() == "ftpa" ) {
			$("#hide4").slideDown("fast"); //Slide Down Effect (Autodoc FTP Info)
		} else {
			$("#hide4").slideUp("fast");	//Slide Up Effect (Autodoc FTP Info)
		}
	});

	$("#parser").change(function(){
		if ($(this).val() == "bfbc2" || $(this).val() == "moh") {
			$("#hide5").slideDown("fast"); //Slide Down Effect (BFBC2/MOH Specific Settings)
		} else {
			$("#hide5").slideUp("fast");	//Slide Up Effect (BFBC2/MOH Specific Settings)
		}
	});

	$("#parser").change(function(){
		if ($(this).val() == "bfbc2" || $(this).val() == "moh") {
			$("#hide6").slideDown("fast"); //Slide Down Effect (Rcon Port & Timeout)
			$("#hide9").slideUp("fast");	//Slide Up Effect (Stats Plugin)
			$("#hide1").slideUp("fast");	//Slide Up Effect (Game Log Local Path)
			$("#hide2").slideUp("fast");	//Slide Up Effect (FTP Information)
			if ($(this).val() == "bfbc2" || $(this).val() == "moh")
				$("#hide7").slideUp("fast");	//Slide Up Effect (Game Log File Selection)
				$("#hide8").slideUp("fast");	//Slide Up Effect (Team Kill Plugin)
				$("#hide10").slideUp("fast");	//Slide Up Effect (Punkbuster Plugin)
		} else {
			$("#hide6").slideUp("fast");	//Slide Up Effect (Rcon Port & Timeout)
			if ($(this).val() == "0" || $(this).val() == "cod7") {
				$("#hide7").slideUp("fast");	//Slide Up Effect (Game Log File Selection)
			} else {
				$("#hide7").slideDown("fast"); //Slide Down Effect (Game Log File Selection)
			}
			$("#hide8").slideDown("fast"); //Slide Down Effect (Team Kill Plugin)
			$("#hide9").slideDown("fast"); //Slide Down Effect (Stats Plugin)
			$("#hide10").slideDown("fast"); //Slide Down Effect (Punkbuster Plugin)
		}
	});
	
	$("#parser").change(function(){
		if ($(this).val() == "cod7") {
			$("#hide11").slideDown("fast"); //Slide Down Effect (Game Log URL)
			$("#hide1").slideUp("fast");	//Slide Up Effect (Game Log Local Path)
			$("#hide2").slideUp("fast");	//Slide Up Effect (FTP Information)
			$("#hide8").slideUp("fast");	//Slide Up Effect (Team Kill Plugin)
			$("#hide10").slideUp("fast");	//Slide Up Effect (Punkbuster Plugin)
		} else {
			$("#hide11").slideUp("fast");	//Slide Up Effect (Game Log URL)
		}
	});
});