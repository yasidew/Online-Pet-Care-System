<?php
$cookie_name="name";
$cookie_value="Tom cat";
setcookie($cookie_name, $cookie_value, time() + (86400*30),"/");

if(!isset($_COOKIE[$cookie_name])) {
  // echo"Cookie named '". $cookie_name."' is not set!";
 
}else{
   //echo"Cookie '". $cookie_name."' is set!<br>";
  // echo"Value is: ".$_COOKIE[$cookie_name];
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="stylesheet" href="../css/newteststyle.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="../font-awesome-4.7.0/css/font-awesome.min.css"
    />
  </head>
  <body>
      <div class="bodysectionservice">
    <!-- to show upper header -->
    <div class="header">
      <h3 class="headerTitle">Vet Online</h3>
    </div>

    <!-- to show contact details -->

    <div class="contactDetailsHeaderContainer">
      <div class="contactDetailsHeader">
        <div class="contactDetails">
          <ul class="contactDetailsText">
            <li class="secondOne">info@VetOnline.lk<span> |</span></li>
            <li class="secondOne">011-7 400 800 <span> |</span></li>
            <li class="thirdOne">Working hours 07:00am-05:00pm</li>
          </ul>
        </div>
          <div class="socialMediaIcons">
            <a href="https://www.facebook.com">
              <i class="fa fa-facebook-square" aria-hidden="true"></i>
            </a>
            <a href="https://www.instagram.com">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
            <a href="https://www.instagram.com">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="https://www.instagram.com">
              <i class="fa fa-whatsapp" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>

    <!-- Navigation Bar -->

    <div class="navigationBar">
      <div class="leftItemNav">
        <div class="imageDiv">
          <img src="../images/icon.jpg" alt="" />
        </div>
        <div class="brandName">
          <h2>
            Vet <br />
            Online
          </h2>
        </div>
      </div>
      <div class="rightNavItemBar">
        <ul class="menuItems" >
          <li class="menu"><a href="index.php">HOME</a></li>
          <li class="menu"><a href="aboutUs.php">WHO WE ARE</a></li>
          <li class="menu"><a href="OurServices.php">OUR SERVICES</a></li>
          <li class="menu"><a href="FAQS.php">FAQ's</a></li>
          <li class="menu"><a href="contactus.php">CONTACT</a></li>
          <li class="menu">
            <div class="dropdown">
              <button type="button" class="dropbtn">YOUR ACCOUNT</button>
              <div class="dropdown-content">
                <a id="login" href="login.php" target="_self">Log in</a>
                <a id="register" href="register.php" target="_self">Register</a>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <br>
      <div class="services-section">
        <h1 style="font-size:60px"><font style="font-family: calibri"><center>Our Services</font></center></h1>  
      </div>
      <br><br><br><br><br><br><br>
      <div class="services-box">
        <img src="..\images\health services.jpg">
        <h2 style ="font-size: 35px;"><font style="font-family: calibri">Health Assistance</font></h2>
        <br>
        At Vetonline we offer many health services to your pet including OPD, complete wellness consultation and vaccination programmes.
        <br><br><br>
        <center><a class="s-btn" href="HealthAssistance.php">More</a></center>
      </div>  
      <br><br>
      <div class="services-box">
        <img src="..\images\pet train.jpg">
        <h2 style ="font-size: 35px;"><font style="font-family: calibri">Pet Training</font></h2>
        <br>
        We offer Accredited Pet trainers to teach fun & eﬀective group & private classes to  help your pet learn how to behave appropriately at home and on-the-go.
        <br><br>
        <center><a class="s-btn" href="petTrainng.php">More</a></center>
      </div>
      <div class="services-container">
      <div class="services-box2">
        <img src="..\images\health tips.png">
        <br>
        <h2 style ="font-size: 35px;"><font style="font-family: calibri">Health Tips</font></h2>
        <br>
        We offer many programmes regarding health tips including pet exercises, healthy food and how to maintain a healthy body for your pet.
        <br><br><br>
        <center><a class="s-btn" href="HealthTips.php">More</a></center>
      </div>
      <br><br>
      <div class="services-box2">
        <img src="..\images\pet care.jpg">
        <br>
        <h2 style ="font-size: 35px;"><font style="font-family: calibri">Care Taking</font></h2>
        <br>
        We serve pets of all breeds, ages, and stages of life because we adore animals. Every belly massage, lengthy stroll, scratch behind the ear, every reward we give demonstrates this. 
        <br><br>
        <center><a class="s-btn" href="petsitting.php">More</a></center>
      </div>
      </div>
      <div class="services-container2">
        <div class="services-box3">
          <img src="..\images\grooming.jpg">
          <br>
          <h2 style ="font-size: 35px;"><font style="font-family: calibri">Pet Grooming</font></h2>
          <br>
          Our grooming appointments can take anywhere from 2-4 hours, depending on your dog's or cat's size, coat type and the services you choose.
          <br><br><br>
          <center><a class="s-btn" href="petGrooming.php">More</a></center>
        </div>
        <br><br>
        <div class="services-box3">
          <img src="..\images\pet train tips.jpg">
          <br>
          <h2 style ="font-size: 35px;"><font style="font-family: calibri">Pet Training Tips</font></h2>
          <br>
          We offer easy pet training tips to make your pet behave well in house and outdoors. You can also book an appointmnet for our pet training camapign.
          <br><br>
        <center><a class="s-btn" href="petTrainng.php">More</a></center>
        </div>
      </div>
      <div class="servicesimage">
      <img src ="..\images\LET YOUR PET BE IN THE SAFE HANDS OF US.png">
      </div>
      </div>
    

    <!-- body section -->
    </div>

    <!-- bottom section -->

    <div class="foorterSection">
      <div class="aboutSection">
        <div class="aboutSectionDetailContainer">
          <div class="aboutContainer">
            <h3 class="abouthContainerItem">About</h3>
            <br />
            <p>
              VetOnline Animal hospital was established in October 2010 aiming
              to provide better and professional service for all the pet owners.
              We are equipped with modern technology and professional qualified
              doctors to offer you a good service.
            </p>

            <br />
            <a href="#"> Read more &nbsp;&nbsp;&nbsp;+ </a>
          </div>

          <div class="usefulLinkSectionUlContainer">
            <h3 class="abouthContainerItem">Useful Links</h3>
            <br />
            <ul class="usefulLinkSectionUl">
              <li class="textClass">
                <i class="fa fa-chevron-right"></i>
                <p>About</p>
              </li>
              <li class="textClass">
                <i class="fa fa-chevron-right"></i>
                <p>Terms and Conditions</p>
              </li>
              <li class="textClass">
                <i class="fa fa-chevron-right"></i>
                <p>Online pet shop</p>
              </li>
              <li class="textClass">
                <i class="fa fa-chevron-right"></i>
                <p>FAQ</p>
              </li>
              <li class="textClass">
                <i class="fa fa-chevron-right"></i>
                <p>Contact us</p>
              </li>
            </ul>
          </div>
          <div class="getInTouchSectionContainer">
            <h3 class="abouthContainerItem">Get in touch</h3>
            <br />
            <ul class="usefulLinkSectionUl">
              <li class="textClass" > <i class="fa fa-map-marker" aria-hidden="true"></i><p>No.43, Pagoda Road, Nugegoda. Sri Lanka.</p></li>
              <li class="textClass"><i class="fa fa-phone" aria-hidden="true"></i><p>011-7 400 800</p></li>
              <li class="textClass"><i class="fa fa-envelope"></i><p>info@VetOnline.lk</p></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="copyRightSection">
        <div class="leftFotter">
          <p>Copyright © 2022 VetOnline Animal Hospital</p>
        </div>
      </div>
    </div>
  </body>
</html>