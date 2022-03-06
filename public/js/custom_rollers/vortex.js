var dragonName = document.getElementById('dName');
var activity = document.getElementById('activity');
var zone = document.getElementById('zone');

function rand(min, max) {
  var min = min || 0,
      max = max || Number.MAX_SAFE_INTEGER;

  return Math.floor(Math.random() * (max - min + 1)) + min;} 
  

 
function items(){
	var lootSize;
	var itemlist="";
	
	if (document.getElementById("barrely").checked == true){ //live event check
		lootSize = rand(4,8);}
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


//HUNTING//
function rollVoTW(){
		if (zone.value == "vortex"){
			if(document.getElementById("charmy").checked == true && rand(1,10) <= 4){
				var i = rand(2,3);}
            if(document.getElementById("tamey").checked == true && rand(1,10) <= 5){
				var i = rand(2,3);}
			else {var i = rand(1,3);}

			
			if(i <= 1){itemlist += "This event is not set up currently";} 
			else if (i <= 2){itemlist += "This event is not set up currently";}
			else if (i <= 3){itemlist += "This event is not set up currently";}
		}
	else if (zone.value == "live"){
		if(document.getElementById("charmy").checked == true && rand(1,10) <= 4){
			var i = rand(2,3);}
		if(document.getElementById("tamey").checked == true && rand(1,10) <= 5){
			var i = rand(2,3);}
		else {var i = rand(1,3);}

		
		if(i <= 1){itemlist += "This event is not set up currently";} 
		else if (i <= 2){itemlist += "This event is not set up currently";}
		else if (i <= 3){itemlist += "This event is not set up currently";}
			}
	}
//FISHING//	
	function rollAetherWars(){
		if (zone.value == "vortex"){
			if(document.getElementById("charmy").checked == true && rand(1,10) <= 4){
				var i = rand(2,3);}
            if(document.getElementById("tamey").checked == true && rand(1,10) <= 5){
				var i = rand(2,3);}
			else {var i = rand(1,3);}

			
			if(i <= 1){itemlist += "This event is not set up currently";} 
			else if (i <= 2){itemlist += "This event is not set up currently";}
			else if (i <= 3){itemlist += "This event is not set up currently";}
			
		} else if (zone.value == "live"){
			if(document.getElementById("charmy").checked == true && rand(1,10) <= 4){
				var i = rand(2,3);}
            if(document.getElementById("tamey").checked == true && rand(1,10) <= 5){
				var i = rand(2,3);}
			else {var i = rand(1,3);}

			
			if(i <= 1){itemlist += "This event is not set up currently";} 
			else if (i <= 2){itemlist += "This event is not set up currently";}
			else if (i <= 3){itemlist += "This event is not set up currently";}
			}
	}
//FORAGING//
	function rollToL(){
		if (zone.value == "vortex"){
			if(document.getElementById("charmy").checked == true && rand(1,10) <= 4){
				var i = rand(2,3);}
            if(document.getElementById("tamey").checked == true && rand(1,10) <= 5){
				var i = rand(2,3);}
			else {var i = rand(1,3);}

			
			if(i <= 1){itemlist += "This event is not set up currently";} 
			else if (i <= 2){itemlist += "This event is not set up currently";}
			else if (i <= 3){itemlist += "This event is not set up currently";}
						
		} else if (zone.value == "live"){
			if(document.getElementById("charmy").checked == true && rand(1,10) <= 4){
				var i = rand(2,3);}
            if(document.getElementById("tamey").checked == true && rand(1,10) <= 5){
				var i = rand(2,3);}
			else {var i = rand(1,3);}

			
			if(i <= 1){itemlist += "This event is not set up currently";} 
			else if (i <= 2){itemlist += "This event is not set up currently";}
			else if (i <= 3){itemlist += "This event is not set up currently";}
		}
		
	}
//CAVING//
      function rollAoT(){
		if (zone.value == "vortex"){
			if(document.getElementById("charmy").checked == true && rand(1,10) <= 4){
				var i = rand(2,3);}
            if(document.getElementById("tamey").checked == true && rand(1,10) <= 5){
				var i = rand(2,3);}
			else {var i = rand(1,3);}

			
			if(i <= 1){itemlist += "This event is not set up currently";} 
			else if (i <= 2){itemlist += "This event is not set up currently";}
			else if (i <= 3){itemlist += "This event is not set up currently";}
		}

		if (zone.value == "live"){
			if(document.getElementById("charmy").checked == true && rand(1,10) <= 4){
				var i = rand(123,179);}
            if(document.getElementById("tamey").checked == true && rand(1,10) <= 5){
				var i = rand(123,179);}
			else {var i = rand(1,179);}
			
			if(i <= 5){itemlist += "100 Crystals";} 
            else if(i <= 10){itemlist += "Armor:Bone";}
			else if(i <= 15){itemlist += "Armor:Iron";}
			else if(i <= 20){itemlist += "Armor:Leather";}
			else if(i <= 25){itemlist += "Large Feathers";}
			else if(i <= 30){itemlist += "Large Animal Claws";}
			else if(i <= 35){itemlist += "Black Pearl";}
			else if(i <= 40){itemlist += "White Pearl";}
			else if(i <= 45){itemlist += "Shimmering Pearl";}
			else if(i <= 50){itemlist += "Arcane Honey";}
			else if(i <= 55){itemlist += "Aether Meat";}
			else if(i <= 60){itemlist += "Arcane Fruit";}
			else if(i <= 65){itemlist += "Aether Fish Meat";}
			else if(i <= 70){itemlist += "Aether Quartz";}
			else if(i <= 75){itemlist += "Aether Bones";}
			else if(i <= 80){itemlist += "Pelt: Aether Deer";}
			else if(i <= 85){itemlist += "Pelt: Aether Bison";}
			else if(i <= 90){itemlist += "Pelt: Aether Feathers";}
			else if(i <= 95){itemlist += "Aether Imbued Scales";}
			else if(i <= 100){itemlist += "Delicate Aether Shard";}
			else if(i <= 105){itemlist += "Rack of Ribs";}
			else if(i <= 110){itemlist += "Mushroom Soup";}
			else if(i <= 115){itemlist += "Hot Pot";}
			else if(i <= 120){itemlist += "Niramish";}
			else if(i <= 123){itemlist += "1 DSC";} // "CHARMY"
			else if(i <= 126){itemlist += "Revival Feather";}
			else if(i <= 129){itemlist += "Booster: Nightshade";}
			else if(i <= 132){itemlist += "Booster: Brawler";}
			else if(i <= 135){itemlist += "Congealed Ancient's Blood";}
			else if(i <= 138){itemlist += "Arcane Heart";}
			else if(i <= 141){itemlist += "Eternal Element";}
			else if(i <= 144){itemlist += "Adept Aether Shard";}
			else if(i <= 147){itemlist += "Soul Twine";}
			else if(i <= 150){itemlist += "Aether Tonic";}
			else if(i <= 153){itemlist += "Container: Backpack";}
			else if(i <= 156){itemlist += "Shard of Ancient's Rib Cage";}
			else if(i <= 159){itemlist += "Strange Rock";}
			else if(i <= 162){itemlist += "Aether Imbued Pages";}
			else if(i <= 163){itemlist += "Mysterious Ancient Dragon's Blood";} // start of rarest items
			else if(i <= 164){itemlist += "Mark of the Aemon";}
			else if(i <= 165){itemlist += "1 Aether Coin";}
			else if(i <= 166){itemlist += "Aether Bag";}
			else if(i <= 167){itemlist += "Aether Guard's Boon";}
			else if(i <= 168){itemlist += "Mysterious Corrupted Tears";}
			else if(i <= 169){itemlist += "Skill Token";}
			else if(i <= 170){itemlist += "Corrupted Ancient Fang";}
			else if(i <= 171){itemlist += "Corrupted Ancient Scales";}
			else if(i <= 172){itemlist += "Corrupted Ancient Fur";}
			else if(i <= 173){itemlist += "Corrupted Ancient Claw";}
			else if(i <= 174){itemlist += "Draco Boa: Aberrant";}
			else if(i <= 175){itemlist += "Dragon's Talon";}	
			else if(i <= 176){itemlist += "Petty Aberrant Tincture (25%)";}	
			else if(i <= 177){itemlist += "Minor Aberrant Tincture (50%)";}	
			else if(i <= 179){itemlist += "1 Aether Coin";}									
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

	document.getElementById("result").innerHTML += dragonName.value + " returned with the following:<br>"
	+ items() 
	+ "<br><i>Items have been added to your hoard.</i><br>";	


}

function clearForms() {
	document.getElementById("playerinfo").reset();
	document.getElementById("modifiers").reset();
	document.getElementById("result").innerHTML = "";
    }