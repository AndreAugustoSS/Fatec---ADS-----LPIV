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

 // Classes somente com propriedades
 #  Sem qualquer tipo de métodos

 // Classes somente com Métodos
 # Sem qualquer tipo de propriedades

 # Exemplo 1
 class Pessoa1 {
    # Classe apenas com Propriedades
    public $nome;
    public $codnome; 
 }

 # Exemplo 2 
 class Pessoa2{
    # Classe apenas com Métodos
    public function msg() {
        // Método acessível fora da classe 
    }

    private function andar () {
        // Método acessível apenas dentro da classe
        # Os objetos não tem visibilidade deste método
    } 

    public function movimento(){
        $this->andar();
    }
 }

 // A classe "Pessoal" permite o acesso de suas propriedades
 // Pois, o modificar de acesso é "Public"
 $humano1 = new Pessoa1();
 $humano1->nome="Joao";
 $humano1->codnome="Assesor";
 
 $humano2 = new Pessoa2();
 $humano2->movimento();
 
?>