<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'info@equinecremationservices.co.uk';

$email_subject = 'Messsage from Cremation Site';

$email_body = "UserName: $name.\n".
                "User Email: $visitor_email.\n".
                    "Message: $message.\n";

$to = 'mark_fuller_69@hotmail.co.uk.co.uk';

$headers = "From: $email_from \r\n";

$headers .="Reply-To: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");



?>