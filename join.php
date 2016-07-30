<?php
$email = $_POST['email'];
$city = $_POST['city'];
$country = $_POST['country'];
$to = "greenthegene@gmail.com";
$subject = "Sign up on greenthegene.org home page";

mail ($to, $subject, $city, $country, "From:$email"  );
include 'home.html'
?>
