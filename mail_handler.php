<?php
if(isset($_POST['submit'])){
    $to = "gentileggiuseppe@gmail.com";
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $quantity = $_POST['person_quantity'];
    $allergie = $_POST['allergie'];
    $headers = "From:" . $from;
    $message = $name . " in " . $quantity . " allergie: " $allergie;  
    mail($to, "Form matrimonio", $message ,$headers);

}



?>



