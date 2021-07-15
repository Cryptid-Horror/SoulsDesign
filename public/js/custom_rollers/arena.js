var dragonName = document.getElementById('dName');
var activity = document.getElementById('activity');

function rand(min, max) {
    var min = min || 0,
        max = max || Number.MAX_SAFE_INTEGER;
  
    return Math.floor(Math.random() * (max - min + 1)) + min;} 
    
function items(){
	var lootSize;
	var itemlist="";
	
	if (document.getElementById("mimicfreey").checked == true){
		lootSize = rand(2,4);
		itemlist += "<i>Golden Chest of Mimicry Returned an extra item!</i><br>";}
	else {lootSize = rand(1,4);}
	if (document.getElementById("hoardery").checked == true && rand(1,10) <= 4){
		lootSize += 1;
		itemlist += "<i>Hoarder skill activated!</i><br>";}
	if (document.getElementById ("entryrolly").checked == true){
			lootsize = rand(3,8);}
	if (document.getElementById ("mimicy").checked == true){
			lootsize = rand(4,8);
			itemlist += "<i>Golden Chest of Mimicry Returned an extra item!</i><br>";}

//CHALLENGER//
function rollBchallenger(){
			if(document.getElementById("charmy").checked == true){
				var i = rand(55,94);}
			else {var i = rand(1,94);}
			
			if(i <= 10){itemlist += "Bones";} // bones
			else if (i <= 15){itemlist += "Decent Meat";} // Decent meat
			else if (i <= 20){itemlist += "Leather";} // leather
			else if (i <= 25){itemlist += "Brown Rabbit Pelt";} // brown rabbit pelt
			else if (i <= 30){itemlist += "Grey Rabbit Pelt";} // grey rabbit pelt
			else if (i <= 35){itemlist += "Cream Rabbit Pelt";} // cream rabbit pelt
			else if (i <= 40){itemlist += "Fox Pelt";} // fox pelt
			else if (i <= 43){itemlist += "Small Animal Carcass";} // fox carcass
			else if (i <= 50){itemlist += "Wolf Pelt";} // wolf pelt
			else if (i <= 55){itemlist += "Shark Carcass";} // Shark -- CHARMY
			else if (i <= 58){itemlist += "Swan Carcass";} // dead swan 
			else if (i <= 60){itemlist += "Spotted Deer Pelt";} // spotted deer pelt
			else if (i <= 63){itemlist += "Brown Deer Pelt";} // brown deer pelt
			else if (i <= 66){itemlist += "Red Deer Pelt";} // red deer pelt
			else if (i <= 68){itemlist += "Large Animal Carcass";} // deer carcass
			else if (i <= 70){itemlist += "Skull";} // skull
			else if (i <= 73){itemlist += "Small Animal Claws";} // small animal claws
			else if (i <= 78){itemlist += "Premium Meat";} // premium meat
			else if (i <= 80){itemlist += "50x Crystals";} // 50x Crystals
			else if (i <= 83){itemlist += "Hunting Chest";} // hunting chest
            else if (i <= 88){itemlist += "Common Recipe Fragment";} //Common recipe fragment
            else if (i <= 91){itemlist += "Uncommon Recipe Fragment";} // Uncommon recipe fragment
            else if (i <= 93){itemlist += "Rare Recipe Fragment";} //Rare recipe fragment 
            else if (i <= 94){itemlist += "Mythic Recipe Fragment";} //Mythic Recipe fragment 
		}
	
			
	
	for (var m = 0; m < lootSize; m++) {
		 itemlist += "<br>";
		if (activity == "base_1"){rollBchallenger();}

    }
	return itemlist;
}

  
 function roll() { 	
  
		document.getElementById("result").innerHTML += items() + "<br><i>Items have been added to your hoard.</i><br>";

}

function clearForms() {
	document.getElementById("playerinfo").reset();
	document.getElementById("modifiers").reset();
	document.getElementById("result").innerHTML = "";

}
