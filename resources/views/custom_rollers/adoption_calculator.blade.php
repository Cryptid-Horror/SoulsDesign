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
					<td><input type="radio" id="release"><label for="release" class="wide">Wild Relase</label></td>
					<td><input type="radio" id="donate"><label for="donate" class="wide">Donate</label></td>
				</table>
			</fieldset>
			<input type="checkbox" id="dailyquests"><label for="dailyquests" class="wide">Daily Activities and Quests</label><br>
			<input type="checkbox" id="combat"><label for="combat" class="wide">Arena and Grand Hunt</label><br>
			<input type="checkbox" id="vortex"><label for="vortex" class="wide">Vortex</label><br>
			<input type="checkbox" id="events"><label for="events" class="wide">All Events</label><br>
			<input type="checkbox" id="rites"><label for="rites" class="wide">Rites</label>
            <div id="text"><br>Rites include any of the following: Nesting, Taming, Aether, Occupations, and Soul Linking. <br><br></div>
            <input type="checkbox" id="healing"><label for="healing" class="wide">Healing Shrine</label><br>
			<div id="text"><br>Healing shrine only counts for lit/art entries - not item healing. <br><br></div>
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

    <div class="boxed box3 side">
    <form id="mpcount">
		<fieldset id="type">
			<h1>Additional Bonuses</h1>
			<div id="text">These bonuses apply ontop of the base bonuses, earning you more points! Click on them to apply them to your count. <br><br></div>
			<input type="checkbox" id="shadingsimple"><label for="shadingsimple" class="wide">Simple Shading</label><br>
            <input type="checkbox" id="shadingcomplex"><label for="shadingcomplex" class="wide">Complex Shading</label><br>
			<input type="checkbox" id="simplebackground"><label for="simplebackground" class="wide">Simple Background</label><br>
			<input type="checkbox" id="complexbackground"><label for="complexbackground" class="wide">Complex Background</label><br>
            <input type="checkbox" id="addedcompanion"><label for="addecompanion" class="wide">Added Companion</label><br>

			<h3>Extra Dragons (Stacks 4 times)</h3>
			<input type="checkbox" id="extradragon1"><label for="extradragon1" class="wide">Extra Dragon (1)</label><br>
			<input type="checkbox" id="extradragon2"><label for="extradragon2" class="wide">Extra Dragon (2)</label><br>
            <input type="checkbox" id="extradragon3"><label for="extradragon3" class="wide">Extra Dragon (3)</label><br>
            <input type="checkbox" id="extradragon4"><label for="extradragon4" class="wide">Extra Dragon (4)</label><br>

			<h3>Extra Works (Stacks 5 times)</h3>
			<input type="checkbox" id="extrawords1"><label for="extrawords1" class="wide">150 Extra Words (1)</label><br>
            <input type="checkbox" id="extrawords2"><label for="extrawords2" class="wide">150 Extra Words (2)</label><br>
            <input type="checkbox" id="extrawords3"><label for="extrawords3" class="wide">150 Extra Words (3)</label><br>
            <input type="checkbox" id="extrawords4"><label for="extrawords4" class="wide">150 Extra Words (4)</label><br>
            <input type="checkbox" id="extrawords5"><label for="extrawords5" class="wide">150 Extra Words (5)</label><br>

			</form>
				</fieldset>
</div>
<br><br>

    <!-- Found in the public/js folder -->
    <script src="{{ asset('js/custom_rollers/ACcalc.js') }}"></script>
</body>
</html>