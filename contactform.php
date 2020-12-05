<?php

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $mailFrom= $_POST['mail'];
    $message=$_POST['message'];


    $mailTo= "info@unnepacteamunth.com";
    $subject ="Site Mail Alert";
    $headers = "From: ".$mailFrom;
    $text= "New email from ".$name.".\n\n\n".$mailFrom.".\n\n\n".$message;

    $sent=mail($mailTo, $subject, $text, $headers);

   



    // Check, if message sent to your email 
// display message "We've recived your information"
// if($sent){
    header("Location: index.php?sent");
    
//     }
//     else {
// echo "ERROR";
//     }
 
}

