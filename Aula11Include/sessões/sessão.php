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
  // Para trabalhar com sessões no PHP nós utilizamos 
  # diversas funções.
  session_start();
  
  $_SESSION['nome'] = "Maria";
  $_SESSION['idade'] = 23;
  # As sessões são uteis para compartilhar informações
  # entre páginas diferentes.

  echo "<h2>Sessão</h2>";
  # Para podermos concatenar texto com conteúdo de 
  # arrays associativos ou conteúdos de superGlobais
  # precisamos utilizar as chaves {}. Pois, são chamadas de string
  # super complexas em PHP
  echo "Nome: {$_SESSION['nome']},
        Idade: {$_SESSION['idade']} anos <br>";
  
  # Uma função importante é o reconhecimento do ID da sessão.
  echo "ID " . session_id();
  // Criamos agora um outro programa chamado de "2-Teste.php"

?> 