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
if (isset($_POST["createBtn"])) {

$createName = $_POST['createName'];
$createAddress = $_POST['createAddress'];
$createPassword = $_POST['createPassword'];
$confirmPassword = $_POST['confirmPassword'];

require 'connectReg.php';


$stmt = "insert into getregistered (createName,createAddress,createPassword,confirmPassword)
 values('$createName','$createAddress','$createPassword','$confirmPassword')";

if($createPassword != $confirmPassword){
  echo "<script>alert('Password not match');</script>";
  //header("location:http://localhost/pamithaNEW/register.php");
}

else if($conn->query($stmt)){
   // echo "Inserted successfully";
   header("location:http://localhost/pamithaNEW/login.php");
}else{
  echo "Error:" . $conn->error;
  

}
 
 /*if ($conn->query($stmt)) {
   // echo "Inserted successfully";
    header("location:http://localhost/pamitha/login.php");
} else {
    echo "Error:" . $conn->error;
}*/

}
?>

 <!DOCTYPE html>
 <html lang="en">
   <head>
     <meta charset="UTF-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <title>Home</title>
     <link rel="stylesheet" href="../css/register.css" />
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
       </div>
       
  
    <div class="register">
    <!-- body section -->
    <div style="margin-top: 25px;" class="bodySection">
        <div class="userInputs" style="background-color:white;">
        <h1>Create an Account</h1>
        <br>
        <div class="enterDetailsHeader">
            <p class="enterDetailsPara">Please enter your information</p>
        </div>
        <br>
        <form  method="post" >
            <input  id="createName" class="textbox" type="text" placeholder="Full Name" name="createName" onkeyup="validatename()" required>
            <span id = "name-error"></span> <br><br>
            <input  id="createAddress" class="textbox"type="email" placeholder="Email Address" name="createAddress" onkeyup="validateemail()" required>
            <span id = "email-error"></span> <br><br>
            <input  id="createPassword" class="textbox" type="password" placeholder="Password" name="createPassword" onkeyup="validatepassword()" required>
            <span id = "password-error"></span> <br><br>
            <input id="confirmPassword" class="textbox" type="password" placeholder="Confirm Password" name="confirmPassword" onkeyup="validatepassword1()" required>
            <span id = "password-error1"></span> <br><br>
            <input id="createBtn" class="createAccount" type="submit" value="Create Account" name="createBtn">
            <p>By creating a account,you agree to Vet Online Privacy Policy and Terms of Use.</p>
        </form>
        </div>
         <div id="registerUserInput" class="userInputs" style="background-color:white;">
            <p class="ceatingParaInfo">Creating an account is fast,easy,and free. You will be able to manage your appoinments,track your pet updates,write review and more!    </p>  
            <br><br><br>   
            <p class="creatingParaInfoMore"><b>*VIEW YOUR ORDER HISTORY</b></p><br>   
            <p class="creatingParaInfoMore"><b>*RATE AND REVIEW PRODUCTS</b></p><br> 
            <p class="creatingParaInfoMore"><b>*GET EXCLSIVE OFFERS,DISCOUNTS AND MORE!</b> </p>   
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
    <script src = "..\js\register1.js" ></script>
  </body>
</html>
