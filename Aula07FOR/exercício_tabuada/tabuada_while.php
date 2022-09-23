<html>
 <head>
  <title>Exercício Tabuada - While</title>
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

 # b) While
  $tabuada = $_GET['tab'];
  $count=1;
  
  while($count<=10){
   echo $tabuada." x ".$count." = ".($tabuada*$count)."<br />";
   $count++;
  }
  
 ?>

 </body>
</html>