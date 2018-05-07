<?php
/**
 * Created by PhpStorm.
 * User: andlk
 * Date: 06.05.2018
 * Time: 14:04
 */


namespace marwan\libary;
//interface eibinden
//include "../Interfaces/BallIinterface.php";



class Fußball extends AbstractBall implements BallInterface{
    /**
     * @return float
     */
    public function getVolumen(): float
    {
       return (1/3)*4*($this->durchmesser/2)*($this->durchmesser/2)*($this->durchmesser/2)*pi();
    }

    function __construct(string $name, float $durchmesser, string $material)
    {
        $this->name = $name;
        $this->durchmesser = $durchmesser;
        $this->material = $material;

    }



}

