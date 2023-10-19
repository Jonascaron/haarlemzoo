<?php

require 'database.php';

if (!isset($_POST['email']) || !isset($_POST['password']) || !isset($_POST['name'])) {
  echo "een veld is niet aangemaakt";
  exit;
}

if (empty($_POST['email']) || empty($_POST['password']) || empty($_POST['name'])) {
  echo "een veld is niet ingevuld";
  exit;
}

$email = $_POST['email'];


if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo "niet een goed email in gevoord";
  exit;
}

$stmt = $conn->prepare("SELECT email FROM user WHERE email = :email");
$stmt->bindParam(':email', $email);
$stmt->execute();

if ($stmt->rowCount() != 0) {
  echo "dit emailadres is al in gebruik";
  exit;
}

$password = $_POST['password'];

$hashed_password = password_hash($password, PASSWORD_DEFAULT);
include "functions.php";

$key = generateConfirmationKey(40);


try {
  // prepare sql and bind parameters
  $stmt = $conn->prepare("INSERT INTO user (name, email, password, user_key) VALUES (:name, :email, :password, :key)");
  $stmt->bindParam(':name', $name);
  $stmt->bindParam(':email', $email);
  $stmt->bindParam(':password', $hashed_password);
  $stmt->bindParam(':key', $key);

  var_dump($key);

  $name = $_POST['name'];
  if ($stmt->execute()) {
    echo 'je bent geregristreerd';
    include "send_email.php";
  }
} catch (PDOException $e) {

  echo "SQL Error: " . $e->getMessage();
}
