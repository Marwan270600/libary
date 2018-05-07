<?php
/**
 * Created by PhpStorm.
 * User: Marwan
 * Date: 07.05.2018
 * Time: 23:12
 */

namespace marwan\libary;

class Volleyball extends AbstractBall implements BallInterface
{
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