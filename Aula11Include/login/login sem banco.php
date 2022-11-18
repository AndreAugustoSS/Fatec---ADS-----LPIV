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
// O processo de login vai exigir um BD com uma tabela para validação
# Fazer conexão e consulta com o DB.

// Porém, neste primeiro momento vamos utilizar um conjunto de variáveis
$email_bd = 'jose@fatec.sp.gov.br';
$senha_bd = 123;

# Verificar se a informação foi enviada do formulário de login 
if(isset($_POST['bt_logar'])){
    # Se existe informações enviadas pelo formulário 
    # para capturar estas infromações
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    echo $email;

    # Verificar se os dados do formulário são iguais aos
    # que estão cadastrados no BD.
    if($email == $email_bd && $senha_bd){
       # O processo de login neste ponto está validado
       # significa encaminhar o usuário para uma página
       # restrita.
       header('Location: 2-pagRestrit.php');
    } else{
        # Significa falha de Login
        echo "<p>E-mail e/ou Senha incorretos!</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action = "login sem banco.php" method="POST">
    <label>
        E_mail:
        <input type="email" name "email"/>
    </label>
    <label>
        Senha:
        <input type="password" name "senha"/>
    </label>
    <button name="bt_logar" type="submit">Logar</button>
</form>
</body>
</html>