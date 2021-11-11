<?php
error_reporting(E_ALL);

//You can also report all errors by using -1
error_reporting(-1);

//If you are feeling old school
ini_set('error_reporting', E_ALL);
?>
<?php

  // trigger_error("something happened"); //error level is E_USER_NOTICE
  //
  // //You can control error level
  // trigger_error("something bad happened", E_USER_ERROR);
?>

<?php
  require('../databases/mysql_connection.php');

  //die();

  // try {
  //   $pdo = new \PDO("sqlite:" . "../databases/database.db");
  // } catch {
  //   print_r "Fatal Error."
  // }

?>
<?php

  $var_arr = [
    "first_name" => "Joe",
    "last_name" => "Smith0",
    "email_address" => "joesmith0@gmail.com",
    "phone_number" => "0000000000",
    "username" => "joesmith0",
    "biography" => "I am Joe Smith0."
  ];

  print_r("<pre>");
  var_dump($var_arr);
  print_r("</pre>");

  try {
    $sql = "INSERT INTO participants (first_name, last_name, email_address, phone_number, username, biography) VALUES (?,?,?,?,?,?)";
    $stmt= $pdo->prepare($sql);
    $stmt->execute([$var_arr["first_name"], $var_arr["last_name"], $var_arr["email_address"], $var_arr["phone_number"], $var_arr["username"], $var_arr["biography"]]);

    //return true;
    print_r("Participants table entry entered successfully");
  //  die();
  } catch(Exception $e) {
    print_r('Message: ' .$e->getMessage());

    //return false;
    print_r("Failed to enter participants table successfully");
  //  die();
  }

  $var_arr = [
    "first_name" => "Joe",
    "last_name" => "Smith1",
    "email_address" => "joesmith1@gmail.com",
    "phone_number" => "0000000001",
    "username" => "joesmith1",
    "biography" => "I am Joe Smith1."
  ];

  print_r("<pre>");
  var_dump($var_arr);
  print_r("</pre>");

  try {
    $sql = "INSERT INTO participants (first_name, last_name, email_address, phone_number, username, biography) VALUES (?,?,?,?,?,?)";
    $stmt= $pdo->prepare($sql);
    $stmt->execute([$var_arr["first_name"], $var_arr["last_name"], $var_arr["email_address"], $var_arr["phone_number"], $var_arr["username"], $var_arr["biography"]]);

    //return true;
    print_r("Participants table entry entered successfully");
  //  die();
  } catch(Exception $e) {
    print_r('Message: ' .$e->getMessage());

    //return false;
    print_r("Failed to enter participants table successfully");
  //  die();
  }

  $var_arr = [
    "first_name" => "Joe",
    "last_name" => "Smith2",
    "email_address" => "joesmith2@gmail.com",
    "phone_number" => "0000000002",
    "username" => "joesmith2",
    "biography" => "I am Joe Smith2."
  ];

  print_r("<pre>");
  var_dump($var_arr);
  print_r("</pre>");

  try {
    $sql = "INSERT INTO participants (first_name, last_name, email_address, phone_number, username, biography) VALUES (?,?,?,?,?,?)";
    $stmt= $pdo->prepare($sql);
    $stmt->execute([$var_arr["first_name"], $var_arr["last_name"], $var_arr["email_address"], $var_arr["phone_number"], $var_arr["username"], $var_arr["biography"]]);

    //return true;
    print_r("Participants table entry entered successfully");
  //  die();
  } catch(Exception $e) {
    print_r('Message: ' .$e->getMessage());

    //return false;
    print_r("Failed to enter participants table successfully");
  //  die();
  }

  $var_arr = [
    "first_name" => "Joe",
    "last_name" => "Smith3",
    "email_address" => "joesmith3@gmail.com",
    "phone_number" => "0000000003",
    "username" => "joesmith3",
    "biography" => "I am Joe Smith3."
  ];

  print_r("<pre>");
  var_dump($var_arr);
  print_r("</pre>");

  try {
    $sql = "INSERT INTO participants (first_name, last_name, email_address, phone_number, username, biography) VALUES (?,?,?,?,?,?)";
    $stmt= $pdo->prepare($sql);
    $stmt->execute([$var_arr["first_name"], $var_arr["last_name"], $var_arr["email_address"], $var_arr["phone_number"], $var_arr["username"], $var_arr["biography"]]);

    //return true;
    print_r("Participants table entry entered successfully");
  //  die();
  } catch(Exception $e) {
    print_r('Message: ' .$e->getMessage());

    //return false;
    print_r("Failed to enter participants table successfully");
  //  die();
  }

  $var_arr = [
    "first_name" => "Joe",
    "last_name" => "Smith4",
    "email_address" => "joesmith4@gmail.com",
    "phone_number" => "0000000004",
    "username" => "joesmith4",
    "biography" => "I am Joe Smith4."
  ];

  print_r("<pre>");
  var_dump($var_arr);
  print_r("</pre>");

  try {
    $sql = "INSERT INTO participants (first_name, last_name, email_address, phone_number, username, biography) VALUES (?,?,?,?,?,?)";
    $stmt= $pdo->prepare($sql);
    $stmt->execute([$var_arr["first_name"], $var_arr["last_name"], $var_arr["email_address"], $var_arr["phone_number"], $var_arr["username"], $var_arr["biography"]]);

    //return true;
    print_r("Participants table entry entered successfully");
  //  die();
  } catch(Exception $e) {
    print_r('Message: ' .$e->getMessage());

    //return false;
    print_r("Failed to enter participants table successfully");
  //  die();
  }

  print_r("DONE");
  die();

?>
