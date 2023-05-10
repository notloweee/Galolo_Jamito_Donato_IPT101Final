<!DOCTYPE html>
<html>
<head>
<title>Triple Threat Trio</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("DSC_0057.jpg");
  min-height: 100%;
}

.w3-bar .w3-button {
  padding: 16px;
}

</style>
</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="#home" class="w3-bar-item w3-button w3-wide"><b>Triple Threat Trio</b></a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="#about" class="w3-bar-item w3-button">ABOUT</a>
      <a href="#team" class="w3-bar-item w3-button"><i class="fa fa-user"></i> TEAM</a>
      <a href="#work" class="w3-bar-item w3-button"><i class="fa fa-th"></i> WORK</a>
      <a href="#pricing" class="w3-bar-item w3-button"><i class="fa fa-usd"></i> PRICING</a>
      <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>

 <!-- Right-sided dropdown navigation links -->
<style>
.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  margin-top: 60px;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
</head>
<body>

<div class="navbar">
  <div class="dropdown">
  <a class="w3-bar-item w3-button"></i>&nbsp;&nbsp;&nbsp;Account&nbsp;&nbsp;&nbsp;</a>
    <div class="dropdown-content">
      <a href="logout.php">Logout</a>
      <a href="deleteForm.php">Delete</a>
      <a href="displaybook.php">Bookings</a>
    </div>
  </div> 
</div>
</body>
</div>

    
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
  <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">TEAM</a>
  <a href="#work" onclick="w3_close()" class="w3-bar-item w3-button">WORK</a>
  <a href="#pricing" onclick="w3_close()" class="w3-bar-item w3-button">PRICING</a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
  <a href="logout.php" class="w3-bar-item w3-button"></i>Logout</a>
  <a href="deleteForm.php" class="w3-bar-item w3-button"></i>Delete</a>
  <a href="displaybook.php" class="w3-bar-item w3-button"></i>Bookings</a>
</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-left w3-text-white" style="padding:48px">
    <span class="w3-jumbo w3-hide-small">Designing the Future</span><br>
    <span class="w3-xxlarge w3-hide-large w3-hide-medium">Designing the Future</span><br>
    <span class="w3-large">Bringing your vision to life through design.</span>
    <p><a href="#about" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Learn more</a></p>
  </div> 
  <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
</header>

 <!-- TRANSLATOR API -->
<?php

@include 'config.php';

?>

<html lang="en">
    <br><br><br>
    <title>Translator API</title>
<head>
    <h1 style="text-align:center">Translator API</h1>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<style>
        hr {
        height: 1.5px;
        color: #333;
        background-color: #333;
        width: 100%;
        }
        html {font-family:"century gothic";display: flex; justify-content: center; 
             align-items: center; height: 100vh;}
        body {text-align:left; background-color: white;}
        input {
            width: 400px;
            padding: 50px 50px;
            margin: 4px 0;
            box-sizing: border-box;
            border: 1px solid gray;
            border-radius: px;
            font-size: 20px;
            text-align:left
        }
        input[type=submit] {
            width: 15%;
            height: 25px;
            padding: 0.01px 3px;
            box-sizing: border-box;
            border: 1px solid gray;
            border-radius: 6px; 
            font-size: 15px;
            background-color: #FFFFFF;
            text-align:center;
            cursor: pointer;
            
        }
        label {
            display: inline-block;
            text-align: center;
        }
        select {
            box-sizing: border-box;
            height: 25px;
            width: 17%;
            display: inline-block;
            text-align: left;
            border: 1px solid gray;
            border-radius: 6px;
            cursor: pointer;
        }
        h1 {font-size: 30px;}
        textarea {
            border-radius: 10px;
            font-size: 15px;
            height: 10%;
            width: 40%;
            padding-left: 20px;
            padding-top: 20px;
            background-color: #bdffc8;
            align-items: center;
            justify-content: center;
        }
        text {
            font-size: 20px;
        }
        
        .del1{
            text-align: center;
            width: 40%;
            justify-content: center;
			      align-items: center;
            margin-top: 0px;
            display: inline-block;
        }    
        div .del2{
            width: 25%;
            display: inline-block;
            justify-content: center;
			      align-items: center;
        }

</style>
<div style="text-align: center"> 
        <form action="translateapi.php" method="POST">
            <br><textarea rows="10" cols="80" name="text" placeholder="Enter text"></textarea>
            <br><br>
            <p style="text-align: center">Select Language: <tab>
            <label for="opt1" required> </label>
            <select id="opt1" name="opt1">
                <option value="en"> English </option>
                <option value="tl"> Tagalog </option>
                <option value="ceb"> Cebuano </option>
                <option value="zh-CN"> Chinese </option>
                <option value="fr"> French </option>
                <option value="ja"> Japanese </option>
                <option value="es"> Spanish </option>
            </select>
            <tab>&nbsp;&nbsp;Translate to: <tab>
            <label for="opt2" required> </label>
            <select id="opt2" name="opt2">
                <option value="en"> English </option>
                <option value="tl"> Tagalog </option>
                <option value="ceb"> Cebuano </option>
                <option value="zh-CN"> Chinese </option>
                <option value="fr"> French </option>
                <option value="ja"> Japanese </option>
                <option value="es"> Spanish </option>
            </select>
            <tab>&nbsp;&nbsp;<input type="submit" value="Submit">
        </form>
        </p>
        <br><br><br><br>
        </div>
</div>  


<!-- QR CODE GENERATOR API -->
<div class="w3-container w3-teal"><br><br>
<h1 style="text-align:center">QR Code Generator API</h1>
<style>
        html {font-family:"century gothic";}
        body {background-color: #FFFFFF;}
        input {
            width: 400px;
            padding: 10px 10px;
            margin: 4px 0;
            box-sizing: border-box;
            border: 3px solid gray;
            border-radius: 6px;
            font-size: 20px;
        }      
        label {
            display: inline-block;
            font-size: 20px;
            text-align: left;
        }
        h1 {font-size: 30px;}
    </style>
</head>
    <body>
        <p>
            <br>
        <div class="w3-center">
        <form action="qrapi.php" method="POST">
            <label for="link">Enter Link</label> <br>
                <input type="url" name="link" id="link" required> <br>
                <br><input type="submit" value="Submit">
        </form>
        </div>
        </p>
    </body>
    <br><br>
</div>
</html>


<!-- About Section -->
<div class="w3-container w3-light-grey" style="padding:128px 20px" id="about">
  <h3 class="w3-center">ABOUT THE COMPANY</h3>
  <p class="w3-center w3-large">Key features of our company</p>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter">
      <i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center"></i>
      <p class="w3-large">Responsive</p>
      <p>Our company, specializes in creating responsive designs that adapt seamlessly to any device, ensuring that our clients' digital content looks and functions beautifully on desktops, tablets, and mobile phones. Our team of talented photographers, designers and developers works closely with our clients to ensure that their website or application is responsive, providing users with an optimal experience no matter how they access the content.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-heart w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Passion</p>
      <p>We are dedicated to creating innovative and effective designs that meet our clients' unique needs. Our team of photographers, designers and developers is passionate about their work, and we strive to deliver exceptional results that exceed our clients' expectations. We believe that our passion for design translates into high-quality work and exceptional customer service.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-diamond w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Design</p>
      <p>Our company, is all about design. We specialize in creating beautiful and functional designs that deliver results for our clients. Our team of talented photographers, designers and developers works closely with our clients to understand their unique needs and goals, delivering custom designs that meet their specific requirements. Whether it's a website, mobile app, or branding project, we take pride in our ability to create designs that stand out from the competition.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-cog w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Support</p>
      <p>We understand that delivering exceptional customer service and support is just as important as creating high-quality designs. That's why we provide comprehensive support throughout the design process, from consultations and revisions to technical support and training. Our team is dedicated to ensuring that our clients are completely satisfied with the final product, and we go above and beyond to provide the support they need to achieve<br>their goals.</p>
    </div>
  </div>
</div>

<!-- Promo Section - "We know design" -->

<div class="w3-container  w3-pale-yellow" style="padding:128px 16px">
  <div class="w3-row-padding">
    <div class="w3-col m6">
      <h3>We know design.</h3>
      <p>At Triple Threat Trio, we are passionate about design and specialize in creating<br>captivating images that tell a story. Our team of professional photographer is<br>dedicated to capturing the perfect shot, whether it's a portrait, landscape, or<br>event. We believe that great photography is more than just a pretty picture,<br>it's about creating a visual experience that connects with the viewer.</p>
      <p> We use our design expertise to create stunning images that captivate and inspire.</p>
      <br>
      <p><a href="#work" class="w3-button w3-black"><i class="fa fa-th"></i> View Our Works</a></p>
    </div>
    <div class="w3-col m6">
      <img class="w3-image w3-round-large" src="pic1.jpg" alt="Buildings" width="700" height="394">
    </div>
  </div>
</div>

<!-- Team Section -->
<style>
.team .w3-row-padding {
  display: flex;
  justify-content: center;
}

.team .w3-card {
  max-width: 400px;
  margin: auto;
}
</style>
<div class="team">
<div class="w3-container w3-white" style="padding:130px 16px;" id="team">
  <h3 class="w3-center">THE TEAM</h3>
  <p class="w3-center w3-large">The ones who runs this company</p>
  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="idpic1.jpg" alt="Louie Gerson S. Galolo" style="width:100%">
        <div class="w3-container">
          <h3>Louie Gerson Galolo</h3>
          <p class="w3-opacity">BSIT-2</p>
          <p>He is passionate about learning new web technologies and applying them to current projects.</p>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="idpic2.jpg" alt="Francis Jamito" style="width:100%">
        <div class="w3-container">
          <h3>Francis Jamito</h3>
          <p class="w3-opacity">BSIT-1</p>
          <p>Optimistic and a very social person. He is always eager to learn and explore new things.</p>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="idpic3.jpg" alt="Mike" style="width:100%">
        <div class="w3-container">
          <h3>Robert Donato</h3>
          <p class="w3-opacity">BSIT-1</p>
          <p>Fond of creating and trying new things. Enthusiastic, adventurous, and loves to project positive vibes.</p>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>

<!-- Promo Section "Statistics" -->
<div class="w3-container w3-row w3-center w3-dark-grey w3-padding-64">
  <div class="w3-quarter">
    <span class="w3-xxlarge">10+</span>
    <br>Partners
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">50+</span>
    <br>Projects Done
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">99+</span>
    <br>Happy Clients
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">120+</span>
    <br>Meetings
  </div>
</div>

<!-- Work Section -->
<div class="w3-container w3-white" style="padding:128px 16px" id="work">
  <h3 class="w3-center">OUR WORK</h3>
  <p class="w3-center w3-large">What we've done for people</p>

  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-col l3 m6">
      <img src="work1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Cloudy Morning">
    </div>
    <div class="w3-col l3 m6">
      <img src="work2.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Starry Nights">
    </div>
    <div class="w3-col l3 m6">
      <img src="work3.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="River Trekking">
    </div>
    <div class="w3-col l3 m6">
      <img src="work4.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Blue Sky">
    </div>
  </div>
  <div class="w3-row-padding w3-section">
    <div class="w3-col l3 m6">
      <img src="work5.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Dragonfly">
    </div>
    <div class="w3-col l3 m6">
      <img src="work6.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Sunrise">
    </div>
    <div class="w3-col l3 m6">
      <img src="work8.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Fishing Boat">
    </div>
    <div class="w3-col l3 m6">
      <img src="work9.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Golden Hour">
    </div>
  </div>
  <div style="text-align:center; margin-top: 100px;">
    <p>Capture Your Moments with our Experienced Photographers</p>
    <a href="photoshoot.php" class="w3-button w3-black" style="text-decoration:none;"><i class="fa fa-camera-retro"></i>&nbsp;&nbsp;Book Now</a>
</div>
</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

<!-- Skills Section -->
<div class="w3-container w3-light-grey w3-padding-64">
  <div class="w3-row-padding">
    <div class="w3-col m6">
      <h3>Our Skills.</h3>
      <p>At Triple Threat Trio, we're committed to staying on the cutting edge of design<br>
      trends and best practices. We invest in ongoing training and development for<br>
      our team to ensure that we're always bringing the latest design techniques<br>
      and technologies to our clients.</p>
      <p>We're passionate about delivering innovative design solutions that help our<br>
      clients stand out from the competition. </p>
    </div>
    <div class="w3-col m6">
      <p class="w3-wide"><i class="fa fa-camera w3-margin-right"></i>Photography</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:95%">95%</div>
      </div>
      <p class="w3-wide"><i class="fa fa-desktop w3-margin-right"></i>Web Design</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:85%">85%</div>
      </div>
      <p class="w3-wide"><i class="fa fa-photo w3-margin-right"></i>Photoshop</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:80%">80%</div>
      </div>
    </div>
  </div>
</div>

<!-- Pricing Section -->
<div class="w3-container w3-center w3-dark-grey" style="padding:128px 16px" id="pricing">
  <h3>PRICING</h3>
  <p class="w3-large">Choose a pricing plan that fits your needs.</p>
  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-third w3-section">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32">Basic</li>
        <li class="w3-padding-16"><b>10GB</b> Storage</li>
        <li class="w3-padding-16"><b>10</b> Emails</li>
        <li class="w3-padding-16"><b>10</b> Domains</li>
        <li class="w3-padding-16"><b>Endless</b> Support</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">$ 10</h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-black w3-padding-large">Sign Up</button>
        </li>
      </ul>
    </div>
    <div class="w3-third">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-red w3-xlarge w3-padding-48">Pro</li>
        <li class="w3-padding-16"><b>25GB</b> Storage</li>
        <li class="w3-padding-16"><b>25</b> Emails</li>
        <li class="w3-padding-16"><b>25</b> Domains</li>
        <li class="w3-padding-16"><b>Endless</b> Support</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">$ 25</h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-black w3-padding-large">Sign Up</button>
        </li>
      </ul>
    </div>
    <div class="w3-third w3-section">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32">Premium</li>
        <li class="w3-padding-16"><b>50GB</b> Storage</li>
        <li class="w3-padding-16"><b>50</b> Emails</li>
        <li class="w3-padding-16"><b>50</b> Domains</li>
        <li class="w3-padding-16"><b>Endless</b> Support</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">$ 50</h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-black w3-padding-large">Sign Up</button>
        </li>
      </ul>
    </div>
  </div>
</div>

<!-- Contact Section -->
<div class="w3-container w3-light-grey" style="padding:128px 30px" id="contact">
  <h3 class="w3-center">CONTACT</h3>
  <p class="w3-center w3-large">Lets get in touch. Send us a message:</p>
  <div style="margin-top:48px">
    <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> Bohol, Philippines</p>
    <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: 0960 677 3285</p>
    <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: triplethreattrio@gmail.com</p>
    <br>
    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-border" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Subject" required name="Subject"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Message" required name="Message"></p>
      <p>
        <button class="w3-button w3-black" type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </p>
    </form>
    <!-- Image of location/map -->
    <img src="work7.jpg" class="w3-image w3-greyscale" style="width:100%;margin-top:48px">
  </div>
</div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  <p>Copyright 2023. All Rights Reserved.</p>
</footer>
 
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>


    </body>
</html>
