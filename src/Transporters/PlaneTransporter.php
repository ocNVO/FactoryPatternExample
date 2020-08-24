<?php


namespace Src\Transporters;

use Src\Interfaces\Transporter;

class PlaneTransporter implements Transporter
{

    public function display()
    {
        echo "<p style='font-weight: bold; font-family: Arial,serif; font-size: 24px; font-style: italic'>
                Your product will be shipped by means of an airplane!</p>";
    }
}
