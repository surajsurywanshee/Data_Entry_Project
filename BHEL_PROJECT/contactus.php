<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
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
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url(images/hand.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: 10px auto;
            padding: 10px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .content {
            display: flex;
            margin-top: 40px;
        }

        .icon {
            background-color: white;
            border-radius: 30px;
            padding: 15px;
            vertical-align: top;
        }

        .contact-info {
            display: inline-block;
            padding: 4px 20px 0px 20px;
        }

        .address-line {
            margin-top: 40px;
        }

        .col-1 {
            width: 530px;
        }

        .col-2 {
            flex: 1 1 auto;
            background-color: white;
        }

        .form-container {
            color: #000;
            padding: 30px;
        }

        .contact-info-title {
            color: #01bdd4;
        }

        .form-row {
            padding-bottom: 30px;
        }

        .form-field {
            width: 100%;
            border: none;
            border-bottom: 1px solid #000;
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
    <div class="container">

           <div class="container">
               <div class="text-center">
                   <div>
                       On this Page you can find Contact Details for customers or anyone who is interested in information about our company</div>
                   </div>
               </div>
               <div class="content">
                   <div class="col-1">
                       <div class="address-line">
                           <img alt="location" src="images/address logo.png" height="40px" width="60px" class="icon">
                           <div class="contact-info">
                               <div class="contact-info-title">Address</div>
                               <div>VISIT OUR OFFICE</div>
                               <div>Piplani, BHEL, Bhopal</div>
                               <div> 462022.</div>
                           </div>
                       </div>
                       <div class="address-line">
                           <img alt="location" src="images/phone logo.png" height="40px" width="60px" class="icon">
                           <div class="contact-info">
                               <div class="contact-info-title">Phone</div>
                               <div>(+91) 755-250-01-00 /01/ 02/ 03/ 04/ 05/ 06/ 07 </div>
                           </div>
                       </div>
                       <div class="address-line">
                           <img alt="location" src="images/name.png" height="40px" width="60px" class="icon">
                           <div class="contact-info">
                               <div class="contact-info-title">Name</div>
                               <div>Vinodanand Jha</div>
                               <div>Additional General Manager & Public <br> Relations Department</div>
                               <div>(+91) 755-255-0355</div>
                           </div>
                       </div>
                       <div class="address-line">
                           <img alt="location" src="images/name.png" height="40px" width="60px" class="icon">
                           <div class="contact-info">
                               <div class="contact-info-title">Name</div>
                               <div>Sanjay Rajbanshi</div>
                               <div>Dypty Manager & Public Relations Department</div>
                               <div>(+91) 755-250-5752</div>
                           </div>
                       </div>
                       <div class="address-line">
                           <img alt="location" src="images/name.png" height="40px" width="60px" class="icon">
                           <div class="contact-info">
                               <div class="contact-info-title">Name</div>
                               <div>Yogendra Shingh</div>
                               <div>Dypty Manager</div>
                               <div>(+91) 755-250-5549</div>
                           </div>
                       </div>
                       <div>
                           <img alt="location" src="images/bhel_bhopal_location.jpg" height="300px" width="570px" class="icon">
                       </div>
                       </div>
                   </div>
               </div>
           </div>

    </div>
</body>
</html>