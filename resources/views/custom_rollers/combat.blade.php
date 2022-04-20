<!doctype html>
<head>
    <title>Combat Roller</title>
    
    <!--Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--Bootstrap JS --> 
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
   <!-- Should always be kept; found in the public/css -->
    <link href="{{ asset('css/custom_roller_css/combat.css') }}" rel="stylesheet">
    <!-- Found in the public/js folder -->
    <script src="{{ asset('js/custom_rollers/combat.js') }}"></script>
    


</head>
<html lang="en">
    
    <body>

<table id="rollerTitle">
	<tr>
		<div id="title"><br><h1>Souls-Between Combat Roller</h1></div>
	</tr>
</table>

        <br>
        <br>
        
        <table id="mainContent">
	<form id="rollerForm" autocomplete="off">
	    	<tr>
	<!-- SIRE -->
	<td class="entryBox sire">
		<h2>Opponent 1</h2>
        <label for="1_link">Import Link:</label>
        <input type="text" id="1_link"><br>
        <label for="1_name">Or Dragon Name:</label>
        <input type="text" id="1_name">
        <br>

        <label for="1_health">Health:</label>
        <input type="number" id="1_health" min="1" value=600>
        <label for="1_class">Class:</label>
        <select id="1_class">
            <option value="aberrant">AoT Ancient</option>
            <option value="light">Light</option>
            <option value="medium">Medium</option>
            <option value="heavy">Heavy</option>
            <option value="1_champion">Exalted Challenger</option>
            <option value="2_champion">Exalted Warrior</option>
            <option value="3_champion">Exalted Gladiator</option>
            <option value="4_champion">Exalted Champion</option>
        </select>
        
        <br>

        <label for="1_breath_type_1">Breath 1:</label>
        <select id="1_breath_type_1">
            <option value="NA">NA</option>
            <option value="fire">Fire</option>
            <option value="water">Water</option>
            <option value="wind">Wind</option>
            <option value="shadow">Shadow</option>
            <option value="lightning">Lightning</option>
            <option value="radiation">Radiation</option>
            <option value="poison">Poison</option>
            <option value="luster">Luster</option>
        </select>
        <label for="1_breath_tier_1">Tier:</label>
        <select id="1_breath_tier_1">
            <option value=1>1</option>
            <option value=2>2</option>
            <option value=3>3</option>
            <option value=4>4</option>
        </select>
        <label for="1_breath_type_2">Breath 2:</label>
        <select id="1_breath_type_2">
            <option value="NA">NA</option>
            <option value="fire">Fire</option>
            <option value="water">Water</option>
            <option value="wind">Wind</option>
            <option value="shadow">Shadow</option>
            <option value="lightning">Lightning</option>
            <option value="radiation">Radiation</option>
            <option value="poison">Poison</option>
            <option value="luster">Luster</option>
        </select>
        <label for="1_breath_tier_2">Tier:</label>
        <select id="1_breath_tier_2">
            <option value=1>1</option>
            <option value=2>2</option>
            <option value=3>3</option>
            <option value=4>4</option>
        </select>
        <br>
        <label for="1_magic">Magic Level:</label>
        <select id="1_magic">
            <option value="NA">NA</option>
            <option value="basic">Aether Book</option>
            <option value="basic">Basic</option>
            <option value="low">Low</option>
            <option value="high">High</option>
        </select>
        <label>Armor:</label>
        <select id="1_chest">
            <option value="NA">NA</option>
            <option value="leather">Bone Armor</option>
            <option value="sturdy">Leather Armor</option>
            <option value="iron">Iron Armor</option>
            <option value="crystalline">Crystalline Armor</option>
            <option value="aether">Aether Armor</option>
        </select>
        <br>
         <label>Battle Pets:</label>
        <select id="1_familiar_1" class="cellElement">
            <option value="NA">NA</option>
            <option value="dire_wolf">Dire Wolf</option>
            <option value="basilisk">Basilisk</option>
            <option value="phoenix">Phoenix</option>
        </select>
        <select id="1_familiar_2" class="cellElement">
            <option value="NA">NA</option>
            <option value="dire_wolf">Dire Wolf</option>
            <option value="basilisk">Basilisk</option>
            <option value="phoenix">Phoenix</option>
        </select>
        <br>
        <label>Skills:</label>
        <select id="1_skill_1" class="cellElement">
            <option value="NA">NA</option>
            <option value="skill_aether_walker">Aether Walker</option>
            <option value="skill_haunting_roar">Haunting Roar</option>
            <option value="skill_healing_aura">Healing Aura</option>
            <option value="skill_inner_fire">Inner Fire</option>
            <option value="skill_steadfast">Steadfast</option>
            <option value="skill_swift_feet">Swift Feet</option>
            <option value="skill_bleed">Serrated Teeth</option>
            <option value="skill_armor">Armored Hide</option>
            <option value="skill_dps">Frenzy</option>
        </select>
        <select id="1_skill_2" class="cellElement">
            <option value="NA">NA</option>
            <option value="skill_aether_walker">Aether Walker</option>
            <option value="skill_haunting_roar">Haunting Roar</option>
            <option value="skill_healing_aura">Healing Aura</option>
            <option value="skill_inner_fire">Inner Fire</option>
            <option value="skill_steadfast">Steadfast</option>
            <option value="skill_swift_feet">Swift Feet</option>
            <option value="skill_bleed">Serrated Teeth</option>
            <option value="skill_armor">Armored Hide</option>
            <option value="skill_dps">Frenzy</option>
        </select>
        <select id="1_skill_3" class="cellElement">
            <option value="NA">NA</option>
            <option value="skill_aether_walker">Aether Walker</option>
            <option value="skill_haunting_roar">Haunting Roar</option>
            <option value="skill_healing_aura">Healing Aura</option>
            <option value="skill_inner_fire">Inner Fire</option>
            <option value="skill_steadfast">Steadfast</option>
            <option value="skill_swift_feet">Swift Feet</option>
            <option value="skill_bleed">Serrated Teeth</option>
            <option value="skill_armor">Armored Hide</option>
            <option value="skill_dps">Frenzy</option>
        </select>
        <select id="1_skill_4" class="cellElement">
            <option value="NA">NA</option>
            <option value="skill_aether_walker">Aether Walker</option>
            <option value="skill_haunting_roar">Haunting Roar</option>
            <option value="skill_healing_aura">Healing Aura</option>
            <option value="skill_inner_fire">Inner Fire</option>
            <option value="skill_steadfast">Steadfast</option>
            <option value="skill_swift_feet">Swift Feet</option>
            <option value="skill_bleed">Serrated Teeth</option>
            <option value="skill_armor">Armored Hide</option>
            <option value="skill_dps">Frenzy</option>
        </select>
        <br>
        <label>Boosters:</label>
        <select id="1_item_1" class="cellElement">
            <option value="NA">NA</option>
            <option value="strength_tonic">Strength Booster</option>
            <option value="magic_tonic">Aether Booster</option>
            <option value="bleed_tonic">Bleed Booster</option>
            <option value="breath_tonic">Breath Booster</option>
            <option value="dps_booster">DPS Booster</option>
            <option value="brawler_booster">Brawler Booster</option>
            <option value="nightshade_booster">Nightshade Booster</option>
            <option value="warlord_booster">Warlord Booster</option>

        </select>
        <select id="1_item_2" class="cellElement">
            <option value="NA">NA</option>
            <option value="strength_tonic">Strength Booster</option>
            <option value="magic_tonic">Aether Booster</option>
            <option value="bleed_tonic">Bleed Booster</option>
            <option value="breath_tonic">Breath Booster</option>
            <option value="dps_booster">DPS Booster</option>
            <option value="brawler_booster">Brawler Booster</option>
            <option value="nightshade_booster">Nightshade Booster</option>
            <option value="warlord_booster">Warlord Booster</option>
        </select>
        <br>
        <label>Aberrant %:</label>
        <select id="1_aberrant_percentage" class="cellElement">
            <option value="0">0</option>
            <option value="25">25</option>
            <option value="50">50</option>
            <option value="100">100</option>
        </select>
        <input type="checkbox" id="1_can_pass_aberrant">Can Pass Aberrant?<br>
        <hr>
        <b>Part Break</b><br>
        <i>Parts break on PvE, not PvP</i><br>
        <input type="checkbox" id="1_use_breakable">Roll for breakable parts<br>
        <input type="checkbox" id="1_head_part">Head already broken</input>
        <input type="checkbox" id="1_tail_part">Tail already broken</input>
        <input type="checkbox" id="1_legs_part">Legs already broken</input>
        <br>
        
        	<!-- DAM -->
	<td class="entryBox dam">
		<h2>Opponent 2</h2>
        <label for="2_link">Import Link:</label>
        <input type="text" id="2_link"><br>
        <label for="2_name">Or Dragon Name:</label>
        <input type="text" id="2_name">
        <br>
        <label for="2_health">Health:</label>
        <input type="number" id="2_health" min="1" value=600>
        <label for="2_class">Class:</label>
        <select id="2_class">
            <option value="aberrant">AoT Ancient</option>
            <option value="light">Light</option>
            <option value="medium">Medium</option>
            <option value="heavy">Heavy</option>
            <option value="1_champion">Exalted Challenger</option>
            <option value="2_champion">Exalted Warrior</option>
            <option value="3_champion">Exalted Gladiator</option>
            <option value="4_champion">Exalted Champion</option>
        </select>
        <br>
        <label for="2_breath_type_1">Breath 1:</label>
        <select id="2_breath_type_1">
            <option value="NA">NA</option>
            <option value="fire">Fire</option>
            <option value="water">Water</option>
            <option value="wind">Wind</option>
            <option value="shadow">Shadow</option>
            <option value="lightning">Lightning</option>
            <option value="radiation">Radiation</option>
            <option value="poison">Poison</option>
            <option value="luster">Luster</option>
        </select>
        <label for="2_breath_tier_1">Tier:</label>
        <select id="2_breath_tier_1">
            <option value=1>1</option>
            <option value=2>2</option>
            <option value=3>3</option>
            <option value=4>4</option>
        </select>
        <label for="2_breath_type_2">Breath 2:</label>
        <select id="2_breath_type_2">
            <option value="NA">NA</option>
            <option value="fire">Fire</option>
            <option value="water">Water</option>
            <option value="wind">Wind</option>
            <option value="shadow">Shadow</option>
            <option value="lightning">Lightning</option>
            <option value="radiation">Radiation</option>
            <option value="poison">Poison</option>
            <option value="luster">Luster</option>
        </select>
        <label for="2_breath_tier_2">Tier:</label>
        <select id="2_breath_tier_2">
            <option value=1>1</option>
            <option value=2>2</option>
            <option value=3>3</option>
            <option value=4>4</option>
        </select>
        <br>
        <label for="2_magic">Magic Level:</label>
        <select id="2_magic">
            <option value="NA">NA</option>
            <option value="basic">Aether Book</option>
            <option value="basic">Basic</option>
            <option value="low">Low</option>
            <option value="high">High</option>
        </select>
        <label>Armor:</label>
        </select>
        <select id="2_chest">
            <option value="NA">NA</option>
            <option value="leather">Bone Armor</option>
            <option value="sturdy">Leather Armor</option>
            <option value="iron">Iron Armor</option>
            <option value="crystalline">Crystalline Armor</option>
            <option value="aether">Aether Armor</option>
        </select>
        <br>
        <label>Battle Pets:</label>
        <select id="2_familiar_1" class="cellElement">
            <option value="NA">NA</option>
            <option value="dire_wolf">Dire wolf</option>
            <option value="basilisk">Basilisk</option>
            <option value="phoenix">Phoenix</option>
        </select>
        <select id="2_familiar_2" class="cellElement">
            <option value="NA">NA</option>
            <option value="dire_wolf">Dire wolf</option>
            <option value="basilisk">Basilisk</option>
            <option value="phoenix">Phoenix</option>
        </select>
        <br>
        <label>Skills:</label>
        <select id="2_skill_1" class="cellElement">
            <option value="NA">NA</option>
            <option value="skill_aether_walker">Aether Walker</option>
            <option value="skill_haunting_roar">Haunting Roar</option>
            <option value="skill_healing_aura">Healing Aura</option>
            <option value="skill_inner_fire">Inner Fire</option>
            <option value="skill_steadfast">Steadfast</option>
            <option value="skill_swift_feet">Swift Feet</option>
            <option value="skill_bleed">Serrated Teeth</option>
            <option value="skill_armor">Armored Hide</option>
            <option value="skill_dps">Frenzy</option>
        </select>
        <select id="2_skill_2" class="cellElement">
            <option value="NA">NA</option>
            <option value="skill_aether_walker">Aether Walker</option>
            <option value="skill_haunting_roar">Haunting Roar</option>
            <option value="skill_healing_aura">Healing Aura</option>
            <option value="skill_inner_fire">Inner Fire</option>
            <option value="skill_steadfast">Steadfast</option>
            <option value="skill_swift_feet">Swift Feet</option>
            <option value="skill_bleed">Serrated Teeth</option>
            <option value="skill_armor">Armored Hide</option>
            <option value="skill_dps">Frenzy</option>
        </select>
        <select id="2_skill_3" class="cellElement">
            <option value="NA">NA</option>
            <option value="skill_aether_walker">Aether Walker</option>
            <option value="skill_haunting_roar">Haunting Roar</option>
            <option value="skill_healing_aura">Healing Aura</option>
            <option value="skill_inner_fire">Inner Fire</option>
            <option value="skill_steadfast">Steadfast</option>
            <option value="skill_swift_feet">Swift Feet</option>
            <option value="skill_bleed">Serrated Teeth</option>
            <option value="skill_armor">Armored Hide</option>
            <option value="skill_dps">Frenzy</option>
        </select>
            <select id="2_skill_4" class="cellElement">
            <option value="NA">NA</option>
            <option value="skill_aether_walker">Aether Walker</option>
            <option value="skill_haunting_roar">Haunting Roar</option>
            <option value="skill_healing_aura">Healing Aura</option>
            <option value="skill_inner_fire">Inner Fire</option>
            <option value="skill_steadfast">Steadfast</option>
            <option value="skill_swift_feet">Swift Feet</option>
            <option value="skill_bleed">Serrated Teeth</option>
            <option value="skill_armor">Armored Hide</option>
            <option value="skill_dps">Frenzy</option>
        </select>
        <br>
        <label>Boosters:</label>
        <select id="2_item_1" class="cellElement">
            <option value="NA">NA</option>
            <option value="strength_tonic">Strength Booster</option>
            <option value="magic_tonic">Aether Booster</option>
            <option value="bleed_tonic">Bleed Booster</option>
            <option value="breath_tonic">Breath Booster</option>
            <option value="dps_booster">DPS Booster</option>
            <option value="brawler_booster">Brawler Booster</option>
            <option value="nightshade_booster">Nightshade Booster</option>
            <option value="warlord_booster">Warlord Booster</option>
        </select>
            <select id="2_item_2" class="cellElement">
            <option value="NA">NA</option>
            <option value="strength_tonic">Strength Booster</option>
            <option value="magic_tonic">Aether Booster</option>
            <option value="bleed_tonic">Bleed Booster</option>
            <option value="breath_tonic">Breath Booster</option>
            <option value="dps_booster">DPS Booster</option>
            <option value="brawler_booster">Brawler Booster</option>
            <option value="nightshade_booster">Nightshade Booster</option>
            <option value="warlord_booster">Warlord Booster</option>
        </select>
        <br>
        <label>Aberrant %:</label>
        <select id="2_aberrant_percentage" class="cellElement">
            <option value="0">0</option>
            <option value="25">25</option>
            <option value="50">50</option>
            <option value="100">100</option>
        </select>
        <input type="checkbox" id="2_can_pass_aberrant">Can Pass Aberrant?<br>
        <hr>
        <b>Part Break</b><br>
        <i>Parts break on PvE, not PvP</i><br>
        <input type="checkbox" id="2_use_breakable">Roll for breakable parts</input>
        <br>
        <input type="checkbox" id="2_head_part">Head already broken</input>
        <input type="checkbox" id="2_tail_part">Tail already broken</input>
        <input type="checkbox" id="2_legs_part">Legs already broken</input>
        <br>
	</tr>
	</form>
</table>
           
           <br>
            <br>
            <center>
        <button class="button" onclick=roll()>Roll Combat</button>
        
        <table id="nest">
	<td>
        <div id="nestTextarea">
        <p id="result" style="border: 2px solid black;"></p>
        <br>
        </div>
        </td>
        </table>
        <p>
  <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Detailed Info</a>
  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Dragon Details</button>
  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Both</button>
</p>
<div class="row">
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample1">
      <div class="card card-body">
                  <p id="detailed_breakdown" style="border: 2px solid black;"></p>

      </div>
    </div>
  </div>
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample2">
      <div class="card card-body">
        <p id="dragon_details" style="border: 2px solid black;"></p>
      </div>
    </div>
  </div>
</div>
       </center>
    </body>


<table id="footer">
	<td id="footerElement"> v3.0.0 - Created By Draginraptor<br>
	Souls-Between 2020<br>
	Return Home<br>
</table>



</html>
