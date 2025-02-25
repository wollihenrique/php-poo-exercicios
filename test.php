<?php

use Classes\BankAccount;
use Classes\ClassPerson;

require_once __DIR__ . '/autoload.php';

$Wallace = new ClassPerson("Wallace Henrique Batista Santos", 1.79, new \DateTimeImmutable("2007-11-11"));
echo "Nome: " . $Wallace->getName() . PHP_EOL . "Altura: " . $Wallace->getHeight() . PHP_EOL . "Idade: " . $Wallace->age() . " anos"; 

$Mirielle = new BankAccount(titular: "Mirielle de Souza Silva", saldo: 1.00);
echo PHP_EOL . "Saldo: " . $Mirielle->getSaldo();
$Mirielle->depositar(150.50);
$Mirielle->sacar(200);
echo PHP_EOL . "Saldo: " . $Mirielle->getSaldo() . "\n";


