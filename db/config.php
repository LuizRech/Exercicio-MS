<?php

  class Config {
    public $teste;
    public $conn;

    function __construct(){
      //conexao com db
      $servername = "svr-dev";
      $username = "MSDEV";
      $password = "12345";

      $conn = new mysqli($servername, $username, $password);

      // Checar conexão
      if ($conn->connect_error) {
          die("Erro ao conectar no banco de dados");
      }

    $this->conn = $conn;

    }

    function getDB(){
      return $this->conn;  
    }
  }

?>