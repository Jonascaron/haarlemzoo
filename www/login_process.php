<?php

require 'database.php';

if(isset($_POST['email']) && !empty($_POST['email'])  ) {
  if(isset($_POST['password']) && !empty($_POST['password'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $stmt = $conn->prepare("SELECT * FROM user WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    if($stmt->rowCount() > 0) {
      $myGuests = $stmt->fetch(PDO::FETCH_ASSOC);
      
      if(password_verify($password, $myGuests['password'])) {
        session_start();
        $_SESSION['logedin'] = true;
        $_SESSION['id'] = $myGuests['user_id'];
        $_SESSION['name'] = $myGuests['name'];
        
        header('location: dashbord.php');
        exit;
      }
    } else {
      $stmt = $conn->prepare("SELECT * FROM admin WHERE email = :email");
      $stmt->bindParam(':email', $email);
      $stmt->execute();

      if($stmt->rowCount() > 0) {
        $myGuests = $stmt->fetch(PDO::FETCH_ASSOC);
      
        if(password_verify($password, $myGuests['password'])) {
          session_start();
          $_SESSION['logedin'] = true;
          $_SESSION['id'] = $myGuests['admin_id'];
          $_SESSION['name'] = $myGuests['name'];
          
          header('location: dashbord.php');
          exit;
        }
      } else {
        echo "de email is niet goed";
        exit;
      }
    }
  }
}