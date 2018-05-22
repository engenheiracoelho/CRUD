<?php
  //session_start();

  function conexao(){//Quando conectar no banco já retorna a conexão.
    $host="127.0.0.1";
    $database="aula";
    $password="";
    $usuario="root";

    $con= new mysqli($host,$usuario,$password,$database); //Cria instancia da classe

    if ($con->connect_errno){ //Busca conexao
        return false;
    }

    return $con; //Retorna a conexao

  }
?>
