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
                    <select id="activity" name="activity" align="center">
                        <option value="Brankless">Rankless</option>
                        <option value="Bchallenger">Challenger</option>
                        <option value="Bwarrior">Warrior</option>
                        <option value="Bgladiator">Gladiator</option>
                        <option value="Bchampion">Champion</option>
                    </select>
                </form>

                <div id="container1" align="center">
                    <table>
                        <td>
                            <form id=playerinfo" align="left">
                                <b>Name</b>
                                <input type="text" id="dName" placeholder="Dragon's Name here">
                                <br>
                                <b>Prestige</b>
                                <select id="zone" name="zone">
                                    <option value="basic">Base levels</option>
                                    <option value="copper">Copper Prestige</option>
                                </select>
                            </form>
                        </td>
                        <td>
                                <center>
                                    <h1>Modifiers</h1>
                                    <table>
                                        <tr>
                                            <td>Free Roll</td>
                                            <td><input type="radio" name="barrel" id="barrely"><label
                                                    for="barrely">Yes</label></td>
                                            <td><input type="radio" name="barrel" id="barreln" checked><label
                                                    for="barreln">No</label></td>
                                        </tr>
                                        <tr>
                                            <td>Golden Chest of Mimcry</td>
                                            <td><input type="radio" name="mimic" id="mimicy"><label
                                                    for="mimicy">Yes</label></td>
                                            <td><input type="radio" name="mimic" id="mimicn" checked><label
                                                    for="mimicn">No</label></td>
                                        </tr>
                                        <tr>
                                            <td>Hoarder-Skill</td>
                                            <td><input type="radio" name="hoarder" id="hoardery"><label
                                                    for="hoardery">Yes</label></td>
                                            <td><input type="radio" name="hoarder" id="hoardern" checked><label
                                                    for="hoardern">No</label></td>
                                        </tr>
                                        <tr>
                                            <td>Satchel</td>
                                            <td><input type="radio" name="satchel" id="bagy"><label
                                                    for="bagy">Yes</label></td>
                                            <td><input type="radio" name="satchel" id="bagn" checked><label
                                                    for="bagn">No</label></td>
                                        </tr>
                                        <tr>
                                            <td>Arena Honor (Taming)</td>
                                            <td><input type="radio" name="charm" id="charmy"><label
                                                    for="charmy">Yes</label></td>
                                            <td><input type="radio" name="charm" id="charmn" checked><label
                                                    for="charmn">No</label></td>
                                        </tr>
                                        <tr>
                                            <td>Rarity Familiar</td>
                                            <td><input type="radio" name="fam" id="famy"><label for="famy">Yes</label>
                                            </td>
                                            <td><input type="radio" name="fam" id="famn" checked><label
                                                    for="famn">No</label></td>
                                        </tr>
                                        <tr>
                                            <td>Endless Satchel</td>
                                            <td><input type="radio" name="end" id="endy"><label for="endy">Yes</label>
                                            </td>
                                            <td><input type="radio" name="end" id="endn" checked><label
                                                    for="endn">No</label></td>
                                        </tr>
                                    </table>
                        </td>
                    </table>
                </div>
            </div>
        </div>
        <br>

        <div class="boxed box3 center">
            <h1>Crucible Loot Results</h1>
            <div id="buttoncontainer" align="center">
                <button class="button" onclick="roll()">roll</button>
                <button class="button" onclick="clearForms()">reset</button>
            </div>
            <div class="textarea" rows="10" cols="40" id="result" onClick="this.select();"></div><br><br>
        </div>

        <!-- Found in the public/js folder -->
        <script type="text/javascript" src="{{ asset('js/custom_rollers/arenaloot.js') }}"></script>

</body>

</html>
