var total = 0
var breakdown = [];
var text = "";
var tempbonus = 0;
var delim = " + ";

jQuery(document).ready(function($){
	//CHANGE FUNCTIONS
	$("#art").change(function() {
		$("#arttype").toggle();
		showBonuses();
		showBonuses2();
	});
	$("#literature").change(function() {
		$("#words").toggle();
		showBonuses();
	});
	$("#anim").change(function() {
		$("#animation").toggle();
	});
	$("#recolored").change(function() {
		showBonuses();
	});
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
	
	if ($("#art").is(":checked")){
	//ART-ONLY
		if ($("#headshot").is(":checked")) {
		//HEADSHOT
			if ($("#sculpt").is(":checked")) {
				text = "sculpted ";
				tempbonus = 9;
			} else if ($("#ip").is(":checked")) {
				text = "Pixeled ";
				tempbonus = 4;
			} else {
				tempbonus = 1;
			}
			text += "headshot";
		} else {
		//FULLBODY
		    if ($("#sculpt").is(":checked")) {
				text = "sculpted ";
				tempbonus = 10;
			} else if ($("#ip").is(":checked")) {
				text = "Pixeled ";
				tempbonus = 5;
			} else {
				tempbonus = 2;
			}
			text += "fullbody";
		}
		log();
		
			if ($("#colored").is(":checked")) {
			//COLOR
				if ($("#headshot").is(":checked")) {
					tempbonus = 2;
				} 
				else {
					tempbonus = 4;
				}
				text = "colored";
				log();
			}
			if ($("#shaded").is(":checked")) {
			//SHADING
				if ($("#headshot").is(":checked")) {
					tempbonus = 4;
				} else {
					tempbonus = 6;
				}
				text = "shaded";
				log();
			}
			
		
		
	}
	
	//BONUSES - not if recoloured art
	if (!(($("#art").is(":checked")) && ($("#recolored").is(":checked")))) {
		//HANDLER
		if ($("#companion").is(":checked")) {
			tempbonus = 2;
			text = "Companion";
			log();
		}
		
		//BLESSING OF THE SUN AND MOON
		if ($("#sun").is(":checked")) {
			tempbonus = 2;
			text = "Guardian of the Sun";
			log();
		}

		if ($("#moon").is(":checked")) {
			tempbonus = 2;
			text = "Blessing of the Moon";
			log();
		}

		//EXTRA DRAGON
		if ($("#added").is(":checked")) {
			tempbonus = 2;
			text = "Added Dragon";
			log();
		}
		
		if ($("#added2").is(":checked")) {
			tempbonus = 2;
			text = "Added Dragon #2";
			log();
		}
		
		//COLLAB
		if ($("#colab").is(":checked")) {
			tempbonus = 1;
			text = "Collaboration";
			log();
		}

        //BACKGROUND
			if ($("#bg").is(":checked")) {
				
				tempbonus = 4;
				text = "background";
				log();
			}
			
		//PERSONAL
			if ($("#pa").is(":checked")) {
				tempbonus = 1;
				text = "personal bonus";
				log();
			}
		
		//ACTIVITY
		if ($("#activity").is(":checked")) {
			tempbonus = 1;
			text = "Activity";
			log();
		}
		
		//EVENT
		if ($("#event").is(":checked")) {
			tempbonus = 2;
			text = "Event";
			log();
		}

		//CONFETTI DREAMS
		if ($("#confetti").is(":checked")) {
			tempbonus = 2;
			text = "Confetti Dreams";
			log();
		}
		
		//ARENA
		if ($("#arena").is(":checked")) {
			tempbonus = 1;
			text = "Arena";
			log();
		}
		
		if ($("#monthly").is(":checked")) {
			  tempbonus = 1;
			  text ="Seasonal Challenge";
			  log();
			  }
		
		if ($("#story").is(":checked")) {
			tempbonus = 4;
			text = "Story Event";
			log();
		}
		
		if ($("#br").is(":checked")) {
			tempbonus = 2;
			text = "Nesting Rite";
			log();
		}
		
		if ($("#taming").is(":checked")) {
			tempbonus = 2;
			text = "Taming Entry";
			log();
		}
		
		if ($("#ar").is(":checked")) {
			tempbonus = 2;
			text = "Aether Restoration";
			log();
		}
		
		if ($("#sl").is(":checked")) {
			tempbonus = 2;
			text = "Soul Linking";
			log();
		}
		
		if ($("#oarpg").is(":checked")) {
			tempbonus = 2;
			text = "Other ARPG Creature Present";
			log();
		}
		
		//ANIMATION - art only
		if (($("#art").is(":checked")) && ($("#anim").is(":checked"))) {
			var animation = $("input:radio[name=animation]:checked").attr('id');
			switch (animation) {
				case "simple":
					tempbonus = 3;
					text = "simple";
					break;
				case "complex":
					tempbonus = 6;
					text = "average";
					break;
				default: break;
			}
			text += " animation";
			log();
		}
	}
	
	//LIT
	if (($("#literature").is(":checked")) && ($('#wc').val() != "")){
		var wordcount = $('#wc').val();
		wordcount = wordcount.replace(/\s/g,"");
		wordcount = parseInt(wordcount);
		if ($('#wc').val() == "") {
			wordcount = 0;
		} else if (isNaN(wordcount)) {
			wordcount = 0;
		} else {
			tempbonus = Math.floor(wordcount/100);
		}
		text = wordcount + " words";
		log();
	}

	//TOTAL	
	if (($("#chibi").is(":checked")) || ($("#recolored").is(":checked")) && (total != 0)){
		total = total/2;
		var extra = Math.abs(total - Math.floor(total) - 0.5);
		if (extra < 0.5) {
			total = total - extra;
		}
		text = "chibi/recolored: /2";
		breakdown.push(text);
	}
	
	var breakdowntext = "";
	var spacer = "\n";
	if ($("#oneline").is(":checked")) {
		spacer = " | ";
	}
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
	
	if (($("#art").is(":checked")) || (($("#literature").is(":checked")) && ($("#wc").val() != ""))) {
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

function setup() {
	$('#arttype').hide();
	$("#animation").hide();
	$('#words').hide();
	showBonuses();
	showBonuses2();
	calculate();
}
function showBonuses() {
	if (($("#art").is(":checked")) && ($("#recolored").is(":checked"))) {
		$("#bonuses").attr("disabled", true);
		$("#bg").attr("disabled", true);
	} else {
		$("#bonuses").attr("disabled", false);
		$("#bg").attr("disabled", false);
	}
}
function showBonuses2() {
	if (($("#art").is(":checked")) && ($("#headshot").is(":checked"))) {
		$("#bonuses").attr("disabled", true);
	} else {
		$("#bonuses").attr("disabled", false);
	}
}

function reset() {
	$("#mpcount")[0].reset();
	setup();
	return false;
}