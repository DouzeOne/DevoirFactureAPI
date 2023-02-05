<?php
declare(strict_types=1);

namespace App\Command;

use App\Entity\Client;
use App\Entity\Facture;
use App\Entity\Prestataire;

class GeneratorCommand {

    private Client $client;
    private Prestataire $prestataire;
    private Facture $facture;

    public function __construct(Client $client, Prestataire $prestataire, Facture $facture)
    {
        $this->client = $client;
        $this->prestataire = $prestataire;
        $this->facture = $facture;
    }

    public function generate() : void 
    {
        while(true){
            echo "Bienvenue dans le générateur de facture";
            $client_name = readline("Veuillez saisir le nom du client : ");
            $this->client->setName($client_name);
    
            $adress_client = readline("Veuillez saisir l'adresse du client : ");
            $this->client->setAddress($adress_client);
    
            $prestataire_name = readline("Veuillez saisir le nom du prestataire : ");
            $this->prestataire->setName($prestataire_name);
    
            $adress_prestataire = readline("Veuillez saisir l'adresse du client : ");
            $this->prestataire->setAddress($adress_prestataire);

            $facture_number = (int)readline("Veuillez saisir le numéro de la facture : ");
            $this->facture->setID($facture_number);

            $facture_designation = readline("Veuillez saisir la désignation de la facture : ");
            $this->facture->setDesignation($facture_designation);

            $facture_date = readline("Veuillez saisir la date de la facture : ");
            $this->facture->setDate($facture_date);

            $facture_ht = (int)readline("Veuillez saisir le montant HT de la facture : ");
            $this->facture->setHT($facture_ht);

            $has_TVA = readline("La facture contient-elle de la TVA ? (O/N) : ");
            if($has_TVA === "O"){
                $this->facture->setHasTVA(true);
            }else{
                $this->facture->setHasTVA(false);
            }

            $facture_tva = (int)readline("Veuillez saisir le montant TVA de la facture : ");
            $this->facture->setTVA($facture_tva);

            if($this->facture->getHasTVA()){
                $facture_ttc = $facture_ht + ($facture_tva * $facture_ht);
                $this->facture->setTTC($facture_ttc);
            }else{
                $this->facture->setTTC($facture_ht);
            }
            $this->generateFacture();
            exit;
        }
    }

    private function   generateFacture() : void
    {
        print_r( 
            $this->client->getName() . " " .
            $this->client->getAddress() ." " .
            $this->prestataire->getName() ." " .
            $this->prestataire->getAddress() ." " .
            $this->facture->getID() ." " .
            $this->facture->getDesignation() ." " .
            $this->facture->getDate() ." " .
            $this->facture->getHT() ." " .
            $this->facture->getHasTVA() ." " .
            $this->facture->getTVA() ." " .
            $this->facture->getTTC() ." "
        );
    }
}