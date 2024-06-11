<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>services</title>
    <style>
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 20px 100px;
            background: rgb(8, 71, 71);
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 99;
        }

        .navigation a {
            position: relative;
            font-size: 1.1em;
            color: #fff;
            text-decoration: none;
            font-weight: 500;
            margin-left: 40px;
        }

        .navigation a::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -6px;
            width: 100%;
            height: 3px;
            background:#fff;
            border-radius: 5px;
            transform-origin:right ;
            transform: scaleX(0);
            transition: transform .5s;
        }

        .navigation a:hover:after  {
            transform-origin: left;
            transform: scaleX(1);
        }

        .header {
            margin: 0;
            padding: 0;
            text-align: center;
            background-color: #01bdd4;
            font-size: 20px;
            font-family: 'Times New Roman', Times, serif;
        }
        .header .img {
            border-radius: 6px;
        }

        body {
            background-image: url(images/vision.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }

    </style>
</head>
<body>
    <div class="container">
		<header>
			<a class="navbar-brand" href="#">
				<img src="images/logo.png" alt="Logo" style="width:70px;" height="50px" class="rounded-pill">
			  </a>
			<nav class="navigation">
				<a href="index.php">Home</a>
				<a href="about.php">About Us</a>
				<a href="services.php">Services</a>
				<a href="contactus.php">Contact</a>
				</nav>
		</header>
	</div>
    <div class="header">
        <img src="images/logo.png" class="small-profile.jpeg" height="60px" width="90px" alt="BHEL,BHOPAL">
        <h1>BHARAT HEAVY ELECTRICALS LIMITED, BHOPAL<h1>
        <h5>Powering Process, Brightening Lives Touching Every Indian Home <h5>
      </div>
    <div class="field field--name-body field--type-text-with-summary field--label-hidden field-item">
        <h2 align="center">Product and Services</h2>
        <p>BHEL is one of the largest engineering and manufacturing companies of its kind in India engaged in design, engineering, construction,
             testing, commissioning and servicing of a wide range of products and services with over 180 product offerings to meet
              the ever-growing needs of the core sectors of economy.</p>
        <section id="services">
            <div class="section-header">
                <div class="row">
                    <div class="col-lg-3 spr">
                        <div class="box boxfirst wow fadeInLeft">
                            <div class="icon home-first">
                            <a href="PDF/Power.pdf" class="local">
                            <img src="images/home-first.png" title="Power" alt="Image of Power" class="home-first">
                            <img src="images/home-first-blue.png" title="Power" alt="Image of Power" class="home-first-blue">
                            </a>
                            </div>
                            <h4 class="title"><a href="PDF/Power.pdf" class="local">POWER</a></h4>
                        </div>
                    </div>
                    <div class="col-lg-3 spr">
                        <div class="box  boxsecond wow fadeInRight">
                            <div class="icon">
                            <a href="PDF/Transmission.pdf" class="local">
                            <img src="images/home-second.png" title="transmission" alt="Image of transmission" class="home-second">
                            <img src="images/home-second-blue.png" title="transmission" alt="Image of transmission" class="home-second-blue">
                            </a></div>
                            <h4 class="title"><a href="PDF/Transmission.pdf" class="local">TRANSMISSION</a></h4>
                        </div>
                    </div>
                    <div class="col-lg-3 spr">
                        <div class="box  boxthird wow fadeInLeft" data-wow-delay="0.2s">
                            <div class="icon">
                            <a href="PDF/R&D.pdf" class="local">
                            <img src="images/home-third.png" title="R &amp; D STRENGTH &amp; INNOVATION CAPABILITIES" alt="Image
                            of R &amp; D STRENGTH &amp; INNOVATION CAPABILITIES" class="home-third">
                            <img src="images/home-third-blue.png" title="R &amp; D STRENGTH &amp; INNOVATION CAPABILITIES" alt="Image
                            of R &amp; D STRENGTH &amp; INNOVATION CAPABILITIES" class="home-third-blue">
                            </a></div>
                            <h4 class="title"><a href="PDF/R&D.pdf" class="local">R &amp; D STRENGTH &amp; INNOVATION CAPABILITIES</a></h4>
                        </div>
                    </div>
                    <div class="col-lg-3 spr">
                        <div class="box boxfour wow fadeInRight" data-wow-delay="0.2s">
                            <div class="icon">
                            <a href="PDF/renewables.pdf" class="local">
                            <img src="images/home-four.png" title="renewables" alt="Image of renewables" class="home-four">
                            <img src="images/home-four-blue.png" title="renewables" alt="Image of renewables" class="home-four-blue">
                            </a></div>
                            <h4 class="title"><a href="PDF/renewables.pdf" class="local">RENEWABLES</a></h4>
                        </div>
                    </div>
                    <div class="col-lg-3 spr">
                        <div class="box boxfive wow fadeInLeft">
                            <div class="icon">
                            <a href="PDF/Railway  Revised.pdf" class="local">
                            <img src="images/home-five.png" title="transportation" alt="Image of transportation" class="home-five">
                            <img src="images/home-five-blue.png" title="transportation" alt="Image of transportation" class="home-five-blue">
                            </a></div>
                            <h4 class="title"><a href="PDF/Railway  Revised.pdf" class="local">TRANSPORTATION</a></h4>
                        </div>
                    </div>
                    <div class="col-lg-3 spr">
                        <div class="box boxsix wow fadeInRight">
                            <div class="icon">
                            <a href="PDF/Water.pdf" class="local">
                            <img src="images/home-six.png" title="water" alt="Image of water" class="home-six">
                            <img src="images/home-six-blue.png" title="water" alt="Image of water" class="home-six-blue">
                            </a></div>
                            <h4 class="title"><a href="PDF/Water.pdf" class="local">WATER</a></h4>
                        </div>
                    </div>
                    <div class="col-lg-3 spr">
                        <div class="box boxseven wow fadeInLeft" data-wow-delay="0.2s">
                            <div class="icon">
                            <a href="PDF/product profile.pdf" class="local">
                            <img src="images/home-seven.png" title="complete product list" alt="Image of product list" class="home-seven">
                            <img src="images/home-seven-blue.png" title="complete product list" alt="Image of product list"
                            class="home-seven-blue">
                            </a></div>
                            <h4 class="title"><a href="PDF/product profile.pdf" class="local">COMPLETE <br> PRODUCT LIST</a></h4>
                        </div>
                    </div>
                    <div class="col-lg-3 spr">
                        <div class="box boxeight wow fadeInRight" data-wow-delay="0.2s">
                            <div class="icon">
                            <a href="PDF/CAPABILITIES_and_FACILITIES.pdf" class="local">
                            <img src="images/home-eight.png" title="facilities" alt="Image of facilities" class="home-eight">
                            <img src="images/home-eight-blue.png" title="facilities" alt="Image of facilities" class="home-eight-blue">
                            </a></div>
                            <h4 class="title"><a href="PDF/CAPABILITIES_and_FACILITIES.pdf" class="local"> CAPABILITIES <br> &amp; FACILITIES</a></h4>
                        </div>
                    </div>

                    <div class="col-lg-3 spr">
                        <div class="box boxnine wow fadeInRight" data-wow-delay="0.2s">
                            <div class="icon">
            <a href="PDF/defence.pdf" class="local">
            <img src="images/defence-aerospace-icon-white_v2.png" title="Defence and aerospace" alt="Image of Defence and
            aerospace" class="home-nine">
            <img src="images/defence-and-aerospace-icon-blue.png" title="Defence and aerospace" alt="Image of Defence and
            aerospace" class="home-nine-blue">
                            </a></div>
                            <h4 class="title"><a href="PDF/defence.pdf" class="local"> Defence and aerospace </a></h4>
                        </div>
                    </div>
                </div>

            </div>
        </section></div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl
        +NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
