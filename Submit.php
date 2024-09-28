<?php

$first_name = $_POST["fullName"];
$last_name = $_POST["lastName"];
$email = $_POST["email"];
$password = $_POST["password"];
$date = $_POST["date"];
$yearLv1 = $_POST["year-level"];

echo "checkbox" .json_encode($POST["checkbox"]);
echo "First name: ". $first_name . "<br>";
echo "Last name: ". $last_name . "<br>";
echo "email: ". $email . "<br>";
echo "password: ". $password . "<br>";
echo "date: ". $date . "<br>";
echo "uearlv1: ". $yearLv1 . "<br>";

?>