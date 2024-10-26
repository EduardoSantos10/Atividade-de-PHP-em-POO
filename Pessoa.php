<?php

namespace PHP\Modelo;


class Pessoa{
    protected String $nome;
    protected int $credencial;
    protected int $salario;
    protected string $telefone;
    protected String $endereco;

    public function __construct(string $nome, int $credencial, int $salario, string $telefone, String $endereco){

        $this->nome = $nome;
        $this->credencial = $credencial;
        $this->salario = $salario;
        $this->telefone = $telefone;
        $this->endereco = $endereco;

    }

    public function __get(String $ome){
        return $this->nome;
    }

    public function __set(String $nome, String $novoNome){

        $this->nome = $novoNome;
    }

    public function imprimir():string{
        return "<br>Nome: ".$this->nome.
               "<br>Credencial: ".$this->credencial.
               "<br>Salário: ".$this->salario.
               "<br>Telefone: ".$this->telefone.
               "<br>Endereço: ".$this->endereco;
    }


}

?>