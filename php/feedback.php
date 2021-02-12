<?php

if(isset($_POST["sent"])){

     $uname = $_POST["uname"];
     $email = $_POST["email"];
     $message = $_POST["msg"];
     $phone = $_POST["phone"];

     $to = "sqnccreators@gmail.com";

     $subject = "From Website Feedback Form";

     $nmsg = $uname . ": " . $message . " | Phone Number: " . $phone;
     
     if(mail($to,$subject,$nmsg,$email)){
         echo "<script> alert('Thank You, for your valuable feedback..!'); window.location.href='index'; </script>";
     }
 }

?>