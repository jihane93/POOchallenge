<?php

class car
{
    private int $nbWeels;

    private int $currentSpeed;

    private string $color;

    private int $nbSeats;

    private string $energy;

    private int $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color =$color;
        $this->nbSeats =$nbSeats;
        $this->energy =$energy;
    }

    public function forward(): string
    {
        $this->setCurrentSpeed = 60;
        return "Go !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->setCurrentSpeed > 0){
            $this->setCurrentSpeed--;
            $sentence .="Brake !!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    public function stat(): string
    {
        $this->SetCurentSpeed =0;
        return "Get Started";
    }

    public function setNbWheels(int $nbWeels): void
    {
        $this->nbWeels = $nbWheels;
    }

    public function getNbWeels(): int
    {
        return $this->nbWheels;
    }

    public function setCurrentSpeed(int $currentSpeed): void
    {
        if ($currentSpeed >=0) {
            $this->currentSpeed = $currentSpeed;
        }
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setNbSeats(int $nbSeats): void
    {
        $this->nbSeats = $nbSeats;
    }

    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    public function setEnergy(int $energy): void
    {
        $this->energy = $energy;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }
}