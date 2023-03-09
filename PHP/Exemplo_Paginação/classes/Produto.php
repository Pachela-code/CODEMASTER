<?php

class Produto{
 
    //Atributos
    public $nome;
    public $preco;
    public $quantidade;
    public $imagem;

    //Construtor
    public function __construct($nome, $preco, $quantidade){
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
        $this->imagem = rand(1, 5) . ".jpg";
    }

}

?>