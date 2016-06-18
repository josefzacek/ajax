<?php

  require 'vendor/autoload.php';
  use Mailgun\Mailgun;

  // Only process POST requests
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $client = new \Http\Adapter\Guzzle6\Client();
    $mailgun = new \Mailgun\Mailgun('MAILGUN_API_KEY_HERE', $client);
    $domain = "MAILGUN_DOMAIN_NAME_HERE";

    //Customise the email
    $mailgun->sendMessage($domain, array(
    'from'=>'contact-form@ajax.josefzacek.cz',
    'to'=> 'info@josefzacek.com',
    'subject' => 'Test',
    'text' => 'Testing'
        )
    );
    
  }
  else {
    header("Location: 404.html"); /* Redirect browser */
    exit();
  }

?>
