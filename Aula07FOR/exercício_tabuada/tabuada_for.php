<html>
 <head>
  <title>Exercício Tabuada - FOR</title>
  
 </head>
 <body>
 <form action="" method="get">
  Tabuada do:  <input type="text" name="tab" /><br />
  <input type="submit" name="submit" value="Testar" />
 </form> 

 <?php
 // Exercício - TABUADA
 #  Realizar uma tabuada em PHP

 # Use os controles de fluxo:

 # a) FOR 
  $tabuada = $_GET['tab'];  
  for($count=1; $count<=10; $count++)
   echo $tabuada." x ".$count." = ".($tabuada*$count)."<br />";

 ?>

 </body>
</html>