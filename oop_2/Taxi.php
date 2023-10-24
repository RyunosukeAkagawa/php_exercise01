<?php

require_once __DIR__ . '/Car.php';

class Taxi extends Car
{

    private $passenger;
    private $totalPassenger;

    public function __construct($name, $number, $color)
    {
        parent::__construct($name, $number, $color);
        $this->totalPassenger = 0;
    }

    public function getPassenger()
    {
        return $this->passenger;
    }

    public function getTotalPassenger()
    {
        return $this->totalPassenger;
    }

    public function setPassenger($passenger)
    {
        $this->passenger = $passenger;
    }

    public function setTotalPassenger($totalPassenger)
    {
        $this->totalPassenger = $totalPassenger;
    }

    public function picKUp($passenger)
    {
        $this->totalPassenger += $passenger;
        return strval($passenger) . '人乗車しました' . PHP_EOL;
    }

    public function lower($passenger)
    {
        $this->totalPassenger -= $passenger;
        if ($this->totalPassenger >= 0) {
            return strval($passenger) . '人降車しました' . PHP_EOL;
        } else {
            return strval($passenger) . '人は降車できません' . PHP_EOL;
        }
    }

    public function information()
    {
        return "車の車種：{$this->getName()}" . PHP_EOL .
            "車体番号：{$this->getNumber()}" . PHP_EOL .
            "カラー：{$this->getColor()}" . PHP_EOL;
    }

    public function checkPassenger()
    {
        return "乗車人数:{$this->totalPassenger}人" . PHP_EOL;
    }
}
