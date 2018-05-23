<?php
  session_start();
  include "db.php";


  $con=conexao();
  $nome=$_POST['Nome'];
  $email=$_POST['Email'];
  $id=$_POST['id'];

  $consulta = "UPDATE contato SET Nome :='$nome', Email:='$email' where contato.ID='$id' ";

  $resultado = $con->query($consulta);

  //$resultado->close();
  //$con->close();

  if($resultado){
    header("Location:index.php");
  }else{
    header("Location:error.php");
  }
 ?>
