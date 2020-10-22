<?php
  class CheckSession {
    function __construct (){
      //iniciar sessions
      session_start();

      //Verifica se está logado
      $valor = isset($_SESSION['name']) ? 'S' : 'N';
      
      if($_SERVER['REQUEST_URI'] !== "/www/exercicio/"){
        if($valor === "N"){
          header("Location: http://localhost/www/exercicio");   
        }
      }
    }
  }
?>