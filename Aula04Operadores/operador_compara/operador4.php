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

 // Operadores de Comparação
 # Permitem a comparação entre valores
 # Verificam igualdade, diferença, maior, menor ou de mesmo tipo.
 # O resultado da comparação será sempre um "booleano", qie significa False ou True.
 // --------------------------------------------------------------------------------

# Operador de igualdade       
# Observe a diferena entre um operador de "Atribuição"
# e de "Comparação"

# Exemplo 1
$a = (2 ==3); # False

# Exemplo 2 
$a = (100 == 100); # True

# Exemplo 3
$a =(5 == '50'); # True 
# Neste caso ocorre uma verificação de igualdade,
#sem a verificação do tipo de variável

# Exemplo 4 
$a = (50 =='50'); # False
# Neste caso ocorre uma verificação de igualdade e, também,
# do tipo de variável.

// Atenção 
// Nós não conseguimos visualizar o resultado (True ou False)
// Mas, podemos verificar a existência dele.

# Neste exemplo não conseguimos visualizar o conteúdo da variável
$a = (2 == 3); # False
echo $a;
echo "<br>";

# Então, a solução é a de expressar a sua existência
if ($a) {
    echo "True";
    echo "<br>";

} else {
    echo "False";
}


 ?>