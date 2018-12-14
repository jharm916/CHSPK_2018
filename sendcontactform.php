<?php

if (isset($_POST['submit'])){
    
    
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];
    
    $mailTo = "contact@chesapeakmusic.com";
    $headers = "Via chesapeakmusic.com From: ".$mailFrom;
    $text = "Email message received from ".$name.".\n\n".$message;
    
    
    mail($mailTo,$text,$headers);
    header("Location: index.php?mailsend");
    

}

?>