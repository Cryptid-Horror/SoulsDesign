<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Dragon's Blood Roller</title>
    <!--Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--Bootstrap JS --> 
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
   <!-- Should always be kept; found in the public/css -->
    <link href="{{ asset('css/custom_roller_css/activitycss.css') }}" rel="stylesheet">
    <!-- Found in the public/js folder -->
    <script src="{{ asset('js/custom_rollers/dbroller.js') }}"></script>
    
</head>

<body>
	<a id="ddmenuLink" href="NavBar.html">Menu</a>
	<div id="title" align="center"><h1>Dragon's Blood Roller</h1></div>
	<br>
	<div id="container1" align="center">
		<b>Dragon Import URL:</b><br>
<input type="text" id="dURL" placeholder="Dragon's URL here"><br><br>

		<b>Please Select if dragon is a Ravager:</b><br>
<input type="checkbox" id="rav"><label for="rav">Ravager</label>

<div id="buttoncontainer">
	<button class="button" onclick="roll()">Roll</button>
	<button class="button" onclick="clearResult()">Clear</button>
</div>

<div type="text" id="output" onClick="this.select();">
	<div id="result"></div>
</div>
</div>

</body>
</html>
