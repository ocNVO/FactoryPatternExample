<?php


namespace Transporters;

use Interfaces\Transporter;

class ShipTransporter implements Transporter
{

    public function display()
    {
        echo "Your product will be shipped by means of a ship";
    }
}