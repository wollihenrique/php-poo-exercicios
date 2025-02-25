<?php

interface Pagamento {
    public function processarPagamento($valor);
}

class PagamentoCartao implements Pagamento 
{
    public function processarPagamento($valor){
        echo "O valor do pagamento será de: " . $valor . PHP_EOL;
    }
}

class PagamentoBoleto implements Pagamento 
{
    public function processarPagamento($valor){
        echo "O valor do boleto será de: " . $valor . PHP_EOL;
    }
}

$cartao = new PagamentoCartao();
$cartao->processarPagamento(199.90);
$boleto = new PagamentoBoleto();
$boleto->processarPagamento(199.90);