
<?php
  $name = $_POST['name'];
  $message = $_POST['message'];

  $email_from = 'garymarie@garymarie.com';

  $email_subject = "New RSVP";

  $email_body = "You have received a new message from the user $name.\n".
                            "Here is the message:\n $message".

  $to = "marie-farrell16@hotmail.com, genglishgroup@gmai.com";

  $headers = "From: $email_from ";

  mail($to,$email_subject,$email_body,$headers);
?>


