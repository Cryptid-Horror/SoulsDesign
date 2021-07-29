<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Souls Between Questing Roller</title>

     <!--Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--Bootstrap JS --> 
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
   <!-- Should always be kept; found in the public/css -->
    <link href="{{ asset('css/custom_roller_css/activitycss.css') }}" rel="stylesheet">
    <!-- Found in the public/js folder -->
    <script src="{{ asset('js/custom_rollers/roller_questing.js') }}"></script>

</head>

<body>
	<a id="ddmenuLink" href="NavBar.html">Menu</a>
<div id="title" align="center"><h1>Quest Roller</h1></div>

        	<div id="container1" align="center">
        	    <table>
        	       <td>
				<form id="playerinfo" align="left">
					<b>Import Name</b>
	<input type="text" id="dName" placeholder="Dragon's Name here">
	</form>

        <br>
        
        

        	    <form id="playerinfo" align="left">
        	        <b>Quests</b>
        <select id="quest" name="quest">
            <optgroup label="Basic">
                <option value="b1">A Path Less Traveled</option>
                <option value="b2">Counting Sheep</option>
                <option value="b3">A Festival of Honor</option>
                <option value="b4">New Discoveries</option>
                <option value="b5">Tanning the Hide</option>
                <option value="b6">Show Me Your Bug Collection</option>
            <optgroup label="Intermediate">
                <option value="i1">A Missing Friend</option>
                <option value="i2">Aiding the Injured</option>
                <option value="i3">Where's the Gold?</option>
                <option value="i4">The Cutest Critter You Ever did See</option>
                <option value="i5">The Gardener's Knowledge</option>
                <option value="i6">Clockmaker's Friend</option>
                <option value="i7">Hiding in Plain Sight</option>
            <optgroup label="Master">
                <option value="m1">Lurking in the Waters</option>
                <option value="m2">Surveying the Aether</option>
                <option value="m3">The Breath of a Dragon</option>
                <option value="m4">A Serpent's Touch</option>
                <option value="m5">Tiny Griffins</option>
        </select>
 <br>
        <b>Rank</b>
        <select id="rank" name="rank">
            <option value="fledgling">Fledgling</option>
            <option value="primal">Primal</option>
            <option value="ancient">Ancient</option>
            <option value="primordial">Primordial</option>
        </select>
        <br>
        <b>Temper</b>
        <select id="temper" name="temper">
            <option value="na">N/A</option>
            <option value="timid">Timid</option>
            <option value="aggressive">Aggressive</option>
        </select>
        <br>
        <b>Magic Level</b>
        <select id="magic_level" name="magic_level">
            <option value="none">None</option>
            <option value="low">Low</option>
            <option value="high">High</option>
        </select>
        <br>
        <b>Magic Type</b>
        <select id="magic_type" name="magic_type">
                <option value="none">None</option>
                <option value="arcane">Arcane</option>
                <option value="illusionist">Illusionist</option>
                <option value="elementalist">Elementalist</option>
                <option value="healing">Healing</option>
                <option value="enchantment">Enchantment</option>
            </select>
           </form>
           </td>
           
    <td>
  	<form id="modifiers" align="left">
  	    <table>
    <tr>
        <td>Bonded</td>
        <td><input type="radio" name="bonded" id="bondedY"><label for="bondedY">Yes</label></td>
        <td><input type="radio" name="bonded" id="bondedN"><label for="bondedN">No</label></td>
    </tr>
    <tr>
        <td>Extra Dragon</td>
        <td><input type="radio" name="other_dragon" id="other_dragonY"><label for="other_dragonY">Yes</label></td>
        <td><input type="radio" name="other_dragon" id="other_dragonN"><label for="other_dragonN">No</label></td>
    </tr>
    <tr>
        <td>Hoarder</td>
       <td><input type="radio" name="hoarder" id="is_hoarderY"><label for="is_hoarderY">Yes</label></td>
       <td><input type="radio" name="hoarder" id="is_hoarderN"><label for="is_hoarderN">No</label></td>
    </tr>
    <tr>
        <td>Domestic Taming</td>
       <td><input type="radio" name="domes_tamingY" value ="domes_taming" id="domes_tamingY"><label for="domes_tamingY">Yes</label></td>  
       <td><input type="radio" name="domes_tamingY" value ="domes_taming" id="domes_tamingN"><label for="domes_tamingN">No</label></td>
    </tr>
    <tr>
        <td>Scoria Komodo</td>
      <td><input type="radio" name="scoria_komodoY" value="scoria_komdo" id="scoria_komodoY"><label for="scoria_komodoY">Yes</label></td>  
      <td><input type="radio" name="scoria_komodoY" value="scoria_komdo" id="scoria_komodoN"><label for="scoria_komodoN">No</label></td> 
    </tr>
    <tr>
    <td>Pearl Necklace</td>
			<td><input type="radio" name="nofail" id="nofaily"><label for="nofaily">Yes</label></td>
			<td><input type="radio" name="nofail" id="nofailn" checked><label for="nofailn">No</label></td>
	</tr>
      </table></table>
               </form>
        </td>
        </div>
        
 	<div id="buttoncontainer" align="center">
		<button class="button" onclick="roll()">roll</button>
		<button class="button" onclick="clearForms()">reset</button>
	</div>

<center>
    <div id="container3" align="center">
    <div id="output">
            <div id="result"></div>
                </div></div></center>
   <center><div id="cred">Copyright Souls-Between 2020, All Rights Reserved.</div></center>
        <br>
       
    </body>

</html>