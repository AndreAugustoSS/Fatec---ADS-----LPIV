<!doctype html>
<html lang="pt-BR">
  <head>
    <title>Aula03</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </head>
  <body class="bg-dark text-light text-left aumenta">

  <?php 

 // "Array" (vetor) Associativo
 # Ao contrário do 'array' de índice numérico, as chaves são do tipo "string"

 $valores1 = [
    'A' => 20,
    'B' => 30,
    'C' => 40,
    'D' => 50
 ];

 echo $valores1['A'];
 echo "<br>";

 $valores1 = [
    'A' => 200,
    'B' => 300 #Sobreposição
 ];

 echo $valores1['A'];
 echo "<br>";
 echo "<hr>";

 $valores2=[
    'nome'     => 'Paulo',
    'email'    => '@gmail',
    'telefone' => '(013) 999'
 ];

 echo $valores2['nome'];
 echo "<br>"; 

?>