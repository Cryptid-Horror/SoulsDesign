<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Souls Between Activity Roller</title>

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
    <link href="{{ asset('css/custom_roller_css/activitycss.css') }}" rel="stylesheet">

</head>

<body>
    <div id="title" align="center">
        <h1>Activity Roller</h1>
    </div>

    <div id="container1" align="center">
        <table>
            <td>
                <form id="activitytype">
                    <b>Activity</b>
                    <select id="activity" name="activity">
                        <option value="hunting">Hunting</option>
                        <option value="fishing">Fishing</option>
                        <option value="foraging">Foraging</option>
                        <option value="caving">Caving</option>
                    </select>
                </form>
                <form id="playerinfo" align="left">
                    <b>Name</b>
                    <input type="text" id="dName" placeholder="Dragon's Name here">
                    <br>
                    <b>Rank</b>
                    <select id="rank" name="rank">
                        <option value="beginner">Beginner</option>
                        <option value="stablehand">Stable-Hand</option>
                        <option value="tamer">Dragon Tamer</option>
                        <option value="master">Dragon Master</option>
                    </select>
                    <br>
                    <b>Zone</b>
                    <select id="zone" name="zone">
                        <option value="radiant">Radiant Empire</option>
                        <option value="gloom">Gloom Empire</option>
                        <option value="frigid">Frigid Empire</option>
                        <option value="shimmering">Shimmering Isles</option>
                        <option value="scorched">Scorched Empire</option>
                        <option value="aether">The Aether</option>
                    </select>
                    <br>
                    <b>Temperament</b>
                    <select id="temp" name="temp">
                        <option value="timid">Vigilant or Calm</option>
                        <option value="aggressive">Aggressive or Sinister</option>
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
                <form id="modifiers" align="center">
                    <label class="radioLabel"><input type="checkbox" id="barrely" name="barrely" value="barrely"
                            data-toggle="tooltip" data-placement="top" title="Free rolls get less loot.">✦Free
                        Roll?</label>

                    <label class="radioLabel"><input type="checkbox" id="hoardery" name="hoardery" value="hoardery"
                            data-toggle="tooltip" data-placement="top" title="+1 item returned.">✦Hoarder Skill</label>
                    <label class="radioLabel"><input type="checkbox" id="bagy" name="bagy" value="bagy"
                            data-toggle="tooltip" data-placement="top"
                            title="Basket (Forage/Cave) or Cooler (Hunt/Fish).">✦Container</label>

                    <label class="radioLabel"><input type="checkbox" id="mimicy" name="mimicy" value="mimicy"
                            data-toggle="tooltip" data-placement="top"
                            title="Hunt: Vulture || Fish: Reticulated Crocodile || Forage: Toucan || Cave: Dracobat">✦Extra
                        Item Pet</label>

                    <label class="radioLabel"><input type="checkbox" id="charmy" name="charmy" value="charmy"
                            data-toggle="tooltip" data-placement="top" title="Item Rarity Buff.">✦Charm</label>

                    <label class="radioLabel"><input type="checkbox" id="tamey" name="tamey" value="tamey"
                            data-toggle="tooltip" data-placement="top" title="Item Rarity Buff">✦Morality Trial</label>

                    <label class="radioLabel"><input type="checkbox" id="Blue" name="Blue" value="Blue"
                            data-toggle="tooltip" data-placement="top"
                            title="Increase chance for Recipe Fragments">✦Blueprint</label>

                    <label class="radioLabel"><input type="checkbox" id="newty" name="newty" value="newty"
                            data-toggle="tooltip" data-placement="top"
                            title="Increase chance for Recipe Fragments">✦Newt Pet</label>

                    <label class="radioLabel"><input type="checkbox" id="souly" name="souly" value="souly"
                            data-toggle="tooltip" data-placement="top" title="Decrease chance of injury">✦Spirit
                        Trial</label>

                    <label class="radioLabel"><input type="checkbox" id="nofaily" name="nofaily" value="nofaily"
                            data-toggle="tooltip" data-placement="top" title="You won't fail!">✦Pearl Necklace</label>

                    <label class="radioLabel"><input type="checkbox" id="AdeptY" name="AdeptY" value="AdeptY"
                            data-toggle="tooltip" data-placement="top" title="Ensure location matches!">✦Adept
                        Skill</label>

                    <label class="radioLabel"><input type="checkbox" id="famY" name="famY" value="famY"
                            data-toggle="tooltip" data-placement="top"
                            title="Hunt: Ursus || Fish: Otter|| Forage: Deer || Cave: Cane toad">✦Pass Pet</label>

                    <label class="radioLabel"><input type="checkbox" id="localy" name="localy" value="localy"
                            data-toggle="tooltip" data-placement="top"
                            title="Vigilant: Frigid and Gloom || Aggressive: Scorched and Shimmering || Calm: Aether and Radiant || Sinister: All Locations">✦Temper
                        Buff</label>
                    </tr>
        </table>
        </form>
        </td>
        <div id="buttoncontainer" align="center">
            <button class="button" onclick="roll()">roll</button>
            <button class="button" onclick="clearForms()">reset</button>
        </div>
        <div id="output" align="left">
            <div id="result"></div>
            </table>

            <div id="cred">Copyright Souls Between 2019, All Rights Reserved.<br>
                Version 2.0.0</div>
        </div>
    </div>
    <br>


    <!-- Found in the public/js folder -->
    <script src="{{ asset('js/custom_rollers/z_dev_daily.js') }}"></script>

</body>

</html>
