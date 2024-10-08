<?php
require_once "vendor/autoload.php";

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;
use Doctrine\ORM\Tools\Console\ConsoleRunner;

// Définir le chemin vers les entités
$paths = [__DIR__ . '/src/Entity'];

// Configuration de la connexion à la base de données
$dbParams = [
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => '',
    'dbname'   => 'field_report',
    'host'     => '127.0.0.1',     // Assure-toi que l'hôte est défini
    'port'     => '3306',
];

// Configuration de Doctrine
$config = ORMSetup::createAttributeMetadataConfiguration(
    $paths, // Chemin vers les entités
    true    // Mode développement
);

// Création de l'EntityManager
try {
    $entityManager = EntityManager::create($dbParams, $config);
} catch (\Doctrine\ORM\Exception\ORMException $e) {
    echo "Erreur lors de la création de l'EntityManager : " . $e->getMessage();
    exit(1);
}

// Retourner le Console Runner
return ConsoleRunner::createHelperSet($entityManager);