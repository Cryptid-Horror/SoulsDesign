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
			else if (i <= 15){itemlist += ":thumb738530697:";} // Decent meat
			else if (i <= 20){itemlist += ":thumb741645024:";} // leather
			else if (i <= 25){itemlist += ":thumb784959058:";} // brown rabbit pelt
			else if (i <= 30){itemlist += ":thumb784959082:";} // grey rabbit pelt
			else if (i <= 35){itemlist += ":thumb784959070:";} // cream rabbit pelt
			else if (i <= 40){itemlist += ":thumb740288125:";} // fox pelt
			else if (i <= 43){itemlist += ":thumb740287824:";} // fox carcass
			else if (i <= 50){itemlist += ":thumb740288113:";} // wolf pelt
			else if (i <= 55){itemlist += "Dead Hawk";} // dead hawk -- CHARMY
			else if (i <= 58){itemlist += ":thumb806166167:";} // dead swan 
			else if (i <= 60){itemlist += ":thumb745255167:";} // spotted deer pelt
			else if (i <= 63){itemlist += ":thumb745255142:";} // brown deer peltd
			else if (i <= 66){itemlist += ":thumb745255155:";} // red deer pelt
			else if (i <= 68){itemlist += ":thumb740287876:";} // deer carcass
			else if (i <= 70){itemlist += ":thumb730226090:";} // skull
			else if (i <= 73){itemlist += ":thumb740287736:";} // small animal claws
			else if (i <= 78){itemlist += ":thumb738530711:";} // premium meat
			else if (i <= 80){itemlist += "50x :thumb726629426:";} // 50x Crystals
			else if (i <= 83){itemlist += ":thumb776585044:";} // hunting chest
		}
	else if (zone.value == "gloom"){
			if(document.getElementById("charmy").checked == true){
				var i = rand(55,72);}
			else {var i = rand(1,72);}
			
			if(i <= 5){itemlist += ":thumb826463774:";} // Spoiled Meat
			else if (i <= 10){itemlist += ":thumb740288268:";} //Bones
			else if (i <= 15){itemlist += ":thumb738530697:";} //Decent meat
			else if (i <= 20){itemlist += ":thumb741645024:";} //leather
			else if (i <= 25){itemlist += ":thumb740288113:";} //wolf pelt
			else if (i <= 30){itemlist += ":thumb740288148:";} //racoon pelt
			else if (i <= 40){itemlist += ":thumb745255155:";} //red deer pelt
			else if (i <= 45){itemlist += ":thumb745255167:";} //spotted deer pelt
			else if (i <= 50){itemlist += ":thumb745255142:";}//brown deer pelt
			else if (i <= 55){itemlist += ":thumb738530711:";} //premium meat -- CHARMY
			else if (i <= 58){itemlist += ":thumb738530697:";} //skull
			else if (i <= 60){itemlist += ":thumb740287649:";} //medium animal claws
			else if (i <= 63){itemlist += ":thumb740287876:";}//deer carcass
			else if (i <= 66){itemlist += ":thumb793887542:";}//dead heron
			else if (i <= 68){itemlist += ":thumb759570684:";}//dead penguin
			else if (i <= 70){itemlist += ":thumb776585044:";}//hunting chest
			else if (i <= 72){itemlist += "100x :thumb726629426:";} //100x Crystals

		}
				else if(zone.value == "frigid"){
			if(document.getElementById("charmy").checked == true){
				var i = rand(60,80);}
			else {var i = rand(1,80);}
			
			if(i <= 5){itemlist += ":thumb837695817:";} //Frozen meat
			else if (i <= 15){itemlist += ":thumb740288268:";}//bones
			else if (i <= 20){itemlist += ":thumb741645024:";}//leather
			else if (i <= 25){itemlist += ":thumb745255142:";}//brown deer pelt
			else if (i <= 30){itemlist += ":thumb745255155:";}//red deer pelt
			else if (i <= 33){itemlist += ":thumb745255155:";}//deer carcass
			else if (i <= 40){itemlist += ":thumb745255142:";}//brown bear pelt
			else if (i <= 50){itemlist += ":thumb759570674:";}//black bear pelt
			else if (i <= 55){itemlist += ":thumb793887554:";}//dead snow owl
			else if (i <= 60){itemlist += ":thumb759570699:";}//frigid bear pelt -- CHARMY
			else if (i <= 63){itemlist += ":thumb738530711:";}//premium meat
			else if (i <= 66){itemlist += ":thumb747886136:";}//bison pelt
			else if (i <= 69){itemlist += ":thumb793887547:";}//dead penguin
			else if (i <= 71){itemlist += "200x :thumb726629426:";}//x200 Crystals
			else if (i <= 73){itemlist += ":thumb753647391:";}//large animal skull
			else if (i <= 76){itemlist += ":thumb740287701:";}//large animal claws
			else if (i <= 80){itemlist += ":thumb776585044:";}//hunting chest
		}
        else if(zone.value == "shimmering"){
			if(document.getElementById("charmy").checked == true){
				var i = rand(45,68);}
			else {var i = rand(1,68);}
			
			if(i <= 10){itemlist += ":thumb740288268:";} //bones
			else if (i <= 15){itemlist += ":thumb738530697:";} //decent meat
			else if (i <= 20){itemlist += ":thumb741645024:";} //leather
			else if (i <= 25){itemlist += ":thumb819351729:";} //Dead barn owl
			else if (i <= 28){itemlist += ":thumb759570674:";} //black bear pelt
			else if (i <= 30){itemlist += ":thumb745255142:";} //brown bear pelt
			else if (i <= 35){itemlist += ":thumb747886136:";} //bison pelt
			else if (i <= 40){itemlist += ":thumb793887530:";} //Dead Eagle
			else if (i <= 45){itemlist += "400x :thumb726629426:";} //400x crystals -- CHARMY
			else if (i <= 48){itemlist += "Buffalo Pelt";} //Buffalo Pelt
			else if (i <= 50){itemlist += ":thumb738530711:";} //Premium meat
			else if (i <= 54){itemlist += ":thumb740287701:";} //large animal claws
			else if (i <= 58){itemlist += ":thumb753647391:";} //large animal skull
			else if (i <= 60){itemlist += ":thumb784959050:";} //brown moose pelt
			else if (i <= 62){itemlist += ":thumb784959053:";} //piebald moose pelt
			else if (i <= 64){itemlist += ":thumb784959039:";} //albino moose pelt
			else if (i <= 68){itemlist += ":thumb776585044:";} //hunting chest
		}
			else if(zone.value == "scorched"){
			if(document.getElementById("charmy").checked == true){
				var i = rand(53,70);}
			else {var i = rand(1,70);}
			
			if(i <= 10){itemlist += ":thumb837695787:";} //charred meat
			else if (i <= 20){itemlist += ":thumb740288268:";} //bones
			else if (i <= 25){itemlist += ":thumb738530697:";} //decent meat
			else if (i <= 30){itemlist += ":thumb741645024:";} //leather
			else if (i <= 35){itemlist += ":thumb784959092:";} //diamond python skin
			else if (i <= 40){itemlist += ":thumb784959100:";} //river snake skin
			else if (i <= 45){itemlist += ":thumb784959110:";} //coral snake skin
			else if (i <= 50){itemlist += ":thumb819351724:";} //reptile hide
			else if (i <= 53){itemlist += ":thumb753647391:";} //large animal skull -- CHARMY
			else if (i <= 56){itemlist += ":thumb740287701:";} //large animal claws
			else if (i <= 58){itemlist += ":thumb793887542:";} //dead heron
			else if (i <= 60){itemlist += ":thumb806166156:";} //Dead Vulture
			else if (i <= 62){itemlist += ":thumb738530711:";} //Premium Meat
			else if (i <= 64){itemlist += "Large Reptile Egg";} //large reptile egg
			else if (i <= 66){itemlist += "600x :thumb726629426:";} //600x crystals
			else if (i <= 68){itemlist += ":thumb776585044:";} //hunting chest
			else if (i <= 70){itemlist += ":thumb793887523:";} //shard of ancients ribcage
			}
		else if(zone.value == "aether"){
			if(document.getElementById("charmy").checked == true){
				var i = rand(40,56);}
			else {var i = rand(1,56);}
			
			if(i <= 5){itemlist += ":thumb799319591:";} //Aether Meat
			else if (i <= 15){itemlist += ":thumb738530697:";} //decent meat
			else if (i <= 20){itemlist += ":thumb745255131:";} //Aether imbued deer pelt
			else if (i <= 25){itemlist += "Aether Imbued Leather";} //Aether Imbued Leather
			else if (i <= 30){itemlist += ":thumb747886161:";} //Aether Imbued Bison Pelt
			else if (i <= 35){itemlist += ":thumb775469628:";} //Aether imbued bones
			else if (i <= 38){itemlist += ":thumb806166159:";} //Dead Aether Bird
			else if (i <= 40){itemlist += ":thumb741645034:";} //strange geode -- CHARMY
		    else if (i <= 43){itemlist += "Warped Egg";} //Warped Egg
			else if (i <= 46){itemlist += ":thumb738530711:";} //premium meat
			else if (i <= 48){itemlist += "800x :thumb726629426:";} //800x crystals
			else if (i <= 50){itemlist += ":thumb738428726:";} //Dragon's Talon
			else if (i <= 52){itemlist += ":thumb793887512:";} //Arcane Heart
			else if (i <= 54){itemlist += ":thumb776585044:";} //Hunting Chest
			else if (i <= 56){itemlist += ":thumb724405996:";} //Mysterious Sack
		}
	}
	
	function rollFish(){
		if (zone.value == "radiant"){
			if(document.getElementById("charmy").checked == true){
				var i = rand(11,30);}
			else {var i = rand(1,30);}
			
			if(i <= 7){itemlist += ":thumb737120461:";}
			else if (i <= 9){itemlist += ":thumb737120468:";}
			else if (i <= 10){itemlist += "50x :thumb726629426:";}
			else if (i <= 13){itemlist += ":thumb737120461:";}
			else if (i <= 16){itemlist += ":thumb737120468:";}
			else if (i <= 18){itemlist += "Shambled Chest";}
			else if (i <= 21){itemlist += ":thumb740288139:";}
			else if (i <= 24){itemlist += ":thumb740287494:";}
			else if (i <= 27){itemlist += ":thumb743377712:";}
			else if (i <= 30){itemlist += "50x :thumb726629426:";}
			
		} else if (zone.value == "gloom"){
			if(document.getElementById("charmy").checked == true){
				var i = rand(13,36);}
			else {var i = rand(1,36);}
			
			if(i <= 7){itemlist += ":thumb737120461:";}
			else if (i <= 9){itemlist += ":thumb737120468:";}
			else if (i <= 10){itemlist += "150x :thumb726629426:";}
			else if (i <= 12){itemlist += ":thumb740288139:";}
			else if (i <= 15){itemlist += ":thumb737120461:";}
			else if (i <= 18){itemlist += ":thumb737120468:";}
			else if (i <= 22){itemlist += "Shambled Chest";}
			else if (i <= 26){itemlist += ":thumb740288139:";}
			else if (i <= 29){itemlist += ":thumb740287494:";}
			else if (i <= 32){itemlist += ":thumb743377712:";}
			else if (i <= 36){itemlist += "150x :thumb726629426:";}
			
		} else if (zone.value == "frigid"){
			if(document.getElementById("charmy").checked == true){
				var i = rand(16,45);}
			else {var i = rand(1,45);}
			
			if(i <= 6){itemlist += ":thumb737120461:";}
			else if (i <= 12){itemlist += ":thumb737120468:";}
			else if (i <= 13){itemlist += "Shambled Chest";}
			else if (i <= 14){itemlist += ":thumb740288139:";}
			else if (i <= 15){itemlist += ":thumb740287494:";}
			else if (i <= 19){itemlist += ":thumb737120461:";}
			else if (i <= 23){itemlist += ":thumb737120468:";}
			else if (i <= 27){itemlist += "Shambled Chest";}
			else if (i <= 31){itemlist += ":thumb740288139:";}
			else if (i <= 35){itemlist += ":thumb740287494:";}
			else if (i <= 39){itemlist += ":thumb743377712:";}
			else if (i <= 45){itemlist += "300x :thumb726629426:";}
			
		} else if (zone.value == "shimmering"){
			if(document.getElementById("charmy").checked == true){
				var i = rand(20,57);}
			else {var i = rand(1,57);}
			
			if(i <= 15){itemlist += ":thumb737120461:";}
			else if (i <=19){itemlist += ":thumb737120468:";}
			else if (i <= 24){itemlist += ":thumb737120461:";}
			else if (i <= 30){itemlist += ":thumb737120468:";}
			else if (i <= 40){itemlist += "Shambled Chest";}
			else if (i <= 45){itemlist += ":thumb740288139:";}
			else if (i <= 48){itemlist += ":thumb740287494:";}
			else if (i <= 54){itemlist += "600x :thumb726629426:";}
			else if (i <= 57){itemlist += "Whale Bone";}
			
		} else if (zone.value == "scorched"){
			if(document.getElementById("charmy").checked == true){
				var i = rand(20,57);}
			else {var i = rand(1,57);}
			
			if(i <= 15){itemlist += ":thumb737120461:";}
			else if (i <=19){itemlist += ":thumb737120468:";}
			else if (i <= 24){itemlist += ":thumb737120461:";}
			else if (i <= 30){itemlist += ":thumb737120468:";}
			else if (i <= 40){itemlist += "Shambled Chest";}
			else if (i <= 45){itemlist += ":thumb740288139:";}
			else if (i <= 48){itemlist += ":thumb740287494:";}
			else if (i <= 54){itemlist += "600x :thumb726629426:";}
			else if (i <= 57){itemlist += "Whale Bone";}
			
		} else if (zone.value == "aether"){
			if(document.getElementById("charmy").checked == true){
				var i = rand(22,62);}
			else {var i = rand(1,62);}
			
			if(i <= 18){itemlist += ":thumb737120461:";}
			else if (i <= 21){itemlist += ":thumb737120468:";}
			else if (i <= 28){itemlist += ":thumb737120461:";}
			else if (i <= 35){itemlist += ":thumb737120468:";}
			else if (i <= 37){itemlist += ":thumb724405996:";}
			else if (i <= 45){itemlist += ":thumb740288139:";}
			else if (i <= 48){itemlist += ":thumb740287494:";}
			else if (i <= 51){itemlist += ":thumb743377712:";}
			else if (i <= 56){itemlist += "800x :thumb726629426:";}
			else if (i <= 59){itemlist += "Aether Imbued :thumb740288268:";}
			else if (i <= 62){itemlist += "Aether Imbued Scales";}
			
		}
	}
	
	function rollForage(){
		if (zone.value == "radiant"){
			if(document.getElementById("charmy").checked == true){
				var i = rand(83,109);}
			else {var i = rand(1,109);}
			
			if(i <= 10){itemlist += ":thumb735744797:";} //Small Feathers
			else if (i <= 15){itemlist += ":thumb819546607:";} // Herbs
			else if (i <= 25){itemlist += ":thumb759849707:";} // Wood
			else if (i <= 30){itemlist += ":thumb719065940:";} // Milk
			else if (i <= 35){itemlist += ":thumb742773107:";} // Cloth
			else if (i <= 45){itemlist += ":thumb837695841:";} // Dried Wheat	
			else if (i <= 50){itemlist += ":thumb826463747:";} // Honey
			else if (i <= 55){itemlist += ":thumb740288160:";} // Small berries
			else if (i <= 65){itemlist += ":thumb815610505:";} // Sticks
			else if (i <= 75){itemlist += ":thumb815610521:";} // small rocks
			else if (i <= 80){itemlist += "Plant Fiber";} // plant fiber
			else if (i <= 83){itemlist += "Coffee Beans";} // coffee beans --CHARMY
			else if (i <= 86){itemlist += ":thumb735459915:";} // Beetle
			else if (i <= 88){itemlist += ":thumb736073464:";} // Butterfly
			else if (i <= 91){itemlist += "Small Animal Horn";} // small animal horn
			else if (i <= 95){itemlist += ":thumb837695825:";} // grapes
			else if (i <= 100){itemlist += ":thumb837695830:";} // large rocks
			else if (i <= 103){itemlist += ":thumb770776045:";} // Foraging Chest
			else if (i <= 105){itemlist += "x50 :thumb726629426:";} // 50 Crystals
			else if (i <= 107){itemlist += ":thumb730076789:";} // Garnet
			else if (i <= 109){itemlist += ":thumb730043272:";} // Emerald

						
		} else if (zone.value == "gloom"){
			if(document.getElementById("charmy").checked == true){
				var i = rand(78,96);}
			else {var i = rand(1,96);}
			
			if(i <= 10){itemlist += ":thumb735744797:";} //Small feathers
			else if (i <= 20){itemlist += ":thumb815610521:";} // Small Rocks
			else if (i <= 25){itemlist += "Plant Fiber";} // Plant Fiber
			else if (i <= 27){itemlist += ":thumb735459915:";} // Beetle
			else if (i <= 35){itemlist += ":thumb814212944:";} // Sugar Cane
			else if (i <= 40){itemlist += ":thumb814212930:";} // Black Berries
			else if (i <= 50){itemlist += ":thumb815610505:";} // Sticks
			else if (i <= 60){itemlist += ":thumb759849707:";} // Wood
			else if (i <= 65){itemlist += ":thumb819546607:";} // Herbs
			else if (i <= 70){itemlist += ":thumb826463747:";} // Honey
			else if (i <= 75){itemlist += ":thumb837695830:";} // Large Rocks
			else if (i <= 78){itemlist += ":thumb837695812:";} // Fly Argaric -- CHARMY
			else if (i <= 80){itemlist += "Portabella Mushroom";} // Portebella
			else if (i <= 83){itemlist += "Conocybe Filaris Mushroom";} // Conocybe Filaris
			else if (i <= 86){itemlist += "Medium Animal Horn";} // Medium Animal Horn
			else if (i <= 90){itemlist += "Small Animal Horn";} // Small Animal Horn
			else if (i <= 92){itemlist += ":thumb814212926:";} // Black Pearl
			else if (i <= 94){itemlist += ":thumb770776045:";} // Foraging Chest
			else if (i <= 96){itemlist += "x100 :thumb726629426:";} // 100 Crystals
		
		} else if (zone.value == "frigid"){
			if(document.getElementById("charmy").checked == true){
				var i = rand(72,91);}
			else {var i = rand(1,91);}
		
			if(i <= 10){itemlist += ":thumb735957948:";} // Large Feathers
			else if (i <= 20){itemlist += ":thumb815610505:";} // sticks
			else if (i <= 25){itemlist += ":thumb759849707:";} // Wood
			else if (i <= 35){itemlist += ":thumb826463753:";} // Ice Block
			else if (i <= 40){itemlist += ":thumb819546607:";} // Herbs
			else if (i <= 45){itemlist += ":thumb814212937:";} // Blue berries
			else if (i <= 55){itemlist += ":thumb815610521:";} // small rocks
			else if (i <= 60){itemlist += "Plant Fiber";} // Plant fiber
			else if (i <= 65){itemlist += ":thumb837695830:";} // large rocks
			else if (i <= 68){itemlist += "Small Beans";} // small beans
			else if (i <= 70){itemlist += ":thumb826463747:";} // honey
			else if (i <= 72){itemlist += "Medium Animal Horn";} // medium animal horn -- CHARMY
			else if (i <= 76){itemlist += ":thumb740287494:";} // Salt
			else if (i <= 80){itemlist += ":thumb837695833:";} // Lime
			else if (i <= 83){itemlist += ":thumb826463762:";} // Oil
			else if (i <= 85){itemlist += ":thumb819546612:";} // White Pearl
			else if (i <= 87){itemlist += ":thumb837695838:";} // Sanguine Fruit
			else if (i <= 89){itemlist += ":thumb770776045:";} // Foraging Chest
			else if (i <= 91){itemlist += "x200 :thumb726629426:";} // 200 Crystals


		} else if (zone.value == "shimmering"){
			if(document.getElementById("charmy").checked == true){
				var i = rand(68,92);}
			else {var i = rand(1,92);}
			
			if(i <= 10){itemlist += ":thumb735957948:";} // Large Feathers
			else if (i <= 15){itemlist += ":thumb837695825:";} // Grapes
			else if (i <= 20){itemlist += ":thumb837695841:";} // Dried Wheat
			else if (i <= 30){itemlist += ":thumb759849707:";} // Wood
			else if (i <= 40){itemlist += ":thumb815610505:";} // sticks
			else if (i <= 45){itemlist += "Plant Fiber";} // plant fiber
			else if (i <= 55){itemlist += ":thumb815610521:";} // Small rocks
			else if (i <= 60){itemlist += ":thumb826463747:";} // honey
			else if (i <= 65){itemlist += ":thumb819546607:";} // Herbs
		    else if (i <= 68){itemlist += ":thumb837695799:";} // Coconut -- CHARMY
		    else if (i <= 75){itemlist += ":thumb837695830:";} // large rocks
			else if (i <= 77){itemlist += ":thumb814212920:";} // banana
			else if (i <= 79){itemlist += ":thumb837695805:";} // dragon fruit
			else if (i <= 81){itemlist += ":thumb815610544:";} // long beans
			else if (i <= 84){itemlist += "Medium Animal Horns";} // medium animal horns
			else if (i <= 86){itemlist += "Large Animal Horns";} // large animal horns
			else if (i <= 90){itemlist += "x400 :thumb726629426:";} // 400 Crystals
		    else if (i <= 92){itemlist += ":thumb770776045:";} // Foraging Chest



		} else if (zone.value == "scorched"){
			if(document.getElementById("charmy").checked == true){
				var i = rand(68,85);}
			else {var i = rand(1,85);}
			
			if(i <= 10){itemlist += ":thumb735957948:";} // Large Feathers
			else if (i <= 15){itemlist += ":thumb837695794:";} // Clay
			else if (i <= 25){itemlist += ":thumb826463766:";} // Sand
          	else if (i <= 35){itemlist += ":thumb815610505:";} // Sticks
			else if (i <= 40){itemlist += ":thumb759849707:";} // Wood
			else if (i <= 45){itemlist += ":thumb819546607:";} // Herbs
			else if (i <= 50){itemlist += ":thumb837695778:";} // Cactus
			else if (i <= 53){itemlist += ":thumb826463747:";} // honey
			else if (i <= 58){itemlist += ":thumb837695830:";} // Large Rocks
			else if (i <= 63){itemlist += ":thumb815610521:";} // Small rocks
			else if (i <= 65){itemlist += "Plant Fiber";} // plant fiber
			else if (i <= 68){itemlist += "Large Animal Horn";} // Large Animal Horn -- CHARMY
			else if (i <= 70){itemlist += ":thumb837695784:";} // Charcoal
			else if (i <= 73){itemlist += ":thumb826463762:";} // oil
			else if (i <= 76){itemlist += "Chitin";} // chitin
			else if (i <= 78){itemlist += ":thumb740288139:";} // metal
			else if (i <= 80){itemlist += "Medium Animal Horn";} // medium animal horns
			else if (i <= 83){itemlist += "x600 :thumb726629426:";} // 600 Crystals
			else if (i <= 85){itemlist += ":thumb770776045:";} // Foraging Chest
		
		
		} else if (zone.value == "aether"){
			if(document.getElementById("charmy").checked == true){
				var i = rand(83,102);}
			else {var i = rand(1,102);}
			
			if(i <= 10){itemlist += ":thumb736005672:";} // Aether Imbued Feathers
			else if (i <= 20){itemlist += ":thumb837695830:";} // Large Rocks
			else if (i <= 30){itemlist += ":thumb815610505:";} // Sticks
			else if (i <= 40){itemlist += "Arcane Herbs";} // Arcane Herbs
			else if (i <= 50){itemlist += ":thumb815610521:";} // Small Rocks
			else if (i <= 55){itemlist += "Plant Fiber";} // Plant Fiber
			else if (i <= 60){itemlist += ":thumb759849707:";} // Wood
			else if (i <= 65){itemlist += "Arcane Fruit";} // Arcane Fruit
			else if (i <= 70){itemlist += ":thumb815610530:";} // Arcane Honey
			else if (i <= 73){itemlist += ":thumb819351374:";} // Strange Glowing Rock
			else if (i <= 80){itemlist += ":thumb826463743:";} // Glowing Mushrooms
			else if (i <= 83){itemlist += "Exotic Scale";} // Exotic Scale -- CHARMY
			else if (i <= 89){itemlist += ":thumb819351370:";} // Shimmering Pearl
			else if (i <= 91){itemlist += ":thumb819351361:";} // Glowing Egg 
			else if (i <= 93){itemlist += ":thumb819546598:";} // Eternal Flame
			else if (i <= 95){itemlist += ":thumb724405996:";} // Mysterious Sack
			else if (i <= 98){itemlist += ":thumb773160338:";} // Aether Imbued Pages
			else if (i <= 100){itemlist += "600 :thumb726629426:";} // 600 Crystals
			else if (i <= 102){itemlist += ":thumb770776045:";} // Foraging Chest
		
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