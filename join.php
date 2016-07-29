<?php
$email = $_POST['email'];
$city = $_POST['city'];
$country = $_POST['country'];
$to = "contribute@greenthegene.org";
$subject = "JOIN IN FROM GreentheGene.org home page";

mail ($to, $subject, $city, $country, "From:$email"  );
include 'home.html'
?>