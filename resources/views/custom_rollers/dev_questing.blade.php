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
    <script src="{{ asset('js/custom_rollers/roller_questingv2.js') }}"></script>

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
                </form>
            </td>
           
            <td>
                <form id="modifiers" align="right">
                    <table>
                        <tr>
                            <td>Bonded</td>
                            <td><input type="radio" name="bonded" value="Y"><label for="bonded">Yes</label></td>
                            <td><input type="radio" name="bonded" value="N" checked><label for="bonded">No</label></td>
                        </tr>
                        <tr>
                            <td>Extra Dragon</td>
                            <td><input type="radio" name="other_dragon" value="Y"><label for="other_dragon">Yes</label></td>
                            <td><input type="radio" name="other_dragon" value="N" checked><label for="other_dragon">No</label></td>
                        </tr>
                        <tr>
                            <td>Hoarder</td>
                            <td><input type="radio" name="hoarder" value="Y"><label for="is_hoarder">Yes</label></td>
                            <td><input type="radio" name="hoarder" value="N" checked><label for="is_hoarder">No</label></td>
                        </tr>
                        <tr>
                            <td>Raccoon (+1 Item)</td>
                            <td><input type="radio" name="raccoon" value="Y"><label for="fam_racoon">Yes</label></td>
                            <td><input type="radio" name="raccoon" value="N" checked><label for="fam_racoon">No</label></td>
                        </tr>
                        <tr>
                            <td>Bunny (Pass chance)</td>
                            <td><input type="radio" name="bunny" value="Y" class="extras"><label for="bunny">Yes</label></td>
                            <td><input type="radio" name="bunny" value="N" class="extras" checked><label for="bunny">No</label></td>
                        </tr>
                        <tr>
                            <td>Porcupine (Injury chance)</td>
                            <td><input type="radio" name="porcupine" value="Y" class="extras"><label for="porcupine">Yes</label></td>
                            <td><input type="radio" name="porcupine" value="N" class="extras" checked><label for="porcupine">No</label></td>
                        </tr>
                        <tr>
                            <td>Domestic Taming</td>
                            <td><input type="radio" name="domestic_taming" value="Y" class="extras"><label for="domestic_taming">Yes</label></td>  
                            <td><input type="radio" name="domestic_taming" value="N" class="extras" checked><label for="domestic_taming">No</label></td>
                        </tr>
                        <tr>
                            <td>Scoria Komodo</td>
                            <td><input type="radio" name="scoria_komodo" value="Y" class="extras"><label for="scoria_komodo">Yes</label></td>  
                            <td><input type="radio" name="scoria_komodo" value="N" class="extras" checked><label for="scoria_komodo">No</label></td> 
                        </tr>
                        <tr>
                            <td>Pearl Necklace</td>
                            <td><input type="radio" name="pearl_necklace" value="Y" class="extras"><label for="pearl_necklace">Yes</label></td>
                            <td><input type="radio" name="pearl_necklace" value="N" class="extras" checked><label for="pearl_necklace">No</label></td>
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
        <div id="cred">Copyright Souls-Between 2020, All Rights Reserved.</div>
        <br>
    </center>
</body>

</html>