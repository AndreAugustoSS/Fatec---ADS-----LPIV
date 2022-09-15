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

 // Declarações / Instruções Condicionais
 # São instruções de controle de fluxo do programa de acordo
 # com uma condição lógica.
 #
 # Estas condições lógicas são construídas utilizando-se de
 # "Operadores de Comparação" associados com "Operadores Lógicos"
 #
 # O PHP possui várias estruturas condicionais para permitir este
 # controle

 // Declaração IF com "Operadores de Comparação"
 # Define um bloco de código que são executadas se a condição lógica
 # testada for verdadeira.

# Exemplo 1 - Teste com variável STRING. Apenas SE (IF)
$nome = 'jogo';
if ($nome =='jogo') {
    echo '<br>';
    echo '# --- Exemplo 1 - Teste com variável "STRING"';
    echo '<br>';
    echo 'Este teste será apresentado apenas se a ';
    echo '<br>';
    echo 'condição lógica testada entre parenteses for';
    echo '<br>';
    echo 'verdadeira. Significa que este bloco de código';
    echo '<br>';
    echo 'entre chaves será executado';
    echo '<br>';
}
echo '<hr>';

# Exemplo 2 - Teste com variável NÚMERICA. Apenas SE...SE NÃO (IF...ELSE)
# O teste pode ser realizado com outros tipos de variáveis e, 
# também, possui um código de execução para o caso do teste lógico
# não verdadeiro.
$idade = 17;
if ($idade <= 18 ) {
    echo '<br>';
    echo 'Exemplo 2 - Teste com variável numerica e bloco IF executado';
    echo '<br>';
    echo 'Considerando que o valor da variável $idade é menor ou';
    echo '<br>';
    echo 'igual a 18,  para que este texto seja apresentado.';
    echo '<br>';
} else {
    echo '<br>';
    echo 'Exemplo 2 - Teste com variável numerica e bloco ELSE executado';
    echo '<br>';
    echo 'Considerando que o valor da variável $idade é maior';
    echo '<br>';
    echo 'do que 18';
    echo '<br>';
}
echo '<hr>';

# Exemplo 3 - Teste com variável numérica. SE...SENÃOSE...ENTÃO
#                                          IF...ELSEIF....ELSE

# O teste lógico pode fazer mais de uma verificação de VERDADEIRO
$media = 9; // Aqui você decide qual vai ser a nota do aluno
if ($media <=3){
    echo '<br>';
    echo 'Exemplo 3 - Nota menor ou igual a 3';
    echo '<br>';
    echo 'REPROVADO';
    echo '<br>';
} elseif ($media <=6){
    echo '<br>';
    echo 'Exemplo 3 - Nota menor ou igual a 6';
    echo '<br>';
    echo 'EXAME';
    echo '<br>';
} elseif ($media <=7){
    echo '<br>';
    echo 'Exemplo 3 - Nota menor ou igual a 7';
    echo '<br>';
    echo 'RECUPERAÇÃO';
    echo '<br>';
} else {
    echo '<br>';
    echo 'Exemplo 3 - Nota maior que 7';
    echo '<br>';
    echo 'APROVADO';
    echo '<br>';
}
echo '<hr>';

# Exemplo 4 - Podemos deixar de utilizar as chaves, apenas se
# existir uma única instrução no bloco código.
$nota = 8;
echo '<br>';
if($nota <= 3)
   echo '# Exemplo 4 - Sem uso de "chaves" no bloco de construção de código - IF';
elseif($nota <=6)
       echo '# Exemplo 4 - Sem uso de "chaves" no bloco de construção de código - ELSEIF 1';
elseif($nota <= 7)
       echo '# Exemplo 4 - Sem uso de "chaves" no bloco de construção de código - ELSEIF 2';
else 
    echo '# Exemplo 4 - Sem uso de "chaves" no bloco de construção de código - ELSE';

 ?>