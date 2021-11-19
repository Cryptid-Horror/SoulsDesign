var total = 0
var breakdown = [];
var text = "";
var tempbonus = 0;
var delim = " + ";

jQuery(document).ready(function($){
	//If soft refresh, reset properly
	if (window.performance) {
		if (performance.navigation.type  === 1 ){
			reset();
		}
	}
	//Always calculate
	$("#mpcount input").change(function() {
		calculate();
	});
	setup();
});

function calculate() {
	
	text = "";
	tempbonus = 0;
	total = 0;
	breakdown = [];
	
	if ((($("#personal").is(":checked")) || ($("#nonpersonal").is(":checked")))) {
		
		if ($("#personal").is(":checked")) {
			text = "<b>Free rolls do not gain any points.</b>";
			log();
		}
		
		if ($("#nonpersonal").is(":checked")) {
			text = "<b>Entry rolls gain points.</b>";
			log();
		}
		
		if ($("#dailyquests").is(":checked")) {
			tempbonus = 10;
			text = "Daily Activities or Questing";
			log();
		}
		
		if ($("#combat").is(":checked")) {
			tempbonus = 10;
			text = "Arena and Grand Hunt";
			log();
		}
		
		if ($("#vortex").is(":checked")) {
			tempbonus = 10;
			text = "Vortex";
			log();
		}
		
		if ($("#events").is(":checked")) {
			tempbonus = 15;
			text = "Events (annual and Story)";
			log();
		}
		
		if ($("#rites").is(":checked")) {
			tempbonus = 10;
			text = "Rites (nesting, taming, aether, etc)";
			log();
		}
		
		if ($("#healing").is(":checked")) {
			tempbonus = 10;
			text = "Healing Shrine Entry";
			log();
		}
		
		if ($("#extradragon1").is(":checked")) {
			tempbonus = 2;
			text = "Extra Dragon (1)";
			log();
		}

        if ($("#extradragon2").is(":checked")) {
			tempbonus = 2;
			text = "Extra Dragon (2)";
			log();
		}

        if ($("#extradragon3").is(":checked")) {
			tempbonus = 2;
			text = "Extra Dragon (3)";
			log();
		}
		
        if ($("#extradragon4").is(":checked")) {
			tempbonus = 2;
			text = "Extra Dragon (4)";
			log();
		}

		if ($("#shadingsimple").is(":checked")) {
			  tempbonus = 3;
			  text ="Shading - Simple";
			  log();
		}
		
		if ($("#shadingcomplex").is(":checked")) {
			tempbonus = 5;
			text = "Shading Complex";
			log();
		}
		
		if ($("#comp").is(":checked")) {
			tempbonus = 2;
			text = "Added Companion";
			log();
		}
        if ($("#extrawords1").is(":checked")) {
			tempbonus = 1;
			text = "150 Extra Words (1)";
			log();
		}

        if ($("#extrawords2").is(":checked")) {
			tempbonus = 1;
			text = "150 Extra Words (2)";
			log();
		}
        if ($("#extrawords3").is(":checked")) {
			tempbonus = 1;
			text = "150 Extra Words (3)";
			log();
		}
        if ($("#extrawords4").is(":checked")) {
			tempbonus = 1;
			text = "150 Extra Words (4)";
			log();
		}
        if ($("#extrawords5").is(":checked")) {
			tempbonus = 1;
			text = "150 Extra Words (5)";
			log();
		}
        if ($("#simplebackground").is(":checked")) {
			tempbonus = 3;
			text = "Simple Background";
			log();
		}
        if ($("#complexbackground").is(":checked")) {
			tempbonus = 5;
			text = "Complex Background";
			log();
		}

		if ($("#celestialfeline").is(":checked")) {
			tempbonus = 10;
			text = "Celestial Feline";
			log();
		}
	}
	
	var breakdowntext = "";
	var spacer = "\n";

	for (i=0; i<breakdown.length; i++){
		if (isNaN(breakdown[i].charAt(0))) {
			breakdown[i] = breakdown[i].charAt(0).toUpperCase() + breakdown[i].slice(1);
		}
		breakdowntext += breakdown[i];
		if (i<breakdown.length-1) {
			breakdowntext += spacer;
		}
	}
	
	breakdowntext = breakdowntext + "\n<b>Total = " + total + "</b>";
	
	if (($("#personal").is(":checked")) || ($("#nonpersonal").is(":checked"))) {
		$("#points").val(breakdowntext);
	} else {
		$("#points").val("");
	}
}

function log() {
	text = text + delim + tempbonus;
	total += tempbonus;
	breakdown.push(text);
}

function unavail() {
	if (($("#nonpersonal").is(":checked"))) {
		$("#advent").attr("disabled", true);
	} else {
		$("#advent").attr("disabled", false);
	}
}

function setup() {
	calculate();
	unavail();
}

function reset() {
	$("#mpcount")[0].reset();
	setup();
	return false;
}