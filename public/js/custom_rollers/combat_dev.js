// Data

// dps is number of times a dragon gets to roll their raw/bleed, keyed as follows:
// [attack_no.]:[value to roll under or equal to get that extra attack]
const dps_chance = { 2: 5, 3: 3, 4: 2 };

// Keyed by: [num to roll]:[% deflected (written as float)]
const deflect_chance = { 1: 0.75, 2: 0.5, 3: 0.25, 4: 0.1, 5: 0.05, 6: 0.03, 7: 0.02, 8: 0.01, 9: 0.0, 10: 0.0 };

const classes = {
	'light': {
		phys_crit: 3, // out of 10
		min_raw: 40,
		max_raw: 125,
		max_bleed: 35, // min is always 1
		max_dps: 4,
		base_res: 30,
		mag_crit: 7
	},
	'medium': {
		phys_crit: 4, // out of 10
		min_raw: 50,
		max_raw: 135,
		max_bleed: 40, // min is always 1
		max_dps: 3,
		base_res: 40,
		mag_crit: 4
	},
	'heavy': {
		phys_crit: 5, // out of 10
		min_raw: 60,
		max_raw: 150,
		max_bleed: 50, // min is always 1
		max_dps: 2,
		base_res: 50,
		mag_crit: 3
	},
	'aberrant': {
		phys_crit: 7, // out of 10
		min_raw: 60,
		max_raw: 200,
		max_bleed: 70, // min is always 1
		max_dps: 2,
		base_res: 70,
		mag_crit: 7
	},
	'1_champion': {
		phys_crit: 5, // out of 10
		min_raw: 22,
		max_raw: 45,
		max_bleed: 75, // min is always 1
		max_dps: 3,
		base_res: 45,
		mag_crit: 5
	},
	'2_champion': {
		phys_crit: 3, // out of 10
		min_raw: 37,
		max_raw: 75,
		max_bleed: 60, // min is always 1
		max_dps: 3,
		base_res: 45,
		mag_crit: 3
	},
	'3_champion': {
		phys_crit: 4, // out of 10
		min_raw: 75,
		max_raw: 180,
		max_bleed: 45, // min is always 1
		max_dps: 2,
		base_res: 60,
		mag_crit: 4
	},
	'4_champion': {
		phys_crit: 2, // out of 10
		min_raw: 80,
		max_raw: 202,
		max_bleed: 60, // min is always 1
		max_dps: 2,
		base_res: 52,
		mag_crit: 4
	},
		
};


const breath_weaknesses = {
	'fire': 'water', // i.e. fire is weak to water
	'water': 'lightning',
	'wind': 'poison',
	'shadow': 'radiation',
	'poison': 'fire',
	'radiation': 'luster',
	'luster': 'shadow',
	'lightning': 'wind'
};

const breath_tier_dmgs = { 1: 10, 2: 20, 3: 30, 4: 40 };

const breath_crit = 4; // blanket value for all

const magic_classes = {
	'basic': {
		min_dmg: 15,
		max_dmg: 30
	},
	'low': {
		min_dmg: 20,
		max_dmg: 60
	},
	'high': {
		min_dmg: 35,
		max_dmg: 100
	}
}

const armor_sets = {
	'leather': {
		chest: 30,
		break_chance: 5,
		bleed_res: 0,
		magic_res: 0
	},
	'sturdy': {
		chest: 60,
		break_chance: 3,
		bleed_res: 0,
		magic_res: 0
	},
	'iron': {
		chest: 75,
		break_chance: 1,
		bleed_res: 0,
		magic_res: 0
	},
	'crystalline': {
		chest: 90,
		break_chance: 0,
		bleed_res: 20,
		magic_res: 5
	},
	'aether': {
		chest: 90,
		break_chance: 0,
		bleed_res: 5,
		magic_res: 20
	},
}


// For raids
const breakable = {
	'head': 1,
	'tail': 2,
	'legs': 3,
	'none': 4
}

// For logging purposes
const item_names = {
	'strength_tonic':	'Strength Tonic',
	'magic_tonic': 		'Magic Tonic',
	'bleed_tonic': 		'Bleed Tonic',
	'breath_tonic': 	'Breath Tonic',
	'dps_booster':		'DPS Booster',
    'brawler_booster':   'Brawler Booster',
    'nightshade_booster': 'Nightshade Booster',
    'warlord_booster':    'Warlord Booster'
}

const damage_modifier_items = {
	'strength_tonic': {
		raw: 10,
		bleed: 0,
		magic: 0,
		breath: 0
	},
    'magic_tonic': {
		raw: 0,
		bleed: 0,
		magic: 10,
		breath: 0
    },
    'bleed_tonic': {
		raw: 0,
		bleed: 10,
		magic: 0,
		breath: 0
	},
    'breath_tonic': {
		raw: 0,
		bleed: 0,
		magic: 0,
		breath: 10
	}, 
     'brawler_booster': {
		raw: 20,
		bleed: 20,
		magic: 0,
		breath: 0
	},
     'nightshade_booster': {
		raw: 0,
		bleed: 0,
		magic: 20,
		breath: 20
	},
     'warlord_booster': {
		raw: 30,
		bleed: 30,
		magic: 30,
		breath: 30
	}
}

const dps_items = {
	'dps_booster': {
		dps_boost: 1
	},
    'warlord_booster': {
		dps_boost: 2
	}
}

// Used for logging to verify that the skill has been inputted
// Also stores each skills proc chance (a value to roll equal or less than out of 10)
const skills = {
	'skill_aether_walker': {
		name: 'Aether Walker',
		effect: 'Increases chance to crit magic damage',
		proc_chance: 5
	},
	'skill_haunting_roar': {
		name: 'Haunting Roar',
		effect: 'Decreases opponent\'s natural resistance',
		proc_chance: 5
	},
	'skill_healing_aura': {
		name: 'Healing Aura',
		effect: 'Heals self at the end of battle',
		proc_chance: 5
	},
	'skill_inner_fire': {
		name: 'Inner Fire',
		effect: 'Increases chance to crit breath damage',
		proc_chance: 5
	},
	'skill_steadfast': {
		name: 'Steadfast',
		effect: 'Increases chance to crit raw damage',
		proc_chance: 5
	},
	'skill_swift_feet': {
		name: 'Swift Feet',
		effect: 'Goes first in battle',
		proc_chance: 5
	},
	'skill_bleed': {
		name: 'Bleed',
		effect: 'Increases chance to crit bleed damage',
		proc_chance: 5
	},
	'skill_armor': {
		name: 'Armor',
		effect: 'Increases own natural resistance',
		proc_chance: 5
	},
	'skill_dps': {
		name: 'DPS',
		effect: 'Increases self max DPS',
		proc_chance: 5
	}
};

// Stores a variety of values that will be used by skills
const skill_data = {
	// Skills modifying crit chance modify the dragon's phys_crit or mag_crit
	// depending on the specific damage type being affected

	// They are also split into offensive and defensive skills
	// OFFENSIVE: applied to self when the dragon is the attacker
	// DEFENSIVE: applied to the opponent when the dragon is the defender

	// The listed value is MATHEMATICALLY ADDED to the respective crit stat
	// which is measured out of 10 (crits are rolls that are less than the crit stat)
	// i.e. offensive skills should use positive values and defensive skills should use negative values
	offensive_crit_chance_skills: {
		'skill_aether_walker': {
			raw: 0,
			bleed: 0,
			magic: 1,
			breath: 0
		},
		'skill_steadfast': {
			raw: 1,
			bleed: 0,
			magic: 0,
			breath: 0
		},
		'skill_bleed': {
			raw: 0,
			bleed: 1,
			magic: 0,
			breath: 0
		},
		'skill_inner_fire': {
			raw: 0,
			bleed: 0,
			magic: 0,
			breath: 1
		}
	},
	defensive_crit_chance_skills: {

	},
	haunting_roar_res_reduction: 10,  	// This value will be deducted from the defender's res
	armor_res_boost: 10, 				// This value will be added to the defender's res
	healing_aura_heal: 100,
	dps_max_dps_increase: 1					// This value will be added to the attacker's max_dps
};

const familiars = {
	damage: {
		'dire_wolf': {
			name: 'Dire Wolf',
			raw: 30,
			bleed: 10,
			magic: 20,
			breath: 0
		},
		'basilisk': {
			name: 'Basilisk',
			raw: 20,
			bleed: 10,
			magic: 30,
			breath: 0
		},
		'phoenix': {
			name: 'Phoenix',
			raw: 20,
			bleed: 10,
			magic: 40, 
			breath: 0,
		}
	},
	healing: {
		'phoenix': {
			name: 'Phoenix',
			healing: 50
		}
	}
}

const aberrant_chance = 1; // must roll less than or equal to this out of 10

const aberrant_buffs = {
	25: {
		proc_chance: 1,
		max_raw: 10,
		max_bleed: 10,
		max_magic: 10, 
		max_breath: 10,
		self_dmg_proc_chance: 1,
		min_self_dmg: 10,
		max_self_dmg: 30
	},
	50: {
		proc_chance: 2,
		max_raw: 20,
		max_bleed: 20,
		max_magic: 20, 
		max_breath: 20,
		self_dmg_proc_chance: 3,
		min_self_dmg: 20,
		max_self_dmg: 60
	},
	100: {
		proc_chance: 3,
		max_raw: 30,
		max_bleed: 30,
		max_magic: 30, 
		max_breath: 30,
		self_dmg_proc_chance: 5,
		min_self_dmg: 30,
		max_self_dmg: 100
	}
};

// Inputs are retrieved in the setupDragons function

function rand(min, max) {
    var min = min || 0,
        max = max || Number.MAX_SAFE_INTEGER;

	return Math.floor(Math.random() * (max - min + 1)) + min;
}

var dragon_1;

var dragon_2;

var results = "";
var detailed_breakdown = "";

function fight() {
	// Assign the needed data to the dragon vars
	setupDragons();
	results = dragon_1.link + " vs " + dragon_2.link + "<br>";
	// Check for aberrant self damage.
	checkAberrantSelfDamage();
	if(dragon_1.health == 0 && dragon_2.health == 0)
	{
		results += "<br>Both dragons have been knocked out, and cannot continue!<br>";
		// Display final health
		results += dragon_1.name + " Final Health: " + dragon_1.health + "<br>";
		results += dragon_2.name + " Final Health: " + dragon_2.health + "<br>";
		return results;
	}
	else if(dragon_1.health == 0)
	{
		results += "<br>" + dragon_1.name + " been knocked out, and cannot continue!<br>";
		// Display final health
		results += dragon_1.name + " Final Health: " + dragon_1.health + "<br>";
		results += dragon_2.name + " Final Health: " + dragon_2.health + "<br>";
		return results;
	}
	else if(dragon_2.health == 0)
	{
		results += "<br>" + dragon_2.name + " been knocked out, and cannot continue!<br>";
		// Display final health
		results += dragon_1.name + " Final Health: " + dragon_1.health + "<br>";
		results += dragon_2.name + " Final Health: " + dragon_2.health + "<br>";
		return results;
	}
	// Roll to determine who goes first
	var first;
	var second;
	// Check for Swift Feet and whether they proc
	var swift_feet_1 = false;
	var swift_feet_2 = false;
	if(checkForSkill(dragon_1, 'skill_swift_feet')) {
		var proc_roll = rand(1, 10);
		swift_feet_1 = proc_roll <= skills['skill_swift_feet'].proc_chance;
		if(swift_feet_1) detailed_breakdown += dragon_1.name + formatSkillActivationLog('skill_swift_feet');
	}
	if(checkForSkill(dragon_2, 'skill_swift_feet')) {
		var proc_roll = rand(1, 10);
		swift_feet_2 = proc_roll <= skills['skill_swift_feet'].proc_chance;
		if(swift_feet_2) detailed_breakdown += dragon_2.name + formatSkillActivationLog('skill_swift_feet');
	}
	// If both or neither dragons have proc'd Swift Feet, do a coin flip
	if(swift_feet_1 == swift_feet_2) {
		if(swift_feet_1) detailed_breakdown += "Both dragons have activated Swift Feet; the order will therefore be decided by coin flip:<br>";
		if(rand(1, 2) == 1) {
			var first = dragon_1;
			var second = dragon_2;
		}
		else {
			var first = dragon_2;
			var second = dragon_1;
		}
	}
	else if(swift_feet_1) {
		var first = dragon_1;
		var second = dragon_2;
	}
	else if(swift_feet_2) {
		var first = dragon_2;
		var second = dragon_1;
	}
	results += first.name + " goes first.<br><br>"
	detailed_breakdown += first.name + " goes first.<br><br>";
	var first_dmg = calculateDamage(first, second);
	var second_part_attacked = rollBreakable(second);
	// Print damage of first dragon
	if(second_part_attacked == 'none') { results += first.name + " deals <b>" + first_dmg + "</b> damage to " + second.name + "!<br>"; }
	else { results += first.name + " aims for " + second.name + "'s " + second_part_attacked + ", dealing <b>" + first_dmg + "</b> damage!<br>"; }
	// Check if any of the 2nd dragon's armor breaks, adding to the results if it did
	results += armorCheck(second);
	// Add a statement like 'second has x health left!
	second.health = (second.health - first_dmg) < 0 ? 0 : second.health - first_dmg;
	results += second.name + " has " + second.health + " health left.<br>";
	// Check if second is K.O.-ed at this point
	// If so, end the fight and return the result
	if(second.health == 0) {
		// First gets to check for Healing Aura
		applyHealing(first);
		results += "<br>" + second.name + " was knocked out before they could attack, and the battle ends. " + first.name + " remains unharmed with " + first.health + " health left.<br>"
		// Display final health
		results += dragon_1.name + " Final Health: " + dragon_1.health + "<br>";
		results += dragon_2.name + " Final Health: " + dragon_2.health + "<br>";
	}
	else {
		results += "<br>";
		// Otherwise, repeat steps done for first (calc dmg, check for break, print health)
		var second_dmg = calculateDamage(second, first);
		var first_part_attacked = rollBreakable(first);
		// Print damage of second dragon
		if(first_part_attacked == 'none') { results += second.name + " deals <b>" + second_dmg + "</b> damage to " + first.name + "!<br>"; }
		else { results += second.name + " aims for " + first.name + "'s " + first_part_attacked + ", dealing <b>" + second_dmg + "</b> damage!<br>"; }
		// Check if any of the 1st dragon's armor breaks, adding to the results if it did
		results += armorCheck(first);
		// Add a statement like 'first has x health left!
		first.health = (first.health - second_dmg) < 0 ? 0 : first.health - second_dmg;
		results += first.name + " has " + first.health + " health left.<br><br>";
		// Check if first gets K.O.-ed
		if(first.health == 0) {
			// Second gets to check for Healing Aura
			applyHealing(second);
			results += "<br>" + first.name + " was knocked out, and the battle ends."
		}
		else {
			// Both dragons get to check for Healing Aura
			applyHealing(first);
			applyHealing(second);
			results += "<br>The battle ends.<br><br>";
		}
	}

	// Display final health
	results += dragon_1.name + " Final Health: " + dragon_1.health + "<br>";
	results += dragon_2.name + " Final Health: " + dragon_2.health + "<br>";

	// Check aberrant
	var aberrantRoll = rand(1, 10);
	// Only applies if exactly one dragon is Aberrant
	if(dragon_1.canPassAberrant && !dragon_2.canPassAberrant) {
		// Roll chance for dragon 2 to become Aberrant.
		if(aberrantRoll <= aberrant_chance) results += "In the scuffle, " + dragon_2.name + " was afflicted by aberrations from " + dragon_1.name + ". They are now an Aberrant dragon (25%).<br>";
	}
	else if(!dragon_1.canPassAberrant && dragon_2.canPassAberrant) {
		// Roll chance for dragon 1 to become Aberrant.
		if(aberrantRoll <= aberrant_chance) results += "In the scuffle, " + dragon_1.name + " was afflicted by aberrations from " + dragon_2.name + ". They are now an Aberrant dragon (25%).<br>";
	}
	
	return results;
}

// Function to load all the data on both dragons into a dictionary for ease of access when rolling
function setupDragons() {
	// Reset dragons
	dragon_1 = {
		name: '???',
		link: '???',
		health: 0,
		stats: {},  // filled with the stats of the corresponding class
		breaths: {}, // array of up to 2 objs
        familiars: {}, //allowed 2
        skills: {}, //allowed 4 
        items: {}, //allowed 2
		magic: {}, // should have 2 children: min and max (damage)
		armor: {
			chest: '???',
			total_rating: 0,
			bleed_res: 0,
			magic_res: 0
		},
		aberrantPercentage: 0,
		canPassAberrant: false,
		useBreakable: false,
		broken: [] // array of strings of alr broken parts
	}
	
	dragon_2 = {
		name: '???',
		link: '???',
		health: 0,
		stats: {}, // filled with the stats of the corresponding class
		breaths: {}, // array of up to 2 objs
        familiars: {}, //allowed 2
        skills: {}, //allowed 4 
        items: {}, //allowed 2
		magic: {}, // should have 2 children: min and max (damage)
		armor: {
			chest: '???',
			total_rating: 0,
			bleed_res: 0,
			magic_res: 0
		},
		aberrantPercentage: 0,
		canPassAberrant: false,
		useBreakable: false,
		broken: [] // array of strings of alr broken parts
	}

	// Setup dragon_1
	var import_link_1 = document.getElementById('1_link').value;
	var name_1 = document.getElementById('1_name').value;
	if(import_link_1 !== null && import_link_1.match(/^ *$/) === null) {
		dragon_1.name = getDragonName(import_link_1);
		dragon_1.link = getDragonLink(import_link_1);
	}
	else if(name_1) {
		dragon_1.name = name_1;
		dragon_1.link = name_1;
	}
	else {
		dragon_1.name = 'Dragon 1';
		dragon_1.link = 'Dragon 1';
	}
	dragon_1.health = parseInt(document.getElementById('1_health').value);
	Object.assign(dragon_1.stats, classes[document.getElementById('1_class').value]);
	var breath_1_1 = document.getElementById('1_breath_type_1').value;
	if(breath_1_1 != 'NA') {
		dragon_1.breaths[breath_1_1] = {};
		dragon_1.breaths[breath_1_1].tier = parseInt(document.getElementById('1_breath_tier_1').value);
		dragon_1.breaths[breath_1_1].max_dmg = breath_tier_dmgs[parseInt(document.getElementById('1_breath_tier_1').value)];
	}
	var breath_2_1 = document.getElementById('1_breath_type_2').value;
	if(breath_2_1 != 'NA') {
		dragon_1.breaths[breath_2_1] = {};
		dragon_1.breaths[breath_2_1].tier = parseInt(document.getElementById('1_breath_tier_2').value);
		dragon_1.breaths[breath_2_1].max_dmg = breath_tier_dmgs[parseInt(document.getElementById('1_breath_tier_2').value)];
	}
	Object.assign(dragon_1.magic, magic_classes[document.getElementById('1_magic').value]);

	// Dragon 1 familiars
	var familiar_1_1 = document.getElementById('1_familiar_1').value;
	var familiar_2_1 = document.getElementById('1_familiar_2').value;

	if(familiar_1_1 != 'NA') dragon_1.familiars[familiar_1_1] = 1;
    if(familiar_2_1 != 'NA') dragon_1.familiars[familiar_2_1] = 1;
	
	// Dragon 1 skills
    var skill_1_1 = document.getElementById('1_skill_1').value;
    var skill_2_1 = document.getElementById('1_skill_2').value;
    var skill_3_1 = document.getElementById('1_skill_3').value;
    var skill_4_1 = document.getElementById('1_skill_4').value;

	if(skill_1_1 != 'NA') dragon_1.skills[skill_1_1] = skills[skill_1_1];
    if(skill_2_1 != 'NA') dragon_1.skills[skill_2_1] = skills[skill_2_1];
    if(skill_3_1 != 'NA') dragon_1.skills[skill_3_1] = skills[skill_3_1];
    if(skill_4_1 != 'NA') dragon_1.skills[skill_4_1] = skills[skill_4_1];

	// Dragon 1 items
	var item_1_1 = document.getElementById('1_item_1').value;
	var item_2_1 = document.getElementById('1_item_2').value;
	// Add items as key values, using the value as the number of that particular item being used
	// Currently all items treated as non-stacking, as the code will overwrite each other if items are repeated
	if(item_1_1 != 'NA') dragon_1.items[item_1_1] = 1;
	if(item_2_1 != 'NA') dragon_1.items[item_2_1] = 1;

	// Dragon 1 Chest
	dragon_1.armor.chest = document.getElementById('1_chest').value;
	if(dragon_1.armor.chest != 'NA') {
		var chest_type_1 = armor_sets[dragon_1.armor.chest];
		dragon_1.armor.total_rating += chest_type_1.chest;
		dragon_1.armor.bleed_res += chest_type_1.bleed_res;
		dragon_1.armor.magic_res += chest_type_1.magic_res;
	}

	// Dragon 1 Aberrant
	dragon_1.aberrantPercentage = parseInt(document.getElementById('1_aberrant_percentage').value);
	dragon_1.canPassAberrant = document.getElementById('1_can_pass_aberrant').checked;
	
	// Dragon 1 Part Break
	dragon_1.useBreakable = document.getElementById('1_use_breakable').checked;
	if(document.getElementById('1_head_part').checked) { dragon_1.broken.push('head'); }
	if(document.getElementById('1_tail_part').checked) { dragon_1.broken.push('tail'); }
	if(document.getElementById('1_legs_part').checked) { dragon_1.broken.push('legs'); }



	// Setup dragon_2
	var import_link_2 = document.getElementById('2_link').value;
	var name_2 = document.getElementById('2_name').value;
	if(import_link_2 !== null && import_link_2.match(/^ *$/) === null) {
		dragon_2.name = getDragonName(import_link_2);
		dragon_2.link = getDragonLink(import_link_2);
	}
	else if(name_2) {
		dragon_2.name = name_2;
		dragon_2.link = name_2;
	}
	else {
		dragon_2.name = 'Dragon 2';
		dragon_2.link = 'Dragon 2';
	}
	dragon_2.health = parseInt(document.getElementById('2_health').value);
	Object.assign(dragon_2.stats, classes[document.getElementById('2_class').value]);
	var breath_1_2 = document.getElementById('2_breath_type_1').value;
	if(breath_1_2 != 'NA') {
		dragon_2.breaths[breath_1_2] = {};
		dragon_2.breaths[breath_1_2].tier = parseInt(document.getElementById('2_breath_tier_1').value);
		dragon_2.breaths[breath_1_2].max_dmg = breath_tier_dmgs[parseInt(document.getElementById('2_breath_tier_1').value)];
	}
	var breath_2_2 = document.getElementById('2_breath_type_2').value;
	if(breath_2_2 != 'NA') {
		dragon_2.breaths[breath_2_2] = {};
		dragon_2.breaths[breath_2_2].tier = parseInt(document.getElementById('2_breath_tier_2').value);
		dragon_2.breaths[breath_2_2].max_dmg = breath_tier_dmgs[parseInt(document.getElementById('2_breath_tier_2').value)];
	}
	Object.assign(dragon_2.magic, magic_classes[document.getElementById('2_magic').value]);

	// Dragon 2 familiars
	var familiar_1_2 = document.getElementById('2_familiar_1').value;
	var familiar_2_2 = document.getElementById('2_familiar_2').value;

	if(familiar_1_2 != 'NA') dragon_2.familiars[familiar_1_2] = 1;
    if(familiar_2_2 != 'NA') dragon_2.familiars[familiar_2_2] = 1;
	
	// Dragon 2 skills
    var skill_1_2 = document.getElementById('2_skill_1').value;
    var skill_2_2 = document.getElementById('2_skill_2').value;
    var skill_3_2 = document.getElementById('2_skill_3').value;
    var skill_4_2 = document.getElementById('2_skill_4').value;

	if(skill_1_2 != 'NA') dragon_2.skills[skill_1_2] = skills[skill_1_2];
    if(skill_2_2 != 'NA') dragon_2.skills[skill_2_2] = skills[skill_2_2];
    if(skill_3_2 != 'NA') dragon_2.skills[skill_3_2] = skills[skill_3_2];
    if(skill_4_2 != 'NA') dragon_2.skills[skill_4_2] = skills[skill_4_2];

	// Dragon 2 items
	var item_1_2 = document.getElementById('2_item_1').value;
	var item_2_2 = document.getElementById('2_item_2').value;
	// Add items as key values, using the value as the number of that particular item being used
	// Currently all items treated as non-stacking, as the code will overwrite each other if items are repeated
	if(item_1_2 != 'NA') dragon_2.items[item_1_2] = 1;
	if(item_2_2 != 'NA') dragon_2.items[item_2_2] = 1;

	// Dragon 2 Chest
	dragon_2.armor.chest = document.getElementById('2_chest').value;
	if(dragon_2.armor.chest != 'NA') {
		var chest_type_2 = armor_sets[dragon_2.armor.chest];
		dragon_2.armor.total_rating += chest_type_2.chest;
		dragon_2.armor.bleed_res += chest_type_2.bleed_res;
		dragon_2.armor.magic_res += chest_type_2.magic_res;
	}

	// Dragon 2 Aberrant
	dragon_2.aberrantPercentage = parseInt(document.getElementById('2_aberrant_percentage').value);
	dragon_2.canPassAberrant = document.getElementById('2_can_pass_aberrant').checked;
	
	// Dragon 2 Part Break
	dragon_2.useBreakable = document.getElementById('2_use_breakable').checked;
	if(document.getElementById('2_head_part').checked) { dragon_2.broken.push('head'); }
	if(document.getElementById('2_tail_part').checked) { dragon_2.broken.push('tail'); }
	if(document.getElementById('2_legs_part').checked) { dragon_2.broken.push('legs'); }

	applyAberrant();
}

// Check both dragons for Aberrant. If present, try to proc, adding buffs accordingly.
function applyAberrant()
{
	// Dragon 1
	// Aberrant percentage defaults to zero.
	if(dragon_1.aberrantPercentage > 0)
	{
		var aberrant_data = aberrant_buffs[dragon_1.aberrantPercentage];
		// Try proc for each kind of damage.
		var proc_roll;
		// Raw
		proc_roll = rand(1, 10);
		if(proc_roll <= aberrant_data.proc_chance)
		{
			dragon_1.stats.max_raw += aberrant_data.max_raw;
			detailed_breakdown += dragon_1.name + '\'s Aberrant affliction have given them a ' + aberrant_data.max_raw + ' point buff to their maximum possible Raw damage!<br><br>';
		}
		// Bleed
		proc_roll = rand(1, 10);
		if(proc_roll <= aberrant_data.proc_chance)
		{
			dragon_1.stats.max_bleed += aberrant_data.max_bleed;
			detailed_breakdown += dragon_1.name + '\'s Aberrant affliction have given them a ' + aberrant_data.max_bleed + ' point buff to their maximum possible Bleed damage!<br><br>';
		}
		// Magic
		proc_roll = rand(1, 10);
		if(proc_roll <= aberrant_data.proc_chance)
		{
			dragon_1.stats.max_magic += aberrant_data.max_magic;
			detailed_breakdown += dragon_1.name + '\'s Aberrant affliction have given them a ' + aberrant_data.max_magic + ' point buff to their maximum possible Magic damage!<br><br>';
		}
		// Breath
		proc_roll = rand(1, 10);
		if(proc_roll <= aberrant_data.proc_chance)
		{
			dragon_1.stats.max_breath += aberrant_data.max_breath;
			detailed_breakdown += dragon_1.name + '\'s Aberrant affliction have given them a ' + aberrant_data.max_breath + ' point buff to their maximum possible Breath damage!<br><br>';
		}
	}

	// Dragon 2
	// Aberrant percentage defaults to zero.
	if(dragon_2.aberrantPercentage > 0)
	{
		var aberrant_data = aberrant_buffs[dragon_2.aberrantPercentage];
		// Try proc for each kind of damage.
		var proc_roll;
		// Raw
		proc_roll = rand(1, 10);
		if(proc_roll <= aberrant_data.proc_chance)
		{
			dragon_2.stats.max_raw += aberrant_data.max_raw;
			detailed_breakdown += dragon_2.name + '\'s Aberrant affliction have given them a ' + aberrant_data.max_raw + ' point buff to their maximum possible Raw damage!<br><br>';
		}
		// Bleed
		proc_roll = rand(1, 10);
		if(proc_roll <= aberrant_data.proc_chance)
		{
			dragon_2.stats.max_bleed += aberrant_data.max_bleed;
			detailed_breakdown += dragon_2.name + '\'s Aberrant affliction have given them a ' + aberrant_data.max_bleed + ' point buff to their maximum possible Bleed damage!<br><br>';
		}
		// Magic
		proc_roll = rand(1, 10);
		if(proc_roll <= aberrant_data.proc_chance)
		{
			dragon_2.stats.max_magic += aberrant_data.max_magic;
			detailed_breakdown += dragon_2.name + '\'s Aberrant affliction have given them a ' + aberrant_data.max_magic + ' point buff to their maximum possible Magic damage!<br><br>';
		}
		// Breath
		proc_roll = rand(1, 10);
		if(proc_roll <= aberrant_data.proc_chance)
		{
			dragon_2.stats.max_breath += aberrant_data.max_breath;
			detailed_breakdown += dragon_2.name + '\'s Aberrant affliction have given them a ' + aberrant_data.max_breath + ' point buff to their maximum possible Breath damage!<br><br>';
		}
	}
}

function checkAberrantSelfDamage()
{
	// Check for dragon 1.
	if(dragon_1.aberrantPercentage > 0)
	{
		var aberrant_data = aberrant_buffs[dragon_1.aberrantPercentage];
		var proc_roll = rand(1, 10);
		
		if(proc_roll <= aberrant_data.self_dmg_proc_chance)
		{
			var selfDmg = rand(aberrant_data.min_self_dmg, aberrant_data.max_self_dmg);
			dragon_1.health -= selfDmg;
			if(dragon_1.health < 0) dragon_1.health = 0;
			var resultString = dragon_1.name + '\'s Aberrant affliction causes them to momentarily lose control of their magic, and it deals ' + selfDmg + ' damage to them, leaving them with ' + dragon_1.health + ' HP.<br><br>';
			results += resultString;
			detailed_breakdown += resultString;
		}
	}

	// Check for dragon 2.
	if(dragon_2.aberrantPercentage > 0)
	{
		var aberrant_data = aberrant_buffs[dragon_2.aberrantPercentage];
		var proc_roll = rand(1, 10);
		
		if(proc_roll <= aberrant_data.self_dmg_proc_chance)
		{
			var selfDmg = rand(aberrant_data.min_self_dmg, aberrant_data.max_self_dmg);
			dragon_2.health -= selfDmg;
			if(dragon_2.health < 0) dragon_2.health = 0;
			var resultString = dragon_2.name + '\'s Aberrant affliction causes them to momentarily lose control of their magic, and it deals ' + selfDmg + ' damage to them, leaving them with ' + dragon_2.health + ' HP.<br><br>';
			results += resultString;
			detailed_breakdown += resultString;
		}
	}
}

function calculateDamage(attacker, defender) {
	var dps = 1;
	var max_dps = attacker.stats.max_dps;
	// Check for DPS skill to increase the max dps
	if(checkForSkill(attacker, 'skill_dps')) {
		var dps_skill_roll = rand(1, 10);
		if(dps_skill_roll <= skills['skill_dps'].proc_chance) {
			detailed_breakdown += attacker.name + formatSkillActivationLog('skill_dps');
			max_dps += skill_data.dps_max_dps_increase;
		}
	}
	// Roll DPS (number of times attacker will roll raw+bleed dmg)
	for(let i = 1; i < max_dps; i++) {
		var roll_dps = rand(1, 10);
		if(roll_dps <= dps_chance[i+1]) {
			dps++;
		}
		else {
			break; // Stop the loop entirely
		}
	}
	// Apply DPS item(s)
	Object.keys(dps_items).forEach(item => {
		if(checkForItem(attacker, item)) {
			var dps_info = dps_items[item];
			console.log(dps_info);
			detailed_breakdown += "The use of " + item_names[item] + " grants " + attacker.name + " " + dps_info.dps_boost + " more attack(s)!<br>";
			dps += dps_info.dps_boost;
		}
	});

	detailed_breakdown += attacker.name + " goes for " + dps + " attack(s)!<br>"
	
	// Calculate the crit chances for each type of damage
	// -> Class base chance + offensive skills + defensive skills

	// Initialise raw and bleed crit chances with the attacker's physical crit
	var raw_crit_check = attacker.stats.phys_crit;
	var bleed_crit_check = attacker.stats.phys_crit;
	// Initialise magic crit chance with the attacker's physical crit
	var magic_crit_check = attacker.stats.mag_crit;
	// Use the global breath crit chance
	var breath_crit_check = breath_crit;

	// Check for crit modifying skills on the attacker
	var attacker_offensive_crit_skills = getOffensiveCritSkills(attacker);
	Object.keys(attacker_offensive_crit_skills).forEach(skill => {
		var skill_info = attacker_offensive_crit_skills[skill];
		// Check if the skill procs first
		var skill_proc = rand(1, 10);
		if(skill_proc <= skill_info.proc_chance) {
			detailed_breakdown += attacker.name + formatSkillActivationLog(skill);
			raw_crit_check += skill_info.raw;
			bleed_crit_check += skill_info.bleed;
			magic_crit_check += skill_info.magic;
			breath_crit_check += skill_info.breath;
		}
	});
	// Check for crit modifying skills on the defender
	var defender_defensive_crit_skills = getDefensiveCritSkills(defender);
	Object.keys(defender_defensive_crit_skills).forEach(skill => {
		var skill_info = defender_defensive_crit_skills[skill];
		// Check if the skill procs first
		var skill_proc = rand(1, 10);
		if(skill_proc <= skill_info.proc_chance) {
			detailed_breakdown += defender.name + formatSkillActivationLog(skill);
			raw_crit_check += skill_info.raw;
			bleed_crit_check += skill_info.bleed;
			magic_crit_check += skill_info.magic;
			breath_crit_check += skill_info.breath;
		}
	});

	// Create 2 vars: one for raw and one for bleed
	var raw_dmg = 0;
	var bleed_dmg = 0;
	// For each DPS (use a loop!):
	//   1. Roll for raw crit
	//     - On crit, add max_raw to raw_dmg
	//     - Else, add rand betw min_raw and max_raw
	//   2. Roll for bleed crit
	//     - On crit, add max_bleed to bleed_dmg
	//     - Else, add rand betw 1 and max_bleed
	for(let r = 0; r < dps; r++) {
		detailed_breakdown += "> Attack #" + (r+1) + "<br>";
		var raw_round = 0;
		var bleed_round = 0;
		var roll_raw_crit = rand(1, 10);

		if(roll_raw_crit <= raw_crit_check) {
			detailed_breakdown += "* " + attacker.name + " crits their Raw attack this round.<br>"
			raw_round = attacker.stats.max_raw;
        } else {
			raw_round = rand(attacker.stats.min_raw, attacker.stats.max_raw);
		}
		var roll_bleed_crit = rand(1, 10);
		if(roll_bleed_crit <= bleed_crit_check) {
			detailed_breakdown += "* " + attacker.name + " crits their Bleed attack this round.<br>"
			bleed_round = attacker.stats.max_bleed;
		}
		else {
			bleed_round = rand(1, attacker.stats.max_bleed);
		}
		raw_dmg += raw_round;
		bleed_dmg += bleed_round;
		detailed_breakdown += "-> Raw Damage: " + raw_round + "<br>";
		// Apply damage modifier items
		Object.keys(attacker.items).forEach(item => {
			if(damage_modifier_items[item] && damage_modifier_items[item].raw != 0) {
				// Add modifier damage value multiplied by the stack size
				// Currently stack size should not go over 1
				raw_dmg += damage_modifier_items[item].raw * attacker.items[item];
				detailed_breakdown += "An additional " + damage_modifier_items[item].raw + " Raw Damage is dealt due to the effects of " + item_names[item] + "<br>";
			}
		});
		// Apply damage familiars
		Object.keys(attacker.familiars).forEach(familiar => {
			var familiar_data = familiars.damage[familiar];
			if(familiar_data && familiar_data.raw != 0) {
				// Add modifier damage value multiplied by the stack size
				// Currently stack size should not go over 1
				raw_dmg += familiar_data.raw * attacker.familiars[familiar];
				detailed_breakdown += attacker.name + "'s " + familiar_data.name + " springs into action, dealing " + familiar_data.raw + " Raw Damage!<br>";
			}
		});
		detailed_breakdown += "-> Bleed Damage: " + bleed_round + "<br>";
        // Apply damage modifier items
		Object.keys(attacker.items).forEach(item => {
			if(damage_modifier_items[item] && damage_modifier_items[item].bleed != 0) {
				// Add modifier damage value multiplied by the stack size
				// Currently stack size should not go over 1
				bleed_dmg += damage_modifier_items[item].bleed * attacker.items[item];
				detailed_breakdown += "An additional " + damage_modifier_items[item].bleed + " Bleed Damage is dealt due to the effects of " + item_names[item] + "<br>";
			}
		});
		// Apply damage familiars
		Object.keys(attacker.familiars).forEach(familiar => {
			var familiar_data = familiars.damage[familiar];
			if(familiar_data && familiar_data.bleed != 0) {
				// Add modifier damage value multiplied by the stack size
				// Currently stack size should not go over 1
				bleed_dmg += familiar_data.bleed * attacker.familiars[familiar];
				detailed_breakdown += attacker.name + "'s " + familiar_data.name + " springs into action, dealing " + familiar_data.bleed + " Bleed Damage!<br>";
			}
		});
		detailed_breakdown += "<br>";
	}
	detailed_breakdown += "Total Raw Damage: " + raw_dmg + "<br>";
	detailed_breakdown += "Total Bleed Damage: " + bleed_dmg + "<br>";
	detailed_breakdown += "<br>";
	// Modify the raw_dmg by accounting for random deflect chance, and defender's flat res
	var roll_deflect = rand(1, 10);
	raw_dmg *= (1 - deflect_chance[roll_deflect]);
	raw_dmg = Math.trunc(raw_dmg);
	detailed_breakdown += defender.name + " was able to deflect <b>" + (deflect_chance[roll_deflect]*100) + "%</b> of the Raw damage, reducing it to <b>" + raw_dmg + "</b>.<br>";
	// Check for attacker's Haunting Roar
	var defender_res = defender.stats.base_res;
	if(checkForSkill(attacker, 'skill_haunting_roar')) {
		var haunting_roar_roll = rand(1, 10);
		if(haunting_roar_roll <= skills['skill_haunting_roar'].proc_chance) {
			detailed_breakdown += attacker.name + formatSkillActivationLog('skill_haunting_roar');
			defender_res -= skill_data.haunting_roar_res_reduction;
			detailed_breakdown += defender.name + "'s natural resistance has fallen to " + defender_res + ".<br>";
		}
	}
	// Check for defender's Armor
	if(checkForSkill(defender, 'skill_armor')) {
		var armor_roll = rand(1, 10);
		if(armor_roll <= skills['skill_armor'].proc_chance) {
			detailed_breakdown += defender.name + formatSkillActivationLog('skill_armor');
			defender_res += skill_data.armor_res_boost;
			detailed_breakdown += defender.name + "'s natural resistance has increased to " + defender_res + ".<br>";
		}
	}		
	// Resistance cannot be less than 0
	if(defender_res < 0) {
		defender_res = 0;
		detailed_breakdown += defender.name + "'s natural resistance cannot be negative, and has been set to 0.<br>";
	}
	raw_dmg -= defender_res;
	detailed_breakdown += defender.name + "'s natural resistance of <b>" + defender_res + "</b> helped to reduce the Raw damage to <b>" + raw_dmg + "</b>.<br>";
	// Do armor check if armor is equipped, reduce raw_dmg as necessary
	var roll_armor_deflect = 0;
	if(defender.armor.total_rating > 0) {
		roll_armor_deflect = rand(defender.armor.total_rating/2, defender.armor.total_rating);
		raw_dmg -= roll_armor_deflect;
		raw_dmg = Math.trunc(raw_dmg);
	}
	detailed_breakdown += "Finally, their armor (or lack thereof) means that <b>" + roll_armor_deflect + "</b> is reduced from Raw damage to give <b>" + raw_dmg + "</b>.<br>";
	// Raw damage cannot be less than 0
	if(raw_dmg < 0) {
		raw_dmg = 0;
		detailed_breakdown += "Raw damage cannot be negative, and has been set to 0.<br>";
	}

	// Deduct bleed_res from armor
	bleed_dmg -= defender.armor.bleed_res;
	// Bleed damage cannot be less than 0
	if(bleed_dmg < 0) { bleed_dmg = 0; }
	detailed_breakdown += defender.name + "'s armor offers <b>" + defender.armor.bleed_res + "</b> points of Bleed resistance, and so Bleed damage is <b>" + bleed_dmg + "</b>.<br>";

	// Roll magic dmg, if present
	var magic_dmg = 0;
	if(Object.keys(attacker.magic).length > 0) {
		var roll_magic_crit = rand(1, 10);
		if(roll_magic_crit <= magic_crit_check) {
			detailed_breakdown += attacker.name + " is able to land a critical Magic attack! ";
			magic_dmg = attacker.magic.max_dmg;
		}
		else {
			magic_dmg = rand(attacker.magic.min_dmg, attacker.magic.max_dmg);
		}
		detailed_breakdown += attacker.name + " harnesses their magic to attack for <b>" + magic_dmg + "</b> Magic damage.<br>";
        // Apply damage modifier items
		Object.keys(attacker.items).forEach(item => {
			if(damage_modifier_items[item] && damage_modifier_items[item].magic != 0) {
				// Add modifier damage value multiplied by the stack size
				// Currently stack size should not go over 1
				magic_dmg += damage_modifier_items[item].magic * attacker.items[item];
				detailed_breakdown += "An additional " + damage_modifier_items[item]. magic + " Magic Damage is dealt due to the effects of " + item_names[item] + "<br>";
			}
		});
		// Apply damage familiars
		Object.keys(attacker.familiars).forEach(familiar => {
			var familiar_data = familiars.damage[familiar];
			if(familiar_data && familiar_data.magic != 0) {
				// Add modifier damage value multiplied by the stack size
				// Currently stack size should not go over 1
				magic_dmg += familiar_data.magic * attacker.familiars[familiar];
				detailed_breakdown += attacker.name + "'s " + familiar_data.name + " springs into action, dealing " + familiar_data.magic + " Magic Damage!<br>";
			}
		});
		// Deduct magic_res from armor
		magic_dmg -= defender.armor.magic_res;
		// Bleed damage cannot be less than 0
		if(magic_dmg < 0) { magic_dmg = 0; }
		detailed_breakdown += defender.name + "'s armor offers <b>" + defender.armor.magic_res + "</b> points of Magic resistance, and so Magic damage is <b>" + magic_dmg + "</b>.<br>";
	}

	// Roll breath dmg, if a breath exists
	var breath_dmg = 0;
	// Breaths: tier 1 = 10, tier 2 = 20...
	// Strong breaths do double damage
	// Same min_dmg for all (0)
	// Select breath based on max_dmg (x2 if strong); this will always select the breath with greater max
	if(Object.keys(attacker.breaths).length > 0) {
		// var used_breath = '';
		// just find the greatest possible max_dmg available from the breaths the dragon has
		var chosen_breath = '?? error';
		var highest_max_dmg = 0; 
		Object.keys(attacker.breaths).forEach(att => {
			// Check for weaknesses
			// Check if the defender has any breaths, if not, skip to setting the breath
			if(Object.keys(defender.breaths).length > 0) {
				// Check if any of the defender's breaths are weak to this breath
				Object.keys(defender.breaths).forEach(def => {
					if(breath_weaknesses[def] == att) {
						// If defender breath is weak, double the attacker's breath max_dmg
						attacker.breaths[att].max_dmg *= 2;
					}
				});
			}
			if(attacker.breaths[att].max_dmg > highest_max_dmg) {
				chosen_breath = capitaliseFirstLetter(att);
				highest_max_dmg = attacker.breaths[att].max_dmg; 
			}
			// !! wait this is unnecessary if the user doesn't need to know WHAT breath is used
			// Determine if breath is stronger than the one in the used_breath var
			// If empty or if stronger, assign current breath
			// If equal max_dmg, roll 50/50 on which to use
			// (this method shouldn't be a problem as there can only be up to 2 breaths anyway)
			// if(used_breath == '' || attacker.breaths[used_breath].max_dmg < attacker.breaths[att].max_dmg) { used_breath = att; }
			// else if (attacker.breaths[used_breath].max_dmg == attacker.breaths[att].max_dmg) { used_breath = (rand(1,2) == 1 ? used_breath : att); }
		});
		var roll_breath_crit = rand(1, 10);
		// breath_crit is a blanket value set at top of file
		if(roll_breath_crit <= breath_crit_check) {
			detailed_breakdown += attacker.name + " is able to land a critical Breath attack! ";
			breath_dmg = highest_max_dmg;
		}
		else {
			breath_dmg = rand(0, highest_max_dmg);
		}
		detailed_breakdown += attacker.name + " breathes " + chosen_breath + " to deal <b>" + breath_dmg + "</b> Breath damage.<br>";

        // Apply damage modifier items
		Object.keys(attacker.items).forEach(item => {
			if(damage_modifier_items[item] && damage_modifier_items[item].breath != 0) {
				// Add modifier damage value multiplied by the stack size
				// Currently stack size should not go over 1
				breath_dmg += damage_modifier_items[item].breath * attacker.items[item];
				detailed_breakdown += "An additional " + damage_modifier_items[item].breath + " Breath Damage is dealt due to the effects of " + item_names[item] + "<br>";
			}
		});
		// Apply damage familiars
		Object.keys(attacker.familiars).forEach(familiar => {
			var familiar_data = familiars.damage[familiar];
			if(familiar_data && familiar_data.breath != 0) {
				// Add modifier damage value multiplied by the stack size
				// Currently stack size should not go over 1
				breath_dmg += familiar_data.breath * attacker.familiars[familiar];
				detailed_breakdown += attacker.name + "'s " + familiar_data.name + " springs into action, dealing " + familiar_data.breath + " Breath Damage!<br>";
			}
		});
	}
	var total_dmg = raw_dmg + bleed_dmg + magic_dmg + breath_dmg;
	detailed_breakdown += "Summary of " + attacker.name + "'s Turn:<br>DPS: " + dps + "<br>Raw: " + raw_dmg + "<br>Bleed: " + bleed_dmg + "<br>Magic: " + magic_dmg + "<br>Breath: " + breath_dmg + "<br><b>Total:</b> " + total_dmg + "<br><br>";
	return total_dmg
}


function armorCheck(defender) {
	// Check if all pieces are the same set and not NA, if so, max 1 piece can be broken
	// Otherwise, each piece is rolled separately
	var broken = "";
	if(defender.armor.chest != 'NA' ) {
		var roll_set = rand(1, 10);
		if(roll_set < armor_sets[defender.armor.chest].break_chance) {
			// Select one piece to be broken; 1 =  helm, 2 = chest, 3 = tail
			var roll_broken_piece = rand(1);
			var broken_piece = " Armor";
			broken += capitaliseFirstLetter(defender.armor.chest) + broken_piece + "<br>";
		}
	}

	if(broken != "") { broken = defender.name + "'s armor was broken in the attack <br>"; }
	return broken;
}

function applyHealing(dragon)
{
	var old_health = dragon.health;
	applyHealingAura(dragon);
	// Apply healing familiars
	Object.keys(dragon.familiars).forEach(familiar => {
		var familiar_data = familiars.healing[familiar];
		if(familiar_data) {
			// Add modifier damage value multiplied by the stack size
			// Currently stack size should not go over 1
			dragon.health += familiar_data.healing * dragon.familiars[familiar];
			detailed_breakdown += dragon.name + "'s " + familiar_data.name + " springs into action, healing " + familiar_data.healing + " Health!<br>";
		}
	});
	if(dragon.health != old_health) {
		var health_healed = dragon.health - old_health;
		results += dragon.name + " has healed <b>" + health_healed + "</b> Health, and is now at " + dragon.health + " Health.<br>";
		detailed_breakdown += "<b>Total Health Healed:</b> " + health_healed + "<br>";
	}
}

function rollBreakable(dragon) {
	// Duplicate breakable dict
	if(!dragon.useBreakable) { return 'none'; }
	var temp = {};
	Object.assign(temp, breakable);
	dragon.broken.forEach(part => {
		temp['none'] += temp[part];
		delete temp[part];
	});
	var table_keys = Object.keys(temp);
	var total_chance = 0;
	for(let i = 0; i < table_keys.length; i++) { total_chance += temp[table_keys[i]]; }
	var rand_num = rand(1, total_chance);
	for(let i = 0; i < table_keys.length; i++) {
		if(rand_num <= temp[table_keys[i]]) { return table_keys[i]; }
		else { rand_num -= temp[table_keys[i]]; }
	}
	return "error!!?"
}

function roll() {
	detailed_breakdown = "";
	document.getElementById("result").innerHTML = fight();
	document.getElementById("detailed_breakdown").innerHTML = detailed_breakdown;
	document.getElementById("dragon_details").innerHTML = printDragonDetails(dragon_1) + "<br><br>" + printDragonDetails(dragon_2);
}

function clearForms() {
	document.getElementById("result").innerHTML = "";
}

function getDragonLink(import_link) {
    var x = import_link.split('/');
	var y = x[5].split('-');
    var name = "";
    // Regular expression matching digit only strings to stop at the dragon id
    var num_only = new RegExp("^\\d+$");
    var char_num = new RegExp("[a-zA-Z]{1}\\d");
    for(let i = 0; i < y.length; i++) {
        name += y[i];
        // If id parsed, stop
        if(num_only.test(y[i]) || char_num.test(y[i])) {
            break;
        }
        name += " ";
    }
    return "<a href='" + import_link + "'>" + name + "</a>";
}

function getDragonName(import_link) {
    var x = import_link.split('/');
	var y = x[5].split('-');
    return y[0];
}

function printDragonDetails(dragon) {
	var dragon_string = dragon.link + " details:<br>";
	dragon_string += "Name: " + dragon.name + "<br>";
	dragon_string += "Health: " + dragon.health + "<br>";
	dragon_string += "<br>";
	dragon_string += "Class Stats: " + "<br>";
	dragon_string += "> Physical Crit: " + dragon.stats.phys_crit + "<br>";
	dragon_string += "> Min/Max Raw Damage: " + dragon.stats.min_raw + "/" + dragon.stats.max_raw + "<br>";
	dragon_string += "> Min/Max Bleed: 0/" + dragon.stats.max_bleed + "<br>";
	dragon_string += "> Max DPS: " + dragon.stats.max_dps + "<br>";
	dragon_string += "> Base Resistance: " + dragon.stats.base_res + "<br>";
	dragon_string += "> Magic Crit: " + dragon.stats.mag_crit + "<br>";
	dragon_string += "Min/Max Magic: " + (Object.keys(dragon.magic).length <= 0 ? "0/0" : dragon.magic.min_dmg + "/" + dragon.magic.max_dmg) + "<br>";
	dragon_string += "<br>";
	dragon_string += "Breath Crit: " + breath_crit + " (Blanket Value for all dragons)<br>";
	dragon_string += "Breaths: " + (Object.keys(dragon.breaths).length <= 0 ? "None" : "") + "<br>";
	Object.keys(dragon.breaths).forEach(breath => {
		dragon_string += "> " + capitaliseFirstLetter(breath) + "<br>";
		dragon_string += "-> Tier " + dragon.breaths[breath].tier + "<br>";
		dragon_string += "-> Strong against " + capitaliseFirstLetter(breath_weaknesses[breath]) + "<br>",
		dragon_string += "-> Min/Max Damage: 0/" + dragon.breaths[breath].max_dmg + "<br>";
	});
	dragon_string += "<br>";
	dragon_string += "Familiars: " + (Object.keys(dragon.items).length <= 0 ? "None" : "") + "<br>";
	Object.keys(dragon.familiars).forEach(familiar => {
		if(Object.keys(familiars.damage).includes(familiar)) {
			var familiar_info = familiars.damage[familiar];
			dragon_string += "> " + familiar_info.name + "<br>";
			if(familiar_info.raw > 0) dragon_string += "-> Raw Damage Boost: " + familiar_info.raw + "<br>";
			if(familiar_info.bleed > 0) dragon_string += "-> Bleed Damage Boost: " + familiar_info.bleed + "<br>";
			if(familiar_info.magic > 0) dragon_string += "-> Magic Damage Boost: " + familiar_info.magic + "<br>";
			if(familiar_info.breath > 0) dragon_string += "-> Breath Damage Boost: " + familiar_info.breath + "<br>";
		} else if(Object.keys(familiars.healing).includes(familiar)) {
			var familiar_info = familiars.healing[familiar];
			dragon_string += "> " + familiar_info.name + "<br>";
			dragon_string += "-> Healing: " + familiar_info.healing + "<br>";
		}
	});
	dragon_string += "Skills: " + (Object.keys(dragon.skills).length <= 0 ? "None" : "") + "<br>";
	Object.keys(dragon.skills).forEach(skill => {
		var skill_info = dragon.skills[skill];
		dragon_string += "> " + skill_info.name + "<br>";
		dragon_string += skill_info.effect + "<br>";
		dragon_string += "-> Proc Chance: " + skill_info.proc_chance + "<br>";
	});
	dragon_string += "<br>";
	dragon_string += "Items: " + (Object.keys(dragon.items).length <= 0 ? "None" : "") + "<br>";
	Object.keys(dragon.items).forEach(item => {
		dragon_string += "> " + item_names[item] + "<br>";
		if(Object.keys(damage_modifier_items).includes(item)) {
			var item_info = damage_modifier_items[item];
			if(item_info.raw > 0) dragon_string += "-> Raw Damage Boost: " + item_info.raw + "<br>";
			if(item_info.bleed > 0) dragon_string += "-> Bleed Damage Boost: " + item_info.bleed + "<br>";
			if(item_info.magic > 0) dragon_string += "-> Magic Damage Boost: " + item_info.magic + "<br>";
			if(item_info.breath > 0) dragon_string += "-> Breath Damage Boost: " + item_info.breath + "<br>";
		} else if(Object.keys(dps_items).includes(item)) {
			var item_info = dps_items[item];
			dragon_string += "-> DPS Boost: " + item_info.dps_boost + "<br>";
		}
	});
	dragon_string += "<br>";
	dragon_string += "Armor: " + "<br>";
	dragon_string += "> " + capitaliseFirstLetter(dragon.armor.chest) + " Chest Plate <br>";
	dragon_string += "> Total Armor Rating: " + dragon.armor.total_rating + "<br>";
	dragon_string += "> Bleed Resistance: " + dragon.armor.bleed_res + "<br>";
	dragon_string += "> Magic Resistance: " + dragon.armor.magic_res + "<br>";
	return dragon_string;
}

function capitaliseFirstLetter(input) {
	var first = input[0]
	return input.replace(first, first.toUpperCase());
}

function checkForSkill(dragon, skill) {
	return Object.keys(dragon.skills).includes(skill);
}

function checkForItem(dragon, item) {
	return Object.keys(dragon.items).includes(item);
}

function getOffensiveCritSkills(dragon) {
	var result = {};
	// Do a check on each offensive crit skill for if its in the dragon's
	// array of skills
	Object.keys(skill_data.offensive_crit_chance_skills).forEach(skill => {
		if(checkForSkill(dragon, skill)) {
			result[skill] = dragon.skills[skill];
			var skill_info = skill_data.offensive_crit_chance_skills[skill];
			result[skill].raw = skill_info.raw;
			result[skill].bleed = skill_info.bleed;
			result[skill].magic = skill_info.magic;
			result[skill].breath = skill_info.breath;
		}
	});
	return result;
}

function getDefensiveCritSkills(dragon) {
	var result = {};
	// Do a check on each defensive crit skill for if its in the dragon's
	// array of skills
	Object.keys(skill_data.defensive_crit_chance_skills).forEach(skill => {
		if(checkForSkill(dragon, skill)) {
			result[skill] = dragon.skills[skill];
			var skill_info = skill_data.defensive_crit_chance_skills[skill];
			result[skill].raw = skill_info.raw;
			result[skill].bleed = skill_info.bleed;
			result[skill].magic = skill_info.magic;
			result[skill].breath = skill_info.breath;
		}
	});
	return result;
}

function formatSkillActivationLog(skill) {
	var skill_info = skills[skill];
	return "'s skill, " + skill_info.name + ", activates! (Effect: " + skill_info.effect + ")<br>";
}

function applyHealingAura(dragon) {
	if(checkForSkill(dragon, 'skill_healing_aura')) {
		var healing_aura_roll = rand(1, 10);
		if(healing_aura_roll <= skills['skill_healing_aura'].proc_chance) {
			detailed_breakdown += dragon.name + formatSkillActivationLog('skill_healing_aura');
			dragon.health += skill_data.healing_aura_heal;
			detailed_breakdown += dragon.name + " heals, and now has " + dragon.health + " health.<br>";
			results += dragon.name + " heals due to the activation of Healing Aura, and now has " + dragon.health + " health.<br>";
		}
	}
}

// JavaScript Document
