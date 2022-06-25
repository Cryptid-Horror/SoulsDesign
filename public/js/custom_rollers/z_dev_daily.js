const aberrantDmg = {
	'25%':	{
		proc_chance: 1,	// roll out of 10; equal to or less than to proc
		min_dmg:	10,
		max_dmg:	30,
		flavortext: 'They managed to regain control quickly,\
						but the damage had already been done.'
	},
	'50%':	{
		proc_chance: 3,	// roll out of 10; equal to or less than to proc
		min_dmg:	20,
		max_dmg:	60,
		flavortext: 'With some effort, they regain control of their magic,\
						though not without consequence.'
	},
	'100%':	{
		proc_chance: 5,	// roll out of 10; equal to or less than to proc
		min_dmg:	30,
		max_dmg:	100,
		flavortext: 'It was a struggle, but they were able to regain control.\
						However, there was no undoing the havoc it had wrought.'
	}
};

var dragonName = document.getElementById('dName');
var activity = document.getElementById('activity');
var rank = document.getElementById('rank');
var zone = document.getElementById('zone');
var temp = document.getElementById('temp');
var aberrant = document.getElementById('aberrant');

function rand(min, max) {
  var min = min || 0,
      max = max || Number.MAX_SAFE_INTEGER;

  return Math.floor(Math.random() * (max - min + 1)) + min;} 
  
 function pass(){
	var i = rand(1,100);

	if (document.getElementById('AdeptY').checked === true){
	    i += 5;}
    if (document.getElementById('famY').checked === true){
	    i += 5;}
	if (document.getElementById('nofaily').checked === true){
		return true;}

	else if (rank.value == "beginner" && i <= 65){return true;}
	else if (rank.value == "stablehand" && i <= 75){return true;}
	else if (rank.value == "tamer" && i <= 85){return true;}
	else if (rank.value == "master" && i <= 95){return true;}
	else {return false;}
}
 
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
function rollHunt(){
		if (zone.value == "radiant"){
			if(document.getElementById("charmy").checked == true && rand(1,10) <= 4){
				var i = rand(55,94);}
            if(document.getElementById("tamey").checked == true && rand(1,10) <= 5){
				var i = rand(55,94);}
            if(document.getElementById("Blue").checked == true && rand(1,10) <= 4){
                var i = rand (80, 94);}
            if(document.getElementById("newty").checked == true && rand(1,10) <= 5){
                var i = rand (80, 94);}
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
			else if (i <= 55){itemlist += "Carcass Eagle";} // Eagle - CHARMY
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
	else if (zone.value == "gloom"){
			if(document.getElementById("charmy").checked == true && rand(1,10) <= 4){
				var i = rand(55,83);}
            if(document.getElementById("tamey").checked == true && rand(1,10) <= 5){
				var i = rand(55,83);}
            if(document.getElementById("Blue").checked == true && rand(1,10) <= 4){
                var i = rand (70, 83);}
            if(document.getElementById("newty").checked == true && rand(1,10) <= 5){
                var i = rand (70, 83);}
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
			else if(zone.value == "frigid"){
			if(document.getElementById("charmy").checked == true && rand(1,10) <= 4){
				var i = rand(60,91);}
            if(document.getElementById("tamey").checked == true&& rand(1,10) <= 5){
				var i = rand(60,91);}
            if(document.getElementById("Blue").checked == true && rand(1,10) <= 4){
                var i = rand (71, 91);}
            if(document.getElementById("newty").checked == true && rand(1,10) <= 5){
                var i = rand (71, 91);}
			else {var i = rand(1,91);}
			
			if(i <= 5){itemlist += "Frozen Meat";} //Frozen meat
			else if (i <= 15){itemlist += "Bones";}//bones
			else if (i <= 20){itemlist += "Leather";}//leather
			else if (i <= 25){itemlist += "Brown Deer Pelt";}//brown deer pelt
			else if (i <= 30){itemlist += "Red Deer Pelt";}//red deer pelt
			else if (i <= 33){itemlist += "Large Animal Carcass";}//deer carcass
			else if (i <= 40){itemlist += "Brown Bear Pelt";}//brown bear pelt
			else if (i <= 50){itemlist += "Black Bear Pelt";}//black bear pelt
			else if (i <= 55){itemlist += "Snow Owl Carcass";}//dead snow owl
			else if (i <= 60){itemlist += "Frigid Bear Pelt";}//frigid bear pelt -- CHARMY
			else if (i <= 63){itemlist += "Premium Meat";}//premium meat
			else if (i <= 66){itemlist += "Bison Pelt";}//bison pelt
			else if (i <= 67){itemlist += "Bear Meat";}
			else if (i <= 68){itemlist += "Wolf Meat";}
			else if (i <= 69){itemlist += "Penguin Carcass";}//dead penguin
			else if (i <= 71){itemlist += "200x Crystals";}//x200 Crystals -- BLUE
			else if (i <= 73){itemlist += "Large Animal Skull";}//large animal skull
			else if (i <= 76){itemlist += "Large Animal Claws";}//large animal claws
			else if (i <= 80){itemlist += "Hunting Chest";}//hunting chest
            else if (i <= 85){itemlist += "Common Recipe Fragment";} //Common recipe fragment
            else if (i <= 88){itemlist += "Uncommon Recipe Fragment";} // Uncommon recipe fragment
            else if (i <= 90){itemlist += "Rare Recipe Fragment";} //Rare recipe fragment 
            else if (i <= 81){itemlist += "Mythic Recipe Fragment";} //Mythic Recipe fragment 
		}
        else if(zone.value == "shimmering"){
			if(document.getElementById("charmy").checked == true && rand(1,10) <= 4){
				var i = rand(45,79);}
            if(document.getElementById("tamey").checked == true && rand(1,10) <= 5){
				var i = rand(45,79);}
            if(document.getElementById("Blue").checked == true && rand(1,10) <= 4){
                var i = rand (60, 79);}
            if(document.getElementById("newty").checked == true && rand(1,10) <= 5){
                var i = rand (60, 79);}
			else {var i = rand(1,79);}
			
			if(i <= 10){itemlist += "Bones";} //bones
			else if (i <= 15){itemlist += "Decent Meat";} //decent meat
			else if (i <= 20){itemlist += "Leather";} //leather
			else if (i <= 25){itemlist += "Barn Owl Carcass";} //Dead barn owl
			else if (i <= 28){itemlist += "Black Bear Pelt";} //black bear pelt
			else if (i <= 30){itemlist += "Brown Bear Pelt";} //brown bear pelt
			else if (i <= 35){itemlist += "Bison Pelt";} //bison pelt
			else if (i <= 40){itemlist += "Eagle Carcass";} //Dead Eagle
			else if (i <= 45){itemlist += "400x Crystals";} //400x crystals -- CHARMY
			else if (i <= 48){itemlist += "Bison Pelt";} //Buffalo Pelt
			else if (i <= 50){itemlist += "Premium Meat";} //Premium meat
			else if (i <= 54){itemlist += "Large Animal Claws";} //large animal claws
			else if (i <= 58){itemlist += "Large Animal Skull";} //large animal skull
			else if (i <= 60){itemlist += "Brown Moose Pelt";} //brown moose pelt
			else if (i <= 61){itemlist += "Elk Meat";}
			else if (i <= 62){itemlist += "Piebald Moose Pelt";} //piebald moose pelt
			else if (i <= 63){itemlist += "Deer Meat";}
			else if (i <= 64){itemlist += "Albino Moose Pelt";} //albino moose pelt
			else if (i <= 68){itemlist += "Hunting Chest";} //hunting chest
            else if (i <= 73){itemlist += "Common Recipe Fragment";} //Common recipe fragment
            else if (i <= 76){itemlist += "Uncommon Recipe Fragment";} // Uncommon recipe fragment
            else if (i <= 78){itemlist += "Rare Recipe Fragment";} //Rare recipe fragment 
            else if (i <= 79){itemlist += "Mythic Recipe Fragment";} //Mythic Recipe fragment 
		}
			else if(zone.value == "scorched"){
			if(document.getElementById("charmy").checked == true && rand(1,10) <= 4){
				var i = rand(53,81);}
            if(document.getElementById("tamey").checked == true && rand(1,10) <= 5){
				var i = rand(53,81);}
            if(document.getElementById("Blue").checked == true && rand(1,10) <= 4){
                var i = rand (66, 81);}
            if(document.getElementById("newty").checked == true && rand(1,10) <= 5){
                var i = rand (66, 81);}
			else {var i = rand(1,81);}
			
			if(i <= 10){itemlist += "Charred Meat";} //charred meat
			else if (i <= 20){itemlist += "Bones";} //bones
			else if (i <= 25){itemlist += "Decent Meat";} //decent meat
			else if (i <= 30){itemlist += "Leather";} //leather
			else if (i <= 35){itemlist += "Diamond Python Skin";} //diamond python skin
			else if (i <= 40){itemlist += "River Snake Skin";} //river snake skin
			else if (i <= 45){itemlist += "Coral Snake Skin";} //coral snake skin
			else if (i <= 50){itemlist += "Reptile Hide";} //reptile hide
			else if (i <= 53){itemlist += "Large Animal Skull";} //large animal skull -- CHARMY
			else if (i <= 56){itemlist += "Large Animal Claws";} //large animal claws
			else if (i <= 58){itemlist += "Heron Carcass";} //dead heron
			else if (i <= 59){itemlist += "Caribou Meat";}
			else if (i <= 60){itemlist += "Vulture Carcass";} //Dead Vulture'
			else if (i <= 61){itemlist += "Bison Meat";}
			else if (i <= 62){itemlist += "Premium Meat";} //Premium Meat
			else if (i <= 64){itemlist += "Large Reptile Egg";} //large reptile egg
			else if (i <= 66){itemlist += "600x Crystals";} //600x crystals
			else if (i <= 68){itemlist += "Hunting Chest";} //hunting chest
			else if (i <= 70){itemlist += "Shard of Ancients Ribcage";} //shard of ancients ribcage
            else if (i <= 75){itemlist += "Common Recipe Fragment";} //Common recipe fragment
            else if (i <= 78){itemlist += "Uncommon Recipe Fragment";} // Uncommon recipe fragment
            else if (i <= 80){itemlist += "Rare Recipe Fragment";} //Rare recipe fragment 
            else if (i <= 81){itemlist += "Mythic Recipe Fragment";} //Mythic Recipe fragment 
			}
		else if(zone.value == "aether"){
			if(document.getElementById("charmy").checked == true && rand(1,10) <= 4){
				var i = rand(40,67);}
            if(document.getElementById("tamey").checked == true && rand(1,10) <= 5){
				var i = rand(40,67);}
            if(document.getElementById("Blue").checked == true && rand(1,10) <= 4){
                var i = rand (52, 67);}
            if(document.getElementById("newty").checked == true && rand(1,10) <= 5){
                var i = rand (52, 67);}
			else {var i = rand(1,67);}
			
			if(i <= 5){itemlist += "Aether Meat";} //Aether Meat
			else if (i <= 15){itemlist += "Decent Meat";} //decent meat
			else if (i <= 20){itemlist += "Aether Deer Pelt";} //Aether imbued deer pelt
			else if (i <= 25){itemlist += "Leather";} //Aether Imbued Leather
			else if (i <= 30){itemlist += "Aether Bison Pelt";} //Aether Imbued Bison Pelt
			else if (i <= 35){itemlist += "Aether Bones";} //Aether imbued bones
			else if (i <= 38){itemlist += "Aether Bird Carcass";} //Dead Aether Bird
			else if (i <= 40){itemlist += "Strange Geode";} //strange geode -- CHARMY
			else if (i <= 46){itemlist += "Premium Meat";} //premium meat
			else if (i <= 48){itemlist += "800x Crystals";} //800x crystals
			else if (i <= 50){itemlist += "Dragon's Talon";} //Dragon's Talon
			else if (i <= 51){itemlist += "Wolf Meat";}
			else if (i <= 52){itemlist += "Arcane Heart";} //Arcane Heart
			else if (i <= 53){itemlist += "Antelope Meat";}
			else if (i <= 54){itemlist += "Hunting Chest";} //Hunting Chest
			else if (i <= 55){itemlist += "Caribou Meat";}
			else if (i <= 56){itemlist += "Aether Bag";} //Mysterious Sack
			else if (i <= 57){itemlist += "Elk Meat";}
            else if (i <= 61){itemlist += "Common Recipe Fragment";} //Common recipe fragment
            else if (i <= 64){itemlist += "Uncommon Recipe Fragment";} // Uncommon recipe fragment
            else if (i <= 66){itemlist += "Rare Recipe Fragment";} //Rare recipe fragment 
            else if (i <= 67){itemlist += "Mythic Recipe Fragment";} //Mythic Recipe fragment 
		}
	}
//FISHING//	
	function rollFish(){
		if (zone.value == "radiant"){
			if(document.getElementById("charmy").checked == true && rand(1,10) <= 4){
				var i = rand(28,58);}
            if(document.getElementById("tamey").checked == true && rand(1,10) <= 5){
				var i = rand(28,58);}
            if(document.getElementById("Blue").checked == true && rand(1,10) <= 4){
                var i = rand (39, 58);}
            if(document.getElementById("newty").checked == true && rand(1,10) <= 5){
                var i = rand (39, 58);}
			else {var i = rand(1,58);}
			
			if(i <= 5){itemlist += "Decent Fish";} // decent fish 
            else if(i <= 10){itemlist += "Water";} //water 
            else if(i <= 15){itemlist += "Trout";} // trout
            else if(i <= 20){itemlist += "Arowana";} //Arowana
            else if(i <= 25){itemlist += "Boot";} //boot
            else if(i <= 28){itemlist += "Fishing Chest";} // Fishing chest - CHARMY
            else if(i <= 31){itemlist += "Premium Fish Meat";}//Premium Fish Meat
            else if(i <= 34){itemlist += "Jellyfish";}//jelly fish
            else if(i <= 37){itemlist += "Dolphin Carcass";}//dolphin carcass
			else if(i <= 41){itemlist += "200 Crystals";} // 200 crystals
			else if(i <= 45){itemlist += "Whale Bone";}// Whale bone
            else if(i <= 46){itemlist += "Shark Carcass";}//Shark carcass - BLUE
            else if(i <= 49){itemlist += "Common Recipe Fragment";} //Common recipe fragment
            else if(i <= 53){itemlist += "Uncommon Recipe Fragment";} // Uncommon recipe fragment
            else if(i <= 56){itemlist += "Rare Recipe Fragment";} //Rare recipe fragment 
            else if(i <= 58){itemlist += "Mythic Recipe Fragment";} //Mythic Recipe fragment 
			
		} else if (zone.value == "gloom"){
			if(document.getElementById("charmy").checked == true && rand(1,10) <= 4){
				var i = rand(33,57);}
            if(document.getElementById("tamey").checked == true && rand(1,10) <= 5){
				var i = rand(33,57);}
            if(document.getElementById("Blue").checked == true && rand(1,10) <= 4){
                var i = rand (46, 57);}
            if(document.getElementById("newty").checked == true && rand(1,10) <= 5){
                var i = rand (46, 57);}
			else {var i = rand(1,57);}
			
			if(i <= 5){itemlist += "Decent Fish";}// Decent fish 
            else if(i <= 10){itemlist += "Spoiled Fish Meat";}//Spoiled fish meat
            else if(i <= 15){itemlist += "Water";}//water
            else if(i <= 20){itemlist += "Catfish";}//catfish
            else if(i <= 25){itemlist += "Arowana";}//Arowana
            else if(i <= 30){itemlist += "Arapaima";}//Arapaima
            else if(i <= 33){itemlist += "Premium Fish Meat";}//Premium Fish Meat -CHARMY
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
			
		} else if (zone.value == "frigid"){
			if(document.getElementById("charmy").checked == true && rand(1,10) <= 4){
				var i = rand(33,55);}
            if(document.getElementById("tamey").checked == true && rand(1,10) <= 5){
				var i = rand(33,55);}
            if(document.getElementById("Blue").checked == true && rand(1,10) <= 4){
                var i = rand (42, 55);}
            if(document.getElementById("newty").checked == true && rand(1,10) <= 5){
                var i = rand (42, 55);}
			else {var i = rand(1,55);}
			
			if(i <= 5){itemlist += "Decent Fish";}
            else if(i <= 10){itemlist += "Frigid Fish Meat";}//frigid fish meat
            else if(i <= 15){itemlist += "Water";}
            else if(i <= 20){itemlist += "Seaweed";}
            else if(i <= 25){itemlist += "Lobster";}
            else if(i <= 30){itemlist += "Gar";}
            else if(i <= 33){itemlist += "Premium Fish Meat";} // CHARMY
            else if(i <= 36){itemlist += "Jellyfish";}
            else if(i <= 38){itemlist += "Whalebone";}
            else if(i <= 40){itemlist += "Boot";} 
            else if(i <= 42){itemlist += "Fishing Chest";}//BLUE
            else if(i <= 44){itemlist += "200 Crystals";}
			else if(i <= 49){itemlist += "Common Recipe Fragment";} //Common recipe fragment
            else if(i <= 52){itemlist += "Uncommon Recipe Fragment";} // Uncommon recipe fragment
            else if(i <= 54){itemlist += "Rare Recipe Fragment";} //Rare recipe fragment 
            else if(i <= 55){itemlist += "Mythic Recipe Fragment";} //Mythic Recipe fragment 
			
		} else if (zone.value == "shimmering"){
			if(document.getElementById("charmy").checked == true && rand(1,10) <= 4){
				var i = rand(30,51);}
            if(document.getElementById("tamey").checked == true && rand(1,10) <= 5){
				var i = rand(30,51);}
            if(document.getElementById("Blue").checked == true && rand(1,10) <= 4){
                var i = rand (40, 51);}
            if(document.getElementById("newty").checked == true && rand(1,10) <= 5){
                var i = rand (40, 51);}
			else {var i = rand(1,51);}
			
			if(i <= 5){itemlist += "Decent Fish";}
            else if(i <= 10){itemlist += "Water";}
            else if(i <= 15){itemlist += "Arapaima";}
            else if(i <= 20){itemlist += "Snowflake Moray Eel";}
            else if(i <= 25){itemlist += "Trilobite";}
            else if(i <= 30){itemlist += "Large Fish Egg";} //CHARMY
            else if(i <= 33){itemlist += "Premium Fish Meat";}
            else if(i <= 36){itemlist += "Shark Carcass";}
            else if(i <= 38){itemlist += "Boot";}
			else if(i <= 42){itemlist += "Whale Bone";} 
            else if(i <= 43){itemlist += "Fishing Chest";} //BLUE
			else if(i <= 45){itemlist += "Common Recipe Fragment";} //Common recipe fragment
            else if(i <= 48){itemlist += "Uncommon Recipe Fragment";} // Uncommon recipe fragment
            else if (i <= 50){itemlist += "Rare Recipe Fragment";} //Rare recipe fragment 
            else if (i <= 51){itemlist += "Mythic Recipe Fragment";} //Mythic Recipe fragment 
			
		} else if (zone.value == "scorched"){
			if(document.getElementById("charmy").checked == true && rand(1,10) <= 4){
				var i = rand(33,58);}
            if(document.getElementById("tamey").checked == true && rand(1,10) <= 5){
				var i = rand(33,58);}
            if(document.getElementById("Blue").checked == true && rand(1,10) <= 4){
                var i = rand (43, 58);}
            if(document.getElementById("newty").checked == true && rand(1,10) <= 5){
				var i = rand(33,58);}
			else {var i = rand(1,58);}

			if(i <= 5){itemlist += "Decent Fish";}
            else if(i <= 10){itemlist += "Charred Fish Meat";}
            else if(i <= 20){itemlist += "Water";}
            else if(i <= 25){itemlist += "Sand";}
            else if(i <= 30){itemlist += "Turtle Shell";}
            else if(i <= 33){itemlist += "Jellyfish";} //CHARMY
            else if(i <= 36){itemlist += "Squid Ink";}
            else if(i <= 39){itemlist += "Premium Fish Meat";}
            else if(i <= 41){itemlist += "Octopus Carcass";} 
			else if(i <= 42){itemlist += "Whale Bone";}
            else if(i <= 43){itemlist += "Boot";} // BLUE
            else if(i <= 45){itemlist += "Fishing Chest";}
            else if(i <= 47){itemlist += "200 Crystals";}
			else if(i <= 52){itemlist += "Common Recipe Fragment";} //Common recipe fragment
            else if(i <= 55){itemlist += "Uncommon Recipe Fragment";} // Uncommon recipe fragment
            else if(i <= 57){itemlist += "Rare Recipe Fragment";} //Rare recipe fragment 
            else if(i <= 58){itemlist += "Mythic Recipe Fragment";} //Mythic Recipe fragment 
			
		} else if (zone.value == "aether"){
			if(document.getElementById("charmy").checked == true && rand(1,10) <= 4){
				var i = rand(25,53);}
            if(document.getElementById("tamey").checked == true && rand(1,10) <= 5){
				var i = rand(33,58);}
            if(document.getElementById("Blue").checked == true && rand(1,10) <= 4){
                var i = rand (40, 53);}
            if(document.getElementById("newty").checked == true && rand(1,10) <= 5){
                var i = rand (40, 53);}
			else {var i = rand(1,53);}
			
			if(i <= 5){itemlist += "Decent Fish";}
            else if(i <= 10){itemlist += "Aether Fish Meat";}
            else if(i <= 15){itemlist += "Glowing Crab";}
            else if(i <= 20){itemlist += "Arowana";}
            else if(i <= 25){itemlist += "Jellyfish";}//CHARMY
            else if(i <= 30){itemlist += "Arcane Frog";}
            else if(i <= 35){itemlist += "Premium Fish Meat";}
			else if(i <= 37){itemlist += "Whale Bone";}
            else if(i <= 39){itemlist += "Undulated Moray Eel";}
            else if(i <= 40){itemlist += "Fishing Chest";}//BLUE
            else if(i <= 41){itemlist += "Aether Bag";}
            else if(i <= 42){itemlist += "Coelacanth";}
			else if(i <= 47){itemlist += "Common Recipe Fragment";} //Common recipe fragment
            else if(i <= 50){itemlist += "Uncommon Recipe Fragment";} // Uncommon recipe fragment
            else if(i <= 52){itemlist += "Rare Recipe Fragment";} //Rare recipe fragment 
            else if(i <= 53){itemlist += "Mythic Recipe Fragment";} //Mythic Recipe fragment 
			
		}
	}
//FORAGING//
	function rollForage(){
		if (zone.value == "radiant"){
			if(document.getElementById("charmy").checked == true && rand(1,10) <= 4){
				var i = rand(83,120);}
            if(document.getElementById("tamey").checked == true && rand(1,10) <= 5){
				var i = rand(83,120);}
            if(document.getElementById("Blue").checked == true && rand(1,10) <= 4){
                var i = rand (103, 120);}
            if(document.getElementById("newty").checked == true && rand(1,10) <= 5){
                var i = rand (103, 120);}
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

						
		} else if (zone.value == "gloom"){
			if(document.getElementById("charmy").checked == true && rand(1,10) <= 4){
				var i = rand(78,107);}
            if(document.getElementById("tamey").checked == true && rand(1,10) <= 5){
				var i = rand(78,107);}
            if(document.getElementById("Blue").checked == true && rand(1,10) <= 4){
                var i = rand (94, 107);}
            if(document.getElementById("newty").checked == true && rand(1,10) <= 5){
                var i = rand (94, 107);}
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
		
		} else if (zone.value == "frigid"){
			if(document.getElementById("charmy").checked == true && rand(1,10) <= 4){
				var i = rand(72,102);}
            if(document.getElementById("tamey").checked == true && rand(1,10) <= 5){
				var i = rand(72,102);}
            if(document.getElementById("Blue").checked == true && rand(1,10) <= 4){
                var i = rand (89, 102);}
            if(document.getElementById("newty").checked == true && rand(1,10) <= 5){
                var i = rand (89, 102);}
			else {var i = rand(1,102);}
		
			if(i <= 10){itemlist += "Large Feathers";} // Large Feathers
			else if (i <= 20){itemlist += "Sticks";} // sticks
			else if (i <= 25){itemlist += "Wood";} // Wood
			else if (i <= 35){itemlist += "Ice";} // Ice Block
			else if (i <= 40){itemlist += "Herbs";} // Herbs
			else if (i <= 45){itemlist += "Blue Berries";} // Blue berries
			else if (i <= 55){itemlist += "Small Rocks";} // small rocks
			else if (i <= 60){itemlist += "Plant Fiber";} // Plant fiber
			else if (i <= 65){itemlist += "Large Rocks";} // large rocks
			else if (i <= 68){itemlist += "Small Beans";} // small beans
			else if (i <= 70){itemlist += "Honey";} // honey
			else if (i <= 72){itemlist += "Medium Animal Horn";} // medium animal horn -- CHARMY
			else if (i <= 76){itemlist += "Salt";} // Salt
			else if (i <= 80){itemlist += "Lime";} // Lime
			else if (i <= 83){itemlist += "Cooking Oil";} // Oil
			else if (i <= 85){itemlist += "White Pearl";} // White Pearl
			else if (i <= 87){itemlist += "Sanguine Fruit";} // Sanguine Fruit
			else if (i <= 89){itemlist += "Foraging Chest";} // Foraging Chest --BLUE
			else if (i <= 91){itemlist += "x200 Crystals";} // 200 Crystals
            else if (i <= 96){itemlist += "Common Recipe Fragment";} //Common recipe fragment
            else if (i <= 99){itemlist += "Uncommon Recipe Fragment";} // Uncommon recipe fragment
            else if (i <= 101){itemlist += "Rare Recipe Fragment";} //Rare recipe fragment 
            else if (i <= 102){itemlist += "Mythic Recipe Fragment";} //Mythic Recipe fragment


		} else if (zone.value == "shimmering"){
			if(document.getElementById("charmy").checked == true && rand(1,10) <= 4){
				var i = rand(68,103);}
            if(document.getElementById("tamey").checked == true && rand(1,10) <= 5){
				var i = rand(68,103);}
            if(document.getElementById("Blue").checked == true && rand(1,10) <= 4){
                var i = rand (90, 103);}
            if(document.getElementById("newty").checked == true && rand(1,10) <= 5){
                var i = rand (90, 103);}
			else {var i = rand(1,103);}
			
			if(i <= 10){itemlist += "Large Feathers";} // Large Feathers
			else if (i <= 15){itemlist += "Grapes";} // Grapes
			else if (i <= 20){itemlist += "Wheat";} // Dried Wheat
			else if (i <= 30){itemlist += "Wood";} // Wood
			else if (i <= 40){itemlist += "Sticks";} // sticks
			else if (i <= 45){itemlist += "Plant Fiber";} // plant fiber
			else if (i <= 55){itemlist += "Small Rocks";} // Small rocks
			else if (i <= 60){itemlist += "Honey";} // honey
			else if (i <= 65){itemlist += "Herbs";} // Herbs
		    else if (i <= 68){itemlist += "Coconut";} // Coconut -- CHARMY
		    else if (i <= 75){itemlist += "Large Rocks";} // large rocks
			else if (i <= 77){itemlist += "Banana";} // banana
			else if (i <= 79){itemlist += "Dragon Fruit";} // dragon fruit
			else if (i <= 81){itemlist += "Long Beans";} // long beans
			else if (i <= 84){itemlist += "Medium Animal Horns";} // medium animal horns
			else if (i <= 86){itemlist += "Large Animal Horns";} // large animal horns
			else if (i <= 90){itemlist += "x400 Crystals";} // 400 Crystals BLUE
		    else if (i <= 92){itemlist += "Foraging Chest";} // Foraging Chest
            else if (i <= 97){itemlist += "Common Recipe Fragment";} //Common recipe fragment
            else if (i <= 100){itemlist += "Uncommon Recipe Fragment";} // Uncommon recipe fragment
            else if (i <= 102){itemlist += "Rare Recipe Fragment";} //Rare recipe fragment 
            else if (i <= 103){itemlist += "Mythic Recipe Fragment";} //Mythic Recipe fragment



		} else if (zone.value == "scorched"){
			if(document.getElementById("charmy").checked == true && rand(1,10) <= 4){
				var i = rand(68,96);}
            if(document.getElementById("tamey").checked == true && rand(1,10) <= 5){
				var i = rand(68,96);}
            if(document.getElementById("Blue").checked == true && rand(1,10) <= 4){
                var i = rand (83, 96);}
            if(document.getElementById("newty").checked == true && rand(1,10) <= 5){
                var i = rand (83, 96);}
			else {var i = rand(1,96);}
			
			if(i <= 10){itemlist += "Large Feathers";} // Large Feathers
			else if (i <= 15){itemlist += "Clay";} // Clay
			else if (i <= 25){itemlist += "Sand";} // Sand
          	else if (i <= 35){itemlist += "Sticks";} // Sticks
			else if (i <= 40){itemlist += "Wood";} // Wood
			else if (i <= 45){itemlist += "Herbs";} // Herbs
			else if (i <= 50){itemlist += "Cactus";} // Cactus
			else if (i <= 53){itemlist += "Honey";} // honey
			else if (i <= 58){itemlist += "Large Rocks";} // Large Rocks
			else if (i <= 63){itemlist += "Small Rocks";} // Small rocks
			else if (i <= 65){itemlist += "Plant Fiber";} // plant fiber
			else if (i <= 68){itemlist += "Large Animal Horn";} // Large Animal Horn -- CHARMY
			else if (i <= 73){itemlist += "Cooking Oil";} // oil
			else if (i <= 76){itemlist += "Chitin";} // chitin
			else if (i <= 78){itemlist += "Metal";} // metal
			else if (i <= 80){itemlist += "Medium Animal Horn";} // medium animal horns
			else if (i <= 83){itemlist += "x600 Crystals";} // 600 Crystals --BLUE
			else if (i <= 85){itemlist += "Foraging Chest";} // Foraging Chest
            else if (i <= 90){itemlist += "Common Recipe Fragment";} //Common recipe fragment
            else if (i <= 93){itemlist += "Uncommon Recipe Fragment";} // Uncommon recipe fragment
            else if (i <= 95){itemlist += "Rare Recipe Fragment";} //Rare recipe fragment 
            else if (i <= 96){itemlist += "Mythic Recipe Fragment";} //Mythic Recipe fragment
		
		
		} else if (zone.value == "aether"){
			if(document.getElementById("charmy").checked == true && rand(1,10) <= 4){
				var i = rand(83,113);}
            if(document.getElementById("tamey").checked == true && rand(1,10) <= 5){
				var i = rand(83,113);}
            if(document.getElementById("Blue").checked == true && rand(1,10) <= 4){
                var i = rand (100, 113);}
            if(document.getElementById("newty").checked == true && rand(1,10) <= 5){
                var i = rand (100, 113);}
			else {var i = rand(1,113);}
			
			if(i <= 10){itemlist += "Aether Feathers";} // Aether Imbued Feathers
			else if (i <= 20){itemlist += "Large Rocks";} // Large Rocks
			else if (i <= 30){itemlist += "Sticks";} // Sticks
			else if (i <= 40){itemlist += "Herbs";} // herbs
			else if (i <= 50){itemlist += "Small Rocks";} // Small Rocks
			else if (i <= 55){itemlist += "Plant Fiber";} // Plant Fiber
			else if (i <= 60){itemlist += "Wood";} // Wood
			else if (i <= 65){itemlist += "Arcane Fruit";} // Arcane Fruit
			else if (i <= 70){itemlist += "Arcane Honey";} // Arcane Honey
			else if (i <= 73){itemlist += "Strange Rock";} // Strange Rock
			else if (i <= 80){itemlist += "Glowing Mushrooms";} // Glowing Mushrooms
			else if (i <= 83){itemlist += "Exotic Scale";} // Exotic Scale -- CHARMY
			else if (i <= 90){itemlist += "Shimmering Pearl";} // Shimmering Pearl
			else if (i <= 93){itemlist += "Eternal Element";} // Eternal Flame
			else if (i <= 95){itemlist += "Aether Bag";} // Mysterious Sack
			else if (i <= 98){itemlist += "Aether Pages";} // Aether Imbued Pages 
			else if (i <= 100){itemlist += "600 Crystals";} // 600 Crystals - BLUE
			else if (i <= 102){itemlist += "Foraging Chest";} // Foraging Chest
            else if (i <= 107){itemlist += "Common Recipe Fragment";} //Common recipe fragment
            else if (i <= 110){itemlist += "Uncommon Recipe Fragment";} // Uncommon recipe fragment
            else if (i <= 112){itemlist += "Rare Recipe Fragment";} //Rare recipe fragment 
            else if (i <= 113){itemlist += "Mythic Recipe Fragment";} //Mythic Recipe fragment
		
		}
		
	}
//CAVING//
      function rollCave(){
		if (zone.value == "radiant"){
			if(document.getElementById("charmy").checked == true && rand(1,10) <= 4){
				var i = rand(23,48);}
            if(document.getElementById("tamey").checked == true && rand(1,10) <= 5){
				var i = rand(23,48);}
            if(document.getElementById("Blue").checked == true && rand(1,10) <= 4){
                var i = rand (35, 48);}
            if(document.getElementById("newty").checked == true && rand(1,10) <= 5){
                var i = rand (35, 48);}
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

						
		} else if (zone.value == "gloom"){
			if(document.getElementById("charmy").checked == true && rand(1,10) <= 4){
				var i = rand(23,48);}
            if(document.getElementById("tamey").checked == true && rand(1,10) <= 5){
				var i = rand(23,48);}
            if(document.getElementById("Blue").checked == true && rand(1,10) <= 4){
                var i = rand (35, 48);}
            if(document.getElementById("newty").checked == true && rand(1,10) <= 5){
                var i = rand (35, 48);}
			else {var i = rand(1,48);}
			
			if(i <= 5){itemlist += "metal";} //metal 
            else if(i <= 10){itemlist += "Raw Crystal";}
            else if(i <= 15){itemlist += "Iron";}
            else if(i <= 20){itemlist += "Jade";}
            else if(i <= 23){itemlist += "Ruby";}//CHARMY
            else if(i <= 26){itemlist += "Emerald";}
            else if(i <= 29){itemlist += "Malachite";} 
            else if(i <= 32){itemlist += "Geode";} 
            else if(i <= 35){itemlist += "200 Crystals";} //BLUE
            else if(i <= 37){itemlist += "Caving Chest";}
			else if (i <= 42){itemlist += "Common Recipe Fragment";} //Common recipe fragment
            else if (i <= 45){itemlist += "Uncommon Recipe Fragment";} // Uncommon recipe fragment
            else if (i <= 47){itemlist += "Rare Recipe Fragment";} //Rare recipe fragment 
            else if (i <= 48){itemlist += "Mythic Recipe Fragment";} //Mythic Recipe fragment 
		
		} else if (zone.value == "frigid"){
			if(document.getElementById("charmy").checked == true && rand(1,10) <= 4){
				var i = rand(23,48);}
            if(document.getElementById("tamey").checked == true && rand(1,10) <= 5){
				var i = rand(23,48);}
            if(document.getElementById("Blue").checked == true && rand(1,10) <= 4){
                var i = rand (35, 48);}
            if(document.getElementById("newty").checked == true && rand(1,10) <= 5){
                var i = rand (35, 48);}
			else {var i = rand(1,48);}
		
			if(i <= 5){itemlist += "metal";} //metal 
            else if(i <= 10){itemlist += "Raw Crystal";}
            else if(i <= 15){itemlist += "Iron";}
            else if(i <= 20){itemlist += "Limestone";}
            else if(i <= 23){itemlist += "Lapis Lazuli";}//CHARMY
            else if(i <= 26){itemlist += "Sapphire";}
            else if(i <= 29){itemlist += "Aquamarine";} 
            else if(i <= 32){itemlist += "Geode";} 
            else if(i <= 35){itemlist += "200 Crystals";} //BLUE
            else if(i <= 37){itemlist += "Caving Chest";}
			else if (i <= 42){itemlist += "Common Recipe Fragment";} //Common recipe fragment
            else if (i <= 45){itemlist += "Uncommon Recipe Fragment";} // Uncommon recipe fragment
            else if (i <= 47){itemlist += "Rare Recipe Fragment";} //Rare recipe fragment 
            else if (i <= 48){itemlist += "Mythic Recipe Fragment";} //Mythic Recipe fragment 

		} else if (zone.value == "shimmering"){
			if(document.getElementById("charmy").checked == true && rand(1,10) <= 4){
				var i = rand(23,48);}
            if(document.getElementById("tamey").checked == true && rand(1,10) <= 5){
				var i = rand(23,48);}
            if(document.getElementById("Blue").checked == true && rand(1,10) <= 4){
                var i = rand (35, 48);}
            if(document.getElementById("newty").checked == true && rand(1,10) <= 5){
                var i = rand (35, 48);}
			else {var i = rand(1,48);}
		
			if(i <= 5){itemlist += "metal";} //metal 
            else if(i <= 10){itemlist += "Raw Crystal";}
            else if(i <= 15){itemlist += "Iron";}
            else if(i <= 20){itemlist += "Gold";}
            else if(i <= 23){itemlist += "Amythest";}//CHARMY
            else if(i <= 26){itemlist += "Sunstone";}
            else if(i <= 29){itemlist += "Aquamarine";} 
            else if(i <= 32){itemlist += "Geode";} 
            else if(i <= 35){itemlist += "200 Crystals";} //BLUE
            else if(i <= 37){itemlist += "Caving Chest";}
			else if (i <= 42){itemlist += "Common Recipe Fragment";} //Common recipe fragment
            else if (i <= 45){itemlist += "Uncommon Recipe Fragment";} // Uncommon recipe fragment
            else if (i <= 47){itemlist += "Rare Recipe Fragment";} //Rare recipe fragment 
            else if (i <= 48){itemlist += "Mythic Recipe Fragment";} //Mythic Recipe fragment

		} else if (zone.value == "scorched"){
			if(document.getElementById("charmy").checked == true && rand(1,10) <= 4){
				var i = rand(23,48);}
            if(document.getElementById("tamey").checked == true && rand(1,10) <= 5){
				var i = rand(23,48);}
            if(document.getElementById("Blue").checked == true && rand(1,10) <= 4){
                var i = rand (35,48);}
            if(document.getElementById("newty").checked == true && rand(1,10) <= 5){
                var i = rand (35,48);}
			else {var i = rand(1,48);}
		
			if(i <= 5){itemlist += "metal";} //metal 
            else if(i <= 10){itemlist += "Raw Crystal";}
            else if(i <= 15){itemlist += "Iron";}
            else if(i <= 20){itemlist += "Garnet";}
            else if(i <= 23){itemlist += "Sand";}//CHARMY
            else if(i <= 26){itemlist += "Amythest";}
            else if(i <= 29){itemlist += "Limestone";} 
            else if(i <= 32){itemlist += "Geode";} 
            else if(i <= 35){itemlist += "200 Crystals";} //BLUE
            else if(i <= 37){itemlist += "Caving Chest";}
			else if (i <= 42){itemlist += "Common Recipe Fragment";} //Common recipe fragment
            else if (i <= 45){itemlist += "Uncommon Recipe Fragment";} // Uncommon recipe fragment
            else if (i <= 47){itemlist += "Rare Recipe Fragment";} //Rare recipe fragment 
            else if (i <= 48){itemlist += "Mythic Recipe Fragment";} //Mythic Recipe fragment 

		} else if (zone.value == "aether"){
			if(document.getElementById("charmy").checked == true && rand(1,10) <= 4){
				var i = rand(23,48);}
            if(document.getElementById("tamey").checked == true && rand(1,10) <= 5){
				var i = rand(23,48);}
            if(document.getElementById("Blue").checked == true && rand(1,10) <= 4){
                var i = rand (35,48);}
            if(document.getElementById("newty").checked == true && rand(1,10) <= 5){
                var i = rand (35,48);}
			else {var i = rand(1,48);}
		
			if(i <= 5){itemlist += "metal";} //metal 
            else if(i <= 10){itemlist += "Raw Crystal";}
            else if(i <= 15){itemlist += "Iron";}
            else if(i <= 20){itemlist += "Selenite";}
            else if(i <= 23){itemlist += "Chrysocolla";}//CHARMY
            else if(i <= 26){itemlist += "Serpentine";}
            else if(i <= 29){itemlist += "Moonstone";} 
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
		if (activity.value == "hunting"){rollHunt();}
		else if (activity.value == "fishing"){rollFish();}
		else if (activity.value == "foraging"){rollForage();}
        else if (activity.value == "caving"){rollCave();}
	}
	
	return itemlist;
}

function injury(){
	if (document.getElementById('souly').checked == true){
		var i = rand(2,20);
	} else {var i = rand(1,20);}
	
	if (document.getElementById(temp.value == "timid") == true){
		i += 1;}
	else if (document.getElementById(temp.value == "aggressive") == true){
		i = Math.max(1, i - 1);}
	
	if (activity.value == "hunting"){
		if(i == 1){
			return "Your Character gets in a scuffle with the prey and comes out with a nasty scar! " + rand(10,30) + " HP was lost";}
		else if(i == 2){
			return "While in a fight with the prey, your character receives a painful wound. " + rand(10,50) + " HP was lost.";}
			// STATUS EFFECTS
		else if(i == 3){
			return "Your character has received Minor Poisoning. " + rand(20,50) + " HP was lost.";}
		else if(i == 4){
			return "Your character has received Major Poisoning. " + rand(30,100) + " HP was lost.";}
		else if(i == 5){
			return "Your character has received a Broken Bone. " + rand(30,100) + " HP was lost.";}
		else if(i == 6){
			return "Your character has received a Minor Wound. " + rand(20,50) + " HP was lost.";}
		else if(i == 7){
			return "Your character has received an Infected Wound. " + rand(30,100) + " HP was lost.";}
			//AETHER
		else if(zone.value == "aether" && i == 8){
			return "Perhaps your character has spent too much time in the darkest reaches of the Aether realm -" + rand(40,60) + " HP was lost";}
		else if(zone.value == "aether" && i == 9){
			return "The below is a dangerous place, and while you and your character braved it, you didn't come out unscathed. -" + rand(30,100) + " HP was lost";}
		else if(zone.value == "aether" && i == 10){
			return "Your Character has received Blighted Status Effect. -" + rand(50,200) + " HP was lost";}
		else{ return dragonName.value +" was not injured.";}
	} else if (activity.value == "fishing"){
		if(i == 1){
			return "Your character gets slapped by a rather large fish and comes out with a nasty scar! " + rand(10,30) + " HP was lost";}
		else if(i == 2){
			return "While diving in the waters your character receives a painful wound. " + rand(10,50) + " HP was lost.";}
			// STATUS EFFECTS
		else if(i == 3){
			return "Your character has received Minor Poisoning. " + rand(20,50) + " HP was lost.";}
		else if(i == 4){
			return "Your character has received Major Poisoning. " + rand(30,100) + " HP was lost.";}
		else if(i == 5){
			return "Your character has received a Broken Bone. " + rand(30,100) + " HP was lost.";}
		else if(i == 6){
			return "Your character has received a Minor Wound. " + rand(20,50) + " HP was lost.";}
		else if(i == 7){
			return "Your character has received an Infected Wound. " + rand(30,100) + " HP was lost.";}
			//AETHER
		else if(zone.value == "aether" && i == 8){
			return "Perhaps your character has spent too much time in the darkest reaches of the Aether realm -" + rand(40,60) + " HP was lost";}
		else if(zone.value == "aether" && i == 9){
			return "The below is a dangerous place, and while you and your  character braved it, you didn't come out unscathed. -" + rand(30,100) + " HP was lost";}
		else if(zone.value == "aether" && i == 10){
			return "Your Character has received Blighted Status Effect. -" + rand(50,200) + " HP was lost";}
		else{ return dragonName.value +" was not injured.";}
	} else if (activity.value == "foraging"){
		if(i == 1){
			return "Your character gets stuck in a dense forest and comes out with a nasty scar! " + rand(10,30) + " HP was lost";}
		else if(i == 2){
			return "While exploring for materials your character receives a painful wound. " + rand(10,50) + " HP was lost.";}
			// STATUS EFFECTS
		else if(i == 3){
			return "Your character has received Minor Poisoning. " + rand(20,50) + " HP was lost.";}
		else if(i == 4){
			return "Your character has received Major Poisoning. " + rand(30,100) + " HP was lost.";}
		else if(i == 5){
			return "Your character has received a Broken Bone. " + rand(30,100) + " HP was lost.";}
		else if(i == 6){
			return "Your character has received a Minor Wound. " + rand(20,50) + " HP was lost.";}
		else if(i == 7){
			return "Your character has received an Infected Wound. " + rand(30,100) + " HP was lost.";}
			//AETHER
		else if(zone.value == "aether" && i == 8){
			return "Perhaps your character has spent too much time in the darkest reaches of the Aether realm -" + rand(40,60) + " HP was lost";}
		else if(zone.value == "aether" && i == 9){
			return "The below is a dangerous place, and while you and your  character braved it, you didn't come out unscathed. -" + rand(30,100) + " HP was lost";}
		else if(zone.value == "aether" && i == 10){
			return "Your Character has received Blighted Status Effect. -" + rand(50,200) + " HP was lost";}
		else{ return dragonName.value +" was not injured.";}
	} else if (activity.value == "caving"){
		if(i == 1){
			return "Your  character gets caught in the caverns and comes out with a nasty scar! " + rand(10,30) + " HP was lost";}
		else if(i == 2){
			return "While exploring a deeper section of the cave your character receives a painful wound. " + rand(10,50) + " HP was lost.";}
			// STATUS EFFECTS
		else if(i == 3){
			return "Your character has received Minor Poisoning. " + rand(20,50) + " HP was lost.";}
		else if(i == 4){
			return "Your character has received Major Poisoning. " + rand(30,100) + " HP was lost.";}
		else if(i == 5){
			return "Your character has received a Broken Bone. " + rand(30,100) + " HP was lost.";}
		else if(i == 6){
			return "Your character has received a Minor Wound. " + rand(20,50) + " HP was lost.";}
		else if(i == 7){
			return "Your character has received an Infected Wound. " + rand(30,100) + " HP was lost.";}
			//AETHER
		else if(zone.value == "aether" && i == 8){
			return "Perhaps your character has spent too much time in the darkest reaches of the Aether realm -" + rand(40,60) + " HP was lost";}
		else if(zone.value == "aether" && i == 9){
			return "The below is a dangerous place, and while you and your  character braved it, you didn't come out unscathed. -" + rand(30,100) + " HP was lost";}
		else if(zone.value == "aether" && i == 10){
			return "Your Character has received Blighted Status Effect. -" + rand(50,200) + " HP was lost";}
		else{ return dragonName.value +" was not injured.";}
	}
}

function aberrantInjury()
{
	// Injury specific to aberrant dragons.
	if(aberrant.value != "0%") {
		var aberrantData = aberrantDmg[aberrant.value];

		var procRoll = rand(1, 10);

		if(procRoll <= aberrantData.proc_chance)
		{
			return dragonName.value + "'s aberrations act up and their magic runs wild,\
			lashing out at everything in the vicinity - including its master. "
			+ aberrantData.flavortext
			+ " -" + rand(aberrantData.min_dmg, aberrantData.max_dmg) + " HP was lost";
		}
	}

	return "";
}

  
 function roll() { 
	document.getElementById("result").innerHTML = "";
	
	if (pass() == true){
		document.getElementById("result").innerHTML += dragonName.value + " went " + activity.value + " and returned with the following:<br>"
		+ items() 
		+ "<br><i>Items have been added to your hoard.</i><br>";}
	else{
		document.getElementById("result").innerHTML += dragonName.value + " went " + activity.value + " but failed to catch anything!<br>";
	}
	
	document.getElementById("result").innerHTML += "<br>" + injury();

	var aberrantInjuryRoll = aberrantInjury();
	if(aberrantInjuryRoll)
	{
		document.getElementById("result").innerHTML += "<br><br>" + aberrantInjuryRoll;
	}
}

function clearForms() {
	document.getElementById("activitytype").reset();
    document.getElementById("result").innerHTML = "";
}
