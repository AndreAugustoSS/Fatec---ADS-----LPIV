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

 // Controle de Fluxo - FOR
 # Permite executar um bloco de código em um determinado número de vezes
 # Este "laço" constitui-se de 3 parâmetros
 # 1 - Valor inicial numérico. Utilizado para controlar o número de "loops"
 # 2 - Condição: Avalia o contador para o encerramento do "loop"
 # 3 - Incremento ou Decremento: Altera o valor do contador
 #
 # A variável é criada e inicializada dentro do laço

 # Exemplo 1 
 for($x=1; $x < 10; $x++) {
    echo "Exemplo 1 - " . $x . "<br>";
    
 } 
echo "<br>";
echo "<hr>";

#===========================================================

 # Exemplo 2 
 for($x=1; $x < 10; $x++) {
    echo "Exemplo 2 - " . $x . "<br>";
    
 } 
echo "<br>";
echo "<hr>";

#===========================================================

  # Exemplo 3
  $x=1; 
  for(; $x < 10; ) {
    echo "Exemplo 3 - " . $x . "<br>";
    $x++;
 } 
echo "<br>";
echo "<hr>";

#===========================================================

# Exemplo 4
# Array
$nomes=['Paulo', 'Maria', 'Ana'];
for($i=0; $i<sizeof($nomes); $i++){
    echo "Exemplo 4 - Nome " . $nomes[$i] . "<br>";
}
echo "<br>";
echo "<hr>";

#===========================================================

# Exemplo 5 
for($controle=1, $z=10; $controle < 10; $controle++, $z--) {
    echo "Controle - " . $controle . "<br>";
    echo "Variável Z  - " . $z . "<br>";
    
 } 
echo "<br>";
echo "<hr>";
?>