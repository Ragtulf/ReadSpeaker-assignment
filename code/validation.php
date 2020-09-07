<?php

$full_name_err = $email_err = $email_repeated_err = $country_err = $language_err = $password_err = $password_err_second = $password_repeated_err = "";
$full_name = $email = $email_repeated = $country = $language = $password = $password_repeated = "";

$upper_case = preg_match('@[A-Z]@', $password);
$lower_case = preg_match('@[a-z]@', $password);
$digit = preg_match('@[0-9]@', $password);
$special_character = preg_match('@[^\w]@', $password);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["full_name"])) {
    $full_name_err = "full_name";
  } else {
    $full_name = test_input($_POST["full_name"]);
  }

  if (empty($_POST["email"])) {
    $email_err = "email";
  } else {
    $email = test_input($_POST["email"]);
  }

  if (empty($_POST["email_repeated"])) {
    $email_repeated_err = "email_repeated";
  } else {
    $email_repeated = test_input($_POST["email_repeated"]);
  }

  if (!isset($_POST["country"])) {
    $country_err = "country";
  } else {
    $country = test_input($_POST["country"]);
  }

  if (!isset($_POST["language"])) {
    $language_err = "language";
  } else {
    $language = test_input($_POST["language"])
  }

  if (empty($_POST["password"])) {
    $password_err = "password";
  } else if (!$upper_case || !$lower_case || !$digit || !$special_character || strlen($password) < 10) {
    $password_err_second = "Password should be at least 10 characters in length and should include at least one upper case letter, one lower case letter, one digit and one special character";
  } else {
    $password = test_input($_POST["password"]);
  }

  if (empty($_POST["password_repeated"])) {
    $password_repeated_err = "password_repeated";
  } else {
    $password_repeated = test_input($_POST["password_repeated"]);
  }

  if ($full_name_err || $email_err || $email_repeated_err || $country_err || $language_err || $password_err || $password_repeated_err) {
    echo "Validation failed" .(if ($full_name_err){
      $full_name_err
    });
  }
}

function test_input($data) {
  $data = trim($data);
  $data = striplashes($data);
  $data = htmlspecialchars($data);
  return $data;
}