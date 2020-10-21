<?php 
  include('./db/config.php');

  $site = new Config();
  $conn = $site->getDB();

  $name     = preg_replace('/[^[:alpha:]\s+]/', '',$_POST['name']);
  $username = preg_replace('/[^[:alpha:]\s+]/', '',$_POST['username']);
  $password = preg_replace('/[^[:alpha:]\s+]/', '',$_POST['password']);

  $response = array();

  //verificar se o utilizador já existe
  $sql = "SELECT username FROM `lrech`.`users` WHERE username = '".$username."'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $response['error'] = "Usuário já cadastrado";
    exit(json_encode($response));
  }

  if($name === "" || $username === "" || $password === ""){
    $response['error'] = "Dados inválidos";
    exit(json_encode($response));
  }

  //se utilizador não existe, ele insere
  $sql = 'INSERT INTO `lrech`.`users` (
      name,
      username,
      password
  ) VALUES (
      "'.$name.'",
      "'.$username.'",
      "'.$password.'"
  )';

  if(mysqli_query($conn, $sql)){
    if ( session_status() !== PHP_SESSION_ACTIVE ){
      session_start();
    }

    $_SESSION['name'] = $name;
    $_SESSION['username'] = $username;

    $response['success'] = "usuarioCadastrado";
    exit(json_encode($response));

  }else{
    $response['error'] = "Error: " . $sql . "<br>" . mysqli_error($conn);
    exit(json_encode($response));
  }

  $conn->close();
?>
