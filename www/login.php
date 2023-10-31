<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="container">
    <p class="title">login</p>
    <form action="login_process.php" method="POST" class="form">
      <div class="input-group">
        <input type="email" placeholder="Email" name="email" required>
      </div>
      <div class="input-group">
        <input type="password" placeholder="Wachtwoord" name="password" required>
      </div>
      <div class="input-group">
        <button name="submit" class="btn">Inloggen</button>
      </div>
      <p class="login-register-text">Geen account? <a href="register.php">Registreer hier.</a></p>
    </form>
  </div>
</body>

</html>