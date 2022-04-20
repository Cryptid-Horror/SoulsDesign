<!doctype html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Souls Between Primal Point Calculator</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!--Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--Bootstrap JS --> 
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
   <!-- Should always be kept; found in the public/css -->
    <link href="{{ asset('css/custom_roller_css/counterstyle.css') }}" rel="stylesheet">
    <!-- Found in the public/js folder -->
    <script src="{{ asset('js/custom_rollers/counterCE.js') }}"></script>

</head>

<body>
<!-- Navigation -->
    <!-- CONTENT -->
	
<div id="title">Celestial Experience Calculator</div>
	<div class="credit">
	All coding credit goes to Livard (Liv Schneider)<br>
	Primal Points and Values Copyright Souls-Between 2019<br></div>
	<a href="/home.html"><img src="/images/backarrow2.png" width="75px" class="backarrow"></a>
<div id="all">
	<div class="boxed box3 side">	
	<div class="contentbox">
		<h1>Base Points</h1>
		<form id="mpcount">
			Click on the items that apply to your piece. <br>
			<input type="checkbox" id="art"><label for="art" class="wide">Art</label><br>
			<fieldset id="arttype">
				<input type="radio" name="artamount" id="drawn"><label for="drawn" class="wide">Drawn</label><br>
				<input type="radio" name="artamount" id="sculpt"><label for="sculpt" class="wide">Sculpted</label><br>
				<table>
					<td><input type="radio" name="arttype" id="headshot"><label for="headshot" class="wide">Headshot</label></td>
					<td><input type="radio" name="arttype" id="fullbody"><label for="fullbody" class="wide">Fullbody</label></td>
				</table>
				
					<fieldset id="quality">
						<input type="checkbox" id="colored"><label for="colored">Colored</label><br>
						<input type="checkbox" id="shaded"><label for="shaded">Shaded</label><br>
						<input type="checkbox" id="chibi"><label for="chibi">Chibi</label><br>
						<input type="checkbox" id="recolored"><label for="recolored">Recolored</label><br>
					</fieldset><br>
			</fieldset>
				<input type="checkbox" id="anim"><label for="anim" class="wide">Animated</label>
				<br>
				<fieldset id="animation">
					<table>
					<td><input type="radio" name="animation" id="simple" checked><label for="simple" class="wide">Simple Animation</label></td>
					<td><input type="radio" name="animation" id="complex"><label for="complex" class="wide">Complex Animation</label></td>
					</table>
					
				</fieldset>
				<input type="checkbox" id="ip"><label for="ip" class="wide">Icon/Pixel</label><br>
			
			<input type="checkbox" id="literature"><label for="literature" class="wide">Literature</label><br>
			<fieldset id="wordcount">
				<label for="wordcount">What's the <a href= "http://www.wordcounter.net/">Wordcount</a>?</label><br>
				<input type="text" name="wordcount" id="wc"><br><br>
			</fieldset>
		
	</div>
	</div>
	<div class="boxed box3 center"><h1>Final Count</h1>
		Copy this text into your prompt submission!<br>
		<textarea rows= "10" cols= "40" id="points" onClick= "this.select();"></textarea><br><br>
		<a class="big button" onclick="reset()">Reset</a>
		<p>
			
		</p>
	</div>
	<div class="boxed box3 side">
		<fieldset id="bonuses">
		<div class="contentbox">
			<h1>Additional Bonuses</h1>
			<div id="text">These bonuses apply ontop of the base bonuses, earning you more points! Click on them to apply them to your count. <br><br></div>
			<input type="checkbox" id="pa"><label for="pa" class="wide">Personal Art</label><br>
            <input type="checkbox" id="bg"><label for="bg" class="wide">Background</label><br>
			<input type="checkbox" id="colab"><label for="colab" class="wide">Collaboration</label><br>
			<input type="checkbox" id="companion"><label for="companion" class="wide">Companion Present</label><br>
			<input type="checkbox" id="added"><label for="added" class="wide">Added Dragon</label><br>
			<input type="checkbox" id="added2"><label for="added2" class="wide">Added Dragon #2</label><br>
			<input type="checkbox" id="oarpg"><label for="oarpg" class="wide">Other ARPG Creature</label><br>
			<h3> Skills and Familiars</h3> 
			<input type="checkbox" id="moon"><label for="moon" class="wide">Blessing of the Moon</label><br>
			<input type="checkbox" id="sun"><label for="sun" class="wide">Guardian of the Sun</label><br>
			<input type="checkbox" id="confetti"><label for="confetti" class="wide">Confetti Dreams</label><br>
			<input type="checkbox" id="feline"><label for="feline" class="wide">Celestial Feline</label><br>
			<h3>Participation</h3>
			<input type="checkbox" id="activity"><label for="activity" class="wide">Activity</label><br>
			<input type="checkbox" id="event"><label for="event" class="wide">Annual Event</label><br>
			<input type="checkbox" id="arena"><label for="arena" class="wide">Arena/Grand Hunt</label><br>
			<input type="checkbox" id="story"><label for="story" class="wide">World Event</label><br>
			<input type="checkbox" id="br"><label for="br" class="wide">Rites</label><br>
			<div id="text">Rites are: Nesting, Taming, Aether Restoration, Soul Linking, etc<br><br></div>
			</form>
		</div>
				</fieldset>
	</div>
</div>
<br><br>
</body>

</html>