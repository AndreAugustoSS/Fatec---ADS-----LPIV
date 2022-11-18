<!doctype html>
<html lang="pt-BR">
  <head>
    <title>Include e Require</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </head>
  <body class="bg-dark text-light text-left aumenta">

<?php 
# Para fazer o 'Logout' de seções em PHP é preciso
# utilizar funções de finalização.
session_start();
session_unset();
session_destroy();

echo "<p>Logout de SESSION de PHP </P>";

?> 