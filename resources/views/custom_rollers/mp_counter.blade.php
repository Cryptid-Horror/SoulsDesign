<!doctype html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Souls Between Mastery Point Calculator</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--Bootstrap JS --> 
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
   <!-- Should always be kept; found in the public/css -->
    <link href="{{ asset('css/custom_roller_css/counterstyle.css') }}" rel="stylesheet">

    

</head>

<body>
<!-- Navigation -->
   
    <!-- CONTENT -->
<div id="title">Mastery Point Calculator</div>
	<div class="credit">
	All coding credit goes to Livard (Liv Schneider)<br>
	Primal Points and Values Copyright Souls-Between 2019<br></div>
	
	<div class="boxed box3 side">	
		<h1>Earned Points</h1>
		<form id="mpcount">
			<fieldset id="type">
				<table>
					<td><input type="radio" id="personal" checked><label for="personal" class="wide">Personal</label></td>
					<td><input type="radio" id="nonpersonal"><label for="nonpersonal" class="wide">Other</label></td>
				</table>
			</fieldset>
			<input type="checkbox" id="handf"><label for="handf" class="wide">Daily Activities</label><br>
			<input type="checkbox" id="quest"><label for="quest" class="wide">Questing</label><br>
			<input type="checkbox" id="arenaf"><label for="arenaf" class="wide">Arena (Free)</label><br>
			<input type="checkbox" id="arenac"><label for="arenac" class="wide">Arena (Drawn)</label><br>
			<input type="checkbox" id="event"><label for="event" class="wide">General/Annual Event</label>
			
			<div id="text"><br>Regular events are annual or group-sanctioned events that are not overall story or plot driven.<br><br></div>
			<input type="checkbox" id="story"><label for="story" class="wide">Story Event</label><br>
			<div id="text"><br>Story events are group wide limited time events that are clearly labeled as story/lore events. <br><br></div>
			<input type="checkbox" id="character"><label for="character" class="wide">Character Development</label><br>
			<div id="text"><br>Character development refers to any of the following activities: Rites, Taming, Aether, and Soul Linking. <br><br></div>
			<input type="checkbox" id="craft"><label for="craft" class="wide">Crafting</label><br>
			<input type="checkbox" id="challenge"><label for="challenge" class="wide">Seasonal Challenge</label><br>
			<input type="checkbox" id="advent"><label for="advent" class="wide">Advent Raffles</label><br>
			<div id="text"><br>Advent entries only count towards your MP total if you have a dragon present in the image, meaning you will not get MP for only drawing the advent dragon.<br><br></div>
		</form>
	</div>
	<div class="boxed box3 center"><h1>Final Count</h1>
		Copy this text into your tracker!<br>
		<textarea rows= "15" cols= "40" id="points" onClick= "this.select();"></textarea><br><br>
		<div id="text">For artwork created for someone else of their dragon participating in an activity, all points will be halved except: Advent, Hunting and foraging (Which is reduced to 2). If you have a dragon present, no values are halved. <br><br><br></div>
		<a class="big button" onclick="reset()">Reset</a>
		<p>
			
		</p>
	</div>
</div>
<br><br>

    <!-- Found in the public/js folder -->
    <script src="{{ asset('js/custom_rollers/MPJava.js') }}"></script>
</body>
</html>