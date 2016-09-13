<!DOCTYPE html>
<html>
<head>
    <?php require_once("lib/head-utils.php"); ?>
    <?php require_once("indexNavBar.php");?>
    <title>Calendar</title>
    <!-- Custom styles for this template -->
    <link href="/lib/css/styleBp.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pontano+Sans" rel="stylesheet">

    <style>
        body{
            font-family: 'Dosis', sans-serif;
            text-align: center;
            background-image: url("/lib/img/gsmoldcross.jpg");
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }
        .container {
            padding-bottom: 20px;
        }
        .bulletin .row {
            text-align: left;
            background: rgba(43, 43, 43, 0.76);
            color: white;
            font-family: 'Pontano Sans', sans-serif;
            border-radius: 25px;
            border: 2px solid #232323;
            padding: 20px;
        }
        #hth {
            background-color: teal;
            text-align: center;
            color: white;
            margin-top: 0;
            border-radius: 20px;
            border: 1px solid #232323;
            font-size: xx-large;
            font-weight: bold;
            font-family: 'Oswald', sans-serif;
        }
        #button-blue {
            text-align: center;
            border-color: transparent;
            width: 100px;
            height: 50px;
        }
        .breadcrumb {
            text-align: center;
            float: bottom;
        }
    </style>
</head>
<title>How to Help</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<body>
<header>

</header>

<div class="container">
    <div class="container bulletin" id="bulletin">
        <div class="row bulletin">

            <div class="col-lg-4" id="hth">
                <h2>Send to: </h2>
            </div>

            <div class="col-lg-8" id="hth">
                <h2>What's Needed:</h2>
            </div>

            <div class="col-lg-4">
                <h4>Checks should be made out to:
                    <br>
                    The Episcopal Church in Navajoland
                    <br>
                    <br>
                    & Mailed to:<br>
                    The Episcopal Church in Navajoland
                    <br>
                    <br>
                    P.O. Box 720
                    Farmington, NM
                    87499
                    <br>
                    <br>
                    Phone: (505) 327-7549
                    <br>
                    <br>
                    Click here to make an online donation now
                </h4>
                <div id="button-blue">
                    <a class="btn btn-success btn-lg" href="https://episcopalchurch.thankyou4caring.org/navajoland-our-american-heritage" role="button">Help Support Us Here!</a>
                </div>
            </div>


            <div class="col-lg-8">
                <h4>
                    We are rehabilitating properties for program use and rental income.
                    Rental income will help to pay the salaries of our clergy as well
                    as to support programs in education, healing, after-school, and more.
                    Here are some of the specific items we will purchase with your help:
                    <br>
                    <br>
                    <ul>
                    <li>Paint for rental unit - $330 <br>
                        <li>Fencing, fence posts, hardware - $438 <br>
                        <li>Screen door - $100 <br>
                        <li> Natural gas wall heater - $2350 <br>
                        <li>Water meter - $2600 <br>
                        <li>Pipes from city main to church - $2300 <br>
                        <li>Six electric space heaters - $240 <br>
                        <li>Twelve smoke alarms - $360 <br>
                        <li>Paint for Bishop's office - $200 <br>
                        <li>Flooring - $1684 <br>
                        <li>Evaporative cooler - $1900 <br>
                        <li>Drywall repair - $400 <br>
                        <li>Office hardware and supplies - $868 <br>
                    </ul>
                </h4>
            </div>

        </div>
    </div>
</div>




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