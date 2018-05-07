<?php
namespace marwan\libary;

    //include "../Interfaces/BallIinterface.php";
    //use HTL3R\Balls\Interfaces\BallInterface as BallInterface;

    abstract class AbstractBall implements BallInterface {
        public $name;
        public $durchmesser;
        public $material;
        //protected $volumen;

        public function getName(): string
        {
            return $this->name;
        }

        public function getDurchmesser(): float
        {
            return $this->durchmesser;
        }

        public function getMaterial(): string
        {
            return $this->material;
        }

        function __construct(string $name, float $durchmesser, string $material)
        {
            $this->name = $name;
            $this->durchmesser = $durchmesser;
            $this->material = $material;

        }

        public function __toString() : string
        {
            
            $rv = <<<EOT
        Name: $this->name<br />
        Durchmesser: $this->durchmesser<br />
        Material: $this->material<br />
EOT;
            return $rv;
        }

        public function getVolumen(): float
        {
            return (1/3)*4*($this->durchmesser/2)*($this->durchmesser/2)*($this->durchmesser/2)*pi();
        }
    }
?>