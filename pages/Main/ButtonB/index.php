<?php   
  include('../../../config/checkSessions.php');
  $sessions = new CheckSession();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="container">
    <div class="topo">
      <a href="http://localhost/www/exercicio/pages/Main/main.php"><- Voltar</a>
      <h2>Coloque um valor numérico xD</h2>
    </div>

    <div class="form">
      <input id="nro" type="number" placeholder="Digite um valor">   
      <input id="buttonNro" type="button" value="Enviar">
    </div>

    <div id="retorno" class="retorno">

    </div>
  </div>
</body>
</html>

<script src="./script.js"></script>
