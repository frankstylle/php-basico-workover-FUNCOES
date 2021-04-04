<?php

  $texto = "Curso de PHP";
  $nome="Franklin";
  $canal="vlog do fessor Bruno";

  echo "<a href=pg1.php?tx=".urlencode($texto)."&no=".urlencode($nome)."&cn=".urlencode($canal)." target=_self>Abre pg1</a>";
?>

