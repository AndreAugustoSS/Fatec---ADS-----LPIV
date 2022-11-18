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
# O objetivo do teste é o de verificar que o conteúdo
# criado na seção (no programa "1-Sessao.php") continua exisitindo
# e pode ser utilizado por outras páginas.
session_start();

echo "<h2> Teste de 'Session'</h2>";

echo "Nome: {$_SESSION['nome']},
      Idade: {$_SESSION['idade']}";

echo "ID " . session_id();

?>