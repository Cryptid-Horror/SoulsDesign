<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Souls Between Activity Roller</title>

      <!--Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--Bootstrap JS --> 
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
   <!-- Should always be kept; found in the public/css -->
    <link href="{{ asset('css/custom_roller_css/activitycss.css') }}" rel="stylesheet">

</head>

<body>
<div id="title" align="center"><h1>Activity Roller</h1></div>

<div id="container1" align="center">
	<table>
	<td>
		<form id="activitytype">
			<b>Activity</b>
			<select id="activity" name="activity">
				<option value="hunting">Hunting</option>
				<option value="fishing">Fishing</option>
				<option value="foraging">Foraging</option>
				<option value="caving">Caving</option>
			</select>
		</form>
		<form id=playerinfo" align="left">
			<b>Name</b>
			<input type="text" id="dName" placeholder="Dragon's Name here">
			<br>
			<b>Rank</b>
			<select id="rank" name="rank">
				<option value="beginner">Beginner</option>
				<option value="stablehand">Stable-Hand</option>
				<option value="tamer">Dragon Tamer</option>
				<option value="master">Dragon Master</option>
			</select>
			<br>
			<b>Zone</b>
			<select id="zone" name="zone">
				<option value="radiant">Radiant Empire</option>
				<option value="gloom">Gloom Empire</option>
				<option value="frigid">Frigid Empire</option>
				<option value="shimmering">Shimmering Isles</option>
				<option value="scorched">Scorched Empire</option>
				<option value="aether">The Aether</option>
			</select>
			<br>
			<b>Temperament</b>
			<select id="temp" name="temp">
				<option value="timid">Vigilant or Calm</option>
				<option value="aggressive">Aggressive or Sinister</option>
			</select>
			<br>
			<b>Aberrant %</b>
			<select id="aberrant" name="aberrant">
				<option value="0%">0%</option>
				<option value="25%">25%</option>
				<option value="50%">50%</option>
				<option value="100%">100%</option>
			</select>
		</form>
	</td>
	<td>
		<form id="modifiers" align="right">
		<table>
		<tr>
			<td>Free Roll</td>
			<td><input type="radio" name="barrel" id="barrely"><label for="barrely">Yes</label></td>
			<td><input type="radio" name="barrel" id="barreln" checked><label for="barreln">No</label></td>
		
			<td>Hoarder-Skill</td>
			<td><input type="radio" name="hoarder" id="hoardery"><label for="hoardery">Yes</label></td>
			<td><input type="radio" name="hoarder" id="hoardern" checked><label for="hoardern">No</label></td>
		</tr>
        	<td>Item Container</td>
			<td><input type="radio" name="satchel" id="bagy"><label for="bagy">Yes</label></td>
			<td><input type="radio" name="satchel" id="bagn" checked><label for="bagn">No</label></td>
		
			<td> Extra Item Familiar</td>
			<td><input type="radio" name="mimic" id="mimicy"><label for="mimicy">Yes</label></td>
			<td><input type="radio" name="mimic" id="mimicn" checked><label for="mimicn">No</label></td>
		</tr>
		<tr>
			<td>Charm</td>
			<td><input type="radio" name="charm" id="charmy"><label for="charmy">Yes</label></td>
			<td><input type="radio" name="charm" id="charmn" checked><label for="charmn">No</label></td>
	
			<td>Taming</td>
			<td><input type="radio" name="tame" id="tamey"><label for="tamey">Yes</label></td>
			<td><input type="radio" name="tame" id="tamen" checked><label for="tamen">No</label></td>
		</tr>
		<tr>
			<td>Blueprint</td>
			<td><input type="radio" name="Blueprint" id="Blue"><label for="Blue">Yes</label></td>
			<td><input type="radio" name="Blueprint" id="Bluen" checked><label for="Bluen">No</label></td>
	
        	<td>Newt</td>
			<td><input type="radio" name="Newt" id="newty"><label for="newty">Yes</label></td>
			<td><input type="radio" name="Newt" id="newtn" checked><label for="newtn">No</label></td>
		</tr>
		<tr>
			<td>Soul-Linked</td>
			<td><input type="radio" name="soul" id="souly"><label for="souly">Yes</label></td>
			<td><input type="radio" name="soul" id="souln" checked><label for="souln">No</label></td>
	
			<td>Pearl Necklace</td>
			<td><input type="radio" name="nofail" id="nofaily"><label for="nofaily">Yes</label></td>
			<td><input type="radio" name="nofail" id="nofailn" checked><label for="nofailn">No</label></td>
		</tr>
		<tr>
			<td>Adept</td>
			<td><input type="radio" name="Adept" id="AdeptY"><label for="AdeptY">Yes</label></td>
			<td><input type="radio" name="Adept" id="AdeptN" checked><label for="AdeptN">No</label></td>
	
			<td>  Pass Chance Familiar</td>
			<td><input type="radio" name="fam" id="famY"><label for="famY">Yes</label></td>
			<td><input type="radio" name="fam" id="famN" checked><label for="famN">No</label></td>
		</tr>
		<tr>
			<td>Temperament Location Buff</td>
			<td><input type="radio" name="local" id="localy"><label for="localy">Yes</label></td>
			<td><input type="radio" name="local" id="localn" checked><label for="localn">No</label></td>
			
			<td>Aberrant Dragon?</td>
			<td><input type="radio" name="cor" id="cory"><label for="cory">Yes</label></td>
			<td><input type="radio" name="cor" id="corn" checked><label for="corn">No</label></td>
		</tr>
		</table>
		</form>
	</td>
	</table>
</div>
<br>
<div id="buttoncontainer" align="center">
	<button class="button" onclick="roll()">roll</button>
	<button class="button" onclick="clearForms()">reset</button>
</div>
	
<div id="container3" align="center">
	<div id="output" align="left">
		<div id="result"></div>
	</div>
	<div id="cred">Copyright Souls Between 2019, All Rights Reserved.<br>
    Version 2.0.0</div>
</div>
	
<!-- Found in the public/js folder -->
<script src="{{ asset('js/custom_rollers/activity.js') }}"></script>

</body>

</html>
