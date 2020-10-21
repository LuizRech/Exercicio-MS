<?php
  include('./db/config.php');
  $site = new Config();
  $conn = $site->getDB();

  session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mini Aplicacao LR</title>
  <link rel="stylesheet" href="./styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body>
  <div id="register">
    registrar
  </div>
  <div id="login">
    login
  </div>
  <div class="container">
    <!--REGISTRO-->
    <div class="registerContent" id="registerContent">
      <h1>Register</h1>

      <form method="POST" class="formRegister" id="formRegister">
        <div class="name">
          <input type="text" name="name" id="name" placeholder="Name" required>
        </div>
        
        <div class="username">
          <input type="text" name="username" id="username" placeholder="Username"required>
        </div>
        
        <div class="password">
          <input type="password" name="password" id="password" placeholder="Password" required>
        </div>

        <input class="btnSubmit" type="submit">
      </form>
    </div>

    <!--LOGIN-->

    <div class="loginContent" id="loginContent">
      <h1>Login</h1>

      <form method="POST" class="formLogin" id="formLogin">
        <div class="username">
          <input type="text" name="username" id="username" placeholder="Username"required>
        </div>
        
        <div class="password">
          <input type="password" name="password" id="password" placeholder="Password" required>
        </div>

        <input class="btnSubmit" type="submit">
      </form>
    </div>

  </div>
</body>
</html>

<script src="./index.js"></script>