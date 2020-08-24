<?php declare(strict_types=1);

namespace Factories;

use Src\Transporters\TruckTransporter;
use Src\Interfaces\Transporter;
use Src\Interfaces\TransporterFactory;

class TruckTransporterFactory implements TransporterFactory
{
    public function getTransporter(): Transporter
    {
        return new TruckTransporter();
    }
}