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
  <title>Appoinment</title>
  <link rel="stylesheet" href="../css/appointmentStyles.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css" />
</head>

<body>

  <!-- to show upper header -->
  <div class="header">
    <h3 class="headerTitle">Vet Online</h3>
  </div>

  <!-- to show contact details -->

  <div class="contactDetailsHeaderContainer">
    <div class="contactDetailsHeader">
      <div class="contactDetails">
        <ul class="contactDetailsText">
          <li class="secondOne">info@VetOnline.lk <span> |</span></li>
          <li class="secondOne">011-7 400 800 <span> |</span></li>
          <li class="thirdOne">Working hours 07:00am-05:00pm</li>
        </ul>
      </div>
      <!-- social meadia ico -->
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
      <ul class="menuItems">
        <li class="menu"><a href="index.php">HOME</a></li>
        <li class="menu"><a href="aboutUs.php">WHO WE ARE</a></li>
        <li class="menu"><a href="">OUR SERVICES</a></li>
        <li class="menu"><a href="">FAQ's</a></li>
        <li class="menu"><a id="contactButon" href="contactus.php" target="_self">CONTACT</a></li>
        <!-- <li class="menu"><a href="">YOUR ACCOUNT</a></li> -->
        <li>
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
  </div>

  <!-- body section -->

  </div>
  <div class="content">
    <br><br>
    <h1>BOOK &nbsp;AN &nbsp;APPOINMENT</h1>
    <p>you can make your appointments online without any hassle. We make sure to attend to each an every case as soon as
      possible.</p>
    <div class="div-wrapper">
      <img src="../images/dog.png" height="600px" >
    </div>
    <form class="booking-form" method="post" action="../appointmentdb.php">
      <table>
        <tr>
          <td colspan="2">
            <!--colspan for merge columns-->
            <select class="service" name="service" id="service">
              <option value="" disabled selected hidden>Select Service</option>
              <option value="Health Services">Health Services</option>
              <option value="Health Tips">Health Tips</option>
              <option value="Pet Grooming">Pet Grooming</option>
              <option value="Pet Training">Pet Training</option>
              <option value="Care Taking">Care Taking</option>
            </select>
          </td>
        </tr>
        <tr>
          <td><input type="text" name="FName" placeholder="First Name"> <input type="text" name="LName"
              placeholder="Last Name"></td>

        </tr>
        <tr>
          <td><input type="email" name="Email" placeholder="Email Address"> <input type="text" name="Contact"
              placeholder="Phone Number"></td>
        </tr>
        <tr>
          <td><input type="date" name="Date"> <select class="gender" name="Gender">
              <option value="" disabled selected hidden>Gender</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select></td>
        </tr>
        <tr>
          <td colspan="2"><textarea name="Message" placeholder="Your Message"></textarea></td>
        </tr>
        <tr>
          <td class="btn" colspan="2"><input type="submit" name="Submit" value="Book Now"></td>
        </tr>
      </table>

    </form>

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
            <li class="textClass"> <i class="fa fa-map-marker" aria-hidden="true"></i>
              <p>No.43, Pagoda Road, Nugegoda. Sri Lanka.</p>
            </li>
            <li class="textClass"><i class="fa fa-phone" aria-hidden="true"></i>
              <p>011-7 400 800</p>
            </li>
            <li class="textClass"><i class="fa fa-envelope"></i>
              <p>info@VetOnline.lk</p>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="copyRightSection">
      <div class="leftFotter">
        <p>Copyright � 2022 VetOnline Animal Hospital</p>
      </div>
    </div>
  </div>

</body>

</html>