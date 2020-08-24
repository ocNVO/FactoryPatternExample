<?php


namespace Src\Transporters;

use Src\Interfaces\Transporter;

class ShipTransporter implements Transporter
{

    public function display()
    {
        echo "Your product will be shipped by means of a ship";
    }
}