<?php

// define variables and set them empty values
$first_name_error = $last_name_error = $email_error = $telephone_error = $chBox_error = "";
$first_name = $last_name = $email = $telephone = $success = $message = "";
$chBox = 0;

//form is submitted with POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["first_name"])) {
    $first_name_error = "Prosím, vyplnte meno";
  } else {
    $first_name = test_input($_POST["first_name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Zá-žÁ-Ž ]*$/",$first_name)) {
      $first_name_error = "Použite iba písmená a znaky";
    }
  }

  if (empty($_POST["last_name"])) {
    $last_name_error = "Prosím, vyplnte priezvisko";
  } else {
    $last_name = test_input($_POST["last_name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Zá-žÁ-Ž ]*$/",$last_name)) {
      $last_name_error = "Použite iba písmená a znaky";
    }
  }

  if (empty($_POST["email"])) {
    $email_error = "Prosím, vyplnte email";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $email_error = "Nesprávny formát emailu";
    }
  }

  if (empty($_POST["telephone"])) {
    $telephone_error = "Prosím, vyplnte tel. číslo";
  } else {
    $telephone = test_input($_POST["telephone"]);
    // check if telephone number contains only numbers or +numbers
    if (!preg_match("/^[0-9]{10}|\+[0-9]{12}$/",$telephone)) {
      $telephone_error = "Nesprávny formát tel. čísla";
    }
  }

   if (isset($_POST["chBox"])) {
    $chBox = test_input($_POST["chBox"]);
  } else {
    $chBox_error = "Pre odoslanie formulára, musíte súhlasiť s podmienkami!";
  }

  if ($first_name_error == '' and $last_name_error == '' and $email_error == '' and $telephone_error == '' and $chBox_error == '' ){
     unset($_POST['submit']);

    $to = "YOUR_EMAIL@gmail.com"; // this is your Email address
    $ccemail = "EMAILforCOPY@gmail.com"; // this is Email address for CC
    $subject = "Bory Byvanie - Kontaktný formulár";
    $message = "Kontaktné údaje záujemcu (Bory Bývanie): " . "\n\n" . "Meno: " . $first_name . "\n" . "Priezvisko: " . $last_name . "\n" . "Telefónne číslo: " . $telephone . "\n" . "CheckBox: " . $chBox ."\n\n";

    $headers = "From:" . $email . "\r\n";
    $headers .= "Cc:" . $ccemail . "\r\n";
    mail($to,$subject,$message,$headers);


    if (mail($to,$subject,$message,$headers)){
        $success = "Ďakujeme. Údaje boli odoslané, budeme vás kontaktovať.";
        $first_name = $last_name = $email = $telephone = $message = '';
    }
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}