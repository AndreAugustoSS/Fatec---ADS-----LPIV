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

 // Declarações / Instruções Condicioanis
 # Operadores Lógicos

 # Exemplo 1
 $valor = 20;
 if($valor > 10 && $valor != 30){
    // executa um código 
 } else {
    // executa código SENÃO

 };

# Exemplo 2
# Condição dentro de outra condição 
$valor1 = 10;
if($valor1 >=0){
   if($valor1 >=100){
    echo "O número é maior ou igual a zero";
    echo "<br>";
} else {
echo "O número é positivo, mas menor que 100 ";
echo "<br>";
}

}else {
    echo "O número é negativo";
    echo "<br>";
}
?>