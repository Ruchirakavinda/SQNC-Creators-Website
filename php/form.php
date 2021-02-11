<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Ubuntu">

    <link rel="stylesheet" href="../css/form.css" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>


<!--scroll animation-->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<!--scroll animation-->

  </head>
  <body>
    
    <div class="container " data-aos="fade-in" data-aos-delay="500" data-aos-duration="1000" >
      <span class="big-circle"></span>
      <img src="images/shape.png" class="square" alt="" />
      <div class="form">
        
        <div class="contact-info" >
          <h1 class="" style=" font-family: 'Ubuntu';  color: #30A945;" data-aos="fade-right" data-aos-delay="400" data-aos-duration="1000">It was a Pleasure Working with You!</h1>
          <p class="text" data-aos="fade-right" data-aos-delay="500" data-aos-duration="1000">
          No matter the content, every review is a special review because 
          it always comes from a special person.
          </p>

        

          <div class="social-media" data-aos="fade-right" data-aos-delay="600" data-aos-duration="1000">
            <p>Reach Us Via:</p>
            <div class="social-icons">
              <a href="https://www.facebook.com/sqnccreators">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="https://mobile.twitter.com/CreatorsSqnc">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="https://www.instagram.com/sqnc_creators/">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="https://www.linkedin.com/in/sqnc-creators-a57b721b9/">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="contact-form" >
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form action="feedback.php" method="POST" autocomplete="off" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000" id="frm1">
            <h3 class="title">FeedBack</h3>
            <div class="input-container">
              <input type="text" name="uname" class="input" placeholder="Name" id="input1"  required />
              <label for=""></label>
              <span>Username</span>
            </div>
            <span style="color:rgb(173, 40, 0);display:none;" id="span1"> ! Please Enter The User Name</span>
            <div class="input-container">
              <input type="email" name="email" class="input" placeholder="Email" id="input2" required/>
              <label for=""></label>
              <span>Email</span>
            </div>
            <span style="color:rgb(173, 40, 0);display:none;" id="span2"> ! Please Enter Valid Email Address</span>
            <div class="input-container">
              <input type="tel" name="phone" class="input" placeholder="Phone" id="input3"/>
              <label for=""></label>
              <span>Phone</span>
            </div>
            <span style="color:rgb(173, 40, 0);display:none;" id="span3"> ! Please Enter Valid Phone Number</span>
            
            <div class="input-container textarea">
              <textarea name="msg" class="input" placeholder="FeedBack" id="input4" required></textarea>
              <label for=""></label>
              <span>Message</span>
            </div>
            <span style="color:rgb(173, 40, 0);display:none;" id="span4"> ! Please Enter Your FeedBack</span>
            
            <!-- <h1 onclick="valid()">SEND</h1> -->
            <input name="sent" type="submit" value="POST" class="btn" >
            <input type="button" class="btn" value="Go back" onclick="goback();">
            <script>
             function goback()
             {
              window.location.href='index.php';
             }
            </script>
          </form>
        </div>
      </div>
    </div>

<script src="js/app.js"></script>
<!--scroll animation-->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<!--scroll animation-->



  </body>
</html>
