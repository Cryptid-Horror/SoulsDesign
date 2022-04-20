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
    <script src="{{ asset('js/custom_rollers/questing.js') }}"></script>

</head>

<body>
    <a id="ddmenuLink" href="https://www.soulsbetween.com/">Return Home</a>
    <div id="title" align="center"><h1>Quest Roller</h1></div>

    <div id="container1" align="center">
        <table>
            <td>
                <form id="playerinfo" align="left">
                    <b>Character Name</b>
                    <input type="text" id="dName" placeholder="Dragon's Name here">
                    <br>

                    <b>Quests</b>
                    <select id="quest" name="quest">
                        <optgroup label="Basic">
                            <option value="b1">Meet Meat</option>
                            <option value="b2">The Gardener's Knowledge</option>
                            <option value="b3">Fishing Trophies</option>
                            <option value="b4">New Discoveries</option>
                            <option value="b5">Tanning the Hide</option>
                            <option value="b6">A Dragon's Hoard</option>
                        <optgroup label="Intermediate">
                            <option value="i1">Graveyard Digging</option>
                            <option value="i2">Missing Friends</option>
                            <option value="i3">Aiding The Injured</option>
                            <option value="i4">Wyvern Wrath</option>
                            <option value="i5">Clockmaker's friend</option>
                            <option value="i6">The Perfect Nest</option>
                        <optgroup label="Master">
                            <option value="m1">Lurking in the Waters</option>
                            <option value="m2">Surveying the Aether</option>
                            <option value="m3">Feast of the Ages</option>
                            <option value="m4">Into Familiar Territory</option>
                            <option value="m5">Mirror, Mirror</option>
                            <option value="m6">Fury of Dragons</option>
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
                        <option value="timid">Timid/Calm</option>
                        <option value="aggressive">Aggressive/Sinister</option>
                    </select>
                    <br>

                    <b>Magic Level</b>
                    <select id="magic_level" name="magic_level">
                        <option value="none">None</option>
                        <option value="basic">Basic</option>
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
                            <td>Bonded</td>
                            <td><input type="radio" name="bonded" id="bonded_Y" value="Y"><label for="bonded_Y">Yes</label></td>
                            <td><input type="radio" name="bonded" id="bonded_N" value="N" checked><label for="bonded_N">No</label></td>
                        </tr>
                        <tr>
                            <td>Extra Dragon</td>
                            <td><input type="radio" name="other_dragon" id="other_dragon_Y" value="Y"><label for="other_dragon_Y">Yes</label></td>
                            <td><input type="radio" name="other_dragon" id="other_dragon_N" value="N" checked><label for="other_dragon_N">No</label></td>
                        </tr>
                        <tr>
                            <td>Hoarder</td>
                            <td><input type="radio" name="hoarder" id="hoarder_Y" value="Y"><label for="hoarder_Y">Yes</label></td>
                            <td><input type="radio" name="hoarder" id="hoarder_N" value="N" checked><label for="hoarder_N">No</label></td>
                        </tr>
                        <tr>
                            <td>Raccoon (+1 Item)</td>
                            <td><input type="radio" name="raccoon" id="raccoon_Y" value="Y"><label for="raccoon_Y">Yes</label></td>
                            <td><input type="radio" name="raccoon" id="raccoon_N" value="N" checked><label for="raccoon_N">No</label></td>
                        </tr>
                        <tr>
                            <td>Bunny (Pass chance)</td>
                            <td><input type="radio" name="bunny" id="bunny_Y" value="Y" class="extras"><label for="bunny_Y">Yes</label></td>
                            <td><input type="radio" name="bunny" id="bunny_N" value="N" class="extras" checked><label for="bunny_N">No</label></td>
                        </tr>
                        <tr>
                            <td>Porcupine (Injury chance)</td>
                            <td><input type="radio" name="porcupine" id="porcupine_Y" value="Y" class="extras"><label for="porcupine_Y">Yes</label></td>
                            <td><input type="radio" name="porcupine" id="porcupine_N" value="N" class="extras" checked><label for="porcupine_N">No</label></td>
                        </tr>
                        <tr>
                            <td>Fairy (Status Injury chance)</td>
                            <td><input type="radio" name="fairy" id="fairy_Y" value="Y" class="extras"><label for="fairy_Y">Yes</label></td>
                            <td><input type="radio" name="fairy" id="fairy_N" value="N" class="extras" checked><label for="fairy_N">No</label></td>
                        </tr>
                        <tr>
                            <td>Domestic Taming</td>
                            <td><input type="radio" name="domestic_taming" id="domestic_taming_Y" value="Y" class="extras"><label for="domestic_taming_Y">Yes</label></td>  
                            <td><input type="radio" name="domestic_taming" id="domestic_taming_N" value="N" class="extras" checked><label for="domestic_taming_N">No</label></td>
                        </tr>
                        <tr>
                            <td>Scoria Komodo</td>
                            <td><input type="radio" name="scoria_komodo" id="scoria_komodo_Y" value="Y" class="extras"><label for="scoria_komodo_Y">Yes</label></td>  
                            <td><input type="radio" name="scoria_komodo" id="scoria_komodo_N" value="N" class="extras" checked><label for="scoria_komodo_N">No</label></td> 
                        </tr>
                        <tr>
                            <td>Pearl Necklace</td>
                            <td><input type="radio" name="pearl_necklace" id="pearl_necklace_Y" value="Y" class="extras"><label for="pearl_necklace_Y">Yes</label></td>
                            <td><input type="radio" name="pearl_necklace" id="pearl_necklace_N" value="N" class="extras" checked><label for="pearl_necklace_N">No</label></td>
                        </tr>
                        <tr>
                            <td>Emergency Supplies</td>
                            <td><input type="radio" name="emergency_supplies" id="emergency_supplies_Y" value="Y" class="extras"><label for="emergency_supplies_Y">Yes</label></td>
                            <td><input type="radio" name="emergency_supplies" id="emergency_supplies_N" value="N" class="extras" checked><label for="emergency_supplies_N">No</label></td>
                        </tr>
                    </table>
                </form>
            </td>
        </table>
    </div>
        
    <div id="buttoncontainer">
        <button class="button" onclick="roll()">roll</button>
        <button class="button" onclick="clearForms()">reset</button>
    </div>

    <center>
        <div id="output">
            <div id="result"></div>
        </div>
        <div id="cred">Copyright Souls-Between 2020, All Rights Reserved. <br> 
        Created by Draginraptor<br>
        Version 2.0</div>
        <br>
    </center>
</body>

</html>