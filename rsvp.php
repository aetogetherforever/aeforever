<?php 
if(isset($_POST['submit'])){
    $to = "amaliaevanforever@gmail.com";
    $name = $_POST['name'];
    $subject = "New RSVP ($name)";
    $message = $name . " rsvp'd to your reception for July13th, 2024." . "\n\n" . "How many are Attending? " . $_POST['headCount'] . "\n\n" . "Do you like pizza? " . $_POST['Pizza?']  . "\n\n" . "Comments?" . $_POST['comments'];

    mail($to,$subject,$message);
    }
?>