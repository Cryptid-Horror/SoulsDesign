// designed by Armando Montanez (c) 2016-2017
// licensed to Cryptid Horror and Livard

// edits added by Draginraptor (c) 2022
// - Aberrant passing (2022)
// - Breaths pass logic update (04 Apr 2022)
// - Skills pass logic update (05 Apr 2022)

// List of valid markings, always 8 per row for readability and easy couting.
var commonMarkings = ["nBl", "BlBl", "nBr", "BrBr", "nCa", "CaCa", "nCl", "ClCl", "nDn", "DnDn", "nDt", "DtDt", "nDo", "DoDo", "nFe", 
					"FeFe", "nCt", "CtCt", "nSl", "SlSl", "nHd", "HdHd", "nLf", "LfLf", "nMa", "MaMa", "nPa", "PaPa", "nPo", "PoPo", 
					"nPy", "PyPy", "nRi", "RiRi", "nRn", "RnRn", "nRd", "RdRd", "nRip", "RipRip", "nSa", "SaSa", "nSc", "ScSc", "nSk",
					"SkSk", "nSn", "SnSn", "nSo", "SoSo", "nOse", "OseOse", "nTr", "TrTr", "nUn", "UnUn"];

var uncommonMarkings = ["nAz", "AzAz", "nBa", "BaBa", "nBo", "BoBo", "nCd", "CdCd", "nTz", "TzTz", "nCr", "CrCr", 
                        "nGt", "GtGt", "nDl", "DlDl", "nDi", "DiDi", "nDr", "DrDr", "nIn", "InIn",
						"nMar", "MarMar", "nMr", "MrMr", "nMe", "MeMe", "nOpr", "OprOpr", "nPg", "PgPg", 
						"nPs", "PsPs", "nRo", "RoRo", "nRs", "RsRs", "nSp", "SpSp",
						"nSm", "SmSm", "nBrd", "BrdBrd", "nTa", "TaTa", "nTo", "ToTo", "nTx", "TxTx", "nTt", "TtTt"];

var rareMarkings = ["nBd", "BdBd", "nCi", "CiCi", "nEy", "EyEy", "nPl", "PlPl", "nGl", "GlGl", "nJa", "JaJa", "nLu", "LuLu", "nLs", "LsLs",
					 "nPn", "PnPn", "nPw", "PwPw", "nOpe", "OpeOpe", "nTu", "TuTu", "nFi", "FiFi"];

var veryRareMarkings = ["nAm", "AmAm", "nArc", "ArcArc", "nAu", "AuAu", "nCn", "CnCn", "nFti", "FtiFti", "nGm", "GmGm", "nHar", "HarHar", "nIr", "IrIr",
						 "nLe", "LeLe", "nAy", "AyAy", "nOol", "OolOol", "nPr", "PrPr", "nSh", "ShSh", "nRu", "RuRu", "nSf", "SfSf", "nTri", "TriTri",
						"nMer", "MerMer", "nTh", "ThTh"];
// doens't include rare/very rare because those preface these in the pheno.
var edMarkings = ["nDt", "DtDt", "nMa", "MaMa", "nRi", "RiRi", "nRn", "RnRn",
				  "nSc", "ScSc", "nSn", "SnSn", "nBa", "BaBa", "nDi", "DiDi", "nMar", "MarMar",
				  "nSp", "SpSp", "nBrd", "BrdBrd", "nTh", "ThTh", "nOpr", "OprOpr"];
var edToText = ["Dusted", "Masked", "Rimmed", "Ringed", "Scaled", "Stained", "Banded", "Dipped", "Marbled", "Shaped", "Brindled", "Torched", "Petrified"];

// markings map 2:1 with ___ToText array indexes.
var commonToText = ["Blanket", "Boar", "Cape", "Collar", "Dun", "Dusted", "Duo Tone",
					 "Frog Eye", "Citrine", "Steel", "Hood", "Leaf",
					"Masked", "Pangare", "Points", "Python", "Rimmed",
					"Ringed", "Rhodonite", "Ripples", "Sable", "Scaled", "Skink", "Stained",
					"Stockings", "Specter", "Trailing", "Underbelly"];
var uncommonToText = ["Azurite", "Banded", "Border", "Cloud", "Topaz", "Crested", 
					  "Garnet", "Dapple", "Dipped", "Dripping", "Inkwell",
					  "Marbled", "Merle", "Metallic", "Petrified", "Pigeon", "Plasma",
					  "Roan", "Rosettes", "Shaped", "Smoke", "Brindled", "Tabby", "Tobiano", "Toxin", "Tritone"];
var rareToText = ["Blooded", "Circuit", "Eyed", "Petal", "Glass", "Jade", "Luminescent", "Lustrous", "Painted", "Patchwork", "Pearl", "Turquoise", "Filigree"];
var veryRareToText = ["Aether Marked", "Arcane", "Aurora", "Constellation", "Confetti", "Gemstone", "Harlequin", "Iridescent",
					 "Lepir", "Amethyst", "Oilslick", "Prismatic", "Shimmering", "Rune", "Solar Flare", "Triquetra", "Mermaid", "Torched"];
// List of valid markings, always 6 per row for readability and easy couting.
var commonMutations = ["Dewlap", "Tendrils", "Fanged", "Maned", "Raptor", "Spined"];

var uncommonMutations = ["Membrane", "Viper", "Polycerate", "Leucistic", "Abundism", "Ophanim"];

var rareMutations = ["Ghostly", "Anery", "Albino", "Cherubian", "Faceted", "Glimmer", "Hydra", "Warlord"];

var veryRareMutations = ["Elemental", "Arcana", "Blacklight", "Nautical", "Chimera", "Miniature", "Avian"];
//Avian to be added to mythic

var veryRarePhysicalMutations = [];

var ravagerOnlyMutations = ["Avian", "Warlord"];

// note: melanism isn't really a passable mutation; it's determined by base coat.
var passableMutations = ["nRad", "RadRad", "nAg", "AgAg"]; 

var commonEyes = ["Round Eyes", "Slit Eyes", "Beaded Eyes", "Starry Eyes", "Wither Eyes"];
var uncommonEyes = ["Pale Eyes", "Pupiless Eyes", "Crescent Eyes", "Crackled Eyes", "Low Light Eyes"];
var rareEyes = ["Glowing Eyes", "Goat Eyes", "Cuttlefish Eyes", "Spiral Eyes", "Electric Eyes"];
var veryRareEyes = ["Solar Eyes", "Eclipse Eyes", "Omen Eyes", "Ether Eyes", "Nebula Eyes", "Arcane Eyes", "Teary Eyes"];

var commonHorns = ["Hornless", "Smooth Horns", "Nub Horns", "Bull Horns", "Rhino Horn", "Ram Horns", "Segmented Horns", "Parasaur Horn", "Axe Horn", "Loop Horns"];
var uncommonHorns = ["Ibex Horns", "Ridge Horns", "Devil Horns", "Curled Horns", "Twisted Horns", "Ceratopsian Horns", "Imp Horns"];
var rareHorns = ["Crowned Horns", "Qillin Horn", "Stag Horns", "Royal Horns", "Ascended Horns", "Moth Horns"];
var veryRareHorns = ["Eland Horns", "Unicorn Horn", "Fallow Horns", "Beastly Horns", "Aether Horns", "Forsaken Horns", "Luna Horn"];

var commonEars = ["Earless", "Fox Ears", "Hyena Ears", "Wild Ears", "Equine Ears", "Bear Ears"];
var uncommonEars = ["Dragon Ears", "Tuft Ears", "Fluffy Ears", "Drop Fold Ears", "Bat Ears"];
var rareEars = ["Tapir Ears", "Clipped Ears", "Devilish Ears", "Silky Ears", "Button Ears"];
var veryRareEars = ["Hare Ears", "Spaniel Ears", "Papillion Ears", "Elven Ears", "Axolotl Ears"];

var commonTails = ["Slender Tail", "Plume Tail", "Stub Tail", "Prehensile Tail", "Tailless", "Weaver Tail"];
var uncommonTails = ["Lemur Tail", "Whip Tail", "Split Tail", "Crocuta Tail", "Fan Tail", "Quill Tail"];
var rareTails = ["Peacock Tail", "Kitsune Tail", "Drape Tail", "Armored Tail", "Spade Tail", "Frond Tail"];
var veryRareTails = ["Scorpio Tail", "Aquatic Tail", "Phoenix Tail", "Caudal Tail", "Bone Tail", "Crocodilia Tail"];

var pettyColorMods = ["Bronze", "Tarnished", "Silver", "Obsidian", "Gold", "Tarnished Bronze", "Tarnished Silver", "Tarnished Gold"]
var commonColorMods = ["Citrine", "Steel", "Rhodonite"];
var uncommonColorMods = ["Azurite", "Garnet", "Topaz"];
var rareColorMods = ["Jade", "Turquoise"];
var veryRareColorMods = ["Amethyst", "Prismatic"];
var allColorMods = ["nCt", "CtCt", "nSl", "SlSl", "nRd", "RdRd", "nAz", "AzAz", "nGt", "GtGt", "nTz", "TzTz", 
					"nJa", "JaJa", "nAy", "AyAy", "nTu", "TuTu", "nPr", "PrPr"];
var colorModsToText = ["Citrine", "Steel", "Rhodonite", "Azurite", "Garnet", "Topaz", "Jade", "Amethyst", "Turquoise", "Prismatic"];

// Aberrant rates
// Rates are keyed by bitmasks; this helps prevent duplication and
// makes the order of %s irrelevant
// (i.e. 0% x 25% and 25% x 0% is processed the same w/o hardcoded checkings)
// 1st bit - 0001 -	int value: 1 - 0%
// 2nd bit - 0010 -	int value: 2 - 25%
// 3rd bit - 0100 -	int value: 4 - 50%
// 4th bit - 1000 -	int value: 8 - 100%
const aberrantPassRates = {
	// 0001 - 0% x 0%
	1: { "0%": 100 },
	// 0011 - 0% x 25%
	3: { "0%": 99, "25%": 1 },
	// 0101 - 0% x 50%
	5: { "0%": 85, "25%": 10, "50%": 5 },
	// 1001 - 0% x 100%
	9: { "0%": 70, "25%": 15, "50%": 10, "100%": 5},

	// 0010 - 25% x 25%
	2: { "0%": 70, "25%": 30 },
	// 0110 - 25% x 50%
	6: { "0%": 60, "25%": 30, "50%": 10 },
	// 1010 - 25% x 100%
	10: { "0%": 40, "25%": 25, "50%": 20, "100%": 15 },

	// 0100 - 50% x 50%
	4: { "0%": 50, "25%": 30, "50%": 20 },
	// 1100 - 50% x 100%
	12: { "0%": 40, "25%": 25, "50%": 20, "100%": 15 },

	// 1000 - 100% x 100%
	8: { "0%": 10, "25%": 40, "50%": 30, "100%": 20 },
};


// All available breaths
// Used if a random breath should be rolled
const breathList = [
	"Fire", "Ice", "Shadow", "Lightning",
	"Radiation", "Wind", "Poison", "Luster"
];
// Breath rates
const breathBaseRate = 20;			// Split over all available breaths.
const breathAggressiveBoost = 10;	// Applied per parent, split evenly.
const breathParentBoost = 10;		// Applied per parent, to their respective breaths.
const breathPotionBoost = 30;		// Applied and split evenly.


const skillPassRates = {
	'general': {
		// Pass rate of general skill, if only present on one parent
		1: 40,
		// Pass rate of general skill, if present on both parents
		2: 50
	},
	'combat': {
		// Pass rate of combat skill, if only present on one parent
		1: 20,
		// Pass rate of combat skill, if present on both parents
		2: 30
	},
	'legendary': {
		// Pass rate of legendary skill, if only present on one parent
		1: 10,
		// Pass rate of legendary skill, if present on both parents
		2: 15
	}
}

const skillMaxPerOffspring = 2;
const skillCharmPassBoost = 5;

function initialize() {
	document.getElementById("genderSelectionRadios").style.display = "none";
	document.getElementById("breedSelectionRadios").style.display = "none";
	document.getElementById("temperSelectionRadios").style.display = "none";
	document.getElementById("sinisterSelected").style.display = "none";
	document.getElementById("sinisterLabel").style.display = "none";
	document.getElementById("colorSelectionMenu").style.display = "none";
	document.getElementById("skillCharmMenu").style.display = "none";
}

// Roll a result from a provided object of values
function getRollResult(roll_table) {
	table_keys = Object.keys(roll_table);
	total_chance = 0;
	for(let i = 0; i < table_keys.length; i++) { total_chance += roll_table[table_keys[i]]; }
	var rand_num = randRange(total_chance);
	for(let i = 0; i < table_keys.length; i++) {
		if(rand_num <= roll_table[table_keys[i]]) { return table_keys[i]; }
		else { rand_num -= roll_table[table_keys[i]]; }
	}
	return "error!!?"
}

function randRange(max) {
	return Math.floor(Math.random() * max);
}

function shuffle(array)
{
	for(let i = array.length - 1; i > 0; --i)
	{
		var tmp = array[i];
		var randIndex = randRange(i);
		array[i] = array[randIndex];
		array[randIndex] = tmp;
	}
}

// global variables
var destroyedModifiers = "";
var damMarkings = [];
var sireMarkings = [];
var damSkills = [];
var sireSkills = [];
var childMarkings = [];
var childColorMods = [];
var childBreed;
var childHasFace;

// enumerated constants
var Ranks = Object.freeze({
		FLEDGLING: 1,	PRIMAL: 2,
		ANCIENT: 3,		PRIMORDIAL: 4,
	});

var Breeds = Object.freeze({
		STALKER: 1,	RAVAGER: 2,
	    WARDEN: 3, GEMP: 4, 
	    SAPI: 5, RIDGE: 6,
		ABYSS: 7,
	});

var Builds = Object.freeze({
		COMMON: 1,	PLATED: 2,
		FEATHERED: 3,  ANGORA: 4, 
	    IMPERIAL: 5,
	});

var Tempers = Object.freeze({
		TIMID: 1,	AGGRESSIVE: 2,
		CALM: 3,	SINISTER: 4,
	});

var MaxClutchSize = Object.freeze({
		STALKER: 4,	RAVAGER: 4,
	    WARDEN: 4, GEMP: 3, 
	    SAPI: 3, RIDGE: 3,
		ABYSS: 3
	});

var Rarity = Object.freeze({
		COMMON: 1,	UNCOMMON: 2,
		RARE: 3,	VERY_RARE: 4,
        PETTY: 5,
	});

var Breaths = Object.freeze({
		NONE: 1,	FIRE: 2,
		ICE: 3, 	SHADOW: 4,
		LIGHTNING: 5, RADIATION: 6,
		WIND: 7, POISON: 8, LUSTER: 9,
	});

var Skills = Object.freeze({
		NONE: 1,            HOARDER: 2,
		FRIENDLY_GIANT: 3,  STEADFAST: 4,
	    SWIFTFEET: 5,       AETHERWALKER: 6,
	    INNERFIRE: 7,       HAUNTINGROAR: 8,
	    HEALINGAURA: 9,     ADEPT: 10,
		MOONBLESSING: 11,   SUNGUIDANCE: 12,
		CONFETTIDREAMS: 13, SERRATEDTEETH: 14,
		ARMOREDHIDE: 15,    FRENZY: 16,
	});

// Uses lowercaps only so input will NOT be case-sensitive
var SkillNames = Object.freeze({
	"adept": "general",
	"aether walker": "combat",
	"armored hide": "combat",
	"blessing of the moon": "legendary",
	"confetti dreams": "legendary",
	"frenzy": "combat",
	"guidance of the sun": "legendary",
	"haunting roar": "combat",
	"healing aura": "combat",
	"hoarder": "general",
	"inner fire": "combat",
	"life of the party": "general",
	"serrated teeth": "combat",
	"steadfast": "combat",
	"swift feet": "combat"
});

// basic function to reset forms
function clearForms() {
	document.getElementById("rollerForm").reset();
	document.getElementById("nestTextArea").innerHTML = "";
}
function clipBoard() {
	/* Get the text field */
	var copyText = document.getElementById("nestClipboard");
  
	/* Select the text field */
	copyText.select();
	copyText.setSelectionRange(0, 99999); /* For mobile devices */
  
	/* Copy the text inside the text field */
	document.execCommand("copy");
  
	/* Alert the copied text */
	alert("Copied the text: " + copyText.value);
  }

function updateModifiers() {
	// show gender selection if using Gender Potion
	if (document.getElementById("GP").checked)
		document.getElementById("genderSelectionRadios").style.display = "initial";
	else
		document.getElementById("genderSelectionRadios").style.display = "none";
	
	// show breed selection if using Dragon's Instinct
	if (document.getElementById("DI").checked)
		document.getElementById("breedSelectionRadios").style.display = "initial";
	else
		document.getElementById("breedSelectionRadios").style.display = "none";
	
	// show temper selection if using Bottled dragon fire
	if (document.getElementById("BF").checked)
		document.getElementById("temperSelectionRadios").style.display = "initial";
	else
		document.getElementById("temperSelectionRadios").style.display = "none";
	
	// show temper selection if using Bottled dragon fire
	if (document.getElementById("RB").checked)
		document.getElementById("colorSelectionMenu").style.display = "initial";
	else
		document.getElementById("colorSelectionMenu").style.display = "none";

	// show skill selections for sire/dam if using Skill Charm
	if (document.getElementById("SB").checked)
		document.getElementById("skillCharmMenu").style.display = "initial";
	else
		document.getElementById("skillCharmMenu").style.display = "none";
}

function updateTempers() {
	if (((document.getElementById("sireTemper").value == Tempers.CALM) && (document.getElementById("damTemper").value == Tempers.SINISTER)) || 
			   ((document.getElementById("sireTemper").value == Tempers.SINISTER) && (document.getElementById("damTemper").value == Tempers.CALM))) {
		document.getElementById("calmSelected").style.display = "inline-block";
		document.getElementById("calmLabel").style.display = "inline-block";
		document.getElementById("sinisterSelected").style.display = "inline-block";
		document.getElementById("sinisterLabel").style.display = "inline-block";
	} else if ((document.getElementById("sireTemper").value == Tempers.TIMID) && (document.getElementById("damTemper").value == Tempers.TIMID)) {
		if (document.getElementById("calmSelected").checked || document.getElementById("sinisterSelected").checked)
			document.getElementById("aggressiveSelected").checked = true;
		document.getElementById("calmSelected").style.display = "none";
		document.getElementById("calmLabel").style.display = "none";
		document.getElementById("sinisterSelected").style.display = "none";
		document.getElementById("sinisterLabel").style.display = "none";
	} else if ((document.getElementById("sireTemper").value == Tempers.SINISTER) || (document.getElementById("damTemper").value == Tempers.SINISTER)) {
		if (document.getElementById("calmSelected").checked)
			document.getElementById("sinisterSelected").checked = true;
		document.getElementById("calmSelected").style.display = "none";
		document.getElementById("calmLabel").style.display = "none";
		document.getElementById("sinisterSelected").style.display = "inline-block";
		document.getElementById("sinisterLabel").style.display = "inline-block";
	} else {
		if (document.getElementById("sinisterSelected").checked)
			document.getElementById("calmSelected").checked = true;
		document.getElementById("calmSelected").style.display = "inline-block";
		document.getElementById("calmLabel").style.display = "inline-block";
		document.getElementById("sinisterSelected").style.display = "none";
		document.getElementById("sinisterLabel").style.display = "none";
	}
}

function updateTraits(sireOrDam) {
	if (document.getElementById(sireOrDam + "Breed").value != Breeds.RAVAGER) {
		document.getElementById(sireOrDam + "Ears").style.display = "none";
		document.getElementById(sireOrDam + "Tail").style.display = "none";
	} else {
		document.getElementById(sireOrDam + "Ears").style.display = "initial";
		document.getElementById(sireOrDam + "Tail").style.display = "initial";
	}
}

function validateTrait(sireOrDam, trait) {
	if (document.getElementById(sireOrDam + trait) == null)
		return "Couldn't find " + sireOrDam + trait;
	if (document.getElementById(sireOrDam + trait).value == 0)
		return "Please specify " + sireOrDam + " " + trait + "!";
	else
		return 0;
}
function getMarkingRarity(m) {
	var found = 0;
	if (commonMarkings.includes(m))
		found = Rarity.COMMON;
	else if (uncommonMarkings.includes(m))
		found = Rarity.UNCOMMON;
	else if (rareMarkings.includes(m))
		found = Rarity.RARE;
	else if (veryRareMarkings.includes(m))
		found = Rarity.VERY_RARE;
	else if (passableMutations.includes(m))
		found = Rarity.VERY_RARE;
	
	// return 0 if not valid, 1 if valid.
	return found;
}

function markingAlphabeticCompare(a, b) {
	var s1, s2;
	if (a.charAt(0) == "n")
		s1 = a.substr(1, a.length - 1);
	else
		s1 = a;
	
	
	if (b.charAt(0) == "n")
		s2 = b.substr(1, b.length - 1);
	else
		s2 = b;
	if (s1 > s2)
		return 1;
	else if (s1 < s2)
		return -1;
	else
		return 0;
}

function isValidMarking(m) {
	var found = 0;
	if (commonMarkings.includes(m))
		found = 1;
	else if (uncommonMarkings.includes(m))
		found = 1;
	else if (rareMarkings.includes(m))
		found = 1;
	else if (veryRareMarkings.includes(m))
		found = 1;
	else if (passableMutations.includes(m))
		found = 1;
	
	// return 0 if not valid, 1 if valid.
	return found;
}

function validateGeno(sireOrDam) {
	var genome = document.getElementById(sireOrDam + "GenoType").value;
	if (genome == 0)
		return "Please enter a " + sireOrDam + " geno.";
	// ensure geno is the minimum length.
	if (genome.length < 11)
		return "Invalid " + sireOrDam + " geno; too short.";
	
	// ensure using '/' at correct location.
	if (genome.charAt(2) != '/' || genome.charAt(5) != '/' || genome.charAt(8) != '/')
		return "Invalid " + sireOrDam + " geno. use bb/tt/ss/nn format.";
	
	// ensure base coat geno is BB/TT/SS/NN format.
	var inUppercase = genome.toUpperCase();
	if (inUppercase.substr(0, 2) != 'BB' || inUppercase.substr(3, 2) != 'TT' ||  inUppercase.substr(6, 2) != 'SS' || inUppercase.substr(9, 2) != 'NN')
		return "Invalid " + sireOrDam + " geno. Please use this order: bb/tt/ss/nn.";
	
	// At this point, basic geno is confirmed.
	// Now we need to verify markings.
	if (genome.length > 11) {
		var markings = genome.slice(12, genome.length);
		// ignore trailing '/' that would create an empty trait
		if (markings.charAt(markings.length - 1) == "/")
			markings = markings.substr(0, markings.length - 1);
		
		// slice by "/"
		markings = markings.split("/");
		for (i=0; i<markings.length; i++) {
			// if invalid marking
			if (isValidMarking(markings[i]) == 0) {
				
				return "" + markings[i] + " is an invalid marking.";
			}
		}

		// alphabetic sort for now.
		markings.sort(function(a, b) {
				// sort ascending rarity.
				// rad has a marking rarity of 0, so always last.
				if (a == "nRad" || a == "RadRad") {
					return 1;
				} else if (b == "nRad" || b == "RadRad") {
					return -1;
				}
				
				// swap -1 and 1 for descending.
				if (getMarkingRarity(a) > getMarkingRarity(b)) {
					return 1;
				} else if (getMarkingRarity(a) < getMarkingRarity(b)) {
					return -1;
				} else {
					return markingAlphabeticCompare(a, b);
				}
			});
		
		// store for later
		if (sireOrDam == "sire") {
			sireMarkings = markings;
		} else {
			damMarkings = markings;
		}
		var reformattedMarkings = "+";
		reformattedMarkings += markings;
		reformattedMarkings = reformattedMarkings.replace(/,/g, "/");
		
		document.getElementById(sireOrDam + "GenoEcho").value = genome.substr(0, 11) + reformattedMarkings;
	} else {
		document.getElementById(sireOrDam + "GenoEcho").value = genome.substr(0, 11) + "+";
	}
	if (genome.substr(0, 11) == "bb/tt/ss/nn") {
		return "" + sireOrDam + " geno is bb/tt/ss/nn, which isn't a valid base coat.";
	}
	return 0;
}

function validateSkills(sireOrDam) {
	var skillString = document.getElementById(sireOrDam + "Skills").value;

	var skills = [];
	// If no skills are entered, assume no skills.
	if (skillString != 0)
	{
		// Try to split by ), which should split it up into "skill name (skill rarity"
		var skillFragments = skillString.split(')');
		// Check for an empty fragment in the last slot
		if(skillFragments[skillFragments.length - 1].trim() === "") skillFragments.pop();
		// Iterate over all framents
		for(let i = 0; i < skillFragments.length; ++i)
		{
			var fragment = skillFragments[i];
			var shards = fragment.split('(');
			var skillName = shards[0].trim();
			var skillRarity = shards[1].trim();

			// Special handling for Adept.
			var adeptCheck = skillName.split('-');
			if(adeptCheck[0].trim() == "Adept") skillName = "Adept";
	
			// Check if the given skill name actually exists
			if(!Object.keys(SkillNames).includes(skillName.toLowerCase()))
				return skillName + " is an invalid skill.";
	
			// Check if the skill rarity matches
			if(SkillNames[skillName.toLowerCase()] != skillRarity.toLowerCase())
				return skillName + " rarity does not match expected value.";
	
			// Otherwise, skill should be valid.
			skills.push(skillName);
		}
	}

	// At this point, skills should be confirmed.

	// Store for later
	if (sireOrDam == "sire") {
		sireSkills = skills;
	} else {
		damSkills = skills;
	}

	var skillEchoString = skills.join(", ");

	if(skills.length > 0)
	{
		// Append to the value in GenoEcho; assumes that geno was validated first.
		document.getElementById(sireOrDam + "GenoEcho").value += "; Skills: " + skillEchoString;
	}

	return 0;
}

function validateParent(sireOrDam) {
	var result;
	// first validate geno
	if ((result = validateGeno(sireOrDam)) != 0)
		return result;

	// validate skills
	if((result = validateSkills(sireOrDam)) != 0)
		return result;
	
	// validate traits
	if ((result = validateTrait(sireOrDam, "Rank")) != 0)
		return result;
	else if ((result = validateTrait(sireOrDam, "Temper")) != 0)
		return result;
	else if ((result = validateTrait(sireOrDam, "Breed")) != 0)
		return result;
	else if ((result = validateTrait(sireOrDam, "Build")) != 0)
		return result;
	else if ((result = validateTrait(sireOrDam, "Eyes")) != 0)
		return result;
	else if ((result = validateTrait(sireOrDam, "Horns")) != 0)
		return result;
	else if ((result = validateTrait(sireOrDam, "Ears")) != 0 && (document.getElementById(sireOrDam + "Breed").value == Breeds.RAVAGER))
		return result;
	else if ((result = validateTrait(sireOrDam, "Tail")) != 0 && (document.getElementById(sireOrDam + "Breed").value == Breeds.RAVAGER))
		return result;
	else if ((result = validateTrait(sireOrDam, "Breath1")) != 0)
		return result;
	else if ((result = validateTrait(sireOrDam, "Breath2")) != 0)
		return result;
	
	// we reach here if all of parent's traits are valid.
	return 0;
}
function validateModifiers() {
	var numModsSelected = document.querySelectorAll('input[name="modifierSelector"]:checked').length;
	
	if (numModsSelected > 6) {
		return "" + numModsSelected + " is too many modifiers.";
	}

	
	if (document.getElementById("RB").checked && document.getElementById("colorMod").value == 0) {
		return "Color modifier for Radiance Bond or Agouti not selected.";
	}
	
	// Check if Skill Charm is being used and validate as needed.
	if(document.getElementById("SB").checked)
	{
		var sireSkillOption = document.getElementById("sireSkillCharmOptions").value;
		var damSkillOption = document.getElementById("damSkillCharmOptions").value;

		// Check if both are either none or 0, which would be invalid input.
		if((sireSkillOption == "0" || sireSkillOption == "None")
		&& (damSkillOption == "0" || damSkillOption == "None"))
		{
			return "When using Skill Charms, a skill needs to be selected for the sire/dam accordingly, at minimum."
		}
		
		// Check if option chosen is actually present in the parents.

		// Sire option.
		if(sireSkillOption != "0" && sireSkillOption != "None" &&
			!sireSkills.includes(sireSkillOption))
		{
			return "Sire must have " + sireSkillOption + " for Skill Charm to be applied.";
		}
		
		// Dam option.
		if(damSkillOption != "0" && damSkillOption != "None" &&
			!damSkills.includes(damSkillOption))
		{
			return "Dam must have " + damSkillOption + " for Skill Charm to be applied.";
		}
	}

	return 0;
}
function formIsValid() {
	var sireReturnedResult, damReturnedResult;
	sireReturnedResult = validateParent("sire");
	damReturnedResult = validateParent("dam");
	modifiersResult = validateModifiers();
	
	if (sireReturnedResult != 0) {
		document.getElementById("sireGenoEcho").value = "Error: " + sireReturnedResult;
		return "Error: " + sireReturnedResult;
	}
	if (damReturnedResult != 0) {
		document.getElementById("damGenoEcho").value = "Error: " + damReturnedResult;
		return "Error: " + damReturnedResult;
	}
	if (modifiersResult != 0)
		return "Error: " + modifiersResult;
	
	// continue happily
	return 0;
}

function clutchSize() {
	var damBreedVal = document.getElementById("damBreed").value;
	var sireBreedVal = document.getElementById("sireBreed").value;
	var damRankVal  = document.getElementById("damRank").value;
	var sireRankVal = document.getElementById("sireRank").value;
	var size, maxSize;
	
	// Max nest size
	if (damBreedVal == Breeds.WARDEN || sireBreedVal == Breeds.WARDEN)
		maxSize = MaxClutchSize.WARDEN;
	else if (damBreedVal == Breeds.RAVAGER || sireBreedVal == Breeds.RAVAGER)
		maxSize = MaxClutchSize.RAVAGER;
	else if (damBreedVal == Breeds.GEMP || sireBreedVal == Breeds.GEMP)
		maxSize = MaxClutchSize.GEMP;
	else if (damBreedVal == Breeds.SAPI || sireBreedVal == Breeds.SAPI)
	    maxSize = MaxClutchSize.SAPI;
	else if (damBreedVal == Breeds.RIDGE || sireBreedVal == Breeds.RIDGE)
		maxSize = MaxClutchSize.RIDGE;
	else if (damBreedVal == Breeds.ABYSS || sireBreedVal == Breeds.ABYSS)
		maxSize = MaxClutchSize.ABYSS;
	else // stalker size
		maxSize = MaxClutchSize.STALKER;
	
	// random clutch size
	// normally generates 0 to maxSize-1,
	// so we need to add one so the range is 1 to maxSize. 
	size = randRange(maxSize) + 1;
	
	// minimum is 2 if one parent is starter
	if (size < 2 && document.getElementById("starter").checked) {
		size = 2;
	}

	

	
	// calculate nest failure
	if (document.getElementById("starter").checked) {
		// one parent is a starter
		// so 100% pass rate.
	} else if (sireRankVal == Ranks.FLEDGLING || damRankVal == Ranks.FLEDGLING) {
		if (sireRankVal == Ranks.PRIMAL || damRankVal == Ranks.PRIMAL) {
			if (randRange(100) < 50)
				size = 0;
		} else if (sireRankVal == Ranks.ANCIENT || damRankVal == Ranks.ANCIENT) {
			if (randRange(100) < 25)
				size = 0;
		} else if (sireRankVal == Ranks.PRIMORDIAL || damRankVal == Ranks.PRIMORDIAL) {
			// do nothing; 100% pass rate.
		} else {
			if (randRange(100) < 75)
				size = 0;
		}
	}

	// use fertility potion if selected
	if (document.getElementById("FP").checked) {
		size = maxSize;
		if (!destroyedModifiers.includes("Fertility Potion destroyed.<br>"))
			destroyedModifiers += "Fertility Potion destroyed.<br>";
	}

	// Remove an egg if weak fertility
	if (document.getElementById("weakFertility").checked) {
		if (randRange(100) < 75)
			size = 1
	}

// Vigilant parents + dragon heart
    var bonus = 0;
    var dragonsHeartBonus = 0;
    var num = randRange(100)
     if (document.getElementById("damTemper").value == Tempers.TIMID) {
         bonus += 10;
     } if (document.getElementById("sireTemper").value == Tempers.TIMID) {
         bonus += 10;
     } if (document.getElementById ("DH").checked) {
        if (!destroyedModifiers.includes("Dragon's Heart destroyed.<br>"))
		destroyedModifiers += "Dragon's Heart destroyed.<br>";
    dragonsHeartBonus += 30
     }
        if (num < 2 + bonus + dragonsHeartBonus) {
            size += 1;
			document.getElementById("nestTextArea").innerHTML += "Dragon's heart succeeded!<br>";
		} else {
			document.getElementById("nestTextArea").innerHTML += "Dragon's heart failed!<br>";
		}
	
	return size;
}

function generateGender() {
	if (document.getElementById("GP").checked) {
		if (!destroyedModifiers.includes("Gender Potion destroyed.<br>"))
			destroyedModifiers += "Gender Potion destroyed.<br>";
		if (document.getElementById("maleSelected").checked) {
			return "Male";
		} else if (document.getElementById("femaleSelected").checked) {
			return "Female";
		}
	} else if (randRange(100) < 50)
		return "Male";
	else
		return "Female";
}

// generate body type
// this one is a little messy, but it makes sense
// start of common
function generateBody() {
	var damBuildVal = document.getElementById("damBuild").value;
	var sireBuildVal = document.getElementById("sireBuild").value;
	var num = randRange(200);
	if (damBuildVal == Builds.COMMON && sireBuildVal == Builds.COMMON) {
		if (num < 10)
			return "Feathered";
		if (num < 25)
			return "Plated";
		else
			return "Velour";
	} else if ((damBuildVal == Builds.COMMON && sireBuildVal == Builds.PLATED) || 
			  (damBuildVal == Builds.PLATED && sireBuildVal == Builds.COMMON)) {
		if (num < 10)
			return "Feathered";
		if (num < 30)
			return "Plated";
		else
			return "Velour";
	} else if ((damBuildVal == Builds.COMMON && sireBuildVal == Builds.FEATHERED) ||
		       (damBuildVal == Builds.FEATHERED && sireBuildVal == Builds.COMMON)) {
		if (num < 15)
			return "Feathered";
		else if (num < 35)
			return "Plated";
		else if (num < 36)
			return "Angora";
		else
			return "Velour";
	} else if  ((damBuildVal == Builds.COMMON && sireBuildVal == Builds.ANGORA) || 
			   (damBuildVal == Builds.ANGORA && sireBuildVal == Builds.COMMON)) {
		if (num < 20)
			return "Feathered";
		else if (num < 40)
			return "Plated";
		else if (num < 41)
			return "Angora";
		else if (num < 42)
			return "Imperial";
		else
			return "Velour";
	} else if ((damBuildVal == Builds.COMMON && sireBuildVal == Builds.IMPERIAL) ||
		       (damBuildVal == Builds.IMPERIAL && sireBuildVal == Builds.COMMON)) {
		if (num < 25)
			return "Feathered";
		else if (num < 55)
			return "Plated";
		else if (num < 57)
			return "Angora";
		else if (num < 58)
			return "Imperial";
		else
			return "Velour";
// start of plated
	} else if (damBuildVal == Builds.PLATED && sireBuildVal == Builds.PLATED) {
		if (num < 15)
			return "Feathered";
		if (num < 45)
			return "Plated";
		else
			return "Velour";
	} else if ((damBuildVal == Builds.PLATED && sireBuildVal == Builds.FEATHERED) ||
			   (damBuildVal == Builds.FEATHERED && sireBuildVal == Builds.PLATED)) {
		if (num < 20)
			return "Feathered";
		else if (num < 50)
			return "Plated";
		else if (num < 51)
			return "Angora";
		else
			return "Velour";
	} else if ((damBuildVal == Builds.PLATED && sireBuildVal == Builds.ANGORA) ||
			   (damBuildVal == Builds.ANGORA && sireBuildVal == Builds.PLATED)) {
		if (num < 25)
			return "Feathered";
		else if (num < 60)
			return "Plated";
		else if (num < 62)
			return "Angora";
		else if (num < 63)
			return "Imperial";
		else
			return "Velour";
	} else if ((damBuildVal == Builds.PLATED && sireBuildVal == Builds.IMPERIAL) || 
			   (damBuildVal == Builds.IMPERIAL && sireBuildVal == Builds.PLATED)) {
		if (num < 30)
			return "Feathered";
		else if (num < 70)
			return "Plated";
		else if (num < 73)
			return "Angora";
		else if (num < 74)
			return "Imperial";
		else
			return "Velour";
// start of feathered
	} else if (damBuildVal == Builds.FEATHERED && sireBuildVal == Builds.FEATHERED) {
		if (num < 20)
			return "Feathered";
		else if (num < 50)
			return "Plated";
		else if (num < 52)
			return "Angora";
		else if (num < 53)
			return "Imperial";
		else
			return "Velour";
	} else if ((damBuildVal == Builds.FEATHERED && sireBuildVal == Builds.ANGORA) ||
			   (damBuildVal == Builds.ANGORA && sireBuildVal == Builds.FEATHERED)) {
		if (num < 30)
			return "Feathered";
		else if (num < 65)
			return "Plated";
		else if (num < 63)
			return "Angora";
		else if (num < 65)
			return "Imperial";
		else
			return "Velour";
	} else if ((damBuildVal == Builds.FEATHERED && sireBuildVal == Builds.IMPERIAL) ||
		       (damBuildVal == Builds.IMPERIAL && sireBuildVal == Builds.FEATHERED)) {
		if (num < 40)
			return "Feathered";
		else if (num < 85)
			return "Plated";
		else if (num < 88)
			return "Angora";
		else if (num < 90)
			return "Imperial";
		else
			return "Velour";
 // start of Angora
	} else if (damBuildVal == Builds.ANGORA && sireBuildVal == Builds.ANGORA) {
		if (num < 35)
			return "Feathered";
		else if (num < 80)
			return "Plated";
		else if (num < 84)
			return "Angora";
		else if (num < 87)
			return "Imperial";
		else
			return "Velour";
	} else if ((damBuildVal == Builds.ANGORA && sireBuildVal == Builds.IMPERIAL) ||
			   (damBuildVal == Builds.IMPERIAL && sireBuildVal == Builds.ANGORA)) {
		if (num < 45)
			return "Feathered";
		else if (num < 95)
			return "Plated";
		else if (num < 99)
			return "Angora";
		else if (num < 112)
			return "Imperial";
		else
			return "Velour";
// start of imperial
	} else if (damBuildVal == Builds.IMPERIAL && sireBuildVal == Builds.IMPERIAL) {
		if (num < 50)
			return "Feathered";
		else if (num < 110)
			return "Plated";
		else if (num < 115)
			return "Angora";
		else if (num < 120)
			return "Imperial";
		else
			return "Velour";
	}
}

function generateSpecies() {
	var damBreedVal = document.getElementById("damBreed").value;
	var sireBreedVal = document.getElementById("sireBreed").value;
	var childBreedVal;
	var stalkerBonus = 0;
	var ravagerBonus = 0;
	var wardenBonus = 0;
    var gempBonus = 0;
  	var sapiBonus = 0;
	var ridgeBonus = 0;
	var abyssBonus = 0;

	if (document.getElementById("DI").checked) {
		if (!destroyedModifiers.includes("Dragon's Instinct destroyed.<br>"))
			destroyedModifiers += "Dragon's Instinct destroyed.<br>";
		if (document.getElementById("stalkerSelected").checked) {
			stalkerBonus = 90;
		} else if (document.getElementById("ravagerSelected").checked) {
			ravagerBonus = 90;
		} else if (document.getElementById("wardenSelected").checked) {
			wardenBonus = 90;
		} else if (document.getElementById("gempSelected").checked) {
			gempBonus = 60;
		} else if (document.getElementById("sapiSelected").checked){
		    sapiBonus = 70;
		} else if (document.getElementById("ridgeSelected").checked){
			ridgeBonus = 70;
		} else if (document.getElementById("abyssSelected").checked) {
			gempBonus = 60;
		}
	}
	if (damBreedVal == sireBreedVal) {
		childBreedVal = damBreedVal;
	} else {
		if (damBreedVal == Breeds.WARDEN || sireBreedVal == Breeds.WARDEN) {
			if (damBreedVal == Breeds.STALKER || sireBreedVal == Breeds.STALKER) {
				// case Warden x Stalker
				if (randRange(100) < (60 + stalkerBonus - wardenBonus)) {
					childBreedVal = Breeds.STALKER;
				} else {
					childBreedVal = Breeds.WARDEN;
				}
			} else if (damBreedVal == Breeds.RAVAGER || sireBreedVal == Breeds.RAVAGER) {
				// case Warden x Ravager
				if (randRange(100) < (60 + ravagerBonus - wardenBonus)) {
					childBreedVal = Breeds.RAVAGER;
				} else {
					childBreedVal = Breeds.WARDEN;
				}
			} else if (damBreedVal == Breeds.GEMP || sireBreedVal == Breeds.GEMP) {
       			// case Warden x Gemp
				if (randRange(100) < (30 + gempBonus - wardenBonus)) {
					childBreedVal = Breeds.GEMP;
				} else {
					childBreedVal = Breeds.WARDEN;
				}
      		} else  if (damBreedVal == Breeds.SAPI || sireBreedVal == Breeds.SAPI) {
	 			// case Warden x Sapiere
				if (randRange(100) < (50 + sapiBonus - wardenBonus)) {
					childBreedVal = Breeds.SAPI;
				} else { 
					childBreedVal = Breeds.WARDEN;
				}
			} else  if (damBreedVal == Breeds.RIDGE || sireBreedVal == Breeds.RIDGE) {
				// case Warden x Ridgeback
				 if (randRange(100) < (30 + ridgeBonus - wardenBonus)) {
					childBreedVal = Breeds.RIDGE;
				} else { 
					childBreedVal = Breeds.WARDEN;
					  }
			} else  if (damBreedVal == Breeds.ABYSS || sireBreedVal == Breeds.ABYSS) {
				// case Warden x Abyssal
			   if (randRange(100) < (30 + abyssBonus - wardenBonus)) {
				   childBreedVal = Breeds.ABYSS;
			   } else { 
				   childBreedVal = Breeds.WARDEN;
			   }	
			}	
		} else if (damBreedVal == Breeds.STALKER || sireBreedVal == Breeds.STALKER) {
        	if (damBreedVal == Breeds.RAVAGER || sireBreedVal == Breeds.RAVAGER){
			    // case Stalker x Ravager
			    if (randRange(100) < (50 + ravagerBonus - stalkerBonus)) {
		    		childBreedVal = Breeds.RAVAGER;
		    	} else {
		    		childBreedVal = Breeds.STALKER;
		    	}
        	} else if (damBreedVal == Breeds.GEMP || sireBreedVal == Breeds.GEMP) {
          		// case Stalker x Gemp
			    if (randRange(100) < (30 + gempBonus - stalkerBonus)) {
      				childBreedVal = Breeds.GEMP;
	      		} else {
	      			childBreedVal = Breeds.STALKER;
	      		}
        	} else if (damBreedVal == Breeds.SAPI || sireBreedVal == Breeds.SAPI){
				// Case Stalker x Sapiere
				if (randRange(100) < (30 + sapiBonus - stalkerBonus)) {
					childBreedVal = Breeds.SAPI;
				} else {
					childBreedVal = Breeds.STALKER;
				}
			} else if (damBreedVal == Breeds.RIDGE || sireBreedVal == Breeds.RIDGE){
				// Case Stalker x Ridgeback
				if (randRange(100) < (30 + ridgeBonus - stalkerBonus)) {
					childBreedVal = Breeds.RIDGE;
				} else {
					childBreedVal = Breeds.STALKER;
				}
			} else if (damBreedVal == Breeds.ABYSS || sireBreedVal == Breeds.ABYSS) {
				// case Stalker x Abyssal
			  if (randRange(100) < (30 + abyssBonus - stalkerBonus)) {
					childBreedVal = Breeds.ABYSS;
				} else {
					childBreedVal = Breeds.STALKER;
				}
		  } 
		} else if (damBreedVal == Breeds.RAVAGER || sireBreedVal == Breeds.RAVAGER) {
		if (damBreedVal == Breeds.GEMP || sireBreedVal == Breeds.GEMP) {
      		// case Ravager x Gemp
      			if (randRange(100) < (30 + gempBonus - ravagerBonus)) {
      				childBreedVal = Breeds.GEMP;
	      		} else {
	      			childBreedVal = Breeds.RAVAGER;
	      		}
    		} else if (damBreedVal == Breeds.SAPI || sireBreedVal == Breeds.SAPI) { 
				// Case Ravager x Sapiere	
				if (randRange (100) < (30 + sapiBonus - ravagerBonus)) { 
					childBreedVal = Breeds.SAPI;
				} else { 
					childBreedVal = Breeds.RAVAGER;
				}
			} else if (damBreedVal == Breeds.RIDGE || sireBreedVal == Breeds.RIDGE) { 
				// Case Ravager x Ridgeback	
				if (randRange (100) < (30 + ridgeBonus - ravagerBonus)) { 
						childBreedVal = Breeds.RIDGE;
				} else { 
						childBreedVal = Breeds.RAVAGER;
				}
			} else if (damBreedVal == Breeds.ABYSS || sireBreedVal == Breeds.ABYSS) { 
				// Case Ravager x Abyss
				if (randRange (100) < (30 + abyssBonus - ravagerBonus)) { 
					childBreedVal = Breeds.ABYSS;
				} else { 
					childBreedVal = Breeds.RAVAGER;
				}
			} 
		} else if (damBreedVal == Breeds.GEMP || sireBreedVal == Breeds.GEMP) {
			if (damBreedVal == Breeds.SAPI || sireBreedVal == Breeds.SAPI) {
				// Case GEMP x Sapiere
				if (randRange (100) < (50 + sapiBonus - gempBonus)) {
				childBreedVal = Breeds.SAPI;
				} else {
				childBreedVal = Breeds.GEMP;
				}	
			} else if (damBreedVal == Breeds.RIDGE || sireBreedVal == Breeds.RIDGE) { 
				// Case GEMP x Ridgeback	
				if (randRange (100) < (30 + ridgeBonus - gempBonus)) { 
					childBreedVal = Breeds.RIDGE;
				} else { 
					childBreedVal = Breeds.GEMP;
				}
			} else if (damBreedVal == Breeds.ABYSS || sireBreedVal == Breeds.ABYSS) { 
				// Case GEMP x Abyssal
				if (randRange (100) < (30 + abyssBonus - gempBonus)) { 
						childBreedVal = Breeds.ABYSS;
				} else { 
						childBreedVal = Breeds.GEMP;
				}
			}
		}  else if (damBreedVal == Breeds.SAPI || sireBreedVal == Breeds.SAPI) {
				if (damBreedVal == Breeds.RIDGE || sireBreedVal == Breeds.RIDGE) {
					  // case Sapiere x Ridgeback
						  if (randRange(100) < (30 + ridgeBonus - sapiBonus)) {
							  childBreedVal = Breeds.RIDGE;
						  } else {
							  childBreedVal = Breeds.SAPI;
						  }
			} else if (damBreedVal == Breeds.ABYSS || sireBreedVal == Breeds.ABYSS) { 
					// Case Sapiere x Abyssal
					if (randRange (100) < (30 + abyssBonus - sapiBonus)) { 
							childBreedVal = Breeds.ABYSS;
					} else { 
							childBreedVal = Breeds.SAPI;
					}
				}
			} else if (damBreedVal == Breeds.RIDGE || sireBreedVal == Breeds.RIDGE) {
			if (damBreedVal == Breeds.ABYSS || sireBreedVal == Breeds.ABYSS) {
				// Case RIDGE X ABYSS
				if (randRange (100) < (50 + abyssBonus - ridgeBonus)) {
					childBreedVal = Breeds.ABYSS;
				} else {
					childBreedVal = Breeds.RIDGE;
				}
			}
		}	
	}

	// convert to string
	var result = "";
	childBreed = childBreedVal;
	if (childBreedVal == Breeds.STALKER) {
		result = "Stalker Wyvern";
	} else if (childBreedVal == Breeds.RAVAGER) {
		result = "Ravager Wyvern";
	} else if (childBreedVal == Breeds.WARDEN) {
		result = "Warden Dragon";
	} else if (childBreedVal == Breeds.GEMP) {
    	result = "Greater Emperor";
  	} else if (childBreedVal == Breeds.SAPI){
      	result = "Sapiere Dragon";
	} else if (childBreedVal == Breeds.RIDGE){
		result = "Ridgewalker Drake";
  	}  else if (childBreedVal == Breeds.ABYSS){
		result = "Abyssal Basileus";
  	} 

	return result;
}

function generateTemper() {
	var damTemperVal = document.getElementById("damTemper").value;
	var sireTemperVal = document.getElementById("sireTemper").value;
	var childTemperVal;
	// bonuses
	var bonusAmmount = 60;
	var timidBonus = 0;
	var aggressiveBonus = 0;
	var calmBonus = 0;
	var sinisterBonus = 0;
	var bonusID = 0;
	
	if (document.getElementById("BF").checked) {
		if (!destroyedModifiers.includes("Temper Potion destroyed.<br>"))
			destroyedModifiers += "Temper Potion destroyed.<br>";
		if (document.getElementById("timidSelected").checked) {
			timidBonus = bonusAmmount;
			bonusID = Tempers.TIMID;
		} else if (document.getElementById("aggressiveSelected").checked) {
			aggressiveBonus = bonusAmmount;
			bonusID = Tempers.AGGRESSIVE;
		} else if (document.getElementById("calmSelected").checked) {
			calmBonus = bonusAmmount;
			bonusID = Tempers.CALM;
		} else if (document.getElementById("sinisterSelected").checked) {
			sinisterBonus = bonusAmmount;
			bonusID = Tempers.SINISTER;
		}
	}
	var roll = randRange(100);
	
	// The math for this is a little odd;
	// if there are two possible tempers,
	// offset barrier by bonusAmmount in
	// favor of the selected temper.
	// If there are three possible tempers,
	// it depends where the temper stands in the range.
	// If it's the first temper, add bonusAmmount
	// to the range, and then add bonusAmmount/2 to the range of the next.
	// this effectively expands the first by 10, and reduces the next two by 5
	// (assuming bonusAmmount of 10).
	// If it's the second, we reduce the range of the first by bonusAmmount/2,
	// and then add bonusAmmount/2 to the second. This effectively expands
	// the middle temper by bonusAmmount.
	// Finally, if it's the last temper, we reduce the first by bonusAmmount/2,
	// and then reduce the middle by bonusAmmount.
	
	if (damTemperVal == Tempers.TIMID && sireTemperVal == Tempers.TIMID) {
		// case both are timid
		if (roll < (90 + timidBonus - aggressiveBonus)) {
			childTemperVal = Tempers.TIMID;
		} else {
			childTemperVal = Tempers.AGGRESSIVE;
		}
	} else if ((damTemperVal == Tempers.TIMID && sireTemperVal == Tempers.AGGRESSIVE) ||
		       (damTemperVal == Tempers.AGGRESSIVE && sireTemperVal == Tempers.TIMID)) {
		// case one is timid one is aggressive
		if (roll < (70 + timidBonus - aggressiveBonus/2 - calmBonus/2)) {
			childTemperVal = Tempers.TIMID;
		} else if (roll < (95 + aggressiveBonus/2 + timidBonus/2 - calmBonus)) {
			childTemperVal = Tempers.AGGRESSIVE;
		} else {
			childTemperVal = Tempers.CALM;
		}
	} else if ((damTemperVal == Tempers.TIMID && sireTemperVal == Tempers.CALM) ||
		       (damTemperVal == Tempers.CALM && sireTemperVal == Tempers.TIMID)) {
		// one is timid, one is calm
		if (roll < (65 + timidBonus - aggressiveBonus/2 - calmBonus/2)) {
			childTemperVal = Tempers.TIMID;
		} else if (roll < (85 + aggressiveBonus/2 + timidBonus/2 - calmBonus)) {
			childTemperVal = Tempers.AGGRESSIVE;
		} else {
			childTemperVal = Tempers.CALM;
		}
	} else if ((damTemperVal == Tempers.TIMID && sireTemperVal == Tempers.SINISTER) ||
		       (damTemperVal == Tempers.SINISTER && sireTemperVal == Tempers.TIMID)) {
		// one is timid, one is sinister
		if (roll < (80 + timidBonus - aggressiveBonus/2 - sinisterBonus/2)) {
			childTemperVal = Tempers.TIMID;
		} else if (roll < (90 + aggressiveBonus/2 + timidBonus/2 - sinisterBonus)) {
			childTemperVal = Tempers.AGGRESSIVE;
		} else {
			childTemperVal = Tempers.SINISTER;
		}
	} else if (damTemperVal == Tempers.AGGRESSIVE && sireTemperVal == Tempers.AGGRESSIVE) {
		// both are aggressive
		if (roll < (80 + timidBonus - aggressiveBonus/2 - calmBonus/2)) {
			childTemperVal = Tempers.TIMID;
		} else if (roll < (90 + aggressiveBonus/2 + timidBonus/2 - calmBonus)) {
			childTemperVal = Tempers.AGGRESSIVE;
		} else {
			childTemperVal = Tempers.CALM;
		}
	} else if ((damTemperVal == Tempers.AGGRESSIVE && sireTemperVal == Tempers.CALM) ||
		       (damTemperVal == Tempers.CALM && sireTemperVal == Tempers.AGGRESSIVE)) {
		// one is aggressive, one is calm
		if (roll < (75 + timidBonus - aggressiveBonus/2 - calmBonus/2)) {
			childTemperVal = Tempers.TIMID;
		} else if (roll < (85 + aggressiveBonus/2 + timidBonus/2 - calmBonus)) {
			childTemperVal = Tempers.AGGRESSIVE;
		} else {
			childTemperVal = Tempers.CALM;
		}
	} else if ((damTemperVal == Tempers.AGGRESSIVE && sireTemperVal == Tempers.SINISTER) ||
		       (damTemperVal == Tempers.SINISTER && sireTemperVal == Tempers.AGGRESSIVE)) {
		// one is aggressive, one is sinister
		if (roll < (75 + timidBonus - aggressiveBonus/2 - sinisterBonus/2)) {
			childTemperVal = Tempers.TIMID;
		} else if (roll < (90 + aggressiveBonus/2 + timidBonus/2 - sinisterBonus)) {
			childTemperVal = Tempers.AGGRESSIVE;
		} else {
			childTemperVal = Tempers.SINISTER;
		}
	} else if (damTemperVal == Tempers.CALM && sireTemperVal == Tempers.CALM) {
		// both are calm
		if (roll < (75 + timidBonus - aggressiveBonus/2 - calmBonus/2)) {
			childTemperVal = Tempers.TIMID;
		} else if (roll < (80 + aggressiveBonus/2 + timidBonus/2 - calmBonus)) {
			childTemperVal = Tempers.AGGRESSIVE;
		} else {
			childTemperVal = Tempers.CALM;
		}
	} else if ((damTemperVal == Tempers.CALM && sireTemperVal == Tempers.SINISTER) ||
		       (damTemperVal == Tempers.SINISTER && sireTemperVal == Tempers.CALM)) {
		// one is calm, one is sinister
		if (roll < (70 + timidBonus - aggressiveBonus/3 - sinisterBonus/3 - calmBonus/3)) {
			childTemperVal = Tempers.TIMID;
		} else if (roll < (80 + aggressiveBonus*2/3 + timidBonus*2/3 - sinisterBonus*2/3 - calmBonus*2/3)) {
			childTemperVal = Tempers.AGGRESSIVE;
		} else if (roll < (90 + aggressiveBonus/3 + timidBonus/3 - sinisterBonus + calmBonus/3)){
			childTemperVal = Tempers.CALM;
		} else {
			childTemperVal = Tempers.SINISTER;
		}
	} else if (damTemperVal == Tempers.SINISTER && sireTemperVal == Tempers.SINISTER) {
		// both are sinister
		if (roll < (85 + timidBonus - sinisterBonus)) {
			childTemperVal = Tempers.TIMID;
		} else {
			childTemperVal = Tempers.SINISTER;
		}
	}
	
	// convert to string
	var result = "";
	if (childTemperVal == Tempers.TIMID) {
		result = "Vigilant";
	} else if (childTemperVal == Tempers.AGGRESSIVE) {
		result = "Aggressive";
	} else if (childTemperVal == Tempers.CALM) {
		result = "Calm";
	} else if (childTemperVal == Tempers.SINISTER) {
		result = "Sinister";
	}
	
	return result;
}

function generateUmber() {
	var damGenome = document.getElementById("damGenoType").value;
	var sireGenome = document.getElementById("sireGenoType").value;
	var damCoat = damGenome.substr(0, 2);
	var sireCoat = sireGenome.substr(0, 2);
	
	// check for modifier
	var bonus = 0;
	if (document.getElementById("BU").checked) {
		if (!destroyedModifiers.includes("Bottle of Bronze destroyed.<br>"))
			destroyedModifiers += "Bottle of Bronze destroyed.<br>";
		bonus = 15;
	}
	
	// sanitize
	if (damCoat == "bB") {
		damCoat = "Bb";
	}
	if (sireCoat == "bB") {
		sireCoat = "Bb";
	}
	
	// roll
	var roll = randRange(100);
	var result = "";
	
	// determine dominance
	if (damCoat == "bb" && sireCoat == "bb") {
		return "bb";
	} else if (damCoat == "Bb" && sireCoat == "Bb") {
		if (roll < 10) {
			result = "BB";
		} else if (roll < (50 + bonus)) {
			result = "Bb";
		} else {
			result = "bb";
		}
	} else if (damCoat == "BB" && sireCoat == "BB") {
		if (roll < 20) {
			result = "BB";
		} else if (roll < (65 + bonus)) {
			result = "Bb";
		} else {
			result = "bb";
		}
	} else if ((damCoat == "Bb" && sireCoat == "BB") ||
		       (damCoat == "BB" && sireCoat == "Bb")) {
		if (roll < 15) {
			result = "BB";
		} else if (roll < (60 + bonus)) {
			result = "Bb";
		} else {
			result = "bb";
		}
	} else if ((damCoat == "bb" && sireCoat == "BB") ||
		       (damCoat == "BB" && sireCoat == "bb")) {
		if (roll < (55 + bonus)) {
			result = "Bb";
		} else {
			result = "bb";
		}
	} else if ((damCoat == "bb" && sireCoat == "Bb") ||
		       (damCoat == "Bb" && sireCoat == "bb")) {
		if (roll < (45 + bonus)) {
			result = "Bb";
		} else {
			result = "bb";
		}
	}
	
	return result;
}
function generateHaze() {
	var damGenome = document.getElementById("damGenoType").value;
	var sireGenome = document.getElementById("sireGenoType").value;
	var damCoat = damGenome.substr(3, 2);
	var sireCoat = sireGenome.substr(3, 2);
	
	// check for modifier
	var bonus = 0;
	if (document.getElementById("BH").checked) {
		if (!destroyedModifiers.includes("Bottle of Tarnished destroyed.<br>"))
			destroyedModifiers += "Bottle of Tarnished destroyed.<br>";
		bonus = 20;
	}
	
	// sanitize
	if (damCoat == "tT") {
		damCoat = "Tt";
	}
	if (sireCoat == "tT") {
		sireCoat = "Tt";
	}
	
	// roll
	var roll = randRange(100);
	var result = "";
	
	// determine dominance
	if (damCoat == "tt" && sireCoat == "tt") {
		return "tt";
	} else if (damCoat == "Tt" && sireCoat == "Tt") {
		if (roll < 10) {
			result = "TT";
		} else if (roll < (45 + bonus)) {
			result = "Tt";
		} else {
			result = "tt";
		}
	} else if (damCoat == "TT" && sireCoat == "TT") {
		if (roll < 19) {
			result = "TT";
		} else if (roll < (60 + bonus)) {
			result = "Tt";
		} else {
			result = "tt";
		}
	} else if ((damCoat == "Tt" && sireCoat == "TT") ||
		       (damCoat == "TT" && sireCoat == "Tt")) {
		if (roll < 14) {
			result = "TT";
		} else if (roll < (55 + bonus)) {
			result = "Tt";
		} else {
			result = "tt";
		}
	} else if ((damCoat == "tt" && sireCoat == "TT") ||
		       (damCoat == "TT" && sireCoat == "tt")) {
		if (roll < (50 + bonus)) {
			result = "Tt";
		} else {
			result = "tt";
		}
	} else if ((damCoat == "tt" && sireCoat == "Tt") ||
		       (damCoat == "Tt" && sireCoat == "tt")) {
		if (roll < (40 + bonus)) {
			result = "Tt";
		} else {
			result = "tt";
		}
	}
	
	return result;
}


function generateIvory() {
	var damGenome = document.getElementById("damGenoType").value;
	var sireGenome = document.getElementById("sireGenoType").value;
	var damCoat = damGenome.substr(6, 2);
	var sireCoat = sireGenome.substr(6, 2);
	
	// check for modifier
	var bonus = 0;
	if (document.getElementById("BI").checked) {
		if (!destroyedModifiers.includes("Bottle of Silver destroyed.<br>"))
			destroyedModifiers += "Bottle of Silver destroyed.<br>";
		bonus = 25;
	}
	
	// sanitize
	if (damCoat == "sS") {
		damCoat = "Ss";
	}
	if (sireCoat == "sS") {
		sireCoat = "Ss";
	}
	
	// roll
	var roll = randRange(100);
	var result = "";
	
	// determine dominance
	if (damCoat == "ss" && sireCoat == "ss") {
		return "ss";
	} else if (damCoat == "Ss" && sireCoat == "Ss") {
		if (roll < 8) {
			result = "SS";
		} else if (roll < (40 + bonus)) {
			result = "Ss";
		} else {
			result = "ss";
		}
	} else if (damCoat == "SS" && sireCoat == "SS") {
		if (roll < 18) {
			result = "SS";
		} else if (roll < (55 + bonus)) {
			result = "Ss";
		} else {
		        result = "ss";
		  }      
	} else if ((damCoat == "Ss" && sireCoat == "SS") ||
		       (damCoat == "SS" && sireCoat == "Ss")) {
		if (roll < 13) {
			result = "ss";
		} else if (roll < (50 + bonus)) {
			result = "Ss";
		} else {
			result = "ss";
		}
	} else if ((damCoat == "ss" && sireCoat == "SS") ||
		       (damCoat == "SS" && sireCoat == "ss")) {
		if (roll < (45 + bonus)) {
			result = "Ss";
		} else {
			result = "ss";
		}
	} else if ((damCoat == "ss" && sireCoat == "Ss") ||
		       (damCoat == "Ss" && sireCoat == "ss")) {
		if (roll < (35 + bonus)) {
			result = "Ss";
		} else {
			result = "ss";
		}
	}
	
	return result;
}

function generateVanta() {
	var damGenome = document.getElementById("damGenoType").value;
	var sireGenome = document.getElementById("sireGenoType").value;
	var damCoat = damGenome.substr(9, 2);
	var sireCoat = sireGenome.substr(9, 2);
	
	// check for modifier
	var bonus = 0;
	if (document.getElementById("BV").checked) {
		if (!destroyedModifiers.includes("Bottle of Obsidian destroyed.<br>"))
			destroyedModifiers += "Bottle of Obsidian destroyed.<br>";
		bonus = 30;
	}
	
	// sanitize
	if (damCoat == "nN") {
		damCoat = "Nn";
	}
	if (sireCoat == "nN") {
		sireCoat = "Nn";
	}
	
	// roll
	var roll = randRange(100);
	var result = "";
	
	// determine dominance
	if (damCoat == "nn" && sireCoat == "nn") {
		return "nn";
	} else if (damCoat == "Nn" && sireCoat == "Nn") {
		if (roll < 7) {
			result = "NN";
		} else if (roll < (35 + bonus)) {
			result = "Nn";
		} else {
			result = "nn";
		}
	} else if (damCoat == "NN" && sireCoat == "NN") {
		if (roll < 17) {
			result = "NN";
		} else if (roll < (50 + bonus)) { 
			result = "Nn";
		} else {
		        result = "nn";
		 }       
	} else if ((damCoat == "Nn" && sireCoat == "NN") ||
		       (damCoat == "NN" && sireCoat == "Nn")) {
		if (roll < 12) {
			result = "NN";
		} else if (roll < (45 + bonus)) {
			result = "Nn";
		} else {
			result = "nn";
		}
	} else if ((damCoat == "nn" && sireCoat == "NN") ||
		       (damCoat == "NN" && sireCoat == "nn")) {
		if (roll < (40 + bonus)) {
			result = "Nn";
		} else {
			result = "nn";
		}
	} else if ((damCoat == "nn" && sireCoat == "Nn") ||
		       (damCoat == "Nn" && sireCoat == "nn")) {
		if (roll < (30 + bonus)) {
			result = "Nn";
		} else {
			result = "nn";
		}
	}
	
	return result;
}

function generateCoat() {
	var bronze, Tarnished, silver, obsidian;
	bronze = generateUmber();
	Tarnished = generateHaze();
	silver = generateIvory();
	obsidian = generateVanta();
	var result = "" + bronze + "/" + Tarnished + "/" + silver + "/" + obsidian ;
	// handle default coats
	if (result == "bb/tt/ss/nn") {
		var damGenome = document.getElementById("damGenoType").value;
		var sireGenome = document.getElementById("sireGenoType").value;
		var damCoat = damGenome.substr(0, 2);
		var sireCoat = sireGenome.substr(0, 2);
		if (damCoat != "bb" || sireCoat != "bb") {
			result = "Bb/tt/ss/nn";
		} else {
			damCoat = damGenome.substr(3, 2);
			sireCoat = sireGenome.substr(3, 2);
			if (damCoat != "tt" || sireCoat != "tt") {
				result = "bb/Tt/ss/nn";
			} else {
				damCoat = damGenome.substr(6, 2);
				sireCoat = sireGenome.substr(6, 2);
				if (damCoat != "ss" || sireCoat != "ss") {
					result = "bb/tt/Ss/nn";
				} else {
					damCoat = damGenome.substr(9, 2);
					sireCoat = sireGenome.substr(9, 2);
					if (damCoat != "nn" || sireCoat != "nn") {
						result = "bb/tt/ss/Nn";
					} else {
						result = "INVALID COAT: IS PARENT bb/tt/ss/nn?"
					}
				}
			}
		}
	}
	return result;
}

function generateHealth() {
	var childHealth = "";
	if (!document.getElementById("inbreeding").checked) {
		return "Healthy";
	} else {
		var roll = randRange(100);
		if (roll < 40) {
			childHealth += "Stillborn "
		} else {
			// determine other disabilties
			roll = randRange(100);
			if (roll < 60)
				childHealth += "Infertile ";

			roll = randRange(100);
			if (roll < 30)
				childHealth += "Blind ";

			roll = randRange(100);
			if (roll < 10)
				childHealth += "Hydra ";

			roll = randRange(100);
			if (roll < 5)
				childHealth += "Crippled Wings ";

			roll = randRange(100);
			if (roll < 5)
				childHealth += "Mute ";

			roll = randRange(100);
			if (roll < 5)
				childHealth += "Mini ";
		}
	}
	
	// If at this point still empty, default to Healthy.
	if(childHealth == "") return "Healthy";
    return childHealth;
}

function generateEyes(childRarity) {
	if (childRarity == Rarity.COMMON) {
		return commonEyes[randRange(commonEyes.length)];
	} else if (childRarity == Rarity.UNCOMMON) {
		return uncommonEyes[randRange(uncommonEyes.length)];
	} else if (childRarity == Rarity.RARE) {
		return rareEyes[randRange(rareEyes.length)];
	} else if (childRarity == Rarity.VERY_RARE) {
		return veryRareEyes[randRange(veryRareEyes.length)];
	}
}

function generateHorns(childRarity) {
	if (childRarity == Rarity.COMMON) {
		return commonHorns[randRange(commonHorns.length)];
	} else if (childRarity == Rarity.UNCOMMON) {
		return uncommonHorns[randRange(uncommonHorns.length)];
	} else if (childRarity == Rarity.RARE) {
		return rareHorns[randRange(rareHorns.length)];
	} else if (childRarity == Rarity.VERY_RARE) {
		return veryRareHorns[randRange(veryRareHorns.length)];
	}
}

function generateEars(childRarity) {
	if (childRarity == Rarity.COMMON) {
		return commonEars[randRange(commonEars.length)];
	} else if (childRarity == Rarity.UNCOMMON) {
		return uncommonEars[randRange(uncommonEars.length)];
	} else if (childRarity == Rarity.RARE) {
		return rareEars[randRange(rareEars.length)];
	} else if (childRarity == Rarity.VERY_RARE) {
		return veryRareEars[randRange(veryRareEars.length)];
	}
}
function generateTail(childRarity) {
	if (childRarity == Rarity.COMMON) {
		return commonTails[randRange(commonTails.length)];
	} else if (childRarity == Rarity.UNCOMMON) {
		return uncommonTails[randRange(uncommonTails.length)];
	} else if (childRarity == Rarity.RARE) {
		return rareTails[randRange(rareTails.length)];
	} else if (childRarity == Rarity.VERY_RARE) {
		return veryRareTails[randRange(veryRareTails.length)];
	}
}
function generateTrait(traitToGen) {
	var sireRarity = document.getElementById("sire" + traitToGen).value;
	var damRarity = document.getElementById("dam" + traitToGen).value;
	var childRarity = 0;
	
	// handle case where ravager x anything produces a ravager
	if (traitToGen == "Ears" || traitToGen == "Tail") {
		if (document.getElementById("sireBreed").value == Breeds.RAVAGER && document.getElementById("damBreed").value != Breeds.RAVAGER) {
			damRarity = Rarity.COMMON;
		} else if (document.getElementById("damBreed").value == Breeds.RAVAGER && document.getElementById("sireBreed").value != Breeds.RAVAGER) {
			sireRarity = Rarity.COMMON;
		}
	}

	// check for modifier
	var bonus = 0;
	if (document.getElementById("AT").checked) {
		if (!destroyedModifiers.includes("Aether Tonic destroyed.<br>"))
			destroyedModifiers += "Aether Tonic destroyed.<br>";
		bonus = 20;
	}
	
	var roll = randRange(100);
	//SAME PAIRINGS//
	if (sireRarity == Rarity.COMMON && damRarity == Rarity.COMMON) {
	    if (roll < 10 - bonus/3) {
	            childRarity = Rarity.UNCOMMON;
		} else {
				childRarity = Rarity.COMMON;
		}
		childRarity = Rarity.COMMON;
	} else if (sireRarity == Rarity.UNCOMMON && damRarity == Rarity.UNCOMMON) {
		if (roll < 20 - bonus/3) {
			childRarity = Rarity.COMMON;
		} else if (roll < 30 - bonus/3) {
			childRarity = Rarity.RARE;
		} else {
			childRarity = Rarity.UNCOMMON;	
		}
	} else if (sireRarity == Rarity.RARE && damRarity == Rarity.RARE) {
		if (roll < 10 - bonus/3) {
			childRarity = Rarity.COMMON;
		} else if (roll < 30 - bonus/3) { 
			childRarity = Rarity.UNCOMMON;
		} else if (roll < 90 - bonus/3) {
			childRarity = Rarity.VERY_RARE;
		} else {
			childRarity = Rarity.RARE;
		}
	} else if (sireRarity == Rarity.VERY_RARE && damRarity == Rarity.VERY_RARE) {
		if (roll < 5 - bonus/3) {
			childRarity = Rarity.COMMON;
		} else if (roll < 20 - bonus/3) { 
			childRarity = Rarity.UNCOMMON;
		} else if (roll < 50 - bonus/3) {
			childRarity = Rarity.RARE;
		} else {
			childRarity = Rarity.VERY_RARE;
		}
		//DIFFERENT PAIRINGS//
	} else if ((sireRarity == Rarity.COMMON && damRarity == Rarity.UNCOMMON) ||
		       (sireRarity == Rarity.UNCOMMON && damRarity == Rarity.COMMON)){
		if (roll < 50 - bonus/3) {
			childRarity = Rarity.COMMON;
		} else {
			childRarity = Rarity.UNCOMMON;
		}
	} else if ((sireRarity == Rarity.COMMON && damRarity == Rarity.RARE) ||
		       (sireRarity == Rarity.RARE && damRarity == Rarity.COMMON)) {
		if (roll < 60 - bonus/3) {
			childRarity = Rarity.COMMON;
		} else if (roll < 70 - bonus/3) { 
			childRarity = Rarity.UNCOMMON;
		} else {
			childRarity = Rarity.RARE;
		}
	} else if ((sireRarity == Rarity.COMMON && damRarity == Rarity.VERY_RARE) ||
		       (sireRarity == Rarity.VERY_RARE && damRarity == Rarity.COMMON)) {
		if (roll < 70 - bonus/3) {
			childRarity = Rarity.COMMON;
		} else if (roll < 75 - bonus/3) { 
			childRarity = Rarity.UNCOMMON;
		} else if (roll < 80 - bonus/3) {
			childRarity = Rarity.RARE;
		} else {
			childRarity = Rarity.VERY_RARE
		}
	} else if ((sireRarity == Rarity.UNCOMMON && damRarity == Rarity.RARE) ||
		       (sireRarity == Rarity.RARE && damRarity == Rarity.UNCOMMON)) {
		if (roll < 20 - bonus/3) {
			childRarity = Rarity.COMMON;
		} else if (roll < 70 - bonus/3) { 
			childRarity = Rarity.UNCOMMON;
		} else {
			childRarity = Rarity.RARE;
		}
	} else if ((sireRarity == Rarity.UNCOMMON && damRarity == Rarity.VERY_RARE) ||
		       (sireRarity == Rarity.VERY_RARE && damRarity == Rarity.UNCOMMON)) {
		if (roll < 10 - bonus/3) {
			childRarity = Rarity.COMMON;
		} else if (roll < 50 - bonus/3) { 
			childRarity = Rarity.UNCOMMON;
		} else if (roll < 70 - bonus/3) {
			childRarity = Rarity.RARE;
		} else {
			childRarity = Rarity.VERY_RARE;
		}
	} else if ((sireRarity == Rarity.RARE && damRarity == Rarity.VERY_RARE) ||
		       (sireRarity == Rarity.VERY_RARE && damRarity == Rarity.RARE)) {
		if (roll < 5 - bonus/3) {
			childRarity = Rarity.COMMON;
		} else if (roll < 25 - bonus/3) { 
			childRarity = Rarity.UNCOMMON;
		} else if (roll < 65 - bonus/3) {
			childRarity = Rarity.RARE;
		} else {
			childRarity = Rarity.VERY_RARE
		}
	}
	
	if (traitToGen == "Eyes") {
		return generateEyes(childRarity);
	} else if (traitToGen == "Horns") {
		return generateHorns(childRarity);
	} else if (traitToGen == "Ears") {
		return generateEars(childRarity);
	} else if (traitToGen == "Tail") {
		return generateTail(childRarity);
	} else
		return "INVALID TRAIT!"
}

function generateTraits() {
	var childTraits = "";
	childTraits += generateTrait("Eyes") + ", ";
	childTraits += generateTrait("Horns");
	if (childBreed == Breeds.RAVAGER) {
		childTraits += ", " + generateTrait("Ears") + ", ";
		childTraits += generateTrait("Tail");
	}
	return "" + childTraits;
}

function commonMarkingPass(markID, sireDom, damDom, oneParentMissing) {
	var result = "";
	var roll = randRange(100);
	// DOM X NULL + REC X NULL
	if (oneParentMissing) {
		if (sireDom || damDom) {
			if (roll < 65)
				result = "n" + markID;
		} else {
			if (roll < 40)
				result = "n" + markID;
		}
	// REC X REC
	} else if (!sireDom && !damDom) {
		if (roll < 10)
			result = markID + "" + markID;
		else if (roll < 55) 
			result = "n" + markID;
	//DOM X REC
	} else if (sireDom && damDom) {
		if (roll < 15)
			result = markID + "" + markID;
		else if (roll < 70) 
			result = "n" + markID;
	//DOM X DOM
	} else {
		if (roll < 25)
			result = markID + "" + markID;
		else if (roll < 80) 
			result = "n" + markID;
	}
	return result;
}

function uncommonMarkingPass(markID, sireDom, damDom, oneParentMissing) {
	var result = "";
	var roll = randRange(100);
	if (oneParentMissing) {
		if (sireDom || damDom) {
			if (roll < 45)
				result = "n" + markID;
		} else {
			if (roll < 30)
				result = "n" + markID;
		}
	} else if (!sireDom && !damDom) {
		if (roll < 5)
			result = markID + "" + markID;
		else if (roll < 40) 
			result = "n" + markID;
	} else if (sireDom && damDom) {
		if (roll < 10)
			result = markID + "" + markID;
		else if (roll < 50) 
			result = "n" + markID;
	} else {
		if (roll < 30)
			result = markID + "" + markID;
		else if (roll < 60) 
			result = "n" + markID;
	}
	
	return result;
}

function rareMarkingPass(markID, sireDom, damDom, oneParentMissing) {
	var result = "";
	var roll = randRange(100);
	if (oneParentMissing) {
		if (sireDom || damDom) {
			if (roll < 20)
				result = "n" + markID;
		} else {
			if (roll < 4)
				result = "n" + markID;
		}
	} else if (!sireDom && !damDom) {
		if (roll < 5)
			result = markID + "" + markID;
		else if (roll < 15) 
			result = "n" + markID;
	} else if (sireDom && damDom) {
		if (roll < 10)
			result = markID + "" + markID;
		else if (roll < 25) 
			result = "n" + markID;
	} else {
		if (roll < 15)
			result = markID + "" + markID;
		else if (roll < 40) 
			result = "n" + markID;
	}
	
	return result;
}

function veryRareMarkingPass(markID, sireDom, damDom, oneParentMissing) {
	var result = "";
	var roll = randRange(100);
	if (oneParentMissing) {
		if (sireDom || damDom) {
			if (roll < 10)
				result = "n" + markID;
		} else {
			if (roll < 3)
				result = "n" + markID;
		}
	} else if (!sireDom && !damDom) {
		if (roll < 4)
			result = markID + "" + markID;
		else if (roll < 10) 
			result = "n" + markID;
	} else if (sireDom && damDom) {
		if (roll < 5)
			result = markID + "" + markID;
		else if (roll < 15) 
			result = "n" + markID;
	} else {
		if (roll < 10)
			result = markID + "" + markID;
		else if (roll < 30) 
			result = "n" + markID;
	}
	
	return result;
}

function generateColorMod() {
	var roll, modRarity, result;
	roll = randRange(100);
	if (roll < 60) {
		modRarity = Rarity.COMMON;
		result = commonColorMods[randRange(commonColorMods.length)];
	} else if (roll < 85) {
		modRarity = Rarity.UNCOMMON;
		result = uncommonColorMods[randRange(uncommonColorMods.length)];
	} else if (roll < 95) {
		modRarity = Rarity.RARE;
		result = rareColorMods[randRange(rareColorMods.length)];
	} else {
		modRarity = Rarity.VERY_RARE;
		result = veryRareColorMods[randRange(veryRareColorMods.length)];
	}
	
	return result;
}

function generateAgoutiColorMod() {
	var roll, modRarity, result;
	roll = randRange(100);
	if (roll < 30) {
		modRarity = Rarity.PETTY;
		result = pettyColorMods[randRange(pettyColorMods.length)];
	} else if (roll < 60) {
		modRarity = Rarity.COMMON;
		result = commonColorMods[randRange(commonColorMods.length)];
	} else if (roll < 80) {
		modRarity = Rarity.UNCOMMON;
		result = uncommonColorMods[randRange(uncommonColorMods.length)];
    } else if (roll < 95) {
		modRarity = Rarity.RARE;
		result = rareColorMods[randRange(rareColorMods.length)];
	} else {
		modRarity = Rarity.VERY_RARE;
		result = veryRareColorMods[randRange(veryRareColorMods.length)];
	}
	
	return result;
}

function evaluateMarkingPass(markID, markingRarity, sireDom, damDom, oneParentMissing) {
	var result = "";
	if (markingRarity == Rarity.COMMON) {
		result = commonMarkingPass(markID, sireDom, damDom, oneParentMissing);
	} else if (markingRarity == Rarity.UNCOMMON) {
		result = uncommonMarkingPass(markID, sireDom, damDom, oneParentMissing);
	} else if (markingRarity == Rarity.RARE) {
		result = rareMarkingPass(markID, sireDom, damDom, oneParentMissing);
	} else if (markingRarity == Rarity.VERY_RARE) {
		result = veryRareMarkingPass(markID, sireDom, damDom, oneParentMissing);
	}
	
	if (result == "nRad" || result == "RadRad") {
		result += "-";
		if (document.getElementById("RB").checked) {
			result += document.getElementById("colorMod").value;
			if (!destroyedModifiers.includes("Radiance Bond only destroyed if one child has radiance or Agouti.<br>"))
				destroyedModifiers += "Radiance Bond only destroyed if one child has radiance or Agouti.<br>";
		} else {
			result += generateColorMod();
		}
	}
    if (result == "nAg" || result == "AgAg") {
		result += "-";
		if (document.getElementById("RB").checked) {
			result += document.getElementById("colorMod").value;
			if (!destroyedModifiers.includes("Radiance Bond only destroyed if one child has radiance or Agouti.<br>"))
				destroyedModifiers += "Radiance Bond only destroyed if one child has radiance or Agouti.<br>";
		} else {
			result += generateAgoutiColorMod();
		}
	}
	
	return result;
}

function childAlreadyHas(specificMarking) {
	var recMark = "";
	var domMark = "";
	var markBase = "";
	if (specificMarking.charAt(0) == "n") {
		markBase = specificMarking.substr(1, specificMarking.length - 1);
	} else {
		markBase = specificMarking.substr(0, specificMarking.length/2);
	}
	recMark = "n" + markBase;
	domMark = "" + markBase + markBase;
	if (childMarkings.includes(recMark) || childMarkings.includes(domMark))
		return true;
	else
		return false;
	
}

function randomMarking() {
	var roll = randRange(100);
	var result = "";
	if (roll < 1) {
		//very rare
		result = veryRareMarkings[randRange(veryRareMarkings.length)];
		while (childAlreadyHas(result))
			result = veryRareMarkings[randRange(veryRareMarkings.length)];
	} else if (roll < 3) {
		// rare
		result = rareMarkings[randRange(rareMarkings.length)];
		while (childAlreadyHas(result))
			result = rareMarkings[randRange(rareMarkings.length)];
	} else if (roll < 20) {
		// uncommon
		result = uncommonMarkings[randRange(uncommonMarkings.length)];
		while (childAlreadyHas(result))
			result = uncommonMarkings[randRange(uncommonMarkings.length)];
	} else if (roll < 35) {
		// common
		result = commonMarkings[randRange(commonMarkings.length)];
		while (childAlreadyHas(result))
			result = uncommonMarkings[randRange(uncommonMarkings.length)];
	}
	
	if (result == "") {
		// ignore
	} else {
		if (result.charAt(0) != "n") {
			result = result.substr(0, result.length/2);
			result = "n" + result;
		}
	}
	return result;
}

function generateMarkings() {
	var i, j, markID, markingRarity, sireDom, damDom, oneParentMissing;
	var tempResult = "";
	var tempDamMarkings;
	if (damMarkings.length > 0)
		tempDamMarkings = damMarkings.slice();
	else
		tempDamMarkings = [];
	childMarkings = [];
	for (i = 0; i < sireMarkings.length; i++) {
		markingRarity = getMarkingRarity(sireMarkings[i]);
		if (markingRarity == 0)
			return "ERROR: INVALID PARENT MARKINGS";
		if (sireMarkings[i].charAt(0) == "n") {
			markID = sireMarkings[i].substr(1, sireMarkings[i].length - 1);
			sireDom = false;
		} else {
			markID = sireMarkings[i].substr(0, sireMarkings[i].length/2);
			sireDom = true;
		}
		if ((j = tempDamMarkings.indexOf("n"+markID)) != -1) {
			damDom = false;
			oneParentMissing = false;
			// remove from dam so we don't double evaluate.
			tempDamMarkings.splice(j, 1);
		} else if ((j = tempDamMarkings.indexOf(markID + "" + markID)) != -1) {
			damDom = true;
			oneParentMissing = false;
			// remove from dam so we don't double evaluate.
			tempDamMarkings.splice(j, 1);
		} else {
			oneParentMissing = true;
			// for my sanity, but this should be unneeded.
			damDom = false;
		}
		if ((tempResult = evaluateMarkingPass(markID, markingRarity, sireDom, damDom, oneParentMissing)) != "")
			childMarkings.push(tempResult);
	}
	
	// we are guarenteed the sire won't have a matching mark for the remaining dam markings
	sireDom = false;
	oneParentMissing = true;
	
	for (i = 0; i < tempDamMarkings.length; i++) {
		markingRarity = getMarkingRarity(tempDamMarkings[i]);
		if (markingRarity == 0)
			return "ERROR: INVALID PARENT MARKINGS";
		if (tempDamMarkings[i].charAt(0) == "n") {
			markID = tempDamMarkings[i].substr(1, tempDamMarkings[i].length - 1);
			damDom = false;
		} else {
			markID = tempDamMarkings[i].substr(0, tempDamMarkings[i].length/2);
			damDom = true;
		}
		if ((tempResult = evaluateMarkingPass(markID, markingRarity, sireDom, damDom, oneParentMissing)) != "") {
			childMarkings.push(tempResult);
		}
	}
	
	if (document.getElementById("DT").checked) {
		if (!destroyedModifiers.includes("Dragon's Talon destroyed.<br>"))
			destroyedModifiers += "Dragon's Talon destroyed.<br>";
		var extraMarking = randomMarking();
		if (extraMarking != "") {
			childMarkings.push(extraMarking);
		}
	}
	
	// sort markings by rarty.
	childMarkings.sort(function(a, b) {
			// sort ascending rarity.
			// rad has a marking rarity of 0, so always last.
			if (getMarkingRarity(a) == 0) {
				return 1;
			} else if (getMarkingRarity(b) == 0) {
				return -1;
			}
			
			// swap -1 and 1 for descending.
			if (getMarkingRarity(a) > getMarkingRarity(b)) {
				return 1;
			} else if (getMarkingRarity(a) < getMarkingRarity(b)) {
				return -1;
			} else {
				return markingAlphabeticCompare(a, b);
			}
		});
	// to print
	var output = "";
	for (i = 0; i < childMarkings.length; i++) {
		output += childMarkings[i];
		if (i + 1 != childMarkings.length)
			output += "/";
	}
	return output;
}

function generateBreath() {
	// Gather all the breaths.
	var damBreaths = [];
	if(document.getElementById("damBreath1").value != Breaths.NONE)
		damBreaths.push(document.getElementById("damBreath1").value);
	if(document.getElementById("damBreath2").value != Breaths.NONE)
		damBreaths.push(document.getElementById("damBreath2").value);

	var sireBreaths = [];
	if(document.getElementById("sireBreath1").value != Breaths.NONE)
		sireBreaths.push(document.getElementById("sireBreath1").value);
	if(document.getElementById("sireBreath2").value != Breaths.NONE)
		sireBreaths.push(document.getElementById("sireBreath2").value);

	var damBreath = damBreaths.length == 0 ? Breaths.NONE : damBreaths[randRange(damBreaths.length)];
	var sireBreath = sireBreaths.length == 0 ? Breaths.NONE : sireBreaths[randRange(sireBreaths.length)];

	// Calculate the bonuses that would be evenly distributed.
	var generalBonus = 0;
	if (document.getElementById("damTemper").value == Tempers.AGGRESSIVE) {
		generalBonus += breathAggressiveBoost;
	}
	if (document.getElementById("sireTemper").value == Tempers.AGGRESSIVE) {
		generalBonus += breathAggressiveBoost;
	}
	if (document.getElementById("BB").checked) {
		if (!destroyedModifiers.includes("Breath Potion destroyed.<br>"))
			destroyedModifiers += "Breath Potion destroyed.<br>";
		generalBonus += breathPotionBoost;
	}

	var maxBreaths = 1;
	var totalBreathRate = breathBaseRate + generalBonus;
	// Create a pool of breath results to roll from.
	var breathPool = {};
	if(damBreath == Breaths.NONE && sireBreath == Breaths.NONE) {
		// Breath pool should contain all breaths.
		var splitBonus = totalBreathRate / (Object.keys(Breaths).length - 1);	// -1 to exclude NONE.
		for(let breath in Breaths)
		{
			breathPool[Breaths[breath]] = splitBonus;
		}
	}
	else if(damBreath == Breaths.NONE)
	{
		// NO dam breath, only sire.
		// Sire will boost the breath pass rate by having it.
		totalBreathRate += breathParentBoost;
		breathPool[sireBreath] = totalBreathRate;
	}
	else if(sireBreath == Breaths.NONE)
	{
		// NO sire breath, only dam.
		// Dam will boost the breath pass rate by having it.
		totalBreathRate += breathParentBoost;
		breathPool[damBreath] = totalBreathRate;
	}
	else
	{
		// Both dragons have a breath.
		// Each parent applies a boost.
		totalBreathRate += 2 * breathParentBoost;
		// Check if same or different
		if(sireBreath == damBreath)
		{
			// Same
			breathPool[damBreath] = totalBreathRate;
		}
		else
		{
			// Different
			breathPool[damBreath] = totalBreathRate / 2;
			breathPool[sireBreath] = totalBreathRate / 2;
			// Offspring may have up to 2 breaths.
			maxBreaths = 2;
		}
	}
	// Manually set the NONE value.
	breathPool[Breaths.NONE] = 100 - totalBreathRate;

	var results = [];

	for(let i = 0; i < maxBreaths; ++i)
	{
		var result = getRollResult(breathPool);
	
		// NONE does nothing.
		if (result == Breaths.FIRE) {
			results.push("Fire");
		} else if (result == Breaths.ICE) {
			results.push("Ice");
		} else if (result == Breaths.SHADOW) {
			results.push("Shadow");
		} else if (result == Breaths.LIGHTNING) {
			results.push("Lightning");
		} else if (result == Breaths.RADIATION) {
			results.push("Radiation");
		} else if (result == Breaths.WIND) {
			results.push("Wind");
		} else if (result == Breaths.POISON) {
			results.push("Poison");
		} else if (result == Breaths.LUSTER) {
			results.push("Luster");
		}
	}

	// Process and return result.
	switch(results.length)
	{
		case 0: return "";
		case 1: return results[0];
		case 2:
			// Check if a duplicate was rolled.
			if(results[0] == results[1]) return results[0];
			else return results[0] + ", " + results[1];
		default: return "UNDEFINED;"
	}


	// if (damBreath == Breaths.NONE && sireBreath == Breaths.NONE) {
	// 	if (roll >= 96 - bonus) {
	// 		return "Fire";
	// 	}
	// } else if (damBreath == Breaths.NONE) {
	// 	if (roll >= 90 - bonus) {
	// 		result = sireBreath;
	// 	}
	// } else if (sireBreath == Breaths.NONE) {
	// 	if (roll >= 90 - bonus) {
	// 		result = damBreath;
	// 	}
	// } else {
	// 	if (roll >= 85 - bonus) {
	// 		result = damBreath;
	// 	} else if (roll >= 70 - bonus/2) {
	// 		result = sireBreath;
	// 	}
	// }
}

function generateSkill() {
	// Get all unique skills shared between the parents.
	// Start on dam skills.
	var skillPool = damSkills.slice();
	for(let i = 0; i < sireSkills.length; ++i)
	{
		// Add to pool if not already present.
		if(!skillPool.includes(sireSkills[i]))
			skillPool.push(sireSkills[i]);
	}

	// Shuffle the skill pool before rolling.
	shuffle(skillPool)

	// Iterate over and roll for each skill.
	var skillsRolled = [];
	for(let i = 0; i < skillPool.length; ++i)
	{
		var skillName = skillPool[i];
		var skillRarity = SkillNames[skillName.toLowerCase()];

		// Can either be present on 1 or 2 (both) parents
		var numPresent = 0;
		if(damSkills.includes(skillName)) ++numPresent;
		if(sireSkills.includes(skillName)) ++numPresent;

		var skillPassRate = skillPassRates[skillRarity][numPresent];

		// Check for Skill Charm usage.
		if(document.getElementById("SB").checked)
		{
			var sireSkillOption = document.getElementById("sireSkillCharmOptions").value;
			var damSkillOption = document.getElementById("damSkillCharmOptions").value;

			// Check sire.
			if(skillName == sireSkillOption)
			{
				skillPassRate += skillCharmPassBoost;
			}

			// Check dam.
			if(skillName == damSkillOption)
			{
				skillPassRate += skillCharmPassBoost;
			}

			// Add to destroyed modifiers.
			if (!destroyedModifiers.includes("Skill Charm destroyed.<br>"))
				destroyedModifiers += "Skill Charm destroyed.<br>";
		}

		var roll = randRange(100);
		if(roll < skillPassRate)
		{
			skillsRolled.push(skillName);
			if(skillsRolled.length >= skillMaxPerOffspring) break;
		}
	}

	// Concat the results to be printed.
	return skillsRolled.join(", ");
}

function selectMutation(mutationRarity, physicalOnly) {
	var mutationNotFound = true;
	var result = "";
	var roll;

	
	while(mutationNotFound) {
		if (mutationRarity == Rarity.COMMON) {
			result = commonMutations[randRange(commonMutations.length)];
		} else if (mutationRarity == Rarity.UNCOMMON) {
			result = uncommonMutations[randRange(uncommonMutations.length)];
		} else if (mutationRarity == Rarity.RARE) {
			result = rareMutations[randRange(rareMutations.length)];
		} else if (mutationRarity == Rarity.VERY_RARE && !physicalOnly) {
			result = veryRareMutations[randRange(veryRareMutations.length)];
		} else if (mutationRarity == Rarity.VERY_RARE && physicalOnly) {
			result = veryRarePhysicalMutations[randRange(veryRarePhysicalMutations.length)];
		}
		
		if (result == "Eagle Beak" || result == "Fisher Beak" || result == "Vulture" || result == "Warlord") {
			if (childHasFace) {
				// re-roll
				mutationNotFound = true;
			} else {
				// break
				childHasFace = true;
				mutationNotFound = false;
			}
		} else if (result == "Tusked" || result == "Fanged") {
			if (childHasTeeth) {
				// re-roll
				mutationNotFound = true;
			} else {
				// break
				childHasTeeth = true;
				mutationNotFound = false;
			}
		} else if (result == "Albino" || result == "Anery") {
		// same rarity, so technically no need to check but;
			if (childHasSkin) {
				// re-roll
				mutationNotFound = true;
			} else {
				// break
				childHasSkin = true;
				mutationNotFound = false;
			}
		} else {
			mutationNotFound = false;
		}
		
		// ensure ravager only mutations don't appear on other breeds
		if (childBreed != Breeds.RAVAGER && ravagerOnlyMutations.includes(result)) {
			mutationNotFound = true;
		}
	}
	return result;
}
function generateMutation() {
	var result = "";
	var i, roll;
	var bonus = 0;
	var dragonsEyeBonus = 0;
	var smMuteBonus = 0;
	var dmMuteBonus = 0;
	var mutationList = [];
	if (document.getElementById("damTemper").value == Tempers.CALM) {
		bonus += 10;
	} if (document.getElementById("sireTemper").value == Tempers.CALM) {
		bonus += 10;
	} if (document.getElementById("DE").checked) {
		if (!destroyedModifiers.includes("Dragon's Eye destroyed.<br>"))
			destroyedModifiers += "Dragon's Eye destroyed.<br>";
		dragonsEyeBonus += 50;
	} if (document.getElementById("SM").checked) {
		smMuteBonus += 30;
	} if (document.getElementById("DM").checked) {
		dmMuteBonus += 30;
	}
	for (i = Rarity.COMMON; i <= Rarity.VERY_RARE; i++) {
		roll = randRange(2000);
		if (i == Rarity.COMMON && roll < 50 + bonus + dragonsEyeBonus + smMuteBonus + dmMuteBonus)
			result = selectMutation(i, true);
		else if (i == Rarity.UNCOMMON && roll < 25 + bonus + dragonsEyeBonus + smMuteBonus + dmMuteBonus)
			result = selectMutation(i, true);
		else if (i == Rarity.RARE && roll < 15 + bonus + dragonsEyeBonus + smMuteBonus + dmMuteBonus)
			result = selectMutation(i, true);
		else if (i == Rarity.VERY_RARE && roll < 5 + bonus + dragonsEyeBonus + smMuteBonus + dmMuteBonus)
			result = selectMutation(i, false);
		if (result != "") {
			mutationList.push(" " + result);
			result = "";
		}
	}
	if (mutationList.length > 0)
		return mutationList;
	else
		return "";
}

function generateAberrant() {
	var sireAberrant = document.getElementById("sireAberrant").value;
	var damAberrant = document.getElementById("damAberrant").value;

	// Use bitwise OR to create a bitmask.
	var key = sireAberrant | damAberrant;

	// Grab the aberrant table.
	var aberrantTable = aberrantPassRates[key];

	// Roll the table.
	var result = getRollResult(aberrantTable);

	if(result == "0%") return "";
	else return result;
}

function coatToText(coat) {
	var result = "";
	var vantaStr = coat.substr(9, 2);
	var baseStr = coat.substr(0, 8);
	// make base coat readable
	if (baseStr == "Bb/tt/ss" || baseStr == "BB/tt/ss") {
		result = "Bronze ";
	} else if (baseStr == "bb/Tt/ss" || baseStr == "bb/TT/ss") {
		result = "Tarnished ";
	} else if (baseStr == "bb/tt/Ss" || baseStr == "bb/tt/SS") {
		result = "Silver ";
	} else if (baseStr == "Bb/Tt/ss" || baseStr == "BB/TT/ss" ||
                   baseStr == "BB/Tt/ss" || baseStr == "Bb/TT/ss") {
		result = "Tarnished Bronze ";
	} else if (baseStr == "bb/Tt/Ss" || baseStr == "bb/TT/SS" || 
                   baseStr == "bb/Tt/SS" || baseStr == "bb/TT/Ss") {
		result = "Tarnished Silver ";
	} else if (baseStr == "Bb/tt/Ss" || baseStr == "BB/tt/Ss" ||
	           baseStr == "Bb/tt/SS" || baseStr == "BB/tt/SS") {
		result = "Gold ";
	} else if (baseStr == "Bb/Tt/Ss" || baseStr == "BB/TT/SS" ||
			   baseStr == "BB/Tt/Ss" || baseStr == "Bb/TT/Ss" ||
			   baseStr == "Bb/Tt/SS" || baseStr == "BB/TT/Ss" ||
			   baseStr == "BB/Tt/SS" || baseStr == "Bb/TT/SS") {
         result = "Tarnished Gold ";
	} else if (vantaStr == "Nn" || vantaStr == "NN") {
		result = "Obsidian ";
	} else {
		result = "[INVALID COAT!] ";
	}
	
	return result;
}

function extractColors() {
	var i = 0;
	var j = 0;
	childColorMods = [];
	// extract color mods
	while (i < childMarkings.length) {
		if ((j = allColorMods.indexOf(childMarkings[i])) != -1) {
			childMarkings.splice(i, 1);
			childColorMods.push(colorModsToText[Math.floor(j/2)]);
		} else {
			i++;
		}
	}
}

function genoToString(coat) {
	var i = 0;
	var j = 0;
	var result = "";
	// sort markings by rarty.
	childMarkings.sort(function(a, b) {
			// sort ascending rarity.
			// rad has a marking rarity of 0, so always last.
			if (getMarkingRarity(a) == 0) {
				return 1;
			} else if (getMarkingRarity(b) == 0) {
				return -1;
			}
			
			// swap -1 and 1 for descending.
			if (getMarkingRarity(a) > getMarkingRarity(b)) {
				return -1;
			} else if (getMarkingRarity(a) < getMarkingRarity(b)) {
				return 1;
			} else {
				return markingAlphabeticCompare(a, b);
			}
		});
	// first extract all color mods
	extractColors();
	
	// very rare markings
	i = 0;
	while (i < childMarkings.length) {
		if ((j = veryRareMarkings.indexOf(childMarkings[i])) != -1) {
			childMarkings.splice(i, 1);
			result += veryRareToText[Math.floor(j/2)] + " ";
		} else {
			i++;
		}
	}
	
	// rare markings
	i = 0;
	while (i < childMarkings.length) {
		if ((j = rareMarkings.indexOf(childMarkings[i])) != -1) {
			childMarkings.splice(i, 1);
			result += rareToText[Math.floor(j/2)] + " ";
		} else {
			i++;
		}
	}
	
	// -ed markings
	i = 0;
	while (i < childMarkings.length) {
		if ((j = edMarkings.indexOf(childMarkings[i])) != -1) {
			childMarkings.splice(i, 1);
			result += edToText[Math.floor(j/2)] + " ";
		} else {
			i++;
		}
	}
	
	// melanistic
	var vantaStr = coat.substr(9, 2);
	var baseStr = coat.substr(0, 8);
	if (vantaStr == "Nn" || vantaStr == "NN") {
		if (baseStr != "bb/tt/ss")
			result += "Melanistic ";
	}
	
	// color modifiers
	for (i = 0; i < childColorMods.length; i++) {
		result += childColorMods[i] + " ";
	}
	
	// coat
	result += coatToText(coat);
	
	if (childMarkings.length != 0)
		result += "with ";
	
	// number of markings after "with"
	var numAfter = 0;
	
	// uncommon markings
	i = 0;
	while (i < childMarkings.length) {
		if ((j = uncommonMarkings.indexOf(childMarkings[i])) != -1) {
			childMarkings.splice(i, 1);
			if (childMarkings.length == 0 && numAfter != 0)
				result += "and ";
			result += uncommonToText[Math.floor(j/2)];
			numAfter++;
			if (childMarkings.length != 0)
				result += ", ";
		} else {
			i++;
		}
	}
	
	// common markings
	i = 0;
	while (i < childMarkings.length) {
		if ((j = commonMarkings.indexOf(childMarkings[i])) != -1) {
			childMarkings.splice(i, 1);
			if (childMarkings.length == 0 && numAfter != 0)
				result += "and ";
			result += commonToText[Math.floor(j/2)];
			numAfter++;
			if (childMarkings.length != 0)
				result += ", ";
		} else {
			i++;
		}
	}
	
	
	while (childMarkings.length != 0) {
		if (childMarkings[0].length > 6) {
			var prefix1 = childMarkings[0].substr(0, 4);
			var prefix2 = childMarkings[0].substr(0, 6);
            var prefix3 = childMarkings[0].substr(0, 3);
            var prefix4 = childMarkings[0].substr(0, 4);
			if (prefix1 == "nRad") {
				if (numAfter != 0)
					result += "and ";
				result += "Radiant" + childMarkings[0].substr(4, childMarkings[0].length - 4);
				childMarkings.splice(0, 1);
			} else if (prefix2 == "RadRad") {
				if (numAfter != 0)
					result += "and ";
				result += "Radiant" + childMarkings[0].substr(6, childMarkings[0].length - 6);
				childMarkings.splice(0, 1);
			} else if (prefix3 == "nAg") {
				if (numAfter != 0)
					result += "and ";
				result += "Agouti" + childMarkings[0].substr(3, childMarkings[0].length - 3);
				childMarkings.splice(0, 1);
		} else if (prefix4 == "AgAg") {
				if (numAfter != 0)
					result += "and ";
				result += "Agouti" + childMarkings[0].substr(4, childMarkings[0].length - 4);
				childMarkings.splice(0, 1);
            }
	    }
    }

    
	if (childMarkings.length != 0) {
		result += "[ERROR: UNCLASSIFIED MARKINGS REMAINING]";
	}
	return result;
}

function generateChild() {
	var log = document.getElementById("nestTextArea");
	// ensures no duplicate mutations
	childHasFace = false;
	childHasTeeth = false;
	childHasSkin = false;
	
	log.innerHTML += generateGender() + " " + generateTemper() + " " + generateSpecies() + " | " + generateHealth() + "<br>";
	log.innerHTML += "T: " + generateBody() + " Coat, "
	log.innerHTML += generateTraits();
	var mutationResult = generateMutation();
	if (mutationResult != "")
		log.innerHTML += " |" + mutationResult + "<br>";
	else
		log.innerHTML += "<br>";
	
	
	var coatResult = generateCoat();
	var genoTypeString = "G: " + coatResult + "+" + generateMarkings();
	var phenoTypeString = "P: " + genoToString(coatResult);
	
	if (mutationResult.includes(" Chimera")) {
		coatResult = generateCoat();
		genoTypeString += " || " + coatResult + "+" + generateMarkings();
		phenoTypeString += " || " + genoToString(coatResult);
	}
	
	// print to output
	log.innerHTML += genoTypeString + "<br>";
	log.innerHTML += phenoTypeString + "<br>";
	
	var breath = generateBreath();
	if (breath != "") {
		breath = "Breath: " + breath + "<br>";
		log.innerHTML += breath.bold();
	}
	
	var skill = generateSkill();
	if (skill != "") {
		skill = "Skill: " + skill + "<br>";
		log.innerHTML += skill.italics();
	}

	var aberrant = generateAberrant();
	if(aberrant != "") {
		aberrant = "[" + aberrant + " ABERRANT]<br>";
		log.innerHTML += aberrant;
	}
	
	log.innerHTML += "<br>"
}

function resetVars() {
	destroyedModifiers = "";
}

// overarching roll
function roll() {
	var msg, i;
	msg = formIsValid()
	if (msg != 0) {
		// if form is not valid, print error
		document.getElementById("nestTextArea").innerHTML = msg;
		return 0;
	}
	// continue with roll...
	// document.getElementById("nestTextArea").innerHTML = "Rolling...<br>";
	var numEggs = clutchSize();
	document.getElementById("nestTextArea").innerHTML = "Nest Results:" + "<br>";
	if(numEggs == 0) document.getElementById("nestTextArea").innerHTML += "Only one unfertilized was produced. It has been deposited into your hoard."
	for (i = 0; i < numEggs; i++) {
		document.getElementById("nestTextArea").innerHTML += "" + (i + 1) + ": ";
		generateChild();
	}
	document.getElementById("nestTextArea").innerHTML += destroyedModifiers;
	
	document.getElementById("nestClipboard").value = document.getElementById("nestTextArea").innerHTML;

	// reset global variables
	resetVars();
}
