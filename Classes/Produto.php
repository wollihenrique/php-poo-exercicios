<?php

class Produto 
{
    public function __construct(
        public string $produto,
        public float $valor
    ){}

    public function exibirProduto():string{
        return "{$this->produto} - ". number_format($this->valor, "2", ",", "." ); 
    }
}

$perfume = new Produto("Avon Perfume", 1500.00);
echo $perfume->exibirProduto();