<?php

class Jogos                         # classe que contem toda propriedade e a 
                                    # maior parte dos metodos da aplicaçao
{

  # propriedades
  public $valorTotalProd = array();
  public $atributo2;

  
  function verifica_Code($jogos, $code) # metodo que verifica se o valor do coigo inserido é compativel com algum produto existente no Banco
  {
    $i = 0;
    foreach ($jogos as $prod) {
      if ($code == $prod["codigo_pdt"]) {
        $i = $i + 1;
      }
    }
    if ($i === 0) {
      return false;
    } else {
      return true;
    }
  }

  function verifica_Tipo($jogos, $tipo) # método que verifica se o tipo de jogo inserido é compativel com algum produto existente no BD
  {
    $i = 0;
    foreach ($jogos as $prod) {
      if (ucfirst($tipo) == $prod["tipo_pdt"]) {
        $i++;
      }
    }
    if ($i === 0) {
      return false;
    } else {
      return true;
    }
  }


  function camelCaseTipo($tipo)                 # camel case do tipo, que ao pesquisar um tipo de jogo especifico, 
                                                # independente de escrever com letras maiusculas ou minusculas, com espaço ou sem, 
                                                # será feito uma formatação no texto e redirecionado a pesquisa no banco de dados corretamente
  {
    $tipo = ucwords($tipo);
    $modified = str_replace(" ", "", $tipo);
    return $modified;
  }


  function valor_com_Desconto_Jogo($valorPdt, $desconto)    # calcula o desconto, recebendo como parametro o valor do produto e o desconto
                                                            # retornando o valor do produto já com desconto
  {
    $valor = $valorPdt * $desconto;
    $valorDesconto = $valor / 100;
    return $valorPdt - $valorDesconto;
  }


  function valores_Capturados_Pdt($valorPdt, $preco)        # atribui todo o valor de uma determinada exibição (toda vez que chamado), a um Array
  {
    $valorPdt[] = $preco;
    return $valorPdt;
  }

  function calculo_Medio_Pdt($arrayPdt)                    # atribui os valores da array utilizando o for loop decrementando assim a variavel "$i"
                                                           # após o fim do decremento calcula a média dos valores, 
                                                           # baseado na quantidade de itens da Array
  {
    $valorTotal = 0;
    for ($i = count($arrayPdt) - 1 ; $i >= 0 ; $i--) {
      $valorTotal += $arrayPdt[$i];
    }
    return $valorTotal / count($arrayPdt);
  }
}
