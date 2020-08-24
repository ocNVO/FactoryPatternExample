<?php


namespace Src\Transporters;

use Src\Interfaces\Transporter;

class TruckTransporter implements Transporter
{

    public function display()
    {
        echo "Your product will be shipped by means of a truck";
    }
}