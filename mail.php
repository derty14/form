<?php

$recepient = "mypost@gmail.com";
$sitename = "my site";
$name = trim($_POST["name"]);
$tel = trim($_POST["tel"]);
$text = trim($_POST["message"]);
$message =  "Name: $name \nPhone: $tel \nMessage: $text ";
$pagetitle = "new application from the \"$sitename\"";  
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
header('Location: /');
?>
