<html>
	<body>
		
		<?php

$formMessage = "";
$senderName = "";
$senderEmail = "";
$senderMessage = "";

if ($_POST['username']) { // If the form is trying to post value of username field
 
    // Gather the posted form variables into local PHP variables
    $senderName = $_POST['username'];
    $senderEmail = $_POST['email'];
    $senderMessage = $_POST['msg'];
    // Make sure certain vars are present or else we do not send email yet
    if (!$senderName || !$senderEmail || !$senderMessage) {
 
         $formMessage = "The form is incomplete, please fill in all fields.";
 
    } else { // Here is the section in which the email actually gets sent

        // Run any filtering here
        $senderName = strip_tags($senderName);
        $senderName = stripslashes($senderName);
        $senderEmail = strip_tags($senderEmail);
        $senderEmail = stripslashes($senderEmail);
        $senderMessage = strip_tags($senderMessage);
        $senderMessage = stripslashes($senderMessage);
        // End Filtering
        $to = "jmccarthy175@gmail.com";         
        $from = "contact@your_website_here.com";
        $subject = "You have a message from your website";
        // Begin Email Message Body
        $message = "
        $senderMessage

        $senderName
        $senderEmail
        ";
        // Set headers configurations
        $headers  = 'MIME-Version: 1.0' . "rn";
        $headers .= "Content-type: textrn";
        $headers .= "From: $fromrn";
        // Mail it now using PHP's mail function
        mail($to, $subject, $message, $headers);
        $formMessage = "Thanks, your message has been sent.";
        $senderName = "";
        $senderEmail = "";
        $senderMessage = "";
    } // close the else condition

} // close if (POST condition
?>

	</body>
</html>