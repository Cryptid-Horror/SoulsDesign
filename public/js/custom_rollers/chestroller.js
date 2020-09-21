var type = document.getElementById('chest');

function rand(min, max) {
  var min = min || 0,
      max = max || Number.MAX_SAFE_INTEGER;

  return Math.floor(Math.random() * (max - min + 1)) + min;}



function items(){
	var lootSize;
	var itemlist="";
	
	if (type.value == "fishing"){lootSize = rand(1,3);}
	else if (type.value == "foraging"){lootSize = rand(1,3);}
	else if (type.value == "hunting"){lootSize = rand(1,3);}
	else if (type.value == "prem"){lootSize = rand(2,5);}
	else if (type.value == "myst"){lootSize = rand(2,5);}
	else if (type.value == "nest"){lootSize = rand(2,5);}
	else if (type.value == "design"){lootSize = rand(2,5);}
	else if (type.value == "arena"){lootSize = rand(2,5);}
	else {itemlist += "error???!? time to panic";}
	 
	
	function rollItems(){
	    
	 if (type.value == "fishing"){   
    	var i = rand(1,37);
    	if ( i <= 5){ itemlist += ":thumb737120461:";}
	    else if (i <= 10 ){itemlist += ":thumb737120468:";}
	    else if (i <= 15 ){itemlist += ":thumb740288139:";}
	    else if (i <= 20 ){itemlist += ":thumb740287494:";}
	    else if (i <= 22 ){itemlist += "1,000x :thumb726629426:";}
	    else if (i <= 24 ){itemlist += "Whale Bone";}
	    else if (i <= 26 ){itemlist += "Basket";}
	    else if (i <= 28 ){itemlist += ":thumb759849707:";}
	    else if (i <= 34 ){itemlist += ":thumb742773107:";}
	    else if (i <= 35 ){itemlist += ":thumb748710559:";}
	    else if (i <= 36 ){itemlist += "Soul Twine";}
	    else if (i <= 37 ){itemlist += ":thumb770775999:";}
	} 
	else if (type.value == "foraging"){
	    var i = rand(1,77);
	    if (i <= 5){itemlist += ":thumb735244046:";}
	    else if (i <= 10){itemlist += ":thumb772029592:";}
	    else if (i<=15){itemlist+=":thumb735744797:";}
	    else if (i<=17){itemlist+=":thumb735459915:";}
	    else if (i<=19){itemlist+=":thumb736073464:";}
	    else if (i<=25){itemlist+=":thumb740288268:";}
	    else if (i<=30){itemlist+=":thumb742773107:";}
	    else if (i<=35){itemlist+=":thumb740288139:";}
	    else if (i<=40){itemlist+=":thumb741645024:";}
	    else if (i<=42){itemlist+=":thumb735957948:";}
	    else if (i<=45){itemlist+=":thumb730226090:";}
	    else if (i<=47){itemlist+="1,000x :thumb726629426:";}
	    else if (i<=49){itemlist+=":thumb721662350:";}
	    else if (i<=55){itemlist+="Herbs";}
	    else if (i<=56){itemlist+=":thumb730043272:";}
	    else if (i<=57){itemlist+=":thumb730076789:";}
	    else if (i<=58){itemlist+="Ruby";}
	    else if (i<=59){itemlist+="Sapphire";}
	    else if (i<=65){itemlist+=":thumb759849707:";}
	    else if (i<=66){itemlist+="Basket";}
	    else if (i<=71){itemlist+=":thumb719065940:";}
	    else if (i<=72){itemlist+=":thumb748710559:";}
	    else if (i<=73){itemlist+="Soul Twine";}
	    else if (i<=74){itemlist+=":thumb770776012:";}
	    else if (i<=75){itemlist+=":thumb749173192:";}
	    else if (i<=77){itemlist+=":thumb757512912:";}
	}
	else if (type.value == "hunting"){
	    var i = rand(1,56);
	    if (i<=5){itemlist+=":thumb738530697:";}
	    else if (i<=10){itemlist+=":thumb738530711:";}
	    else if (i<=15){itemlist+=":thumb740288268:";}
	    else if (i<=17){itemlist+=":thumb740288113:";}
	    else if (i<=19){itemlist+=":thumb747886136:";}
	    else if (i<=24){itemlist+=":thumb741645024:";}
	    else if (i<=26){itemlist+="1,000x :thumb726629426:";}
	    else if (i<=27){itemlist+=":thumb719959474:";}
	    else if (i<=30){itemlist+=":thumb740288139:";}
	    else if (i<=33){itemlist+=":thumb759849707:";}
	    else if (i<=38){itemlist+="Deer Pelt";}
	    else if (i<=43){itemlist+=":thumb759570674:";}
	    else if (i<=46){itemlist+=":thumb721662350:";}
	    else if (i<=48){itemlist+=":thumb757512912:";}
	    else if (i<=54){itemlist+=":thumb742773107:";}
	    else if (i<=55){itemlist+=":thumb719959487:";}
	    else if (i<=56){itemlist+=":thumb749173192:";}
	}
	else if (type.value == "prem"){
	    var i = rand(1,248);
	    if(i<=5){itemlist+=":thumb800544749:";} // Cooler
	    else if (i<=10){itemlist+=":thumb719959474:";} // Barrel
	    else if (i<=15){itemlist+=":thumb800427385:";} // Basket
	    else if (i<=18){itemlist+=":thumb793887487:";} // Soul Twine
	    else if (i<=23){itemlist+=":thumb749173192:";} // Blueprints
	    else if (i<=33){itemlist+=":thumb740294782:";} // Essence of Ice
	    else if (i<=43){itemlist+=":thumb740294733:";} // Essence of Fire 
  	    else if (i<=53){itemlist+=":thumb740294768:";} // Essence of Shadow 
	    else if (i<=63){itemlist+=":thumb740294756:";} // Essence of Rad
	    else if (i<=73){itemlist+=":thumb740294739:";} // Essence of Light
	    else if (i<=78){itemlist+="1000 :thumb726629426:";} // x1000 Crystals 
	    else if (i<=83){itemlist+=":thumb718012647:";} // Diminished coin 
	    else if (i<=86){itemlist+=":thumb718012663:";} // Weathered Coin 
	    else if (i<=88){itemlist+=":thumb718012642:";} // Brilliant Coin 
	    else if (i==89){itemlist+=":thumb718012655:";} // Pristine Coin 
	    else if (i<=91){itemlist+="Market Background Voucher";} // Market Bg 
	    else if (i==92){itemlist+="Emporium Background Voucher";} // Emporium Bg
	    else if (i<=95){itemlist+=":thumb724406005:";} // Ice Tonic 
	    else if (i<=98){itemlist+=":thumb725107625:";} // Fire tonic
	    else if (i<=100){itemlist+=":thumb724785200:";} // Lightning Tonic
	    else if (i<=102){itemlist+=":thumb725390953:";} // Shadow Tonic
	    else if (i==103){itemlist+=":thumb725559209:";} // Radiation Tonic
	    else if (i<=105){itemlist+=":thumb719445773:";} // Common Egg
	    else if (i==106){itemlist+=":thumb719445813:";} // Uncommon Egg
	    else if (i<=111){itemlist+=":thumb784959012:";} // Common Rad
	    else if (i<=114){itemlist+=":thumb784959026:";} // Uncommon Rad
	    else if (i<=124){itemlist+=":thumb770775999:";} // Fisher Skill Charm
	    else if (i<=134){itemlist+=":thumb770776012:";} // Forager skill 
	    else if (i<=144){itemlist+=":thumb719959487:";} // Hunter Skill 
	    else if (i==145){itemlist+="Cracked Crystalline Armor";} // Cracked Crys
	    else if (i<=147){itemlist+="Cracked Leather Armor";} // Cracked Leather 
	    else if (i<=149){itemlist+="Cracked Iron Armor";} // Cracked Iron 
	    else if (i<=151){itemlist+=":thumb752525758:";} //Crim HumGrif
	    else if (i<=153){itemlist+=":thumb752525748:";} //Jade Humgriff
	    else if (i==154){itemlist+=":thumb750965631:";} //Rad Serpent
	    else if (i==155){itemlist+=":thumb750965608:";} //Shim Serpent
	    else if (i==156){itemlist+=":thumb737893728:";} //Sea Otter
	    else if (i==157){itemlist+=":thumb737893705:";} //Albino Otter
	    else if (i<=159){itemlist+=":thumb737893718:";} //River Otter
	    else if (i<=161){itemlist+=":thumb819546598:";} //Eternal Flame
	    else if (i<=165){itemlist+=":thumb786863753:";} //Dragon's Instinct
	    else if (i<=170){itemlist+=":thumb786863764:";} //Skill Charm
	    else if (i<=175){itemlist+=":thumb772029592:";} //Geode
	    else if (i<=180){itemlist+=":thumb750121063:";} //Thread Spool
	    else if (i<=185){itemlist+=":thumb753647382:";} //Inkwell
	    else if (i<=188){itemlist+=":thumb743377537:";} //Beef Stew
	    else if (i<=190){itemlist+=":thumb743377529:";} //Dragon roll Sushi
	    else if (i<=195){itemlist+=":thumb743369403:";} //Magic Reverse
	    else if (i<=199){itemlist+=":thumb740288322:";} //Pearl Necklace
	    else if (i==200){itemlist+=":thumb724405996:";} // Aether Bag
	    else if (i<=205){itemlist+=":thumb776585035:";} //Bottle of Umber
	    else if (i<=210){itemlist+=":thumb793887476:";} //Bottleof Haze
	    else if (i<=213){itemlist+=":thumb776585030:";} //bottle of Ivory
	    else if (i==214){itemlist+=":thumb775469639:";} //Bottle of Vanta
	    else if (i<=216){itemlist+=":thumb736618795:";} //Fertility Potion
	    else if (i<=218){itemlist+=":thumb741646032:";} //Dragon's Heart 
	    else if (i<=220){itemlist+=":thumb738428726:";} //Dragon's Talon
	    else if (i<=222){itemlist+="Aether Token";} //Aether Token 
	    else if (i<=226){itemlist+=":thumb740291304:";} //Goblet of Fire
	    else if (i<=230){itemlist+=":thumb740291286:";} //Goblet of Ice
	    else if (i<=233){itemlist+=":thumb740291313:"}//Goblet of Lightning 
	    else if (i<=236){itemlist+=":thumb740293173:"} //Goblet of Shadow 
	    else if (i==237){itemlist+=":thumb740291296:"} //Goblet of Rad
	    else if (i==238){itemlist+=":thumb759851625:"} //Dragons Blood
	    else if (i==239){itemlist+=":thumb786863759:"} //Dragons Tears
	    else if (i<=244){itemlist+="x500 :thumb726629426:"} //500 Crystals
	    else if (i==245){itemlist+="Cracked Everlasting Armor"} //Cracked Everlasting Armor
	    else if (i==246){itemlist+=":thumb737230512:";} //Gender Potion
	    else if (i==247){itemlist+="Standard Wyvern Custom";}//Choice of wyvern
	    else if (i==248){itemlist+="Standard Dragon Custom";}//Choice of Dragon
	    }
	   
	else if (type.value == "myst"){
	    var i = rand(1,160);
	    if(i<=10){itemlist+=":thumb745255131:";} //Aether Deer Pelt
	    else if (i<=20){itemlist+=":thumb747886161:";}//Aether bison Pelt
	    else if (i<=25){itemlist+=":thumb806166159:";}//Aether Bird
	    else if (i==26){itemlist+=":thumb819351361:";}//Glowing Egg
	    else if (i<=30){itemlist+=":thumb819351374:";}//Strange Rock
	    else if (i<=33){itemlist+=":thumb819351370:";}//Shimmering Pearl
	    else if (i<=36){itemlist+=":thumb743369403:";}//Magic Reverse
	    else if (i<=38){itemlist+=":thumb718012642:";} // Brilliant Coin 
	    else if (i==39){itemlist+=":thumb718012655:";} // Pristine Coin
	    else if (i==40){itemlist+=":thumb759851625:"} //Dragons Blood
	    else if (i<=45){itemlist+="Market Background Voucher";} // Market Bg 
	    else if (i<=48){itemlist+="Emporium Background Voucher";} // Emporium Bg
	    else if (i<=53){itemlist+=":thumb724406005:";} // Ice Tonic 
	    else if (i<=58){itemlist+=":thumb725107625:";} // Fire tonic
	    else if (i<=60){itemlist+=":thumb724785200:";} // Lightning Tonic
	    else if (i<=61){itemlist+=":thumb725390953:";} // Shadow Tonic
	    else if (i==62){itemlist+=":thumb725559209:";} // Radiation Tonic
	    else if (i<=65){itemlist+="Cracked Aether Armor"} //Cracked Aether Armor
	    else if (i<=70){itemlist+="1000 :thumb726629426:";} // x1000 Crystals 
	    else if (i<=80){itemlist+="x500 :thumb726629426:"} //500 Crystals
	    else if (i==81){itemlist+=":thumb784959035:";}//Very Rare Radiance Bond
	    else if (i<=85){itemlist+=":thumb784959017:";}//Rare Radiance Bond
	    else if (i==86){itemlist+=":thumb719445829:";}//Mysterious Egg
	    else if (i<=89){itemlist+=":thumb719445793:";}//Rare Egg
	    else if (i<=94){itemlist+=":thumb743472569:";}//Aether Book
	    else if (i<=104){itemlist+=":thumb741645034:";}//Strange Geode 
	    else if (i<=110){itemlist+=":thumb775469622:";}//Aether Scales
	    else if (i<=120){itemlist+=":thumb775469628:";}//Aether Bones
	    else if (i<=130){itemlist+=":thumb773160338:";}//Aether Pages
	    else if (i<=135){itemlist+=":thumb759875096:";}//Congealed Ancients Blood
	    else if (i==136){itemlist+=":thumb750965574:";}//Aether Draco Python
        else if (i<=138){itemlist+=":thumb752525758:";} //Crim HumGrif
	    else if (i<=140){itemlist+=":thumb752525748:";} //Jade Humgriff
	    else if (i<=142){itemlist+=":thumb750965631:";} //Rad Serpent
	    else if (i<=144){itemlist+=":thumb750965608:";} //Shim Serpent
	    else if (i<=146){itemlist+=":thumb737893728:";} //Sea Otter
	    else if (i<=148){itemlist+=":thumb737893705:";} //Albino Otter
	    else if (i<=151){itemlist+=":thumb737893718:";} //River Otter
	    else if (i<=155){itemlist+="Cracked Crystalline Armor";} // Cracked Crys
	    else if (i==156){itemlist+="Cracked Everlasting Armor"} //Cracked Everlasting Armor
	    else if (i<=160){itemlist+=":thumb815610530:";}//Arcane Honey
	    
	}

	else if (type.value == "nest"){
	    var i = rand(1,119);
	    if(i<=10){itemlist+=":thumb741646032:";} //Dragon's Heart
	    else if (i<=20){itemlist+=":thumb741646043:";}//Dragons Eye
	    else if (i<=25){itemlist+=":thumb738428726:";} //Dragon's Talon
	    else if (i<=35){itemlist+=":thumb736618795:";}//Fertility Potion
	    else if (i<=40){itemlist+=":thumb737230512:";} //Gender Potion
	    else if (i<=45){itemlist+=":thumb721661409:";}//Temper Potion
	    else if (i<=50){itemlist+=":thumb743378422:";}//Breath Potion
	    else if (i<=55){itemlist+=":thumb786863764:";} //Skill Charm
	    else if (i<=60){itemlist+=":thumb786863753:";} //Dragon's Instinct
	    else if (i<=63){itemlist+="Aether Token";}//Aether Token
	    else if (i<=68){itemlist+=":thumb776585035:";} //Bottle of Umber
	    else if (i<=73){itemlist+=":thumb793887476:";} //Bottleof Haze
	    else if (i<=76){itemlist+=":thumb776585030:";} //bottle of Ivory
	    else if (i<=78){itemlist+=":thumb775469639:";} //Bottle of Vanta
	    else if (i<=84){itemlist+=":thumb784959012:";} // Common Rad
	    else if (i<=87){itemlist+=":thumb784959026:";} // Uncommon Rad
	    else if (i==88){itemlist+=":thumb784959035:";}//Very Rare Radiance Bond
	    else if (i<=90){itemlist+=":thumb784959017:";}//Rare Radiance Bond
	    else if (i==91){itemlist+=":thumb750965631:";} //Rad Serpent
	    else if (i==92){itemlist+=":thumb750965608:";} //Shim Serpent
	    else if (i==93){itemlist+=":thumb750965574:";}//Aether Draco Python
	    else if (i<=96){itemlist+=":thumb719445813:";} // Uncommon Egg
	    else if (i<=100){itemlist+=":thumb784959012:";} // Common Rad
	    else if (i==101){itemlist+=":thumb719445829:";}//Mysterious Egg
	    else if (i<=103){itemlist+=":thumb719445793:";}//Rare Egg
	    else if (i<=108){itemlist+=":thumb724406005:";} // Ice Tonic 
	    else if (i<=113){itemlist+=":thumb725107625:";} // Fire tonic
	    else if (i<=115){itemlist+=":thumb724785200:";} // Lightning Tonic
	    else if (i<=118){itemlist+=":thumb725390953:";} // Shadow Tonic
	    else if (i==119){itemlist+=":thumb725559209:";} // Radiation Tonic
	    	    
	}
	
		else if (type.value == "design"){
	    var i = rand(1,71);
	    if(i<=10){itemlist+=":thumb757512912:";} //Nail Polish
	    else if (i<=20){itemlist+=":thumb748710559:";}//Small Item Kit
	    else if (i<=25){itemlist+=":thumb747886115:";}//Large Item Kit 
	    else if (i<=35){itemlist+=":thumb721662350:";}//Dye
	    else if (i<=40){itemlist+=":thumb721663178:";}//Dye Kit
	    else if (i<=45){itemlist+=":thumb723896241:";}//Shampoo
	    else if (i<=50){itemlist+=":thumb738532613:";}//Do Over Kit
	    else if (i<=60){itemlist+=":thumb738532628:";}//Touch Up Kit
	    else if (i==61){itemlist+=":thumb759851625:";}//Dragon's Blood
	    else if (i<=66){itemlist+=":thumb786863759:";}//Dragon's Tears
	    else if (i<=69){itemlist+="Market Background Voucher";}//Market Background Voucher
	    else if (i<=71){itemlist+="Emporium Background Voucher";}//Emporium Background Voucher

	}
	
			else if (type.value == "arena"){
	    var i = rand(1,151);
	    if(i<=10){itemlist+="Skill Token";} //Skill Token
	    else if (i<=15){itemlist+="";}//Revival Feather
	    else if (i<=20){itemlist+=":thumb724406005:";} // Ice Tonic 
	    else if (i<=25){itemlist+=":thumb725107625:";} // Fire tonic
	    else if (i<=28){itemlist+=":thumb724785200:";} // Lightning Tonic
	    else if (i<=31){itemlist+=":thumb725390953:";} // Shadow Tonic
	    else if (i<=33){itemlist+=":thumb725559209:";} // Radiation Tonic
	    else if (i<=43){itemlist+=":thumb740291304:";} //Goblet of Fire
	    else if (i<=53){itemlist+=":thumb740291286:";} //Goblet of Ice
	    else if (i<=59){itemlist+=":thumb740291313:"}//Goblet of Lightning 
	    else if (i<=64){itemlist+=":thumb740293173:"} //Goblet of Shadow 
	    else if (i<=67){itemlist+=":thumb740291296:"} //Goblet of Rad
	    else if (i<=72){itemlist+="Leather Dragon Helmet";}//Leather Helm
	    else if (i<=77){itemlist+="Leather Dragon Chest Plate";}//Leather Chest
	    else if (i<=82){itemlist+="Leather Dragon Tail Guard";}//Leather Tail
	    else if (i<=85){itemlist+="Iron Dragon Helmet";}//Iron Helm
	    else if (i<=89){itemlist+="Iron Dragon Chest Plate";}//Iron Chest
	    else if (i<=93){itemlist+="Iron Dragon Tail Guard";}//Iron Tail
	    else if (i<=95){itemlist+="Crystalline Dragon Helmet";}//Crystalline Helm
	    else if (i<=97){itemlist+="Crystalline Dragon Chest Plate";}//Crystalline Chest
	    else if (i<=99){itemlist+="Crystalline Dragon Tail Guard";}//Crystalline Tail
	    else if (i==100){itemlist+="Everlasting Dragon Helm";}//Everlasting Helm
	    else if (i==101){itemlist+="Everlasting Dragon Chest Plate";}//Everlasting Chest
	    else if (i==102){itemlist+="Everlasting Dragon Tail Guard";}//Everlasting Tail
	    else if (i==103){itemlist+="Aether Dragon Helmet";}//Aether Helm
	    else if (i==104){itemlist+="Aether Dragon Chest Plate";}//Aether chest
	    else if (i==105){itemlist+="Aether Dragon Tail Guard";}//Aether Tail
	    else if (i<=115){itemlist+=":thumb793887495:";}//Decently cured Meat
	    else if (i<=120){itemlist+=":thumb793887504:";}//Premium Cured Meat
	    else if (i<=130){itemlist+=":thumb800426957:";}//Decently Preserved Fish
	    else if (i<=135){itemlist+=":thumb800426949:";}//Premium Preserved Fish
	    else if (i<=140){itemlist+=":thumb739746265:";}//Bandages
	    else if (i<=145){itemlist+=":thumb740295622:";}//Healing Salve
	    else if (i<=150){itemlist+=":thumb740295613:";}//Antidote
	    else if (i==151){itemlist+=":thumb743472569:";}//Aether Book

	}
	else {itemlist += "error??!!";}}
	
	for (var m = 0; m < lootSize; m++) {
	    itemlist += "<br>";
		rollItems();
	}

	document.getElementById("result").innerHTML += "The chest opens to reveal: <br>" + itemlist + "<br><br><i>Items have been added to your hoard.</i>";

}




function roll() {
	document.getElementById("result").innerHTML = "";
	items(); 
   
}

function clearForms() {
	document.getElementById("result").innerHTML = "";
}

// JavaScript Document