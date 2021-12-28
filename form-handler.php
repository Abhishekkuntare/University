<?php
$name = $_POST['name'];                   #store the name form contact form
$visitor_email = $_POST['email'];        #store the email form contact form
$subject = $_POST['subject'];           #store the subject form contact form
$message = $_POST['message'];          #store the message form contact form

$email_form = 'abhishekkuntare7@gmail.com';     #email id of wedsite 

$email_subject = 'New form Submission';        #email id subject we can write any subject

$email_body = "User Name: $name. \n".              #recive the user name
               "User Email: $visitor_email.\n".      #recive the user email
                "Subject: $subject.\n".               #recive the user subject
                 "User Message: $message.\n";          #recive the user message

$to = 'abhishekkuntare@7gmailcom';               #your email id to recive the user 
                                                    # information
$headers = "Form: $email_form \r\n";     

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);        #all the information send in email id

header("Location: contact.html");               #location of your page 

?>