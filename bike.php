<?php

class Bicycle
{
    private string $color;

    private int $currentSpeed;

    private int $nbSeats;

    private int $nbWeels;

    public function __construct(string $color)
    {
        $this->color = $color;
    }

    public function forward(): string
    {
        $this->setCurrentSpeed=15;

        return "GO !";

    }

    public function brake():string 
    {
      $sentence = "";
      while ($this->setCurrentSpeed >0) {
          $this->setCurrentSpeed--;
          $sentence .= "Brake !!!";

      }
      $sentence .= "I'm stopped !";
      return $sentence;  
    }

    public function setColor(string $color): void
    {
      $this->color = $color;

    }

    public function getColor(): string
    {
      return $this->color;

    }

    public function setCurrentSpeed(int $currentSpeed): void
    {
        if ($currentSpeed >=0){
            $this->currentSpeed = $currentSpeed;
        }
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function setSeats(int $nbSeats): void
    {
        $this->nbSeats = $nbSeats;
    }

    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    public function setNbWeels(int $nbWeels): void
    {
        $thid->nbWeels = $nbWeels;
    }

    public function getNbweels(): int
    {
        return $this->nbWeels;
    }
}