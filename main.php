<?php

namespace PHP\Modelo; // define o local do projeto

require_once("Cliente.php"); // requisitando o uso de uma classe
use PHP\Modelo\Cliente; // defino qual classe que vou usar

require_once("Pessoa.php");
use PHP\Modelo\Pessoa;
require_once("Recepcionista.php");
use PHP\Modelo\Funcionario;
require_once("Endereco.php");
use PHP\Modelo\Endereco;


// posso usar mais de uma "require_once" e "use"

$endPaciente = new Endereco("Rua Marcehal Deodoro",
                             "1020",
                             "São Bernardo do Campo",
                             "Centro",
                             "São Paulo",
                             "Brasil",
                             "04975-892");




// criei um objeto e passei os parametros dentro da var cliente
$paciente = new Paciente("123456","Eduardo", "11985478054", endereco: $endCliente, precoTotal: 562.60); // criar um objeto para usar a classe
$pacienteDois = new Paciente("123","Felipe", "11985478845", endereco: $endCliente, precoTotal: 558.60); // criar um objeto para usar a classe
$funcionario = new Recepcionista("3456","Pedro", "119854784", endereco: $endCliente, cargo: "Assistente", salario: 514.89); // criar um objeto para usar a classe



echo $paciente->imprimir(); // chamo o metodo imprimir, e não passei nenhum parametro anteriormente
echo $enPpaciente->imprimir()."<br>";

echo $pacienteDois->imprimir(); // chamo o metodo imprimir, e não passei nenhum parametro anteriormente
echo $endPaciente->imprimir()."<br>";

echo $recepcionista->imprimir(); // chamo o metodo imprimir, e não passei nenhum parametro anteriormente
echo $endPaciente->imprimir();




?>