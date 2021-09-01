<?php

    require_once("Car.php");
    require_once("UberX.php");
    require_once("Account.php");
    require_once("UberPool.php");

    $uberX = new UberX("CVB-123", new Account("Andres Herrera", "AND456"), "Chevrolet", "Spark");

    $uberX->printDataCar();

    $uberPool = new UberPool("CYU-567", new Account("Andrea Ferran", "ANDA765"), "Dodge", "Attitude");

    $uberPool->printDataCar();
    
?>