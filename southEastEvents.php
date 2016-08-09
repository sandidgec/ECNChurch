<!DOCTYPE html>
<html>
<head>
    <?php require_once("lib/head-utils.php"); ?>
    <title></title>
    <!-- Custom styles for this template -->

    <link href="lib/css/styleCService.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Quattrocento' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald:700' rel='stylesheet' type='text/css'>
</head>

<body>

<style>
    img {
        border: solid;
        width: 200px;
        height: 125px;
        background-color: #666666;
        border-color: #666666;
        color: #666666;
    }
    body {
        text-align: center;
    }
    .thumbnail li {
        text-align: center;
    }
    #bg {
        background-position: center top;
        padding: 20px 90px 20px 90px;
    }

    #search-container {
        position: relative;
    }


    #search-bg {
        /* Absolutely position it, but stretch it to all four corners, then put it just behind #search's z-index */
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 99;

        /* Pull the background 70px higher to the same place as #bg's */
        background-position: center -70px;

        -webkit-filter: blur(10px);
        filter: url('/media/blur.svg#blur');
        filter: blur(10px);
    }

    #search {
        /* Put this on top of the blurred layer */
        position: relative;
        z-index: 100;
        padding: 20px;
        background: rgba(35, 35, 35, 0.50); /* for IE */
        background: rgba(43, 43, 43, 0.50);
        color: white;
    }

    @media (max-width: 600px ) {
        #bg { padding: 10px; }
        #search-bg { background-position: center -10px; }
    }

    #search h2, #search h5, #search h5 a { text-align: center; color: #fefefe; font-weight: normal; }
    #search h2 { margin-bottom: 50px }
    #search h5 { margin-top: 70px }


    * {margin: 0; padding: 0;}
</style>



<div class="container-fluid">
    <div class="jumbotron">
        <h1>Event Discription</h1>
    </div>
</div>

<div id="bg">
    <div id="search-container">
        <div id="search-bg"></div>
        <div id="search">

            <div class="row">
                <div class="col-lg-3">
                    <div>
                        <img src="/lib/img/floyd.jpg">
                    </div>
                    <p>
                        Message Phone:(505)-327-7549
                    </p>
                </div>
                <div class="col-lg-9" id="text">
                    <h2>Morning Prayer</h2>
                    Every Tuesday morning from 9:00 to 10:00 am Good Shepherd Mission has a time of prayer.  All are invited to join for prayer in the sanctuary led by the Vicar, Deacon or staff.
                </div>
            </div>
        </div>
    </div>
</div>


<div id="bg">
    <div id="search-container">
        <div id="search-bg"></div>
        <div id="search">

            <div class="row">
                <div class="col-lg-3">
                    <div>
                        <img src="/lib/img/pat.JPG">
                    </div>
                    <p>
                        E-Mail: cookandbond@msn.com <br>
                        Message Phone:(435)-672-2206
                    </p>
                </div>
                <div class="col-lg-9" id="text">
                    <h2>South East Region Council Meeting</h2>
                    Come and sit in on our monthly Council Meetings held on the second Sunday of every month after church. 
                </div>
            </div>
        </div>
    </div>
</div>




<ol class="breadcrumb">
    <li><a href="index.php">Home</a></li>
    <li><a href="areaMissContact.php">Area Mission Contact</a></li>
    <li><a href="calendarNew.php">Calendar</a></li>
    <li><a href="findaChurch.php">Find A Church</a></li>
    <li><a href="missionsRetreats.php">Missions/Retreats</a></li>
    <li class="active"></li>
</ol>


</body>


</html>
