<?php
// Connexion à la base de données (vous devrez ajouter les informations de connexion appropriées)
$serveur = "mysql-technicien.alwaysdata.net";
$utilisateur = "326466";
$mot_de_passe = "qwerty@1234567890";
$base_de_donnees = "technicien_bd";

$connexion = new mysqli($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);

// Vérification de la connexion à la base de données
if ($connexion->connect_error) {
    die("La connexion à la base de données a échoué : " . $connexion->connect_error);
}
// Récupération des données du formulaire

$nom = $_POST['nom'];
$sexe = $_POST['sexe'];
$adresse = $_POST['adresse'];
$telephone = $_POST['telephone'];


// Requête SQL pour insérer les données dans la base de données
$sql = "INSERT INTO technicien(nom,sexe,adresse,telephone,statut) VALUES ('$nom', '$sexe', '$adresse', '$telephone', 'disponible')";

if ($connexion->query($sql) === TRUE) {
 header('Location: tables.php');

} else {
    echo "Erreur lors de l'inscription : " . $connexion->error;
}

// Fermer la connexion à la base de données
$connexion->close();
?>


