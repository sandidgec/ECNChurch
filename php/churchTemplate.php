<!DOCTYPE html>
<html>
<head>
    <?php require_once("../lib/head-utils.php");?>
    <link rel="short icon" href="lib/images/ecn.ico"/>
    <title>WireFrame For ECN </title>
    <!-- Custom styles for this template -->
    <link href="/lib/css/style.css" rel="stylesheet">
</head>

<body ng-app="recall" ng-controller="recallCtrl">

<?php require_once("navbar.php");?>
<div class="jumbotron">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Ya'ateeh, Welcome to {{churchName}}</h1>
            </div>

        </div>
    </div>

</div>

    <div>
        <img src="../lib/img/elo_96868_traditions_lg_2.jpg">
    </div>
<br> </br>
    <p> Episcopal Church of Navajoland is more than just a place of worship.
    It is a growing, loving family. There are so many great opportunities here to make friends,
    receive ministry and affect people's lives with God's love.
    There is something here for everyone, and we invite you to take a look and see.
    </p>
<br> </br>
    <div>
        <img alt="File:Bulletin Board with notes.svg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/14/Bulletin_Board_with_notes.svg/800px-Bulletin_Board_with_notes.svg.png"
         width="800" height="568" srcset="https://upload.wikimedia.org/wikipedia/commons/thumb/1/14/Bulletin_Board_with_notes.svg/1200px-Bulletin_Board_with_notes.svg.png 1.5x,
         https://upload.wikimedia.org/wikipedia/commons/thumb/1/14/Bulletin_Board_with_notes.svg/1600px-Bulletin_Board_with_notes.svg.png 2x" data-file-width="1050"
         data-file-height="745">
    </div>
<br> </br>
<div class="row">
    <div class="col-md-4">
        <div class="thumbnail">
            <img src="../../lib/img/arizona.jpg"><p>Arizona Churches</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="thumbnail">
            <img src="../../lib/img/newmex.jpg"><p>New Mexico Churches</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="thumbnail">
            <img src="../../lib/img/utah.jpg"><p>Utah Churches</p>
        </div>
    </div>
</div>

<!--Angular Framework-->
<script src = "https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.5/angular.js"></script>
</body>

</html>