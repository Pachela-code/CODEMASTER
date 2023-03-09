<?php


class Pessoa{

    //Atributos
    public $nome;
    public $idade;
    public $altura;
    public $genero;

    //Construtor
    function __construct($nome, $idade, $altura, $genero){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->genero = $genero;
    }

    //Metodos
    public function exibirLinhaNaTabela($pos){
        $saida = "<tr>
            <td>" . ($pos+1) . "</td>
            <td>" . $this->nome . "</td>
            <td>" . $this->idade . "</td>
            <td>" . $this->altura . "</td>
            <td>" . $this->genero . "</td>
        </tr>";

        return $saida;
    }

}


?>