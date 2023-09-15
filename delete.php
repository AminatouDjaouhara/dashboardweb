<?php
// Inclure le fichier de configuration de la base de données si nécessaire
$serveur = "mysql-technicien.alwaysdata.net";
$utilisateur = "326466";
$mot_de_passe = "qwerty@1234567890";
$base_de_donnees = "technicien_bd";

$connexion = new mysqli($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);

// Vérification de la connexion à la base de données
if ($connexion->connect_error) {
    die("La connexion à la base de données a échoué : " . $connexion->connect_error);
} // Assurez-vous d'ajuster le nom du fichier si besoin

// Vérifiez si un ID d'utilisateur est passé en paramètre
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    // Supprimez l'utilisateur avec l'ID spécifié
    $id_utilisateur = $_GET['id'];

    $sql = "DELETE FROM technicien WHERE id = $id_utilisateur";
 //update technicien set nom=$nom,............, where id=
    if ($connexion->query($sql) === TRUE) {
        header('Location: tables.php');
    } else {
        echo "Erreur lors de la suppression de l'utilisateur : " . $connexion->error;
    }
} else {
    echo "ID d'utilisateur invalide.";
}

// Fermer la connexion à la base de données
$connexion->close();
?>
