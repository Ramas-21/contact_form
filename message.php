<?php
// getting all form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$website = $_POST['website'];
$message = $_POST['message'];

if(!empty($email) && !empty($message)){ 
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $receiver = "$email";
        $subject = "From: $name <$email>";
        $body = "Name: $name\nEmail: $email\nphone: $phone\nwebsite: $website\nMessage: $message\n\nRegards, \n$name";
        $sender = "From: $email";

        if(mail($receiver, $subject, $body, $sender)){
            echo "Your message has been sent";
        }
        else{
            echo "Sorry, your message has not been sent";
        }
    }
    else{
        echo "Enter a valid email address";
    }
}else{
    echo "Email and name fields are required";
}
?>