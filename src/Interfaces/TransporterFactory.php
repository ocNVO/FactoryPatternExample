<?php declare(strict_types=1);

namespace Src\Interfaces;

use Src\Interfaces\Transporter;

interface TransporterFactory
{
    public function getTransporter(): Transporter;
}