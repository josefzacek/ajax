<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="www.josefzacek.com">
    <title>Ajax</title>
    <link rel="shortcut icon" href="images/favicon.ico"/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    
    <link rel="stylesheet" type="text/css" href="css/lightbox.min.css<?php echo '?' . filemtime('css/lightbox.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="css/style.css<?php echo '?' . filemtime('css/style.css'); ?>">

    <script src="https://use.fontawesome.com/ab39f92078.js"></script>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-79210660-1', 'auto');
      ga('send', 'pageview');
    </script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>
  
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a onclick="ga('send', 'pageview', {'page': '/index','title': 'Home Page'});" href="index" class="pull-left"><img src="/images/logo.png"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a onclick="ga('send', 'pageview', {'page': '/index','title': 'Home Page'});" href="index">Home</a></li>
            <li><a onclick="ga('send', 'pageview', {'page': '/about','title': 'About Page'});" href="about">About</a></li>
            <li><a onclick="ga('send', 'pageview', {'page': '/gallery','title': 'Gallery Page'});" href="gallery">Gallery</a></li>
            <li><a onclick="ga('send', 'pageview', {'page': '/contact','title': 'Contact Page'});" href="contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container wrapper">
      <!-- content gets injected here -->
    </div>

    <div class="container">
      <hr>
      <footer class="footer">
        <p class="pull-right">Created by <a href="http://josefzacek.com" target="_blank">josefzacek.com</a></p>
      </footer>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="javascript/lazyload.js"></script>
    <script src="javascript/lightbox.min.js"></script>
    <script src="javascript/script.js"></script>

  </body>
</html>
