<?php

// cinfiguração da database
require_once '../config.php';
$banco = new PDO(
  "mysql:host=" . MYSQL_HOST . ";" .
    "dbname=" . MYSQL_DATABASE . "; charset=utf8",
  MYSQL_USER,
  MYSQL_PASS
);
//


$dados = $banco->query("SELECT * FROM `sistema de venda de jogos` WHERE 1");
$jogos = $dados->fetchALL(PDO::FETCH_ASSOC);

include_once __DIR__ . "/jogos.php";



// Functions
function verifica_Codigo_Inserido($jogos, $codigo)
{
  $codeVerify = new Jogos();
  return $codeVerify->verifica_Code($jogos, $codigo);
}

function verifica_Tipo_Inserido($jogos, $tipo)
{
  $tipoVerify = new Jogos();
  return $tipoVerify->verifica_Tipo($jogos, $tipo);
}

function camelCase($tipo)
{
  $tipoPesquisado = new Jogos();
  return $tipoPesquisado->camelCaseTipo($tipo);
}

function valor_com_Desconto($valor, $desconto)
{
  $vlFinal = new Jogos();
  return $vlFinal->valor_com_Desconto_Jogo($valor, $desconto);
}


function recebe_Valores_Pdt(array $valorPdt, int $preco)
{
  $valorProduto = new Jogos();
  return $valorProduto->valores_Capturados_Pdt($valorPdt, $preco);
}

function valor_Medio_Pdt($arrPdt)
{
  $arrayProdutos = new Jogos();
  return $arrayProdutos->calculo_Medio_Pdt($arrPdt);
}

// ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
                                                                        //  Fim php                                                   
// ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//



?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  
  <style>
   

    body {
      font-family: Times New Roman;
      font-size: 20px;
    }

    div {
   /* Background*/
   background-image: url("https://i.pinimg.com/originals/92/8d/a6/928da64fde7ba0ea998fdbc465b8291e.png");
}



    .insert {
      margin-top: 40px;
      display: flex;
      flex-direction: row;
      align-items: center;
    }

    #texto {
      display: flex;
      justify-content: center;
      align-items: center;
    }
  </style>
  <title>P2 - Sistema de venda de jogos</title>
</head>

  <div class="insert">
    <div class="container-fluid col-sm-4">
      <h1 id="texto"><u>Consultar Jogos</u></h1>
<br>
<br>
      <h2>Consulta Por:</h2>
<br>
<br>
      <form method="POST" action="">
        <div class="mb-3">
          <label class="form-label">Nome:</label>
          <input type="text" name="code" class="form-control" placeholder="Digite o nome do Jogo" maxlength="6" minlength="1">
          <hr></hr>

          <label class="form-label">Tipo:</label>
          <input type="text" name="tipo" class="form-control" placeholder="Digite o tipo de jogo (em caso de mídia física) " minlength="1">
        </div>
        <div class="col-auto">
          <input type="submit" name="btn-consult" class="btn btn-primary mb-3" value="Consultar">
          <br>
          <a href="https://technext.github.io/game-warrior/index.html?_ga=2.59199789.1234273712.1669913159-1326815398.1669913159">Voltar para o Ínicio</a></p>
          
        </div>
      </form>
      <p>
        <?php
        function exibe_Valor(float $valor)
        {
          echo "O preço dos jogos encontrados (sem desconto) e de: R$" . $valor;
        }
        ?>
      </p>




      <?php
      if (isset($_POST['btn-consult'])) {

        # no caso do input inserido no codigo, nao for do tipo vazio,
        # ele vai executar, caso negativo ele continua seguindo adiante

      }
        if (!empty($_POST["code"])) {
          exibe_Codigo($jogos);

          # caso o input onde sera inserido o tipo de jogo nao for vazio,
          # ele vai executar, e no caso contrario ele sai do try e vai para o catch


        } else if (!empty($_POST["tipo"])) {
          $tipo = camelCase($_POST["tipo"]);
          exibe_Tipo($jogos, $tipo);

    
      } else if (isset($_POST['btn-todos'])) {
        exibe_Todos($jogos);                        # caso o cliente selecione 'exibir todos', executa-se essa linha
      };
    

      ?>


      <?php function exibe_Todos($jogos)
      {
        $valorTotalProdutos = [];
        ?>
        <?php foreach ($jogos as $prod) : ?>
          <table class="table">
            <tr>
              <th scope="col">Código</th>
              <th scope="col">Nome do Jogo</th>
              <th scope="col">Desconto</th>
              <th scope="col">Valor sem desconto</th>
              <th scope="col">Valor com desconto</th>
              <th scope="col">Tipo</th>
            </tr>


            <tr>

              <td><?= $prod["codigo_pdt"] ?></td>
              <td><?= $prod["nome_pdt"] ?></td>
              <td> % <?= $prod["desconto_pdt"] ?></td>
              <td> R$ <?= $prod["valor_pdt"] ?></td>
              <td> R$ <?= valor_com_Desconto($prod["valor_pdt"], $prod["desconto_pdt"]) ?></td>
              <td><?= $prod["tipo_pdt"] ?></td>

              <?php
                  $valorTotalProdutos = (recebe_Valores_Pdt($valorTotalProdutos, $prod["valor_pdt"]));
              ?>

            </tr>

            <div>

              <a href="<?= $prod["src_loja_pdt"] ?>" target="_blank"><img src="<?= $prod["src_pdt"] ?>" alt="jogos"></a>
              <a href="<?= $prod["src_loja_pdt"] ?>" target="_blank">Voltar para o inicio</a>

            </div>

            <?php  ?>

          </table>

        <?php endforeach; ?>
        <?php
          $mediaVlr = valor_Medio_Pdt($valorTotalProdutos);
          exibe_Valor($mediaVlr);
          ?>
         <?php } ?>



      <?php function exibe_Codigo($jogos)
      { ?>
      <?php if (verifica_Codigo_Inserido($jogos, $_POST["code"])) { ?>
      <?php foreach ($jogos as $prod) : ?>
      <?php if ($_POST["code"] == $prod["codigo_pdt"]) : ?>

              <table class="table">
              <tr>
              <th scope="col">Código</th>
              <th scope="col">Nome do Jogo</th>
              <th scope="col">Desconto</th>
              <th scope="col">Valor sem desconto</th>
              <th scope="col">Valor com desconto</th>
              <th scope="col">Tipo</th>
              </tr>

                  <tr>
                  <td><?= $prod["codigo_pdt"] ?></td>
                  <td><?= $prod["nome_pdt"] ?></td>
                  <td> % <?= $prod["desconto_pdt"] ?></td>
                  <td> R$ <?= $prod["valor_pdt"] ?></td>
                  <td> R$ <?= valor_com_Desconto($prod["valor_pdt"], $prod["desconto_pdt"]) ?></td>
                  <td><?= $prod["tipo_pdt"] ?></td>
                  </tr>


                <div>
                  <a href="<?= $prod["src_loja_pdt"] ?>" target="_blank"><img src="<?= $prod["src_pdt"] ?>" alt="jogos"></a>
                  <a href="<?= $prod["src_loja_pdt"] ?>" target="_blank">Ir para o inicio</a>
                </div>

              </table>

          <?php endif; ?>
          <?php endforeach; ?>
          <?php } else { ?>
          <p>Não foi encontrado nenhum jogo com esse nome e codigo</p>
          <?php } ?>
          <?php } ?>



      <?php function exibe_Tipo($jogos, $tipos)
      {
        $valorTotalProdutos = [];
        ?>
        <?php if (verifica_Tipo_Inserido($jogos, $tipos)) { ?>
        <?php foreach ($jogos as $prod) : ?>
        <?php if ($tipos == $prod["tipo_pdt"]) : ?>

        <table class="table">

        <tr>
              <th scope="col">Código</th>
              <th scope="col">Nome do Jogo</th>
              <th scope="col">Desconto</th>
              <th scope="col">Valor sem desconto</th>
              <th scope="col">Valor com desconto</th>
              <th scope="col">Tipo</th>
        </tr>

        <tr>
              <td><?= $prod["codigo_pdt"] ?></td>
              <td><?= $prod["nome_pdt"] ?></td>
              <td> % <?= $prod["desconto_pdt"] ?></td>
              <td> R$ <?= $prod["valor_pdt"] ?></td>
              <td> R$ <?= valor_com_Desconto($prod["valor_pdt"], $prod["desconto_pdt"]) ?></td>
              <td><?= $prod["tipo_pdt"] ?></td>
              <?php
              $valorTotalProdutos = (recebe_Valores_Pdt($valorTotalProdutos, $prod["valor_pdt"]));
              ?>
        </tr>

                <div>

                  <a href="<?= $prod["src_loja_pdt"] ?>" target="_blank"><img src="<?= $prod["src_pdt"] ?>" alt="jogos"></a>
                  <a href="<?= $prod["src_loja_pdt"] ?>" target="_blank">Ir para o inicio</a>

                </div>

          </table>

          <?php endif; ?>
          <?php endforeach; ?>
          <?php
              $mediaVlr = valor_Medio_Pdt($valorTotalProdutos);
              exibe_Valor($mediaVlr);
              ?>

        <?php } else { ?>
        <p>Não foi encontrado nenhum jogo com esse nome e codigo</p>
        <?php } ?>
        <?php } ?>

</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>