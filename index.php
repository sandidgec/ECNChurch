<!DOCTYPE html>
<html>
<head>
    <?php require_once("lib/head-utils.php"); ?>
    <?php require_once("indexNavBar.php");?>
    <!-- Custom styles for this template -->
    <link href="/lib/css/styleindex.css" rel="stylesheet">
    
    <title>Home</title>
</head>
<body>

    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
            <li data-target="#carousel-example-generic" data-slide-to="4"></li>
            <li data-target="#carousel-example-generic" data-slide-to="5"></li>
            <li data-target="#carousel-example-generic" data-slide-to="6"></li>
            <li data-target="#carousel-example-generic" data-slide-to="7"></li>
            <li data-target="#carousel-example-generic" data-slide-to="8"></li>

        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="/lib/img/oldHosp.jpg" alt="...">
                <div class="carousel-caption">
                    <h1>Hozho Center</h1>
                </div>
            </div>
            <div class="item">
                <img src="/lib/img/oldHosInterior.jpg" alt="...">
                <div class="carousel-caption">
                    <h1>Hozho Center Chapel</h1>
                </div>
            </div>
            <div class="item">
                <img src="/lib/img/WRYouth.jpg" alt="...">
                <div class="carousel-caption">
                    <h1>Southeast Region Youth</h1>
                </div>
            </div>
            <div class="item">
                <img src="/lib/img/GSMBell.JPG" alt="...">
                <div class="carousel-caption">
                    <h1>Good Shepherd Mission Bell</h1>
                </div>
            </div>
            <div class="item">
                <img src="/lib/img/HDF.JPG" alt="...">
                <div class="carousel-caption">
                    <h1> Homer Dell Farm</h1>
                </div>
            </div>
            <div class="item">
                <img src="/lib/img/lilyFlower.JPG" alt="...">
                <div class="carousel-caption">
                    <h1>St. Christopher's Lily</h1>
                </div>
            </div>
            <div class="item">
                <img src="/lib/img/ruinsCDc.JPG" alt="...">
                <div class="carousel-caption">
                    <h1> Canyon Ruins</h1>
                </div>
            </div>
            <div class="item">
                <img src="/lib/img/stCBell.JPG" alt="...">
                <div class="carousel-caption">
                    <h1>St. Christopher's Bell</h1>
                </div>
            </div>
            <div class="item">
                <img src="/lib/img/windowR.JPG" alt="...">
                <div class="carousel-caption">
                    <h> WindowRock Monument</h>
                </div>
            </div>
            ...
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="row logo-container">
        <div id="logo" class="col-lg-4">
            <div class="row no-pad">
                <img src="/lib/img/episcopalchurchinnavajolandlogo_480.png"
                                           class="img-responsive"  alt="Awesome.jpg">
            </div>
        </div>

        <div class="col-lg-offset-4 col-lg-4">
            <a href="#bulletin" class="btn btn-lg btn-primary text-center">Bulletins</a>
        </div>
    </div>

    <div class="container bulliten" id="bulletin">
        <div class="row bulliten">

            <div class="col-lg-4" id="rcorners">
                <div id="b">Utah Region's Latest News</div>
                <h2>St. Christopher's Bee Project is Happening</h2>
                <h4>100 Pounds is Ready to be Packaged!</h4>
                <h6>Contact office for more Info.</h6>
            </div>

            <div class="col-lg-4" id="rcorners">
                <div id="b">S.J. Region's Latest News</div>
                <h2>ECN's 40th Annual Convocation was a Success!</h2>
                <h4>Hosted by the San Juan Region @
                    All Saints Church Farmington, NM</h4>
                <h6>Thank You For Your Support!</h6>
            </div>

            <div class="col-lg-4" id="rcorners">
                <div class="container" id="b">S.E. Region's Latest News</div>
                <h2>St. Marks Church VBS will be held @ GSM</h2>
                <h4> Prepare to be outdoors, and to have some fun!</h4>
                <h6>Last week of July from 2pm to 6pm
                Snack, Dinner and a take home meal provided!</h6>
            </div>

        </div>
    </div>



<div id="bg">
    <div id="search-container">
        <div id="search-bg"></div>
        <div id="search">

            <div id="bg">
                <div id="search-container">
                    <div id="search-bg"></div>
                    <div id="search">


                        <div class="row">
                            <div class="col-lg-4">
                                <a href="southEast.php">
                                <h3>South East Region</h3>
                                </a>
                                <h6 span class="state">Arizona Churches</h6></span>
                                <a href="http://www.goodshepmission.org/">
                                <h6>Good Shepherd Mission</h6>
                               </a>
                                <h6>St. Josephs Church</h6>
                                <h6 span class="state">New Mexico Churches</h6></span>
                                <h6>St. Marks Church</h6>
                            </div>
                            <div class="col-lg-4">
                                <a href="sanJuanRegion.php">
                                <h3>San Juan Region</h3>
                                </a>
                                <h6 span class="state">New Mexico Churches</h6></span>
                                <h6>All Saints Church</h6>
                                <h6>St. Michael's Church</h6>
                                <h6>St. Luke's In the Desert</h6>
                            </div>
                            <div class="col-lg-4">
                                <a href="utahRegion.php">
                                <h3>Utah Region</h3>
                                </a>
                                <h6>St. Christopher's Mission</h6>
                                <h6>St. Mary's of the Moonlight</h6>
                                <h6>St. John the Baptizer</h6>
                                <h6>St. David's House</h6>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

    <div id="search-container">
        <div id="search-bg"></div>
        <div id="search">
            <div class="row">
                <div class="col-lg-4">
                    <div class="thumbnail">
                        <img src="/lib/img/slide3.jpg">
                    </div>
                    <div class="thumbnail">
                        <img src="/lib/img/gsmhoganproject.jpg">
                    </div>
                </div>
                <div class="col-lg-8" id="text">
                    <h3>The Hogan Project</h3>
                    Rebuilding the spiritual and physical homes.
                    A Spiritual Place: Navajo spirituality recognizes a sacred web of life which encompasses all living
                    things.And Navajo ceremonies are designed to restore this harmony with all of creation to those who
                    are ill or hurting in any way. These ceremonies take place in hogans.<br>
                    <br>
                    A Place Home: The hogan is also the traditional Navajo home. Its shape reflects the universe.
                    The one door opens to the East, to greet the dawn. All inside activities move in a clockwise fashion,
                    following the sun’s path. The domed roof is the sky, the floor is the earth, and the smoke hole is a
                    window to the North Star. Literally translated, hogan means “place home”, and the Navajo take their
                    identity from it.<br>
                    <br>
                    The Project: Through harsh weather, neglect, and decaying materials, many of the hogans on the
                    Reservation have fallen into ruin. The Episcopal Church in Navajoland has begun a campaign to
                    build new hogans, for ceremonial, educational, and spiritual purposes. There will be two hogans
                    in each state the Reservation touches: Arizona, New Mexico, and Utah.<br>
                    <br>
                    A hogan is built of wood, usually cedar or ponderosa or pinyon pine. Today, there is often a steel
                    infrastructure, providing resistance to the strenuous winds which sweep through the Reservation.
                    Today’s hogans are often built on a concrete slab for durability.<br>
                    <br>
                    The Financial's: The cost of a hogan varies greatly depending on its location. Proximity to
                    electricity and water, availability of materials and labor, and accessibility for the delivery
                    of them are some of the factors which contribute to variable cost. Thus, we estimate that each 800
                    square foot hogan will cost approximately $40,000 to construct.<br>
                    <br>
                    The Follow-up: As the hogans are funded, watch the building progress on our website,
                    www.navajoland.org. We’ll have pictures and updates that show you how your generosity empowers as
                    it preserves the beauty of Navajo culture.<br>
                </div>
            </div>
        </div>
    </div>


            <div class="row">
            
                <div class="row">
                    <div class="col-lg-6">
                        <div class="circle" id="sms">
                        <a href="https://shima-of-navajoland.myshopify.com/">
                            <h3>ShiMa' Soaps</h3>
                        </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="circle"  id="cds">
                            <a href="https://www.facebook.com/cheiidevshop/">
                                <h3>Cheii's DevShop</h3>
                            </a>
                        </div>
                    </div>
                </div>

            </div>



        </div>
    </div>
</div>



    <ol class="breadcrumb">
        <li><a href="index.php">Home</a></li>
        <li><a href="areaMissContact.php">Area Mission Contact</a></li>
        <li><a href="Calendar.php">Calendar</a></li>
        <li><a href="findaChurch.php">Find A Church</a></li>
        <li><a href="missionsRetreats.php">Missions/Retreats</a></li>
        <li class="active"></li>
    </ol>
</body>

</html>