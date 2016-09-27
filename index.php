<!DOCTYPE html>
<html>
<head>
    <?php require_once("lib/head-utils.php"); ?>
    <?php require_once("indexNavBar.php");?>
    <!-- Custom styles for this template -->
    <link href="/lib/css/styleindex.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Quattrocento' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Oswald:700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pontano+Sans" rel="stylesheet">
    <title>Home</title>
</head>
<body>
<!---------Beginning Carousel ----------------------------------------------------------------------------------------->


    <div class="container-fluid">
        <div class="row">
            
            <div id="inCarMain" class="col-sm-8">
                <div id="carousel-example-generic" class="carousel slide container" data-ride="carousel">
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
                        <li data-target="#carousel-example-generic" data-slide-to="9"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="10"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="11"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="/lib/img/oldHosp.jpg " alt="...">
                            <div class="carousel-caption" id="caption">
                                <h2>The Old Hospital, Farmington, NM</h2>
                            </div>
                        </div>
                        <div class="item">
                            <img src="/lib/img/oldHosInterior.jpg " alt="...">
                            <div class="carousel-caption" id="caption">
                                <h2>Inside the Old Hospital, Farmington, NM</h2>
                            </div>
                        </div>
                        <div class="item">
                            <img src="/lib/img/sheepCamp.jpg " alt="...">
                            <div class="carousel-caption" id="caption">
                                <h2>Sheep Camp Upper Fruitland, New Mexico</h2>
                            </div>
                        </div>
                        <div class="item">
                            <img src="/lib/img/WRYouth.jpg " alt="...">
                            <div class="carousel-caption" id="caption">
                                <h2>South East Region Youth</h2>
                            </div>
                        </div>
                        <div class="item">
                            <img src="/lib/img/GSMBell.JPG " alt="...">
                            <div class="carousel-caption" id="caption">
                                <h2>Good Shepherd Mission Bell Ft. Defiance, AZ </h2>
                            </div>
                        </div>
                        <div class="item">
                            <img src="/lib/img/greenField.JPG" alt="...">
                            <div class="carousel-caption" id="caption">
                                <h2>Harvest Time</h2>
                            </div>
                        </div>
                        <div class="item">
                            <img src="/lib/img/groundBlueCorn.JPG" alt="...">
                            <div class="carousel-caption" id="caption">
                                <h2>Ground Blue Corn</h2>
                            </div>
                        </div>
                        <div class="item">
                            <img src="/lib/img/4sunFlowers.JPG" alt="...">
                            <div class="carousel-caption" id="caption">
                                <h2>New Mexico Sun Flowers</h2>
                            </div>
                        </div>
                        <div class="item">
                            <img src="/lib/img/ruinsCDc.JPG" alt="...">
                            <div class="carousel-caption" id="caption">
                                <h2>Canyon De Chelly Chinle, AZ</h2>
                            </div>
                        </div>
                        <div class="item">
                            <img src="/lib/img/stCBell.JPG" alt="...">
                            <div class="carousel-caption" id="caption">
                                <h2>St. Christopher’s Bell Bluff, UT</h2>
                            </div>
                        </div>
                        <div class="item">
                            <img src="/lib/img/windowR.JPG" alt="...">
                            <div class="carousel-caption" id="caption">
                                <h2>Window Rock Monument</h2>
                            </div>
                        </div>
                        <div class="item">
                            <img src="/lib/img/gsmCross2.JPG" alt="...">
                            <div class="carousel-caption" id="caption">
                                <h2>Good Shepherd Mission Cross Ft. Defiance, AZ</h2>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

<!---------End Carousel ----------------------------------------------------------------------------------------------->
<!---------Begin side 6 Buttons --------------------------------------------------------------------------------------->
            <div class="col-sm-4" id="buttons">
                <span style="display: inline-block; width: 100px; vertical-align: top;">
                    <a type="button" href="#bulletin" class="btn btn-default" style="width: 200px; height: 90px;">Bulletin</a>
                    <a type="button" href="bishopsPage.php" class="btn btn-default" style="width: 200px; height: 90px;" target="_blank">Bishop's Page<br>& Calendar</a>
                    <a type="button" href="howToHelp.php" class="btn btn-default" style="width: 200px; height: 90px;" target="_blank">How to Help/<br>Donate</a>
                    <a type="button" href="newsLetterEvents.php" class="btn btn-default" style="width: 200px; height: 90px;" target="_blank">Newsletter/<br>Events</a>
                    <a type="button" href="ecnSeal&Beginning.php" class="btn btn-default" style="width: 200px; height: 90px;" target="_blank">ECN Seal<br>& Beginnings</a>
                    <a type="button" href="http://www.cheiidevshop.com/" class="btn btn-default" style="width: 200px; height: 90px;" target="_blank">Cheii's Web<br> Development</a>
                </span>
            </div>
          
        </div>
    </div>
<!---------End side 6 Buttons ----------------------------------------------------------------------------------------->


<!---------Bulletin Space on Home page--------------------------------------------------------------------------------->
    <div class="container bulletin" id="bulletin">
        <div class="row bulletin">

            <div class="col-xs-4" id="dhead">
                <h2><a class="black" href="utahRegion.php" target="_blank">Utah Region's Latest News</a></h2>
            </div>

            <div class="col-xs-4" id="dhead">
                <h2><a class="black" href="sanJuanRegion.php" target="_blank">S.J. Region's Latest News</a></h2>
            </div>

            <div class="col-xs-4" id="dhead">
                <h2><a class="black" href="southEast.php" target="_blank">S.E. Region's Latest News</a></h2>
            </div>
            
            <div class="col-xs-4">
                <h2>September 10th Combined Service</h2><!--- Input Bulletin Heading here ----------------------------->
                <h3>Rev. Pat Cook will conduct service at 10am </h3><!--- Input Bulletin Med. Text here --------------->
                <h3>Hope to see you there!</h3><!--- Input Bulletin Small Text here ----------------------------------->
            </div>

            <div class="col-xs-4">
                <h2>Coding Boot Camp Re-Scheduled</h2><!--- Input Bulletin Heading here ------------------------------->
                <h3>New Date TBA Contact ECN office for more Info.</h3><!--- Input Bulletin Med. Text here ------------>
                <h2>Navajo Hymnal Study Continuing Sept 21 @6pm</h2><!--- Input Bulletin large Text here -------------->
            </div>

            <div class="col-xs-4">
                <h2>Welcome Our New Assisting Priest</h2><!--- Input Bulletin Heading here ---------------------------->
                <h2>Rev. Richard Mendez</h2><!--- Input Bulletin Med. Text here --------------------------------------->
                <h4>Thanks for all the support!</h4><!--- Input Bulletin Small Text here ------------------------------>
            </div>

        </div>
    </div>
<!---------End Bulletin Space on Home page----------------------------------------------------------------------------->



<!---------List of all churches on Home page--------------------------------------------------------------------------->

<div id="bg"><!-----------Beginning of outer grey container box/ 4 lines of code---------->
    <div id="search-container">
        <div id="search-bg"></div>
        <div id="search">

            <div id="bg"><!-----Beginning of inner grey container box/ 4 lines of code around churches---------->
                <div id="search-container">
                    <div id="search-bg"></div>
                    <div id="search">


                        <div class="row">
                            <div class="col-xs-4">
                                <a href="southEast.php" target="_blank">
                                <h3>South East Region</h3>
                                </a>
                                <h6 span class="state">Arizona Churches</h6></span>
                                <a href="http://www.goodshepmission.org/" target="_blank">
                                <h6>Good Shepherd Mission</h6>
                               </a>
                                <h6>St. Joseph's Church</h6>
                                <h6 span class="state">New Mexico Churches</h6></span>
                                <h6>St. Mark's Church</h6>
                            </div>
                            <div class="col-xs-4">
                                <a href="sanJuanRegion.php" target="_blank">
                                <h3>San Juan Region</h3>
                                </a>
                                <h6 span class="state">New Mexico Churches</h6></span>
                                <h6>All Saints Church</h6>
                                <h6>St. Michael's Church</h6>
                                <h6>St. Luke's In the Desert</h6>
                            </div>
                            <div class="col-xs-4">
                                <a href="utahRegion.php" target="_blank">
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
            </div><!-----------End of inner grey container box/ 4 lines of code around churches---------->

<!---------End list of all churches on Home page----------------------------------------------------------------------->


    <div id="search-container"><!-----------Beginning of grey container box/ 4 lines of code---------->
        <div id="search-bg"></div>
        <div id="search">
            <div class="row">

<!---------Hogan section on Home page---------------------------------------------------------------------------------->
                <div class="col-lg-4">
                    <div class="thumbnail">
                        <img src="/lib/img/slide3.jpg">
                    </div>
                    <div class="thumbnail">
                        <img src="/lib/img/gsmhoganproject.jpg">
                    </div>
                    <div id="button-blue">
                        <a class="btn btn-info btn-lg" href="https://www.razoo.com/story/Build-A-Hogan?referral_code=share" role="button" target="_blank">Help Build a Hogan Here!</a>
                    </div>
                </div>
                <div class="col-lg-8" id="text">
                    <h3>The Hogan Project</h3>
                    Rebuilding the spiritual and physical homes.
                    A Spiritual Place: Navajo spirituality recognizes a sacred web of life which encompasses all living
                    things. Navajo ceremonies are designed to restore this harmony with all of creation to those who
                    are ill or hurting in any way. These ceremonies take place in hogans. <br>
                    <br>
                    A Place Home: The hogan is also the traditional Navajo home. Its shape reflects the universe.
                    The one door opens to the East, to greet the dawn. All inside activities move in a clockwise fashion,
                    following the sun’s path. The domed roof is the sky, the floor is the earth, and the smoke hole is a
                    window to the North Star. Literally translated, hogan means “place home”, and the Navajo take their
                    identity from it. <br>
                    <br>
                    The Project: Through harsh weather, neglect, and decaying materials, many of the hogans on the
                    Reservation have fallen into ruin. The Episcopal Church in Navajoland has begun a campaign to
                    build new hogans, for ceremonial, educational, and spiritual purposes. There will be two hogans
                    in each state the Reservation touches: Arizona, New Mexico, and Utah. <br>
                    <br>
                    A hogan is built of wood, usually cedar or ponderosa or pinion pine. Today, there is often a steel
                    infrastructure, providing resistance to the strenuous winds which sweep through the Reservation.
                    Today’s hogans are often built on a concrete slab for durability. <br>
                    <br>
                    The Financials’: The cost of a hogan varies greatly depending on its location. Proximity to
                    electricity and water, availability of materials and labor, and accessibility for the delivery
                    of them are some of the factors which contribute to variable cost. Thus, we estimate that each 800
                    square foot hogan will cost approximately $40,000 to construct. <br>
                    <br>
                    The Follow-up: As the hogans are funded, watch the building progress on our website,
                    www.ecnavajoland.com. We’ll have pictures and updates that show you how your generosity empowers as
                    it preserves the beauty of Navajo culture. <br>
                </div>
            </div>
        </div>
    </div>
<!---------End Hogan section on Home page------------------------------------------------------------------------------>

<!---------logo links on Home page------------------------------------------------------------------------------------->
    <div class="row">
        <div class="row">
            <div class="col-xs-6">
                <div id="shimaLink" class="thumbnail">
                    <a href="https://shima-of-navajoland.myshopify.com/" target="_blank">
                        <img src="/lib/img/shima.jpg">
                    </a>
                </div>
            </div>
            <div class="col-xs-6">
                <div id="cheiiLink" class="thumbnail">
                    <a href="http://www.cheiidevshop.com/" target="_blank">
                        <img src="/lib/img/cheiidevshoplogo.png">
                    </a>
                </div>
            </div>
        </div>
    </div>
<!---------End logo links on Home page--------------------------------------------------------------------------------->
        </div>
    </div>
</div><!-----------End of outer grey container box/ 4 lines of code around churches---------->


<!---------Footer/sticky links----------------------------------------------------------------------------------------->
    <ol class="breadcrumb text-center">
        <li><a href="index.php">Home</a></li>
        <li><a href="areaMissContact.php">Area Mission Contact</a></li>
        <li><a href="calendarNew.php">Calendar</a></li>
        <li><a href="findaChurch.php">Find A Church</a></li>
        <li><a href="missionsRetreats.php">Missions/Retreats</a></li>
        <li class="active"></li>
    </ol>
</body>

</html>