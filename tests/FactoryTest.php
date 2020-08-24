<?php declare(strict_types=1);

namespace tests;

use Factories\PlaneTransporterFactory;
use Factories\ShipTransporterFactory;
use Factories\TruckTransporterFactory;
use PHPUnit\Framework\TestCase;
use Src\Transporters\PlaneTransporter;
use Src\Transporters\ShipTransporter;
use Src\Transporters\TruckTransporter;

class FactoryTest extends TestCase
{
    public function test_can_create_plane_transporter() {
        $transporterFactory = new PlaneTransporterFactory();
        $transporter = $transporterFactory->getTransporter();

        $this->assertInstanceOf(PlaneTransporter::class, $transporter);

    }
    public function test_can_create_ship_transporter() {
        $transporterFactory = new ShipTransporterFactory();
        $transporter = $transporterFactory->getTransporter();

        $this->assertInstanceOf(ShipTransporter::class, $transporter);

    }
    public function test_can_create_truck_transporter() {
        $transporterFactory = new TruckTransporterFactory();
        $transporter = $transporterFactory->getTransporter();

        $this->assertInstanceOf(TruckTransporter::class, $transporter);

    }
}
