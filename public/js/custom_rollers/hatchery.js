// All the data used in the roller at the top for easy access
// Egg data has one entry for each characteristic to roll,
// which each have their own set of chances for specific outcomes
// e.g. common egg twin chances have 10 in 'identical', 10 in 'non-identical' and 80 in 'no_twins'
// When rolled the chance values are totalled and then a random nBronze is rolled between 1 and that total
// In this case it's 100 (i.e. 10/100 chance for identical etc)
const common_egg = {
	twins: { 'identical': 10, 'non_identical': 10, 'no_twins': 80 },
	markings: { 'common': 80, 'uncommon': 20 },
	mutations: { 'no': 90, 'yes': 8, 'Radiance': 1, 'Chimera': 1 },
	skill_breath: { 'no': 90, 'yes': 10 },
	trait: { 'common': 70, 'uncommon': 30 },
	temper: { 'Vigilant': 70, 'Aggressive': 30 },
	base: { 'Bronze': 70, 'Tarnished': 15, 'Silver': 5, 'Obsidian': 10 },
	coat: { 'Velour': 80, 'Feathered': 10, 'Plated': 10 },
	lineage: { 'yes': 90, 'no': 10 },
	act_species: { 'Stalker Wyvern': 1, 'Ravager Wyvern': 2, 'Warden Dragon': 3, 'Greater Emperor': 4, 'Sapiere Dragon': 5, 'Abyssal Basileus': 6, 'Ridgewalker Drake': 7 },
	act_lineage: { 'yes': 95, 'no': 5 },
	uc_max: 1,
	r_max: 0	
}

const uncommon_egg = {
	twins: { 'identical': 15, 'non_identical': 20, 'no_twins': 65 },
	markings: { 'common': 70, 'uncommon': 30 },
	mutations: { 'no': 85, 'yes': 10, 'Radiance': 3, 'Chimera': 2 },
	skill_breath: { 'no': 80, 'yes': 20 },
	trait: { 'common': 60, 'uncommon': 40 },
	temper: { 'Vigilant': 60, 'Aggressive': 30, 'Calm': 10 },
	base: { 'Bronze': 40, 'Tarnished': 30, 'Silver': 15, 'Obsidian': 15 },
	coat: { 'Velour': 75, 'Feathered': 10, 'Plated': 15 },
	lineage: { 'yes': 85, 'no': 15 },
	act_species: { 'Stalker Wyvern': 1, 'Ravager Wyvern': 2, 'Warden Dragon': 3, 'Greater Emperor': 4, 'Sapiere Dragon': 5, 'Abyssal Basileus': 6, 'Ridgewalker Drake': 7 },
	act_lineage: { 'yes': 90, 'no': 10 },
	uc_max: 2,
	r_max: 0	
}

const rare_egg = {
	twins: { 'identical': 20, 'non_identical': 20, 'no_twins': 60 },
	markings: { 'common': 65, 'uncommon': 25, 'rare': 10 },
	mutations: { 'no': 75, 'yes': 18, 'Radiance': 4, 'Chimera': 3 },
	skill_breath: { 'no': 70, 'yes': 30 },
	trait: { 'common': 55, 'uncommon': 35, 'rare': 10 },
	temper: { 'Vigilant': 50, 'Aggressive': 35, 'Calm': 10, 'Sinister': 5 },
	base: { 'Tarnished': 40, 'Silver': 30, 'Obsidian': 15, 'Gold': 10, 'Melanistic Bronze': 2, 'Melanistic Tarnished': 1, 'Melanistic Silver': 1, 'Melanistic Gold': 1 },
	coat: { 'Velour': 60, 'Feathered': 20, 'Plated': 16, 'Angora': 3, 'Imperial': 1 },
	lineage: { 'yes': 75, 'no': 25 },
	act_species: { 'Stalker Wyvern': 1, 'Ravager Wyvern': 2, 'Warden Dragon': 3, 'Greater Emperor': 4, 'Sapiere Dragon': 5, 'Abyssal Basileus': 6, 'Ridgewalker Drake': 7 },
	act_lineage: { 'yes': 80, 'no': 20 },
	uc_max: 2,
	r_max: 1	
}

const myst_egg = {
	twins: { 'identical': 25, 'non_identical': 20, 'no_twins': 55 },
	markings: { 'common': 30, 'uncommon': 35, 'rare': 20, 'vrare': 15 },
	mutations: { 'no': 45, 'yes': 40, 'Radiance': 10, 'Chimera': 5 },
	skill_breath: { 'no': 40, 'yes': 60 },
	trait: { 'common': 30, 'uncommon': 45, 'rare': 15, 'vrare': 10 },
	temper: { 'Vigilant': 15, 'Aggressive': 50, 'Calm': 20, 'Sinister': 15 },
	base: { 'Tarnished': 30, 'Silver': 35, 'Obsidian': 15, 'Gold': 10, 'Melanistic Bronze': 3, 'Melanistic Tarnished': 3, 'Melanistic Silver': 2, 'Melanistic Gold': 2 },
	coat: { 'Velour': 25, 'Feathered': 35, 'Plated': 25, 'Angora': 10, 'Imperial': 5 },
	lineage: { 'yes': 70, 'no': 30 },
	act_species: { 'Stalker Wyvern': 1, 'Ravager Wyvern': 2, 'Warden Dragon': 3, 'Greater Emperor': 4, 'Sapiere Dragon': 5, 'Abyssal Basileus': 6, 'Ridgewalker Drake': 7 },
	act_lineage: { 'yes': 75, 'no': 25 },
	uc_max: 3,
	r_max: 1
}

// Arrays of marking arrays in the format ['pheno', 'geno', 'pheno string position']
// Pheno string order: vr - r - ed - color - suffix (base would go between color and suffix)
// 3 marks per line
const c_marks = [
	['Blanket', 'nBl', 'suffix'], ['Boar', 'nBr', 'suffix'], ['Collar', 'nCl', 'suffix'],
	['Dun', 'nDn', 'suffix'], ['Duo Tone', 'nDo', 'suffix'], ['Dusted', 'nDt', 'ed'],
    ['Citrine', 'nCt', 'color'], ['Frog Eye', 'nFe', 'suffix'],
	['Steel', 'nSl', 'color'], ['Hood', 'nHd', 'suffix'], ['Leaf', 'nLf', 'suffix'],
	['Masked', 'nMa', 'ed'], ['Pangare', 'nPa', 'suffix'], ['Points', 'nPo', 'suffix'],
	['Python', 'nPy', 'suffix'], ['Rimmed', 'nRi', 'ed'], ['Ripples', 'nRip', 'suffix'],
	['Ringed', 'nRn', 'ed'], ['Rhodonite', 'nRd', 'color'],	['Sable', 'nSa', 'suffix'],
	['Scaled', 'nSc', 'ed'], ['Stained', 'nSn', 'suffix'], ['Skink', 'nSk', 'suffix'],
	['Trailing', 'nTr', 'suffix'], ['Underbelly', 'nUn', 'suffix'], ['Stockings', 'nSo', 'suffix'], ['Specter', 'nOse', 'suffix'], ['Cape', 'nCa', 'suffix']
];
const uc_marks = [
    ['Azurite', 'nAz', 'color'], ['Banded', 'nBa', 'ed'],
	['Border', 'nBo', 'suffix'], ['Cloud', 'nCd', 'suffix'], ['Topaz', 'nTz', 'color'],
	['Crested', 'nCr', 'ed'], ['Garnet', 'nGt', 'color'], ['Dapple', 'nDl', 'suffix'], ['Dipped', 'nDi', 'ed'], ['Tritone', 'nTt', 'suffix'], ['Petrified', 'nOpr', 'suffix'],
	['Dripping', 'nDr', 'suffix'], ['Inkwell', 'nIn', 'suffix'], ['Marbled', 'nMar', 'ed'],
	['Merle', 'nMr', 'suffix'], ['Metallic', 'nMe', 'suffix'], ['Pigeon', 'nPg', 'suffix'], 
    ['Plasma', 'nPs', 'suffix'], ['Roan', 'nRo', 'suffix'], ['Rosettes', 'nRs', 'suffix'],
    ['Shaped', 'nSp', 'ed'],	['Smoke', 'nSm', 'suffix'], ['Brindled', 'nBrd', 'suffix'], 
    ['Tabby', 'nTa', 'suffix'], ['Tobiano', 'nTo', 'suffix'], ['Toxin', 'nTx', 'suffix']
];
const r_marks = [
	['Blooded', 'nBd', 'r'], ['Eyes', 'nEy', 'r'],
	['Glass', 'nGl', 'r'], ['Jade', 'nJa', 'color'], ['Luminescent', 'nLu', 'r'],
	['Lustrous', 'nLs', 'r'], ['Painted', 'nPn', 'r'], ['Petal', 'nPl', 'r'], 
    ['Filigree', 'nFi', 'r'], ['Turquoise', 'nTu', 'color'], ['Circuit', 'nCi', 'r'], 
	['Patchwork', 'nPw', 'r'], ['Pearl', 'nOpe', 'r']
];
const vr_marks = [
	['Aether Marked', 'nAm', 'vr'], ['Aurora', 'nAu', 'vr'], ['Gemstone', 'nGm', 'vr'],
	['Iridescent', 'nIr', 'vr'], ['Lepir', 'nLe', 'vr'], ['Amethyst', 'nAy', 'color'],
	['Prismatic', 'nPr', 'color'], ['Rune', 'nRu', 'vr'], ['Shimmer', 'nSh', 'vr'],
	['Triquetra', 'nTri', 'vr'], ['Arcane', 'nArc', 'vr'], ['Harlequin', 'nHar', 'vr'], ['Oilslick', 'nOol', 'vr']
];

const mutations = [
	//Start of common
	'Dewlap', 'Tendrils', 'Fanged', 'Maned', 'Raptor', 'Spined',

	//Start of uncommon
	'Membrane', 'Viper', 'Polycerate', 'Leucistic', 'Abundism', 'Ophanim',

	//Start of Rare
	'Ghostly', 'Anery', 'Albino', 'Cherubian', 'Faceted', 'Glimmer', 'Hydra', 

	//Start of Mythic
	'Elemental', 'Arcana', 'Blacklight', 'Nautical', 'Miniature'
];
const rav_only_mutes = ['Avian', 'Warlord'];

const rad_opts = [
	['Citrine', 'Ct'], ['Steel', 'Sl'], ['Rhodonite', 'Rd'], ['Azurite', 'Az'], ['Topaz', 'Tz'],
	['Garnet', 'Gt'], ['Jade', 'Ja'], ['Amethyst', 'Ay'], ['Prismatic', 'Pr']
]

const skills = ['Life of the Party', 'Hoarder', 'Adept', 'Steadfast', 'Swift Feet', 'Aether Walker',
	'Inner Fire', 'Haunting Roar', 'Healing Aura', 'Armored Hide', 'Frenzy', 'Serrated Teeth'];
const breaths = ['Fire', 'Ice', 'Shadow', 'Lightning', 'Radiation', 'Wind', 'Poison', 'Luster']

// Store trait arrays according to the rarity - ensure that the way rarity is write is the same as
// is written in the egg
const eyes = {
	common: ['Round Eyes', 'Slit Eyes', 'Beaded Eyes', 'Wither Eyes', 'Starry Eyes'],
	uncommon: ['Pale Eyes', 'Pupiless Eyes', 'Crescent Eyes', 'Low Light Eyes', 'Crackled Eyes'],
	rare: ['Glowing Eyes', 'Goat Eyes', 'Cuttlefish Eyes', 'Electric Eyes', 'Spiral Eyes'],
	vrare: ['Omen Eyes', 'Solar Eyes', 'Eclipse Eyes', 'Ether Eyes', 'Nebula Eyes', 'Arcane Eyes', 'Teary Eyes']
}
const horns = {
	common: ['Hornless', 'Smooth Horns', 'Nub Horns', 'Bull Horns', 'Rhino Horns', 'Ram Horns', 'Segmented Horns', 'Parasaur Horns', 'Axe Horns', 'Loop Horns'],
	uncommon: ['Ibex Horns', 'Ridge Horns', 'Devil Horns', 'Curled Horns', 'Ceratopsian Horns', 'Twisted Horns', 'Imp Horns'],
	rare: ['Crowned Horns', 'Qilin Horns', 'Stag Horns', 'Royal Horns', 'Ascended Horns', 'Moth Horns'],
	vrare: ['Eland Horns', 'Unicorn Horns', 'Fallow Horns', 'Beastly Horns', 'Aether Horns', 'Forsaken Horns', 'Luna Horns']
}
const ears = {
	common: ['Earless', 'Fox Ears', 'Hyena Ears', 'Wild Ears', 'Equine Ears'],
	uncommon: ['Dragon Ears', 'Tuft Ears', 'Fluffy Ears', 'Drop Fold Ears', 'Bat Ears'],
	rare: ['Tapir Ears', 'Clipped Ears', 'Button Ears', 'Silky Ears', 'Devilish Ears'],
	vrare: ['Hare Ears', 'Spaniel Ears', 'Papillion Ears', 'Elven Ears', 'Axolotl Ears', 'Enchanted Ears']
}
const tails = {
	common: ['Slender Tail', 'Plume Tail', 'Stub Tail', 'Prehensile Tail', 'Weaver Tail', 'Tailless'],
	uncommon: ['Lemur Tail', 'Whip Tail', 'Split Tail', 'Crocuta Tail', 'Fan Tail', 'Quill Tail'],
	rare: ['Peacock Tail', 'Kitsune Tail', 'Drape Tail', 'Armored Tail', 'Spade Tail', 'Frond Tail'],
	vrare: ['Scorpio Tail', 'Aquatic Tail', 'Phoenix Tail', 'Caudal Tail', 'Bone Tail', 'Crocodilia Tail']
}

const coat_genos = {
	Bronze: 'Bb/tt/ss/nn',
	Tarnished: 'bb/Tt/ss/nn',
	Silver: 'bb/tt/Ss/nn',
	Obsidian: 'bb/tt/ss/Nn',
	Gold: 'Bb/tt/Ss/nn',
	Melanistic_Bronze: 'Bb/tt/ss/Nn',
	Melanistic_Tarnished: 'bb/Tt/ss/Nn',
	Melanistic_Silver: 'bb/Tt/Ss/Nn',
	Melanistic_Gold: 'Bb/tt/Ss/Nn',
}

// Inputs
var rarity_select = document.getElementById('rarity')
var species_select = document.getElementById('species')
var activity_check = document.getElementById('activity')

function rand(min, max) {
    var min = min || 0,
        max = max || NBronze.MAX_SAFE_INTEGER;

    return Math.floor(Math.random() * (max - min + 1)) + min;}

// Global variables for easy access
var type;
var species; // will be overidden if 'isActivity' is true
var isActivity;
var uc_max;
var r_max;
var hasLineage = '???';
var isTwin = false;

function rollEgg(){
	// Overwrite with current values before rolling
	type = rarity_select.value;
	species = species_select.value;
	isActivity = activity_check.checked;
	var egg_table;
	if (type == "common") { egg_table = common_egg; }
	else if (type == "uncommon") { egg_table = uncommon_egg; }
	else if (type == "rare") { egg_table = rare_egg; }
	else if (type == "myst") { egg_table = myst_egg; }
	hasLineage = getRollResult(egg_table.lineage)

	if (isActivity) {
		// Override the values with the activity variant
		species = getRollResult(egg_table.act_species);
		hasLineage = getRollResult(egg_table.act_lineage);
	}
	uc_max = egg_table.uc_max;
	r_max = egg_table.r_max;
	
	var dragon_one = rollDragon(egg_table);
	var result = ""
	result += formatDragon(dragon_one, 1);

	isTwin = getRollResult(egg_table.twins);
	
	if(isTwin != 'no_twins') {
		result += "<br>"
		var dragon_two;
		dragon_two = rollDragon(egg_table);
		if(isTwin == 'identical'){
			dragon_two.base = dragon_one.base
			dragon_two.main_marks = dragon_one.main_marks.slice();
		}
		result += formatDragon(dragon_two, 2)
	}

	result += "<br>"
	// if twins or rolled to have lineage
	if(isTwin != 'no_twins' || hasLineage == 'yes'){ result += "These dragons will receive lineage."; }
	else { result += "This dragon is first generation."; }

	document.getElementById("result").innerHTML = result;
}

function rollDragon(egg_table) {
	var loop_guard = 0;
	// Object that will be returned at the end of function
	var dragon = {
		main_marks: [],
		chim_marks: [],
		traits: [],
		gender: '???',
		temper: '???',
		build: '???',
		base: '???',
		chim_coat: '???',
		radiance_geno: '',
		mutation: '???',
		skill: '???',
		breath: '???',
		num_uncommon: 0,
		num_rare: 0
	}
	
	dragon.temper = getRollResult(egg_table.temper)

	dragon.base = getRollResult(egg_table.base)

	dragon.coat = getRollResult(egg_table.coat)

	dragon.gender = rand(1, 2) == 1 ? 'Male' : 'Female'

	// Used to track if minimum 1 UC mark is achieved
	var hasUCMark = false;

	dragon.main_marks = rollMarkings(egg_table)
	
	// Determine mutations
	dragon.mutation = getRollResult(egg_table.mutations)
	if(dragon.mutation == 'yes') {
		var mute_pool = mutations.slice();
		// If Ravager, add rav_only_mutes to the pool
		if (species == 'Ravager Wyvern') { mute_pool.concat(rav_only_mutes.slice()); }
		dragon.mutation = getRandArrayElement(mute_pool);
	} else if(dragon.mutation == 'Radiance') {
		var rad = getRandArrayElement(rad_opts);
		dragon.mutation = 'Radiant ' + rad[0];
		dragon.radiance_geno = 'nRad-' + rad[1];
	} else if (dragon.mutation == 'Chimera') {
		dragon.chim_marks = rollMarkings(egg_table)
		dragon.chim_coat = getRollResult(egg_table.base)
	}

	// Roll skill
	dragon.skill = getRollResult(egg_table.skill_breath);
	if (dragon.skill == 'yes') {
		dragon.skill = getRandArrayElement(skills);
	}

	// Roll breath
	dragon.breath = getRollResult(egg_table.skill_breath);
	if (dragon.breath == 'yes') {
		dragon.breath = getRandArrayElement(breaths);
	}

	// Roll traits (eyes/horns/ears/tails)
	// Used to track if minimum 1 UC trait is achieved
	var hasUCTrait = false;
	// Eyes
	dragon.traits.push(rollTrait(eyes))
	// Horns
	dragon.traits.push(rollTrait(horns))
	if (species == 'Ravager Wyvern') {
		// Ears
		dragon.traits.push(rollTrait(ears, true))
		// Tail
		dragon.traits.push(rollTrait(tails, true))
	}

	// Ensure that geno has at least one UC mark
	if(!hasUCMark) {
		uc_mark = getRandArrayElement(uc_marks);
		// Replace one common mark at random
		var rand_index;
		loop_guard = 0;
		do {
			if(loop_guard > 100) {
				console.log("UC mark insurance took too long. Aborting.");
				return;
			}
			rand_index = rand(0, dragon.main_marks.length-1);
			++loop_guard;
		} while(!c_marks.includes(dragon.main_marks[rand_index]))
		dragon.main_marks[rand_index] = uc_mark;
		hasUCMark = true;
	}

	// Randomly reroll one of the traits
	// Indexed as follows: 0 = eyes, 1 = horns, 2 = ears, 3 = tails (if applicable)
	if(!hasUCTrait) {
		// Select random trait to reroll
		var index;
		var trait_pool;
		// Replace random common trait
		loop_guard = 0;
		do {
			if(loop_guard > 100) {
				console.log("UC trait insurance took too long. Aborting.");
				return;
			}
			index = rand(0, dragon.traits.length - 1);
			if (index == 0) { trait_pool = eyes; }
			else if (index == 1) { trait_pool = horns; }
			else if (index == 2) { trait_pool = ears; }
			else if (index == 3) { trait_pool = tails; }
			++loop_guard;
		} while(!trait_pool['common'].includes(dragon.traits[index]))
		dragon.traits[index] = getRandArrayElement(trait_pool['uncommon'])
		hasUCTrait = true;
	}
	
	function rollMarkings(egg_table) {
		var num_markings = rand(4, 6);
		var marks = [];
		for(let i = 0; i < num_markings; i++) {
			// Roll rarity - if exceeds max UC or max R, will reroll until it does not
			loop_guard = 0;
			do {
				if(loop_guard > 100) {
					console.log("UC/R/VR markings limiting took too long. Aborting.");
					return;
				}
				var mark_rarity = getRollResult(egg_table.markings);
				++loop_guard;
			} while (hasReachedMaxUCOrR(mark_rarity))
			
			var mark_rolled = ['error??!','???'];
			// Roll actual mark - if repeated, reroll
			loop_guard = 0;
			do {
				if(loop_guard > 100) {
					console.log("Non-repeating markings took too long. Aborting.");
					return;
				}
				if(mark_rarity == 'common') { mark_rolled = getRandArrayElement(c_marks); }
				else if(mark_rarity == 'uncommon') { mark_rolled = getRandArrayElement(uc_marks); }
				else if(mark_rarity == 'rare') { mark_rolled = getRandArrayElement(r_marks); }
				else if(mark_rarity == 'vrare') { mark_rolled = getRandArrayElement(vr_marks); }
				++loop_guard;
			} while (marks.includes(mark_rolled))
			
			// Update counters and bools, if necessary
			if (mark_rarity == 'uncommon') {
				dragon.num_uncommon += 1;
				hasUCMark = true;
			}
			// R and VR always count towards max (they are not 'extras')
			else if (mark_rarity == 'rare' || mark_rarity == 'vrare') {
				dragon.num_rare += 1;
			}
			marks.push(mark_rolled)
		}
		return marks;
	}

	// isRavOnly is a parameter that defaults to false, and does not always need to be specified
	function rollTrait(traits_table, isRavOnly=false) {
		var trait_rarity = '???'
		// Reroll rarity if the dragon alr has the max UC or R, OR vrare is rolled but its a rav only trait
		loop_guard = 0;
		do {
			if(loop_guard > 100) {
				console.log("UC/R/VR traits limiting took too long. Aborting.");
				return;
			}
			trait_rarity = getRollResult(egg_table.trait);
			++loop_guard;
		} while (hasReachedMaxUCOrR(trait_rarity) || (isRavOnly && trait_rarity == 'vrare'));
		if(trait_rarity == 'uncommon') {
			dragon.num_uncommon += 1;
			hasUCTrait = true;
		}
		else if (trait_rarity == 'rare' || trait_rarity == 'vrare') {
			dragon.num_rare += 1;
		}
		return getRandArrayElement(traits_table[trait_rarity])
	}

	function hasReachedMaxUCOrR(rarity) {
		return ((rarity == 'uncommon' && dragon.num_uncommon >= uc_max) || 
		(rarity == 'rare' || rarity == 'vrare') && dragon.num_rare >= r_max)
	}

	return dragon;
}

function formatDragon(dragon, num) {
	var formattedMain = formatMarks(dragon.main_marks);
	var phenotype = formattedMain[0]
	var genotype = formattedMain[1]
	var addedMutation = ""
	if(dragon.mutation == 'Chimera') {
		var formattedChim = formatMarks(dragon.chim_marks);
		phenotype += ` || ${formattedChim[0]}`
		genotype += ` || ${formattedChim[1]}`
	}
	if(!dragon.mutation.includes("Radiant") && dragon.mutation != 'no') {
		addedMutation = ` | ${dragon.mutation}`
	}

	var dragon_string = ""

	dragon_string += `${num}: ${dragon.gender} ${dragon.temper} ${species} | Healthy<br>`
	dragon_string += `T: ${dragon.coat} Coat, ${dragon.traits.join(", ")}${addedMutation}<br>`
	dragon_string += `G: ${genotype}<br>`
	dragon_string += `P: ${phenotype}<br>`
	if(dragon.skill != 'no'){
		dragon_string += `<i>Skill:</i> ${dragon.skill}<br>`
	}
	if(dragon.breath != 'no') {
		dragon_string += `<b>Breath:</b> ${dragon.breath}<br>`
	}
	
	return dragon_string

	function formatMarks(marks) {
		var p = "";

		// Sort by grouping: vr - r - ed - mela - colors - coat - suffixes
		var vr_group = [];
		var r_group = [];
		var ed_group = [];
		var colors = [];
		var suffixes = [];
		for (let i = 0; i < marks.length; i++) {
			mark = marks[i]
			if(mark[2] == 'vr') { vr_group.push(marks[i][0]); }
			else if(mark[2] == 'r') { r_group.push(marks[i][0]); }
			else if(mark[2] == 'ed') { ed_group.push(marks[i][0]); }
			else if(mark[2] == 'color') { colors.push(marks[i][0]); }
			else if(mark[2] == 'suffix') { suffixes.push(marks[i][0]); }
		}

		// Then by rarity: c - uc, followed by alphabetical asc
		vr_group.sort();
		r_group.sort();
		ed_group.sort(function(a,b) {
			if(getMarkRarity(a) < getMarkRarity(b)) { return -1; }
			if(getMarkRarity(a) > getMarkRarity(b)) { return 1; }
			return a.toString().localeCompare(b.toString());
		});
		colors.sort(function(a,b) {
			if(getMarkRarity(a) < getMarkRarity(b)) { return -1; }
			if(getMarkRarity(a) > getMarkRarity(b)) { return 1; }
			return a.toString().localeCompare(b.toString());
		});
		suffixes.sort(function(a,b) {
			if(getMarkRarity(a) < getMarkRarity(b)) { return -1; }
			if(getMarkRarity(a) > getMarkRarity(b)) { return 1; }
			return a.toString().localeCompare(b.toString());
		});
	
		// Add vr, if applicable
		if(vr_group.length > 0) {
			p += vr_group.join(", ");
		}
		// Add r, if applicable
		if(r_group.length > 0) {
			// If p is not an empty string, add a separator
			if(p) { p += ", "; }
			p += r_group.join(", ");
		}
		// Add ed_group...
		if(ed_group.length > 0) {
			if(p) { p += ", "; }
			p += ed_group.join(", ");
		}
		// Add mela...
		var independent_coat = dragon.base
		if (independent_coat.includes("Melanistic")) {
			if(p) { p += ", "; }
			p += "Melanistic";
			independent_coat = independent_coat.replace("Melanistic ", "");
		}
		// Add colors...
		if(colors.length > 0) {
			if(p.includes("Melanistic")) { p += " "; }
			else if(p) { p += ", "}
			p += colors.join(", ");
		}
		// Add base
		if(p) { p += " "; }
		p += independent_coat
		if(suffixes.length > 0){
			p += " with ";
			if(suffixes.length == 1) {
				p += suffixes[0];
			} else if(dragon.radiance_geno) {
				p += suffixes.join(", ");
				p += " and " + dragon.mutation;
			} else {
				var last_suffix = suffixes.splice(-1);
				p += suffixes.join(", ");
				p += " and " + last_suffix;
			}
		}
		
		var geno = [];
		for (let i = 0; i < marks.length; i++){
			geno.push(marks[i][1]);
		}
		
		var g = coat_genos[dragon.base.replace(" ", "_")] + "+";

		geno.sort(function(a,b){
			if(getMarkRarity(a) < getMarkRarity(b)) { return -1; }
			if(getMarkRarity(a) > getMarkRarity(b)) { return 1; }
			return a.toString().localeCompare(b.toString());
		});

		if(dragon.radiance_geno) {
			geno.push(dragon.radiance_geno);
		}

		g += geno.join("/");

		return [p, g]
	}
}

function getMarkRarity(mark){
	// Nested ternary operators that go through each array of marks to assign a ranking value
	return (hasMark(c_marks, mark) ? 1 :
		hasMark(uc_marks, mark) ? 2 :
		hasMark(r_marks, mark) ? 3 :
		hasMark(vr_marks, mark) ? 4 : -1
	)
}

function hasMark(marks_list, mark){
	for (let i = 0; i < marks_list.length; i++) {
		if(marks_list[i][0] == mark || marks_list[i][1] == mark) { return true; }
	}
	return false;
}

function roll() {
	document.getElementById("result").innerHTML = "";
	rollEgg();
}

function clearForms() {
	document.getElementById("result").innerHTML = "";
}

// Roll a result from a provided object of values
function getRollResult(roll_table) {
	table_keys = Object.keys(roll_table);
	total_chance = 0;
	for(let i = 0; i < table_keys.length; i++) { total_chance += roll_table[table_keys[i]]; }
	var rand_num = rand(1, total_chance);
	for(let i = 0; i < table_keys.length; i++) {
		if(rand_num <= roll_table[table_keys[i]]) { return table_keys[i]; }
		else { rand_num -= roll_table[table_keys[i]]; }
	}
	return "error!!?"
}

function getRandArrayElement(array) {
	return array[rand(0, array.length - 1)]
}
