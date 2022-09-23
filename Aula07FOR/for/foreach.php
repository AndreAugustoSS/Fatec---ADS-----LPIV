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

 // Controle de Fluxo - FOREACH
 # Permite executar um bloco de código a partir de valores de um "Array"
 # Notar que não há a necessidade de iniciar uma variável,
 # nem realizar o incremento ou decremento desta variável.
 # Pois, o ciclo passa automaticamente, de forma sequencial, em
 # cada elemento do "array".
 #
 # Note também, que cada elemento do "array" é carregado na variável
 # logo após a declaração de "AS".

 # Exemplo 1 
 $nomes=["Mari", "Ada", "Lena"];
 foreach($nomes as $nome){
    echo $nome . "<br>";
 }
 echo "<hr>";

 #===========================================================

 # Exemplo 2 
 echo "# Exemplo 2 <br>";
 $x= [1,3,4];
 foreach($x as $y){
  echo$y . "<br>";
 }
 echo "<hr>";

 #===========================================================

  # Exemplo 3 
  echo "# Exemplo 3 <br>";
  # Existe uma assinatura diferente para o FOREACH
  $EstadoCapital=[
    'Acre' => 'Rio Branco',
    'Amapa' => 'Macapa',
    'Alagoas' => 'Maceio',
    'Ceara' => 'Fortaleza' 
  ];
  foreach($EstadoCapital as $chave => $value){
    echo "Para o estado $chave a capital é $value <br>";
  };
  
  echo "<hr>";

?>