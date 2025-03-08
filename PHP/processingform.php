<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Retrieve form data
  $lastname = $_POST["lastname"];
  $firstname = $_POST["firstname"];
  $email = $_POST["email"];
  $country = $_POST["country"];

// Example of data processing (display)
  echo "Last Name : " . $lastname . "<br>";
  echo "First Name : " . $firstname . "<br>";
  echo "Email : " . $email . "<br>";
echo "Country : " . $country . "<br>";

} else {
  echo "Unauthorized access.";
}
