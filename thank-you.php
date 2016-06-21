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
    
    // Send the email
    if($mailgun_result->http_response_code == 200) {
      echo '<!DOCTYPE html>
        <html lang="en">
          <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Ajax</title>
            <link rel="shortcut icon" href="images/favicon.ico"/>

            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

            <link rel="stylesheet" type="text/css" href="css/style.css">

            <script src="https://use.fontawesome.com/ab39f92078.js"></script>

            <!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
              <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->

          </head>
          <body>
            <div class="container">
              <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                  <p>&nbsp;</p>
                  <p>&nbsp;</p>
                  <h2>Thank You!</br> Your message has been sent.</h2>
                  <p>
                    <a class="btn btn-primary" href="/" role="button">Home page</a>
                  </p>
                </div>
              </div>
            </div>
          </body>
        </html>';
    } 
    else {
      echo "Oops! Something went wrong and we couldn't send your message.";
      exit(); 
    }

  }
  else {
    // Redirect to 404 page
    header("Location: 404.html");
    exit();
  }

?>
