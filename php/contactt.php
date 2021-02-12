
<?php

if(isset($_POST["sent"])){

     $uname = $_POST["namee"];
     $email = $_POST["email"];
     $message = $_POST["msg"];


     $to = "sqnccreators@gmail.com";

     $subject = "From Website Contact Form";

     $nmsg = $uname . ": " . $message;
     
     if(mail($to,$subject,$nmsg,$email)){
        echo "<script> alert('Your Message has been sent, Thank You..!'); window.location.href='index'; </script>";
     }
 }


?>