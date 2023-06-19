<?php
if(isset($_POST["sendbutton"]))
{
    $contactName = $_POST['contactName'];
    $contactAddress= $_POST['contactAddress'];
    $contactmessage = $_POST['contactmessage'];
    
    require 'contact_db.php';

    $stmt ="insert into messagedetails values('$contactName','$contactAddress','$contactmessage')";
    

     if($conn->query($stmt)){
        echo "Updated successfully";
        }
        else{
        echo "Error:". $conn->error;
        }
    $conn->close();
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="stylesheet" href="../css/contactus.css" />
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
  </head>
  <body>
      <div class="contactus">
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
          <li class="menu"><a href="OurServices.php">OUR SERVICES</a></li>
          <li class="menu"><a href="FAQS.php">FAQ's</a></li>
          <li  class="menu"><a id="contactButon" href="contactus.php" target="_self" >CONTACT</a></li>
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
    <br>
    <div class="contactcontainer">
        <div class="mapsnew">
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d78145.53525218792!2d79.89217617370818!3d6.843259275736464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25a7a9577b535%3A0x62e4b0a7bd678e33!2sNugegoda!5e0!3m2!1sen!2slk!4v1653034544566!5m2!1sen!2slk" width="100" height="300" style="border:0;"  loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="contactinfo">
            <h1>Contact Information</h1>
            <br><br>
            <h3>Address : 43,Poddala Road, Nugegoda, Sri Lanka</h3>
            <br><br>
            <h3>Contact Number :  011-2823807</h3>
            <br><br>
            <h3>Fax :  011-2823807</h3>
        </div>
        <div class="message">
            <br>
            <h1><center>Drop us a Message</center></h1>
        </div>
        <div class="messagebox">
            <br>
            <div class="textbox">
            <form  method="post" >
                <p><center><font style="size: 30px;">Feel free to drop us a message</font></center></p>
                <br>
                <input id="createName" class="textbox" type="text" placeholder="Name" name="contactName" required><br><br>
                <input  id="createAddress" class="textbox"type="email" placeholder="Email" name="contactAddress" required><br><br>
                <input  id="createmessage" class="textbox" type="message" placeholder="Your Message" name="contactmessage" required><br><br>
                <div class="send">
                <input id="sendBtn" class="sendmessage" type="submit" value="send message" name="sendbutton">
                </div>
            </form>
          </div>
        </div>
    </div>
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