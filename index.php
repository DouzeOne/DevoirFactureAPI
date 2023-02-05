<?php
require_once __DIR__ . '/vendor/autoload.php';
$client = new App\Entity\Client();
$prestataire = new App\Entity\Prestataire();
$facture = new App\Entity\Facture();

$command = new App\Command\GeneratorCommand($client, $prestataire, $facture);
$command->generate();
