<?php declare(strict_types=1);

namespace Factories;

use Src\Transporters\ShipTransporter;
use Src\Interfaces\Transporter;
use Src\Interfaces\TransporterFactory;

class ShipTransporterFactory implements TransporterFactory
{
    public function getTransporter(): Transporter
    {
        return new ShipTransporter();
    }
}