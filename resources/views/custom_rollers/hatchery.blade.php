<!doctype html>
<head>
    <title>Hatchery Roller</title>
    	    <!--Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--Bootstrap JS --> 
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
   <!-- Should always be kept; found in the public/css -->
    <link href="{{ asset('css/custom_roller_css/activitycss.css') }}" rel="stylesheet">

</head>
<html lang="en">
    <body>
<div id="title" align="center"><h1>Hatchery Roller</h1></div>
        <select id="rarity">
            <option value="common">Common</option>
            <option value="uncommon">Uncommon</option>
            <option value="rare">Rare</option>
            <option value="mythic>Mythic</option>"
            <option value="myst">Mysterious</option>
        </select>
        <select id="species">
            <option value="Stalker Wyvern">Stalker</option>
            <option value="Ravager Wyvern">Ravager</option>
            <option value="Warden Dragon">Warden</option>
            <option value="Greater Emperor">Greater Emperor</option>
            <option value="Sapiere Dragon">Sapiere Dragon</option>

        </select>
        <br>
        <input type="checkbox" id="activity"> Is An Activity Egg or Random Species?
        <br>
        <button class="button" onclick="roll()">Roll Egg</button>
        
        <br>
        
        	<div id="container3" align="center">
	<div id="output" align="left">
			<p id="result"></p>
	</div>
        <!-- Found in the public/js folder -->
    <script src="{{ asset('js/custom_rollers/hatcheryroller.js') }}"></script>
    </body>
    
	<center><div id="cred">Copyright Souls Between 2019, All Rights Reserved.<br>
	Created by Draginraptor
</div></div></center>
</html>
