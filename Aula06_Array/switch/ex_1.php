<html>
<head>
<title>Calculadora PHP</title>
<style type = "text/css">
.style1 {font-family: algerian; font-size: 24px; font-weight: bold; color: #CC0066; }
</style>
</head>
<body background="imagem.jpg">
<table width="500" height="100" align="center" bgcolor="#F6CEEC" border="3" cellpadding="0" cellspacing="0" bordercolor="#CC0066">
<tr>
<td><form name="calculadora" method="post" action="cadastrando.php">
<div align="center"><span class="style1">Calculadora </span> <br></div>
Valor 1: <input name="valor1" type="number" value="<? echo $valor1 ?>"/></br>
Valor 2: <input name="valor2" type="number" value="<? echo $valor2 ?>"/> <br />
Selecione uma operação: <select name="sinal" size="1" ><option value=""></option>
<option value="+">Adição</option>
<option value="-">Subtração</option>
<option value="*">Multiplicação</option>
<option value="/">Divisão</option> 
<br/><br/>
<input name="Calcular" type="submit" value="Calcular"> <br />
<input name="Limpar" type="reset" value="Limpar"> <br /><br />
</select> 
</td>
</tr>
</table>
</body>
</html> 


<?php
$valor1= $_POST['valor1'];
$valor2= $_POST['valor2'];
$sinal = $_POST['sinal'];
$total =0;
switch ($sinal)

{
case '+': $total = $valor1 + $valor2; break;
case '-': $total = $valor1 - $valor2; break;
case '*': $total = $valor1 * $valor2; break;
case '/': $total = $valor1 / $valor2; break;
}
echo "O resultado opera&ccedil&atildeo &eacute:" .$total;

?>