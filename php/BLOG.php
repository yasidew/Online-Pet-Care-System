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
      <div class="bodysectionblog">
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
    <div class="blog-section">
    <h1 style="font-size:60px"><font style="font-family: calibri"><center>Our Blog</font></center></h1>
        </div>
            <br><br><br><br>
            <div class="div-wrapper">
            <img src="..\images\pet vaccination.jpg"/>
            <h2 style ="font-size: 35px;"><font style="font-family: calibri">The Ultimate Guide to Dog Vaccination</font></h2>
            <br>
            <p>6-8 weeks</p>
            <hr>
            <ul style="list-style-type:disc">
                <li>Core vaccines</li>
                <li>Non-core : Kennel cough</li>
            </ul>
            <br>
            <P>9-11 weeks</P>
            <hr>
            <ul style="list-style-type:disc">
                <li>Core vaccines</li>
                <li>Non-Core : kennel cough, lyme disease, leptospirosis</li>
            </ul>
            <br>
            <p>12-14 weeks</p>
            <hr>
            <ul style="list-style-type:disc">
                <li>Core vaccines</li>
                <li>Non-Core : lyme disease, leptospirosis</li>
            </ul >
            <br>
            <p>14-16 weeks</p>
            <hr>
            <ul style="list-style-type:disc">
                <li>Core vaccines : Rabies</li>
                <li>Non-Core : lyme disease, leptospirosis, canine inflenza</li>
            </ul>
            <br>
            <p>Anual & 3 year</p>
            <hr>
            <ul style="list-style-type:disc">
                <li>Core vaccines : Rabies</li>
                <li>Non-Core : lyme disease, leptospirosis, canine inflenza, bordetella</li>
                <li>3 year core vaccines : DAP, Rabies</li>
            </ul>
            <br><br><br><br> 
                <img src="..\images\dog pregnancy.jpg">
                <h2 style ="font-size: 35px;"><font style="font-family: calibri">Things to Know About Dog Pregnancy</font></h2>
                <br>
                Pregnancy in dogs, commonly known as the gestation period, typically lasts 57-65 days, with an average of 63 days.

                When planning a breeding, keep track of the precise day of mating. Make a note of the dates and expect birth between 63 and 65 days later if there are two matings. 
               <br><br>
                <ul style = "list-style-type:disc">
                    <li style = "font-size:20px">Should I change her food?</li>
                    <br>
                    During pregnancy, make sure to feed your dog a premium, high-quality diet that has been authorized by your veterinarian. Before giving your dog nutritional supplements or vitamins, consult with your veterinarian.
                    <br><br>
                    <li style = "font-size:20px">What about medications that my dog takes?</li>
                    <br>
                    While your dog is pregnant, several regularly used drugs should be avoided.
                    <br><br>
                    <li style = "font-size:20px">Should I change her routine as pregnancy advances?</li>
                    <br>
                    As the pregnancy advances, intra-abdominal pressure rises, as do the mother's dietary needs. The dog normally requires a greater number of smaller meals rather than a greater quantity each meal. Allow your pet to choose how much physical activity she requires.
                </ul>
            <div class="v1 "></div>
            </div>
            <div class="div-wrapper2">
            <img src="..\images\pet grooming.jpg">
            <h2 style ="font-size: 35px;"><font style="font-family: calibri">Why Pet Grooming is Important</font></h2>
            <br>
            <ol>
                <li style = "font-size:20px"> Prevent Fleas & Ticks </li>
                <br>
                One of the most important reasons to wash your dog is to keep fleas and ticks at bay. Although washing alone may not be enough to get rid of these pesky bugs, it will assist you in spotting them and killing the ones on your dog.
                <br><br>
                <li style = "font-size:20px"> Eliminate Discomfort </li>
                <br>
                Grooming alleviates discomfort in a variety of ways. First and foremost, brushing is something that most dogs like. Your dog will feel like they're receiving a massage while you remove dead hair, encourage new growth, and bring your pup's natural oils to their skin with the correct brush. It also aids in the prevention of matting on longer coats.
                <br><br>
                <li style = "font-size:20px">Protect Feet & Joints</li>
                <br>
                One of the most ignored aspects of routine dog care is nail cutting. Long nails, however, are not only unsightly; they are also harmful and uncomfortable for your dog. For starters, lengthy nails cause your dog's stride to shift. Long nails cause your dog to walk on the sides of its feet. Trimming your dog's nails, no matter how tough, must be done. It is critical to retain them at their normal length to avoid long-term harm.
                <br><br>
                <li style = "font-size:20px">Keep Ear Infections Away</li>
                <br>
                Dogs, especially those prone to ear infections, require frequent ear cleaning. Dogs' ears have hair that has to be plucked frequently, however this is more common in long-coated dogs than others. Keeping the inside of your dog's ears clean will help avoid ear infections, ear mites, and other problems. It will also make your dog feel more at ease.
                <br><br>
                <li style = "font-size:20px">Check for Abnormalities</li>
                <br>
                One of the many advantages of grooming your dog is that you or your usual groomer will become more familiar with the marks on his skin. You'll soon be able to detect any underlying lumps and bumps, as well as any changes in your dog's skin, if something goes wrong. Because early diagnosis is critical for many diseases, employing frequent grooming to help go over your dog's body will increase your chances of detecting anything wrong early on.
            </ol>
            <br><br><br><br>
            <img src="..\images\dog food.jpg">
            <h2 style ="font-size: 35px;"><font style="font-family: calibri">Human Foods That Dogs Can and Cannot Eat</font></h2>
            <br>
            <ul style="list-style-type:disc">
                <li style = "font-size:20px">3 Foods Dogs Cannot Eat</li>
                <br>
                <ol>
                    <li>Chocolate</li>
                    <li>Almons</li>
                    <li>Onions</li>
                </ol>
                <br>
                <li style = "font-size:20px">3 Foods Dogs Can Eat</li>
                <br>
                <ol>
                    <li>Cashews</li>
                    <li>Cheese</li>
                    <li>Coconut</li>
                </ol>
            </ul>
            <div class="v2 "></div>
            </div>
            <div class="div-wrapper3">
            <img src="..\images\keeping pet healthy.png">
            <h2 style ="font-size: 35px;"><font style="font-family: calibri">How to Keep Your Pet Healthy</font></h2>
            <br>
            <ol>
                <li style = "font-size:20px">Proper nutrition</li>
                <br>
                Feeding your pet the proper amount and type of food helps him maintain a healthy weight, which is one of the most effective strategies to prevent obesity-related diseases and lengthen his longevity. A balanced diet of high-quality food may typically fulfill your pet's nutritional needs, but consult with your veterinarian to determine if he need any supplements. Make sure your pet has enough of fresh water, and keep an eye on how many goodies you offer him.
                <br><br>
                <li style = "font-size:20px">Exercise</li>
                <br>
                Regular walks, hiking, retrieve, and swimming may all help to keep your pet physically active and fit. But don't overlook mental stimulation! Toys, concealing goodies, designing obstacle courses, and learning new tricks all keep your dog or cat interested and involved. Change up your walking schedule to introduce your pet to different sights and smells.
                <br><br>
                <li style = "font-size:20px">Regular checkups</li>
                <br>
                An yearly wellness check gives your veterinarian the best opportunity to undertake a number of health screenings that can lead to early disease identification and the discovery of warning symptoms of serious illness. Yearly dental visits may also be advised to eradicate plaque and tartar accumulation.
                <br><br>
                <li style = "font-size:20px">Preventative medications</li>
                <br>
                Regular veterinary examinations and preventative actions go hand in hand. Preventative drugs help keep your pet's health problems at bay, such as heartworm, flea-related disorders, and tick-borne infections. Furthermore, cleaning your pet's teeth on a regular basis and feeding him dental chews help prevent periodontal disease, which can lead to more serious health concerns.
                <br><br>
                <li style = "font-size:20px">Affection</li>
                <br>
                A solid relationship with your dog or cat is beneficial to both of you. Cuddles, petting, belly rubs, and even stroking his coat are all wonderful ways to show your cat how much you care. This not only strengthens your emotional bond with your pet, but it also encourages your pet to interact well with other animals and humans.
            </ol>
            <br><br><br><br>
            <img src="..\images\overweight dog.jpg">
            <h2 style ="font-size: 35px;"><font style="font-family: calibri">Guide To Help Overweight Dogs</font></h2>
            <br>
            <ul style="list-style-type:disc">
                <li style = "font-size:20px">Keep your dog active.</li>
                <li style = "font-size:20px">Consider Supplements to Boost Weight Loss.</li>
                <li style = "font-size:20px">Maintain Consistency and Fun.</li>
                <li style = "font-size:20px">Reduce portion size and calorie intake.</li>
                <li style = "font-size:20px">Assist your dog in feeling fuller.</li>
            </ul>
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