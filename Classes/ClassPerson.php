<?php

namespace Classes;
class ClassPerson {
    public string $name;
    public float $height;
    public \DateTimeImmutable $birthDate;

    public function __construct($name, $height, $birthDate){
        $this->name = $name;
        $this->height = $height;
        $this->birthDate = $birthDate;
    }

    public function getName(): string {
        return $this->name;
    }

    public function setName(string $name): void{
        $this->name = $name;
    }

    public function getHeight(): float {
        return $this->height;
    }

    public function setHeight(float $height): void{
        $this->height = $height;
    }

    public function getBirthDate(): \DateTimeImmutable {
        return $this->birthDate;
    }

    public function setBirthDate(\DateTimeImmutable $birthDate): void{
        $this->birthDate = $birthDate;
    }

    public function age(): int {
        $now = new \DateTimeImmutable();
        $interval = $this->birthDate->diff($now);
        return $interval->y;
    }
}



?>