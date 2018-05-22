<?php
  session_start();
  include "db.php";


  $con=conexao();
  $nome=$_POST['Nome'];
  $email=$_POST['Email'];

  $consulta = "INSERT INTO Contato(Nome,Email) VALUES ('$nome','$email')";

  $resultado = $con->query($consulta);

  //$resultado->close();
  //$con->close();

  if($resultado){
    header("Location:index.php");
  }else{
    header("Location:error.php");
  }
 ?>
