<?php

    class Account {
        public $id = integer;
        public $name = string;
        public $document = string;
        public $email = string;
        public $password = string;
    }

    public function __construct($name, $document)
    {
        $this->_name = $name;
        $this->_document = $document;
    }

    public function getName()
    {
        return $this->_name;
    }

    public function getDocument()
    {
        return $this->_document;
    }

?>