var dragonURL = document.getElementById('dURL');
var activity = document.getElementById('activity');
var rank = document.getElementById('rank');
var zone = document.getElementById('zone');
var temp = document.getElementById('temp');

function rand(min, max) {
  var min = min || 0,
      max = max || Number.MAX_SAFE_INTEGER;

  return Math.floor(Math.random() * (max - min + 1)) + min;}

function dragonName(){
	var x = dragonURL.value.split('/');
	var y = x[5].split('-');
	var name = y[0];
	var number = y[1];
	
	return "<a href='" + dragonURL.value + "'>" + name + " " + number + "</a>";
}
  
  
 function pass(){
	var i = rand(1,100);

	if (document.getElementById('AdeptY').checked === true){
	    i += 5;}

	if (document.getElementById('nofaily').checked === true){
		return true;}

	else if (rank.value == "beginner" && i <= 40){return true;}
	else if (rank.value == "stablehand" && i <= 60){return true;}
	else if (rank.value == "tamer" && i <= 70){return true;}
	else if (rank.value == "master" && i <= 85){return true;}
	else {return false;}
}
 
function items(){
	var lootSize;
	var itemlist="";
	
	if (document.getElementById("barrely").checked == true){
		lootSize = rand(1,4);}
	else {lootSize = rand(1,3);}
	if (document.getElementById("hoardery").checked == true && rand(1,10) <= 4){
		lootSize += 1;
		itemlist += "<i>Hoarder skill activated!</i><br>";}
	
function rollHunt(){
		if (zone.value == "radiant"){
			if(document.getElementById("charmy").checked == true){
				var i = rand(55,83);}
			else {var i = rand(1,83);}
			
			if(i <= 10){itemlist += ":thumb740288268:";} // bones
			else if (i <= 15){itemlist += "Decent Meat";} // Decent meat
			else if (i <= 20){itemlist += "Leather";} // leather
			else if (i <= 25){itemlist += "Brown Rabbit Pelt";} // brown rabbit pelt
			else if (i <= 30){itemlist += "Grey Rabbit Pelt";} // grey rabbit pelt
			else if (i <= 35){itemlist += "Cream Rabbit Pelt";} // cream rabbit pelt
			else if (i <= 40){itemlist += "Fox Pelt";} // fox pelt
			else if (i <= 43){itemlist += "Small Animal Carcass";} // fox carcass
			else if (i <= 50){itemlist += "Wolf Pelt";} // wolf pelt
			else if (i <= 55){itemlist += "Hark Carcass";} // dead hawk -- CHARMY
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
		}
	else if (zone.value == "gloom"){
			if(document.getElementById("charmy").checked == true){
				var i = rand(55,72);}
			else {var i = rand(1,72);}
			
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
			else if (i <= 68){itemlist += "Penguin Carcass";}//dead penguin
			else if (i <= 70){itemlist += "Hunting Chest";}//hunting chest
			else if (i <= 72){itemlist += "100x Crystal";} //100x Crystals

		}
				else if(zone.value == "frigid"){
			if(document.getElementById("charmy").checked == true){
				var i = rand(60,80);}
			else {var i = rand(1,80);}
			
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
			else if (i <= 69){itemlist += "Penguin Carcass";}//dead penguin
			else if (i <= 71){itemlist += "200x Crystals";}//x200 Crystals
			else if (i <= 73){itemlist += "Large Animal Skull";}//large animal skull
			else if (i <= 76){itemlist += "Large Animal Claws";}//large animal claws
			else if (i <= 80){itemlist += "Hunting Chest";}//hunting chest
		}
        else if(zone.value == "shimmering"){
			if(document.getElementById("charmy").checked == true){
				var i = rand(45,68);}
			else {var i = rand(1,68);}
			
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
			else if (i <= 62){itemlist += "Piebald Moose Pelt";} //piebald moose pelt
			else if (i <= 64){itemlist += "Albino Moose Pelt";} //albino moose pelt
			else if (i <= 68){itemlist += "Hunting Chest";} //hunting chest
		}
			else if(zone.value == "scorched"){
			if(document.getElementById("charmy").checked == true){
				var i = rand(53,70);}
			else {var i = rand(1,70);}
			
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
			else if (i <= 60){itemlist += "Vulture Carcass";} //Dead Vulture
			else if (i <= 62){itemlist += "Premium Meat";} //Premium Meat
			else if (i <= 64){itemlist += "Large Reptile Egg";} //large reptile egg
			else if (i <= 66){itemlist += "600x Crystals";} //600x crystals
			else if (i <= 68){itemlist += "Hunting Chest";} //hunting chest
			else if (i <= 70){itemlist += "Shard of Ancients Ribcage";} //shard of ancients ribcage
			}
		else if(zone.value == "aether"){
			if(document.getElementById("charmy").checked == true){
				var i = rand(40,56);}
			else {var i = rand(1,56);}
			
			if(i <= 5){itemlist += "Aether Meat";} //Aether Meat
			else if (i <= 15){itemlist += "Decent Meat";} //decent meat
			else if (i <= 20){itemlist += "Aether Deer Pelt";} //Aether imbued deer pelt
			else if (i <= 25){itemlist += "Aether Leather";} //Aether Imbued Leather
			else if (i <= 30){itemlist += "Aether Bison Pelt";} //Aether Imbued Bison Pelt
			else if (i <= 35){itemlist += "Aether Bones";} //Aether imbued bones
			else if (i <= 38){itemlist += "Aether Bird Carcass";} //Dead Aether Bird
			else if (i <= 40){itemlist += "Strange Geode";} //strange geode -- CHARMY
			else if (i <= 46){itemlist += "Premium Meat";} //premium meat
			else if (i <= 48){itemlist += "800x Crystals";} //800x crystals
			else if (i <= 50){itemlist += "Dragon's Talon";} //Dragon's Talon
			else if (i <= 52){itemlist += "Arcane Heart";} //Arcane Heart
			else if (i <= 54){itemlist += "Hunting Chest";} //Hunting Chest
			else if (i <= 56){itemlist += "Aether Bag";} //Mysterious Sack
		}
	}
	
	function rollFish(){
		if (zone.value == "radiant"){
			if(document.getElementById("charmy").checked == true){
				var i = rand(11,30);}
			else {var i = rand(1,30);}
			
			if(i <= 7){itemlist += "Decent Fish";}
			else if (i <= 9){itemlist += "Premium Fish";}
			else if (i <= 10){itemlist += "50x Crystals";}
			else if (i <= 13){itemlist += "Decent Fish";}
			else if (i <= 16){itemlist += "Premium Fish";}
			else if (i <= 18){itemlist += "Fishing Chest";}
			else if (i <= 21){itemlist += "Metal";}
			else if (i <= 24){itemlist += "Salt";}
			else if (i <= 27){itemlist += "Water";}
			else if (i <= 30){itemlist += "50x Crystals";}
			
		} else if (zone.value == "gloom"){
			if(document.getElementById("charmy").checked == true){
				var i = rand(13,30);}
			else {var i = rand(1,30);}
			
			if(i <= 7){itemlist += "Decent Fish";}
			else if (i <= 9){itemlist += "Premium Fish";}
			else if (i <= 10){itemlist += "100x Crystals";}
			else if (i <= 13){itemlist += "Decent Fish";}
			else if (i <= 16){itemlist += "Premium Fish";}
			else if (i <= 18){itemlist += "Fishing Chest";}
			else if (i <= 21){itemlist += "Metal";}
			else if (i <= 24){itemlist += "Salt";}
			else if (i <= 27){itemlist += "Water";}
			else if (i <= 30){itemlist += "100x Crystals";}
			
		} else if (zone.value == "frigid"){
			if(document.getElementById("charmy").checked == true){
				var i = rand(16,45);}
			else {var i = rand(1,45);}
			
			if(i <= 7){itemlist += "Decent Fish";}
			else if (i <= 9){itemlist += "Premium Fish";}
			else if (i <= 10){itemlist += "100x Crystals";}
			else if (i <= 13){itemlist += "Decent Fish";}
			else if (i <= 16){itemlist += "Premium Fish";}
			else if (i <= 18){itemlist += "Fishing Chest";}
			else if (i <= 21){itemlist += "Metal";}
			else if (i <= 24){itemlist += "Salt";}
			else if (i <= 27){itemlist += "Water";}
			else if (i <= 45){itemlist += "150x Crystals";}
			
		} else if (zone.value == "shimmering"){
			if(document.getElementById("charmy").checked == true){
				var i = rand(20,47);}
			else {var i = rand(1,47);}
			
			if(i <= 7){itemlist += "Decent Fish";}
			else if (i <= 9){itemlist += "Premium Fish";}
			else if (i <= 10){itemlist += "100x Crystals";}
			else if (i <= 13){itemlist += "Decent Fish";}
			else if (i <= 16){itemlist += "Premium Fish";}
			else if (i <= 18){itemlist += "Fishing Chest";}
			else if (i <= 21){itemlist += "Metal";}
			else if (i <= 24){itemlist += "Salt";}
			else if (i <= 27){itemlist += "Water";}
			else if (i <= 45){itemlist += "200x Crystals";}
			else if (i <= 47){itemlist += "Whale Bone";}
			
		} else if (zone.value == "scorched"){
			if(document.getElementById("charmy").checked == true){
				var i = rand(20,47);}
			else {var i = rand(1,47);}

			if(i <= 7){itemlist += "Decent Fish";}
			else if (i <= 9){itemlist += "Premium Fish";}
			else if (i <= 10){itemlist += "100x Crystals";}
			else if (i <= 13){itemlist += "Decent Fish";}
			else if (i <= 16){itemlist += "Premium Fish";}
			else if (i <= 18){itemlist += "Fishing Chest";}
			else if (i <= 21){itemlist += "Metal";}
			else if (i <= 24){itemlist += "Salt";}
			else if (i <= 27){itemlist += "Water";}
			else if (i <= 45){itemlist += "200x Crystals";}
			else if (i <= 47){itemlist += "Whale Bone";}
			
		} else if (zone.value == "aether"){
			if(document.getElementById("charmy").checked == true){
				var i = rand(22,49);}
			else {var i = rand(1,49);}
			
			if(i <= 7){itemlist += "Decent Fish";}
			else if (i <= 9){itemlist += "Premium Fish";}
			else if (i <= 10){itemlist += "100x Crystals";}
			else if (i <= 13){itemlist += "Decent Fish";}
			else if (i <= 16){itemlist += "Premium Fish";}
			else if (i <= 18){itemlist += "Fishing Chest";}
			else if (i <= 21){itemlist += "Metal";}
			else if (i <= 24){itemlist += "Salt";}
			else if (i <= 27){itemlist += "Water";}
			else if (i <= 45){itemlist += "250x Crystals";}
			else if (i <= 49){itemlist += "Aether Scales";}
			
		}
	}
	
	function rollForage(){
		if (zone.value == "radiant"){
			if(document.getElementById("charmy").checked == true){
				var i = rand(83,109);}
			else {var i = rand(1,109);}
			
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
			else if (i <= 103){itemlist += "Foraging Chest";} // Foraging Chest
			else if (i <= 105){itemlist += "x50 Crystals";} // 50 Crystals
			else if (i <= 107){itemlist += "Garnet";} // Garnet
			else if (i <= 109){itemlist += "Emerald";} // Emerald

						
		} else if (zone.value == "gloom"){
			if(document.getElementById("charmy").checked == true){
				var i = rand(78,96);}
			else {var i = rand(1,96);}
			
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
			else if (i <= 94){itemlist += "Foraging Chest";} // Foraging Chest
			else if (i <= 96){itemlist += "x100 Crystals";} // 100 Crystals
		
		} else if (zone.value == "frigid"){
			if(document.getElementById("charmy").checked == true){
				var i = rand(72,91);}
			else {var i = rand(1,91);}
		
			if(i <= 10){itemlist += "Large Feathers";} // Large Feathers
			else if (i <= 20){itemlist += "Sticks";} // sticks
			else if (i <= 25){itemlist += "Wood";} // Wood
			else if (i <= 35){itemlist += "Ice Block";} // Ice Block
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
			else if (i <= 89){itemlist += "Foraging Chest";} // Foraging Chest
			else if (i <= 91){itemlist += "x200 Crystals";} // 200 Crystals


		} else if (zone.value == "shimmering"){
			if(document.getElementById("charmy").checked == true){
				var i = rand(68,92);}
			else {var i = rand(1,92);}
			
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
			else if (i <= 90){itemlist += "x400 Crystals";} // 400 Crystals
		    else if (i <= 92){itemlist += "Foraging Chest";} // Foraging Chest



		} else if (zone.value == "scorched"){
			if(document.getElementById("charmy").checked == true){
				var i = rand(68,85);}
			else {var i = rand(1,85);}
			
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
			else if (i <= 83){itemlist += "x600 Crystals";} // 600 Crystals
			else if (i <= 85){itemlist += "Foraging Chest";} // Foraging Chest
		
		
		} else if (zone.value == "aether"){
			if(document.getElementById("charmy").checked == true){
				var i = rand(83,102);}
			else {var i = rand(1,102);}
			
			if(i <= 10){itemlist += "Aether Feathers";} // Aether Imbued Feathers
			else if (i <= 20){itemlist += "Large Rocks";} // Large Rocks
			else if (i <= 30){itemlist += "Sticks";} // Sticks
			else if (i <= 40){itemlist += "Arcane Herbs";} // Arcane Herbs
			else if (i <= 50){itemlist += "Small Rocks";} // Small Rocks
			else if (i <= 55){itemlist += "Plant Fiber";} // Plant Fiber
			else if (i <= 60){itemlist += "Wood";} // Wood
			else if (i <= 65){itemlist += "Arcane Fruit";} // Arcane Fruit
			else if (i <= 70){itemlist += "Arcane Honey";} // Arcane Honey
			else if (i <= 73){itemlist += "Strange Glowing Rock";} // Strange Glowing Rock
			else if (i <= 80){itemlist += "Glowing Mushrooms";} // Glowing Mushrooms
			else if (i <= 83){itemlist += "Exotic Scale";} // Exotic Scale -- CHARMY
			else if (i <= 90){itemlist += "Shimmering Pearl";} // Shimmering Pearl
			else if (i <= 93){itemlist += "Eternal Flame";} // Eternal Flame
			else if (i <= 95){itemlist += "Aether Bag";} // Mysterious Sack
			else if (i <= 98){itemlist += "Aether Pages";} // Aether Imbued Pages
			else if (i <= 100){itemlist += "600 Crystals";} // 600 Crystals
			else if (i <= 102){itemlist += "Foraging Chest";} // Foraging Chest
		
		}
	}
	
	
	for (var m = 0; m < lootSize; m++) {
	    itemlist += "<br>";
		if (activity.value == "hunting"){rollHunt();}
		else if (activity.value == "fishing"){rollFish();}
		else if (activity.value == "foraging"){rollForage();}
	}
	
	return itemlist;
	
}

function injury(){
	if (document.getElementById('souly').checked == true){
		var i = rand(2,10);
	} else {var i = rand(1,10);}
	
	if (document.getElementById(temp.value == "timid") == true){
		i += 1;}
	else if (document.getElementById(temp.value == "aggressive") == true){
		i = Math.max(1, i - 1);}
	
	if (activity.value == "hunting"){
		if(i == 1){
			return "Your dragon gets in a scuffle with the prey and comes out with a nasty scar! -10 HP lost";}
		else if(zone.value == "gloom" || zone.value == "frigid" || zone.value == "shimmering" || zone.value == "scorched" || zone.value == "aether" && i == 2){
			return "This isn't your dragon's first time getting swatted at, but they get a little prideful and wind up with a nastier scar than usual. -20 HP";}
		else if(zone.value == "frigid" || zone.value == "shimmering" || zone.value == "scorched" || zone.value == "aether" && i == 3){
			return "Hunting bigger game means greater rewards, but risks too. The prey fought your dragon valiantly and left a nasty mark. -6 HP";}
		else if(zone.value == "shimmering" || zone.value == "scorched" || zone.value =="aether" && i == 4){
			return "Dangerous creatures reside here, your dragon ran face to face with one and took an impressive hit. -40 HP";}
		else if(zone.value == "aether" && i == 5){
			return "The below is a dangerous place, and while you and your dragon braved it, you didn't come out unscathed. -" + rand(30,100) + " HP";}
		else{ return dragonName() +" was not injured.";}
	} else if (activity.value == "fishing"){
		if(i == 1){
			return "While diving into the :thumb743377712: for fish your dragon scraped up against a jagged rock. -10 HP";}
		else if(zone.value == "gloom" || zone.value == "frigid" || zone.value == "shimmering" || zone.value == "scorched" || zone.value == "aether" && i == 2){
			return "Sometimes the safer places might be lakes. Sometimes lakes might have drop off abyssal points. Your dragon fell in one. -20 HP";}
		else if(zone.value == "frigid" || zone.value == "shimmering" || zone.value == "scorched" || zone.value == "aether" && i == 3){
			return "Dragons are large creatures, but even dragons can be overwhelmed by the many smaller creatures. Your dragon agitated a large school of fish, but instead of them darting away, they attacked. -40 HP";}
		else if(zone.value == "shimmering" || zone.value == "scorched" || zone.value =="aether" && i == 4){
			return "The ocean is full of giant monsters and while your dragon is an apex predator, there are some predators in the ocean that are looking for lunch. Your dragon ran into one of them, luckily they escaped in one piece... -60 HP.";}
		else if(zone.value == "aether" && i == 5){
			return "The Aether's oceans are especially dangerous, and creatures that have no business existing are lurking in the dark depths. One lunges at grabs a hold of your dragon. With a quick bellow and lashing claws, you escape.  -" + rand(30,100) + " HP.";}
		else{ return dragonName() +" was not injured.";}
	} else if (activity.value == "foraging"){
		if(i == 1){
			return "Your dragon searched every where for anything they could find, so focused they didn't notice they had scraped up against some rather large rocks. -10 HP";}
		else if(zone.value == "gloom" || zone.value == "frigid" || zone.value == "shimmering" || zone.value == "scorched" || zone.value == "aether" && i == 2){
			return "Exploring further into the world, your dragon finds itself near some rather strange looking plants. You don't know if they ate them or if they touched them but your dragon isn't happy about them. -20 HP";}
		else if(zone.value == "frigid" || zone.value == "shimmering" || zone.value == "scorched" || zone.value == "aether" && i == 3){
			return "Your dragon went missing for a few days, they returned to you a little beaten up, but otherwise they seem ok. -40 HP";}
		else if(zone.value == "shimmering" || zone.value == "scorched" || zone.value =="aether" && i == 4){
			return "In a scuffle of something shiny, your dragon got in a fight with another dragon. It didn't last long and both dragons seem ok despite the small injuries. -60 HP.";}
		else if(zone.value == "aether" && i == 5){
			return "The Aether has a lot of dangerous places. Your dragon found a book that was glowing bright red letters among these dangerous places. Upon touching it they lost  -" + rand(30,100) + " HP.";}
		else{ return dragonName() +" was not injured.";}
	}
	
}

  
 function roll() { 
	document.getElementById("result").innerHTML = "";
	
	if (pass() == true){
		document.getElementById("result").innerHTML += dragonName() + " went " + activity.value + " and returned with the following:<br>"
		+ items() 
		+ "<br><i>Items have been added to your hoard.</i><br>";}
	else{
		document.getElementById("result").innerHTML += dragonName() + " went " + activity.value + " but failed to catch anything!<br>";}
	
	document.getElementById("result").innerHTML += "<br>" + injury();


}

function clearForms() {
	document.getElementById("playerinfo").reset();
	document.getElementById("modifiers").reset();
	document.getElementById("result").innerHTML = "";

}