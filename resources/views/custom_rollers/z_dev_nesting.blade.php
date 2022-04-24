<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
     
    <!--Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--Bootstrap JS --> 
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
   	<!-- Should always be kept; found in the public/css -->
    <link href="{{ asset('css/featherlight.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom_roller_css/nesting.css') }}" rel="stylesheet">
    <!-- Found in the public/js folder -->
    <script src="{{ asset('js/featherlight.min.js') }}"></script>
    <script src="{{ asset('js/custom_rollers/z_dev_nesting.js') }}"></script>

	<title>Nesting Roller - Souls-Between</title>
</head>

<body onload="initialize()">

<table id="rollerTitle">
	<tr>
		<div id="title"><br><h1>Nesting Roller</h1></div>
	</tr>
</table>
<table id="mainContent">
	<form id="rollerForm" autocomplete="off">
	<tr>
	<!-- SIRE -->
	<td class="entryBox sire">
		<h2>Sire</h2>
		<div id="sireRowBottom">
			<select id="sireRank" class="cellElement">
				<option value="1">Fledgling</option>
				<option value="2">Primal</option>
				<option value="3">Ancient</option>
				<option value="4">Primordial</option>
			</select>
			<select id="sireTemper" onchange="updateTempers()" class="cellElement">
				<option value="1">Vigilant</option>
				<option value="2">Agressive</option>
				<option value="3">Calm</option>
				<option value="4">Sinister</option>
			</select>
			<select id="sireBreed" onchange="updateTraits('sire')" class="cellElement">
				<option disabled selected value="0">Breed</option>
				<option value="1">Stalker Wyvern</option>
				<option value="2">Ravager Wyvern</option>
				<option value="3">Warden Dragon</option>
				<option value="5">Sapiere Dragon</option>
				<option value="4">Greater Emperor</option>
				<option value="6">Ridgeback Drake</option>
				<option value="7">Abyssal Basileus</option>


			</select>
			<select id="sireBuild" class="cellElement">
				<option value="1">Velour Coat</option>
                <option value="2">Plated</option>
				<option value="3">Feathered</option>
                <option value="4">Angora</option>
				<option value="5">Imperial</option>
			</select>
		</div>
		
		<div id="sireRowMiddle">
		<select id="sireHorns" class="cellElement">
				<option value="1">C Horns</option>
				<option value="2">UC Horns</option>
				<option value="3">R Horns</option>
				<option value="4">M Horns</option>
			</select>
			<select id="sireEyes" class="cellElement">
				<option value="1">C Eyes</option>
				<option value="2">UC Eyes</option>
				<option value="3">R Eyes</option>
				<option value="4">M Eyes</option>
			</select>
			<!-- The following two are only for Ravagers -->
			<select id="sireEars" class="cellElement">
				<option value="1">C Ears</option>
				<option value="2">UC Ears</option>
				<option value="3">R Ears</option>
				<option value="4">M Ears</option>

			</select>
			<select id="sireTail" class="cellElement">
				<option value="1">C Tail</option>
				<option value="2">UC Tail</option>
				<option value="3">R Tail</option>
				<option value="4">M Tail</option>
			</select>
		</div>
		
		<div id="sireRowBottom">
			<select id="sireBreath1" class="cellElement">
				<option value="1">No Breath</option>
				<option value="2">Fire</option>
				<option value="3">Ice</option>
				<option value="4">Shadow</option>
				<option value="5">Lightning</option>
				<option value="6">Radiation</option>
			    <option value="7">Wind</option>
				<option value="8">Poison</option>
				<option value="9">Luster</option>
			</select>
			<select id="sireBreath2" class="cellElement">
				<option value="1">No Breath</option>
				<option value="2">Fire</option>
				<option value="3">Ice</option>
				<option value="4">Shadow</option>
				<option value="5">Lightning</option>
				<option value="6">Radiation</option>
			    <option value="7">Wind</option>
				<option value="8">Poison</option>
				<option value="9">Luster</option>
			</select>
			<!-- 
			<select id="sireSkill" class="cellElement">
				<option value="1">No Skill</option>
				<option value="10">Adept</option>
				<option value="6">Aether Walker</option>
				<option value="15">Armored Hide</option>
				<option value="11">Blessing of the Moon</option>
				<option value="13">Confetti Dreams</option>
				<option value="16">Frenzy</option>
				<option value="3">Friendly Giant</option>
				<option value="12">Guidance of the Sun</option>
				<option value="8">Haunting Roar</option>
				<option value="9">Healing Aura</option>
				<option value="2">Hoarder</option>
				<option value="7">Inner Fire</option>
				<option value="14">Serrated Teeth</option>
				<option value="4">Steadfast</option>
				<option value="5">Swift Feet</option>
			</select>
			-->
			<br>
			<select id="sireAberrant" class="cellElement">
				<!-- Values are specifically chosen as powers of two to make use of bitwise operations;
				be careful when changing the values, and only if necessary -->
				<option value="1">0% Aberrant</option>
				<option value="2">25% Aberrant</option>
				<option value="4">50% Aberrant</option>
				<option value="8">100% Aberrant</option>
			</select>
			<br>
			<label class="wideCheckbox"><input type="checkbox" id="SM" name="SM" value="SM">✦Mutation</label>

		</div>
		
		<!-- Textboxes -->
		<div class="leftAligned">
			<br><a>Genotype</a><br>
			<input type="text" id="sireGenoType" class="cellElement" placeholder="bb/tt/ss/nn" autocomplete="off"><br>

			<a>Skills</a><br>
			<input type="text" id="sireSkills" class="cellElement" placeholder="skill name (skill rarity) skill name (skill rarity) ..." autocomplete="off"><br>
			
			<a>Echo</a><br>
			<textarea rows="1" id="sireGenoEcho" class="cellElement" readonly spellcheck="false"></textarea><br>
		</div>
	</td>
	
	<!-- DAM -->
	<td class="entryBox dam">
		<h2>Dam</h2>
		<div id="damRowTop">
			<select id="damRank" class="cellElement">
				<option value="1">Fledgling</option>
				<option value="2">Primal</option>
				<option value="3">Ancient</option>
				<option value="4">Primordial</option>
			</select>
			<select id="damTemper" onchange="updateTempers()" class="cellElement">
				<option value="1">Vigilant</option>
				<option value="2">Agressive</option>
				<option value="3">Calm</option>
				<option value="4">Sinister</option>
			</select>
			<select id="damBreed" onchange="updateTraits('dam')" class="cellElement">
				<option disabled selected value="0">Breed</option>
				<option value="1">Stalker Wyvern</option>
				<option value="2">Ravager Wyvern</option>
				<option value="3">Warden Dragon</option>
				<option value="4">Greater Emperor</option>
				<option value="5">Sapiere Dragon</option>
				<option value="6">Ridgeback Drake</option>
				<option value="7">Abyssal Basileus</option>


			</select>
			<select id="damBuild" class="cellElement">
				<option value="1">Velour Coat</option>
                <option value="2">Plated</option>
				<option value="3">Feathered</option>
                <option value="4">Angora</option>
				<option value="5">Imperial</option>
			</select>
		</div>
		<div id="damRowMiddle">
		<select id="damHorns" class="cellElement">
				<option value="1">C Horns</option>
				<option value="2">UC Horns</option>
				<option value="3">R Horns</option>
				<option value="4">M Horns</option>
			</select>
			<select id="damEyes" class="cellElement">
				<option value="1">C Eyes</option>
				<option value="2">UC Eyes</option>
				<option value="3">R Eyes</option>
				<option value="4">M Eyes</option>
			</select>
			<!-- The following two are only for Ravagers -->
			<select id="damEars" class="cellElement">
				<option value="1">C Ears</option>
				<option value="2">UC Ears</option>
				<option value="3">R Ears</option>
				<option value="4">M Ears</option>
			</select>
			<select id="damTail" class="cellElement">
			    <option value="1">C Tail</option>
				<option value="2">U Tail</option>
				<option value="3">R Tail</option>
				<option value="4">M Tail</option>
			</select>
		</div>
		
		<div id="damRowBottom">
			<select id="damBreath1" class="cellElement">
				<option value="1">No Breath</option>
				<option value="2">Fire</option>
				<option value="3">Ice</option>
				<option value="4">Shadow</option>
				<option value="5">Lightning</option>
				<option value="6">Radiation</option>
				<option value="7">Wind</option>
				<option value="8">Poison</option>
				<option value="9">Luster</option>
			</select>
			<select id="damBreath2" class="cellElement">
				<option value="1">No Breath</option>
				<option value="2">Fire</option>
				<option value="3">Ice</option>
				<option value="4">Shadow</option>
				<option value="5">Lightning</option>
				<option value="6">Radiation</option>
				<option value="7">Wind</option>
				<option value="8">Poison</option>
				<option value="9">Luster</option>
			</select>
			<!-- 
			<select id="damSkill" class="cellElement">
				<option value="1">No Skill</option>
				<option value="10">Adept</option>
				<option value="6">Aether Walker</option>
				<option value="15">Armored Hide</option>
				<option value="11">Blessing of the Moon</option>
				<option value="13">Confetti Dreams</option>
				<option value="16">Frenzy</option>
				<option value="3">Friendly Giant</option>
				<option value="12">Guidance of the Sun</option>
				<option value="8">Haunting Roar</option>
				<option value="9">Healing Aura</option>
				<option value="2">Hoarder</option>
				<option value="7">Inner Fire</option>
				<option value="14">Serrated Teeth</option>
				<option value="4">Steadfast</option>
				<option value="5">Swift Feet</option>

			</select>
			-->
			<br>
			<select id="damAberrant" class="cellElement">
				<!-- Values are specifically chosen as powers of two to make use of bitwise operations;
				be careful when changing the values, and only if necessary -->
				<option value="1">0% Aberrant</option>
				<option value="2">25% Aberrant</option>
				<option value="4">50% Aberrant</option>
				<option value="8">100% Aberrant</option>
			</select>
			<br>
			<label class="wideCheckbox"><input type="checkbox" id="DM" name="DM" value="DM">✦Mutation</label>

		</div>
		
		<!-- Textboxes -->
		<div class="leftAligned">
			<br><a>Genotype</a><br>
			<input type="text" id="damGenoType" class="cellElement" placeholder="bb/tt/ss/nn" autocomplete="off"><br>
			
			<a>Skills</a><br>
			<input type="text" id="damSkills" class="cellElement" placeholder="skill name (skill rarity) skill name (skill rarity) ..." autocomplete="off"><br>

			<a>Echo</a><br>
			<textarea id="damGenoEcho" class="cellElement" rows="1" readonly spellcheck="false"></textarea><br>
		</div>
	</td>
	<br>
	<!-- MODIFIERS -->
	<td class="entryBox modifiers">
		<h2>Modifiers</h2>
		If your dragon's genome is not updated to the <br>
		newest base coat and color modifer codes<br>
		you will need to submit a claim to have them updated!
		<div width="100%">
			<span style="white-space: nowrap;">
				<label class="radioLabel"><input type="checkbox" onchange="updateModifiers()" name="modifierSelector" value="AT" id="AT">Aether Tonic</label>
				<label class="radioLabel"><input type="checkbox" onchange="updateModifiers()" name="modifierSelector" value="BB" id="BB">Breath Potion</label>
				<label class="radioLabel"><input type="checkbox" onchange="updateModifiers()" name="modifierSelector" value="GP" id="GP">Gender Potion</label>
			</span>
			<br>
			<span style="white-space: nowrap;">
			<label class="radioLabel"><input type="checkbox" onchange="updateModifiers()" name="modifierSelector" value="BH" id="BH">Bottle of Tarnish</label>
			<label class="radioLabel"><input type="checkbox" onchange="updateModifiers()" name="modifierSelector" value="DE" id="DE">Dragon's Eye</label>
			<label class="radioLabel"><input type="checkbox" onchange="updateModifiers()" name="modifierSelector" value="FP" id="FP">Fertility Potion</label>
			</span>
			<br>
			<span style="white-space: nowrap;">
				<label class="radioLabel"><input type="checkbox" onchange="updateModifiers()" name="modifierSelector" value="BI" id="BI">Bottle of Silver</label>
				<label class="radioLabel"><input type="checkbox" onchange="updateModifiers()" name="modifierSelector" value="DH" id="DH">Dragon's Heart</label>
				<label class="radioLabel"><input type="checkbox" onchange="updateModifiers()" name="modifierSelector" value="RB" id="RB">Radiance Bond</label>
			</span>
			<br>
			<span style="white-space: nowrap;">
				<label class="radioLabel"><input type="checkbox" onchange="updateModifiers()" name="modifierSelector" value="BU" id="BU">Bottle of Bronze</label>
				<label class="radioLabel"><input type="checkbox" onchange="updateModifiers()" name="modifierSelector" value="DI" id="DI">Dragon's Instinct</label>
				<label class="radioLabel"><input type="checkbox" onchange="updateModifiers()" name="modifierSelector" value="SB" id="SB">Skill Charm</label>
			</span>
			<br>
			<span style="white-space: nowrap;">
				<label class="radioLabel"><input type="checkbox" onchange="updateModifiers()" name="modifierSelector" value="BV" id="BV">Bottle of Obsidian</label>
				<label class="radioLabel"><input type="checkbox" onchange="updateModifiers()" name="modifierSelector" value="DT" id="DT">Dragon's Talon</label>
				<label class="radioLabel"><input type="checkbox" onchange="updateModifiers()" name="modifierSelector" value="BF" id="BF">Temper Potion</label>
			</span>
			<br>
			<label class="wideCheckbox"><input type="checkbox" onchange="updateModifiers()" name="modifierSelector" value="ST" id="ST">Soul Twine</label>
			<br>
			<div id="genderSelectionRadios">
				<label class="radioLabel"><input type="radio" name="genderSelector" value="1" id="maleSelected" checked>Male</label>
				<label class="radioLabel"><input type="radio" name="genderSelector" value="2" id="femaleSelected">Female</label>
				<br>
			</div>
			<div id="breedSelectionRadios">
				<label class="radioLabel"><input type="radio" name="breedSelector" value="1" id="stalkerSelected" checked>Stalker</label>
				<label class="radioLabel"><input type="radio" name="breedSelector" value="2" id="ravagerSelected">Ravager</label>
				<label class="radioLabel"><input type="radio" name="breedSelector" value="3" id="wardenSelected">Warden</label>
				<br>
				<label class="radioLabel"><input type="radio" name="breedSelector" value="4" id="gempSelected">G. Emperor</label>
				<label class="radioLabel"><input type="radio" name="breedSelector" value="5" id="sapiSelected">Sapiere</label>
				<label class="radioLabel"><input type="radio" name="breedSelector" value="6" id="ridgeSelected">Ridgewalker</label>
				<br>
				<label class="radioLabel"><input type="radio" name="breedSelector" value="7" id="abyssSelected">Abyssal</label>


				<br>
			</div>
			<div id="temperSelectionRadios">
				<label class="radioLabel"><input type="radio" name="temperSelector" value="1" id="timidSelected" checked>Vigilant</label>
				<label class="radioLabel"><input type="radio" name="temperSelector" value="2" id="aggressiveSelected">Aggressive</label>
				<br>
				<label class="radioLabel" id="calmLabel"><input type="radio" name="temperSelector" value="3" id="calmSelected">Calm</label>
				<label class="radioLabel" id="sinisterLabel"><input type="radio" name="temperSelector" value="4" id="sinisterSelected">Sinister</label>
				<br>
			</div>
			<div id="colorSelectionMenu">
				<select id="colorMod" class="cellElement">
					<option disabled selected value="0">Color Modifier</option>
					<option disabled value="1">Common</option>
					<option value="citrine">Citrine</option>
					<option value="steel">Steel</option>
					<option value="rhodonite">Rhodonite</option>
					<option disabled value="2">Uncommon</option>
					<option value="azurite">Azurite</option>
					<option value="garnet">Garnet</option>
					<option value="topaz">Topaz</option>
					<option disabled value="3">Rare</option>
					<option value="jade">Jade</option>
					<option value="turquoise">Turquoise</option>
					<option disabled value="4">Very Rare</option>
					<option value="amethyst">Amethyst</option>
                    <option value="prismatic">Prismatic</option>
                    <option disabled value="5">Petty(Agouti Only)</option>
                    <option value="bronze">Bronze</option>
                    <option value="tarnish">Tarnish</option>
                    <option value="silver">Silver</option>
                    <option value="obsidian">Obsidian</option>
                    <option value="gold">Gold</option>
					<option value="silver">Tarnished Bronze</option>
                    <option value="tarnished silver">Tarnished Silver</option>
                    <option value="tarnished gold">Tarnished Gold</option>
				</select>
			</div>
			<div id="skillCharmMenu">
				<select id="sireSkillCharmOptions" class="cellElement">
					<option disabled selected value="0">Sire Skill</option>
					<option value="None">None</option>
					<option disabled value="1">General</option>
					<option value="Adept">Adept</option>
					<option value="Hoarder">Hoarder</option>
					<option value="Life of the Party">Life of the Party</option>
					<option disabled value="2">Combat</option>
					<option value="Aether Walker">Aether Walker</option>
					<option value="Armored Hide">Armored Hide</option>
					<option value="Frenzy">Frenzy</option>
					<option value="Haunting Roar">Haunting Roar</option>
					<option value="Healing Aura">Healing Aura</option>
					<option value="Inner Fire">Inner Fire</option>
					<option value="Serrated Teeth">Serrated Teeth</option>
					<option value="Steadfast">Steadfast</option>
					<option value="Swift Feet">Swift Feet</option>
					<option disabled value="3">Legendary</option>
					<option value="Blessing of the Moon">Blessing of the Moon</option>
					<option value="Confetti Dreams">Confetti Dreams</option>
					<option value="Guidance of the Sun">Guidance of the Sun</option>
				</select>
				<select id="damSkillCharmOptions" class="cellElement">
					<option disabled selected value="0">Dam Skill</option>
					<option value="None">None</option>
					<option disabled value="1">General</option>
					<option value="Adept">Adept</option>
					<option value="Hoarder">Hoarder</option>
					<option value="Life of the Party">Life of the Party</option>
					<option disabled value="2">Combat</option>
					<option value="Aether Walker">Aether Walker</option>
					<option value="Armored Hide">Armored Hide</option>
					<option value="Frenzy">Frenzy</option>
					<option value="Haunting Roar">Haunting Roar</option>
					<option value="Healing Aura">Healing Aura</option>
					<option value="Inner Fire">Inner Fire</option>
					<option value="Serrated Teeth">Serrated Teeth</option>
					<option value="Steadfast">Steadfast</option>
					<option value="Swift Feet">Swift Feet</option>
					<option disabled value="3">Legendary</option>
					<option value="Blessing of the Moon">Blessing of the Moon</option>
					<option value="Confetti Dreams">Confetti Dreams</option>
					<option value="Guidance of the Sun">Guidance of the Sun</option>
				</select>
			</div>
			</span>
			<h2>Buff/Debuff</h2>
			<span style="white-space: nowrap;">
				<label class="radioLabel"><input type="checkbox"  id="inbreeding" name="inbreeding" value="inbreeding">✦Inbreeding present?</label>
                <label class="radioLabel"><input type="checkbox" id="starter" name="starter" value="starter">✦Starter/Serpent</label>
				<label class="radioLabel"><input type="checkbox"  id="weakFertility" name="weakFertility" value="weakFertility">✦Weak Fertility?</label>
			</span>
			<br>
			
		</div>
	</td>
	</tr>
	</form>
</table>
<table id="formButtons">
	<td>
		<button onclick="roll()">Roll!</button>
		<button onclick="clearForms()">Reset forms</button>
		<button onclick="clipBoard()">Clipboard</button>
	</td>
</table>
<table id="nest">
	<td>
		<div id="nestTextArea"></div>
		<input id="nestClipboard" style="position:absolute;left:-9999px;">
	</td>
</table>
	
<table id="footer">
	<td id="footerElement">
        v7.0.0 - Maintained by Cryptid-Horror and DraginRaptor<br>
		Originally coded by Armando Montanez <br>
</table>

</body>