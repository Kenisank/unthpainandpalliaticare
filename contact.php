<?php

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $mailFrom= $_POST['mail'];
    $message=$_POST['message'];


    $mailTo= "Kenisank1@gmail.com";
    $subject ="Site Mail Alert";
    $headers = "From: ".$mailFrom;
    $text= "New email from ".$name.".\n\n\n".$message;

    mail($mailTo, $subject, $text, $headers);
    header("Location: index?sent");

}

