<?php

use Classes\BankAccount;
use Classes\ClassPerson;

require_once __DIR__ . '/autoload.php';

$Wallace = new ClassPerson("Wallace Henrique Batista Santos", 1.79, new \DateTimeImmutable("2007-11-11"));
echo "Nome: " . $Wallace->getName() . PHP_EOL . "Altura: " . $Wallace->getHeight() . PHP_EOL . "Idade: " . $Wallace->age() . " anos"; 

$pessoa = new BankAccount(titular: "pessoa de Souza Silva", saldo: 1.00);
echo PHP_EOL . "Saldo: " . $pessoa->getSaldo();
$pessoa->depositar(150.50);
$pessoa->sacar(200);
echo PHP_EOL . "Saldo: " . $pessoa->getSaldo() . "\n";


