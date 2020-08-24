<?php declare(strict_types=1);

namespace Factories;

use Transporters\ShipTransporter;
use Interfaces\Transporter;
use Interfaces\TransporterFactory;

class ShipTransporterFactory implements TransporterFactory
{
    public function getTransporter(): Transporter
    {
        return new ShipTransporter();
    }
}