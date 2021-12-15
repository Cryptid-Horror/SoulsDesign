<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Souls Between Vortex Roller</title>

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
<div id="title" align="center"><h1>Vortex and World Event Roller</h1></div>

<div id="container1" align="center">
	<table>
	<td>
		<form id="activitytype">
			<b>World Event</b>
			<select id="activity" name="activity">
				<option value="AoT">Abyss of Thorns</option>
				<option value="AetherWars">Aether Wars</option>
				<option value="ToL">Tides of Lightning</option>
				<option value="VoTW">Voyage of the Wardens</option>
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
			<b>Vortex/Live?</b>
			<select id="zone" name="zone">
				<option value="vortex">Vortex</option>
				<option value="live">Live</option>
			</select>
			<br>
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
<script src="{{ asset('js/custom_rollers/vortex.js') }}"></script>

</body>

</html>
