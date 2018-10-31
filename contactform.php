<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $mailTo = "info@yobanimendoza.com";
  $headers = "From: ".$email;
  $txt = "You have received an e-mail from ".$name. ".\n\n".$message;

  mail($mailTo, $message, $txt, $headers);
  header("Location: form.php?mailsend")
