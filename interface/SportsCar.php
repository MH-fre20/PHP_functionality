<?php

require_once "Car.php";
require_once "CarModel.php";

class SportsCar implements Car, CarModel {
    public $model;

    public function setModel($model)
    {
        $this->model = $model;
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function applyBreak()
    {
        echo "applyBreak". PHP_EOL;
    }

    public function increaseSpeed()
    {
        echo "increaseSpeed". PHP_EOL;
    }

    public function decreaseSpeed()
    {
        echo "decreaseSpeed". PHP_EOL;
    }
}

?>