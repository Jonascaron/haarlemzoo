<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="img/favicon.ico" rel="icon">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Quicksand:wght@600;700&display=swap" rel="stylesheet"> 

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <link rel="stylesheet" href="css/register.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Document</title>
</head>
<body>
  <div class="container">
    <p class="title">register</p>
    <form action="register_process.php" method="POST" class="form">
      <div class="input-group">
        <input type="name" placeholder="naam" name="name" required>
      </div>
      <div class="input-group">
        <input type="email" placeholder="Email" name="email" required>
      </div>
      <div class="input-group">
        <input type="password" placeholder="Wachtwoord" name="password" required>
      </div>
      <div class="input-group">
        <button name="submit" class="btn">Registreren</button>
      </div>
      <p class="login-register-text">Heb je een account? <a href="login.php">log hier in.</a></p>
    </form>
  </div>
</body>
</html>