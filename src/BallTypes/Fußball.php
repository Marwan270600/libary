<?php
/**
 * Created by PhpStorm.
 * User: andlk
 * Date: 06.05.2018
 * Time: 14:04
 */


namespace Baelle\BallTypes;
//interface eibinden
use Baelle\Interfaces\BallInterface as BallInterface;

require_once  "Baelle\BallTypes\AbstractBall.php";
include  "Baelle\BallTypes\AbstractBall.php";


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

