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

<?php
if(isset($_POST["userbutton"]))
{
    $userName = $_POST['userName'];
    $userAddress= $_POST['userAddress'];
    $userPhone = $_POST['userPhone'];
    $petName = $_POST['petName'];
    $petType = $_POST['petType'];
    $petAge = $_POST['petAge'];
   
    require 'account_db.php';

    $stmt ="insert into profiledetails values('$userName','$userAddress','$userPhone','$petName','$petType','$petAge')";
    

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
    <link rel="stylesheet" href="../css/useraccount.css" />
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
    <div class="contentaccount">
        <br><br><br>
        <div class="user">
            <img src="..\images\user.png">
        <br>
        <div class="user-profile">
        <form method ="post">
            <input id="createName" class="textbox" type="text" placeholder="Nihal Kariyawasam" name = "userName"  required><br><br>
            <input  id="createAddress" class="textbox"type="email" placeholder="NihalK@gmail.com" name = " userAddress" required><br><br>
            <input  id="createPhonenumber" class="textbox" type="tel" placeholder="077-333-2555"  name = "userPhone"  required><br><br>
            <input id="createBtn" class="Update" type="submit" value="Update" name = "userbutton">   
    </div>
    </div>
    <div class="pet">
        <img src="..\images\pet.jpg">
        <br>
        <div class="pet-profile">
                <input id="createName" class="textbox" type="text" placeholder="Rex" name = "petName" required><br><br>
                <input  id="createType" class="textbox"type="type" placeholder="Pitbull" name = "petType" required><br><br>
                <input  id="createAge" class="textbox" type="text" placeholder="7" name ="petAge" required><br><br>
                <input id="createBtn" class="Update" type="submit" value="Update" name = "userbutton"> 
            </form>
        </div>
    </div>
    <table>
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col" >Service Type</th>
            <th scope="col">Date</th>
            <th scope="col">Payment Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Pet Grooming</td>
            <td>03/02/2022</td>
            <td>payed</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Pet Training</td>
            <td>04/15/2022</td>
            <td>Payed</td>
          </tr>
          <tr>
            <td>3</td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>4</td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
      </div>
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
 
