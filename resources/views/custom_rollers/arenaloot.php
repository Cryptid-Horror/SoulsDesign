<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Souls Between Arena Loot Roller</title>

      <!--Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--Bootstrap JS --> 
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
   <!-- Should always be kept; found in the public/css -->
	<link href="https://www.soulsbetween.com/css/custom_roller_css/activitycss.css" rel="stylesheet">
	<!-- Found in the public/js folder -->
    <script src="https://www.soulsbetween.com/js/custom_rollers/arena.js"></script>



</head>

<body>
<div id="title" align="center"><h1>Activity Roller</h1></div>


	<form id="activitytype" align="center">
		<select id="activity" name="activity" align="center">
			<option value="basechallenger">Challenger</option>
			<option value="basewarrior">Warrior</option>
			<option value="basegladiator">Gladiator</option>
            <option value="basechampion">Champion</option>
		</select>
	</form>
	
	<div id="container1" align="center">
		<table>
			<td>
				<form id=playerinfo" align="left">
					<b>Name</b>
					<input type="text" id="dName" placeholder="Dragon's Name here">
		<br>
				
		
	</form>
			</td>
			<td>
			<form id="modifiers" align="right">
			<table>
		<tr>
			<td>Golden Chest of Mimcry - Entry</td>
			<td><input type="radio" name="mimic" id="mimicy"><label for="mimicy">Yes</label></td>
			<td><input type="radio" name="mimic" id="mimicn" checked><label for="mimicn">No</label></td>
		</tr>
		<tr>
			<td>Golden Chest of Mimcry - Free</td>
			<td><input type="radio" name="mimic" id="mimicfreey"><label for="mimicfreey">Yes</label></td>
			<td><input type="radio" name="mimic" id="mimicfreen" checked><label for="mimicfreen">No</label></td>
		</tr>
		<tr>
			<td>Hoarder-Skill</td>
			<td><input type="radio" name="hoarder" id="hoardery"><label for="hoardery">Yes</label></td>
			<td><input type="radio" name="hoarder" id="hoardern" checked><label for="hoardern">No</label></td>
		</tr>
</table></form>
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
	<div id="cred">Copyright Souls Between 2019, All Rights Reserved.
</div></div>
	
	
	</div>

</body>

</html>
