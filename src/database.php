<?php



$servername = "localhost";
$username = "barke";
$password = "123456";
$dbname = "facture";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error . PHP_EOL);
}

//Creation base
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    echo ("Base de données créée avec succès". PHP_EOL);
} else {
    echo ("Erreur lors de la création de la base de données: " . $conn->error . PHP_EOL);
}

$conn->select_db($dbname);

//Creation Tables
$sql = "CREATE TABLE IF NOT EXISTS client (
    c_name VARCHAR(50) NOT NULL,
    c_adresse VARCHAR(200) NOT NULL
)";
if ($conn->query($sql) === TRUE) {
    echo ("Table cliens créée avec succès". PHP_EOL);
} else {
    echo ("Erreur lors de la création de la table des client: " . $conn->error. PHP_EOL);
}

$sql = "CREATE TABLE IF NOT EXISTS facture (
    f_id INT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    f_date  datetime NOT NULL,
    f_tva INT(20) NOT NULL,
    f_designation TEXT NOT NULL
)";
if ($conn->query($sql) === TRUE) {
    echo ("Table facture créée avec succès". PHP_EOL);
} else {
    echo ("Erreur lors de la création de la table facture: " . $conn->error. PHP_EOL);
}
$sql = "CREATE TABLE IF NOT EXISTS prestataire (
    p_name VARCHAR(50) NOT NULL,
    p_adresse VARCHAR(200) NOT NULL
)";
if ($conn->query($sql) === TRUE) {
    echo ("Table prestataire créée avec succès". PHP_EOL);
} else {
    echo ("Erreur lors de la création de la table des prestataire: " . $conn->error. PHP_EOL);
}

//insertion

$client = [
    ['c_name' => 'Barke', 'c_adresse' => 'Paris'],
];

    if($conn->query($sql) === TRUE){
        echo ("Données insérées avec succès". PHP_EOL);
    } else {
        echo ("Erreur: " . $conn->error . PHP_EOL);
    }

$facture = [
    ['f_id' => '001', 'f_date' => '14/02/2023', 'f_tva' => '18', 'f_designation' => 'payee'],
];

    if($conn->query($sql) === TRUE){
        echo ("Données insérées avec succès". PHP_EOL);
    } else {
        echo ("Erreur: " . $conn->error . PHP_EOL);
    }

    $prestataire = [
        ['p_name' => 'Eminem', 'p_adresse' => 'USA'],
    ];
    
        if($conn->query($sql) === TRUE){
            echo ("Données insérées avec succès". PHP_EOL);
        } else {
            echo ("Erreur: " . $conn->error . PHP_EOL);
        }



