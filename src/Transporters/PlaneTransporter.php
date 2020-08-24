<?php


namespace Src\Transporters;

use Src\Interfaces\Transporter;

class PlaneTransporter implements Transporter
{

    public function display()
    {
        echo "Your product will be shipped by means of an airplane";
    }
}