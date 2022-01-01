
/*
    Roller inputs:
    - Quest
    - Dragon Rank
    - Temper
    - Magic Restoration
    - Items, Familiars, Taming (A bunch of checkboxes)
    - Includes bonded dragon/companion or dragon in the same flight
    - Includes another dragon not of the above
*/

const base_pass = {
    "fledgling": 35,
    "primal": 45,
    "ancient": 55,
    "primordial": 65
}

// Pass rate boosts based on magic level
const magic_level_pass = {
    "none": 0,
    "low": 5,
    "high": 10
}

// Pass rate boosts based on items, familiars, or taming
// These refer to the inputs (must be of type 'radio') that
// also have the 'extras' class on them
const extra_pass = {
    "domestic_taming": 5,
    "scoria_komodo": 5,
    "pearl_necklace": 100
}

const base_injury = {
    "fledgling": 40,
    "primal": 30,
    "ancient": 20,
    "primordial": 10
}

const temper_injury = {
    "na": 0,
    "timid": -5,
    "aggressive": 5
}

class Quest {
    constructor(name, quest_types, loot_table) {
        this.name = name
        // Array of types
        this.quest_types = quest_types
        // Dictionary - loot : chance, rolled with getRollResult()
        this.loot_table = loot_table
    }

    containsQuestType(type) {
        return quest_types.includes(type)
    }
}

// Dict of quests accessed with input taken from the html
const quests = {
    "b1": new Quest("Meet Meat", ["non-magic"], 
        {
            "MEat: Elk <br>": 5,
            "Meat: Antelope <br>": 2, // Pearl Neck
            "Meat: Caribou <br>": 3, // Cooking Pot
            "Meat: Bison <br>": 5, // Tea
            "Meat: Bear<br>": 5, // Beef Stew
            "Meat: Deer <br>": 3, // Premium Meat
            "Meat: Wolf<br>": 2  // Inkwell
            Charred Meat 
            Spoiled Meat 
            Frozen Meat 
            Aether Meat 
            Decent Meat 
            Premium Meat 
            Large Reptile Egg

        }
    ),
    "b2": new Quest("The Garderner's Knowledghe", ["non-magic"], 
        {
            "Conocybe Filaris<br>": 10, // 100 Crystals
            "Bananas <br>": 1, // Diminished Coin
            "Sanguine Fruit <br>": 2, // Unfertilised Dragon Egg
            "Limes <br>": 4, // Cloth
            "Grapes <br>": 2  // Leather
            Fly Agaric
            Dragon Fruit 
            Coconut 
            Cactus
            Honey 
            Glowing Mushrooms 
            Arcane honey 
            Long Beans 
            Wheat 
            Black Berries 
            blueberries 
            Sugar Cane 
            Small Beans 
            Coffee Beans 
            Arcane Fruit
            Salt 
            Seawood
            Mint 
            Herbs


        }
    ),
    "b3": new Quest("Fishing Trophies", ["non-magic"], 
        {
            "Large Fish Egg<br>": 1, // Revival Feather
            "Snowflake Moray Eel<br>": 2, // Dragon Roll Sushi
            "Aether Fish Meat<br>": 5, // Beef Stew
            "Charred fish Meat<br>": 6, // Tea
            "Jellyfish <br>": 5  // Water
            Arapima
            Lobster
            Gar
            Frigid Fish Meat 
            Catfish
            Giant Moray Eel 
            Spoiled fish meat 
            Trout 
            Undulated Moray Eel 
            Decent Fish
            Premium Fish 
            Arowana
            Crab
            Glowing Crab

        }
    ),
    "b4": new Quest("New Discoveries", ["non-magic"], 
        {
            Sapphire 
            Emerald 
            Garnet 
            Raw Crystal 
            Quartz
            Iron 
            Amber 
            Gold 
            Metal 
        }
    ),
    "b5": new Quest("Tanning the Hide", ["non-magic"], 
        {
            Hide: Diamond Python 
            Hide: river snake 
            Hide: Coral Snake 
            Pelt: Bison 
            Pelt: Wolf 
            Pelt: Fox
            Pelt: Raccoon 
            Pelt: Aether Deer 
            Pelt: Brown Deer 
            Pelt: Red Deer 
            Pelt: Spotted Deer 
            Pelt: Aether bison 
            Pelt: Albino Moose 
            Pelt: brown Bear 
            Pelt: black Bear 
            Pelt: Frigid Bear 
            Pelt: Grey Rabbit 
            Pelt: Cream Rabbit 
            Pelt: Brown Rabbit 
            Pelt: Piebald Moose 
            Pelt: Brown Moose 
        }
    ),
    "b6": new Quest("A Dragon's Hoard", ["non-magic"], 
        {
           Butterfly 
           Plant Fiber 
           Exotic Scales 
           Chitin 
           Glass 
           Seaweed 
           Paper 
           Mortar and Pestal 
           Turtle Shell 
           Trilobite 
           arcane Frog 
           Squid Ink 
           crystals 100 
        }
    ),
    "i1": new Quest("Fboners mores", ["arcane", "elementalist", "enchantment"], 
        {
           
        }
    ),
    "i2": new Quest("Missing Friends", ["arcane", "healing"], 
        {
         Container: Duffel bag 
         Pearl Necklace 
         Charm: Fishing 
         Charm: Foraging 
         Charm: Hunting 
         Charm: Caving 
         Container: Satchel 
         Container: Cooler 
         Container: Basket 
         Blueprint 
         Container: barrel 
    
        }
    ),
    "i3": new Quest("Aiding the Injured", ["illusionist", "arcane"], 
        {
           Tea 
           Hemlock Syrup 
           Bandages 
           Healing Salve 
           Antidote 
           Revival Feather 
        }
    ),
    "i4": new Quest("Wyvern Wrath", ["non-magic"], 
        {
            Booster: Aether 
            Goblet of wind 
            Goblet of Poison 
            Goblet of Luster 
            Armor: Leather 
            Armor: Iron 
            Armor: Bone 
            Booster: Strength 
            Booster: Bleed 
            Booster: Breath 
            Booster: DPS 
            Aether book 
            Goblet of Ice 
            goblet of Shadow 
            Goblet of Radiation 
            Goblet of Lightning 
            Goblet of Fire 
            Delicate Aether Shard
        }
    ),
    "i5": new Quest("Clockmaker's Friend", ["healing"], 
        {
           Malachite
           Selenite 
           Chrysocolla
           Serpentine 
           Blue Goldstone 
           Aquamarine 
           Ruby 
           Sunstone 
           Moonstone 
           Aether Quartz
           Amethyst
           Lapis Lazuli 
           Limestone 
           Jade 
        }
    ),
    "i6": new Quest("The Perfect Nest", ["enchantment"], 
        {
            Breath Potion 
            Genotype blocker 
            Radiance Bond: Petty 
            Aether tonic 
            Soul Twine 
            Gender Potion 
            Temper Potion 
            Fertility Potion 
            Dragon's talon 
            Dragon's Eye 
            Dragon's Heart 
            Skill Charm 
            Bottle of Vanta 
            Bottle of Ivory 
            Bottle of Umber 
            Bottle of Haze 
            Radiance bond: Mythic 
            Radiance bond: Uncommon 
            Radiance Bond: common 
            Radiance Bond: rare 
            Dragon's Instinct
        }
    ),
 "m1": new Quest("Lurking in the Waters", ["arcane", "healing"], 
        {
            Fire Elixir 
            Wind Elixir 
            Poison Elixir 
            Luster Elixir 
            Crystalline Armor 
            Booster Nightshade 
            Booster brawler 
            Ice Elixir 
            Shadow Elixir 
            Radiation Elixir 
            Lightning Elixir 
            Revival Feather 
            Aether Book 
            Adept aether Shard
        }
    ),
    "m2": new Quest("Surveying the Aether", ["arcane", "illusionist"], 
        {
            Aether Bird Carcass 
            Aether book 
            Aether Quartz
            Aether Bones 
            Aether Deer Pelt 
            Aether bison Pelt 
            Aether Feathers 
            Aether Imbued Pages 
            Aether Imbued Scales 
            Delicate Aether Shard 
            Adept Aether shard
            Aether Meat 
            Aether fish meat 
            Aether tonic 
        }
    ),
    "m3": new Quest("Feast of the Ages", ["elementalist", "enchantment"], 
        {
            Fried rice 
            Meat Cake 
            Hot Pot 
            Mushroom Soup 
            Rack of Ribs 
            Niramish
            Dumpling Stir Fry 
            Ramen 
            Fruit Salad 
            Premium Cured Meat 
            Crab Cake 
            Meatballs 
            Veggie Skewer 
            Dragon rolll sushi 
            Meat stew 
            Decently Preserved Fish 
            PRemium Preserved Fish 
            Decently cured Meat
        }
    ),
    "m4": new Quest("Zookeeper", ["healing" ,"elementalist"], 
        {
           Diamond Nymph
           Golden chest of Mimcry 
           Draco Otter: Albino 
           Draco Otter: River 
           Draco Otter: Sea 
           Humminggriffin Jade
           Hummingriffin crimson
           Diamond Mantis 
           Diamond Treehopper 
           Diamond Trilobite 
           Diamond Butterfly
           Diamond Beetle 
           Royal Glimmer Deer Gloom 
           Reticulated Crocodile aether 
           Ret croc shimering 
           ret crock gloom 
           ret crock frigid 
           ret crock scorching 
           ret crock radiant 
           Secoria aether 
           scoria komodo scorching 
           scoria shimmering 
           scoria gloom 
           scoria frigid 
           scoria radiant 
           royal aether 
           roytal shimmering 
           royal frigid 
           royal scorching 
           royal radiant 
           ret crock melanistic 
           bear aether 
           highborn ursus shimmering 
           gloom 
           frigid 
           scorched 
           radiant 
           gleaming newt aether 
           shimmering 
           gloom 
           frigid 
           scorching 
           radiant 

        }
    ),
    "m5": new Quest("Mirror Mirror", ["enchantment"], 
        {
           paint 
           paint kit 
           Shears 
           delicate aether shard 
           adept aether shard 
           shampoo 
           do over kit 
           touch up kit 
           large item kit 
           small item kit 
           nail polish 
           dragon tears 
        }
    ),
    "m5": new Quest("Fury of Dragons", ["enchantment"], 
        {
           Common egg (player chosen)
           uncommon egg 
           Rare egg 
           arcane heart 
           aether book 
           congealed ancient's blood 
           shard of ancients rib cage 
           eternal element 
           crystalline armor 
           aether armor 
           Booster Warlord 
        }
    )
}

// List of strings
const side_quests = [
    "The Butcher's Order",
    
    "Gardener's Delight",
    
    "Mushroom Delicacy ",
    
    "Fisherman's aid",
    
    "Courier's Request",
    
    "Blacksmith's Inquiry",
    
    "Healing Shrine Delivery",
    
    "Salon Quality",
    
    "Nesting Aid",
    
    "Take This...",
    
    "Training Montage",

    "Granny's Recipe",

    ];

// Structure: <full_sentence>: <chance>
const injuries = {
    "Your dragon got a scratch while questing!": 85,
    "Your dragon feels a little bit sick... \
    Their health will be reduced by 10 points for \
    every quest they embark on until they get an antidote!": 10,
    "Your dragon feels terribly ill... \
    Their health will be reduced by 20 points for \
    every quest they embark on until they get an antidote!": 3,
    "Your dragon has been hit by heat stroke! They cannot go questing until \
    given milk or water!": 1,
    "Your dragon was attacked by a wild dragon while questing!": 1
}

var dragonName;
var quest;
var rank;
var temper; // -5% for timid, +5% for aggressive (to injury chance)
var magic_level; // +5% for low, +10% for high (but what about basic?) (to pass chance)
var magic_type;
var has_bonded; // or same flight; overwrites has_other_dragon; +10% (to pass chance)
var has_other_dragon; // +5% (to pass chance)
var is_hoarder; // Chance to return with one more item

var extras; // Array of strings, if input was true, add id to this array, later used to get value from index

function roll() {
    readInputs();
    rollQuest();
}

// Updates inputs for next roll
function readInputs() {
    dragonName = document.getElementById("dName").value;
    quest = document.getElementById("quest").value;
    rank = document.getElementById("rank").value;
    temper = document.getElementById("temper").value;
    magic_level = document.getElementById("magic_level").value;
    magic_type = document.getElementById("magic_type").value;
    has_bonded = document.querySelector("[name=bonded]:checked") ? document.querySelector("[name=bonded]:checked").value == "Y" : false;
    has_other_dragon = document.querySelector("[name=other_dragon]:checked") ? document.querySelector("[name=other_dragon]:checked").value == "Y" : false;
    is_hoarder = document.querySelector("[name=hoarder]:checked") ? document.querySelector("[name=hoarder]:checked").value == "Y" : false;
    
    // Get extras
    extras = []
    // Extras are input elements (assumed to all be of type 'radio') with the 'extras' class
    extras_inputs = document.querySelectorAll("input.extras:checked");
    for(let i = 0; i < extras_inputs.length; i++) {
        if (extras_inputs[i].value == "Y") { extras.push(extras_inputs[i].name); }
    }
}

function rollQuest() {
    // 1. Add together total pass chance
    // 2. Check for quest pass/fail
    //    - If fail, rollSide()
    //    - If pass, rollLoot()a
    // 3. rollInjury()
    var quest_data = quests[quest];
    var pass_chance = base_pass[rank];
    pass_chance += magic_level_pass[magic_level];
    if(quest_data.quest_types.includes(magic_type)) { pass_chance += 5; }
    if(has_bonded) { pass_chance += 10; }               // The bonded bonus overwrites the has_other_dragon bonus
    else if(has_other_dragon) { pass_chance += 5; }
    for(let i = 0; i < extras.length; i++) {
        pass_chance += extra_pass[extras[i]];
    }

    var result = "";
    var pass_roll = rand(1, 100);
    // If roll is less than pass chance, it is a success
    if(pass_roll < pass_chance) { result += rollLoot(); }
    else { result += rollSide(); }

    result += "<br><br>";

    result += rollInjury();
    if(pass_roll < pass_chance) { result += "<br>Items have been deposited to hoard."; }

    document.getElementById("result").innerHTML = result;

    function rollLoot(){
        // Roll amount of loot
        var max_loot = 3;
        if(is_hoarder) { max_loot += 1; }
        var num_loot = rand(1, max_loot);
    
        var loot_result = dragonName + " has succeeded in their quest! They found:<br><br>"
    
        for(let i = 0; i < num_loot; i++){
            loot_result += getRollResult(quest_data.loot_table);
        }

        return loot_result;
    }
    
    function rollSide() {
        var side_result = "Your dragon failed the quest, however you have found an <i>optional side quest</i>. \
        Only " + dragonName + " may complete this quest chain.<br><br>"
        var rand_index = rand(0, side_quests.length-1);
        side_result += side_quests[rand_index];
        side_result += "To submit your side quest, please submit a side quest prompt, with the title of the side quest in the url box. Add your dragon to the character section. <br><br>\
        <b>Link to Entry:</b> [Link the image with the entry!]<br>\
        <b>Side Quest Title:</b> [what is the title?]<br>\
        <b>Side Quest claim ID:</b> (The id of the original claim that you got the side quest from)<br><br>\
        Side quests cannot be failed, you are guaranteed one of the two rewards."

        return side_result;
    }
}

function rollInjury() {
    // Get injury chance based on rank and temper (possibly from extras as well)
    var injury_chance = base_injury[rank];
    injury_chance += temper_injury[temper];

    // Roll injury
    var injury_result;
    var injury_roll = rand(1, 100);
    // If roll is less than chance, dragon is injured
    if(injury_roll < injury_chance) {
        injury_result = getRollResult(injuries);
        if(injury_result == "Your dragon got a scratch while questing!") { 
            injury_result += " -" + rand(10, 50) + "HP";
        }
        if(injury_result == "Your dragon was attacked by a wild dragon while questing!") { 
            injury_result += " -" + rand(50, 150) + "HP";
        }
    }
    else {
        injury_result = "Your dragon was not injured."
    }

    return injury_result;
}

function rand(min, max) {
    var min = min || 0,
        max = max || Number.MAX_SAFE_INTEGER;

    return Math.floor(Math.random() * (max - min + 1)) + min;}

// Roll a result from a provided object of values
function getRollResult(roll_table) {
	table_keys = Object.keys(roll_table);
	total_chance = 0;
	for(let i = 0; i < table_keys.length; i++) { total_chance += roll_table[table_keys[i]]; }
    var rand_num = rand(1, total_chance);
    // Starts from the first entry
    // If rand_num is less than or equal to the chance, return the corresponding loot
    // Else, deduct the chance from rand_num
    // Supposed to be similar to: if (rand_num > a && rand_num < b) { return loot; }
	for(let i = 0; i < table_keys.length; i++) {
		if(rand_num <= roll_table[table_keys[i]]) { return table_keys[i]; }
		else { rand_num -= roll_table[table_keys[i]]; }
	}
	function clearForms() {
	document.getElementById("playerinfo").reset();
	document.getElementById("modifiers").reset();
	document.getElementById("result").innerHTML = "";
	}
	return "error!!?"
}