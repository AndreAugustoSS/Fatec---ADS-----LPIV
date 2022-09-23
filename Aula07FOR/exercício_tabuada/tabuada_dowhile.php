<html>
 <head>
  <title>Exercício Tabuada - DO While</title>
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

 # c) Do While 

  $tabuada = $_GET['tab'];
  $count=1;
  
  do{
   echo $tabuada." x ".$count." = ".($tabuada*$count)."<br />";
   $count++;
  }while($count<=10);
  
 ?>

 </body>
</html>