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

if (document.getElementById("barrely").checked == true){ // Free rolls 
		lootSize = rand(2,4);}
	else {lootSize = rand(2,6);} // Entry rolls are default
	if (document.getElementById("mimicy").checked == true){
		lootSize += 1;
		itemlist += "<i>Golden Chest of Mimicry Returned an extra item!</i><br>";}
    if (document.getElementById("hoardery").checked == true && rand(1,10) <= 4){
		lootSize += 1;
		itemlist += "<i>Hoarder skill activated!</i><br>";}
    if (document.getElementById("bagy").checked == true){
		lootSize += 1;
		itemlist += "<i>An extra item was stored in your satchel!</i><br>";}

            

//CHALLENGER//
function rollBchallenger(){
    if (zone.value == "basic"){
			if(document.getElementById("charmy").checked == true && rand(1,10) <= 4){
				var i = rand(95,128);}
            if(document.getElementById("famy").checked == true && rand(1,10) <= 5){
                    var i = rand(95,128);}
			else {var i = rand(1,128);}
			
			if(i <= 5){itemlist += "100 Crystals";}
			else if (i <= 10){itemlist += "Bone Armor";} 
			else if (i <= 15){itemlist += "Veggie Skewer";}
			else if (i <= 20){itemlist += "Meatballs";} 
			else if (i <= 25){itemlist += "Crab Cake";} 
			else if (i <= 30){itemlist += "Fried Rice";} 
			else if (i <= 35){itemlist += "Satchel";} 
			else if (i <= 40){itemlist += "Healing Salve";} 
			else if (i <= 45){itemlist += "Goblet of Ice";} 
			else if (i <= 50){itemlist += "Goblet of Shadow";} 
			else if (i <= 55){itemlist += "Goblet of Radiation";} 
			else if (i <= 60){itemlist += "Goblet of Lightning";} 
			else if (i <= 65){itemlist += "Goblet of Fire";} 
			else if (i <= 70){itemlist += "Bandages";} 
			else if (i <= 72){itemlist += "Aether Booster";} 
			else if (i <= 78){itemlist += "Goblet of Wind";} 
			else if (i <= 83){itemlist += "Goblet of Poison";} 
			else if (i <= 88){itemlist += "Goblet of Luster";} 
			else if (i <= 83){itemlist += "Strength Booster";} 
			else if (i <= 86){itemlist += "Bleed Booster";} 
            else if (i <= 89){itemlist += "Breath Booster";} 
            else if (i <= 95){itemlist += "Common Recipe Fragment";} //ARENA HONOR/FAMY
            else if (i <= 99){itemlist += "Uncommon Recipe Fragment";}
            else if (i <= 101){itemlist += "Rare Recipe Fragment";} 
            else if (i <= 102){itemlist += "Mythic Recipe Fragment";} 
            else if (i <= 103){itemlist += "Tier 1 Starter Slot";} 
			else if (i <= 104){itemlist += "Mysterious Dragon's Blood";} 
			else if (i <= 106){itemlist += "Common Dragon's Blood";} 
			else if (i <= 107){itemlist += "Common Egg";} 
			else if (i <= 109){itemlist += "3 Dragon Soul Coins";} 
			else if (i <= 112){itemlist += "Aether Bag";} 
            else if (i <= 114){itemlist += "Premium Chest";} 
            else if (i <= 118){itemlist += "Arena Chest";}
            else if (i <= 120){itemlist += "Emporium BG Voucher";}
            else if (i <= 123){itemlist += "Market BG Voucher";} 
            else if (i <= 124){itemlist += "Familiar Chest";} 
            else if (i <= 125){itemlist += "Basilisk";} 
            else if (i <= 126){itemlist += "Dire Wolf";} 
            else if (i <= 127){itemlist += "Shadow Dire Wolf";}
            else if (i <= 128){itemlist += "Albino Dire Wolf";}
		}
       else if (zone.value == "copper"){
        if(document.getElementById("charmy").checked == true && rand(1,10) <= 4){
            var i = rand(95,128);}
        if(document.getElementById("famy").checked == true && rand(1,10) <= 5){
                var i = rand(95,128);}
        else {var i = rand(1,128);}
        
        if(i <= 5){itemlist += "100 Crystals";}
        else if (i <= 10){itemlist += "Bone Armor";} 
        else if (i <= 15){itemlist += "Veggie Skewer";}
        else if (i <= 20){itemlist += "Meatballs";} 
        else if (i <= 25){itemlist += "Crab Cake";} 
        else if (i <= 30){itemlist += "Fried Rice";} 
        else if (i <= 35){itemlist += "Satchel";} 
        else if (i <= 40){itemlist += "Healing Salve";} 
        else if (i <= 45){itemlist += "Goblet of Ice";} 
        else if (i <= 50){itemlist += "Goblet of Shadow";} 
        else if (i <= 55){itemlist += "Goblet of Radiation";} 
        else if (i <= 60){itemlist += "Goblet of Lightning";} 
        else if (i <= 65){itemlist += "Goblet of Fire";} 
        else if (i <= 70){itemlist += "Bandages";} 
        else if (i <= 72){itemlist += "Aether Booster";} 
        else if (i <= 78){itemlist += "Goblet of Wind";} 
        else if (i <= 83){itemlist += "Goblet of Poison";} 
        else if (i <= 88){itemlist += "Goblet of Luster";} 
        else if (i <= 83){itemlist += "Strength Booster";} 
        else if (i <= 86){itemlist += "Bleed Booster";} 
        else if (i <= 89){itemlist += "Breath Booster";} 
        else if (i <= 95){itemlist += "Common Recipe Fragment";} //ARENA HONOR/FAMY
        else if (i <= 99){itemlist += "Uncommon Recipe Fragment";}
        else if (i <= 101){itemlist += "Rare Recipe Fragment";} 
        else if (i <= 102){itemlist += "Mythic Recipe Fragment";} 
        else if (i <= 103){itemlist += "Tier 1 Starter Slot";} 
        else if (i <= 104){itemlist += "Mysterious Dragon's Blood";} 
        else if (i <= 106){itemlist += "Common Dragon's Blood";} 
        else if (i <= 107){itemlist += "Common Egg";} 
        else if (i <= 109){itemlist += "3 Dragon Soul Coins";} 
        else if (i <= 112){itemlist += "Aether Bag";} 
        else if (i <= 114){itemlist += "Premium Chest";} 
        else if (i <= 118){itemlist += "Arena Chest";}
        else if (i <= 120){itemlist += "Emporium BG Voucher";}
        else if (i <= 123){itemlist += "Market BG Voucher";} 
        else if (i <= 124){itemlist += "Familiar Chest";} 
        else if (i <= 125){itemlist += "Basilisk";} 
        else if (i <= 126){itemlist += "Dire Wolf";} 
        else if (i <= 127){itemlist += "Shadow Dire Wolf";}
        else if (i <= 128){itemlist += "Albino Dire Wolf";}
		}
}
//WARRIOR//
function rollBwarrior(){
    if (zone.value == "basic"){
        if(document.getElementById("charmy").checked == true && rand(1,10) <= 4){
            var i = rand(132,175);}
        if(document.getElementById("famy").checked == true && rand(1,10) <= 5){
                var i = rand(132,175);}
        else {var i = rand(1,175);}
        
        if(i <= 5){itemlist += "200 Crystals";}
        else if (i <= 10){itemlist += "Bone Armor";} 
        else if (i <= 15){itemlist += "Leather Armor";} 
        else if (i <= 20){itemlist += "Veggie Skewer";}
        else if (i <= 25){itemlist += "Meatballs";} 
        else if (i <= 30){itemlist += "Crab Cake";} 
        else if (i <= 35){itemlist += "Fried Rice";} 
        else if (i <= 40){itemlist += "Fruit Salad";}
        else if (i <= 45){itemlist += "Ramen";} 
        else if (i <= 50){itemlist += "Decently Cured Meat";} 
        else if (i <= 55){itemlist += "Decently Preserved Fish";}
        else if (i <= 60){itemlist += "Satchel";} 
        else if (i <= 65){itemlist += "Healing Salve";} 
        else if (i <= 70){itemlist += "Goblet of Ice";} 
        else if (i <= 75){itemlist += "Goblet of Shadow";} 
        else if (i <= 80){itemlist += "Goblet of Radiation";} 
        else if (i <= 85){itemlist += "Goblet of Lightning";} 
        else if (i <= 90){itemlist += "Goblet of Fire";} 
        else if (i <= 95){itemlist += "Bandages";} 
        else if (i <= 100){itemlist += "Antidote";} 
        else if (i <= 102){itemlist += "Aether Booster";} 
        else if (i <= 107){itemlist += "Goblet of Wind";} 
        else if (i <= 113){itemlist += "Goblet of Poison";} 
        else if (i <= 118){itemlist += "Goblet of Luster";} 
        else if (i <= 121){itemlist += "Strength Booster";} 
        else if (i <= 124){itemlist += "Bleed Booster";} 
        else if (i <= 127){itemlist += "Breath Booster";} 
        else if (i <= 132){itemlist += "Common Recipe Fragment";} //ARENA HONOR/FAMY
        else if (i <= 136){itemlist += "Uncommon Recipe Fragment";}
        else if (i <= 138){itemlist += "Rare Recipe Fragment";} 
        else if (i <= 139){itemlist += "Mythic Recipe Fragment";} 
        else if (i <= 142){itemlist += "Fire Elixir";} 
        else if (i <= 145){itemlist += "Ice Elixir";} 
        else if (i <= 148){itemlist += "Wind Elixir";} 
        else if (i <= 149){itemlist += "Tier 1 Starter Slot";} 
        else if (i <= 150){itemlist += "Tier 2 Starter Slot";} 
        else if (i <= 151){itemlist += "Mysterious Dragon's Blood";} 
        else if (i <= 152){itemlist += "Common Dragon's Blood";} 
        else if (i <= 153){itemlist += "Uncommon Dragon's Blood";} 
        else if (i <= 154){itemlist += "Common Egg";} 
        else if (i <= 156){itemlist += "4 Dragon Soul Coins";} 
        else if (i <= 158){itemlist += "Aether Bag";} 
        else if (i <= 160){itemlist += "Premium Chest";} 
        else if (i <= 164){itemlist += "Arena Chest";}
        else if (i <= 166){itemlist += "Emporium BG Voucher";}
        else if (i <= 169){itemlist += "Market BG Voucher";} 
        else if (i <= 170){itemlist += "Familiar Chest";} 
        else if (i <= 171){itemlist += "Basilisk";} 
        else if (i <= 172){itemlist += "Dire Wolf";} 
        else if (i <= 173){itemlist += "Shadow Dire Wolf";}
        else if (i <= 174){itemlist += "Albino Dire Wolf";}
        else if (i <= 175){itemlist += "Skill Token";}

    }
    else if (zone.value == "copper"){
        if(document.getElementById("charmy").checked == true && rand(1,10) <= 4){
            var i = rand(132,175);}
        if(document.getElementById("famy").checked == true && rand(1,10) <= 5){
                var i = rand(132,175);}
        else {var i = rand(1,175);}
        
        if(i <= 5){itemlist += "200 Crystals";}
        else if (i <= 10){itemlist += "Bone Armor";} 
        else if (i <= 15){itemlist += "Leather Armor";} 
        else if (i <= 20){itemlist += "Veggie Skewer";}
        else if (i <= 25){itemlist += "Meatballs";} 
        else if (i <= 30){itemlist += "Crab Cake";} 
        else if (i <= 35){itemlist += "Fried Rice";} 
        else if (i <= 40){itemlist += "Fruit Salad";}
        else if (i <= 45){itemlist += "Ramen";} 
        else if (i <= 50){itemlist += "Decently Cured Meat";} 
        else if (i <= 55){itemlist += "Decently Preserved Fish";}
        else if (i <= 60){itemlist += "Satchel";} 
        else if (i <= 65){itemlist += "Healing Salve";} 
        else if (i <= 70){itemlist += "Goblet of Ice";} 
        else if (i <= 75){itemlist += "Goblet of Shadow";} 
        else if (i <= 80){itemlist += "Goblet of Radiation";} 
        else if (i <= 85){itemlist += "Goblet of Lightning";} 
        else if (i <= 90){itemlist += "Goblet of Fire";} 
        else if (i <= 95){itemlist += "Bandages";} 
        else if (i <= 100){itemlist += "Antidote";} 
        else if (i <= 102){itemlist += "Aether Booster";} 
        else if (i <= 107){itemlist += "Goblet of Wind";} 
        else if (i <= 113){itemlist += "Goblet of Poison";} 
        else if (i <= 118){itemlist += "Goblet of Luster";} 
        else if (i <= 121){itemlist += "Strength Booster";} 
        else if (i <= 124){itemlist += "Bleed Booster";} 
        else if (i <= 127){itemlist += "Breath Booster";} 
        else if (i <= 132){itemlist += "Common Recipe Fragment";} //ARENA HONOR/FAMY
        else if (i <= 136){itemlist += "Uncommon Recipe Fragment";}
        else if (i <= 138){itemlist += "Rare Recipe Fragment";} 
        else if (i <= 139){itemlist += "Mythic Recipe Fragment";} 
        else if (i <= 142){itemlist += "Fire Elixir";} 
        else if (i <= 145){itemlist += "Ice Elixir";} 
        else if (i <= 148){itemlist += "Wind Elixir";} 
        else if (i <= 149){itemlist += "Tier 1 Starter Slot";} 
        else if (i <= 150){itemlist += "Tier 2 Starter Slot";} 
        else if (i <= 151){itemlist += "Mysterious Dragon's Blood";} 
        else if (i <= 152){itemlist += "Common Dragon's Blood";} 
        else if (i <= 153){itemlist += "Uncommon Dragon's Blood";} 
        else if (i <= 154){itemlist += "Common Egg";} 
        else if (i <= 156){itemlist += "4 Dragon Soul Coins";} 
        else if (i <= 158){itemlist += "Aether Bag";} 
        else if (i <= 160){itemlist += "Premium Chest";} 
        else if (i <= 164){itemlist += "Arena Chest";}
        else if (i <= 166){itemlist += "Emporium BG Voucher";}
        else if (i <= 169){itemlist += "Market BG Voucher";} 
        else if (i <= 170){itemlist += "Familiar Chest";} 
        else if (i <= 171){itemlist += "Basilisk";} 
        else if (i <= 172){itemlist += "Dire Wolf";} 
        else if (i <= 173){itemlist += "Shadow Dire Wolf";}
        else if (i <= 174){itemlist += "Albino Dire Wolf";}
        else if (i <= 175){itemlist += "Skill Token";}

    }
}
//Gladiator//
function rollBgladiator(){
    if (zone.value == "basic"){
        if(document.getElementById("charmy").checked == true && rand(1,10) <= 4){
            var i = rand(132,187);}
        if(document.getElementById("famy").checked == true && rand(1,10) <= 5){
                var i = rand(132,187);}
        else {var i = rand(1,187);}
        
        if(i <= 5){itemlist += "300 Crystals";}
        else if (i <= 10){itemlist += "Bone Armor";} 
        else if (i <= 15){itemlist += "Leather Armor";} 
        else if (i <= 20){itemlist += "Meat Stew";}
        else if (i <= 25){itemlist += "Dumpling Stir Fry";} 
        else if (i <= 30){itemlist += "Premium Cured Meat";} 
        else if (i <= 35){itemlist += "Premium Preserved Fish";} 
        else if (i <= 40){itemlist += "Fruit Salad";}
        else if (i <= 45){itemlist += "Ramen";} 
        else if (i <= 50){itemlist += "Decently Cured Meat";} 
        else if (i <= 55){itemlist += "Decently Preserved Fish";}
        else if (i <= 60){itemlist += "Satchel";} 
        else if (i <= 65){itemlist += "Healing Salve";} 
        else if (i <= 70){itemlist += "Goblet of Ice";} 
        else if (i <= 75){itemlist += "Goblet of Shadow";} 
        else if (i <= 80){itemlist += "Goblet of Radiation";} 
        else if (i <= 85){itemlist += "Goblet of Lightning";} 
        else if (i <= 90){itemlist += "Goblet of Fire";} 
        else if (i <= 95){itemlist += "Bandages";} 
        else if (i <= 100){itemlist += "Antidote";} 
        else if (i <= 102){itemlist += "Aether Booster";} 
        else if (i <= 107){itemlist += "Goblet of Wind";} 
        else if (i <= 113){itemlist += "Goblet of Poison";} 
        else if (i <= 118){itemlist += "Goblet of Luster";} 
        else if (i <= 121){itemlist += "Strength Booster";} 
        else if (i <= 124){itemlist += "Bleed Booster";} 
        else if (i <= 127){itemlist += "Breath Booster";} 
        else if (i <= 132){itemlist += "Common Recipe Fragment";} //ARENA HONOR/FAMY
        else if (i <= 136){itemlist += "Uncommon Recipe Fragment";}
        else if (i <= 138){itemlist += "Rare Recipe Fragment";} 
        else if (i <= 139){itemlist += "Mythic Recipe Fragment";} 
        else if (i <= 142){itemlist += "Fire Elixir";} 
        else if (i <= 145){itemlist += "Ice Elixir";} 
        else if (i <= 148){itemlist += "Wind Elixir";} 
        else if (i <= 149){itemlist += "Tier 1 Starter Slot";} 
        else if (i <= 150){itemlist += "Tier 2 Starter Slot";} 
        else if (i <= 151){itemlist += "Mysterious Dragon's Blood";} 
        else if (i <= 152){itemlist += "Common Dragon's Blood";} 
        else if (i <= 153){itemlist += "Uncommon Dragon's Blood";} 
        else if (i <= 154){itemlist += "Common Egg";} 
        else if (i <= 156){itemlist += "5 Dragon Soul Coins";} 
        else if (i <= 158){itemlist += "Aether Bag";} 
        else if (i <= 160){itemlist += "Premium Chest";} 
        else if (i <= 164){itemlist += "Arena Chest";}
        else if (i <= 166){itemlist += "Emporium BG Voucher";}
        else if (i <= 169){itemlist += "Market BG Voucher";} 
        else if (i <= 170){itemlist += "Familiar Chest";} 
        else if (i <= 171){itemlist += "Basilisk";} 
        else if (i <= 172){itemlist += "Dire Wolf";} 
        else if (i <= 173){itemlist += "Shadow Dire Wolf";}
        else if (i <= 174){itemlist += "Albino Dire Wolf";}
        else if (i <= 175){itemlist += "Skill Token";}
        else if (i <= 178){itemlist += "Shadow Elixir";} 
        else if (i <= 180){itemlist += "Radiation Elixir";} 
        else if (i <= 182){itemlist += "Lightning Elixir";} 
        else if (i <= 181){itemlist += "Rare Dragon's Blood";}
        else if (i <= 182){itemlist += "Tier 3 Starter Slot";}
        else if (i <= 183){itemlist += "Uncommon Dragon Egg";}
        else if (i <= 186){itemlist += "Iron Armor";}
        else if (i <= 187){itemlist += "Revival Feather";}

    }
    else if (zone.value == "copper"){
        if(document.getElementById("charmy").checked == true && rand(1,10) <= 4){
            var i = rand(132,187);}
        if(document.getElementById("famy").checked == true && rand(1,10) <= 5){
                var i = rand(132,187);}
        else {var i = rand(1,187);}
        
        if(i <= 5){itemlist += "300 Crystals";}
        else if (i <= 10){itemlist += "Bone Armor";} 
        else if (i <= 15){itemlist += "Leather Armor";} 
        else if (i <= 20){itemlist += "Meat Stew";}
        else if (i <= 25){itemlist += "Dumpling Stir Fry";} 
        else if (i <= 30){itemlist += "Premium Cured Meat";} 
        else if (i <= 35){itemlist += "Premium Preserved Fish";} 
        else if (i <= 40){itemlist += "Fruit Salad";}
        else if (i <= 45){itemlist += "Ramen";} 
        else if (i <= 50){itemlist += "Decently Cured Meat";} 
        else if (i <= 55){itemlist += "Decently Preserved Fish";}
        else if (i <= 60){itemlist += "Satchel";} 
        else if (i <= 65){itemlist += "Healing Salve";} 
        else if (i <= 70){itemlist += "Goblet of Ice";} 
        else if (i <= 75){itemlist += "Goblet of Shadow";} 
        else if (i <= 80){itemlist += "Goblet of Radiation";} 
        else if (i <= 85){itemlist += "Goblet of Lightning";} 
        else if (i <= 90){itemlist += "Goblet of Fire";} 
        else if (i <= 95){itemlist += "Bandages";} 
        else if (i <= 100){itemlist += "Antidote";} 
        else if (i <= 102){itemlist += "Aether Booster";} 
        else if (i <= 107){itemlist += "Goblet of Wind";} 
        else if (i <= 113){itemlist += "Goblet of Poison";} 
        else if (i <= 118){itemlist += "Goblet of Luster";} 
        else if (i <= 121){itemlist += "Strength Booster";} 
        else if (i <= 124){itemlist += "Bleed Booster";} 
        else if (i <= 127){itemlist += "Breath Booster";} 
        else if (i <= 132){itemlist += "Common Recipe Fragment";} //ARENA HONOR/FAMY
        else if (i <= 136){itemlist += "Uncommon Recipe Fragment";}
        else if (i <= 138){itemlist += "Rare Recipe Fragment";} 
        else if (i <= 139){itemlist += "Mythic Recipe Fragment";} 
        else if (i <= 142){itemlist += "Fire Elixir";} 
        else if (i <= 145){itemlist += "Ice Elixir";} 
        else if (i <= 148){itemlist += "Wind Elixir";} 
        else if (i <= 149){itemlist += "Tier 1 Starter Slot";} 
        else if (i <= 150){itemlist += "Tier 2 Starter Slot";} 
        else if (i <= 151){itemlist += "Mysterious Dragon's Blood";} 
        else if (i <= 152){itemlist += "Common Dragon's Blood";} 
        else if (i <= 153){itemlist += "Uncommon Dragon's Blood";} 
        else if (i <= 154){itemlist += "Common Egg";} 
        else if (i <= 156){itemlist += "5 Dragon Soul Coins";} 
        else if (i <= 158){itemlist += "Aether Bag";} 
        else if (i <= 160){itemlist += "Premium Chest";} 
        else if (i <= 164){itemlist += "Arena Chest";}
        else if (i <= 166){itemlist += "Emporium BG Voucher";}
        else if (i <= 169){itemlist += "Market BG Voucher";} 
        else if (i <= 170){itemlist += "Familiar Chest";} 
        else if (i <= 171){itemlist += "Basilisk";} 
        else if (i <= 172){itemlist += "Dire Wolf";} 
        else if (i <= 173){itemlist += "Shadow Dire Wolf";}
        else if (i <= 174){itemlist += "Albino Dire Wolf";}
        else if (i <= 175){itemlist += "Skill Token";}
        else if (i <= 178){itemlist += "Shadow Elixir";} 
        else if (i <= 180){itemlist += "Radiation Elixir";} 
        else if (i <= 182){itemlist += "Lightning Elixir";} 
        else if (i <= 181){itemlist += "Rare Dragon's Blood";}
        else if (i <= 182){itemlist += "Tier 3 Starter Slot";}
        else if (i <= 183){itemlist += "Uncommon Dragon Egg";}
        else if (i <= 186){itemlist += "Iron Armor";}
        else if (i <= 187){itemlist += "Revival Feather";}
    }
}
//CHAMPION//
function rollBchampion(){
    if (zone.value == "basic"){
        if(document.getElementById("charmy").checked == true && rand(1,10) <= 4){
            var i = rand(132,199);}
        if(document.getElementById("famy").checked == true && rand(1,10) <= 5){
                var i = rand(132,199);}
        else {var i = rand(1,199);}
        
        if(i <= 5){itemlist += "400 Crystals";}
        else if (i <= 10){itemlist += "Bone Armor";} 
        else if (i <= 15){itemlist += "Leather Armor";} 
        else if (i <= 20){itemlist += "Meat Stew";}
        else if (i <= 25){itemlist += "Dumpling Stir Fry";} 
        else if (i <= 30){itemlist += "Premium Cured Meat";} 
        else if (i <= 35){itemlist += "Premium Preserved Fish";} 
        else if (i <= 40){itemlist += "Fruit Salad";}
        else if (i <= 45){itemlist += "Ramen";} 
        else if (i <= 50){itemlist += "Decently Cured Meat";} 
        else if (i <= 55){itemlist += "Decently Preserved Fish";}
        else if (i <= 60){itemlist += "Satchel";} 
        else if (i <= 65){itemlist += "Healing Salve";} 
        else if (i <= 70){itemlist += "Goblet of Ice";} 
        else if (i <= 75){itemlist += "Goblet of Shadow";} 
        else if (i <= 80){itemlist += "Goblet of Radiation";} 
        else if (i <= 85){itemlist += "Goblet of Lightning";} 
        else if (i <= 90){itemlist += "Goblet of Fire";} 
        else if (i <= 95){itemlist += "Bandages";} 
        else if (i <= 100){itemlist += "Antidote";} 
        else if (i <= 102){itemlist += "Aether Booster";} 
        else if (i <= 107){itemlist += "Goblet of Wind";} 
        else if (i <= 113){itemlist += "Goblet of Poison";} 
        else if (i <= 118){itemlist += "Goblet of Luster";} 
        else if (i <= 121){itemlist += "Strength Booster";} 
        else if (i <= 124){itemlist += "Bleed Booster";} 
        else if (i <= 127){itemlist += "Breath Booster";} 
        else if (i <= 132){itemlist += "Common Recipe Fragment";} //ARENA HONOR/FAMY
        else if (i <= 136){itemlist += "Uncommon Recipe Fragment";}
        else if (i <= 138){itemlist += "Rare Recipe Fragment";} 
        else if (i <= 139){itemlist += "Mythic Recipe Fragment";} 
        else if (i <= 142){itemlist += "Fire Elixir";} 
        else if (i <= 145){itemlist += "Ice Elixir";} 
        else if (i <= 148){itemlist += "Wind Elixir";} 
        else if (i <= 149){itemlist += "Tier 1 Starter Slot";} 
        else if (i <= 150){itemlist += "Tier 2 Starter Slot";} 
        else if (i <= 151){itemlist += "Mysterious Dragon's Blood";} 
        else if (i <= 152){itemlist += "Common Dragon's Blood";} 
        else if (i <= 153){itemlist += "Uncommon Dragon's Blood";} 
        else if (i <= 154){itemlist += "Common Egg";} 
        else if (i <= 156){itemlist += "6 Dragon Soul Coins";} 
        else if (i <= 158){itemlist += "Aether Bag";} 
        else if (i <= 160){itemlist += "Premium Chest";} 
        else if (i <= 164){itemlist += "Arena Chest";}
        else if (i <= 166){itemlist += "Emporium BG Voucher";}
        else if (i <= 169){itemlist += "Market BG Voucher";} 
        else if (i <= 170){itemlist += "Familiar Chest";} 
        else if (i <= 171){itemlist += "Basilisk";} 
        else if (i <= 172){itemlist += "Dire Wolf";} 
        else if (i <= 173){itemlist += "Shadow Dire Wolf";}
        else if (i <= 174){itemlist += "Albino Dire Wolf";}
        else if (i <= 175){itemlist += "Skill Token";}
        else if (i <= 178){itemlist += "Shadow Elixir";} 
        else if (i <= 180){itemlist += "Radiation Elixir";} 
        else if (i <= 182){itemlist += "Lightning Elixir";} 
        else if (i <= 181){itemlist += "Rare Dragon's Blood";}
        else if (i <= 182){itemlist += "Tier 3 Starter Slot";}
        else if (i <= 183){itemlist += "Uncommon Dragon Egg";}
        else if (i <= 186){itemlist += "Iron Armor";}
        else if (i <= 187){itemlist += "Revival Feather";}
        else if (i <= 188){itemlist += "Aether Book";}
        else if (i <= 189){itemlist += "Gear: Aether Armor";}
        else if (i <= 190){itemlist += "Gear: Crystalline Armor";}
        else if (i <= 192){itemlist += "Luster Elixir";}
        else if (i <= 194){itemlist += "Poison Elixir";}
        else if (i <= 196){itemlist += "Hemlock Syrup";}
        else if (i <= 197){itemlist += "Mythic Dragon's Blood";}
        else if (i <= 198){itemlist += "Rare Dragon Egg";}
        else if (i <= 199){itemlist += "Tier 4 Starter Slot";}
    }
    else if (zone.value == "copper"){
        if(document.getElementById("charmy").checked == true && rand(1,10) <= 4){
            var i = rand(132,199);}
        if(document.getElementById("famy").checked == true && rand(1,10) <= 5){
                var i = rand(132,199);}
        else {var i = rand(1,199);}
        
        if(i <= 5){itemlist += "400 Crystals";}
        else if (i <= 10){itemlist += "Bone Armor";} 
        else if (i <= 15){itemlist += "Leather Armor";} 
        else if (i <= 20){itemlist += "Meat Stew";}
        else if (i <= 25){itemlist += "Dumpling Stir Fry";} 
        else if (i <= 30){itemlist += "Premium Cured Meat";} 
        else if (i <= 35){itemlist += "Premium Preserved Fish";} 
        else if (i <= 40){itemlist += "Fruit Salad";}
        else if (i <= 45){itemlist += "Ramen";} 
        else if (i <= 50){itemlist += "Decently Cured Meat";} 
        else if (i <= 55){itemlist += "Decently Preserved Fish";}
        else if (i <= 60){itemlist += "Satchel";} 
        else if (i <= 65){itemlist += "Healing Salve";} 
        else if (i <= 70){itemlist += "Goblet of Ice";} 
        else if (i <= 75){itemlist += "Goblet of Shadow";} 
        else if (i <= 80){itemlist += "Goblet of Radiation";} 
        else if (i <= 85){itemlist += "Goblet of Lightning";} 
        else if (i <= 90){itemlist += "Goblet of Fire";} 
        else if (i <= 95){itemlist += "Bandages";} 
        else if (i <= 100){itemlist += "Antidote";} 
        else if (i <= 102){itemlist += "Aether Booster";} 
        else if (i <= 107){itemlist += "Goblet of Wind";} 
        else if (i <= 113){itemlist += "Goblet of Poison";} 
        else if (i <= 118){itemlist += "Goblet of Luster";} 
        else if (i <= 121){itemlist += "Strength Booster";} 
        else if (i <= 124){itemlist += "Bleed Booster";} 
        else if (i <= 127){itemlist += "Breath Booster";} 
        else if (i <= 132){itemlist += "Common Recipe Fragment";} //ARENA HONOR/FAMY
        else if (i <= 136){itemlist += "Uncommon Recipe Fragment";}
        else if (i <= 138){itemlist += "Rare Recipe Fragment";} 
        else if (i <= 139){itemlist += "Mythic Recipe Fragment";} 
        else if (i <= 142){itemlist += "Fire Elixir";} 
        else if (i <= 145){itemlist += "Ice Elixir";} 
        else if (i <= 148){itemlist += "Wind Elixir";} 
        else if (i <= 149){itemlist += "Tier 1 Starter Slot";} 
        else if (i <= 150){itemlist += "Tier 2 Starter Slot";} 
        else if (i <= 151){itemlist += "Mysterious Dragon's Blood";} 
        else if (i <= 152){itemlist += "Common Dragon's Blood";} 
        else if (i <= 153){itemlist += "Uncommon Dragon's Blood";} 
        else if (i <= 154){itemlist += "Common Egg";} 
        else if (i <= 156){itemlist += "6 Dragon Soul Coins";} 
        else if (i <= 158){itemlist += "Aether Bag";} 
        else if (i <= 160){itemlist += "Premium Chest";} 
        else if (i <= 164){itemlist += "Arena Chest";}
        else if (i <= 166){itemlist += "Emporium BG Voucher";}
        else if (i <= 169){itemlist += "Market BG Voucher";} 
        else if (i <= 170){itemlist += "Familiar Chest";} 
        else if (i <= 171){itemlist += "Basilisk";} 
        else if (i <= 172){itemlist += "Dire Wolf";} 
        else if (i <= 173){itemlist += "Shadow Dire Wolf";}
        else if (i <= 174){itemlist += "Albino Dire Wolf";}
        else if (i <= 175){itemlist += "Skill Token";}
        else if (i <= 178){itemlist += "Shadow Elixir";} 
        else if (i <= 180){itemlist += "Radiation Elixir";} 
        else if (i <= 182){itemlist += "Lightning Elixir";} 
        else if (i <= 181){itemlist += "Rare Dragon's Blood";}
        else if (i <= 182){itemlist += "Tier 3 Starter Slot";}
        else if (i <= 183){itemlist += "Uncommon Dragon Egg";}
        else if (i <= 186){itemlist += "Iron Armor";}
        else if (i <= 187){itemlist += "Revival Feather";}
        else if (i <= 188){itemlist += "Aether Book";}
        else if (i <= 189){itemlist += "Gear: Aether Armor";}
        else if (i <= 190){itemlist += "Gear: Crystalline Armor";}
        else if (i <= 192){itemlist += "Luster Elixir";}
        else if (i <= 194){itemlist += "Poison Elixir";}
        else if (i <= 196){itemlist += "Hemlock Syrup";}
        else if (i <= 197){itemlist += "Mythic Dragon's Blood";}
        else if (i <= 198){itemlist += "Rare Dragon Egg";}
        else if (i <= 199){itemlist += "Tier 4 Starter Slot";}
    }
}
	
	for (var m = 0; m < lootSize; m++) {
		 itemlist += "<br>";
		if (activity.value == "Bchallenger"){rollBchallenger();}
        else if (activity.value == "Bwarrior"){rollBwarrior();}
		else if (activity.value == "Bgladiator"){rollBgladiator();}
        else if (activity.value == "Bchampion"){rollBchampion();}

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