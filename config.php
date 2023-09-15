<?php
// Informations de configuration de la base de données
define('DB_HOST', 'ftp-technicien.alwaysdata.net'); // Nom de l'hôte de la base de données
define('DB_USER', 'technicien'); // Nom d'utilisateur de la base de données
define('DB_PASS', 'qwerty@1234567890'); // Mot de passe de la base de données
define('DB_NAME', 'technicien_bd'); // Nom de la base de données

$conn = new mysqli($serveur, $utilisateur, $motDePasse, $baseDeDonnees);

// Autres configurations
define('SITE_URL', 'http://technicien.alwaysdata.net/'); // URL de votre site

// ... d'autres constantes de configuration si nécessaire
?>
