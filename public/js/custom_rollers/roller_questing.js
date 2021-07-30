
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
    "b1": new Quest("A Path Less Traveled", ["non-magic"], 
        {
            "Milk <br>": 5, // Milk
            "Pearl Necklace <br>": 2, // Pearl Necklace
            "Cooking Pot <br>": 3, // Cooking Pot
            "Tea <br>": 5, // Tea
            "Beef Stew <br>": 5, // Beef Stew
            "Premium Meat <br>": 3, // Premium Meat
            "Inkwell <br>": 2  // Inkwell
        }
    ),
    "b2": new Quest("Counting Sheep", ["non-magic"], 
        {
            "100 x Crystals <br>": 10, // 100 Crystals
            "Diminished Coin <br>": 1, // Diminished Coin
            "Unfertilized Dragon Egg <br>": 2, // Unfertilised Dragon Egg
            "Cloth <br>": 4, // Cloth
            "Leather <br>": 2  // Leather
        }
    ),
    "b3": new Quest("A Festival of Honor", ["non-magic"], 
        {
            "Revival Feather <br>": 1, // Revival Feather
            "Dragon Roll Sushi <br>": 2, // Dragon Roll Sushi
            "Beef Stew <br>": 5, // Beef Stew
            "Tea <br>": 6, // Tea
            "Water <br>": 5  // Water
        }
    ),
    "b4": new Quest("New Discoveries", ["non-magic"], 
        {
            "100 x Crystals <br>": 10, // 100 Crystals
            "Emerald <br>": 2, // Emerald
            "Garnet <br>": 2, // Garnet
            "Glass <br>": 6, // Glass
            "Magic Reversal Charm <br>": 5  // Magic Reversal Charm
        }
    ),
    "b5": new Quest("Tanning the Hide", ["non-magic"], 
        {
            "Leather <br>": 5, // Leather
            "Spotted Deer Pelt <br>": 5, // Spotted Deer Pelt
            "Red Deer Pelt <br>": 5, // Red Deer Pelt
            "Brown Deer Pelt <br>": 5, // Brown Deer Pelt
            "Bison Pelt <br>": 3, // Bison Pelt
            "Fox Pelt <br>": 5, // Fox Pelt
            "Racoon Pelt <br>": 5, // Raccoon Pelt
            "Wolf Pelt <br>": 5  // Wolf Pelt
        }
    ),
    "b6": new Quest("Show Me Your Bug Collection", ["non-magic"], 
        {
            "diamond_insect <br>": 2, // Needs a special case to roll one out of the six varieties, only a single variety can be dropped per quest
            "Elder Beetle <br>": 3, // Elder Beetle
            "Bones <br>": 5, // Bones
            "Berries <br>": 5, // Berries
            "Metal <br>": 3, // Metal
            "Teeth <br>": 6, // Teeth
            "Salt <br>": 4, // Salt
            "Large Animal Skull <br>": 6  // Large Animal Skull
        }
    ),
    "i1": new Quest("A Missing Friend", ["arcane", "elementalist", "enchantment"], 
        {
            "Small Animal Claws <br>": 5, // Small Animal Claws
            "Medium Animal Claws <br>": 5, // Medium Animal Claws
            "Dragon's Talon <br>": 1, // Dragon's Talon
            "Large Animal Claws <br>": 6, // Large Animal Claws
            "Large Animal Skull <br>": 3, // Large Animal Skull
            "Skull <br>": 5  // Skull
        }
    ),
    "i2": new Quest("Aiding The Injured", ["arcane", "healing"], 
        {
            "Hemlock <br>": 5, // Hemlock
            "Honey <br>": 5, // Honey
            "Bandages <br>": 5, // Bandages
            "Thread Spool <br>": 5, // Thread Spool
            "Water <br>": 3  // Water
        }
    ),
    "i3": new Quest("Where's the Gold?", ["illusionist", "arcane"], 
        {
            "300 x Crystals <br>": 5, // 300 Crystals
            "Fire Elixir <br>": 2, // Fire Tonic
            "Ice Elixir <br>": 3, // Ice Tonic
            "Diminished Coin <br>": 4, // Diminished Coin
            "Weatherd Coin <br>": 2, // Weathered Coin
            "Common Dragon Egg <br>": 1  // Common Dragon Egg
        }
    ),
    "i4": new Quest("The Cutest Critter You Ever Did See", ["non-magic"], 
        {
            "Albino Otter <br>": 1, // Albino Otter
            "River Otter <br>": 1, // River Otter
            "Sea Otter <br>": 1, // Sea Otter
            "Teeth <br>": 7, // Teeth
            "Medium Animal Claws <br>": 5, // Medium Animal Claws
            "Premium Fish <br>": 5  // Prime Fish
        }
    ),
    "i5": new Quest("The Gardener's Knowledge", ["healing"], 
        {
            "Hemlock <br>": 5, // Hemlock
            "Berries <br>": 5, // Berries
            "Salt <br>": 5, // Salt
            "Water <br>": 5, // Water
            "Healing Salve <br>": 3, // Healing Salve
            "Antidote <br>": 2  // Antidote
        }
    ),
    "i6": new Quest("Clockmaker's Friend", ["enchantment"], 
        {
            "Dragon's Eye <br>": 1, // Dragon's Eye
            "Strange Geode <br>": 4, // Strange Geode
            "Metal <br>": 6, // Metal
            "Garnet <br>": 5, // Garnet
            "Emerald <br>": 5, // Emerald
            "Skull <br>": 3, // Skull
            "Small Feathers <br>": 5, // Small Feathers
            "Large Feathers <br>": 2, // Large Feathers
            "Aether Feathers <br>": 1, // Aether Imbued Feathers
            "Inkwell <br>": 4  // Inkwell
        }
    ),
    "i7": new Quest("Hiding in Plain Sight", ["illusionist", "elementalist"], 
        {
            "Shadow Elixir <br>": 2, // Dodge Potion
            "Wind Elixir <br>": 2, // Critical Hit Potion
            "Lightning Elixir <br>": 2, // Aether Potion
            "Poison Elixir <br>": 2, // Strength Potion
            "Magical Reversal Charm <br>": 1, // Magic Reversal Charm
            "Revival Feather <br>": 2, // Revival Feather
            "Diminished Coin <br>": 2, // Diminished Coin
            "Weathered Coin <br>": 1, // Weathered Coin
            "300 x Crystals <br>": 6 // 300 Crystals
        }
    ),
 "m1": new Quest("Lurking in the Waters", ["arcane", "healing"], 
        {
            "Hemlock <br>": 5, // Hemlock
            "Large Animal Carcass <br>": 3, // Deer Carcass
            "Small Animal Carcass <br>": 2, // Fox Carcass
            "Bandages <br>": 6, // Bandages
            "Prime Fish <br>": 4, // Prime Fish
            "Jade Hummingbird <br>": 1, // Jade Hummingbird
            "Sea Otter <br>": 1, // Sea Otter
            "Antidote <br>": 4, // Antidote
            "Healing Salve <br>": 4  // Healing Salve
        }
    ),
    "m2": new Quest("Surveying the Aether", ["arcane", "illusionist"], 
        {
            "Inkwell <br>": 5, // Inkwell
            "Blueprints <br>": 3, // Blueprints
            "Aether Draco Python <br>": 1, // Aether Draco Python
            "Uncommon Dragon Egg <br>": 1, // Uncommon Dragon Egg
            "Aether Feather <br>": 2, // Aether Imbued Feather
            "Aether Bison Pelt <br>": 3, // Aether Imbued Bison Pelt
            "Aether Deer Pelt <br>": 3, // Aether Imbued Deer Pelt
            "Paper <br>": 5, // Paper
            "Aether Pages <br>": 1  // Aether Imbued Pages
        }
    ),
    "m3": new Quest("The Breath of a Dragon", ["elementalist", "enchantment"], 
        {
            "Eternal Element <br>": 3, // Essence of Ice
            "Goblet of Shadow <br>": 3, // Essence of Shadow
            "Goblet of Radiation <br>": 3, // Essence of Radiation
            "Goblet of Lightning <br>": 3, // Essence of Lightning
            "Goblet of Fire <br>": 3, // Essence of Fire
            "Glass <br>": 5, // Glass
            "Metal <br>": 5, // Metal
            "500 x Crystals <br>": 5, // 500 Crystals
            "Brilliant Coin <br>": 1  // Brilliant Coin
        }
    ),
    "m4": new Quest("A Serpent's Touch", ["healing" ,"elementalist"], 
        {
            "Radiant Draco Boa <br>": 1, // Radiant Draco Boa
            "Shimmering Draco Python <br>": 1, // Shimmering Draco Python
            "Aether Draco Python <br>": 1, // Aether Draco Python
            "500 x Crystals <br>": 7, // 500 Crystals
            "Brilliant Coin <br>": 1, // Brilliant Coin
            "Rare Dragon Egg <br>": 1, // Rare Dragon Egg
            "Teeth <br>": 6, // Teeth
            "Fox Carcass <br>": 5, // Fox Carcass
            "Large Feathers <br>": 5  // Large Feathers
        }
    ),
    "m5": new Quest("Tiny Griffins", ["enchantment"], 
        {
            "Crimson Humming Griffin <br>": 1, // Crimson Humming Griffin
            "Jade Humming Griffin <br>": 1, // Jade Humming Griffin
            "Revival Feather <br>": 2, // Revival Feather
            "Large Feathers <br>": 6, // Large Feathers
            "Large Feathers <br>": 5, // Small Feathers
            "500 x Crystals <br>": 5, // 500 Crystals
            "Diminished Coin <br>": 1, // Diminished Coin
            "Decent Meat <br>": 6, // Decent Meat
            "Decent Fish <br>": 5  // Decent Fish
        }
    )
}

// List of strings
const side_quests = [
    "<b>A Bizarre Aftertaste...</b><br>\
    A rather rugged and wise woman approaches you, she has a need for some strange ingredients. \
    When you ask what it is for, she doesn't really give you direct reply about it, \
    it's vague and you wonder if it's a medicine. In return for your efforts, \
    she offers the chance of either <b>250 Crystals</b> or a <b>Diminished Coin</b>. \
    If you choose to help her, depict your dragon searching for the plant-based \
    ingredients for her strange request.<br><br>",
    
    "<b>Gone Fishing</b><br>\
    On your travels for your quest you meet up with a fisherman, he seems distressed. You ask \
    him what is bothering him and he replies with a rather long winded story about his \
    favorite fishing spot, but he can't go because he lost his fishing pole. He asks you \
    to find it, but when he describes it it just sounds like something you could make for him. \
    As a reward he offers his meager savings of either the chance at a <b>150 Crystals</b> \
    or a <b>Diminished Coin</b>. If you choose to help him, depict your dragon either looking for, \
    finding, or just making a new fishing pole for the fisherman.<br><br>",
    
    "<b>Waste of a Royal</b><br>\
    You've wandered for hours, but finally you come to something interesting. \
    Brushing past the foliage and trees you enter a clearing, but not all is well. \
    A gut wrenching sight of a massive dragon lay wounded. Its breath rugged and shambling \
    as its life seeps away from it. You question how long it had been here, but can tell \
    that the white dragon adorned with golden horns doesn't have too much time. It speaks \
    to you in the dragon tongue, explaining its story of the fight against a dangerous force. \
    It asks of you to send word of its defeat to a loved one who wanders the desert, \
    eternally waiting for its beloved to return. Described as a black dragon whose eyes \
    bleed crimson. The white dragon tells you that you will receive payment from them for your \
    troubles, either <b>500 Crystals</b> or a <b>Weathered Coin</b>. If you choose to help a dying \
    dragon's wishes, depict your dragon either meeting the blackened lover or on their way through \
    desert to them.<br><br>",
    
    "<b>Pest Control</b><br>\
    A village has come to you requiring your aid, they tell you a long winded story about a certain pest problem plaguing their village. You ask for more information before deciding if it is something you wish to do.\
    They explain to you that their is a rodent [or] spider problem and request you dispatch of them swiftly. They beg you and offer either\
    <b>500 Crystals</b> or a <b>Diminished Coin</b> for your aid. Depict your dragon either removing or killing rodents OR spiders, or both.<br><br>",
    
    "<b>You're Going to Need Better Trap</b><br>\
    A local wizard has requested you bring them a live aether creature specimen. They seem very pushy about it being alive. They explain to you that aether creatures are strange and otherwordly looking, like a deer with antlers growing into trees, or a crocodile with massive spikes along its back. The wizard promises you that in return for your service, he will either give you <b>1,000 crystals</b> or a <b>brilliant coin</b>. Depict your dragon trapping, or returning a trapped, aether creature.",
    
    "<b>Fool's Gold</b><br>\
    Your dragon has stumbled across what appears to be a magic item. Intrigued, they take it to a local enchantress to find its worth. However, she only has bad news, as the item is in fact worthless. Depict your dragon's reaction. Do they throw the item away, keep it, or burn it? No matter the result, the enchantress keeps it and gives you either <b>100 Crystals</b> or a <b>diminished coin</b>.",
    
    "<b>After Curfew</b><br>\
    Your dragon has stayed out too long gathering supplies in an unfamiliar land, as a result, they have gotten very lost. Depict your dragon handling the situation. Do they follow the horizon home, seeing the city far off in the distance, or do they try to follow the stars home? Possibly they choose to just camp out until daylight? When they arrive to the city, with the goods they had gathered for the city, they are rewarded with either <b>300 crystals</b> or a <b>diminished coin</b>",
    
    "<b>Missing: Obnoxious Mini Pig</b><br>\
    You come across the help wanted board, after taking a long look, you decide the missing posters are worth the effort. The one listed today is about someone's missing pet <i>mini pig</i>. The poster described them as a bit roudy and with a very obnoxious bow tie around their neck. They say the pig responds to 'Bessy'. Depict your dragon finding and attempting to capture the missing pet. The reward is either <b>500 crystals</b> or a <b>Diminished coin</b>.",
    
   "<b>Missing: Strange Dog</b><br>\
    You come across the help wanted board, after taking a long look, you decide the missing posters are worth the effort. The one listed today is about someone's missing pet <i>dog</i>. The poster described them as 'possibly' not friendly, but responding to the name Charlie. Depict your dragon finding and attempting to capture the missing pet. The reward is either <b>500 crystals</b> or a <b>Diminished coin</b>.",
    
    "<b>Missing: Large Cat</b><br>\
    You come across the help wanted board, after taking a long look, you decide the missing posters are worth the effort. The one listed today is about someone's missing pet <i>cat</i>. The poster described them as incredibly large and with very sharp teeth. In fact the picture they attached, crudely handdrawn, looks less a domestic house cat, and more like a mountain lion with a bright red collar on it. They say the pet responds to 'Cuddles'. Depict your dragon finding and attempting to capture the missing pet. The reward is either <b>500 crystals</b> or a <b>Diminished coin</b>.",
    
    "<b>Missing: Clueless Chicken</b><br>\
    You come across the help wanted board, after taking a long look, you decide the missing posters are worth the effort. The one listed today is about someone's missing pet <i>chicken</i>. The poster described them as very clueless and clumsy, and seemed very desperate about finding them before the chicken got themselves in danger. They say the pet responds to 'Drumstick'. Depict your dragon finding and attempting to capture the missing pet. The reward is either <b>500 crystals</b> or a <b>Diminished coin</b>.",
    
    "<b>Missing: Prized Horse</b><br>\
    You come across the help wanted board, after taking a long look, you decide the missing posters are worth the effort. The one listed today is about someone's missing pet <i>horse</i>. The poster described them as a prized purebred, but they seemed to have forgotten the part about the speed of the horse being almost as fast as a flying dragon. They say the pet responds to 'Seabird'. Depict your dragon finding and attempting to capture the missing pet. The reward is either <b>500 crystals</b> or a <b>Diminished coin</b>.",
    
    "<b>Missing: Pure Bread Animal</b><br>\
    You come across the help wanted board, after taking a long look, you decide the missing posters are worth the effort. The one listed today is about someone's missing pet <i>Pure Bread</i>. At first you think it's a typo, but the image attached is clearly a sculpture made entirely out of bread. You decided to find where this pet has e-loafed to. They say the pet responds to 'Toast'. Depict your dragon finding and attempting to capture the missing pet. The reward is either <b>500 crystals</b> or a <b>Diminished coin</b>.",
    
    "<b>Polymorph</b><br>\
    You've been searching for a rogue spellcaster, since your quest seems to have failed due to their meddling. Seeking your revenge, you catch up to them only to find they have polymorphed into a brilliant green dragon! Depict your dragon chasing them down or trapping them and turning them in. As a reward for turning the rogue you are given either <b>500 crystals</b> or a <b>weathered</b> coin.", 
    
    "<b>All for One in Radiance...</b><br>\
    On your quest, you've found a treasure map! It leads somewhere in the radiant empire. Depict your dragon searching the lush greenland of the Radiant empire for this treasure. When they find it they discover it contains either <b>600 Crystals</b> or a <b>Weathered Coin</b>.", 
    
     "<b>All for One in Gloom...</b><br>\
    On your quest, you've found a treasure map! It leads somewhere in the gloom empire. Depict your dragon searching the marshlands of the Gloom empire for this treasure. When they find it they discover it contains either <b>600 Crystals</b> or a <b>Weathered Coin</b>.", 
    
     "<b>All for One in Scorched...</b><br>\
    On your quest, you've found a treasure map! It leads somewhere in the scorched empire. Depict your dragon searching the harsh desert of the Scorched empire for this treasure. When they find it they discover it contains either <b>600 Crystals</b> or a <b>Weathered Coin</b>.", 
    
     "<b>All for One in Shimmering...</b><br>\
    On your quest, you've found a treasure map! It leads somewhere in the Shimmering empire. Depict your dragon searching the volcanic wastelands of the Shimmering empire for this treasure. When they find it they discover it contains either <b>600 Crystals</b> or a <b>Weathered Coin</b>.", 
    
     "<b>All for One in Frigid...</b><br>\
    On your quest, you've found a treasure map! It leads somewhere in the frigid empire. Depict your dragon searching the unforgiving snow of the Frigid empire for this treasure. When they find it they discover it contains either <b>600 Crystals</b> or a <b>Weathered Coin</b>.", 
    
    "<b>Lost at Sea</b><br>\
    You discover someone has gone missing at sea, they went out sailing a week ago, but no one has seen or heard from them. Depict your dragon finding them floating in the sea on debris, marooned on an island, or you only discover a shipwreck with no sight of the missing person. When you return, you are awarded either <b>800 Crystals</b> or a <b>Weathered Coin</b>", 
    
    "<b>Is it Gluten Free?</b><br>\
    On your return home you are stopped by a noble who has requested that you absolutley must retrieve a glass of water from a very special source for their supper. They clearly have too much money to be paying you to do this, as they offer you either <b>1,000 Crystals</b> or a <b>Brilliant Coin</b> to complete the task. Depict your dragon gathering water from a water source of your choice, be it in the mountains, an underground lake, the top of a waterfall, anywhere exotic, or perhaps you decide you don't have time for it and you just find some nice well water?", 
    
    "<b>Not The Finest Moment</b><br>\
    You hear tales of a spell caster turning themselves into a golden goblet. Why? Well it appears they wanted to hide in a dragon's hoard, so as to get closer and study the mighty golden beast further. However, no one has heard from the spellcaster in weeks, and they are seeking for help. They offer a sizeable reward of either <b>800 Crystals</b> or a <b>Weathered Coin</b>. Depict your dragon retrieving the Goblet Person either by fighting the dragon, bartering with the dragon, or perhaps sneaking in and stealing it.", 
    
    "<b>Take a Hint - Domestic</b><br>\
    You are approached by another handler with a request to pair their dragon with yours in a nest. It sounds like a great idea, until you see the other dragon. Depict your dragon's (and rider's if you are inclined) reaction to the other dragon, or your dragon with the two companions conversing. No matter the choice, they thank you for your time and offer you either <b> 200 Crystals</b> or a <b>Diminished Coin</b> for the trouble.", 
    
    "<b>Take a Hint - Wild</b><br>\
    A not so suitable suitor has interrupted your quest with unwanted flirts. Your dragon doesn't appear to be interested, in fact rather frustrated at the failed quest. Depict your dragon's reaction to the flirtatious fiend. All is not lost however, the interaction does yield either <b>200 Crystals</b> or a <b>Diminished Coin</b> that you've found in the grass.",
    
    "<b>Extra Extra, Read All About It!</b><br>\
    While you've failed the quest, your dragon has ended up on the front page of the local newspaper. What was so great, or awful, that your dragon ended up there? Depict them in the act, and don't forget that during it they found either <b>200 Crystals</b> or a <b>Diminished coin</b> stashed away somewhere.", 
    
    "<b>You're Going to Pay for That</b><br>\
    On your quest you seem to have managed to disturb a dragon's home. Whether it was breaking something, or knocking something over, you've clearly upset them rather badly. Depict your dragon righting what they have wronged, or just getting into a tussel with the other dragon. Don't forget to sneak off with either <b>200 Crystals</b> or a <b>Diminished coin.</b> Whichever you can safely take, that is.", 
    
    "<b>A Terrible Price to Pay</b><br>\
    A mother (dragon or not) has pleaded with you to find their loved one after they were forced to flee when the aether creatures attacked their home. When you arrive however, you have no good news to return with, but the aether being is still there! Depict your dragon sneaking off to return to the woman with the bad news, or depict your dragon fighting the aether creature. When you return, the woman gives you all she has remaining, either <b>300 Crystals</b> or a <b>diminished coin</b>.", 
    
    "<b>Please Get Up</b><br>\
    Along your quest you feel the need to abandon it at the sight you find. A dead dragon upon a rock with its young hatchling left to fend for itself. The hatchling is hiding beneath the jaw of the dead dragon, seemingly hiding from the world. Depict your dragon helping them find the rest of their family, or taking them to someone who can care for them. As a reward for your efforts, you are given <b>1,000 Crystals</b> or a <b>Brilliant Coin</b>."
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