<?php

namespace PHP\Modelo;
require_once("Endereco.php");
use PHP\Modelo\Endereco;      


class Pessoa{
    protected String $nome;
    protected int $credencial;
    protected float $salario;
    protected string $telefone;
    protected Endereco $endereco;

    public function __construct(string $nome, int $credencial, float $salario, string $telefone, Endereco $endereco){

        $this->nome = $nome;
        $this->credencial = $credencial;
        $this->salario = $salario;
        $this->telefone = $telefone;
        $this->endereco = $endereco;

    }

    public function __get(String $ome){
        return $this->nome;
    }

    public function __set(String $nomeVariavel, String $novoNome){

        $this->nome = $novoNome;
    }

    public function imprimir():string{
        return "<br>Nome: ".$this->nome.
               "<br>Credencial: ".$this->credencial.
               "<br>Salário: ".$this->salario.
               "<br>Telefone: ".$this->telefone.
               "<br>Endereço: ".$this->endereco->imprimir();
    }


}

?>