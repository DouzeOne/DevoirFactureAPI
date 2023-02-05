<?php
declare(strict_types=1);

namespace App\Entity;

class Facture {

    private string $date;
    private int $id;
    private bool $hasTva;
    private float $tva;
    private int $ttc;
    private int $ht;
    private string $designation;

    /**
     * Get the value of date
     */ 
    public function getDate() : string
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */ 
    public function setDate(string $date) : self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId() : ?int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id) : self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of hasTva
     */ 
    public function getHasTva() : ?bool
    {
        return $this->hasTva;
    }

    /**
     * Set the value of hasTva
     *
     * @return  self
     */ 
    public function setHasTva(bool $hasTva) : self
    {
        $this->hasTva = $hasTva;

        return $this;
    }

    /**
     * Get the value of tva
     */ 
    public function getTva() : ?float
    {
        return $this->tva;
    }

    /**
     * Set the value of tva
     *
     * @return  self
     */ 
    public function setTva(float $tva) : self
    {
        $this->tva = $tva;

        return $this;
    }

    /**
     * Get the value of ttc
     */ 
    public function getTtc() : ?int 
    {
        return $this->ttc;
    }

    /**
     * Set the value of ttc
     *
     * @return  self
     */ 
    public function setTtc(int $ttc) : self
    {
        $this->ttc = $ttc;

        return $this;
    }

    /**
     * Get the value of ht
     */ 
    public function getHt() : ?int 
    {
        return $this->ht;
    }

    /**
     * Set the value of ht
     *
     * @return  self
     */ 
    public function setHt(int $ht) : self
    {
        $this->ht = $ht;

        return $this;
    }

    /**
     * Get the value of designation
     */ 
    public function getDesignation() : ?string
    {
        return $this->designation;
    }

    /**
     * Set the value of designation
     *
     * @return  self
     */ 
    public function setDesignation(string $designation)  : self
    {
        $this->designation = $designation;

        return $this;
    }
}