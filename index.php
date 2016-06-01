<!DOCTYPE html>
<html>
<head>
    <?php require_once("lib/head-utils.php"); ?>
    <?php require_once("navbar.php");?>
    <!-- Custom styles for this template -->
    <link href="/lib/css/style.css" rel="stylesheet">
    <title>Home</title>


    <div class="container">
        <div id="carousel1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                    <img alt="Bootstrap template" src="/lib/img/10401084_935079563233241_7047644908115160838_n.jpg">
                    <div class="carousel-caption">
                        <h3>The Episcopal Church In Navajoland</h3>
                        <p>
                            Founded in 1892 and headquartered in Farmington, NM.
                            The church offers products and services ranging from Sunday Church Services, AA support,
                            Youth Programs, Childrens Studies, Gardning, Soap Making, and a Coffee Shop, among many
                            other diverse programs.
                        </p>
                    </div>
                </div>
                <div class="item">
                    <img alt="Bootstrap template" src="/lib/img/11903778_872737166134148_3078661740004298294_n.jpg">
                </div>
                <div class="item">
                    <img alt="Bootstrap template" src="/lib/img/002+(1).jpg">
                </div>
                <div class="item">
                    <img alt="Bootstrap template" src="/lib/img/1456655_1105340086195414_3378077242672285178_n.jpg">
                </div>
                <div class="item">
                    <img alt="Bootstrap template" src="/lib/img/10259782_1148618831867539_4383832577896521434_n.jpg">
                </div>
            </div>

        </div>
    </div>

    <link rel="stylesheet" type="text/css" href="/Content/font-awesome/css/font-awesome.min.css" />


    <script type="text/javascript">
        jQuery(function ($) {
            $('#carousel1')({
                interval: 2000
            });

            var clickEvent = false;

            $('#carousel1').on('click', '.nav a', function () {
                clickEvent = true;
                $('.nav li').removeClass('active');
                $(this).parent().addClass('active');
            }).on('slid.bs.carousel', function (e) {
                if (!clickEvent) {
                    var count = $('.nav').children().length - 1;
                    var current = $('.nav li.active');
                    current.removeClass('active').next().addClass('active');
                    var id = parseInt(current.data('slide-to'));
                    if (count == id) {
                        $('.nav li').first().addClass('active');
                    }
                }
                clickEvent = false;
            });
        });
    </script>


</head>
<body>



<div class="hero-unit" id="ecnMain">
    <h1>Ya'at'eeh! Hello and Welcome to the Episcopal Church In Navajoland!</h1>
</div>

    <div id="bg">
        <div id="search-container">
            <div id="search-bg"></div>
            <div id="search">

                <h1>The Hogan Project</h1>
                <h3>A Spiritual Place: Navajo spirituality recognizes a sacred web of life <br>
                which encompasses all living things. And Navajo ceremonies are designed to <br>
                restore this harmony with all of creation to those who are ill or hurting in <br>
                any way. These ceremonies take place in hogans.</h3>
            </div>
        </div>
    </div>


<div id="bg">
    <div id="search-container">
        <div id="search-bg"></div>
        <div id="search">

        </div>
    </div>
</div>


<ol class="breadcrumb">
    <li><a href="index.php">Home</a></li>
    <li><a href="contact.php">Contact</a></li>
    <li><a href="currentEvents.php">NewsLetter</a></li>
    <li><a href="governance.php">Calendar</a></li>
    <li><a href="support.php">Ministries</a></li>
    <li class="active">Data</li>
</ol>
</body>

</html>