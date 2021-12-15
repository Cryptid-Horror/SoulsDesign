var dragonName = document.getElementById('dName');
var activity = document.getElementById('activity');
var rank = document.getElementById('rank');
var zone = document.getElementById('zone');

function rand(min, max) {
  var min = min || 0,
      max = max || Number.MAX_SAFE_INTEGER;

  return Math.floor(Math.random() * (max - min + 1)) + min;} 
  

 
function items(){
	var lootSize;
	var itemlist="";
	
	if (document.getElementById("barrely").checked == true){ //Free roll
		lootSize = rand(2,4);}
	else {lootSize = rand(2,6);} //Entry roll
	if (document.getElementById("hoardery").checked == true && rand(1,10) <= 4){
		lootSize += 1;
		itemlist += "<i>Hoarder skill activated!</i><br>";}
    if (document.getElementById("mimicy").checked == true){
		lootSize += 1;
		itemlist += "<i>The Familiar Returned an extra item!</i><br>";}
    if (document.getElementById("bagy").checked == true){
		lootSize += 1;
		itemlist += "<i>An extra item was stored in your container!</i><br>";}
	if (document.getElementById("localy").checked == true && rand(1,10) <= 4){
		lootSize += 1;
		itemlist += "<i>Your dragon brought back an extra item!</i><br>";}

//HUNTING//
function rollVoTW(){
		if (zone.value == "vortex"){
			if(document.getElementById("charmy").checked == true && rand(1,10) <= 4){
				var i = rand(55,94);}
            if(document.getElementById("tamey").checked == true && rand(1,10) <= 5){
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
			else if (i <= 56){itemlist += "Antelope Meat";}
			else if (i <= 57){itemlist += "Bison Meat";}
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
	else if (zone.value == "live"){
			if(document.getElementById("charmy").checked == true && rand(1,10) <= 4){
				var i = rand(55,83);}
            if(document.getElementById("tamey").checked == true && rand(1,10) <= 5){
				var i = rand(55,83);}
			else {var i = rand(1,83);}
			
			if(i <= 5){itemlist += "Spoiled Meat";} // Spoiled Meat
			else if (i <= 10){itemlist += "Bones";} //Bones
			else if (i <= 15){itemlist += "Decent Meat";} //Decent meat
			else if (i <= 20){itemlist += "Leather";} //leather
			else if (i <= 25){itemlist += "Wolf Pelt";} //wolf pelt
			else if (i <= 30){itemlist += "Racoon Pelt";} //racoon pelt
			else if (i <= 40){itemlist += "Red Deer Pelt";} //red deer pelt
			else if (i <= 45){itemlist += "Spotted Deer Pelt";} //spotted deer pelt
			else if (i <= 50){itemlist += "Brown Deer Pelt";}//brown deer pelt
			else if (i <= 55){itemlist += "Premium Meat";} //premium meat -- CHARMY
			else if (i <= 58){itemlist += "Skull";} //skull
			else if (i <= 60){itemlist += "Medium Animal Claws";} //medium animal claws
			else if (i <= 63){itemlist += "Large Animal Carcass";}//deer carcass
			else if (i <= 66){itemlist += "Heron Carcass";}//dead heron
			else if (i <= 67){itemlist += "Deer Meat";}
			else if (i <= 68){itemlist += "Penguin Carcass";}//dead penguin
			else if (i <= 69){itemlist += "Bear Meat";}
			else if (i <= 70){itemlist += "Hunting Chest";}//hunting chest
			else if (i <= 72){itemlist += "100x Crystal";} //100x Crystals
            else if (i <= 77){itemlist += "Common Recipe Fragment";} //Common recipe fragment
            else if (i <= 80){itemlist += "Uncommon Recipe Fragment";} // Uncommon recipe fragment
            else if (i <= 82){itemlist += "Rare Recipe Fragment";} //Rare recipe fragment 
            else if (i <= 83){itemlist += "Mythic Recipe Fragment";} //Mythic Recipe fragment 
			}
	}
//FISHING//	
	function rollAetherWars(){
		if (zone.value == "vortex"){
			if(document.getElementById("charmy").checked == true && rand(1,10) <= 4){
				var i = rand(28,58);}
            if(document.getElementById("tamey").checked == true && rand(1,10) <= 5){
				var i = rand(28,58);}
			else {var i = rand(1,58);}
			
			if(i <= 5){itemlist += "Decent Fish";} // decent fish 
            else if(i <= 10){itemlist += "Water";} //water 
            else if(i <= 15){itemlist += "Trout";} // trout
            else if(i <= 20){itemlist += "Arowana";} //Arowana
            else if(i <= 25){itemlist += "Boot";} //boot
            else if(i <= 28){itemlist += "Fishing Chest";} // Fishing chest - CHARMY
            else if(i <= 31){itemlist += "Prime Fish Meat";}//prime fish meat
            else if(i <= 34){itemlist += "Jellyfish";}//jelly fish
            else if(i <= 37){itemlist += "Dolphin Carcass";}//dolphin carcass
			else if(i <= 41){itemlist += "200 Crystals";} // 200 crystals
			else if(i <= 45){itemlist += "Whale Bone";}// Whale bone
            else if(i <= 46){itemlist += "Shark Carcass";}//Shark carcass - BLUE
            else if(i <= 49){itemlist += "Common Recipe Fragment";} //Common recipe fragment
            else if(i <= 53){itemlist += "Uncommon Recipe Fragment";} // Uncommon recipe fragment
            else if(i <= 56){itemlist += "Rare Recipe Fragment";} //Rare recipe fragment 
            else if(i <= 58){itemlist += "Mythic Recipe Fragment";} //Mythic Recipe fragment 
			
		} else if (zone.value == "live"){
			if(document.getElementById("charmy").checked == true && rand(1,10) <= 4){
				var i = rand(33,57);}
            if(document.getElementById("tamey").checked == true && rand(1,10) <= 5){
				var i = rand(33,57);}
			else {var i = rand(1,57);}
			
			if(i <= 5){itemlist += "Decent Fish";}// Decent fish 
            else if(i <= 10){itemlist += "Spoiled Fish Meat";}//Spoiled fish meat
            else if(i <= 15){itemlist += "Water";}//water
            else if(i <= 20){itemlist += "Catfish";}//catfish
            else if(i <= 25){itemlist += "Arowana";}//Arowana
            else if(i <= 30){itemlist += "Arapaima";}//Arapaima
            else if(i <= 33){itemlist += "Prime fish Meat";}//prime fish meat -CHARMY
            else if(i <= 36){itemlist += "Giant Moray Eel";}//Giant Moray Eel
            else if(i <= 39){itemlist += "Jellyfish";}//Jellyfish
            else if(i <= 41){itemlist += "Crocodile Carcass";}//Crocodile Carcass
            else if(i <= 43){itemlist += "Boot";}//Boot
            else if(i <= 45){itemlist += "Fishing Chest";}//fishing chest 
            else if(i <= 46){itemlist += "200 Crystals";}//200 crystals - BLUE
			else if(i <= 48){itemlist += "Whale Bone";} // Whale bone
            else if(i <= 51){itemlist += "Common Recipe Fragment";} //Common recipe fragment
            else if(i <= 54){itemlist += "Uncommon Recipe Fragment";} // Uncommon recipe fragment
            else if(i <= 56){itemlist += "Rare Recipe Fragment";} //Rare recipe fragment 
            else if(i <= 57){itemlist += "Mythic Recipe Fragment";} //Mythic Recipe fragment
			}
	}
//FORAGING//
	function rollToL(){
		if (zone.value == "vortex"){
			if(document.getElementById("charmy").checked == true && rand(1,10) <= 4){
				var i = rand(83,120);}
            if(document.getElementById("tamey").checked == true && rand(1,10) <= 5){
				var i = rand(83,120);}
			else {var i = rand(1,120);}
			
			if(i <= 10){itemlist += "Small Feathers";} //Small Feathers
			else if (i <= 15){itemlist += "Herbs";} // Herbs
			else if (i <= 25){itemlist += "Wood";} // Wood
			else if (i <= 30){itemlist += "Milk";} // Milk
			else if (i <= 35){itemlist += "Cloth";} // Cloth
			else if (i <= 45){itemlist += "Wheat";} // Dried Wheat	
			else if (i <= 50){itemlist += "Honey";} // Honey
			else if (i <= 55){itemlist += "Black Berries";} // Small berries
			else if (i <= 65){itemlist += "Sticks";} // Sticks
			else if (i <= 75){itemlist += "Small Rocks";} // small rocks
			else if (i <= 80){itemlist += "Plant Fiber";} // plant fiber
			else if (i <= 83){itemlist += "Coffee Beans";} // coffee beans --CHARMY
			else if (i <= 86){itemlist += "Beetle";} // Beetle
			else if (i <= 88){itemlist += "Butterfly";} // Butterfly
			else if (i <= 91){itemlist += "Small Animal Horn";} // small animal horn
			else if (i <= 95){itemlist += "Grapes";} // grapes
			else if (i <= 100){itemlist += "Large Rocks";} // large rocks
			else if (i <= 103){itemlist += "Foraging Chest";} // Foraging Chest -blue
			else if (i <= 105){itemlist += "x50 Crystals";} // 50 Crystals
			else if (i <= 107){itemlist += "Garnet";} // Garnet
			else if (i <= 109){itemlist += "Emerald";} // Emerald
            else if (i <= 114){itemlist += "Common Recipe Fragment";} //Common recipe fragment
            else if (i <= 117){itemlist += "Uncommon Recipe Fragment";} // Uncommon recipe fragment
            else if (i <= 119){itemlist += "Rare Recipe Fragment";} //Rare recipe fragment 
            else if (i <= 120){itemlist += "Mythic Recipe Fragment";} //Mythic Recipe fragment

						
		} else if (zone.value == "live"){
			if(document.getElementById("charmy").checked == true && rand(1,10) <= 4){
				var i = rand(78,107);}
            if(document.getElementById("tamey").checked == true && rand(1,10) <= 5){
				var i = rand(78,107);}
			else {var i = rand(1,107);}
			
			if(i <= 10){itemlist += "Small Feathers";} //Small feathers
			else if (i <= 20){itemlist += "Small Rocks";} // Small Rocks
			else if (i <= 25){itemlist += "Plant Fiber";} // Plant Fiber
			else if (i <= 27){itemlist += "Beetle";} // Beetle
			else if (i <= 35){itemlist += "Sugar Cane";} // Sugar Cane
			else if (i <= 40){itemlist += "Black Berries";} // Black Berries
			else if (i <= 50){itemlist += "Sticks";} // Sticks
			else if (i <= 60){itemlist += "Wood";} // Wood
			else if (i <= 65){itemlist += "Herbs";} // Herbs
			else if (i <= 70){itemlist += "Honey";} // Honey
			else if (i <= 75){itemlist += "Large Rocks";} // Large Rocks
			else if (i <= 78){itemlist += "Fly Argaric";} // Fly Argaric -- CHARMY
			else if (i <= 80){itemlist += "Portabella Mushroom";} // Portebella
			else if (i <= 83){itemlist += "Conocybe Filaris Mushroom";} // Conocybe Filaris
			else if (i <= 86){itemlist += "Medium Animal Horn";} // Medium Animal Horn
			else if (i <= 90){itemlist += "Small Animal Horn";} // Small Animal Horn
			else if (i <= 92){itemlist += "Black Pearl";} // Black Pearl
			else if (i <= 94){itemlist += "Foraging Chest";} // Foraging Chest -BLUE
			else if (i <= 96){itemlist += "x100 Crystals";} // 100 Crystals
            else if (i <= 101){itemlist += "Common Recipe Fragment";} //Common recipe fragment
            else if (i <= 104){itemlist += "Uncommon Recipe Fragment";} // Uncommon recipe fragment
            else if (i <= 106){itemlist += "Rare Recipe Fragment";} //Rare recipe fragment 
            else if (i <= 107){itemlist += "Mythic Recipe Fragment";} //Mythic Recipe fragment
		
		}
		
	}
//CAVING//
      function rollAoT(){
		if (zone.value == "vortex"){
			if(document.getElementById("charmy").checked == true && rand(1,10) <= 4){
				var i = rand(23,48);}
            if(document.getElementById("tamey").checked == true && rand(1,10) <= 5){
				var i = rand(23,48);}
			else {var i = rand(1,48);}
			
			if(i <= 5){itemlist += "metal";} //metal 
            else if(i <= 10){itemlist += "Raw Crystal";}
            else if(i <= 15){itemlist += "Iron";}
            else if(i <= 20){itemlist += "Garnet";}
            else if(i <= 23){itemlist += "Jade";}//CHARMY
            else if(i <= 26){itemlist += "Amber";}
            else if(i <= 29){itemlist += "Gold";} 
            else if(i <= 32){itemlist += "Geode";} 
            else if(i <= 35){itemlist += "200 Crystals";} //BLUE
            else if(i <= 37){itemlist += "Caving Chest";}
			else if (i <= 42){itemlist += "Common Recipe Fragment";} //Common recipe fragment
            else if (i <= 45){itemlist += "Uncommon Recipe Fragment";} // Uncommon recipe fragment
            else if (i <= 47){itemlist += "Rare Recipe Fragment";} //Rare recipe fragment 
            else if (i <= 48){itemlist += "Mythic Recipe Fragment";} //Mythic Recipe fragment 

						
        }
		if (zone.value == "live"){
			if(document.getElementById("charmy").checked == true && rand(1,10) <= 4){
				var i = rand(23,48);}
            if(document.getElementById("tamey").checked == true && rand(1,10) <= 5){
				var i = rand(23,48);}
			else {var i = rand(1,48);}
			
			if(i <= 5){itemlist += "metal";} //metal 
            else if(i <= 10){itemlist += "Raw Crystal";}
            else if(i <= 15){itemlist += "Iron";}
            else if(i <= 20){itemlist += "Garnet";}
            else if(i <= 23){itemlist += "Jade";}//CHARMY
            else if(i <= 26){itemlist += "Amber";}
            else if(i <= 29){itemlist += "Gold";} 
            else if(i <= 32){itemlist += "Geode";} 
            else if(i <= 35){itemlist += "200 Crystals";} //BLUE
            else if(i <= 37){itemlist += "Caving Chest";}
			else if (i <= 42){itemlist += "Common Recipe Fragment";} //Common recipe fragment
            else if (i <= 45){itemlist += "Uncommon Recipe Fragment";} // Uncommon recipe fragment
            else if (i <= 47){itemlist += "Rare Recipe Fragment";} //Rare recipe fragment 
            else if (i <= 48){itemlist += "Mythic Recipe Fragment";} //Mythic Recipe fragment 

						
        }
      }
	
	
	
	for (var m = 0; m < lootSize; m++) {
	    itemlist += "<br>";
		if (activity.value == "VoTW"){rollVoTW();}
		else if (activity.value == "AetherWars"){rollAetherWars();}
		else if (activity.value == "ToL"){rollToL();}
        else if (activity.value == "AoT"){rollAoT();}
	}
	
	return itemlist;
}


  
 function roll() { 
	document.getElementById("result").innerHTML = "";
	
	if (pass() == true){
		document.getElementById("result").innerHTML += dragonName.value + " went " + activity.value + " and returned with the following:<br>"
		+ items() 
		+ "<br><i>Items have been added to your hoard.</i><br>";}
	
	document.getElementById("result").innerHTML += "<br>";


}

function clearForms() {
	document.getElementById("playerinfo").reset();
	document.getElementById("modifiers").reset();
	document.getElementById("result").innerHTML = "";
    }