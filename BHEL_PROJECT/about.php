<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
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
            font-size: 20px;
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

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url(images/img1.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            color: #333;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1, h2 {
            text-align: center;
        }
        p {
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <header>
        <a class="navbar-brand" href="#">
            <img src="images/logo.png" alt="Logo" style="width:70px;" height="50px" class="rounded-pill">
          </a>
        <nav class="navigation">
            <a href="index.php">Home</a>
            <a href="about.php">About Us</a>
            <a href="services.php">Services</a>
            <a href="contactus.php">Contact us </a>
            </nav>
    </header>
    <div class="header">
        <img src="images/logo.png" class="small-profile.jpeg" height="60px" width="90px" alt="BHEL,BHOPAL">
        <h1>BHARAT HEAVY ELECTRICALS LIMITED, BHOPAL<h1>
        <h5>Powering Process, Brightening Lives Touching Every Indian Home <h5>
      </div>
    <div class="container">

        <h2>Bharat Heavy Electricals Limited, Bhopal</h2>
        <p>BHEL is India’s largest engineering and manufacturing enterprise in the energy and infrastructure sectors.
            Established in 1964, we are a leading power equipment manufacturer globally and one of the earliest and leading contributors
            owards building an Aatmanirbhar Bharat.

            Image of Dawn of India’s very own heavy electrical equipment industry
            We serve our customers with a comprehensive portfolio of products, systems and services in the areas of
            power-thermal, hydro, gas, nuclear & solar PV; transmission; transportation; defence & aerospace; oil & gas and
            new areas like BESS and EV chargers.
            <img src="images/About3.jpg" alt="Shri K.C. Reddy " width="800" height="400">

            Right from developing country’s power generation capacity to creating multiple capabilities in country’s
            core industrial & strategic sectors, BHEL is deeply aligned to the vision of a self-reliant India. Consistent
            expenditure of more than 2.5% of its turnover on R&D and innovation; establishment of world-class manufacturing assets,
            development and absorption of new technologies; and creating sustainable business solutions and initiatives in
            skilling youth, promoting health & hygiene, education, cleanliness and environment protection, stand a testimony
            to our commitment to contribute not just to our business interests, but also to society at large.</p>
            <h2>VISION</h2>
            <p>A global engineering enterprise providing solutions for a better tomorrow </p>
            <img src="images/vision.jpg" alt="vision" width="300" height="200">
            <h2>MISSION</h2>
            <p>Providing sustainable business solutions in the fields of Energy, Industry & Infrastructure</p>
            <img src="images/mission.jpg" alt="mission" width="300" height="200">
            <h2>VALUE</h2>
            <p>1.Governance.
                2.Respect.
                3.Loyalty.
                4.Integrity.
                5.Teamwork.
            </p>
            <img src="images/hand.jpg" alt="value" width="400" height="300">
        <h2> Histrory of BHEL</h2>
        <p>BHEL, a Maharatna Company of Government of India, is an Integrated Power Plant equipment manufacturer
             and one of the largest engineering and manufacturing companies in India in terms of turnover,
             ushering in the indigenous Heavy Electrical Equipment industry in India - a dream that has
             been more than realized with a well-recognized track record of performance. Presently BHEL has got 16 manufacturing divisions,
             02 repair units, 04 regional offices, 08 service centres and 15 regional centres and currently
             operate at more than 150 project sites across India and abroad. BHEL is engaged in the design, engineering, manufacture,
             construction, testing, commissioning and servicing of a wide range of products and services for the core sectors of the economy,
             viz. Power, Transmission, Industry,Transportation (Railway), Renewable Energy, Oil & Gas and Defence.</p>
             <img src="images/About1.jpg" alt="Shri K.C. Reddy " width="800" height="400">
    </div>
</body>
</html>
