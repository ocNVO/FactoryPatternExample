<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factory Pattern Example</title>
</head>
<body>
    <h1>Factory Pattern Example</h1>
    <p>Select A Means of Transportation for Delivery</p>

    <form method="post">
        <input type="submit" name="airplane"
               value="Airplane" />

        <input type="submit" name="ship"
               value="Ship" />

        <input type="submit" name="truck"
               value="Truck" />
    </form>
    <br>
    <br>
    <?php
    require "vendor/autoload.php";
        use Factories\PlaneTransporterFactory;
        use Factories\ShipTransporterFactory;
        use Factories\TruckTransporterFactory;

        $planeTransporterFactory = new PlaneTransporterFactory();
        $shipTransporterFactory = new ShipTransporterFactory();
        $truckTransporterFactory = new TruckTransporterFactory();

        $transporter = null;
        if(isset($_POST['airplane'])) {
            $transporter = $planeTransporterFactory->getTransporter();
            $transporter->display();
        }
        if(isset($_POST['ship'])) {
            $transporter = $shipTransporterFactory->getTransporter();
            $transporter->display();
        }
        if(isset($_POST['truck'])) {
            $transporter = $truckTransporterFactory->getTransporter();
            $transporter->display();
        }
    ?>
</body>
</html>
