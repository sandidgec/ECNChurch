<!DOCTYPE html>
<html>
<head>
    <?php require_once("lib/head-utils.php"); ?>
    <?php require_once("navbar.php");?>
    <title>WireFrame For ECN </title>
    <!-- Custom styles for this template -->
    <link href="/lib/css/style.css" rel="stylesheet">
    <style>
        body {background-color: aqua;}
    </style>
</head>
<body>



<div class="jumbotron">
    <div class="container">
        <div class="row">
            <div class="firstline">
                <h2>Contact Us </h2>
            </div>
        </div>
    </div>
</div>
<div class="info">
    <div style="float: right"><img height="300" width="300" src="../lib/img/imginsert.jpg" align="left">  Clergy Name/Info</div>
    <div style="float: right;"><img height="300" width="300" src="../lib/img/imginsert.jpg" align="left">  Clergy Name/Info</div>
    <div style="float: right;"><img height="300" width="300" src="../lib/img/imginsert.jpg" align="left">  Clergy Name/Info</div>
    <div style="float: right;"><img height="300" width="300" src="../lib/img/imginsert.jpg" align="left">  Clergy Name/Info</div>

</div>
<!-- Contact -->
<section id="contact" class="four">
    <div class="container">

        <header>
            <h2>Contact</h2>
        </header>

        <p>Have any questions?</p>

        <form method="post" action="../contact/" class="col-md-6 col-md-offset-3" id="contactForm" name="contactForm">
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" name="message" rows="3" placeholder="Message"></textarea>
            </div>
            <button class="btn btn-success" id="submit" name="submit" type="submit">Send</button>
            <div class="form-group">
            </div>
        </form>

    </div>
</section>

</body>

</html>