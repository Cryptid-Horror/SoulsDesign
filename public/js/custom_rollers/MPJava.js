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
	$("#all input").change(function() {
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
			text = "<b>Personal Piece</b>";
			log();
		}
		
		if ($("#nonpersonal").is(":checked")) {
			text = "<b>Non-Personal Piece</b>";
			log();
		}
		
		if ($("#handf").is(":checked")) {
			tempbonus = 3;
			text = "Hunting or Foraging";
			log();
		}
		
		if ($("#quest").is(":checked")) {
			tempbonus = 4;
			text = "Questing";
			log();
		}
		
		if ($("#arenaf").is(":checked")) {
			tempbonus = 1;
			text = "Arena (Free)";
			log();
		}
		
		if ($("#arenac").is(":checked")) {
			tempbonus = 4;
			text = "Arena (Created)";
			log();
		}
		
		if ($("#event").is(":checked")) {
			tempbonus = 4;
			text = "Annual and Group Events";
			log();
		}
		
		if ($("#story").is(":checked")) {
			tempbonus = 4;
			text = "Story Event";
			log();
		}
		
		if ($("#character").is(":checked")) {
			tempbonus = 6;
			text = "Character Development";
			log();
		}
		
		if ($("#craft").is(":checked")) {
			  tempbonus = 1;
			  text ="Crafting";
			  log();
		}
		
		if ($("#challenge").is(":checked")) {
			tempbonus = 2;
			text = "Monthly Challenge";
			log();
		}
		
		if ($("#advent").is(":checked")) {
			tempbonus = 1;
			text = "Advent Raffle";
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