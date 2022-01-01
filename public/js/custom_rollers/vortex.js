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

	document.getElementById("result").innerHTML += dragonName.value + " returned with the following:<br>"
	+ items() 
	+ "<br><i>Items have been added to your hoard.</i><br>";	


}

function clearForms() {
	document.getElementById("playerinfo").reset();
	document.getElementById("modifiers").reset();
	document.getElementById("result").innerHTML = "";
    }