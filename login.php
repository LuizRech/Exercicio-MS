<?php 
  include('./db/config.php');

  $site = new Config();
  $conn = $site->getDB();

  $username = $_POST['username'];
  $password = md5($_POST['password']);

  $response = array();

  //verificar se o utilizador já existe
  $sql = "SELECT name, username 
    FROM `lrech`.`users` 
    WHERE username = '".$username."'
    AND password = '".$password."'";

  $result = $conn->query($sql);

  if ($result->num_rows === 1) {
    if ( session_status() !== PHP_SESSION_ACTIVE ){
      session_start();
    }

    $_SESSION['name'] = $name;
    $_SESSION['username'] = $username;

    $response['success'] = "usuarioLogado";
    exit(json_encode($response));

  }else{
		$response['error'] = "Erro ao logar";
		exit(json_encode($response));
  }

  $conn->close();
?>
