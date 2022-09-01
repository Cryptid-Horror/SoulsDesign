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
	else {lootSize = rand(3,6);} // Entry rolls are default
	if (document.getElementById("mimicy").checked == true){
		lootSize += 1;
		itemlist += "<i>Golden Chest of Mimicry Returned an extra item!</i><br>";}
    if (document.getElementById("hoardery").checked == true && rand(1,10) <= 4){
		lootSize += 1;
		itemlist += "<i>Hoarder skill activated!</i><br>";}
    if (document.getElementById("bagy").checked == true){
		lootSize += 1;
		itemlist += "<i>An extra item was stored in your satchel!</i><br>";}
    if (document.getElementById("endy").checked == true){
        lootSize += 2;
        itemlist += "<i>Your dragon brought back an extra item in their Endless Satchel!</i><br>";}

            

//CHALLENGER//
function rollBrankless(){
    if (zone.value == "basic"){
			if(document.getElementById("charmy").checked == true && rand(1,10) <= 4){
				var i = rand(32,38);}
            if(document.getElementById("famy").checked == true && rand(1,10) <= 5){
                    var i = rand(32,38);}
			else {var i = rand(1,38);}
			
			if(i <= 5){itemlist += "100 Crystals";}
			else if (i <= 10){itemlist += "Bone Armor";} 
			else if (i <= 15){itemlist += "Veggie Skewer";}
			else if (i <= 20){itemlist += "Meatballs";} 
			else if (i <= 25){itemlist += "Crab Cake";} 
			else if (i <= 30){itemlist += "Fried Rice";} 
			else if (i <= 32){itemlist += "Healing Salve";} //ARENA HONOR/FAMY
            else if (i <= 34){itemlist += "Bandages";} 
            else if (i <= 35){itemlist += "Breath Booster";} 
            else if (i <= 36){itemlist += "Common Recipe Fragment";} 
            else if (i <= 37){itemlist += "Emporium Coupon";}
            else if (i <= 38){itemlist += "Market Coupon";} 
		}
       else if (zone.value == "copper"){
        if(document.getElementById("charmy").checked == true && rand(1,10) <= 4){
            var i = rand(32,38);}
        if(document.getElementById("famy").checked == true && rand(1,10) <= 5){
                var i = rand(32,38);}
        else {var i = rand(1,38);}
        
        if(i <= 5){itemlist += "100 Crystals";}
        else if (i <= 10){itemlist += "Bone Armor";} 
        else if (i <= 15){itemlist += "Veggie Skewer";}
        else if (i <= 20){itemlist += "Meatballs";} 
        else if (i <= 25){itemlist += "Crab Cake";} 
        else if (i <= 30){itemlist += "Fried Rice";} 
        else if (i <= 32){itemlist += "Healing Salve";} //ARENA HONOR/FAMY
        else if (i <= 34){itemlist += "Bandages";} 
        else if (i <= 35){itemlist += "Breath Booster";} 
        else if (i <= 36){itemlist += "Common Recipe Fragment";} 
        else if (i <= 37){itemlist += "Emporium Coupon";}
        else if (i <= 38){itemlist += "Market Coupon";} 
		}
}
//WARRIOR//
function rollBchallenger(){
    if (zone.value == "basic"){
        if(document.getElementById("charmy").checked == true && rand(1,10) <= 4){
            var i = rand(52,67);}
        if(document.getElementById("famy").checked == true && rand(1,10) <= 5){
                var i = rand(52,67);}
        else {var i = rand(1,67);}
        
        if(i <= 5){itemlist += "200 Crystals";}
        else if (i <= 10){itemlist += "Bone Armor";} 
        else if (i <= 15){itemlist += "Leather Armor";} 
        else if (i <= 20){itemlist += "Meatballs";} 
        else if (i <= 25){itemlist += "Crab Cake";} 
        else if (i <= 30){itemlist += "Fried Rice";} 
        else if (i <= 35){itemlist += "Satchel";} 
        else if (i <= 40){itemlist += "Healing Salve";} 
        else if (i <= 45){itemlist += "Bandages";} 
        else if (i <= 50){itemlist += "Goblet of Elements";} 
        else if (i <= 52){itemlist += "Aether Booster";} //ARENA HONOR/FAMY
        else if (i <= 54){itemlist += "Strength Booster";} 
        else if (i <= 56){itemlist += "Bleed Booster";} 
        else if (i <= 58){itemlist += "Breath Booster";} 
        else if (i <= 59){itemlist += "Common Recipe Fragment";} 
        else if (i <= 60){itemlist += "Uncommon Recipe Fragment";}
        else if (i <= 61){itemlist += "3 Dragon Soul Coins";} 
        else if (i <= 62){itemlist += "Activity Chest";}
        else if (i <= 63){itemlist += "Familiar Chest";} 
        else if (i <= 64){itemlist += "Emporium Coupon";}
        else if (i <= 65){itemlist += "Market Coupon";} 
        else if (i <= 66){itemlist += "General Skill Token";}
        else if (i <= 67){itemlist += "Loot Table: Elixir";}
    }
    else if (zone.value == "copper"){
        if(document.getElementById("charmy").checked == true && rand(1,10) <= 4){
            var i = rand(52,67);}
        if(document.getElementById("famy").checked == true && rand(1,10) <= 5){
                var i = rand(52,67);}
        else {var i = rand(1,67);}
        
        if(i <= 5){itemlist += "200 Crystals";}
        else if (i <= 10){itemlist += "Bone Armor";} 
        else if (i <= 15){itemlist += "Leather Armor";} 
        else if (i <= 20){itemlist += "Meatballs";} 
        else if (i <= 25){itemlist += "Crab Cake";} 
        else if (i <= 30){itemlist += "Fried Rice";} 
        else if (i <= 35){itemlist += "Satchel";} 
        else if (i <= 40){itemlist += "Healing Salve";} 
        else if (i <= 45){itemlist += "Bandages";} 
        else if (i <= 50){itemlist += "Goblet of Elements";} 
        else if (i <= 52){itemlist += "Aether Booster";} //ARENA HONOR/FAMY
        else if (i <= 54){itemlist += "Strength Booster";} 
        else if (i <= 56){itemlist += "Bleed Booster";} 
        else if (i <= 58){itemlist += "Breath Booster";} 
        else if (i <= 59){itemlist += "Common Recipe Fragment";} 
        else if (i <= 60){itemlist += "Uncommon Recipe Fragment";}
        else if (i <= 61){itemlist += "3 Dragon Soul Coins";} 
        else if (i <= 62){itemlist += "Activity Chest";}
        else if (i <= 63){itemlist += "Familiar Chest";} 
        else if (i <= 64){itemlist += "Emporium Coupon";}
        else if (i <= 65){itemlist += "Market Coupon";} 
        else if (i <= 66){itemlist += "General Skill Token";}
        else if (i <= 67){itemlist += "Loot Table: Elixir";}
    }
}
//Gladiator//
function rollBwarrior(){
    if (zone.value == "basic"){
        if(document.getElementById("charmy").checked == true && rand(1,10) <= 4){
            var i = rand(75,90);}
        if(document.getElementById("famy").checked == true && rand(1,10) <= 5){
                var i = rand(75,90);}
        else {var i = rand(1,90);}
        
        if(i <= 5){itemlist += "300 Crystals";}
        else if (i <= 10){itemlist += "Leather Armor";} 
        else if (i <= 15){itemlist += "Iron Armor";} 
        else if (i <= 20){itemlist += "Fried Rice";} 
        else if (i <= 25){itemlist += "Fruit Salad";}
        else if (i <= 30){itemlist += "Ramen";} 
        else if (i <= 35){itemlist += "Decently Cured Meat";} 
        else if (i <= 40){itemlist += "Decently Preserved Fish";}
        else if (i <= 45){itemlist += "Satchel";} 
        else if (i <= 50){itemlist += "Healing Salve";} 
        else if (i <= 55){itemlist += "Bandages";} 
        else if (i <= 60){itemlist += "Goblet of Elements";} 
        else if (i <= 65){itemlist += "Aether Booster";} 
        else if (i <= 67){itemlist += "Hemlock Syrup";} 
        else if (i <= 69){itemlist += "Strength Booster";} 
        else if (i <= 71){itemlist += "Bleed Booster";} 
        else if (i <= 73){itemlist += "Breath Booster";} 
        else if (i <= 75){itemlist += "Uncommon Recipe Fragment";}//ARENA HONOR/FAMY
        else if (i <= 76){itemlist += "Rare Recipe Fragment";} 
        else if (i <= 77){itemlist += "Tier 1 Starter Slot";} 
        else if (i <= 78){itemlist += "Common Dragon's Blood";} 
        else if (i <= 79){itemlist += "Common Egg";} 
        else if (i <= 80){itemlist += "4 Dragon Soul Coins";} 
        else if (i <= 81){itemlist += "Activity Chest";}
        else if (i <= 82){itemlist += "Familiar Chest";} 
        else if (i <= 83){itemlist += "Design Chest";} 
        else if (i <= 84){itemlist += "Emporium Coupon";}
        else if (i <= 85){itemlist += "Market Coupon";} 
        else if (i <= 86){itemlist += "Dire Wolf";} 
        else if (i <= 87){itemlist += "Hemlock Syrup";}
        else if (i <= 88){itemlist += "Skill Token General";}
        else if (i <= 89){itemlist += "Skill Combat";}
        else if (i <= 90){itemlist += "Loot Table: Elixir";}
    }
    else if (zone.value == "copper"){
        if(document.getElementById("charmy").checked == true && rand(1,10) <= 4){
            var i = rand(75,90);}
        if(document.getElementById("famy").checked == true && rand(1,10) <= 5){
                var i = rand(75,90);}
        else {var i = rand(1,90);}
        
        if(i <= 5){itemlist += "300 Crystals";}
        else if (i <= 10){itemlist += "Leather Armor";} 
        else if (i <= 15){itemlist += "Iron Armor";} 
        else if (i <= 20){itemlist += "Fried Rice";} 
        else if (i <= 25){itemlist += "Fruit Salad";}
        else if (i <= 30){itemlist += "Ramen";} 
        else if (i <= 35){itemlist += "Decently Cured Meat";} 
        else if (i <= 40){itemlist += "Decently Preserved Fish";}
        else if (i <= 45){itemlist += "Satchel";} 
        else if (i <= 50){itemlist += "Healing Salve";} 
        else if (i <= 55){itemlist += "Bandages";} 
        else if (i <= 60){itemlist += "Goblet of Elements";} 
        else if (i <= 65){itemlist += "Aether Booster";} 
        else if (i <= 67){itemlist += "Hemlock Syrup";} 
        else if (i <= 69){itemlist += "Strength Booster";} 
        else if (i <= 71){itemlist += "Bleed Booster";} 
        else if (i <= 73){itemlist += "Breath Booster";} 
        else if (i <= 75){itemlist += "Uncommon Recipe Fragment";}//ARENA HONOR/FAMY
        else if (i <= 76){itemlist += "Rare Recipe Fragment";} 
        else if (i <= 77){itemlist += "Tier 1 Starter Slot";} 
        else if (i <= 78){itemlist += "Common Dragon's Blood";} 
        else if (i <= 79){itemlist += "Common Egg";} 
        else if (i <= 80){itemlist += "4 Dragon Soul Coins";} 
        else if (i <= 81){itemlist += "Activity Chest";}
        else if (i <= 82){itemlist += "Familiar Chest";} 
        else if (i <= 83){itemlist += "Design Chest";} 
        else if (i <= 84){itemlist += "Emporium Coupon";}
        else if (i <= 85){itemlist += "Market Coupon";} 
        else if (i <= 86){itemlist += "Dire Wolf";} 
        else if (i <= 87){itemlist += "Hemlock Syrup";}
        else if (i <= 88){itemlist += "Skill Token General";}
        else if (i <= 89){itemlist += "Skill Combat";}
        else if (i <= 90){itemlist += "Loot Table: Elixir";}
    }
}
//CHAMPION//
function rollBgladiator(){
    if (zone.value == "basic"){
        if(document.getElementById("charmy").checked == true && rand(1,10) <= 4){
            var i = rand(66,93);}
        if(document.getElementById("famy").checked == true && rand(1,10) <= 5){
                var i = rand(66,93);}
        else {var i = rand(1,93);}
        
        if(i <= 5){itemlist += "400 Crystals";}
        else if (i <= 10){itemlist += "Iron Armor";} 
        else if (i <= 15){itemlist += "Meat Stew";}
        else if (i <= 20){itemlist += "Dumpling Stir Fry";} 
        else if (i <= 25){itemlist += "Decently Cured Meat";} 
        else if (i <= 30){itemlist += "Decently Preserved Fish";} 
        else if (i <= 35){itemlist += "Ramen";} 
        else if (i <= 40){itemlist += "Satchel";} 
        else if (i <= 45){itemlist += "Healing Salve";} 
        else if (i <= 50){itemlist += "Bandages";} 
        else if (i <= 55){itemlist += "Goblet of Elements";} 
        else if (i <= 57){itemlist += "Aether Booster";} 
        else if (i <= 59){itemlist += "Strength Booster";} 
        else if (i <= 61){itemlist += "Bleed Booster";} 
        else if (i <= 63){itemlist += "Breath Booster";} 
        else if (i <= 64){itemlist += "Brawler Booster";}
        else if (i <= 65){itemlist += "Nightshade Booster";}
        else if (i <= 66){itemlist += "Rare Recipe Fragment";} //ARENA HONOR/FAMY
        else if (i <= 67){itemlist += "Mythic Recipe Fragment";} 
        else if (i <= 68){itemlist += "Tier 1 Starter Slot";} 
        else if (i <= 69){itemlist += "Tier 2 Starter Slot";} 
        else if (i <= 70){itemlist += "Mysterious Dragon's Blood";} 
        else if (i <= 72){itemlist += "Common Dragon's Blood";} 
        else if (i <= 73){itemlist += "Uncommon Dragon's Blood";} 
        else if (i <= 74){itemlist += "Random Common Egg";} 
        else if (i <= 75){itemlist += "Random Uncommon Dragon Egg";}
        else if (i <= 76){itemlist += "5 Dragon Soul Coins";} 
        else if (i <= 77){itemlist += "Aether Bag";} 
        else if (i <= 78){itemlist += "Activity Chest";}
        else if (i <= 79){itemlist += "Familiar Chest";}
        else if (i <= 80){itemlist += "Design Chest";}
        else if (i <= 81){itemlist += "Nesting Chest";}
        else if (i <= 82){itemlist += "Emporium Coupon";}
        else if (i <= 83){itemlist += "Market Coupon";} 
        else if (i <= 84){itemlist += "Basilisk";} 
        else if (i <= 85){itemlist += "Dire Wolf";} 
        else if (i <= 86){itemlist += "Hemlock Syrup";}
        else if (i <= 87){itemlist += "Skill Token General";}
        else if (i <= 88){itemlist += "Skill Token Combat";}
        else if (i <= 89){itemlist += "Loot Table: Elixir";} 
        else if (i <= 90){itemlist += "Mark of the Aemon";}
        else if (i <= 91){itemlist += "Book of Empyrean";}
        else if (i <= 92){itemlist += "Congealed Ancient's blood";}
        else if (i <= 93){itemlist += "Aether Book";}
    }
    else if (zone.value == "copper"){
        if(document.getElementById("charmy").checked == true && rand(1,10) <= 4){
            var i = rand(66,93);}
        if(document.getElementById("famy").checked == true && rand(1,10) <= 5){
                var i = rand(66,93);}
        else {var i = rand(1,93);}
        
        if(i <= 5){itemlist += "400 Crystals";}
        else if (i <= 10){itemlist += "Iron Armor";} 
        else if (i <= 15){itemlist += "Meat Stew";}
        else if (i <= 20){itemlist += "Dumpling Stir Fry";} 
        else if (i <= 25){itemlist += "Decently Cured Meat";} 
        else if (i <= 30){itemlist += "Decently Preserved Fish";} 
        else if (i <= 35){itemlist += "Ramen";} 
        else if (i <= 40){itemlist += "Satchel";} 
        else if (i <= 45){itemlist += "Healing Salve";} 
        else if (i <= 50){itemlist += "Bandages";} 
        else if (i <= 55){itemlist += "Goblet of Elements";} 
        else if (i <= 57){itemlist += "Aether Booster";} 
        else if (i <= 59){itemlist += "Strength Booster";} 
        else if (i <= 61){itemlist += "Bleed Booster";} 
        else if (i <= 63){itemlist += "Breath Booster";} 
        else if (i <= 64){itemlist += "Brawler Booster";}
        else if (i <= 65){itemlist += "Nightshade Booster";}
        else if (i <= 66){itemlist += "Rare Recipe Fragment";} //ARENA HONOR/FAMY
        else if (i <= 67){itemlist += "Mythic Recipe Fragment";} 
        else if (i <= 68){itemlist += "Tier 1 Starter Slot";} 
        else if (i <= 69){itemlist += "Tier 2 Starter Slot";} 
        else if (i <= 70){itemlist += "Mysterious Dragon's Blood";} 
        else if (i <= 72){itemlist += "Common Dragon's Blood";} 
        else if (i <= 73){itemlist += "Uncommon Dragon's Blood";} 
        else if (i <= 74){itemlist += "Random Common Egg";} 
        else if (i <= 75){itemlist += "Random Uncommon Dragon Egg";}
        else if (i <= 76){itemlist += "5 Dragon Soul Coins";} 
        else if (i <= 77){itemlist += "Aether Bag";} 
        else if (i <= 78){itemlist += "Activity Chest";}
        else if (i <= 79){itemlist += "Familiar Chest";}
        else if (i <= 80){itemlist += "Design Chest";}
        else if (i <= 81){itemlist += "Nesting Chest";}
        else if (i <= 82){itemlist += "Emporium Coupon";}
        else if (i <= 83){itemlist += "Market Coupon";} 
        else if (i <= 84){itemlist += "Basilisk";} 
        else if (i <= 85){itemlist += "Dire Wolf";} 
        else if (i <= 86){itemlist += "Hemlock Syrup";}
        else if (i <= 87){itemlist += "Skill Token General";}
        else if (i <= 88){itemlist += "Skill Token Combat";}
        else if (i <= 89){itemlist += "Loot Table: Elixir";} 
        else if (i <= 90){itemlist += "Mark of the Aemon";}
        else if (i <= 91){itemlist += "Book of Empyrean";}
        else if (i <= 92){itemlist += "Congealed Ancient's blood";}
        else if (i <= 93){itemlist += "Aether Book";}
    }
    }
    //CHAMPION//
function rollBchampion(){
    if (zone.value == "basic"){
        if(document.getElementById("charmy").checked == true && rand(1,10) <= 4){
            var i = rand(75,108);}
        if(document.getElementById("famy").checked == true && rand(1,10) <= 5){
                var i = rand(75,108);}
        else {var i = rand(1,108);}
        
        if(i <= 5){itemlist += "500 Crystals";}
        else if (i <= 10){itemlist += "Niramish";} 
        else if (i <= 15){itemlist += "Dumpling Stir Fry";} 
        else if (i <= 20){itemlist += "Premium Cured Meat";} 
        else if (i <= 25){itemlist += "Premium Preserved Fish";} 
        else if (i <= 30){itemlist += "Ramen";} 
        else if (i <= 25){itemlist += "Satchel";} 
        else if (i <= 40){itemlist += "Healing Salve";} 
        else if (i <= 45){itemlist += "Bandages";} 
        else if (i <= 50){itemlist += "Goblet of Elements";} 
        else if (i <= 55){itemlist += "Aether Booster";} 
        else if (i <= 60){itemlist += "Strength Booster";} 
        else if (i <= 65){itemlist += "Bleed Booster";} 
        else if (i <= 70){itemlist += "Breath Booster";} 
        else if (i <= 72){itemlist += "Brawler Booster";}
        else if (i <= 74){itemlist += "Nightshade Booster";}
        else if (i <= 75){itemlist += "Tier 1 Starter Slot";} ////ARENA HONOR/FAMY
        else if (i <= 76){itemlist += "Tier 2 Starter Slot";} 
        else if (i <= 77){itemlist += "Tier 3 Starter Slot";} 
        else if (i <= 78){itemlist += "Mysterious Dragon's Blood";} 
        else if (i <= 80){itemlist += "Common Dragon's Blood";} 
        else if (i <= 81){itemlist += "Uncommon Dragon's Blood";} 
        else if (i <= 82){itemlist += "Rare Dragon's Blood";} 
        else if (i <= 83){itemlist += "Random Uncommon Egg";} 
        else if (i <= 84){itemlist += "Random Rare Egg";}
        else if (i <= 85){itemlist += "1 Aether Coin";}
        else if (i <= 86){itemlist += "5 Dragon Soul Coins";} 
        else if (i <= 87){itemlist += "Aether Bag";} 
        else if (i <= 88){itemlist += "Premium Chest";}
        else if (i <= 89){itemlist += "Activity Chest";}
        else if (i <= 90){itemlist += "Familiar Chest";}
        else if (i <= 91){itemlist += "Design Chest";}
        else if (i <= 92){itemlist += "Nesting Chest";}
        else if (i <= 93){itemlist += "Emporium Coupon";}
        else if (i <= 94){itemlist += "Basilisk";} 
        else if (i <= 95){itemlist += "Dire Wolf";} 
        else if (i <= 96){itemlist += "Phoenix";} 
        else if (i <= 97){itemlist += "Revival Feather";}
        else if (i <= 98){itemlist += "Hemlock Syrup";}
        else if (i <= 99){itemlist += "Skill Token General";}
        else if (i <= 100){itemlist += "Skill Token Combat";}
        else if (i <= 102){itemlist += "Loot Table: Elixir";} 
        else if (i <= 103){itemlist += "Mark of the Aemon";}
        else if (i <= 104){itemlist += "Book of Empyrean";}
        else if (i <= 105){itemlist += "Congealed Ancient's blood";}
        else if (i <= 106){itemlist += "Aether Book";}
        else if (i <= 107){itemlist += "Aether Armor";}
        else if (i <= 108){itemlist += "Crystalline Armor";}
    }
    else if (zone.value == "copper"){
        if(document.getElementById("charmy").checked == true && rand(1,10) <= 4){
            var i = rand(75,108);}
        if(document.getElementById("famy").checked == true && rand(1,10) <= 5){
                var i = rand(75,108);}
        else {var i = rand(1,108);}
        
        if(i <= 5){itemlist += "500 Crystals";}
        else if (i <= 10){itemlist += "Niramish";} 
        else if (i <= 15){itemlist += "Dumpling Stir Fry";} 
        else if (i <= 20){itemlist += "Premium Cured Meat";} 
        else if (i <= 25){itemlist += "Premium Preserved Fish";} 
        else if (i <= 30){itemlist += "Ramen";} 
        else if (i <= 25){itemlist += "Satchel";} 
        else if (i <= 40){itemlist += "Healing Salve";} 
        else if (i <= 45){itemlist += "Bandages";} 
        else if (i <= 50){itemlist += "Goblet of Elements";} 
        else if (i <= 55){itemlist += "Aether Booster";} 
        else if (i <= 60){itemlist += "Strength Booster";} 
        else if (i <= 65){itemlist += "Bleed Booster";} 
        else if (i <= 70){itemlist += "Breath Booster";} 
        else if (i <= 72){itemlist += "Brawler Booster";}
        else if (i <= 74){itemlist += "Nightshade Booster";}
        else if (i <= 75){itemlist += "Tier 1 Starter Slot";} ////ARENA HONOR/FAMY
        else if (i <= 76){itemlist += "Tier 2 Starter Slot";} 
        else if (i <= 77){itemlist += "Tier 3 Starter Slot";} 
        else if (i <= 78){itemlist += "Mysterious Dragon's Blood";} 
        else if (i <= 80){itemlist += "Common Dragon's Blood";} 
        else if (i <= 81){itemlist += "Uncommon Dragon's Blood";} 
        else if (i <= 82){itemlist += "Rare Dragon's Blood";} 
        else if (i <= 83){itemlist += "Random Uncommon Egg";} 
        else if (i <= 84){itemlist += "Random Rare Egg";}
        else if (i <= 85){itemlist += "1 Aether Coin";}
        else if (i <= 86){itemlist += "5 Dragon Soul Coins";} 
        else if (i <= 87){itemlist += "Aether Bag";} 
        else if (i <= 88){itemlist += "Premium Chest";}
        else if (i <= 89){itemlist += "Activity Chest";}
        else if (i <= 90){itemlist += "Familiar Chest";}
        else if (i <= 91){itemlist += "Design Chest";}
        else if (i <= 92){itemlist += "Nesting Chest";}
        else if (i <= 93){itemlist += "Emporium Coupon";}
        else if (i <= 94){itemlist += "Basilisk";} 
        else if (i <= 95){itemlist += "Dire Wolf";} 
        else if (i <= 96){itemlist += "Phoenix";} 
        else if (i <= 97){itemlist += "Revival Feather";}
        else if (i <= 98){itemlist += "Hemlock Syrup";}
        else if (i <= 99){itemlist += "Skill Token General";}
        else if (i <= 100){itemlist += "Skill Token Combat";}
        else if (i <= 102){itemlist += "Loot Table: Elixir";} 
        else if (i <= 103){itemlist += "Mark of the Aemon";}
        else if (i <= 104){itemlist += "Book of Empyrean";}
        else if (i <= 105){itemlist += "Congealed Ancient's blood";}
        else if (i <= 106){itemlist += "Aether Book";}
        else if (i <= 107){itemlist += "Aether Armor";}
        else if (i <= 108){itemlist += "Crystalline Armor";}
    }
    }

	
	for (var m = 0; m < lootSize; m++) {
		 itemlist += "<br>";
		if (activity.value == "Brankless"){rollBrankless();}
        else if (activity.value == "Bchallenger"){rollBchallenger();}
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