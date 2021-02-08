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
          <h1 class="" style=" font-family: 'Ubuntu';  color: #30A945;" data-aos="fade-right" data-aos-delay="400" data-aos-duration="1000">Don't miss updates from us!</h1>
          <p class="text" data-aos="fade-right" data-aos-delay="500" data-aos-duration="1000">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe
            dolorum adipisci recusandae praesentium dicta!
          </p>

        

          <div class="social-media" data-aos="fade-right" data-aos-delay="600" data-aos-duration="1000">
            <p>Give Feed Back :</p>
            <div class="social-icons">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#">
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
              <input type="text" name="uname" class="input" placeholder="User Name" id="input1" onclick="validout()" />
              <label for=""></label>
              <span>Username</span>
            </div>
            <span style="color:rgb(173, 40, 0);display:none;" id="span1"> ! Please Enter The User Name</span>
            <div class="input-container">
              <input type="email" name="email" class="input" placeholder="Email" id="input2" onclick="validout2()"/>
              <label for=""></label>
              <span>Email</span>
            </div>
            <span style="color:rgb(173, 40, 0);display:none;" id="span2"> ! Please Enter Valid Email Address</span>
            <div class="input-container">
              <input type="tel" name="phone" class="input" placeholder="Phone" id="input3" onclick="validout3()"/>
              <label for=""></label>
              <span>Phone</span>
            </div>
            <span style="color:rgb(173, 40, 0);display:none;" id="span3"> ! Please Enter Valid Phone Number</span>
            
            <div class="input-container textarea">
              <textarea name="msg" class="input" placeholder="FeedBack" id="input4" onclick="validout4()"></textarea>
              <label for=""></label>
              <span>Message</span>
            </div>
            <span style="color:rgb(173, 40, 0);display:none;" id="span4"> ! Please Enter Your FeedBack</span>
            
            <!-- <h1 onclick="valid()">SEND</h1> -->
            <input name="sent" type="submit" value="POST" class="btn" onclick="valid()">
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


<script>
    var email = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;
  
function valid()
{
    if(document.getElementById("input1").value=="")
    {
       document.getElementById("input1").style="border:2px solid red"; 
       document.getElementById("input1").style="box-shadow:0px 0px 20px rgb(255, 92, 42)";
       document.getElementById("span1").style="display:block";
       document.getElementById("span1").style="color:rgb(173, 40, 0)";
    }
    else
    {
        document.getElementById("input1").style="border:0px solid red"; 
       document.getElementById("input1").style="box-shadow:0px 0px 00px rgb(255, 92, 42)";
       document.getElementById("span1").style="display:none";
    }
    if(!document.getElementById("input2").value.match(email))
    {
       document.getElementById("input2").style="border:2px solid red"; 
       document.getElementById("input2").style="box-shadow:0px 0px 20px rgb(255, 92, 42)";
       document.getElementById("span2").style="display:block";
       document.getElementById("span2").style="color:rgb(173, 40, 0)";
    }else{
        document.getElementById("input2").style="border:0px solid red"; 
       document.getElementById("input2").style="box-shadow:0px 0px 00px rgb(255, 92, 42)";
       document.getElementById("span2").style="display:none";
    }
    if(document.getElementById("input3").value.length<10 || isNaN(document.getElementById("input3").value))
    {
       document.getElementById("input3").style="border:2px solid red"; 
       document.getElementById("input3").style="box-shadow:0px 0px 20px rgb(255, 92, 42)";
       document.getElementById("span3").style="display:block";
       document.getElementById("span3").style="color:rgb(173, 40, 0)";
    }else{
        document.getElementById("input3").style="border:0px solid red"; 
       document.getElementById("input3").style="box-shadow:0px 0px 00px rgb(255, 92, 42)";
       document.getElementById("span3").style="display:none";
    }
    if(document.getElementById("input4").value=="")
    {
       document.getElementById("input4").style="border:2px solid red"; 
       document.getElementById("input4").style="box-shadow:0px 0px 20px rgb(255, 92, 42)";
       document.getElementById("span4").style="display:block";
       document.getElementById("span4").style="color:rgb(173, 40, 0)";
    }else{
        document.getElementById("input4").style="border:0px solid red"; 
       document.getElementById("input4").style="box-shadow:0px 0px 00px rgb(255, 92, 42)";
       document.getElementById("span4").style="display:none";
    }



    if(!(document.getElementById("input1").value=="") && (document.getElementById("input2").value.match(email)) && !(document.getElementById("input3").value.length<10 || isNaN(document.getElementById("input3").value)) && (document.getElementById("input4").value==""))
    {
        document.getElementById("frm1").action="index.php";
    }
}
function validout()
{
    if(document.getElementById("input1").value=="")
    {
       document.getElementById("input1").style="border:0px solid red"; 
       document.getElementById("input1").style="box-shadow:0px 0px 00px rgb(255, 92, 42)";
       document.getElementById("span1").style="display:none";
       
    }
}
function validout2()
{
    if(document.getElementById("input2").value=="")
    {
       document.getElementById("input2").style="border:0px solid red"; 
       document.getElementById("input2").style="box-shadow:0px 0px 00px rgb(255, 92, 42)";
       document.getElementById("span2").style="display:none";
       
    }
}
function validout3()
{
    if(document.getElementById("input2").value=="")
    {
        document.getElementById("input3").style="border:0px solid red"; 
       document.getElementById("input3").style="box-shadow:0px 0px 00px rgb(255, 92, 42)";
       document.getElementById("span3").style="display:none";
       
    }
}
function validout4()
{
    if(document.getElementById("input2").value=="")
    {
      document.getElementById("input4").style="border:0px solid red"; 
       document.getElementById("input4").style="box-shadow:0px 0px 00px rgb(255, 92, 42)";
       document.getElementById("span4").style="display:none";
       
    }
}
</script>
  </body>
</html>
