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
      <div class="bodysectionsfaq">
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
        <div class="div-wrapperfaq">
        <br>
        <img src="..\images\faqs.png">
        </div>
        <br>
        <center><h2>CHECK OUT OUR FAQ'S</h2></center>
        <br>
        <center><h2><p style = "color : red">We Make Sure to Offer You the Best Service</p></h2></center>
        <br><br><br><br>
        <div class="faq-wrapper">   
        <p><font size = "15"><center>FAQ'S</font></center></p>
        <br><br><br>
        </div>
    
        <button class="accordion"><font style ="color : rgb(0, 80, 137)">Where is your clinic located?</font></button>
        <div class="panel">
        <p ><font size = "5" style="font-family: Arial"><br>Our clinic is located in Colombo.<br><br></font></p>
        </div>
    
        <button class="accordion"><font style ="color : rgb(0, 80, 137)">What are your hours of operation?</font></button>
        <div class="panel">
        <p><font size = "5" style="font-family: Arial"><br>Our Hospital hours are all 7 days from 8:00 a.m.to 8:00 p.m.  Poya days we are open from 8:00 a.m. to 3:00 p.m<br><br></font></p>
        </div>
    
        <button class="accordion"><font style ="color : rgb(0, 80, 137)">What forms of payment do you accept?</font></button>
        <div class="panel">
        <p><font size = "5" style="font-family: Arial"><br>We Accept Cash,Cheques,VISA,Master Debit and credit cards<br><br></font></p>
        </div>
    
        <button class="accordion"><font style ="color : rgb(0, 80, 137)">Do you have pet grooming?</font></button>
        <div class="panel">
        <p><font size = "5" style="font-family: Arial"><br>Yes we do grooming for both cats and dogs.<br><br></font></p>    
        </div>
    
        <button class="accordion"><font style ="color : rgb(0, 80, 137)">Do you make house calls?</font></button>
        <div class="panel">
        <p><font size = "5" style="font-family: Arial"><br>Yes we do. Call our hotline.<br><br></font></p>    
        </div>
    
        <button class="accordion"><font style ="color : rgb(0, 80, 137)">When I need to go on a holiday, can I keep my pet with you?</font></button>
        <div class="panel">
        <p><font size = "5" style="font-family: Arial"><br>Yes we have boarding kennels for both cats and dogs.<br><br></font></p>    
        </div>
    
        <button class="accordion"><font style ="color : rgb(0, 80, 137)">Do I need an appointment?</font></button>
        <div class="panel">
        <p><font size = "5" style="font-family: Arial"><br>Walk-in appointments are available, and also you can make your appointments online.<br><br></font></p>    
        </div>
    
        <button class="accordion"><font style ="color : rgb(0, 80, 137)">I bought my pet to see the veterinarian for a problem, and my pet isn't getting better. What can I do?</font></button>
        <div class="panel">
        <p><font size = "5" style="font-family: Arial"><br>Call us. Just like doctors, veterinarians sometimes need to try more than one treatment/medication to find the correct solution to cure or manage a pet's condition. Please let us know if something we recommended or prescribed isn't helping. We want to work with you to find the right answers for your pet.<br><br></font></p>    
        </div>
    
        <button class="accordion"><font style ="color : rgb(0, 80, 137)">What kind of experience do you have working with animals?</font></button>
        <div class="panel">
        <p><font size = "5" style="font-family: Arial"><br>We have been in this field for over 7 years.<br><br></font></p>    
        </div>
    
        <button class="accordion"><font style ="color : rgb(0, 80, 137)">What kind of services does your vet clinic offer?</font></button>
        <div class="panel">
        <p><font size = "5" style="font-family: Arial"><br>We offer many services for your pet. You can check them from Our Services page.<br><br></font></p>    
        </div>
        </div>
        <script src ="..\js\faq.js"></script>
      
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