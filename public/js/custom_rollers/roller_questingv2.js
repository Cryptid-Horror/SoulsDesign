
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
    "basic": 10,
    "low": 20,
    "high": 30
}

// Pass rate boosts based on items, familiars, or taming
// These refer to the inputs (must be of type 'radio') that
// also have the 'extras' class on them
const extra_pass = {
    "domestic_taming": 5,
    "bunny": 5,
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
    "aggressive": 5,
}

// Injury chance based on items, familiars, or taming
// These refer to the inputs (must be of type 'radio') that
// also have the 'extras' class on them
const extra_injury = {
    "porcupine": -20
}

// Proc chance to negate status injuries based on items, familiars, or taming
// These refer to the inputs (must be of type 'radio') that
// also have the 'extras' class on them
const extra_status_injury = {
    "emergency_supplies": -40,
    "fairy": -60
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
            "Meat: Elk <br>": 2,
            "Meat: Antelope <br>": 2, 
            "Meat: Caribou <br>": 2, 
            "Meat: Bison <br>": 2, 
            "Meat: Bear<br>": 2, 
            "Meat: Deer <br>": 2, 
            "Meat: Wolf<br>": 2,  
            "Charred Meat<br>": 5, 
            "Spoiled Meat<br>":5,
            "Frozen Meat<br>": 5,
            "Aether Meat<br>": 5, 
            "Decent Meat<br>": 3,
            "Premium Meat<br>": 3,
            "Large Reptile Egg<br>": 3,

        }
    ),
    "b2": new Quest("The Garderner's Knowledge", ["non-magic"], 
        {
            "Conocybe Filaris<br>": 3, 
            "Bananas <br>": 5, 
            "Sanguine Fruit <br>": 2, 
            "Limes <br>": 5, 
            "Grapes <br>": 5, 
            "Fly Agaric<br>": 3,
            "Dragon Fruit<br>": 2,
            "Coconut<br>": 5,
            "Cactus<br>": 5,
            "Honey<br>": 3,
            "Glowing Mushrooms<br>": 3,  
            "Arcane honey<br>": 1,
            "Long Beans<br>": 3,
            "Wheat<br>": 3,
            "Black Berries<br>": 5, 
            "blueberries<br>": 5,
            "Sugar Cane<br>": 1,
            "Small Beans<br>": 2,
            "Coffee Beans<br>": 1,
            "Arcane Fruit<br>": 1,
            "Salt<br>": 4,
            "Seawood<br>": 4,
            "Mint<br>": 5,
            "Herbs<br>": 5,
        }
    ),
    "b3": new Quest("Fishing Trophies", ["non-magic"], 
        {
            "Large Fish Egg<br>": 3, 
            "Snowflake Moray Eel<br>": 2, 
            "Aether Fish Meat<br>": 1, 
            "Charred fish Meat<br>": 5, 
            "Jellyfish <br>": 2, 
            "Arapima<br>": 4,
            "Lobster<br>": 2,
            "Gar<br>": 4,
            "Frigid Fish Meat<br>": 5,
            "Catfish<br>:": 4,
            "Giant Moray Eel<br>": 2, 
            "Spoiled fish meat<br>": 5,
            "Trout<br>": 3,
            "Undulated Moray Eel<br>": 2, 
            "Decent Fish<br>": 4,
            "Premium Fish<br>": 3,
            "Arowana<br>": 3,
            "Crab<br>": 2,
            "Glowing Crab<br>": 1,

        }
    ),
    "b4": new Quest("New Discoveries", ["non-magic"], 
        {
            "Sapphire<br>": 5, 
            "Emerald<br>": 5, 
            "Garnet<br>": 5, 
            "Raw Crystal<br>": 4, 
            "Quartz<br>": 4,
            "Iron<br>": 3, 
            "Amber<br>": 3, 
            "Gold<br>": 2, 
            "Metal<br>": 1,
        }
    ),
    "b5": new Quest("Tanning the Hide", ["non-magic"], 
        {
            "Hide: Diamond Python<br>": 5,
            "Hide: river snake<br>": 5, 
            "Hide: Coral Snake<br>": 5,
            "Pelt: Bison<br>": 5, 
            "Pelt: Wolf<br>": 5, 
            "Pelt: Fox<br>": 5,
            "Pelt: Raccoon<br>": 5, 
            "Pelt: Aether Deer<br>": 5, 
            "Pelt: Brown Deer<br>": 5, 
            "Pelt: Red Deer<br>": 5, 
            "Pelt: Spotted Deer<br>": 5, 
            "Pelt: Aether bison<br>": 5,
            "Pelt: Albino Moose<br>": 5, 
            "Pelt: brown Bear<br>": 5,
            "Pelt: black Bear<br>": 5, 
            "Pelt: Frigid Bear<br>": 5, 
            "Pelt: Grey Rabbit<br>": 5, 
            "Pelt: Cream Rabbit<br>": 5,
            "Pelt: Brown Rabbit<br>": 5, 
            "Pelt: Piebald Moose<br>": 5, 
            "Pelt: Brown Moose<br>": 5, 
        }
    ),
    "b6": new Quest("A Dragon's Hoard", ["non-magic"], 
        {
           "Moth<br>": 5, 
           "Plant Fiber<br>": 5, 
           "Exotic Scales<br>": 1, 
           "Chitin<br>": 4, 
           "Glass<br>": 2, 
           "Seaweed<br>": 3, 
           "Paper<br>": 2, 
           "Mortar and Pestal<br>": 1, 
           "Turtle Shell<br>": 2, 
           "Trilobite<br>": 2, 
           "Arcane Frog<br>": 1,
           "Squid Ink<br>": 2, 
           "Crystals 100<br>": 4, 
        }
    ),
    "i1": new Quest("Fboners mores", ["arcane", "elementalist", "enchantment"], 
        {
           "Large Feathers<br>": 5,
           "Elder Beetle<br>": 5,
           "Small Featheres<br>": 5,
           "Small Animal Claws<br>": 4,
           "Medium Animal Claws<br>": 4,
           "Large Animal Claws<br>": 4,
           "Teeth<br>": 4,
           "Bones<br>": 5,
           "Large Animal Skull<br>": 2, 
           "Skull<br>": 4,
           "Large Animal Horns<br>": 2,
           "Medium Animal Horns<br>": 2, 
           "Small Animal Horns<br>": 2, 
           "Chitin<br>": 3, 
           "Whale Bone <br>": 1, 
           "Turtle Shell<br>": 3, 
           "Carcass: Large Animal<br>": 1, 
           "Carcass: Small Animal<br>": 4, 
           "Carcass: Eagle<br>": 4, 
           "Carcass: Heron<br>": 3, 
           "Carecass: Penguin<br>": 5, 
           "Carcass: Snow Owl<br>": 5, 
           "Carcass: Vulture<br>": 1, 
           "Carcass: Swan<br>": 1, 
           "Carcass: Brown Owl<br>": 5, 
           "Carcass: Hawk<br>": 3, 
           "Carcass: Dolphin<br>": 1, 
           "Carcass: Sea Serpent<br>": 1, 
           "Carcass: Shark<br>": 3, 
           "Carcass: Octupus<br>": 2, 
           "Carcass: Crocodile<br>": 1, 

        }
    ),
    "i2": new Quest("Missing Friends", ["arcane", "healing"], 
        {
         "Container: Duffel Bag<br>": 5, 
         "Pearl Necklace<br>": 1, 
         "Charm: Fishing<br>": 3, 
         "Charm: Foraging<br>": 3, 
         "Charm: Hunting<br>": 3, 
         "Charm: Caving<br>": 3, 
         "Container: Satchel<br>": 5, 
         "Container: Cooler<br>": 5, 
         "Container: Basket<br>": 5,  
         "Blueprint<br>": 1, 
         "Container: Barrel<br>": 5, 
    
        }
    ),
    "i3": new Quest("Aiding the Injured", ["illusionist", "arcane"], 
        {
           "Tea<br>": 5, 
           "Hemlock Syrup<br>": 1, 
           "Bandages<br>": 5, 
           "Healing Salve<br>": 5, 
           "Antidote<br>": 5,
           "Aberrant Cleanser<br>": 1, 
           "Revival Feather<br>": 1, 
        }
    ),
    "i4": new Quest("Wyvern Wrath", ["non-magic"], 
        {
            "Booster: Aether<br>": 4, 
            "Goblet of wind<br>": 5,
            "Goblet of Poison<br>": 5,
            "Goblet of Luster<br>": 5, 
            "Armor: Leather<br>": 3, 
            "Armor: Iron<br>": 2, 
            "Armor: Bone<br>": 4, 
            "Booster: Strength<br>": 4,
            "Booster: Bleed<br>": 4, 
            "Booster: Breath<br>": 4, 
            "Booster: DPS<br>": 4,
            "Aether book<br>": 1, 
            "Goblet of Ice<br>": 5, 
            "Goblet of Shadow<br>": 5, 
            "Goblet of Radiation<br>": 5, 
            "Goblet of Lightning<br>": 5, 
            "Goblet of Fire<br>": 5, 
            "Delicate Aether Shard<br>": 1,
        }
    ),
    "i5": new Quest("Clockmaker's Friend", ["healing"], 
        {
           "Malachite<br>": 5,
           "Selenite<br>": 5, 
           "Chrysocolla<br>": 5,
           "Serpentine<br>": 5, 
           "Blue Goldstone<br>": 4,
           "Aquamarine<br>": 4, 
           "Ruby<br>": 4, 
           "Sunstone<br>": 3, 
           "Moonstone<br>": 3, 
           "Aether Quartz<br>": 2,
           "Amethyst<br>": 2,
           "Lapis Lazuli<br>": 1, 
           "Limestone<br>": 1, 
           "Jade<br>": 1, 
        }
    ),
    "i6": new Quest("The Perfect Nest", ["enchantment"], 
        {
            "Breath Potion<br>": 5, 
            "Genotype blocker<br>": 5, 
            "Radiance Bond: Petty<br>": 5, 
            "Aether tonic<br>": 1, 
            "Soul Twine<br>": 1, 
            "Gender Potion<br>": 1, 
            "Temper Potion<br>": 4, 
            "Fertility Potion<br>": 3, 
            "Dragon's talon<br>": 1, 
            "Dragon's Eye<br>": 2, 
            "Dragon's Heart<br>": 3, 
            "Skill Charm<br>": 5, 
            "Bottle of Vanta<br>": 1, 
            "Bottle of Ivory<br>": 2, 
            "Bottle of Umber<br>": 4, 
            "Bottle of Haze<br>": 3, 
            "Radiance bond: Mythic<br>": 1, 
            "Radiance bond: Uncommon<br>": 3, 
            "Radiance Bond: Common<br>": 4,
            "Radiance Bond: Rare<br>": 2, 
            "Dragon's Instinct<br>": 4,
        }
    ),
 "m1": new Quest("Lurking in the Waters", ["arcane", "healing"], 
        {
            "Fire Elixir<br>": 5, 
            "Wind Elixir<br>": 5, 
            "Poison Elixir<br>": 5,
            "Luster Elixir<br>": 5, 
            "Crystalline Armor<br>": 1, 
            "Booster Nightshade<br>": 4, 
            "Booster brawler<br>": 4, 
            "Ice Elixir<br>": 5,
            "Shadow Elixir<br>": 5, 
            "Radiation Elixir<br>": 5, 
            "Lightning Elixir<br>": 5, 
            "Revival Feather<br>": 2, 
            "Aether Book<br>": 1, 
            "Adept aether Shard<br>": 2,
        }
    ),
    "m2": new Quest("Surveying the Aether", ["arcane", "illusionist"], 
        {
            "Aether Bird Carcass<br>": 2, 
            "Aether book<br>": 1, 
            "Aether Quartz<br>": 2,
            "Aether Bones<br>": 5, 
            "Aether Deer Pelt<br>": 4, 
            "Aether bison Pelt<br>": 5, 
            "Aether Feathers<br>": 5, 
            "Aether Imbued Pages<br>": 1, 
            "Aether Imbued Scales<br>": 5,
            "Delicate Aether Shard<br>": 2, 
            "Adept Aether Shard<br>": 1,
            "Aether Meat<br>": 5, 
            "Aether Fish Meat": 5, 
            "Aether Tonic<br>": 2, 
        }
    ),
    "m3": new Quest("Feast of the Ages", ["elementalist", "enchantment"], 
        {
            "Fried Rice<br>": 5,
            "Meat Cake<br>": 1, 
            "Hot Pot<br>": 2, 
            "Mushroom Soup<br>": 2, 
            "Rack of Ribs<br>": 2, 
            "Niramish<br>": 2,
            "Dumpling Stir Fry<br>": 3, 
            "Ramen<br>": 4, 
            "Fruit Salad<br>": 4, 
            "Premium Cured Meat<br>": 3, 
            "Crab Cake<br>": 5, 
            "Meatballs<br>": 5, 
            "Veggie Skewer<br>": 5, 
            "Dragon rolll sushi<br>": 2, 
            "Meat stew<br>": 3, 
            "Decently Preserved Fish<br>": 4, 
            "Premium Preserved Fish<br>": 3, 
            "Decently Cured Meat<br>": 4,
        }
    ),
    "m4": new Quest("Into Familiar Territory", ["healing" ,"elementalist"], 
        {
           "Highborn Urses<br>": 5,
           "Snow Leopard<br>": 4,
           "Gleaming Newt<br>": 3,
           "Vulture<br>": 3,
           "Fox<br>": 1,
           "Boar<br>": 2,
           "Reticulated Crocodile<br>": 5,
           "Glinting Eel<br>": 4,
           "Draco Otter<br>": 3,
           "Axolotl<br>": 1,
           "Jellyfish<br>": 2,
           "Royal Glimmer Deer<br>": 5,
           "Humminggriffon<br>": 4,
           "Toucan<br>": 3,
           "Sapient Sunflower<br>": 1,
           "Badger<br>": 2,
           "Cane Toad<br>": 5,
           "Diamond Moth<br>": 4,
           "Draco Bat<br>": 3,
           "Salamander<br>": 1, 
           "Scoria Komodo<br>": 2,
           "Bunny<br>": 5,
           "Raccoon<br>": 3,
           "Red Panda<br>": 1,
           "Porcupine<br>": 2,
           "Jerboa<br>": 4,
           "Golden Chest of Mimicy<br>": 3,
           "Sprite<br>": 1,
           "Owl<br>": 4,
           "Magpie<br>": 3,
           "Crow<br>": 1,
           "Draco Boa<br>": 5,
           "Aberrant Draco Boa<br>": 1,
        }
    ),
    "m5": new Quest("Mirror Mirror", ["enchantment"], 
        {
           "Paint<br>": 5,
           "Paint Kit<br>": 4, 
           "Shears<br>": 5, 
           "Delicate Aether Shard<br>": 3, 
           "Adept Aether Shard<br>": 1, 
           "Shampoo<br>": 5, 
           "Do Over Kit<br>": 1, 
           "Touch Up Kit<br>": 3,
           "Large Item Kit<br>": 1, 
           "Small Item Kit<br>": 3, 
           "Nail polish<br>": 5, 
           "Dragon Tears<br>": 4, 
        }
    ),
    "m5": new Quest("Fury of Dragons", ["enchantment"], 
        {
           "Egg: Chosen Common<br>": 1,
           "Egg: Chosen Uncommon<br>": 1,
           "Egg: Chosen Rare<br>": 1, 
           "Arcane Heart<br>": 2,
           "Aether Book<br>": 2, 
           "Congealed Ancients Blood<br>": 3, 
           "Shard of Ancients Ribcage<br>": 3,
           "Eternal Element<br>": 4, 
           "Crystalline Armor<br>": 1, 
           "Aether Armor<br>": 1,
           "Booster Warlord<br>": 5, 
        }
    )
}

// List of strings
const side_quests = [
    "<b>Quest Letter: The Butcher's Order</b><br>",
    
    "<b>Quest Letter: Gardener's Delight</b><br>",
    
    "<b>Quest Letter: Mushroom Delicacy</b><br> ",
    
    "<b>Quest Letter: Fisherman's aid</b><br>",
    
    "<b>Quest Letter: Courier's Request</b><br>",
    
    "<b>Quest Letter: Blacksmith's Inquiry</b><br>",
    
    "<b>Quest Letter: Healing Shrine Delivery</b><br>",
    
    "<b>Quest Letter: Salon Quality</b><br>",
    
    "<b>Quest Letter: Nesting Aid</b><br>",
    
    "<b>Quest Letter: Take This...</b><br>",
    
    "<b>Quest Letter: Training Montage</b><br>",

    "<b>Quest Letter: Granny's Recipe</b><br>",

    ];

// Structure: <full_sentence>: 
// {
//      'chance': <chance>
// 
const injuries = {
    "Your dragon was injured while questing!":
    {
        'chance': 85,
        'severity': 'mild',
        'status': false
    },
    "Your dragon feels a little bit sick, they will need an antidote to continue questing.":
    {
        'chance': 10,
        'severity': 'mild',
        'status': true
    },
    "Your dragon feels terribly ill, they will need an antidote to continue any activity.":
    {
        'chance': 3,
        'severity': 'moderate',
        'status': true
    },
    "Your dragon has been hit by heat stroke! They cannot go questing until given milk or water!":
    {
        'chance': 1,
        'severity': 'severe',
        'status': true
    },
    "Your dragon was attacked by a wild dragon while questing!":
    {
        'chance': 1,
        'severity': 'severe',
        'status': false
    },
}

const injury_severity = {
    "mild":
    {
        'min_damage': 10,
        'max_damage': 50
    },
    "moderate":
    {
        'min_damage': 30,
        'max_damage': 100
    },
    "severe":
    {
        'min_damage': 50,
        'max_damage': 150
    }
}

var dragonName;
var quest;
var rank;
var temper; // -5% for timid, +5% for aggressive (to injury chance)
var magic_level; // +10 for Basic, +20% for low, +30% for high (but what about basic?(added)) (to pass chance)
var magic_type;
var has_bonded; // or same flight; overwrites has_other_dragon; +10% (to pass chance)
var has_other_dragon; // +5% (to pass chance)
var is_hoarder; // Chance to return with one more item
var fam_raccoon // returns with one more item 100%

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
    fam_raccoon = document.querySelector("[name=raccoon]:checked") ? document.querySelector("[name=raccoon]:checked").value == "Y" : false;

    
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
        if(extra_pass[extras[i]])
            pass_chance += extra_pass[extras[i]];
    }

    var result = "";
    var pass_roll = rand(1, 100);
    // If roll is less than pass chance, it is a success
    if(pass_roll < pass_chance) { result += rollLoot(); }
    else { result += rollSide(); }

    result += "<br><br>";

    result += rollInjury();
    if(pass_roll < pass_chance) { result += "<br>Items have been deposited to your hoard."; }

    document.getElementById("result").innerHTML = result;

    function rollLoot(){
        // Roll amount of loot
        var max_loot = 8;
        if(is_hoarder) { max_loot += 1; }
        else if (fam_raccoon) {max_loot += 1;}
        var num_loot = rand(2, max_loot);
        
    
        var loot_result = dragonName + " has succeeded in their quest! They found:<br><br>"
    
        for(let i = 0; i < num_loot; i++){
            loot_result += getRollResult(quest_data.loot_table);
        }

        return loot_result;
    }
    
    function rollSide() {
        var side_result = "Your dragon failed the quest, however you have found an <i>optional side quest item</i>.<br><br>"
        var rand_index = rand(0, side_quests.length-1);
        side_result += side_quests[rand_index];
        side_result += "To submit your side quest, please see the side quest prompt under activities, or the item itself."
        return side_result;
    }
}

function rollInjury() {
    // Get injury chance based on rank and temper (possibly from extras as well)
    var injury_chance = base_injury[rank];
    injury_chance += temper_injury[temper];
    for(let i = 0; i < extras.length; i++) {
        if(extra_injury[extras[i]])
            injury_chance += extra_injury[extras[i]];
    }

    // Roll injury
    var injury_result = "";
    var injury_key_roll = "";
    var injury_roll = rand(1, 100);
    // If roll is less than chance, dragon is injured
    if(injury_roll <= injury_chance) {
        // Determine if status injuries should apply.
        var status_injury_chance = 100;
        for(let i = 0; i < extras.length; i++) {
            if(extra_status_injury[extras[i]])
                status_injury_chance += extra_status_injury[extras[i]];
        }
        var status_injury_roll = rand(1, 100);
        var has_status_injury = status_injury_roll <= status_injury_chance;
        // Create the roll table.
        var injury_table = {};
        var first_injury = Object.keys(injuries)[0];
        Object.keys(injuries).forEach(item => {
            if(!has_status_injury && injuries[item].status)
                injury_table[first_injury] += injuries[item].chance;
            else
                injury_table[item] = injuries[item].chance;
        });
        injury_key_roll = getRollResult(injury_table);
        injury_result += injury_key_roll + "<br>";

        var severity = injuries[injury_key_roll].severity;

        injury_result += "Your dragon suffers a " + severity + " injury.";

        var min_injury = injury_severity[severity].min_damage;
        var max_injury = injury_severity[severity].max_damage;

        injury_result += " -" + rand(min_injury, max_injury) + "HP";
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
	return "error!!?"
}

function clearForms() {
    document.getElementById("playerinfo").reset();
    document.getElementById("modifiers").reset();
    document.getElementById("result").innerHTML = "";
}