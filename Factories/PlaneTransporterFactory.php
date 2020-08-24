<?php declare(strict_types=1);

namespace Factories;

use Transporters\PlaneTransporter;
use Interfaces\Transporter;
use Interfaces\TransporterFactory;

class PlaneTransporterFactory implements TransporterFactory
{
    public function getTransporter(): Transporter
    {
        return new PlaneTransporter();
    }
}
