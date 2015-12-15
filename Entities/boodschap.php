<?php

class boodschap{
    private $id;
    private $naam;
    private $email;
    private $bericht;
    private $datum;
    
    function __construct($id, $naam, $email, $bericht, $datum) {
        $this->id = $id;
        $this->naam = $naam;
        $this->email = $email;
        $this->bericht = $bericht;
        $this->datum = $datum;
    }
    
    
    function getId() {
        return $this->id;
    }

    function getNaam() {
        return $this->naam;
    }

    function getEmail() {
        return $this->email;
    }

    function getBericht() {
        return $this->bericht;
    }

    function getDatum() {
        return $this->datum;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNaam($naam) {
        $this->naam = $naam;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setBericht($bericht) {
        $this->bericht = $bericht;
    }

    function setDatum($datum) {
        $this->datum = $datum;
    }

        
    
}

