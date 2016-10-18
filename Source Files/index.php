<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>LoL Informatics</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/formValidation.min.css" rel="stylesheet">
    <link href="css/morris.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/MyCSS.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- YOUR CONTENT HERE -->
    <div class="Pwrap" style="background-color:powderblue;">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
                    <a class="navbar-brand" href="#">LoL Informatics</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                    <ul class="nav navbar-nav">
                        <li><a href="#AboutUs">About Us</a></li>
                        <li><a href="#Introduction">Introduction <span class="sr-only">(current)</span></a></li>
                        <li><a href="#ChampionSpotlight">Champion Spotlight</a></li>
                        <li><a href="#Champions">Champions</a></li>
                        <li><a href="form.php">Form</a></li>
                        <li><a href="plots.php">Plots</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="AboutUs">
            <div class="col-md-12">
                <h1>About Us:</h1>
            </div>
        </div>
        <br/>
        <br/>
        <div class="row">
            <div class="col-md-6"><img alt="LoL Informatics logo" src="images/logo.png" width=380px height=230px></div>
            <div class="col-md-6">LoL Informatics is a website designed to simultaneously help new players quickly pick up and play <a href="http://na.leagueoflegends.com" style="color: #CC0000">League of Legends</a>, and provide experienced players with analytics and stats
                about their favourite champions and roles. Our website compiles quick tutorials of various champions, and recommends good champions to pick up and play based on their win-rates and your preferred role. It also provides various statistics
                about champions, including their base stats, as well as how they compare to other champions in various categories, such as win rate, ban rate, and pick rate.
            </div>
        </div>

        <br/>
        <br/>

        <div id="Introduction">
            <div class="col-md-12">
                <h1>Introduction: </h1>
            </div>
        </div>

        <br/>
        <br/>


        <div class="row">
            <div class="col-md-3">
                <img border="0" alt="Ekko" src="images/ekkolel.png" width="340" height="300">
            </div>
            <div class="col-md-3">
                <img border="0" alt="Baron" src="images/baronlel.png" width="340" height="300">
            </div>
            <div class="col-md-3">
                <img border="0" alt="Lucian and Thresh" src="images/LucianAndThresh.jpg" width="340" height="300">
            </div>
            <div class="col-md-3">
                <img border="0" alt="Singed" src="images/singedlel.png" width="340" height="300">
            </div>
        </div>

        <br/>
        <br/>

        <div class="row">
            <div class="col-md-6">
                <p class="padbelow">In <a href="http://na.leagueoflegends.com" style="color: #CC0000">League of Legends</a>, you control a character from an overhead view as you battle alongside four other teammates to try to take down the opposing team's nexus. You can
                    choose between a wide variety of characters, each filling different roles, which you will combine to build powerful team compositions. In game, you will split up to battle in three separate lanes in order to destroy turrets and make
                    your way towards the enemy base. To help you, there are neutral buffs which your team can battle and take in order to help your team in various ways. Once your team has broken into the enemy base, the final objective is to destroy
                    the enemy nexus.
                </p>
                <p>
                    To the right, the roles are listed in order, along with the types of champions that are most commonly used in those roles.
                </p>
            </div>
            <div class="col-md-6">
                <ol>
                    <li class="role">Top
                        <ul class="archetype">
                            <li>Tanks</li>
                            <li>Fighters</li>
                        </ul>
                    </li>
                    <li class="role">Jungle
                        <ul class="archetype">
                            <li>Fighters</li>
                            <li>Tanks</li>
                        </ul>
                    </li>
                    <li class="role">Mid
                        <ul class="archetype">
                            <li>Mages</li>
                            <li>Assassins</li>
                        </ul>
                    </li>
                    <li class="role">Bot
                        <ul class="archetype">
                            <li>Marksmen</li>
                        </ul>
                    </li>
                    <li class="role">Support
                        <ul class="archetype">
                            <li>Enchanters</li>
                            <li>Tanks</li>
                        </ul>
                    </li>
                </ol>
            </div>
        </div>

        <br/>
        <br/>

        <div id="ChampionSpotlight">
            <div class="col-md-12">
                <h1>Champion Spotlight:</h1>
            </div>
        </div>

        <br/>
        <br/>

        <div class="row">
            <div class="col-md-6"><iframe src="https://player.vimeo.com/video/101653894" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
            <div class="col-md-6">
                <p class="pad-below">
                    <b>Braum, the Heart of the Freljord.</b> Braum wields a frozen door that he uses to defend anyone who needs his help. He is a tanky support champion whose job is to protect his allies at all costs. He does this by using his array of
                    spells to help stop the enemies in their tracks. His passive,
                    <b>"Concussive Blows,"</b> allows him to stun enemies that he or his allies consecutively attack. His first ability, <b>"Winter's Bite,"</b> fires a ball of ice that slows anyone it hits. His second ability, "Stand Behind Me," allows
                    him to jump towards an ally and grant them resistances briefly. His third ability is <b>"Unbreakable,"</b> which causes him to raise his door as a shield to block incoming attacks. His ultimate ability is <b>"Glacial Fissure,"</b>                    in which he slams his shield into the ground, creating a shockwave of ice which damages and knocks up enemies, leaving behind a slowing field as well.
                </p>

                <ul class="nodot">
                    <li><b>Attack power: </b>3</li>
                    <li><b>Defense power: </b>9</li>
                    <li><b>Ability power: </b>4</li>
                    <li><b>Difficulty: </b>3</li>
                </ul>
            </div>
        </div>


        <br/>
        <br/>

        <div id="Champions">
            <div class="col-md-12">
                <h1>Champions:</h1>
            </div>
        </div>

        <br/>
        <br/>

        <table class="table table-hover">
            <tr class="tablerowhead">
                <th>Champion</th>
                <th>Portrait</th>
                <th>Passive</th>
                <th>Ability 1</th>
                <th>Ability 2</th>
                <th>Ability 3</th>
                <th>Ultimate Ability</th>
            </tr>
            <tr>
                <th class="tablerowheadname">Zed</th>
                <td><img src="images/Zed.png"></td>
                <td><b class="abilityname">Contempt for the Weak:</b> Zed does bonus damage to enemies below half health.</td>
                <td><b class="abilityname">Razor Shuriken:</b> Zed and his shadows throw shurikens that deal damage to all enemies hit.</td>
                <td><b class="abilityname">Living Shadow:</b> Zed creates a shadow nearby that mimics his abilites. He can choose to dash to it.</td>
                <td><b class="abilityname">Shadow Slash:</b> Zed damages all enemies in a small area around him.</td>
                <td><b class="abilityname">Death Mark:</b> Zed dashes to an enemy while marking them and leaving behind a shadow. For the next few seconds, a portion of the damage Zed deals to that enemy will cause the mark to explode and deal bonus damage.</td>
            </tr>
            <tr>
                <th class="tablerowheadname">Yasuo</th>
                <td><img src="images/Yasuo.png"></td>
                <td><b class="abilityname">Way of the Wanderer:</b> Yasuo's critical chance is doubled, and moving builds up a shield.</td>
                <td><b class="abilityname">Steel Tempest:</b> Yasuo attacks in a line. If done twice in a row, the third Steel Tempest will knockup enemies. Can be used while dashing with <b class="abilityname">Sweeping Blade</b></td>
                <td><b class="abilityname">Wind Wall:</b> Yasuo creates a wall that blocks all projectiles for a few seconds.</td>
                <td><b class="abilityname">Sweeping Blade:</b> Yasuo dashes through an enemy, damaging them.</td>
                <td><b class="abilityname">Last Breath:</b> While an enemy is knocked up, Yasuo can jump to them and deal heavy damage, before gaining bonus armor penetration for a few seconds.</td>

            </tr>
            <tr>
                <th class="tablerowheadname">Master Yi</th>
                <td><img src="images/MasterYi.png"></td>
                <td><b class="abilityname">Double Strike:</b> Every four basic attacks, Master Yi will strike twice.</td>
                <td><b class="abilityname">Alpha Strike:</b> Master Yi teleports to up to 4 nearby enemies, damaging them.</td>
                <td><b class="abilityname">Meditate:</b> Master Yi heals himself for a few seconds, taking reduced damage while channeling.</td>
                <td><b class="abilityname">Wuju Style:</b> Master Yi passively gains bonus damage. Upon activating the ability, Master Yi does bonus true damage for a few seconds.</td>
                <td><b class="abilityname">Highlander:</b> Master Yi gains bonus movement speed and attack speed, as well as immunity to slows. The abilities duration increases if Master Yi takes down enemies while the ability is active.</td>

            </tr>
        </table>


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/formValidation.min.js"></script>
        <script src="js/framework/bootstrap.min.js"></script>
        <script src="js/raphael-min.js"></script>
        <script src="js/morris.min.js"></script>
    </div>
</body>

</html>
