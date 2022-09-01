<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Souls Between Arena Loot Roller</title>

    <!--Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <!-- Should always be kept; found in the public/css -->
    <link href="{{ asset('css/custom_roller_css/expedition.css') }}" rel="stylesheet">

</head>

<body>
    <div id="title" align="center">
        <h1>Crucible Loot Roller</h1>
    </div>

    <div class="credit">
        <a href="https://www.soulsbetween.com/"><img src="https://i.imgur.com/3Jjag9m.png" width="200px"></a><br>
        Version: 1.0.0<br>
        CSS Credit: Livard (Main) and Cryptid || Original Code: Owlapin<br>
        Roller Content: Copyright Souls-Between 2019 - 2022<br>
    </div>
    <div id="all">
        <div class="boxed box3 side">
            <div class="contentbox">
                <form id="activitytype" align="center">
					<b>Rank</b>
                    <select id="activity" name="activity" align="center">
                        <option value="Brankless">Rankless</option>
                        <option value="Bchallenger">Challenger</option>
                        <option value="Bwarrior">Warrior</option>
                        <option value="Bgladiator">Gladiator</option>
                        <option value="Bchampion">Champion</option>
                    </select><br>
                    <b>Name</b>
                    <input type="text" id="dName" placeholder="Dragon's Name here">
                    <br>
                    <b>Prestige</b>
                    <select id="zone" name="zone">
                        <option value="basic">Base levels</option>
                        <option value="copper">Copper Prestige</option>
                    </select>
                        <hr>
                        <center>
                            <h1>Modifiers</h1>
                            <h3>General</h3>
                            <span style="white-space: nowrap;">

                                <label class="radioLabel"><input type="checkbox" id="barrely" name="barrely"
                                        value="barrely" data-toggle="tooltip" data-placement="top"
                                        title="Free rolls get less loot. If a Book is used on free roll, deselect this option.">✦Free
                                    Roll?</label>
                                <label class="radioLabel"><input type="checkbox" id="charmy" name="charmy"
                                        value="charmy" data-toggle="tooltip" data-placement="top"
                                        title="Item Rarity Buff.">✦Morality Trial</label>

                            </span>
                            <h3> Items</h3>
                            <span style="white-space: nowrap;">

                                <label class="radioLabel"><input type="checkbox" id="bagy" name="bagy" value="bagy"
                                        data-toggle="tooltip" data-placement="top"
                                        title="Basket (Forage/Cave) or Cooler (Hunt/Fish).">✦Satchel</label>

                                <label class="radioLabel"><input type="checkbox" id="booky" name="booky" value="booky"
                                        data-toggle="tooltip" data-placement="top"
                                        title="Loot chance Max + any modifiers">✦Empyrean Book</label><br>
                            </span>

                            <h3> Pets</h3>
                            <span style="white-space: nowrap;">

                                <label class="radioLabel"><input type="checkbox" id="mimicy" name="mimicy"
                                        value="mimicy" data-toggle="tooltip" data-placement="top"
                                        title="Hunt: Vulture || Fish: Reticulated Crocodile || Forage: Toucan || Cave: Dracobat">✦Mimic
                                    Pet</label>

                            </span>
                            <span style="white-space: nowrap;">
                                <label class="radioLabel"><input type="checkbox" id="famY" name="famY" value="famY"
                                        data-toggle="tooltip" data-placement="top"
                                        title="Hunt: Ursus || Fish: Otter|| Forage: Deer || Cave: Cane toad">✦Pass
                                    Pet</label>
                            </span>

                            <h3> Skills</h3>
                            <span style="white-space: nowrap;">

                                <label class="radioLabel"><input type="checkbox" id="hoardery" name="hoardery"
                                        value="hoardery" data-toggle="tooltip" data-placement="top"
                                        title="+1 item returned.">✦Hoarder</label>
                            </span>
                            <h3> Aether Talents</h3>
                            <span style="white-space: nowrap;">
                                <label class="radioLabel"><input type="checkbox" id="endy" name="edny" value="endy"
                                        data-toggle="tooltip" data-placement="top" title="+1 item returned.">✦Endless
                                    Satchel</label>
                            </span>
                        </center>
                </form>
            </div>
        </div>
    </div>
		<div class="boxed box3 center">
            <h1>Expedition Results</h1>
            <div id="buttoncontainer" align="center">
                <button class="button" onclick="roll()">roll</button>
                <button class="button" onclick="clearForms()">reset</button>
            </div>
            <div class="textarea" rows="10" cols="40" id="result" onClick="this.select();"></div><br><br>
    	</div>

</body>

</html>

<!-- Found in the public/js folder -->
<script type="text/javascript" src="{{ asset('js/custom_rollers/arenaloot.js') }}"></script>
