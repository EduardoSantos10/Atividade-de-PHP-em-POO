<?php

namespace PHP\Modelo; // define o local do projeto

//require_once("Cliente.php"); // requisitando o uso de uma classe
//use PHP\Modelo\Cliente; // defino qual classe que vou usar

require_once("Pessoa.php");
use PHP\Modelo\Pessoa;
require_once("Recepcionista.php");
use PHP\Modelo\Recepcionista;
require_once("Endereco.php");
use PHP\Modelo\Endereco;
require_once("Medico.php");
use PHP\Modelo\Medico;
require_once("Paciente.php");
use PHP\Modelo\Paciente;


// posso usar mais de uma "require_once" e "use"

$endereco = new Endereco("Rua Marcehal Deodoro",
                             "1020",
                             "São Bernardo do Campo",
                             "Centro",
                             "São Paulo",
                             "Brasil",
                             "04975-892");




// criei um objeto e passei os parametros dentro da var cliente
$paciente = new Paciente("1256","Eduardo", "11985478054", 254.87, $endereco); // criar um objeto para usar a classe
$pessoa = new Pessoa("Felipe","12548", "11985478845", 254.89, $endereco); // criar um objeto para usar a classe
$recepcionista = new Recepcionista("3456","Aline", "119854784", 214.89 , $endereco); // criar um objeto para usar a classe
$medico = new Medico("1547","Eduardo", "11948502047", 548.89, $endereco);
$endereco = new Endereco("Vale do Silicio","598","São Bernardo do Campo","Ferrazópolis","São Paulo","Brasil","19807-490");


echo $paciente->imprimir()."<br>"; // chamo o metodo imprimir, e não passei nenhum parametro anteriormente
echo $pessoa->imprimir()."<br>";
echo $recepcionista->imprimir()."<br>"; // chamo o metodo imprimir, e não passei nenhum parametro anteriormente
echo $medico->imprimir()."<br>";
echo $endereco->imprimir()."<br>"; // chamo o metodo imprimir, e não passei nenhum parametro anteriormente





?>