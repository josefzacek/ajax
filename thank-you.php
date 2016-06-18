<?php

  require 'vendor/autoload.php';
  use Mailgun\Mailgun;

  // Process POST requests only
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Mailgun setup
    $client = new \Http\Adapter\Guzzle6\Client();
    $mailgun = new \Mailgun\Mailgun('MAILGUN_API_KEY_HERE', $client);
    $domain = "MAILGUN_DOMAIN_NAME_HERE";

    // Get the form fields and remove whitespace
    $firstname = strip_tags(trim($_POST["firstname"]));
    $lastname = strip_tags(trim($_POST["lastname"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $phone = strip_tags(trim($_POST["phone"]));
    $message = trim($_POST["message"]);

    // Set the sender email address
    $sender = "contact-form@ajax.josefzacek.cz";

    // Set the recipient email address
    $recipient = "info@josefzacek.com";

    // Set the email subject
    $subject = "Ajax website contact form";

    // Build the email content
    $email_content = "Firstname: " . $firstname . "\n";
    $email_content .= "Lastname: " . $lastname . "\n";
    $email_content .= "Email: " . $email . "\n";
    $email_content .= "Phone: " . $phone . "\n";
    $email_content .= "Message: " ."\n".$message;                    

    // Pass form details to Mailgun
    $mailgun_result = $mailgun->sendMessage($domain, array(
      'from'=> $sender,
      'to'=> $recipient,
      'subject' => $subject,
      'text' => $email_content
    ));
    
  }
  else {
    header("Location: 404.html"); /* Redirect browser */
    exit();
  }

?>
