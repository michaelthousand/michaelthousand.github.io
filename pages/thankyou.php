<?php 
if(isset($_POST['submit'])){
    $to = "me@michaelthousand.com"; // my email
    $name = $_POST['name']; //name input
    $from = $_POST['emailInput']; // email input
    $phone = $_POST['phoneInput']; //phone input
    $preference = $_POST['contactPreference']; //contact preference input
    $reason = $_POST['reason']; //reason for submitting input
    $subject = "New submission on your site!" //subject line for me
    $subject2 = "Your message was submitted successfully!"; // confirmation for user
    
    //email body
    $message = "Submitter name: " . $name . "\n"
    . "Phone number: " . $phone . "\n"
    . "Email: " . $from . "\n\n"
    . "Contact preference: " . $preference . "\n\n"
    . "Reason for submitting: " . $reason . "\n\n"
    . "Message: " . "\n" . $_POST['message'];

    // message for the user
    $message2 = "Dear " . $name . ",\n"
    . "Thank you for contacting me. I will get back to you shortly!" . "\n\n"
    . "You submitted the following message: " . "\n" . $_POST['message'] . "\n\n"
    . "Regards," . "\n" . "Michael Thousand";

    //email headers
    $headers = "From: " . $from; //user email address in email received
    $headers2 = "From: " . $to; //my email address for the message the user will receive

    //php mailer function

    $result1 = mail($mail, $subject, $message, $headers); //email sent to me
    $result2 = mail($from, $subject2, $message2, $headers2); //email sent to the user

    //check if mail sent successfully

    if ($result1 && result2) {
        $success = "Your message was sent successfully!";
    } else { 
        $failed = "Sorry! Your message was not sent. Please try again later."
    }
    
    } 
?>

