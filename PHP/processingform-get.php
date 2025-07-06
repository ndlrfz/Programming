<?php

// Disadvantages using GET methods:
// Data is seen in the URL bar
// Data size limit
// Data security
if ($_SERVER["REQUEST_METHOD"] == "GET") {

  // additional checking
  if (empty($_GET["lastname"])) {
    echo "Please enter your Last Name";
  } elseif (empty($_GET["firstname"])) {
    echo "Please enter your First Name";
  } elseif ((empty($_GET["email"])) || !filter_var($_GET["email"], FILTER_VALIDATE_EMAIL)) {
    echo "Please enter valid Email";
  } elseif (empty($_GET["country"])) {
    echo "Please select your Country";
  } else {

    // Retrieve form data
    $lastname = $_GET["lastname"];
    $firstname = $_GET["firstname"];
    $email = $_GET["email"];
    $country = $_GET["country"];

    // Example of data processing (display)
    echo "Last Name : " . $lastname . "<br>";
    echo "First Name : " . $firstname . "<br>";
    echo "Email : " . $email . "<br>";
    echo "Country : " . $country . "<br>";
    }
  }

  else {
    echo "Unauthorized access.";
  }
