<?php

use Doctrine\Migrations\Configuration\Configuration;
use Doctrine\Migrations\DependencyFactory;

// Inclure votre fichier de configuration CLI
$helperSet = require 'cli-config.php';

// Récupérer l'EntityManager
$entityManager = $helperSet->getEntityManager();

// Configurer les migrations
$config = new Configuration($entityManager->getConnection());
$config->addMigrationClass('doctrine_migration_versions'); // Nom de l'espace pour les migrations
$config->addMigrationsDirectory('Migrations', __DIR__ . '/migrations'); // Dossier où les fichiers de migration seront stockés

// Créer le DependencyFactory pour les migrations
$dependencyFactory = DependencyFactory::fromEntityManager($config, $entityManager);

// Retourner le DependencyFactory
return $dependencyFactory;
