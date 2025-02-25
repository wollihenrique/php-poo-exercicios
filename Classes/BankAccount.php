<?php

namespace Classes;

class BankAccount {
    public function __construct(
        public string $titular,
        public float $saldo = 0.0
    ){}

    public function getTitular(): string{
        return $this->titular;
    }

    public function depositar(float $valorDeposito): bool {
        if ($valorDeposito > 0){
            $this->saldo += $valorDeposito;
            return true;
        }
        else {
            echo "Por favor, deposite um valor maior que R$ 0,00";
            return false;
        }
    }

    public function sacar(float $valorSaque):bool {
        if($valorSaque > $this->saldo) {
            echo "Saldo Insuficiente";
            return false;
        }
        else{
            $this->saldo -= $valorSaque;
            return true;
        }
    }

    public function getSaldo(): float{
        return $this->saldo;
    }

    public function exibirSaldo(): void {
        echo "Saldo atual: R$ " . number_format($this->saldo, 2, ',', '.') . PHP_EOL;
    }
}