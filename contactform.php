<?php
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $mailTo = "info@yobanimendoza.com";
  $headers = "From: ".$email;
  $txt = "You have received an e-mail from ".$name. ".\n\n".$message;

  mail($mailTo, $message, $txt, $headers);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <title>Yobani Mendoza's Portfolio</title>
    <!-- Mobile Specific Metas
================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Global site tag (gtag.js) - Google Analytics
    =========================================================-->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-113041120-1"></script>
    <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-113041120-1');
    </script>

        <!-- CSS
    ================================================== -->
    <link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">
        <script src="https://use.fontawesome.com/a540518289.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet"  href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="shortcut icon" type="image/ico" href="images/favicon.ico">
</head>
<!-- NAV BAR
================================== -->
<body id="pagetwo">

<nav class="navbar navbar-expand-lg transparentcontact navbar-dark p-3 fixed-top">
    <a class="navbar-brand" href="index.php">Yobani Mendoza</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php#portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php#social">Social Media</a>
            </li>
        </ul>
    </div>
</nav>

<h1>Your message has been received</h1>

<!-- Footer
================ -->
<section id="footer" class="p-5 bg-secondary">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <p class="text-black text-capitalize">&copy;2017 Yobani
                    Mendoza</p>
            </div>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
</body>
</html>
