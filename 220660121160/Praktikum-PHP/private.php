<?php

class Mobil
{
    private $roda = 4;

    public function jalan()
    {
        echo 'Mobil berjalan';
    }

    public function getRoda()
    {
        return $this->roda;
    }
}

$avanza = new Mobil();

echo $avanza->jalan(); 
echo PHP_EOL;
echo $avanza->getRoda(); 
echo PHP_EOL;