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
$description = $_POST['description'];
$etat = $_POST['etat'];
$priorite = $_POST['priorite'];
$date_creation = $_POST['date_creation'];
$telephone = $_POST['telephone'];
$adresse = $_POST['adresse'];
$id_tech = $_POST['id_tech'];
$titre = $_POST['titre'];


// Requête SQL pour insérer les données dans la base de données

$sql = "INSERT INTO demandes(nom,description,etat,priorite,date_creation,telephone,adresse,id_tech,titre) VALUES ('$nom','$description','$etat','$priorite','$date_creation','$telephone','$adresse','$id_tech','$titre')";

if ($connexion->query($sql) === TRUE) {
 header('Location: form-components.php');

} else {
    echo "Erreur lors de l'inscription' : " . $connexion->error;
}

// Fermer la connexion à la base de données

$connexion->close();
?>


