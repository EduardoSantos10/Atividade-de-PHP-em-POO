<?php 

namespace PHP\Modelo; // define o local do projeto
    require_once("Pessoa.php");
    require_once("Endereco.php");
    use PHP\Modelo\Pessoa;
    use PHP\Modelo\Endereco;

    // Classe
    class Paciente extends Pessoa {
        protected float $salario;

        //Construtor
        public function __construct(string $credencial, string $nome, string $telefone, float $salario, Endereco $endereco){
            
            // "THIS" diferenciar var de parametro
            parent::__construct($nome, $credencial, $salario, $telefone, $endereco); // ::parent -> sempre chama o metodo da classe pai
            $this->salario = $salario;
        }

        // metodo gets e sets
        public function __get(string $nome){
            return $this -> nome;
        } // get - mostra o dado na tela (consulta)

        public function __set(string $nomeVariavel, string $novoDado): void{
            $this -> $nomeVariavel = $novoDado;
        }// set - altera valores

        public function imprimir():string{ // criei o metodo imprimir
            return parent::imprimir().
            "<br>Salario: ".$this->salario;
        }


    } //fim da classe
?>





























?>