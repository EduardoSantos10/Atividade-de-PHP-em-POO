<?php

    namespace PHP\Modelo; // define o local do projeto
    require_once("Pessoa.php");
    require_once("Endereco.php");
    use PHP\Modelo\Endereco;
    use PHP\Modelo\Pessoa;

    class Recepcionista extends Pessoa {
         // declaro o que não vem da classe pai
        protected float $salario;

        public function __construct(string $credencial, string $nome, string $telefone, float $salario, Endereco $endereco){
            parent::__construct($nome, $credencial, $salario, $telefone, $endereco);
            $this->salario = $salario;
        }

        public function  __get(string $nome){
            return $this->nome;
        }

        public function __set(string $nomeVariavel, string $dado):void{

            $this->nomeVariavel = $dado;
        }
        public function imprimir(): string{
            return parent::imprimir().
            
            "<br>Salario: ".$this->salario;
        }




    }







?>