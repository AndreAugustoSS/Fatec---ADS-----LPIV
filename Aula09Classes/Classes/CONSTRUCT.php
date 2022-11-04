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

 // Classes - CONSTRUCT
 # No exemplo anterior as propriedades já estavam predefinidas
 # $codnome = "Professora";
 # A ideia é trabalhar com esta propriedade de forma dinâmica,
 # para isto devemos utilizar o CONSTRUCT 

 class Humano{
    # Propriedades
    public $nome = 'Maria'; #public é um modificador acesso (visibilidade)
    public $codnome = 'Professora';

 # Métodos
 public function nomeCompleto(){
    return $this->codnome.' '.$this->nome;
 }

 }


 $homem = new Humano ();
 echo $homem -> nomeCompleto();
 echo '<hr>';

#---------------------------------------------------------------------------------------------------------------------
#---------------------------------------------------------------------------------------------------------------------

// CONSTRUCT
# É um método especial dentro de uma classe que é 
# executado automaticamente quando é criado um objeto 
# a partir da classe
# Este método é definido de uma froma especial com dois 
# "underscores".

class Humano2
{
    private $nome;      # indica que estas são propriedades 
    private $codnome;   # são visiveis apenas pelos métodos
                        # (funções) dentro das classes.
                        # os objetos não sabem, não conhecem 
                        # estas propriedades. Apenas conhecem 
                        # o método (a função) quando este for "public"

    # Esta função é executada de forma automática
    # quando se instancia um objeto desta classe.
    function __construct($n, $c){
        $this->nome = $n;         # this->nome vai receber o valor de $n
        $this->codnome = $c;      # this->codnome vai receber o valor de $c
    }

    public function funCodNome() {
        return $this->nome . " ". $this->codnome;
    }

}


/*----------------*/


$homem = new Humano2('Marcos' , 'Paulus');
# Ao criar o objeto "$homem" a função_construct é chamada
# automaticamente com a passagem dos argumentos.
echo $homem -> funCodNome();  
echo "<br>";

$mulher = new Humano2('Mari', 'Agdalena');
echo $mulher -> funCodnome();




?>