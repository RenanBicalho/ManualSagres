<?php
 function conn_mysql(){

   $servidor = 'localhost';
   $porta = 3306;
   $banco = 'topicos';
   $usuario = "root";
   $senha = "root";

      $conn = new PDO("mysql:host=$servidor;
  	                   port=$porta;
          					   dbname=$banco",
          					   $usuario,
          					   $senha);
      return $conn;
   }
?>
