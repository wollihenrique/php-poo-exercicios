<?php 

class Car 
{
    public function __construct(
        private string $brand,
        private string $model,
        private int $year
    ){}

    public function getBrand(): string{
        return $this->brand;
    }

    public function getModel(): string{
        return $this->model;
    }

    public function getYear(): int{
        return $this->year;
    }

}

$carro = new Car (
    "Honda",
    "Fit",
    2022
);

echo $carro->getModel(). PHP_EOL;
echo $carro->getBrand(). PHP_EOL;
echo $carro->getYear() . PHP_EOL;