<?php declare(strict_types=1);

namespace Factories;

use Transporters\TruckTransporter;
use Interfaces\Transporter;
use Interfaces\TransporterFactory;

class TruckTransporterFactory implements TransporterFactory
{
    public function getTransporter(): Transporter
    {
        return new TruckTransporter();
    }
}