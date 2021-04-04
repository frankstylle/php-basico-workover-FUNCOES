<?php

  $dia = date("d");
  $mes = date("m");
  $ano = date("Y");

  $meses = Array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");

  $hora = date("h"); // h:12horas  -  H: 24horas
  $minuto = date("i");
  $segundo = date("s");

  
  echo $dia . " de " . $meses[$mes-1] . " de " . $ano . "<br />";
  echo $hora. ":" . $minuto . ":" . $segundo;



?>

