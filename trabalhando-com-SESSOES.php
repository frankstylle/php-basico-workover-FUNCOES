<?php

  session_start();                    // INICIA UMA SESSÂO
  $_SESSION['vnome']= 'Bruno';
  $_SESSION['vtexto']= "texto para teste";
  $_SESSION['vlog']="s";

  //unset($_SESSION['vnome']);          //unset() - DELETA VARIAVEL INDICADA DENTRO DE ()

  echo $_SESSION['vnome'] . "<br>";
  echo $_SESSION['vtexto'];

  if(isset($_SESSION['vcanal'])){
    echo "<br />".$_SESSION['vcanal'];
  }else {
    echo "<br />Variavel vcanal NÃO foi definida";
  }

session_destroy();        // FINALIZA SESSÂO

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aula 19 de PHP - Sessões</title>
</head>
<body>
  <br />
  <a href="pg2.php" target="_self">Segunda Página</a>

</body>
</html>
