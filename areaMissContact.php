<!DOCTYPE html>
<html>
<head>
    <?php require_once("lib/head-utils.php"); ?>
    <?php require_once("indexNavBar.php");?>
    <title>Area Mission Office Contact</title>
    <!-- Custom styles for this template -->


</head>
<body>
<style>
    body {
        background-image: url("/lib/img/clergybackg.JPG");
        background-repeat: no-repeat;
        background-size: cover;
    }
    .logoImage {
        width: 200px;
        height: 125px;
        padding-left: 50px;
        padding-top: 75px;
    }

    .rotate90 {
        -webkit-transform: rotate(360deg);
        -moz-transform: rotate(360deg);
        -o-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        transform: rotate(360deg);
    }
    
    .pictures img {
        alignment: center;
    }

    .thumbnail img {
        border: solid;
        width: 300px;
        height: 200px;
        background-color: #666666;
        border-color: #666666;
        color: #666666;
    }
    #clergy {
        border: solid;
        width: 200px;
        height: 155px;
        background-color: #666666;
        border-color: #666666;
        color: #666666;
    }
    #clergy img {
        width: 200px;
        height: 146px;
        text-align: center;
    }
    .thumbnail li {
        text-align: center;
    }
    
    body{
        background-color: darkturquoise;
        text-align: center;
    }

    .container {
        padding-right: 10px;
        padding-bottom: -50px;
    }
    
    header {
        padding-bottom: 40px;
        padding-top: 25px;
    }

    .btn-lg {
        font-size: 18px;
        line-height: 1.3333333;
        border-radius: 6px;
        width: 150px;
        padding-bottom: -100px;
    }

    #questions {
        color: darkturquoise;
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

    <div class="logoImage">
        <img src="/lib/img/episcopalchurchinnavajolandlogo_480.png" class="img-responsive" alt="Awesome.jpg">
    </div>
    <div class="container">
        <div class="row">
            <div class="firstline">
                <a class="btn btn-primary btn-lg center-block" href="#contact" role="button">
                    <span class="text-big">Contact Us</span>
                </a>

            </div>
        </div>
    </div>



    <div id="bg">
        <div id="search-container">
            <div id="search-bg"></div>
            <div id="search">

            <h1>The Episcopal Church in Navajoland Missioners</h1>


                <div id="bg">
                    <div id="search-container">
                        <div id="search-bg"></div>
                        <div id="search">

                            <div class="row">

                                <div class="col-lg-8" id="text">
                                    <h3>Rt. Rev. David E. Bailey</h3>
                                    I was the rector of St. Stephens Parish in Phoenix, AZ when I became involved with the Episcopal Church in Navajoland. During that time I met people of Navajoland in my position in Coalition 14. I also developed a retreat center in the Phoenix area that held 60 beds. When Families from Navajoland would come into town for advanced medical treatment, they often were in need of a place to stay where they can sleep and cook. They were offered the retreat center free of charge if there were no retreats booked.
                                    Then in 1994, the Presiding Bishop appointed me as part-time administrative mentor for Bishop Steven Plummer. I would work with Bishop Plummer for 5-6 weeks a year.
                                    In my youth, i loved to down hill ski. My other hobbies are reading, golf, hiking and participating in 5ks.
                                    I am really honored to be serving in Navajoland. I am excited about what we have accomplished and equally excited about our future.
                                </div>
                                <div class="col-lg-4">
                                    <div class="thumbnail" id="clergy">

                                        <img src="/lib/img/dave.JPG">
                                    </div>
                                    <p>
                                        E-Mail: ecndbailey@gmail.com<br>
                                        Phone: (505) 327-7549
                                    </p>
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
                                <div class="col-lg-4">
                                    <div class="thumbnail" id="clergy">
                                        <img src="/lib/img/chan.JPG">
                                    </div>
                                    <p>
                                        E-Mail: ecncanaya@gmail.com<br>
                                        Phone: (505) 327-7549
                                    </p>
                                </div>
                                <div class="col-lg-8" id="text">
                                    <h3> Cannon Missioner for Justice and Spiritual Development for the Bishops Office
                                        Rev. Chan Osborn de Anaya</h3>
                                    Before becoming a Priest, I was an ICU-CCU Nurse and a Real Estate Broker.
                                    I graduated from the Seminary of the Southwest in 2000 and was at a Pittsburgh Mississippi Civil War
                                    Church involved in reconciliation. I came to ECN in 2010 and was 5 years at Good Shepherd Mission as
                                    Regional Ministry Developer and am currently in the Bishops Office doing oversight, troubleshooting
                                    and developing in Environmental Justice issues. I have a husband and 2 grown children.
                                    Kayaking and gardening in my back yard are my hobbies.
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
                                <div class="col-lg-4">
                                    <div class="thumbnail" id="clergy">
                                        <img src="/lib/img/cat.jpg">
                                    </div>
                                    <p>
                                        E-Mail: ecncplummer@gmail.com<br>
                                        Phone: (505) 327-7549
                                    </p>
                                </div>
                                <div class="col-lg-8" id="text">
                                    <h3>Rev. Cathlena Plummer</h3>
                                    I went to the Church Divinity School of the Pacific at Berkley, California for my Master of Divinity degree.  My title is the Reverend Canon of Communications.  I keep everyone informed of meetings and schedules, and just maintain the flow of communication from the ECN office in Farmington, NM.  I am also the priest in charge for All Saints, I take care of the Farmington community and continue to provide pastoral care.
                                    Right now, my hobbies includes watching movies about history and gardening on my spare time.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="bg">
                    <div id="search-container">
                        <div id="search-bg"></div>
                        <div id="search">

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="thumbnail" id="clergy">

                                        <img src="/lib/img/halana.jpg">
                                    </div>
                                    <p>
                                        E-Mail: ecnbegay@gmail.com <br>
                                        Message Phone:(505)-327-7549
                                    </p>
                                </div>
                                <div class="col-lg-8" id="text">
                                    <h3>Bookkeeper for the main ECN office, Halena Begay</h3>
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
                                <div class="col-lg-4">
                                    <div class="thumbnail" id="clergy">

                                        <img src="/lib/img/elliot.jpg">
                                    </div>
                                    <p>
                                        Message Phone:(505)-327-7549
                                    </p>
                                </div>
                                <div class="col-lg-8" id="text">
                                    <h3>Maintenance Staff, Elliot Mason</h3>
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
                                <div class="col-lg-4">
                                    <div class="thumbnail" id="clergy">

                                        <img src="/lib/img/floyd.jpg">
                                    </div>
                                    <p>
                                        Message Phone:(505)-327-7549
                                    </p>
                                </div>
                                <div class="col-lg-8" id="text">
                                    <h3>Maintenance Staff, Floyd Dawes</h3>
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
                                <div class="col-lg-4">
                                    <div class="thumbnail" id="clergy">

                                        <img src="/lib/img/pat.JPG">
                                    </div>
                                    <p>
                                        E-Mail: cookandbond@msn.com <br>
                                        Message Phone:(435)-672-2206
                                    </p>
                                </div>
                                <div class="col-lg-8" id="text">
                                    <h3>Rev. Pat Cook</h3>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lobortis eget justo et posuere. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam laoreet quam vitae mollis dictum. Vestibulum finibus id metus sit amet interdum. Proin at efficitur est. Morbi enim risus, ornare quis turpis nec, iaculis lobortis nisl. Ut condimentum enim sagittis sem auctor sodales efficitur vel neque.
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

                                <div class="col-lg-8" id="text">
                                    <h3>Rev. Cornelia Eaton</h3>
                                    Rev. Canon Cornelia Eaton, seminarian at Virginia Theological Seminary, Alexandria, VA served many roles in the Episcopal Church as laity before being ordained to the priesthood on February 7, 2015. She is currently the canon to the ordinary.

                                    Cornelia is dedicated to serving the beloved people of God and to encourage laity to have active roles in the life of the Church, believing that we all live into our baptismal covenant. She enjoys sharing God’s love, hope and grace with all of God’s people through Holy Scripture and Navajo spirituality of Hozhó—Peace and Beauty Way. She is a storyteller and a writer of poetry with a particular focus on the Navajo way of life known as Iina Biké Hozhó–being in harmony with divine creation through spirituality, culture, tradition and relationship. She has deep love and appreciation for the outdoors and enjoys mountain biking, fly-fishing, camping, hiking, and tending to her family sheep camp.

                                </div>
                                <div class="col-lg-4">
                                    <div class="thumbnail" id="clergy">

                                        <img src="/lib/img/cornelia.JPG">
                                    </div>
                                    <p>
                                        Contact ECN Office<br>
                                        Phone: (505) 327-7549
                                    </p>
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
                                <div class="col-lg-4">
                                    <div class="thumbnail" id="clergy">
                                        <img src="/lib/img/lillie.JPG" class="rotate90">
                                    </div>
                                    <p>
                                        E-Mail: teabimasaani@yahoo.com<br>
                                        Phone: (435) 651-3225
                                    </p>
                                </div>
                                <div class="col-lg-8" id="text">
                                    <h3>Lay Pastor of St. Johns the Baptizer Lillie Henderson</h3>
                                    I have been at St Johns for 19 years. I was exposed to the Episcopal Church by attending  St. Christopher's Mission and St. Marys of the Moonlight as a child with my grandmother. I use to pass by St. Johns as I go through to Blanding, Utah and think it looked deserted. I eventually quit my job and Steven Plummer hired me to work at St. Johns. I like to work with the children of St. Johns. The congregation is small, everyone primarily speaks Navajo, so I read the gospel in Navajo and conduct service in Navajo.
                                    At st johns we have really bad water, so i come to St. Christopher's to haul water. We are in need of water right now.
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

                                <div class="col-lg-8" id="text">
                                    <h3>Rev. Deacon Paula Henson</h3>
                                    I have been part of the church of many many years. I was baptized here in 1959 at Good Shepherd Mission and now I am a parish administrator her at GSM.  I attended the Deacons Formation Academy in 2010. I attended the academy for over a year to become a Deacon. I was Ordained as Deacon in 2011, and started working in 2011. I serve St. Josephs Church in Many Farms, Arizona on the second Sunday of every month since 2011. My job here at GSM is mostly administration work and make sure the church is ready for services of many kinds. I also lead morning prayer Tuesday thru Friday and am available every Sunday for services. I also assist with hospitality work.
                                    In order for  to keep myself in balance and in harmony, i do various arts and crafts with yarn. Some things i make are kleenex boxes, crosses.
                                </div>
                                <div class="col-lg-4">
                                    <div class="thumbnail" id="clergy">

                                        <img src="/lib/img/Paula.PNG">
                                    </div>
                                    <p>
                                        E-Mail: officegoodshepherdmission@gmail.com<br>
                                        Phone: (928) 729-2322
                                    </p>
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
                                <div class="col-lg-4">
                                    <div class="thumbnail" id="clergy">

                                        <img src="/lib/img/cynthia.jpg">
                                    </div>
                                    <p>
                                        E-Mail:  vicargoodshepherdmission@gmail.com<br>
                                        Phone: (928)729-2322
                                    </p>
                                </div>
                                <div class="col-lg-8" id="text">
                                    <h3>Vicar and Priest in Charge of the Southeast Region Cynthia Hizer</h3>
                                    I was ordained in 2006, took my M.Div. at Candler School of Theology Emory University in Atlanta and went on to Advance Studies at the General Seminary in New York City.
                                    I was an organic farmer for 25 years, and a food writer. So now I'm a Vicar and Priest and I'm writing food and farming. I was also a soap maker, I had a cottage industry business of soap making. So i am using those skills also for the good of ECN. In my spare time i love to hike.

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

                                <div class="col-lg-8" id="text">
                                    <h3>Rev. Cathrine Plummer</h3>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lobortis eget justo et posuere. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam laoreet quam vitae mollis dictum. Vestibulum finibus id metus sit amet interdum. Proin at efficitur est. Morbi enim risus, ornare quis turpis nec, iaculis lobortis nisl. Ut condimentum enim sagittis sem auctor sodales efficitur vel neque.
                                </div>
                                <div class="col-lg-4">
                                    <div class="thumbnail" id="clergy">
                                        <img src="/lib/img/catsmom.JPG">
                                    </div>
                                    <p>
                                        St. Mary's Office<br>
                                        Phone: (435) 727-0200
                                    </p>
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

                                <div class="col-lg-8" id="text">
                                    <h3>Rev. Deacon Leon Sampson</h3>
                                    I was raised here on St. Christopher's grounds. I sat here in the same pews as a child and live in the same house I grew up in.  I'm allowing my family to be here to  experience the exact same thing I went through as a kid, Its important to understand that my parents had the same life cycle as I have here now, and my kids will also enjoy the same benefits of being here. I was raised here, grew up here and have a passion for being here. My mission is to give back to the youth. Get them involved in the church, so they can remember their experiences and come back later.
                                    I will go off to Virginia for seminary in august, and will be able to come back in 3 years as a priest and continue to serve the people as a priest and help develop more of the projects.
                                </div>
                                <div class="col-lg-4">
                                    <div class="thumbnail" id="clergy">

                                        <img src="/lib/img/leon.JPG">
                                    </div>
                                    <p>
                                        E-Mail: sampsonl74@yahoo.com<br>
                                        Phone:  (435)-444-0485
                                    </p>
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
                                <div class="col-lg-4">
                                    <div class="thumbnail" id="clergy">

                                        <img src="/lib/img/carol.png">
                                    </div>
                                    <p>
                                        Contact ECN Office<br>
                                        Phone: (505) 327-7549
                                    </p>
                                </div>
                                <div class="col-lg-8" id="text">
                                    <h3>Rev. Carol Tookey</h3>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lobortis eget justo et posuere. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam laoreet quam vitae mollis dictum. Vestibulum finibus id metus sit amet interdum. Proin at efficitur est. Morbi enim risus, ornare quis turpis nec, iaculis lobortis nisl. Ut condimentum enim sagittis sem auctor sodales efficitur vel neque.
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

                                <div class="col-lg-8" id="text">
                                    <h3>Rev. Inez Velarde</h3>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lobortis eget justo et posuere. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam laoreet quam vitae mollis dictum. Vestibulum finibus id metus sit amet interdum. Proin at efficitur est. Morbi enim risus, ornare quis turpis nec, iaculis lobortis nisl. Ut condimentum enim sagittis sem auctor sodales efficitur vel neque.
                                </div>
                                <div class="col-lg-4">
                                    <div class="thumbnail" id="clergy">

                                        <img src="/lib/img/inez.PNG">
                                    </div>
                                    <p>
                                        Contact ECN Office<br>
                                        Phone: (505) 327-7549
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </div>


<!-- Contact -->
<section id="contact" class="four">
    <div class="contact1">
        <div class="container">

        <header>
            <h1 id="questions">Have any questions?</h1>
        </header>

        <form method="post" action="areaMissContact.php" class="col-md-6 col-md-offset-3" id="contactForm" name="contactForm">
            <div class="form-group">
                <label for="email" id="questions">Email address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="message" id="questions">Message</label>
                <textarea class="form-control" id="message" name="message" rows="3" placeholder="Message"></textarea>
            </div>
            <button class="btn btn-success" id="submit" name="submit" type="submit">Send</button>
            <div class="form-group">
            </div>
        </form>
        </div>

    </div>
</section>
    <div class="addressinfo" id="questions">
    <p>Episcopal Church in Navajoland P.O. Box 720 Farmington, NM 87499 Phone: (505) 327-7549 — Main</p>
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