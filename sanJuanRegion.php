<!DOCTYPE html>
<html>
<head>
    <?php require_once("lib/head-utils.php"); ?>
    <?php require_once("indexNavBar.php");?>
    <!-- Custom styles for this template -->
    <link href="lib/css/styleSanJuan.css" rel="stylesheet">
    <title>San Juan Region</title>
</head>

<body>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="/lib/img/allsaint.jpg" alt="...">
            <div class="carousel-caption">
                <div class="container col-md-7" id="test">
                    <h1>San Juan Region </h1>
                    <p>New Mexico Churches</p>
                    <a href="#learn-more" role="button" class="btn btn-info btn-large">Learn more</a>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="/lib/img/stMichaels1.jpg" alt="...">
            <div class="carousel-caption">
                ...
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

<div class="text-center" id="title">
    <h1>Welcome to the San Juan Region</h1>
</div>

<div class="text-center" id="info">
    <p>New Mexico Churches</p>
</div>

<div class="row" id="learn-more">

    <div class="col-lg-4">
        <h3>St. Michael's Church </h3>
        <h6>Upper Fruitland</h6>
        <h6>P.O. Box 720</h6>
        <h6>Farmington, NM 87401</h6>
        <a href="http://www.facebook.com"> <i class="fa fa-facebook-official fa-2x"></i></a>

        <dl>
            <dt>Rev. Chan Anaya</dt>
            <dd>Office No. (505) 327-0326</dd>
            <dd>Email: ecncanaya@gmail.com</dd>
            <dd>Priest in Charge St. Michael's Canon Missioner</dd>
        </dl>

    </div>


    <div class="col-lg-4">
        <h3>All Saints Church </h3>
            <h6>1271 Mission Ave</h6>
            <h6>P.O. Box 720</h6>
            <h6>Phone:(505) 327-0326</h6>
            <h6>Farmington, NM 87401</h6>

        <a href="http://www.facebook.com"> <i class="fa fa-facebook-official fa-2x"></i></a>

        <dl>
            <dt>Rev. Cathlena Plummer</dt>
            <dd>Office No. (505) 327-7549 </dd>
            <dd>Email: ecncplummer@gmail.com</dd>
            <dd>Priest In Charge All Saints Canon for Communications</dd>
            <br>
            <dt>Helena Begay</dt>
            <dd>Cell No. 505-860-2987</dd>
            <dd>Email: ecnhbegay@gmail.com</dd>
            <dd>Bookkeeper for ECN </dd>
            <br>
        </dl>
    </div>





    <div class="col-lg-4">
        <h3>St. Lukes In The Desert</h3>
        <h6>Carson, New Mexico</h6>
        <h6>P.O. Box 720</h6>
        <h6>Farmington, NM 87401</h6>
        <a href="http://www.facebook.com"> <i class="fa fa-facebook-official fa-2x"></i></a>

        <dl>
            <dt>Rev. Inez Velarde</dt>
            <dd>Cell No. (505) 635-9026</dd>
            <dd>Priest In Charge at St. Luke's</dd>
        </dl>

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