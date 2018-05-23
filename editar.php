<?php
  session_start();
  include "db.php";
  $id= $_GET['id'];

  $con = conexao();
  $consulta = "SELECT * FROM contato c where c.ID=$id";
  $resultado = $con->query($consulta);

  $linha = $resultado->fetch_assoc();
  $nome = $linha['Nome'];
  $email = $linha['Email'];
?>

<html>
<head>
  <title>Título</title>
  <meta charset="utf-8">
</head>
<body>
  <h1>Atualizar contato</h1>
  <form action="e.php" method="post">
  <input type="hidden" name="id" value "<?php echo $id; ?>" />
    <p>Nome:
    <br><input type="text" name="Nome" value="<?php echo $nome; ?>" />
    <p>Email:
    <br><input type="text" name="Email" value="<?php echo $email; ?>"/>
    <input type="submit" value="Atualizar" />
</body>
</html>
