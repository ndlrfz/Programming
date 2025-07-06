<?php

// FIRST if and nested
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Second if
  // additional checking
  // empty() function to check if the target value is empty
  if (empty($_POST["lastname"])) {
    echo "Please enter your Last Name";
  } elseif (empty($_POST["firstname"])) {
    echo "Please enter your First Name";
    // if email is empty
    // OR
    // email is not met with the FILTER_VALIDATE_EMAIL
  } elseif ((empty($_POST["email"])) || !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    echo "Please enter valid Email";
  } elseif (empty($_POST["country"])) {
    echo "Please select your Country";
  } else {

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
    }
  }

// this is part of the FIRST if
  else {
    echo "Unauthorized access.";
  }
