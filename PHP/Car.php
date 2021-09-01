<?php

    class Car {
        public $id = integer;
        public $license = string;
        public $driver = string;
        public $passenger = integer;
    }

    public function __construct($license, $driver)
    {
        $this->_license = $license;
        $this->_driver = $driver;
    }

    public function setPassengers($passenger)
    {
        $this->_passenger = $passenger;
    }

    public function getLicense()
    {
        return $this->_license;
    }

    public function getDriver()
    {
        return $this->_driver;
    }

?>