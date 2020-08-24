<?php declare(strict_types=1);

namespace Interfaces;

use Interfaces\Transporter;

interface TransporterFactory
{
    public function getTransporter(): Transporter;
}