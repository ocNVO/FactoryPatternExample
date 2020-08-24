<?php declare(strict_types=1);

namespace Factories;

use Src\Transporters\PlaneTransporter;
use Src\Interfaces\Transporter;
use Src\Interfaces\TransporterFactory;

class PlaneTransporterFactory implements TransporterFactory
{
    public function getTransporter(): Transporter
    {
        return new PlaneTransporter();
    }
}
