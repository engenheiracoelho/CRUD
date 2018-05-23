<?php
    session_start();
    include "db.php";
?>

<html>
<head>
  <title>Título</title>
  <meta charset="utf-8">
</head>
<body>
  <h1>Meus contatos</h1>
  <hr>
  <table>
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Email</th>
    </tr>
    <?php
      $con = conexao();
      if ($con){
        $consulta = "SELECT * FROM contato";
        $resultado = $con->query($consulta);

        while($linha = $resultado->fetch_assoc()){
            printf("<tr>\n<td><a href='editar.php?id=%s'>%s</td>\n<td>%s</td>\n<td>%s</td></tr>",$linha['ID'],$linha['ID'],$linha['Nome'],$linha['Email']);
        }
      }
    ?>
  </table>
</body>
</html>
