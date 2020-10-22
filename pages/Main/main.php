<?php   
  include('../../config/checkSessions.php');
  $sessions = new CheckSession();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
  <h2>Bem vindo(a) <?php echo $_SESSION['name'];?></h2>
  
  <div class="container">
    <div class="buttonA" id="buttonA">
      <h3>Botão A</h3>
      <p>Mostrar primeiro e o penúltimo nome</p>
    </div>

    <div class="buttonB" id="buttonB">
      <h3>Botão B</h3>
      <p>Ter um formulário para utilizador poder colocar um valor numérico. Depois da submissão desse valor, gerar N strings únicas de 10 caracteres aleatórios consoante o número submetido, sabendo que a segunda posição terá que ser a letra A e a nona posição será um B.</p>
    </div>
  </div>
</body>
</html>

<script>
  //Mostrar o valor do nome - Botao A
  $("#buttonA").click(function() {
    var name = '<?php echo $_SESSION['name'];?>';

    if(name.indexOf(' ') >= 0){
      resultado = name.split(" ");
      var penultimoNome = resultado.length > 2 ? resultado[resultado.length - 2] : resultado[1];
      alert(resultado[0] + " " + penultimoNome);
    }else{
        alert(name)
    }
  });

  //Botao B
  $("#buttonB").click(function() {
      window.location.replace("http://localhost/www/exercicio/pages/Main/ButtonB/index.php");
  });
</script>