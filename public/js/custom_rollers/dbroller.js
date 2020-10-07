var traitType="";

function rand(min, max) {
  var min = min || 0,
      max = max || Number.MAX_SAFE_INTEGER;

  return Math.floor(Math.random() * (max - min + 1)) + min;
 }

function dragonName(){
	var dragonURL = document.getElementById('dURL');
	
	if (dragonURL.value.length == 0){
		return "DRAGON";
	} else{
	
	var x = dragonURL.value.split('/');
	var y = x[5].split('-');
	var name = y[0];
	var number = y[1];
	
	return "<a href='" + dragonURL.value + "'>" + name + " " + number + "</a>";
	}
}
 
function rollResult(){
	var isRav = false;
	
	if(document.getElementById("rav").checked == true){
				isRav = true;}
			
	var type = rand(1,4);
	/*1 = marking, 2 = mute, 3 = skill/breath/temp, 4 = trait */
			
	if(type == 1){
		var rarity = rand(1,20);
		traitType = "Marking";
		if (rarity <= 10){
			var i = rand(0,22);
			
			let marking = [
			"Blanket (nBl)",	"Boar (nBr)",		"Collar (nCl)",		"Dunstripe (nDn)", "Duo Tone (nDo)",
			"Dusted (nDt)",		"Flaxen (nFla)",	"Greying (nGr)",
			"Hood (nHd)",	"Leaf (nLf)",	"Masked (nMa)",		"Pangare (nPa)",	"Points (nPo)",
			"Python (nPy)",		"Rimmed (nRi)",		"Ringed (nRn)",
			"Rose (nRos)",		"Sable (nSa)",		"Scaled (nSc)",		"Stained (nSn)",
			"Skink (nSk)",		"Trailing (nTr)",	"Underbelly (nUn)",
			] 
			return marking[rand(0,marking.length-1)];	
		} else if ( rarity <= 15){
			var i = rand(0,21);
			
			let marking = [
			"Azure (nAz)",		"Banded (nBa)",		"Bokeh (nBk)",		"Border (nBo)", "Cloud (nCl)",
			"Copper (nCp)",	 "Crested (nCr)",	"Crimson (nCn)",	"Dipped (nDi)",		"Dripping (nDr)",
			"Inkwell (nIn)",	"Marbled (nMar)",	"Merle (nMr)",	"Metallic (nMe)", 
			"Pigeon (nPg)",		"Plasma (nPs)",		"Roan (nRo)",		"Rosettes (nRs)",
			"Shaped (nSp)",		"Smoke (nSm)",		"Brindled (nBrd)",	"Tabby (nTa)",
			"Tobiano (nTo)",	"Toxin (nTx)",
			] 
			return marking[rand(0,marking.length-1)];	
		} else if (rarity <= 18){
			var i = rand(0,7);
			
			let marking = [
			"Appaloosa (nAp)",	"Blooded (nBd)",	"Eyes (nEy)",		"Glass (nGl)",
			"Jade (nJa)",		"Luminescent (nLu)", "Lustrous (nLs)", "Painted (nPn)",	"Petal(nPl)",	"Vignette (nVi)",
			] 
			return marking[rand(0,marking.length-1)];	
		} else {
			var i = rand(0,7);
				
			let marking = [
			"Aether Marked (nAm)", "Aurora (nAu)",	"Gemstone (nGm)",	"Iridescent (nIr)",	"Lepir (nLe)",
			"Lilac (nLi)",		"Prismatic (nPr)",	"Rune (nRu)",		"Shimmer (nSh)",	"Triquetra (nTri)",
			] 
			return marking[rand(0,marking.length-1)];	
		} 
			
	} else if (type == 2){
		var rarity = rand(1,20);
		traitType = "Mutation";
		if (rarity <= 10){
			if (isRav == true){
				var i = rand(0,5);
			} else {var i = rand(0,5);}
			
		let mute = [
			"Whiskers",		"Spined",	"Barbed",
			"Fanged",		"Spiked",	"Maned",
            "Luecism",      "Abundism",  "Eagle Beak",
		] 
		return mute[i];
		} else if (rarity <= 15) {
			if (isRav == true){
				var i = rand(0,6);
			} else {var i = rand(0,5);}
			
		let mute = [
			"Frilled",	"Raptor",	"Tusked",
			"Feather Extensions",	"Albino",	"Fisher Beak",
            "Lunar", "Anery", "Polycerate",
		] 
		return mute[i];
		} else if (rarity <= 18){
			if (isRav == true){
					var i = rand(0,7);
			} else {var i = rand(0,6);}
			
		let mute = [
			"Webbed",		"Fluffed",	"Cherubian",
			"Multi-Eyes",	"Sakura",	"Vented",
			"Vulture Beak", "Faceted", "Finned", 
            "Viper",
		] 
		return mute[i];
		} else {
			if (isRav == true){
				var i = rand(0,11);
			} else {var i = rand(0,9);}
			
			let mute = [
				"Eel",	"Seraph",  "Aether Mane",
				"Blazer",	"Elemental",	"Overgrowth",
				"Radiance",	"Triclops",		"Crocodile",
				"Warlord",	 "Faceted", "Blazer", 
                "Chimera",
			] 
			return mute[i];
		}
	
	} else if (type == 3){
		var n = rand(1,3);
		
		if (n == 1){
			traitType="Breath";
			let breath = [
				"Fire",	"Ice",	"Shadow",
				"Lightning",	"Radiation",
				"Wind", "Poison", "Luster,"
			]
			return breath[rand(0,breath.length-1)];
		} else if (n ==2){
			traitType="Skill";
			let skill = [
				"Friendly Giant",	"Hoarder",			"Steadfast",
				"Swift Feet",		"Aether Walker",	"Inner Fire",
				"Haunting Roar",	"Healing Aura", "Adept",
			]
			return skill[rand(0,skill.length-1)];
		} else {
			traitType="Temperament";
			let temp = [
				"Vigilant", "Aggressive", "Calm",
				"Sinister",
			]
			return temp[rand(0,temp.length-1)];
		}
	} else if (type == 4){
		if (isRav == true){
			var n = rand(1,4);
		}else { var n = rand(1,2);}
		
		if (n==1){
			var rarity = rand(1,20);
			traitType = "Eyes Trait";
			if (rarity <=10){
				let eyes = [
					"Round","Slit", "Beaded",
				]  
				return eyes[rand(0,eyes.length-1)];
			} else if (rarity <= 15){
				let eyes = [
					"Pale",	"Pupiless", "Crescent",
				] 
				return eyes[rand(0,eyes.length-1)];
			} else if (rarity <= 18){
				let eyes =[
					"Glowing","Goat",	"Cuttlefish",
				] 
				return eyes[rand(0,eyes.length-1)];
			} else {
				let eyes = [
					"Omen",		"Solar",	"Eclipse", "Aether",
				] 
				return eyes[rand(0,eyes.length-1)];
			}
			
			
		} else if (n == 2){
			var rarity = rand(1,20);
			traitType = "Horns Trait";
			if (rarity <= 10){
				let horns = [
					"Hornless",	"Slender",	"Nub",
					"Bull",		"Rhino",	"Ram", "Segemented", "Parasaur",
				] 
				return horns[rand(0,horns.length-1)];
			} else if (rarity <= 15){
				let horns = [
					"Ibex",	"Twisted",	"Ridge",
					"Devil","Curled", "Ceratopsian",
				] 
				return horns[rand(0,horns.length-1)];
			} else if (rarity <=18){
				let horns = [
					"Crowned",	"Quilin",	"Stag",
					"Royal", "Ascended",
				] 
				return horns[rand(0,horns.length-1)];
			} else {
				let horns = [
					"Eland",	"Unicorn",	"Fallow",
					"Beastly", "Aether",
				] 
				return horns[rand(0,horns.length-1)];
			}
		} else if (n ==3){
			var rarity = rand(1,18);
			traitType="Ears Trait";

			if (rarity <=10){
				let ears = [
					"Earless",	"Fox",	"Hyena",
					"Wild", "Equine",
				]
				return ears[rand(0,ears.length-1)];
			} else if (rarity <= 15){
				let ears = [
					"Dragon",	"Feathered",	"Fluffy",
					"Drop Fold",
				]
				return ears[rand(0,ears.length-1)];
			} else {
				let ears = [
					"Tapir",	"Clipped",	"Button",
					"Silky",
				]
				return ears[rand(0,ears.length-1)];
			}
		} else if (n == 4){
			var rarity = rand(1,18);
			traitType="Tail Trait";
			if(rarity <= 10){
				let tail = [
					"Slender", "Plume",	"Stub",
					"Curled",
				]
				return tail[rand(0,tail.length-1)];
			} else if (rarity <= 15){
				let tail = [
					"Lemur",	"Whip",	"Split",
					"Wild",		"Fan",
				]
				return tail[rand(0,tail.length-1)];
			} else {
				let tail = [
					"Peacock",	"Kitsune",	"Drape",
					"Plated",	"Dragon",
				]
				return tail[rand(0,tail.length-1)];
			}
		} else {return "error in the traits department";}
		
	} else{return "error???";}
} 

function roll(){
	var RESULT = rollResult();
	
	document.getElementById("result").innerHTML = "";
	document.getElementById("result").innerHTML = "Your dragon drinks the contents of the vial, and a crackling magic spreads across its body, revealing that the vial has cast an illusion of the gift that it grants. The <b>"+ traitType +"</b> of <b>"+ RESULT +"</b> appears on the dragon’s body, as you touch the shimmering illusion your hand passes through it.<br><br><hr><br> One Vial of Ancient Dragons Blood Voucher has been added to your hoard with the above result.</b>";
}

function clearResult(){
	document.getElementById("result").innerHTML = "";
	document.getElementById("dURL").innerHTML = "";
	document.getElementById("rav").checked = false;
}
