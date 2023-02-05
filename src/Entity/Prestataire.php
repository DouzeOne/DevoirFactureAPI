<?php
declare(strict_types=1);

namespace App\Entity;

class Prestataire{
    private string $name;
    private string $address;

    /**
     * Get the value of name
     */ 
    public function getName() : ?string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName(string $name) : self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of address
     */ 
    public function getAddress() : ?string
    {
        return $this->address;
    }

    /**
     * Set the value of address
     *
     * @return  self
     */ 
    public function setAddress(string $address) : self
    {
        $this->address = $address;

        return $this;
    }
}